<!-- Back Top Top Button -->
<button id="to-top-button" onclick="goToTop()" title="Go To Top"
class="hidden fixed z-90 bottom-8 right-8 border-0 w-16 h-16 rounded-lg drop-shadow-md bg-white text-black text-3xl font-bold opacity-70">&uarr;</button>

@push('script-end')
    <script>
    var toTopButton = document.getElementById("to-top-button");

    window.onscroll = function () {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    }

    function goToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    </script>
@endpush
