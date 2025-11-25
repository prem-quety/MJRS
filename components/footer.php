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
                <img src="./assets/images/logo_white.png" alt="MJRS Associates" class="w-36">
            </a>
            <p class="text-gray-400 text-sm leading-relaxed">
                MJRS Associates is a financial engineering and advisory firm redefining how Canadian businesses
                handle taxation, compliance, and corporate structuring.
            </p>
        </div>

        <!-- Column 2: Quick Links -->
        <!-- Column 2: Quick Links -->
        <div>
            <h4 class="text-white font-semibold mb-4 text-lg">Services</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="./accounting" class="hover:text-brand-gold transition">
                        Accounting Solutions</a></li>
                <li><a href="./bookkeeping" class="hover:text-brand-gold transition">Strategic Bookkeeping
                        Management</a></li>
                <li><a href="./tax-personal" class="hover:text-brand-gold transition">Personal Tax Structuring </a></li>
                <li><a href="./tax-corporate" class="hover:text-brand-gold transition">Corporate Tax Planning </a></li>
                <li><a href="./advisory" class="hover:text-brand-gold transition">Business Advisory & Growth
                        Consulting</a></li>
                <li><a href="./payroll" class="hover:text-brand-gold transition">Payroll Administration & Workforce
                        Management</a></li>
                <!-- <li><a href="#services" class="hover:text-brand-gold transition">Corporate Tax Architecture</a></li>
                <li><a href="#services" class="hover:text-brand-gold transition">Business Incorporation</a></li>
                <li><a href="#services" class="hover:text-brand-gold transition">Management Accounting</a></li>
                <li><a href="#services" class="hover:text-brand-gold transition">Cross-Border Taxation</a></li>
                <li><a href="#services" class="hover:text-brand-gold transition">Advisory & Forecasting</a></li> -->
            </ul>
        </div>


        <!-- Column 3: Company -->
        <div>
            <h4 class="text-white font-semibold mb-4 text-lg">Company</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="./about" class="hover:text-brand-gold transition">About MJRS</a></li>
                <li><a href="./incorporation" class="hover:text-brand-gold transition">Open Incorporation</a></li>
                <li><a href="./index#faq" class="hover:text-brand-gold transition">FAQs</a></li>
                <li><a href="./contactus" class="hover:text-brand-gold transition">Contact</a></li>
            </ul>
        </div>

        <!-- Column 4: Contact Info -->
        <div>
            <h4 class="text-white font-semibold mb-4 text-lg">Contact</h4>
            <ul class="text-sm space-y-2">
                <li class="text-gray-400">Oakville, Ontario, Canada</li>
                <li><a href="mailto:info@mjrsassociates.ca"
                        class="text-brand-gold hover:underline">info@mjrsassociates.ca</a></li>
                <li><a href="tel:+16478880883" class="hover:text-brand-gold transition">+1 (647) 888-0883</a></li>
                <li><a href="tel:+16474648624" class="hover:text-brand-gold transition">+1 (647) 464-8624</a></li>
                <li><a href="tel:+16474606865" class="hover:text-brand-gold transition">+1 (647) 460-6865</a></li>

            </ul>
            <div class="flex items-center gap-4 mt-5">
                <!-- Lucide: Facebook -->
                <a href="https://www.facebook.com/profile.php?id=100054524526342" aria-label="Facebook"
                    class="text-gray-400 hover:text-brand-gold transition" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
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
    <div class="relative z-10 mt-16 border-t border-gray-800 pt-6 text-center text-sm text-gray-400 space-y-2">

        <p class="text-gray-300 font-medium tracking-wide">
            MJRS Associates <span class="text-brand-gold">CPA & Consultants</span>
        </p>

        <p class="text-gray-400">
            Professional Accounting • Bookkeeping • Payroll • Advisory • Oakville, ON — Serving Canada-Wide
        </p>

        <p class="text-gray-500 text-xs mt-2">
            © <span id="year"></span> MJRS Associates. All Rights Reserved.
            <span class="ml-1">Powered by <a class="text-orange-600 hover:underline"
                    href="https://querytel.com/">Querytel Inc.</a></span>
        </p>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

</footer>