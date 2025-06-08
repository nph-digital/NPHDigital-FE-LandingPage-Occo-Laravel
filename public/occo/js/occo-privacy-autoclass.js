document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.privacy-content-autoclass');
    if (!container) return;

    // Tự động thêm class cho tất cả h2
    container.querySelectorAll('h2').forEach(h2 => {
        h2.classList.add('text-xl', 'md:text-2xl', 'font-bold', 'text-[#824DFF]', 'mb-5', 'mt-8');
    });

    // Tự động thêm class cho tất cả ol
    container.querySelectorAll('ol').forEach(ol => {
        ol.classList.add('list-decimal', 'list-inside', 'space-y-2');
    });

    // Tự động thêm class cho tất cả ul
    container.querySelectorAll('ul').forEach(ul => {
        ul.classList.add('list-disc', 'list-inside', 'pl-6', 'mt-2', 'space-y-1');
    });
});
