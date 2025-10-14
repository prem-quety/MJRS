<!-- TOPBAR -->
<section class="absolute top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-2
      bg-white/60 backdrop-blur-md border-b border-gray-200/60">
        <div class="flex gap-6 text-xs md:text-sm text-brand-black/70">
            <a href="tel:+19054603756" class="hover:text-brand-red transition">+1 (905) 460-3756</a>
            <a href="tel:+16478880883" class="hover:text-brand-red transition">+1 (647) 888-0883</a>
            <a href="mailto:info@mjrsassociates.ca" class="hover:text-brand-red transition">info@mjrsassociates.ca</a>
        </div>
        <a href="./open-new-incorporation" class="hidden md:inline-flex items-center rounded-md bg-brand-red px-4 py-1.5 text-xs md:text-sm font-semibold text-white
        hover:bg-red-600 transition focus:outline-none focus:ring-2 focus:ring-red-300">
            Open Incorporation
        </a>
    </div>
</section>

<!-- NAVBAR -->
<header id="navbar" class="absolute top-[42px] left-0 right-0 z-40">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4
      bg-white/70 backdrop-blur-md border border-gray-200/70 rounded-2xl shadow-sm">
        <a href="/" class="flex items-center">
            <img src="./assets/images/logo.png" alt="MJRS Logo" class="h-12 md:h-14 w-auto" />
        </a>
        <nav class="hidden md:flex items-center gap-10 text-sm font-medium uppercase tracking-wide text-brand-black/90">
            <a href="./" class="hover:text-brand-red transition">Home</a>
            <a href="#services" class="hover:text-brand-red transition">Services</a>
            <a href="#taxes" class="hover:text-brand-red transition">Personal Taxes</a>
            <a href="#incorporation" class="hover:text-brand-red transition">Incorporation</a>
            <a href="#about" class="hover:text-brand-red transition">About</a>
            <a href="#contact" class="hover:text-brand-red transition">Contact</a>
        </nav>
        <button id="menu-btn"
            class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-brand-black/80">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
    <div id="mobile-menu"
        class="md:hidden max-w-7xl mx-auto px-6 mt-4 transform transition-all duration-300 ease-out origin-top scale-y-0 opacity-0 pointer-events-none">
        <div
            class="bg-white/90 backdrop-blur-md border border-gray-200 rounded-xl p-4 flex flex-col gap-3 text-sm font-medium shadow-lg">
            <a href="./" class="py-2 hover:text-brand-red">Home</a>
            <a href="#services" class="py-2 hover:text-brand-red">Services</a>
            <a href="#taxes" class="py-2 hover:text-brand-red">Personal Taxes</a>
            <a href="#incorporation" class="py-2 hover:text-brand-red">Incorporation</a>
            <a href="#about" class="py-2 hover:text-brand-red">About</a>
            <a href="#contact" class="py-2 hover:text-brand-red">Contact</a>
        </div>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    let menuOpen = false;

    menuBtn.addEventListener('click', () => {
        menuOpen = !menuOpen;
        if (menuOpen) {
            mobileMenu.classList.remove('opacity-0', 'scale-y-0', 'pointer-events-none');
            mobileMenu.classList.add('opacity-100', 'scale-y-100');
        } else {
            mobileMenu.classList.add('opacity-0', 'scale-y-0', 'pointer-events-none');
            mobileMenu.classList.remove('opacity-100', 'scale-y-100');
        }
    });
</script>