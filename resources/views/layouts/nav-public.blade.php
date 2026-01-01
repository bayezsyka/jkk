<!-- NAVBAR -->
<nav id="navbar" class="fixed inset-x-0 top-0 z-50 transition-all duration-300">
    <div class="mx-auto max-w-7xl px-6">
        <div id="navInner" class="relative flex h-16 items-center">

            <!-- LOGO (LEFT - ONLY WHEN SCROLLED) -->
            <a id="navLogo" href="/" class="absolute left-0 hidden items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
            </a>

            <!-- DESKTOP LINKS (CENTER on TOP, RIGHT on SCROLL) -->
            <div id="navLinks"
                class="hidden lg:flex items-center gap-8 text-sm font-medium text-white transition-all duration-300">
                <a href="#home" class="hover:text-white/80">Home</a>
                <a href="#about" class="hover:text-white/80">About</a>
                <a href="#services" class="hover:text-white/80">Services</a>
                <a href="#contact" class="hover:text-white/80">Contact</a>
            </div>

            <!-- MOBILE BUTTON (always right) -->
            <button id="menuBtn"
                class="lg:hidden absolute right-0 rounded-lg p-2 text-white hover:bg-white/10 transition"
                aria-label="Menu" aria-expanded="false">

                <svg id="iconHamburger" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg id="iconClose" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden lg:hidden pb-4">
            <div class="mt-2 rounded-2xl bg-white/95 p-4 shadow backdrop-blur">
                <div class="flex flex-col gap-2 text-sm text-slate-700">
                    <a href="#home" class="rounded-lg px-3 py-2 hover:bg-slate-100">Home</a>
                    <a href="#about" class="rounded-lg px-3 py-2 hover:bg-slate-100">About</a>
                    <a href="#services" class="rounded-lg px-3 py-2 hover:bg-slate-100">Services</a>
                    <a href="#contact" class="rounded-lg px-3 py-2 hover:bg-slate-100">Contact</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    (function() {
        const navbar = document.getElementById('navbar');
        const navLinks = document.getElementById('navLinks');
        const navLogo = document.getElementById('navLogo');

        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const iconHamburger = document.getElementById('iconHamburger');
        const iconClose = document.getElementById('iconClose');

        function applyTopMode() {
            // Navbar transparan
            navbar.className = "fixed inset-x-0 top-0 z-50 transition-all duration-300";

            // Logo hide
            navLogo.classList.add('hidden');

            // Links ke tengah dengan warna putih
            navLinks.classList.remove('absolute', 'right-0', 'text-slate-700');
            navLinks.classList.add('absolute', 'left-1/2', '-translate-x-1/2', 'text-white');

            // Update link hover states
            const links = navLinks.querySelectorAll('a');
            links.forEach(link => {
                link.classList.remove('hover:text-slate-900');
                link.classList.add('hover:text-white/80');
            });

            // Mobile button warna putih
            menuBtn.classList.remove('text-slate-700', 'hover:bg-slate-100');
            menuBtn.classList.add('text-white', 'hover:bg-white/10');
        }

        function applyScrolledMode() {
            // Navbar ada background
            navbar.className =
                "fixed inset-x-0 top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200 shadow-sm transition-all duration-300";

            // Logo tampil
            navLogo.classList.remove('hidden');

            // Links ke kanan dengan warna gelap
            navLinks.classList.remove('left-1/2', '-translate-x-1/2', 'text-white');
            navLinks.classList.add('absolute', 'right-0', 'text-slate-700');

            // Update link hover states
            const links = navLinks.querySelectorAll('a');
            links.forEach(link => {
                link.classList.remove('hover:text-white/80');
                link.classList.add('hover:text-slate-900');
            });

            // Mobile button warna gelap
            menuBtn.classList.remove('text-white', 'hover:bg-white/10');
            menuBtn.classList.add('text-slate-700', 'hover:bg-slate-100');
        }

        function setNavbar() {
            const top = window.scrollY <= 10;
            if (top) applyTopMode();
            else applyScrolledMode();
        }

        function closeMenu() {
            mobileMenu.classList.add('hidden');
            iconHamburger.classList.remove('hidden');
            iconClose.classList.add('hidden');
            menuBtn.setAttribute('aria-expanded', 'false');
        }

        function toggleMenu() {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                iconHamburger.classList.add('hidden');
                iconClose.classList.remove('hidden');
                menuBtn.setAttribute('aria-expanded', 'true');
            } else {
                closeMenu();
            }
        }

        // Init
        setNavbar();
        window.addEventListener('scroll', setNavbar, {
            passive: true
        });

        // Mobile menu
        menuBtn.addEventListener('click', toggleMenu);

        // Close mobile menu on link click
        mobileMenu.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') closeMenu();
        });

        // Close menu on resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) closeMenu();
        });
    })();
</script>
