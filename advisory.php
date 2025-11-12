<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Business Advisory – MJRS Associates | Strategy You Can Operate";
$page_description = "Practical advisory for owners and operators: financial clarity, decision frameworks, and execution support that moves the numbers.";
$page_keywords = "Business Advisory Canada, Consulting for SMEs, Financial Strategy, Decision Frameworks, MJRS Associates";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/single-service/advisory";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";

include('./components/head.php');
?>

<body class="font-body bg-white text-brand-black antialiased">

    <?php include('./components/navbar.php'); ?>

    <main class="pt-[50px]">

        <!-- HERO -->
        <section
            class="relative flex items-center justify-center min-h-[60vh] overflow-hidden border-b border-gray-200">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image:url('./assets/images/corporate.jpg');"></div>
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black/30"></div>
            <!-- Subtle Grid -->
            <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image:
            linear-gradient(to right, rgba(255,255,255,0.12) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255,255,255,0.12) 1px, transparent 1px);
            background-size: 40px 40px;"></div>
            <!-- Glow -->
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-red/20 rounded-full blur-[140px]"></div>

            <!-- Copy -->
            <div class="relative z-10 max-w-4xl px-6 text-center text-white">
                <span class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide
                bg-white/10 text-white border border-white/20 backdrop-blur-sm" style="animation-delay:.2s">
                    Business Advisory / Consulting
                </span>

                <h1 class="fade-up text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05]"
                    style="animation-delay:.5s">
                    Fewer Slides. <span class="text-brand-gold">Stronger Decisions.</span>
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-100 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay:.8s">
                    Advisory that translates finance into action—clarity on where you are, what to do next, and how to
                    measure progress.
                </p>
            </div>
        </section>

        <!-- BRAND STRIP -->
        <section class="relative flex flex-col md:flex-row overflow-hidden border-t border-gray-200">
            <!-- Left (Logo) -->
            <div class="bg-[#353639] flex items-center justify-center w-full md:w-1/3 py-24">
                <div class="text-center px-6">
                    <img src="./assets/images/logo.png" alt="MJRS Associates Logo"
                        class="mx-auto w-56 md:w-72 drop-shadow-md transition-transform duration-300 hover:scale-105" />
                </div>
            </div>
            <!-- Right (Benefits) -->
            <div class="bg-gray-50 w-full md:w-2/3 flex items-center">
                <div class="max-w-xl px-10 md:px-16 py-20">
                    <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3">Built for owners &
                        operators</span>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-8 leading-snug">
                        Turn numbers into narratives—and <span class="text-brand-red">narratives into moves</span>.
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-lg font-light">
                        <li class="border-b border-gray-200 pb-3">Strategy you can actually execute next week</li>
                        <li class="border-b border-gray-200 pb-3">Cash, pricing, and ops decisions backed by data</li>
                        <li>Simple scorecards—so the team knows what “good” looks like</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- SERVICE DETAIL -->
        <section class="relative py-28 bg-white border-t border-gray-200">
            <!-- Subtle Grid -->
            <div class="absolute inset-0 opacity-[0.3]" style="background-image:
            linear-gradient(to right, rgba(229,229,229,0.3) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(229,229,229,0.3) 1px, transparent 1px);
            background-size: 40px 40px;"></div>
            <!-- Gold Glow -->
            <div class="absolute -top-32 -left-32 w-[26rem] h-[26rem] bg-brand-gold/10 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12 items-start">

                <!-- Sticky Sidebar -->
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
                            <li><a href="./tax-personal" class="block px-5 py-3 hover:text-brand-red transition">Tax
                                    Preparation –
                                    Personal</a></li>
                            <li><a href="./tax-corporate" class="block px-5 py-3 hover:text-brand-red transition">Tax
                                    Preparation –
                                    Corporate</a></li>
                            <li><a href="./advisory"
                                    class="block px-5 py-3 bg-brand-red/10 text-brand-red font-medium">Business
                                    Advisory</a></li>
                            <li><a href="./payroll" class="block px-5 py-3 hover:text-brand-red transition">Payroll
                                    Services</a></li>
                        </ul>
                    </div>

                    <div class="rounded-2xl bg-brand-black text-white p-8 text-center shadow-sm">
                        <p class="text-xs uppercase tracking-wide text-brand-gold mb-2">Not sure where to start?</p>
                        <h4 class="text-lg font-semibold leading-snug mb-4">
                            30-minute advisory call—<br><span class="text-brand-gold">no jargon, just signal.</span>
                        </h4>
                        <a href="./contact"
                            class="inline-block border border-brand-gold text-brand-gold px-6 py-2 rounded-full text-sm font-semibold hover:bg-brand-gold hover:text-brand-black transition">
                            Book Now
                        </a>
                    </div>
                </aside>

                <!-- Main Story -->
                <article class="md:col-span-2 space-y-14">

                    <!-- Header -->
                    <header>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-brand-black mb-3 tracking-tight">
                            Financial & Strategic Advisory for Sustainable Growth
                        </h1>
                        <p class="text-xl text-brand-red font-semibold mb-3">
                            Data-driven insight. Forward-thinking solutions.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed max-w-3xl">
                            At MJRS Associates, we provide more than advice — we deliver clarity, control, and
                            confidence. Our advisory
                            practice helps business leaders align financial systems with strategic objectives, optimize
                            performance, and
                            prepare for long-term growth or transition. Whether you’re scaling, restructuring, or
                            planning succession, our
                            role is to ensure every decision is informed by precision and foresight.
                        </p>
                    </header>

                    <!-- Image -->
                    <figure class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm">
                        <img src="./assets/images/Picture3.jpg" alt="Financial & Strategic Advisory"
                            class="w-full object-cover">
                    </figure>

                    <!-- Core Advisory Capabilities -->
                    <!-- Core Advisory Capabilities -->
                    <section class="space-y-6">
                        <div class="flex items-center gap-3 mb-4">
                            <i data-lucide="bar-chart-3" class="icon-base text-brand-red"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Core Advisory Capabilities</h2>
                        </div>
                        <ul class="space-y-4 text-gray-700 text-[1.05rem] leading-relaxed">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Performance Measurement & Financial
                                        Insight:</strong> We design KPI
                                    frameworks that give measurable, real-time visibility into performance. Monthly
                                    analytics and variance
                                    reviews help you lead with data — not assumption.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Budgeting, Forecasting & Cash Flow
                                        Modelling:</strong> We create
                                    integrated financial models for decision-making, liquidity control, and long-term
                                    planning with clear
                                    identification of risk and opportunity.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Operational & Financial System Design:</strong>
                                    We architect efficient,
                                    scalable infrastructures — integrating automation, transparency, and audit
                                    readiness.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Growth, Acquisition & Exit Strategy:</strong>
                                    From expansion to
                                    succession, we provide valuation insights, tax-aligned structures, and transaction
                                    support for smooth,
                                    compliant transitions.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Governance, Risk & Compliance Advisory:</strong>
                                    We establish governance
                                    frameworks, risk registers, and internal controls that safeguard compliance and
                                    strengthen investor
                                    confidence.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- How MJRS Strengthens Your Organization -->
                    <section class="space-y-6 mt-12">
                        <div class="flex items-center gap-3 mb-4">
                            <i data-lucide="shield-check" class="icon-base text-brand-red"></i>
                            <h2 class="text-3xl font-bold text-brand-black">How MJRS Strengthens Your Organization</h2>
                        </div>
                        <ul class="space-y-4 text-gray-700 text-[1.05rem] leading-relaxed">
                            <li class="flex items-start gap-3">
                                <i data-lucide="arrow-right-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Insight-Driven Decisions:</strong> We transform
                                    complex data into actionable
                                    intelligence for executives and boards.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="arrow-right-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Tailored Solutions:</strong> Every engagement is
                                    customized to your
                                    structure, scale, and industry.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="arrow-right-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">End-to-End Integration:</strong> Advisory that
                                    connects bookkeeping, tax,
                                    compliance, and operational excellence.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="arrow-right-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Technology-Enabled Oversight:</strong>
                                    Cloud-based analytics and secure data
                                    systems for visibility and control.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="arrow-right-circle" class="icon-list text-brand-red"></i>
                                <span><strong class="text-brand-black">Experienced Professionals:</strong>
                                    Multi-disciplinary experts with deep
                                    experience in finance, compliance, and strategic planning.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- Add this to your global <style> or Tailwind layer -->
                    <style>
                        .icon-base {
                            width: 1.4rem;
                            /* ~22px */
                            height: 1.4rem;
                            flex-shrink: 0;
                            position: relative;
                            top: 0.05rem;
                        }

                        .icon-list {
                            width: 1.25rem;
                            /* ~20px */
                            height: 1.25rem;
                            flex-shrink: 0;
                            position: relative;
                            top: 0.15rem;
                        }
                    </style>


                    <!-- Strategic Advantage -->
                    <section class="space-y-6 mt-12">
                        <div class="flex items-center gap-2 mb-4">
                            <i data-lucide="compass" class="w-6 h-6 text-brand-red"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Strategic Advantage</h2>
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed max-w-3xl">
                            Partnering with MJRS Associates means gaining a long-term ally in your organization’s growth
                            and governance.
                            We bring the structure of accounting, the precision of compliance, and the foresight of
                            strategic advisory —
                            ensuring every decision you make is defensible, data-driven, and forward-focused.
                        </p>
                    </section>

                    <!-- Who We Partner With -->
                    <section class="space-y-6 mt-12">
                        <div class="flex items-center gap-2 mb-4">
                            <i data-lucide="users" class="w-6 h-6 text-brand-red"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Who We Partner With</h2>
                        </div>
                        <ul class="grid sm:grid-cols-2 gap-y-2 text-gray-700 text-[1.05rem]">
                            <li class="flex items-center gap-2"><i data-lucide="dot"
                                    class="w-4 h-4 text-brand-red"></i>Owner-managed and
                                mid-sized corporations</li>
                            <li class="flex items-center gap-2"><i data-lucide="dot"
                                    class="w-4 h-4 text-brand-red"></i>Professional service
                                firms</li>
                            <li class="flex items-center gap-2"><i data-lucide="dot"
                                    class="w-4 h-4 text-brand-red"></i>Construction, trade,
                                and logistics companies</li>
                            <li class="flex items-center gap-2"><i data-lucide="dot"
                                    class="w-4 h-4 text-brand-red"></i>Real estate and
                                investment groups</li>
                            <li class="flex items-center gap-2"><i data-lucide="dot"
                                    class="w-4 h-4 text-brand-red"></i>Non-profit and
                                community organizations</li>
                            <li class="flex items-center gap-2"><i data-lucide="dot"
                                    class="w-4 h-4 text-brand-red"></i>Startups scaling to
                                the next stage of growth</li>
                        </ul>
                    </section>

                    <!-- Begin Your Strategic Transformation -->
                    <section class="bg-gray-50 rounded-2xl p-10 border border-gray-200 text-center mt-14">
                        <div class="flex items-center justify-center gap-2 mb-4">
                            <i data-lucide="sparkles" class="w-6 h-6 text-brand-red"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Begin Your Strategic Transformation</h2>
                        </div>
                        <p class="text-gray-700 text-lg mb-6 max-w-2xl mx-auto">
                            Ready to align your financial systems with strategy and create a roadmap for sustainable
                            success?
                            Schedule a confidential discussion with our advisory team today.
                        </p>
                        <p class="font-medium text-brand-black flex items-center justify-center gap-3 mb-6">
                            <i data-lucide="phone" class="w-5 h-5 text-brand-red"></i> (647) 888-0883
                            <span class="text-gray-400">|</span>
                            <i data-lucide="mail" class="w-5 h-5 text-brand-red"></i> info@mjrsassociates.ca
                        </p>
                        <a href="./contact"
                            class="inline-block px-10 py-3 rounded-full border border-brand-red text-brand-red font-semibold hover:bg-brand-red hover:text-white transition">
                            Schedule a Strategic Consultation →
                        </a>
                    </section>

                </article>


            </div>
        </section>

        <script> lucide.createIcons(); </script>

        <!-- CONTACT FORM CTA -->
        <?php include('./components/form.php'); ?>

        <!-- FOOTER -->
        <?php include('./components/footer.php'); ?>

    </main>
</body>

</html>