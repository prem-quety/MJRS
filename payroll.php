<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Payroll Services – MJRS Associates | Accurate. On-Time. Compliant.";
$page_description = "End-to-end payroll services for Canadian businesses: pay runs, CRA remittances, ROEs, T4/T4A filing, and clean audit trails.";
$page_keywords = "Payroll Canada, CRA Payroll Remittance, T4 Filing, ROE, Direct Deposit, Payroll Compliance, MJRS Associates";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/single-service/payroll";
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
            <!-- Red Glow -->
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-red/20 rounded-full blur-[140px]"></div>

            <!-- Copy -->
            <div class="relative z-10 max-w-4xl px-6 text-center text-white">
                <span class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide
                bg-white/10 text-white border border-white/20 backdrop-blur-sm" style="animation-delay:.2s">
                    Payroll Services
                </span>

                <h1 class="fade-up text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05]"
                    style="animation-delay:.5s">
                    Pay People Right. <span class="text-brand-gold">Every Time.</span>
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-100 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay:.8s;">
                    Accurate pay runs, on-time remittances, and clear records—so your team is happy and your books are
                    calm.
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
                    <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3">What you’ll notice</span>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-8 leading-snug">
                        Zero payroll drama. <span class="text-brand-red">Clean audit trails.</span>
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-lg font-light">
                        <li class="border-b border-gray-200 pb-3">Direct deposits that land on time</li>
                        <li class="border-b border-gray-200 pb-3">CRA remittances and filings handled</li>
                        <li>Simple reports your accountant (and you) will actually use</li>
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
                            <li><a href="./advisory" class="block px-5 py-3 hover:text-brand-red transition">Business
                                    Advisory</a></li>
                            <li><a href="./payroll"
                                    class="block px-5 py-3 bg-brand-red/10 text-brand-red font-medium">Payroll
                                    Services</a></li>
                        </ul>
                    </div>

                    <div class="rounded-2xl bg-brand-black text-white p-8 text-center shadow-sm">
                        <p class="text-xs uppercase tracking-wide text-brand-gold mb-2">Onboarding in days</p>
                        <h4 class="text-lg font-semibold leading-snug mb-4">
                            We migrate your staff data,<br><span class="text-brand-gold">then run your first pay
                                cycle.</span>
                        </h4>
                        <a href="./contact"
                            class="inline-block border border-brand-gold text-brand-gold px-6 py-2 rounded-full text-sm font-semibold hover:bg-brand-gold hover:text-brand-black transition">
                            Get a Payroll Quote
                        </a>
                    </div>
                </aside>

                <!-- Main Story -->
                <article class="md:col-span-2 space-y-12">
                    <!-- Header -->
                    <header>
                        <h1 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-4">
                            Payroll Services
                        </h1>
                        <p class="text-lg text-gray-700 leading-relaxed max-w-3xl">
                            We handle the mechanics—earnings, deductions, benefits, and taxes—so your people get paid
                            correctly and your ledgers stay clean. Fewer manual steps, fewer “where did the money go?”
                            moments.
                        </p>
                    </header>

                    <!-- Image -->
                    <figure class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm">
                        <img src="./assets/images/finservices.webp" alt="Payroll Operations"
                            class="w-full object-cover">
                    </figure>

                    <!-- Narrative -->
                    <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
                        <p>
                            Pay cycles are routine—until they aren’t. New hires, terminations, overtime, benefits, ROEs,
                            and rate changes can turn a simple run into a mini-project. We keep it boring in the best
                            way: accurate inputs, automated checks, and review-ready records.
                        </p>
                        <p>
                            Your finance team gets mapped GL postings. Your managers get clear summaries. Your staff
                            gets paid on time. And you get a predictable cadence you don’t have to chase.
                        </p>
                    </div>

                    <!-- Pillars -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="rounded-2xl border border-gray-200 p-6">
                            <i data-lucide="badge-dollar-sign" class="w-6 h-6 text-brand-red mb-3"></i>
                            <h3 class="font-semibold text-brand-black mb-2">Pay Runs</h3>
                            <p class="text-gray-700 text-base">Hourly & salary, overtime, vacation, bonuses,
                                reimbursements.</p>
                        </div>
                        <div class="rounded-2xl border border-gray-200 p-6">
                            <i data-lucide="file-check-2" class="w-6 h-6 text-brand-red mb-3"></i>
                            <h3 class="font-semibold text-brand-black mb-2">Filings & Remittances</h3>
                            <p class="text-gray-700 text-base">CPP/EI/Tax, T4/T4A slips, ROEs, year-end summaries,
                                records retention.</p>
                        </div>
                        <div class="rounded-2xl border border-gray-200 p-6">
                            <i data-lucide="lock" class="w-6 h-6 text-brand-red mb-3"></i>
                            <h3 class="font-semibold text-brand-black mb-2">Controls</h3>
                            <p class="text-gray-700 text-base">Approval workflows, dual checks, and audit-ready exports.
                            </p>
                        </div>
                    </div>

                    <!-- Deliverables -->
                    <div class="pl-6 border-l-4 border-brand-red space-y-3">
                        <h3 class="text-2xl font-bold text-brand-black">What’s Included</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Employee onboarding & updates, scheduled pay runs (weekly/biweekly/semimonthly/monthly),
                            statutory holiday handling, benefits & deductions mapping, CRA remittances, ROE preparation,
                            T4/T4A year-end filing, and GL export for your accounting system.
                        </p>
                    </div>

                    <!-- Mini FAQ -->
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-brand-black">Quick Answers</h3>
                        <details
                            class="group bg-white border border-gray-200 rounded-xl p-5 hover:shadow-sm transition">
                            <summary class="flex items-center justify-between cursor-pointer list-none">
                                <span class="font-medium text-brand-black">Can you work with our current payroll
                                    platform?</span>
                                <i data-lucide="chevron-down"
                                    class="w-4 h-4 text-gray-500 group-open:rotate-180 transition-transform"></i>
                            </summary>
                            <div class="mt-3 text-gray-700">
                                Yes—we typically integrate with primary Canadian payroll tools. If you’re switching,
                                we’ll migrate safely.
                            </div>
                        </details>
                        <details
                            class="group bg-white border border-gray-200 rounded-xl p-5 hover:shadow-sm transition">
                            <summary class="flex items-center justify-between cursor-pointer list-none">
                                <span class="font-medium text-brand-black">How do approvals and changes work?</span>
                                <i data-lucide="chevron-down"
                                    class="w-4 h-4 text-gray-500 group-open:rotate-180 transition-transform"></i>
                            </summary>
                            <div class="mt-3 text-gray-700">
                                You’ll get a pre-run summary for sign-off. Changes are logged, re-checked, and reflected
                                in the GL export.
                            </div>
                        </details>
                    </div>

                    <!-- CTA Panel -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <p class="text-brand-black font-semibold text-lg mb-2">Ready to simplify payroll?</p>
                        <p class="text-gray-700 mb-6">
                            We’ll map your pay rules, stand up controls, and run a clean first cycle—without disrupting
                            operations.
                        </p>
                        <a href="./contact"
                            class="inline-flex items-center px-6 py-3 rounded-full bg-brand-red text-white font-semibold hover:bg-brand-black transition">
                            <i data-lucide="calendar" class="w-4 h-4 mr-2"></i> Start Onboarding
                        </a>
                    </div>
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