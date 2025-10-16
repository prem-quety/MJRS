<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Personal Tax – MJRS Associates | T1 Returns Done Right";
$page_description = "T1 filing without the scramble: accurate returns, proper credits, and CRA-compliant records for individuals and families.";
$page_keywords = "Personal Tax Return T1 Canada, Tax Credits, RRSP, Capital Gains, Rental Income, CRA Filing, MJRS Associates";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/single-service/tax-personal";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";

include('./components/head.php');
?>

<body class="font-body bg-white text-brand-black antialiased">

    <?php include('./components/navbar.php'); ?>

    <main class="pt-[50px]">

        <!-- HERO SECTION -->
        <section
            class="relative flex items-center justify-center min-h-[60vh] bg-gray-50 overflow-hidden border-b border-gray-200">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('./assets/images/corporate.jpg');"></div>

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black/30"></div>

            <!-- Subtle Pattern -->
            <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image:
                linear-gradient(to right, rgba(255,255,255,0.12) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.12) 1px, transparent 1px);
                background-size: 40px 40px;">
            </div>

            <!-- Red Glow -->
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-red/20 rounded-full blur-[140px]"></div>

            <!-- Content -->
            <div class="relative z-10 max-w-4xl px-6 text-center text-white">
                <span class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide
                    bg-white/10 text-white border border-white/20 backdrop-blur-sm" style="animation-delay: 0.2s">
                    Personal Tax Preparation (T1)
                </span>

                <h1 class="fade-up text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05]"
                    style="animation-delay: 0.5s">
                    T1 Returns Done Right.<br>
                    <span class="text-brand-gold">No Guesswork. No Scramble.</span>
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-100 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay: 0.8s;">
                    Accurate filings, optimized credits, and CRA-compliant documentation for individuals and families.
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

            <!-- Right: Quick benefits -->
            <div class="bg-gray-50 w-full md:w-2/3 flex items-center">
                <div class="max-w-xl px-10 md:px-16 py-20">
                    <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3">Why it matters</span>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-8 leading-snug">
                        Maximize credits. Minimize errors. <span class="text-brand-red">Sleep better.</span>
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-lg font-light">
                        <li class="border-b border-gray-200 pb-3">Complete T1 prep with slip matching (T4, T5, T3, etc.)
                        </li>
                        <li class="border-b border-gray-200 pb-3">RRSP, tuition, donation, and family benefits
                            optimization</li>
                        <li class="pb-0">Capital gains, rental income, and self-employment schedules handled properly
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- SERVICE DETAIL SECTION -->
        <section class="relative py-28 bg-white border-t border-gray-200">
            <!-- Subtle Grid -->
            <div class="absolute inset-0 opacity-[0.3]" style="background-image:
                linear-gradient(to right, rgba(229,229,229,0.3) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(229,229,229,0.3) 1px, transparent 1px);
                background-size: 40px 40px;"></div>

            <!-- Gold Glow -->
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
                                    class="block px-5 py-3 hover:text-brand-red transition">Accounting</a></li>
                            <li><a href="./bookkeeping"
                                    class="block px-5 py-3 hover:text-brand-red transition">Bookkeeping</a></li>
                            <li><a href="./tax-personal"
                                    class="block px-5 py-3 bg-brand-red/10 text-brand-red font-medium">Tax Preparation –
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
                        <p class="text-xs uppercase tracking-wide text-brand-gold mb-2">File early. File clean.</p>
                        <h4 class="text-lg font-semibold leading-snug mb-4">
                            Avoid last-minute stress<br><span class="text-brand-gold">and costly reassessments</span>
                        </h4>
                        <a href="./contact"
                            class="inline-block border border-brand-gold text-brand-gold px-6 py-2 rounded-full text-sm font-semibold hover:bg-brand-gold hover:text-brand-black transition">
                            Book a Consultation
                        </a>
                    </div>
                </aside>

                <!-- MAIN CONTENT -->
                <article class="md:col-span-2 space-y-12">
                    <!-- HEADER -->
                    <header>
                        <h1 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-4">
                            Personal Tax Preparation (T1)
                        </h1>
                        <p class="text-lg text-gray-700 leading-relaxed max-w-3xl">
                            We prepare accurate T1 returns that maximize credits and deductions while keeping your
                            documentation CRA-ready. Individuals, families, students, newcomers — we file for real life.
                        </p>
                    </header>

                    <!-- IMAGE -->
                    <figure class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm">
                        <img src="./assets/images/finservices.webp" alt="Personal Tax Preparation"
                            class="w-full object-cover">
                    </figure>

                    <!-- STORY BODY (from saved content, tightened for web) -->
                    <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
                        <p>
                            Your tax season shouldn’t be a scavenger hunt. We match slips, organize your documents, and
                            prepare schedules for employment, investments, rental properties, and self-employment — then
                            file on time with the proper documentation in place.
                        </p>
                        <p>
                            We look for optimization opportunities (RRSP room, tuition transfers, childcare amounts,
                            medical claims, donation strategies) and explain the trade-offs in plain English so you know
                            what changed and why.
                        </p>
                        <p>
                            If the CRA asks questions, you won’t be left to fend for yourself. Your file will be
                            organized, reconciled, and ready for review — because we prepare like an audit could happen.
                        </p>
                    </div>

                    <!-- DELIVERABLES -->
                    <div class="pl-6 border-l-4 border-brand-red space-y-3">
                        <h3 class="text-2xl font-bold text-brand-black">What’s Included</h3>
                        <p class="text-gray-700 leading-relaxed">
                            T1 return preparation and e-file; slip matching (T4, T5, T3, RL-slips where applicable);
                            RRSP, tuition, donation, and dependent credit optimization; capital gains/losses schedules;
                            rental and self-employment statements; tax summary with next-year tips.
                        </p>
                    </div>

                    <!-- WHO IT’S FOR -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <p class="text-brand-black font-semibold text-lg mb-2">Best for</p>
                        <p class="text-gray-700">
                            Employees with multiple slips, investors with gains/dividends, rental owners,
                            students/newcomers, and families who want clean, optimized returns and fewer surprises.
                        </p>
                    </div>

                    <!-- FAQ SHORT -->
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-brand-black">Quick Answers</h3>
                        <details
                            class="group bg-white border border-gray-200 rounded-xl p-5 hover:shadow-sm transition">
                            <summary class="flex items-center justify-between cursor-pointer list-none">
                                <span class="font-medium text-brand-black">When do you suggest filing?</span>
                                <i data-lucide="chevron-down"
                                    class="w-4 h-4 text-gray-500 group-open:rotate-180 transition-transform"></i>
                            </summary>
                            <div class="mt-3 text-gray-700">
                                As early as your slips are available. Self-employed? File by June 15 but pay by April 30
                                to avoid interest.
                            </div>
                        </details>
                        <details
                            class="group bg-white border border-gray-200 rounded-xl p-5 hover:shadow-sm transition">
                            <summary class="flex items-center justify-between cursor-pointer list-none">
                                <span class="font-medium text-brand-black">Will you help if CRA follows up?</span>
                                <i data-lucide="chevron-down"
                                    class="w-4 h-4 text-gray-500 group-open:rotate-180 transition-transform"></i>
                            </summary>
                            <div class="mt-3 text-gray-700">
                                Yes. We have an audit-ready package, and we can discuss requests related to your return
                                with the CRA.
                            </div>
                        </details>
                    </div>
                </article>
            </div>
        </section>

        <!-- PRICING SECTION (optional tiers for T1) -->
        <section class="relative py-28 bg-white border-t border-gray-200">
            <!-- Background Accent -->
            <div class="absolute inset-0 opacity-[0.3]" style="background-image:
                linear-gradient(to right, rgba(229,229,229,0.3) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(229,229,229,0.3) 1px, transparent 1px);
                background-size: 40px 40px;"></div>
            <div class="absolute -top-40 right-0 w-[26rem] h-[26rem] bg-brand-gold/10 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black mb-6">
                    Simple <span class="text-brand-red">Pricing</span> for T1 Filing
                </h2>
                <p class="text-lg md:text-xl text-gray-700 font-light max-w-3xl mx-auto mb-12 leading-relaxed">
                    Transparent tiers based on complexity. We’ll confirm your tier before we start.
                </p>

                <div class="grid md:grid-cols-3 gap-10">
                    <!-- Essential -->
                    <div
                        class="bg-white border border-gray-200 rounded-3xl p-10 shadow-sm hover:shadow-md transition-all duration-300">
                        <h3 class="text-xl font-bold text-brand-black mb-2">Essential</h3>
                        <p class="text-gray-600 mb-6">Straightforward T1 with common credits.</p>
                        <div class="text-4xl font-extrabold text-brand-black mb-1">$0</div>
                        <div class="h-0.5 w-12 bg-brand-red mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-700 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> T1 + Slip Matching</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Basic Credit Optimization</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> E-file + Summary</li>
                        </ul>
                        <a href="./contact"
                            class="inline-block w-full text-center py-3 rounded-full border border-brand-red text-brand-red font-semibold hover:bg-brand-red hover:text-white transition">
                            Get Started
                        </a>
                    </div>

                    <!-- Optimized (Most Popular) -->
                    <div
                        class="bg-brand-black text-white border-2 border-brand-gold rounded-3xl p-10 shadow-lg relative transform md:-translate-y-3 hover:-translate-y-4 transition-all duration-300">
                        <div
                            class="absolute top-0 right-0 bg-brand-gold text-brand-black text-xs font-semibold px-3 py-1 rounded-bl-xl">
                            Most Popular</div>
                        <h3 class="text-xl font-bold mb-2 text-brand-gold">Optimized</h3>
                        <p class="text-gray-300 mb-6">Investments, tuition transfers, donations, dependents.</p>
                        <div class="text-4xl font-extrabold text-white mb-1">$0</div>
                        <div class="h-0.5 w-12 bg-brand-gold mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-200 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Advanced Credits & RRSP Strategy</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Capital Gains/Loss Schedules</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Next-Year Planning Notes</li>
                        </ul>
                        <a href="./contact"
                            class="inline-block w-full text-center py-3 rounded-full bg-brand-gold text-brand-black font-semibold hover:bg-white transition">
                            Get Started
                        </a>
                    </div>

                    <!-- Comprehensive -->
                    <div
                        class="bg-white border border-gray-200 rounded-3xl p-10 shadow-sm hover:shadow-md transition-all duration-300">
                        <h3 class="text-xl font-bold text-brand-black mb-2">Comprehensive</h3>
                        <p class="text-gray-600 mb-6">Rental & self-employment statements included.</p>
                        <div class="text-4xl font-extrabold text-brand-black mb-1">$0</div>
                        <div class="h-0.5 w-12 bg-brand-red mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-700 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Rental/Self-Employment Schedules</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Full Documentation Package</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> CRA Follow-Up Support</li>
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
            // Initialize lucide icons (script tag is in head.php)
            lucide.createIcons();
        </script>

        <!-- CONTACT FORM CTA -->
        <?php include('./components/form.php'); ?>

        <!-- FOOTER -->
        <?php include('./components/footer.php'); ?>

    </main>
</body>

</html>