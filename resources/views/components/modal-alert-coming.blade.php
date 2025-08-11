<!-- Simple modal UI (non-component) -->
<div id="coming-modal" class="fixed inset-0 z-[100] hidden" aria-hidden="true">
  <!-- Backdrop -->
  <div id="coming-backdrop" class="absolute inset-0 bg-primary/50 backdrop-blur-sm opacity-0 transition-opacity duration-200"></div>

  <!-- Center container -->
  <div class="absolute inset-0 flex items-center justify-center p-4">
    <!-- Card -->
    <div id="coming-dialog" role="dialog" aria-modal="true" aria-labelledby="coming-modal-title"
         class="relative w-full max-w-sm bg-white rounded-3xl shadow-xl overflow-hidden opacity-0 scale-95 translate-y-2 transition-all duration-200">
      <div class="p-6 sm:p-7 text-center">
        <h3 id="coming-modal-title" class="text-xl font-extrabold text-gray-900">Thông báo</h3>
        <p class="mt-2 text-gray-500">Sắp ra mắt</p>

        <button type="button"
                class="mt-6 w-full select-none rounded-2xl bg-[#824DFF] px-5 py-3 text-white font-semibold shadow-sm hover:bg-[#6f3df7] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#824DFF]"
                onclick="closeComingModal()">
          OK
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  function openComingModal() {
    var modal = document.getElementById('coming-modal');
    var backdrop = document.getElementById('coming-backdrop');
    var dialog = document.getElementById('coming-dialog');
    if (!modal || !backdrop || !dialog) return;
    modal.classList.remove('hidden');
    requestAnimationFrame(function () {
      backdrop.classList.remove('opacity-0');
      backdrop.classList.add('opacity-100');
      dialog.classList.remove('opacity-0', 'scale-95', 'translate-y-2');
      dialog.classList.add('opacity-100', 'scale-100', 'translate-y-0');
    });
  }
  function closeComingModal() {
    var modal = document.getElementById('coming-modal');
    var backdrop = document.getElementById('coming-backdrop');
    var dialog = document.getElementById('coming-dialog');
    if (!modal || !backdrop || !dialog) return;
    backdrop.classList.add('opacity-0');
    backdrop.classList.remove('opacity-100');
    dialog.classList.add('opacity-0', 'scale-95', 'translate-y-2');
    dialog.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
    var onEnd = function (e) {
      // ensure both transitions have ended
      modal.classList.add('hidden');
      dialog.removeEventListener('transitionend', onEnd);
    };
    dialog.addEventListener('transitionend', onEnd);
  }
  // Click backdrop to close
  document.addEventListener('mousedown', function (e) {
    var overlay = document.getElementById('coming-modal');
    var backdrop = document.getElementById('coming-backdrop');
    if (!overlay) return;
    if (!overlay.classList.contains('hidden') && (e.target === overlay || e.target === backdrop)) {
      closeComingModal();
    }
  });
</script>
