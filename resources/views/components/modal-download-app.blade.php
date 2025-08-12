<!-- Simple modal UI (non-component) -->
<div id="download-modal" class="fixed inset-0 z-[100] hidden" aria-hidden="true">
    <!-- Backdrop -->
    <div id="download-backdrop"
        class="absolute inset-0 bg-primary/50 backdrop-blur-sm opacity-0 transition-opacity duration-200"></div>

    <!-- Center container -->
    <div class="absolute inset-0 flex items-center justify-center p-4">
        <!-- Card -->
        <div id="download-dialog" role="dialog" aria-modal="true" aria-labelledby="download-modal-title"
            class="relative w-full max-w-sm bg-white rounded-3xl shadow-xl overflow-hidden opacity-0 scale-95 translate-y-2 transition-all duration-200">
            <div class="p-6 sm:p-7 text-center">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 z-20">
                    <a href="#"
                        class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                        <img src="{{ asset('occo/home/chplay.png') }}" alt="CH Play" class="mr-2 w-6">
                        <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                                class="text-lg font-bold">CH Play</span></span>
                    </a>
                    <a href="#"
                        class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                        <img src="{{ asset('occo/home/apple.png') }}" alt="App Store" class="mr-2 w-6">
                        <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                                class="text-lg font-bold">iOS</span></span>
                    </a>
                </div>

                <button type="button"
                    class="mt-6 w-full select-none rounded-2xl bg-[#824DFF] px-5 py-3 text-white font-semibold shadow-sm hover:bg-[#6f3df7] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#824DFF]"
                    onclick="closeDownloadModal()">
                    Đóng
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openDownloadModal() {
        var modal = document.getElementById('download-modal');
        var backdrop = document.getElementById('download-backdrop');
        var dialog = document.getElementById('download-dialog');
        if (!modal || !backdrop || !dialog) return;
        modal.classList.remove('hidden');
        requestAnimationFrame(function() {
            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');
            dialog.classList.remove('opacity-0', 'scale-95', 'translate-y-2');
            dialog.classList.add('opacity-100', 'scale-100', 'translate-y-0');
        });
    }

    function closeDownloadModal() {
        var modal = document.getElementById('download-modal');
        var backdrop = document.getElementById('download-backdrop');
        var dialog = document.getElementById('download-dialog');
        if (!modal || !backdrop || !dialog) return;
        backdrop.classList.add('opacity-0');
        backdrop.classList.remove('opacity-100');
        dialog.classList.add('opacity-0', 'scale-95', 'translate-y-2');
        dialog.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
        var onEnd = function(e) {
            // ensure both transitions have ended
            modal.classList.add('hidden');
            dialog.removeEventListener('transitionend', onEnd);
        };
        dialog.addEventListener('transitionend', onEnd);
    }
    // Click backdrop to close
    document.addEventListener('mousedown', function(e) {
        var overlay = document.getElementById('download-modal');
        var backdrop = document.getElementById('download-backdrop');
        if (!overlay) return;
        if (!overlay.classList.contains('hidden') && (e.target === overlay || e.target === backdrop)) {
            closeDownloadModal();
        }
    });
</script>
