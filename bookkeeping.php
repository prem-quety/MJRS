<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Bookkeeping – MJRS Associates | Clean, Compliant, Month-In, Month-Out";
$page_description = "Bookkeeping that doesn’t break at tax time: daily accuracy, monthly reconciliation, and zero chaos.";
$page_keywords = "Bookkeeping Canada, Reconciliation, AR AP Tracking, GST HST, Financial Reports, MJRS Associates";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/single-service/bookkeeping";
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
                    Professional Bookkeeping Services
                </span>

                <h1 class="fade-up text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05]"
                    style="animation-delay: 0.5s">
                    Bookkeeping That Doesn’t Break<br>
                    <span class="text-brand-gold">at Tax Time</span>
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-100 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay: 0.8s;">
                    Daily accuracy. Monthly reconciliation. Zero chaos.
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

            <!-- Right: Bookkeeping quick benefits -->
            <div class="bg-gray-50 w-full md:w-2/3 flex items-center">
                <div class="max-w-xl px-10 md:px-16 py-20">
                    <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3">What you gain</span>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-8 leading-snug">
                        Up-to-date books. Audit-safe records. <span class="text-brand-red">Easier year-end.</span>
                    </h3>
                    <ul class="space-y-3 text-gray-700 text-lg font-light">
                        <li class="border-b border-gray-200 pb-3">Categorized transactions + bank/credit reconciliations
                        </li>
                        <li class="border-b border-gray-200 pb-3">AR/AP tracking: invoices, bills, vendor payments</li>
                        <li class="border-b border-gray-200 pb-3">Digital receipt capture & secure document storage</li>
                        <li class="pb-0">GST/HST coding and filings coordination + monthly summary of changes</li>
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
                                    class="block px-5 py-3 hover:text-brand-red transition">Accounting</a>
                            </li>
                            <li><a href="./bookkeeping"
                                    class="block px-5 py-3 bg-brand-red/10 text-brand-red font-medium transition">Bookkeeping</a>
                            </li>
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
                        <a href="./contactus"
                            class="inline-block border border-brand-gold text-brand-gold px-6 py-2 rounded-full text-sm font-semibold hover:bg-brand-gold hover:text-brand-black transition">
                            Book a Consultation
                        </a>
                    </div>
                </aside>

                <!-- MAIN CONTENT -->
                <article class="md:col-span-2 space-y-20">
                    <!-- HEADER -->
                    <header class="space-y-4">
                        <div class="flex items-center gap-3">
                            <i data-lucide="briefcase" class="w-7 h-7 text-brand-red"></i>
                            <h1 class="text-3xl md:text-4xl font-heading font-extrabold text-brand-black">
                                Bookkeeping Services
                            </h1>
                        </div>
                        <p class="text-xl text-brand-black font-semibold tracking-tight">
                            Precision. Clarity. Compliance.
                        </p>

                        <p class="text-gray-700 text-lg leading-relaxed max-w-3xl">
                            At MJRS Associates, we don’t just record transactions — we build the financial backbone of
                            your business.
                            Our bookkeeping is audit-ready, compliant, and connected to every aspect of your operations
                            — from payroll and
                            HST/WSIB filings to corporate tax preparation and advisory.
                            Based in Oakville, Ontario, and serving clients across Canada, our team of experienced
                            professionals ensures
                            your books are accurate, organized, and optimized every single month.
                        </p>

                        <p class="text-gray-700 text-lg leading-relaxed max-w-3xl">
                            Business owners should not be burdened with monitoring spreadsheets or reconciling entries.
                            You need financial records that close accurately, reports that provide meaningful insight,
                            and a documentation trail that withstands CRA review. That is the standard our bookkeeping
                            service delivers.
                            Each transaction is recorded and classified in accordance with accounting principles, with
                            every account reconciled on a consistent schedule. Accounts receivable and payable are
                            maintained to ensure steady cash flow and accurate financial positioning. All source
                            documents and receipts are digitized and stored within a secure, audit-ready system to
                            safeguard the integrity of your records.
                            Month-end procedures are completed promptly and properly—never deferred to year-end
                            adjustments. Clients receive concise monthly summaries outlining key variances,
                            reconciliations, and compliance checkpoints, providing a clear and reliable view of the
                            organization’s financial health.

                        </p>
                    </header>

                    <!-- IMAGE -->
                    <figure class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm">
                        <img src="./assets/images/Picture1.jpg" alt="Bookkeeping Services" class="w-full object-cover">
                    </figure>

                    <!-- WHAT WE DO -->
                    <section>
                        <div class="flex items-center gap-2 mb-4">
                            <i data-lucide="layers" class="w-6 h-6 text-brand-gold"></i>
                            <h2 class="text-3xl font-bold text-brand-black">What We Do</h2>
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Our bookkeeping services go beyond data entry — we turn numbers into insight.
                        </p>
                        <ul class="space-y-4 text-gray-700 text-lg">
                            <li class="flex items-start gap-3 leading-relaxed">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span><strong class="text-brand-black">Monthly Bookkeeping & Reconciliation:</strong>
                                    Every transaction recorded, every account reconciled, every report accurate —
                                    month-in, month-out.</span>
                            </li>

                            <li class="flex items-start gap-3 leading-relaxed">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span><strong class="text-brand-black">Payroll, HST & WSIB Filings:</strong>
                                    Timely, compliant submissions so you never miss a remittance or deadline.</span>
                            </li>

                            <li class="flex items-start gap-3 leading-relaxed">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span><strong class="text-brand-black">Tax Preparation & Planning:</strong>
                                    Books structured for year-end efficiency and proactive tax savings.</span>
                            </li>

                            <li class="flex items-start gap-3 leading-relaxed">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span><strong class="text-brand-black">Corporate Filings & Compliance:</strong>
                                    Minute-book management, annual returns, CRA correspondence — handled with
                                    precision.</span>
                            </li>

                            <li class="flex items-start gap-3 leading-relaxed">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span><strong class="text-brand-black">Advisory & Strategy:</strong>
                                    Quarterly reviews and insights to help you forecast, budget, and grow with
                                    confidence.</span>
                            </li>
                        </ul>

                    </section>

                    <!-- WHY CHOOSE -->
                    <section>
                        <div class="flex items-center gap-2 mb-4">
                            <i data-lucide="star" class="w-6 h-6 text-brand-gold"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Why Choose MJRS Associates?</h2>
                        </div>
                        <ul class="space-y-4 text-gray-700 text-lg">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-brand-gold mt-1"></i>
                                <span><strong>Audit-Ready by Design</strong> – Built for accuracy, CRA compliance &
                                    peace of mind.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-brand-gold mt-1"></i>
                                <span><strong>All-in-One Solution</strong> – Bookkeeping, payroll, tax, and advisory —
                                    under one roof.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-brand-gold mt-1"></i>
                                <span><strong>Technology-Driven</strong> – We use QuickBooks Online & Xero for real-time
                                    visibility.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-brand-gold mt-1"></i>
                                <span><strong>Dedicated Account Manager</strong> – Direct access to professionals who
                                    know your books.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check" class="w-5 h-5 text-brand-gold mt-1"></i>
                                <span><strong>Trusted by Businesses Across Canada</strong> – From startups to
                                    established corporations.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- WHO WE SERVE -->
                    <section class="space-y-8">
                        <!-- Heading -->
                        <div class="flex items-center gap-3">
                            <i data-lucide="users" class="w-6 h-6 text-brand-red"></i>
                            <h2 class="text-3xl font-extrabold text-brand-black">Who We Serve</h2>
                        </div>

                        <!-- Intro -->
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Our bookkeeping team supports:
                        </p>

                        <!-- List -->
                        <ul class="grid sm:grid-cols-2 gap-y-4 gap-x-10">
                            <li class="flex items-center gap-3">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span class="text-gray-700 text-lg leading-snug">Small & medium-sized businesses</span>
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span class="text-gray-700 text-lg leading-snug">Construction & trade companies</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span class="text-gray-700 text-lg leading-snug">Startups and entrepreneurs</span>
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span class="text-gray-700 text-lg leading-snug">Family-run corporations and
                                    non-profits</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="flex items-center justify-center w-6 h-6 shrink-0">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-brand-red"></i>
                                </span>
                                <span class="text-gray-700 text-lg leading-snug">Professional service firms (legal,
                                    medical, real estate)</span>
                            </li>
                        </ul>

                        <!-- Outro -->
                        <p class="text-gray-700 text-lg leading-relaxed">
                            No matter your industry, our goal is simple — to make your financial operations seamless.
                        </p>
                    </section>



                    <!-- FAQ -->
                    <section>
                        <div class="flex items-center gap-2 mb-6">
                            <i data-lucide="help-circle" class="w-6 h-6 text-brand-gold"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Frequently Asked Questions</h2>
                        </div>
                        <div class="space-y-5">
                            <!-- FAQ items -->
                            <details
                                class="group bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-sm transition-all">
                                <summary class="flex items-center justify-between cursor-pointer list-none">
                                    <span class="font-medium text-lg text-brand-black">Which software do you use?</span>
                                    <i data-lucide="chevron-down"
                                        class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"></i>
                                </summary>
                                <div class="mt-4 text-gray-700 leading-relaxed">
                                    We are certified partners with <span
                                        class="font-semibold text-brand-black">QuickBooks Online</span> and
                                    <span class="font-semibold text-brand-black">Xero</span> and can migrate from other
                                    platforms seamlessly.
                                </div>
                            </details>

                            <details
                                class="group bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-sm transition-all">
                                <summary class="flex items-center justify-between cursor-pointer list-none">
                                    <span class="font-medium text-lg text-brand-black">Can you work with my accountant
                                        or handle year-end filings directly?</span>
                                    <i data-lucide="chevron-down"
                                        class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"></i>
                                </summary>
                                <div class="mt-4 text-gray-700 leading-relaxed">
                                    Yes — we can collaborate with your CPA or manage year-end in-house for a complete
                                    solution, ensuring seamless
                                    continuity between bookkeeping and tax preparation.
                                </div>
                            </details>

                            <details
                                class="group bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-sm transition-all">
                                <summary class="flex items-center justify-between cursor-pointer list-none">
                                    <span class="font-medium text-lg text-brand-black">How often do you provide
                                        reports?</span>
                                    <i data-lucide="chevron-down"
                                        class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"></i>
                                </summary>
                                <div class="mt-4 text-gray-700 leading-relaxed">
                                    Monthly reports are delivered within <span class="font-semibold">5–7 business
                                        days</span> of month-end,
                                    along with quarterly summaries and advisory reviews for ongoing financial clarity.
                                </div>
                            </details>

                            <details
                                class="group bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-sm transition-all">
                                <summary class="flex items-center justify-between cursor-pointer list-none">
                                    <span class="font-medium text-lg text-brand-black">Do you work remotely?</span>
                                    <i data-lucide="chevron-down"
                                        class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"></i>
                                </summary>
                                <div class="mt-4 text-gray-700 leading-relaxed">
                                    Absolutely — we serve clients across Canada with secure, cloud-based systems,
                                    encrypted storage, and
                                    CRA-compliant data handling.
                                </div>
                            </details>
                        </div>
                    </section>

                    <!-- TEAM -->
                    <section>
                        <div class="flex items-center gap-2 mb-4">
                            <i data-lucide="users" class="w-6 h-6 text-brand-gold"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Meet Our Team</h2>
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Behind MJRS Associates is a multi-disciplinary team of accounting professionals and advisors
                            with over 20 years of
                            combined experience in bookkeeping, tax strategy, and financial consulting. We bring
                            together corporate expertise
                            and a personal touch — because we know your numbers tell your story.
                        </p>
                    </section>

                    <!-- CTA -->
                    <section class="bg-gray-50 rounded-2xl p-10 border border-gray-200 text-center">
                        <div class="flex items-center justify-center gap-2 mb-4">
                            <i data-lucide="sparkles" class="w-6 h-6 text-brand-red"></i>
                            <h2 class="text-3xl font-bold text-brand-black">Ready to Streamline Your Books?</h2>
                        </div>
                        <p class="text-gray-700 text-lg mb-6 max-w-2xl mx-auto">
                            Book a free consultation today and see how we can simplify your financial operations and
                            free up your time to grow your business.
                        </p>
                        <div class="space-y-2">
                            <p class="font-medium text-brand-black flex items-center justify-center gap-3">
                                <i data-lucide="mail" class="w-4 h-4 text-brand-red"></i> info@mjrsassociates.com
                                <span class="text-gray-400">|</span>
                                <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i> (647) 888-0883
                            </p>
                            <a href="./contactus"
                                class="inline-block mt-4 px-8 py-3 rounded-full border border-brand-red text-brand-red font-semibold hover:bg-brand-red hover:text-white transition">
                                Book a Free Consultation
                            </a>
                        </div>
                    </section>
                </article>


            </div>
        </section>

        <!-- PRICING SECTION (Bookkeeping-specific features) -->
        <section class="relative py-28 bg-white border-t border-gray-200">
            <!-- Background Accent -->
            <div class="absolute inset-0 opacity-[0.3]" style="background-image:
        linear-gradient(to right, rgba(229,229,229,0.3) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(229,229,229,0.3) 1px, transparent 1px);
        background-size: 40px 40px;"></div>
            <div class="absolute -top-40 right-0 w-[26rem] h-[26rem] bg-brand-gold/10 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black mb-4">
                    Bookkeeping <span class="text-brand-red">Plans</span> That Stay Organized
                </h2>
                <p class="text-lg md:text-xl text-gray-700 font-light max-w-3xl mx-auto leading-relaxed mb-4">
                    Flexible. Scalable. Tailored to You.
                </p>
                <p class="text-gray-700 max-w-3xl mx-auto mb-12 leading-relaxed">
                    Every business is unique — and so are its books. At MJRS Associates, our bookkeeping plans adapt to
                    your
                    transaction volume, industry, and reporting needs. You can scale services as your business grows —
                    from basic
                    monthly bookkeeping to fully managed compliance and advisory support. Switch or upgrade anytime.
                    We’ll tailor a
                    plan after reviewing your operations during a free consultation.
                </p>

                <!-- Plans Grid -->
                <div class="grid md:grid-cols-3 gap-10">
                    <!-- Core Plan -->
                    <div
                        class="bg-white border border-gray-200 rounded-3xl p-10 shadow-sm hover:shadow-md transition-all duration-300">
                        <h3 class="text-xl font-bold text-brand-black mb-2">Core Plan</h3>
                        <p class="text-gray-600 mb-6">For lean operations seeking accurate, reconciled books.</p>
                        <div class="h-0.5 w-12 bg-brand-red mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-700 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Transaction categorization & posting</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Bank and credit reconciliations</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Month-end closing & reports</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Secure digital recordkeeping</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Dedicated account representative</li>
                        </ul>
                        <a href="./contact"
                            class="inline-block w-full text-center py-3 rounded-full border border-brand-red text-brand-red font-semibold hover:bg-brand-red hover:text-white transition">
                            Book a Free Consultation →
                        </a>
                    </div>

                    <!-- Plus Plan -->
                    <div
                        class="bg-brand-black text-white border-2 border-brand-gold rounded-3xl p-10 shadow-lg relative transform md:-translate-y-3 hover:-translate-y-4 transition-all duration-300">
                        <div
                            class="absolute top-0 right-0 bg-brand-gold text-brand-black text-xs font-semibold px-3 py-1 rounded-bl-xl">
                            Most Popular</div>
                        <h3 class="text-xl font-bold mb-2 text-brand-gold">Plus Plan</h3>
                        <p class="text-gray-300 mb-6">For growing businesses that require AR/AP tracking and filing
                            coordination.</p>
                        <div class="h-0.5 w-12 bg-brand-gold mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-200 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Accounts receivable and payable management</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> GST/HST coding and coordination</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Quarterly compliance review</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Monthly change summary & insights</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Direct advisor access for financial queries
                            </li>
                        </ul>
                        <a href="./contactus"
                            class="inline-block w-full text-center py-3 rounded-full bg-brand-gold text-brand-black font-semibold hover:bg-white transition">
                            Book a Free Consultation →
                        </a>
                    </div>

                    <!-- Complete Plan -->
                    <div
                        class="bg-white border border-gray-200 rounded-3xl p-10 shadow-sm hover:shadow-md transition-all duration-300">
                        <h3 class="text-xl font-bold text-brand-black mb-2">Complete Plan</h3>
                        <p class="text-gray-600 mb-6">For corporations and audit-sensitive environments requiring
                            advanced oversight.</p>
                        <div class="h-0.5 w-12 bg-brand-red mx-auto mb-6"></div>
                        <ul class="space-y-3 text-gray-700 text-sm text-left mb-10">
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Receipt capture & archiving</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Complex reconciliations across accounts</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> CRA-ready documentation & audit trail</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Integrated payroll, WSIB & HST filings</li>
                            <li class="flex items-center gap-2"><i data-lucide="check"
                                    class="w-4 h-4 text-brand-gold"></i> Optional advisory & year-end prep</li>
                        </ul>

                        <a href="./contactus"
                            class="inline-block w-full text-center py-3 rounded-full border border-brand-gold text-brand-gold font-semibold hover:bg-brand-gold hover:text-brand-black transition">
                            Book a Free Consultation →
                        </a>
                    </div>
                </div>

                <!-- Final CTA -->
                <div class="mt-16 text-center max-w-3xl mx-auto">
                    <h3 class="text-2xl font-bold text-brand-black mb-3">Not Sure Which Plan Fits?</h3>
                    <p class="text-gray-700 text-lg mb-4">Let’s discuss your operations and customize a solution that
                        keeps your books accurate, compliant, and ready for growth.</p>
                    <p class="font-medium text-brand-black flex items-center justify-center gap-3 mb-6">
                        <i data-lucide="phone" class="w-5 h-5 text-brand-red"></i> (647) 888-0883
                        <span class="text-gray-400">|</span>
                        <i data-lucide="mail" class="w-5 h-5 text-brand-red"></i> info@mjrsassociates.ca
                    </p>

                    <a href="./contactus"
                        class="inline-block px-8 py-3 rounded-full border border-brand-red text-brand-red font-semibold hover:bg-brand-red hover:text-white transition">
                        Schedule Your Consultation →
                    </a>
                </div>
            </div>
        </section>


        <script>
            // lucide init (make sure the script tag is in head.php)
            lucide.createIcons();

            // Toggle pricing logic
            const toggle = document.getElementById('billingToggle');
            if (toggle) {
                const prices = document.querySelectorAll('.price');
                toggle.addEventListener('change', () => {
                    prices.forEach(price => {
                        const monthly = price.getAttribute('data-monthly');
                        const annual = price.getAttribute('data-annual');
                        const newPrice = toggle.checked ? annual : monthly;
                        price.innerHTML = `$${newPrice}<span class="text-lg font-medium text-gray-500">/${toggle.checked ? 'month (billed annually)' : 'month'}</span>`;
                    });
                });
            }
        </script>

        <!-- CONTACT FORM CTA -->
        <?php include('./components/form.php'); ?>

        <!-- FOOTER -->
        <?php include('./components/footer.php'); ?>

    </main>
</body>

</html>