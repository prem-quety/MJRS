<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Accounting – MJRS Associates | Financial Statements & Controls";
$page_description = "Accounting that turns numbers into decisions: formal financial statements, audit-ready controls, and clear visibility into performance.";
$page_keywords = "Accounting Toronto, Financial Statements Canada, Cash Flow, Balance Sheet, Income Statement, MJRS Associates";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/single-service/accounting";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";

include('./components/head.php');
?>

<body class="font-body bg-white text-brand-black antialiased">

    <?php include('./components/navbar.php'); ?>

    <main class="pt-[50px]">

        <!-- HERO SECTION (keeps your darker look, updated copy) -->
        <section
            class="relative flex items-center justify-center min-h-[60vh] bg-gray-50 overflow-hidden border-b border-gray-200">

            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('./assets/images/corporate.jpg');"></div>

            <!-- Dark Overlay for readability -->
            <div class="absolute inset-0 bg-black/30"></div>

            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image:
                linear-gradient(to right, rgba(255,255,255,0.12) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.12) 1px, transparent 1px);
                background-size: 40px 40px;">
            </div>

            <!-- Glow -->
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-red/20 rounded-full blur-[140px]"></div>

            <!-- Hero Content -->
            <div class="relative z-10 max-w-4xl px-6 text-center text-white">
                <span class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide
                    bg-white/10 text-white border border-white/20 backdrop-blur-sm" style="animation-delay: 0.2s">
                    Professional Accounting Services
                </span>

                <h1 class="fade-up text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05]"
                    style="animation-delay: 0.5s">
                    Accounting That Turns<br>
                    <span class="text-brand-gold">Numbers Into Decisions</span>
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-100 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay: 0.8s;">
                    Formal financial statements, audit-ready controls, and clear visibility into performance — built for
                    lenders, investors, and CRA.
                </p>
            </div>
        </section>

        <!-- BRAND STRIP WITH LOGO & BENEFITS -->
        <section class="relative flex flex-col md:flex-row overflow-hidden border-t border-gray-200">

            <!-- Left: Logo block -->
            <div class="bg-[#353639] flex items-center justify-center w-full md:w-1/3 py-24">
                <div class="text-center px-6">
                    <img src="./assets/images/logo.png" alt="MJRS Associates Logo"
                        class="mx-auto w-56 md:w-72 drop-shadow-md transition-transform duration-300 hover:scale-105" />
                </div>
            </div>

            <!-- Right: Accounting benefits -->
            <div class="bg-gray-50 w-full md:w-2/3 flex items-center">
                <div class="max-w-xl px-10 md:px-16 py-20">
                    <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3">What you gain</span>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-8 leading-snug">
                        Clear financials. Faster decisions. <span class="text-brand-red">Fewer surprises.</span>
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-lg font-light">
                        <li class="border-b border-gray-200 pb-3">Monthly/Quarterly Income Statement, Balance Sheet,
                            Cash Flow</li>
                        <li class="border-b border-gray-200 pb-3">Adjusting entries & accruals matched to reality</li>
                        <li class="border-b border-gray-200 pb-3">Variance analysis vs. budget and prior periods</li>
                        <li class="pb-0">Year-end working papers ready for tax filing or review</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- SERVICE DETAIL SECTION -->
        <section class="relative py-28 bg-white border-t border-gray-200">
            <!-- Subtle Grid Background -->
            <div class="absolute inset-0 opacity-[0.3]" style="background-image:
                linear-gradient(to right, rgba(229,229,229,0.3) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(229,229,229,0.3) 1px, transparent 1px);
                background-size: 40px 40px;"></div>

            <!-- Gold Glow Accent -->
            <div class="absolute -top-32 -left-32 w-[26rem] h-[26rem] bg-brand-gold/10 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12 items-start">

                <!-- SIDEBAR (sticky) -->
                <aside class="hidden md:block sticky top-24 self-start space-y-8 h-fit">
                    <div class="rounded-2xl border border-gray-200 overflow-hidden shadow-sm">
                        <div
                            class="bg-brand-black text-white font-semibold text-sm px-5 py-3 tracking-wide flex items-center">
                            <i data-lucide="star" class="w-4 h-4 mr-2 text-brand-gold"></i> OUR SERVICES
                        </div>
                        <ul class="divide-y divide-gray-100 text-sm">
                            <li><a href="./accounting"
                                    class="block px-5 py-3 bg-brand-red/10 text-brand-red font-medium">Accounting</a>
                            </li>
                            <li><a href="./bookkeeping"
                                    class="block px-5 py-3 hover:text-brand-red transition">Bookkeeping</a></li>
                            <li><a href="./tax-personal" class="block px-5 py-3 hover:text-brand-red transition">Tax
                                    Preparation –
                                    Personal</a></li>
                            <li><a href="./tax-corporate" class="block px-5 py-3 hover:text-brand-red transition">Tax
                                    Preparation –
                                    Corporate</a></li>
                            <li><a href="./advisory" class="block px-5 py-3 hover:text-brand-red transition">Business
                                    Advisory</a></li>
                            <li><a href="./payroll" class="block px-5 py-3 hover:text-brand-red transition">Payroll
                                    Services</a></li>
                        </ul>
                    </div>

                    <div class="rounded-2xl bg-brand-black text-white p-8 text-center shadow-sm">
                        <p class="text-xs uppercase tracking-wide text-brand-gold mb-2">Ready to begin?</p>
                        <h4 class="text-lg font-semibold leading-snug mb-4">Build your financial baseline<br><span
                                class="text-brand-gold">the right way</span></h4>
                        <a href="./contact"
                            class="inline-block border border-brand-gold text-brand-gold px-6 py-2 rounded-full text-sm font-semibold hover:bg-brand-gold hover:text-brand-black transition">
                            Book a Consultation
                        </a>
                    </div>
                </aside>

                <!-- MAIN CONTENT -->
                <article class="md:col-span-2 space-y-12">

                    <!-- HEADER (uses your saved messaging) -->
                    <header>
                        <h1 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-4">
                            Accounting That Turns Numbers Into Decisions
                        </h1>
                        <p class="text-lg text-gray-700 leading-relaxed max-w-3xl">
                            Formal financial statements, audit-ready controls, and clear visibility into performance. We
                            design statements for decisions,
                            not just for filing — giving owners, lenders, and investors the clarity they need to move
                            with confidence.
                        </p>
                    </header>

                    <!-- IMAGE -->
                    <figure class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm">
                        <img src="./assets/images/finservices.webp" alt="Accounting Team" class="w-full object-cover">
                    </figure>

                    <!-- STORY BODY -->
                    <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
                        <p>
                            Good accounting is less about the ledger and more about the signal. Each month, we translate
                            activity into a narrative:
                            where margins are holding, where cash is tightening, and where decisions need to be made.
                            The result is reporting you
                            can actually lead with.
                        </p>
                        <p>
                            Your statements reflect reality, not just the bank balance. Accruals, deferrals, and review
                            procedures ensure timing
                            is correct and insights are comparable month-to-month. Variance analysis then highlights
                            what changed — and why.
                        </p>
                        <p>
                            By year-end, working papers are complete and tax-ready. No reconstruction. No mystery
                            balances. Just a clean trail that
                            reduces risk and speeds up filing.
                        </p>
                    </div>

                    <!-- FOCUS STRIP -->
                    <div class="pl-6 border-l-4 border-brand-red space-y-3">
                        <h3 class="text-2xl font-bold text-brand-black">What You Get</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Income Statement, Balance Sheet, and Cash Flow; adjusting entries and accruals; variance
                            analysis against budget and prior periods;
                            year-end working papers; and practical control guidance to reduce errors and risk.
                        </p>
                    </div>

                    <!-- CLOSING NOTE -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <p class="text-brand-black font-semibold text-lg mb-2">Outcome: clarity, speed, control.</p>
                        <p class="text-gray-700">
                            Clean financials mean fewer surprises and faster decisions. When your numbers tell a clear
                            story, execution follows.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <!-- PRICING SECTION (tailored to Accounting) -->
        <section class="relative py-28 bg-white border-t border-gray-200">
            <!-- Background Accent -->
            <div class="absolute inset-0 opacity-[0.3]" style="background-image:
                linear-gradient(to right, rgba(229,229,229,0.3) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(229,229,229,0.3) 1px, transparent 1px);
                background-size: 40px 40px;"></div>
            <div class="absolute -top-40 right-0 w-[26rem] h-[26rem] bg-brand-gold/10 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black mb-6">
                    Accounting <span class="text-brand-red">Plans</span> That Scale With You
                </h2>
                <p class="text-lg md:text-xl text-gray-700 font-light max-w-3xl mx-auto mb-12 leading-relaxed">
                    Pick a monthly cadence and switch to annual any time. Statements you can run the business on.
                </p>

                <!-- Billing Toggle -->
                <div class="flex justify-center items-center gap-4 mb-16">
                    <span class="text-sm font-medium text-gray-700">Monthly</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" id="billingToggle" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full
                            after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border
                            after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-red">
                        </div>
                    </label>
                    <span class="text-sm font-medium text-gray-700">Annual <span
                            class="text-brand-red text-xs font-semibold ml-1">Save 17%</span></span>
                </div>

                <!-- Pricing Grid -->
                <div class="grid md:grid-cols-3 gap-10">
                    <!-- Essentials -->
                    <div
                        class="bg-white border border-gray-200 rounded-3xl p-10 shadow-sm hover:shadow-md transition-all duration-300">
                        <h3 class="text-xl font-bold text-brand-black mb-2">Essentials</h3>
                        <p class="text-gray-600 mb-6">For small teams needing clean, reliable monthly statements.</p>
                        <div class="text-4xl font-extrabold text-brand-black mb-1 price" data-monthly="129"
                            data-annual="107">
                            $129<span class="text-lg font-medium text-gray-500">/month</span>
                        </div>
                        <div class="h-0.5 w-12 bg-brand-red mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-700 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Monthly IS & BS</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Bank/Credit Reconciliations</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Basic Accrual Adjustments</li>
                        </ul>
                        <a href="./contact"
                            class="inline-block w-full text-center py-3 rounded-full border border-brand-red text-brand-red font-semibold hover:bg-brand-red hover:text-white transition">
                            Get Started
                        </a>
                    </div>

                    <!-- Growth (Most Popular) -->
                    <div
                        class="bg-brand-black text-white border-2 border-brand-gold rounded-3xl p-10 shadow-lg relative transform md:-translate-y-3 hover:-translate-y-4 transition-all duration-300">
                        <div
                            class="absolute top-0 right-0 bg-brand-gold text-brand-black text-xs font-semibold px-3 py-1 rounded-bl-xl">
                            Most Popular</div>
                        <h3 class="text-xl font-bold mb-2 text-brand-gold">Growth</h3>
                        <p class="text-gray-300 mb-6">For growing companies that need analysis, not just reporting.</p>
                        <div class="text-4xl font-extrabold text-white mb-1 price" data-monthly="199" data-annual="165">
                            $199<span class="text-lg font-medium text-gray-400">/month</span>
                        </div>
                        <div class="h-0.5 w-12 bg-brand-gold mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-200 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> IS, BS & Cash Flow</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Variance Analysis & KPI Summary</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Month-End Review Call</li>
                        </ul>
                        <a href="./contact"
                            class="inline-block w-full text-center py-3 rounded-full bg-brand-gold text-brand-black font-semibold hover:bg-white transition">
                            Get Started
                        </a>
                    </div>

                    <!-- Executive -->
                    <div
                        class="bg-white border border-gray-200 rounded-3xl p-10 shadow-sm hover:shadow-md transition-all duration-300">
                        <h3 class="text-xl font-bold text-brand-black mb-2">Executive</h3>
                        <p class="text-gray-600 mb-6">For enterprises needing audit-ready papers and leadership support.
                        </p>
                        <div class="text-4xl font-extrabold text-brand-black mb-1 price" data-monthly="249"
                            data-annual="207">
                            $249<span class="text-lg font-medium text-gray-500">/month</span>
                        </div>
                        <div class="h-0.5 w-12 bg-brand-red mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-700 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Full IS/BS/CF + Schedules</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Year-End Working Papers</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Control Guidance & CRA-Ready Trail</li>
                        </ul>
                        <a href="./contact"
                            class="inline-block w-full text-center py-3 rounded-full border border-brand-gold text-brand-gold font-semibold hover:bg-brand-gold hover:text-brand-black transition">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script>


            // Toggle pricing logic
            const toggle = document.getElementById('billingToggle');
            const prices = document.querySelectorAll('.price');
            toggle.addEventListener('change', () => {
                prices.forEach(price => {
                    const monthly = price.getAttribute('data-monthly');
                    const annual = price.getAttribute('data-annual');
                    const newPrice = toggle.checked ? annual : monthly;
                    price.innerHTML = `$${newPrice}<span class="text-lg font-medium text-gray-500">/${toggle.checked ? 'month (billed annually)' : 'month'}</span>`;
                });
            });
        </script>


        <?php include('./components/form.php'); ?>


        <?php include('./components/footer.php'); ?>

    </main>
</body>

</html>