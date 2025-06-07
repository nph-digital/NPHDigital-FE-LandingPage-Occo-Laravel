#!/bin/bash

# Luôn chuyển về thư mục chứa script để đảm bảo chạy đúng vị trí
cd "$(dirname "$0")"

# Xóa log cũ trước khi chạy
# Đã bỏ ghi log, không cần dòng này nữa

# Tự động chuyển CRLF về LF nếu phát hiện lỗi dòng Windows
if grep -q $'\r' "$0"; then
    echo "Phát hiện ký tự CRLF (Windows). Đang chuyển về LF..."
    if command -v dos2unix >/dev/null 2>&1; then
        dos2unix "$0"
    else
        sed -i 's/\r$//' "$0"
    fi
    echo "Đã chuyển xong. Vui lòng chạy lại script!"
    exit 1
fi

echo "Đang kiểm tra kết nối đến repository..."
if ! git ls-remote origin -h refs/heads/develop &> /dev/null; then
    echo "Không thể kết nối đến repository! Quá trình cập nhật đã bị hủy bỏ."
    exit 1
else
    echo "Kết nối đến repository thành công! Tiếp tục cập nhật..."
fi

# Kiểm tra APP_ENV và APP_DEBUG trong file .env
if [ -f ".env" ]; then
    ENV_APP_ENV=$(grep '^APP_ENV=' .env | cut -d '=' -f2)
    ENV_APP_DEBUG=$(grep '^APP_DEBUG=' .env | cut -d '=' -f2)
    if [ "$ENV_APP_ENV" != "production" ] || [ "$ENV_APP_DEBUG" != "false" ]; then
        echo "\033[0;31mCảnh báo: APP_ENV phải là 'production' và APP_DEBUG phải là 'false' trong file .env. Dừng cập nhật!\033[0m"
        exit 1
    fi
else
    echo "Không tìm thấy file .env để kiểm tra cấu hình môi trường!"
    exit 1
fi

echo "Đưa website vào chế độ bảo trì với secret cố định... (occo)"
php artisan down --secret="occo"

echo "Đang sao lưu file .env..."
if [ -f ".env" ]; then
    cp .env .env.backup
    echo "Đã sao lưu file .env thành công!"
else
    echo "Không tìm thấy file .env, vui lòng kiểm tra lại cấu hình!"
    exit 1
fi

echo "Đang cập nhật code mới..."
git reset --hard # Reset lại repo để loại bỏ các thay đổi cục bộ
git clean -fd --exclude=.env.backup # Xóa các file không được theo dõi nhưng giữ lại file .env.backup
git fetch origin develop # Lấy code mới nhất từ remote
# Luôn ưu tiên code trên remote, loại bỏ mọi thay đổi local (kể cả khi có conflict)
git reset --hard origin/develop

# Khai báo mảng chứa các file/folder cần xóa
FILES_TO_REMOVE=(
    ".history"
    ".cursor"
    ".qodo"
    ".trae"
    ".windsurf"
    ".vscode"
    "Documents"
    "SQL_Backup"
    ".cursorignore"
    ".cursorrules"
    ".env.testing"
    ".windsurfrules"
    ".windsurfrules.bak"
    "###NOTE.md"
    "auto_send-request.sh"
    "build.sh"
    "git.sh"
    "log_production.log"
    "send_mail.ps1"
    "send_mail.sh"
    "treeview.sh"
    "treeview.txt"
)

# Hiển thị thông báo với danh sách đã format
echo "Đang xoá các file/folder không cần thiết:"
printf -- "- %s\n" "${FILES_TO_REMOVE[@]}"

# Xóa tất cả file/folder trong danh sách
rm -rf "${FILES_TO_REMOVE[@]}"

echo "Đang khôi phục file .env cũ..."
if [ -f ".env.backup" ]; then
    cp .env.backup .env
    echo "Đã khôi phục file .env thành công!"
else
    echo "Không tìm thấy file .env.backup, vui lòng kiểm tra lại cấu hình!"
    exit 1
fi

echo "Đang cài đặt dependencies PHP..."
composer install --no-dev --optimize-autoloader

echo "Đang chạy migration..."
php artisan migrate --force

echo "Link storage..."
php artisan storage:link

composer dump-autoload

php artisan up

echo "Cập nhật xong, website đã hoạt động trở lại! ✨"