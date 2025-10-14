<!-- FOOTER -->
<footer class="relative bg-brand-black text-gray-300 border-t border-gray-800 pt-20 pb-10 overflow-hidden">
    <!-- Background Grid -->
    <div class="absolute inset-0 opacity-[0.06]" style="background-image:
    linear-gradient(to right, rgba(255,255,255,0.15) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255,255,255,0.15) 1px, transparent 1px);
    background-size: 40px 40px;">
    </div>

    <!-- Glow -->
    <div class="absolute -bottom-20 -right-20 w-[28rem] h-[28rem] bg-brand-red/20 rounded-full blur-[180px]">
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 grid md:grid-cols-4 gap-12">

        <!-- Column 1: Brand -->
        <div class="col-span-2 md:col-span-1">
            <a href="/" class="block mb-5">
                <img src="./assets/images/logo.png" alt="MJRS Associates" class="w-36">
            </a>
            <p class="text-gray-400 text-sm leading-relaxed">
                MJRS Associates is a financial engineering and advisory firm redefining how Canadian businesses
                handle taxation, compliance, and corporate structuring.
            </p>
        </div>

        <!-- Column 2: Quick Links -->
        <div>
            <h4 class="text-white font-semibold mb-4 text-lg">Services</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#services" class="hover:text-brand-gold transition">Corporate Tax Architecture</a>
                </li>
                <li><a href="#services" class="hover:text-brand-gold transition">Business Incorporation</a></li>
                <li><a href="#services" class="hover:text-brand-gold transition">Management Accounting</a></li>
                <li><a href="#services" class="hover:text-brand-gold transition">Cross-Border Taxation</a></li>
                <li><a href="#services" class="hover:text-brand-gold transition">Advisory & Forecasting</a></li>
            </ul>
        </div>

        <!-- Column 3: Company -->
        <div>
            <h4 class="text-white font-semibold mb-4 text-lg">Company</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#about" class="hover:text-brand-gold transition">About MJRS</a></li>
                <li><a href="#cases" class="hover:text-brand-gold transition">Completed Cases</a></li>
                <li><a href="#faq" class="hover:text-brand-gold transition">FAQs</a></li>
                <li><a href="#contact" class="hover:text-brand-gold transition">Contact</a></li>
            </ul>
        </div>

        <!-- Column 4: Contact Info -->
        <div>
            <h4 class="text-white font-semibold mb-4 text-lg">Contact</h4>
            <ul class="text-sm space-y-2">
                <li class="text-gray-400">Toronto, Ontario, Canada</li>
                <li><a href="mailto:info@mjrsassociates.ca"
                        class="text-brand-gold hover:underline">info@mjrsassociates.ca</a></li>
                <li><a href="tel:+14165551234" class="hover:text-brand-gold transition">+1 (416) 555-1234</a>
                </li>
            </ul>
            <div class="flex items-center gap-4 mt-5">
                <!-- Lucide: Linkedin -->
                <a href="#" aria-label="LinkedIn" class="text-gray-400 hover:text-brand-gold transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-4 0v7h-4v-7a6 6 0 016-6z" />
                        <rect x="2" y="9" width="4" height="12" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                </a>
                <!-- Lucide: Mail -->
                <a href="mailto:info@mjrsassociates.ca" aria-label="Email"
                    class="text-gray-400 hover:text-brand-gold transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16v16H4z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                </a>
            </div>
        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="relative z-10 mt-16 border-t border-gray-800 pt-6 text-center text-sm text-gray-500">
        <p>© <span id="year"></span> MJRS Associates. All Rights Reserved.</p>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</footer>