<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "MJRS Associates – Corporate Tax, Structuring & Financial Advisory";
$page_description = "MJRS Associates helps Canadian businesses engineer stronger financial systems through tax optimization, incorporation, and compliance architecture.";
$page_keywords = "Corporate Tax Canada, Business Incorporation Ontario, Financial Advisory Toronto, CRA Compliance, MJRS Associates";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";
$GTM_ID = "GTM-XXXXXXX"; // replace with real ID when available

$page_jsonld = [
    [
        "@context" => "https://schema.org",
        "@type" => "Organization",
        "name" => "MJRS Associates",
        "url" => "https://mjrsassociates.ca",
        "logo" => "https://mjrsassociates.ca/assets/images/mjrs-logo-light.svg",
        "sameAs" => [
            "https://www.linkedin.com/company/mjrsassociates/"
        ],
        "description" => "A financial engineering and advisory firm specializing in corporate tax, compliance, and cross-border financial structuring for Canadian businesses."
    ],
    [
        "@context" => "https://schema.org",
        "@type" => "WebSite",
        "name" => "MJRS Associates",
        "url" => "https://mjrsassociates.ca",
        "potentialAction" => [
            "@type" => "SearchAction",
            "target" => "https://mjrsassociates.ca/search?q={search_term_string}",
            "query-input" => "required name=search_term_string"
        ]
    ]
];
?>

<?php include('./components/head.php'); ?>

<body class="font-body bg-white text-brand-black antialiased">

    <?php include('./components/navbar.php'); ?>
    <!-- HERO -->
    <main class="pt-[50px]">
        <section class="relative flex items-center justify-center min-h-[70vh] bg-white overflow-hidden">
            <!-- Background Grid -->
            <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image:
        linear-gradient(to right, rgba(229,229,229,0.5) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(229,229,229,0.5) 1px, transparent 1px);
        background-size: 40px 40px;">
            </div>
            <!-- Glow Shapes -->
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-red/10 rounded-full blur-[140px]"></div>
            <div class="absolute -bottom-40 -right-40 w-[28rem] h-[28rem] bg-brand-black/5 rounded-full blur-[160px]">
            </div>

            <!-- Content -->
            <div class="relative z-10 max-w-5xl px-6 text-center">
                <span class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide
          bg-brand-red/10 text-brand-red border border-brand-red/20" style="animation-delay: 0.2s">
                    Trusted Corporate & Tax Advisors
                </span>
                <h1 class="fade-up font-heading text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05] text-brand-black"
                    style="animation-delay: 0.5s">
                    Elevating <span class="text-brand-red">Businesses</span><br />
                    with <span class="text-brand-gold">Financial Confidence</span>
                </h1>
                <p class="fade-up mt-6 text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay: 0.9s">
                    MJRS Associates delivers professional tax, incorporation, and financial solutions
                    with clarity, compliance, and enduring trust.
                </p>
                <div class="fade-up mt-8 flex flex-wrap justify-center gap-4" style="animation-delay: 1.2s">
                    <a href="#services" class="inline-flex items-center rounded-md bg-brand-red px-6 py-2 text-sm font-semibold text-white
            hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                        Get Started
                    </a>
                    <a href="#contact" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-6 py-2 text-sm font-medium text-brand-black
            hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>

        <!-- VALUE PROPOSITION / IDENTITY SECTION -->
        <section class="relative py-24 bg-gray-50 overflow-hidden border-t border-gray-200">
            <!-- Background Glow -->
            <div class="absolute -top-40 right-0 w-[28rem] h-[28rem] bg-brand-red/5 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
                <!-- Headline -->
                <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                    style="animation-delay: 0.2s;">
                    Every Decision Has a Financial Signature.
                    <span class="text-brand-red">Make Yours Count.</span>
                </h2>

                <!-- Subtext -->
                <p class="fade-up text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay: 0.4s;">
                    Your business doesn’t just need compliance — it needs financial architecture that scales.
                    Our role is to help you interpret data, minimize exposure, and strengthen liquidity positions
                    so that growth feels controlled, not chaotic.
                </p>

                <!-- Grid -->
                <div class="fade-up mt-16 grid md:grid-cols-3 gap-10" style="animation-delay: 0.7s;">
                    <!-- Card 1 -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red">
                            <!-- Lucide: Building -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 21h18" />
                                <path d="M6 21V8l6-3l6 3v13" />
                                <path d="M9 21V12h6v9" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Smarter Entity Structuring</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Build the right corporate framework from day one — optimized for cash flow management,
                            shareholding flexibility, and long-term tax efficiency under CRA and provincial regulations.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-gold/10 text-brand-gold">
                            <!-- Lucide: Line Chart -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 3v18h18" />
                                <path d="M19 9l-5 5-4-4-3 3" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Strategic Tax Positioning</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Align your operational and fiscal year strategy to leverage deductions, credits, and
                            capital cost allowances that preserve working capital and reduce long-term tax exposure.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-black/10 text-brand-black">
                            <!-- Lucide: Bar Chart 3 -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 3v18h18" />
                                <rect x="7" y="8" width="3" height="8" rx="1" />
                                <rect x="12" y="5" width="3" height="11" rx="1" />
                                <rect x="17" y="10" width="3" height="6" rx="1" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Financial Intelligence in Action</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Turn statements into strategy. Identify performance gaps, monitor margin integrity,
                            and forecast liquidity with data models that make your financial decisions faster and
                            defensible.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT MJRS SECTION -->
        <section id="about" class="relative py-28 bg-white overflow-hidden border-t border-gray-200">
            <!-- Background Aesthetic -->
            <div class="absolute -left-40 top-0 w-[28rem] h-[28rem] bg-brand-gold/5 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div>
                    <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                        style="animation-delay: 0.2s;">
                        About <span class="text-brand-red">MJRS Associates</span>
                    </h2>

                    <p class="fade-up text-gray-700 text-lg leading-relaxed mb-6 font-light"
                        style="animation-delay: 0.4s;">
                        MJRS Associates operates at the intersection of finance, compliance, and business intelligence.
                        We specialize in architecting financial infrastructures — from incorporation frameworks and
                        audit-ready bookkeeping
                        to advanced tax positioning and corporate compliance systems.
                    </p>

                    <p class="fade-up text-gray-700 text-lg leading-relaxed font-light" style="animation-delay: 0.6s;">
                        Our methodology combines regulatory precision with data-driven insight, enabling decision-makers
                        to maintain
                        liquidity discipline, reduce exposure, and sustain operational scalability.
                        Every process is designed for traceability, transparency, and long-term financial resilience.
                    </p>

                    <!-- Stats -->
                    <div class="fade-up mt-10 grid grid-cols-3 gap-6 text-center md:text-left"
                        style="animation-delay: 0.8s;">
                        <div>
                            <h3 class="text-3xl font-bold text-brand-red">15+</h3>
                            <p class="text-gray-600 text-sm mt-1">Industries Served</p>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-brand-gold">98%</h3>
                            <p class="text-gray-600 text-sm mt-1">Client Retention</p>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-brand-black">100%</h3>
                            <p class="text-gray-600 text-sm mt-1">CRA Compliance Accuracy</p>
                        </div>
                    </div>
                </div>

                <!-- Visual / Illustration -->
                <div class="relative fade-up flex justify-center" style="animation-delay: 0.9s;">
                    <div
                        class="relative w-full max-w-md aspect-[4/5] rounded-2xl overflow-hidden shadow-xl border border-gray-200 bg-gradient-to-br from-brand-red/10 via-white to-brand-gold/10 p-1">
                        <img src="./assets/images/about-image.jpg" alt="MJRS Office"
                            class="rounded-2xl object-cover w-full h-full" />
                        <div class="absolute inset-0 bg-brand-black/10 backdrop-blur-[2px] rounded-2xl"></div>
                        <div class="absolute bottom-6 left-6 text-left">
                            <h4 class="text-xl font-semibold text-white drop-shadow-md">Precision in Practice</h4>
                            <p class="text-sm text-gray-200">Where strategic finance meets operational control.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHAT WE OFFER - SERVICE ARCHITECTURE GRID -->
        <section id="services"
            class="relative py-28 bg-gradient-to-b from-white to-gray-50 overflow-hidden border-t border-gray-200">
            <!-- Background Accent -->
            <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image:
        linear-gradient(to right, rgba(229,229,229,0.5) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(229,229,229,0.5) 1px, transparent 1px);
        background-size: 40px 40px;">
            </div>
            <div class="absolute -left-32 top-0 w-[28rem] h-[28rem] bg-brand-gold/10 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <!-- Heading -->
                <div class="text-center mb-20">
                    <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                        style="animation-delay: 0.2s;">
                        What We <span class="text-brand-red">Offer</span>
                    </h2>
                    <p class="fade-up text-gray-700 text-lg md:text-xl max-w-3xl mx-auto font-light leading-relaxed"
                        style="animation-delay: 0.4s;">
                        Integrated financial solutions engineered to transform how organizations manage compliance,
                        scale structure, and sustain growth.
                        Every offering is a component in your enterprise’s financial operating system.
                    </p>
                </div>

                <!-- Grid -->
                <div class="grid md:grid-cols-3 gap-8">

                    <!-- Feature 1 -->
                    <div class="md:col-span-2 bg-white border border-gray-200 rounded-3xl p-10 shadow-md hover:shadow-lg transition-all duration-300 fade-up"
                        style="animation-delay: 0.5s;">
                        <div class="flex flex-col items-start gap-5">
                            <div
                                class="flex-shrink-0 w-14 h-14 flex items-center justify-center rounded-xl bg-brand-red/10 text-brand-red border border-brand-red/20">
                                <!-- Lucide: FileText -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-semibold text-brand-black mb-3">Corporate Tax Architecture</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Full-spectrum tax design that optimizes entity flow, dividend distribution, and
                                    fiscal-year strategy.
                                    Built for liquidity efficiency, CRA accuracy, and audit-proof governance.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white border border-gray-200 rounded-3xl p-10 shadow-md hover:shadow-lg transition-all duration-300 fade-up"
                        style="animation-delay: 0.6s;">
                        <div class="flex flex-col items-start text-left">
                            <div
                                class="w-12 h-12 mb-4 flex items-center justify-center rounded-full bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                <!-- Lucide: Briefcase -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                                    <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-brand-black mb-3">Business Incorporation</h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Structuring incorporations with shareholder flexibility, compliance automation,
                                and CRA registration workflows fully integrated into corporate policy systems.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white border border-gray-200 rounded-3xl p-10 shadow-md hover:shadow-lg transition-all duration-300 fade-up"
                        style="animation-delay: 0.7s;">
                        <div class="flex flex-col items-start text-left">
                            <div
                                class="w-12 h-12 mb-4 flex items-center justify-center rounded-full bg-brand-black/10 text-brand-black border border-brand-black/20">
                                <!-- Lucide: PieChart -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21.21 15.89A10 10 0 1112 2v10h10a9.99 9.99 0 01-.79 3.89z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-brand-black mb-3">Management Accounting</h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Monthly and quarterly analytics integrated with variance analysis,
                                KPI reporting, and capital utilization metrics for data-backed leadership decisions.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="md:col-span-2 bg-white border border-gray-200 rounded-3xl p-10 shadow-md hover:shadow-lg transition-all duration-300 fade-up"
                        style="animation-delay: 0.8s;">
                        <div class="flex flex-col items-start gap-5">
                            <div
                                class="flex-shrink-0 w-14 h-14 flex items-center justify-center rounded-xl bg-brand-gold/10 text-brand-gold border border-brand-gold/20">
                                <!-- Lucide: Globe -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path d="M12 2a15.3 15.3 0 010 20a15.3 15.3 0 010-20z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-semibold text-brand-black mb-3">Cross-Border Taxation</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Advisory for multinational entities and dual-residency businesses,
                                    ensuring compliance with CRA and IRS frameworks under unified documentation
                                    standards.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="bg-white border border-gray-200 rounded-3xl p-10 shadow-md hover:shadow-lg transition-all duration-300 fade-up"
                        style="animation-delay: 0.9s;">
                        <div class="flex flex-col items-start text-left">
                            <div
                                class="w-12 h-12 mb-4 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red border border-brand-red/20">
                                <!-- Lucide: BarChart3 -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M3 3v18h18" />
                                    <rect x="7" y="8" width="3" height="8" rx="1" />
                                    <rect x="12" y="5" width="3" height="11" rx="1" />
                                    <rect x="17" y="10" width="3" height="6" rx="1" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-brand-black mb-3">Advisory & Forecasting</h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Predictive modeling for revenue forecasting, risk control, and M&A evaluation,
                                designed to give leadership a data advantage in every decision cycle.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- WHY CLIENTS CHOOSE MJRS + COMPLETED ENGAGEMENTS -->
        <section class="relative py-28 bg-brand-black text-white overflow-hidden border-t border-gray-800">
            <!-- Grid Background -->
            <div class="absolute inset-0 opacity-[0.08]" style="background-image:
    linear-gradient(to right, rgba(255,255,255,0.15) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255,255,255,0.15) 1px, transparent 1px);
    background-size: 40px 40px;">
            </div>

            <!-- Glows -->
            <div class="absolute top-0 right-0 w-[25rem] h-[25rem] bg-brand-red/20 rounded-full blur-[180px]"></div>
            <div class="absolute -right-40 bottom-0 w-[28rem] h-[28rem] bg-brand-gold/15 rounded-full blur-[200px]">
            </div>

            <div class="relative z-10 max-w-6xl mx-auto px-6">

                <!-- WHY CLIENTS CHOOSE MJRS -->
                <div class="text-center mb-24">
                    <h2 class="fade-up text-4xl md:text-5xl font-extrabold mb-6" style="animation-delay: 0.2s;">
                        Why Clients <span class="text-brand-gold">Choose MJRS</span>
                    </h2>
                    <p class="fade-up text-gray-300 text-lg md:text-xl max-w-3xl mx-auto font-light leading-relaxed"
                        style="animation-delay: 0.4s;">
                        Because precision isn’t a statement — it’s a system.
                        Every engagement we take is structured around measurable outcomes, audit integrity, and scalable
                        financial architecture.
                    </p>

                    <!-- Stats -->
                    <div class="fade-up mt-16 grid md:grid-cols-3 gap-10 text-left" style="animation-delay: 0.6s;">
                        <div
                            class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-brand-gold/40 transition-all duration-300">
                            <div class="text-brand-gold text-4xl font-bold mb-2">99.2%</div>
                            <h3 class="text-lg font-semibold text-white mb-2">Accuracy Across Filings</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Audit-ready systems and validation layers
                                that minimize post-filing corrections.</p>
                        </div>

                        <div
                            class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-brand-red/40 transition-all duration-300">
                            <div class="text-brand-red text-4xl font-bold mb-2">2,000+</div>
                            <h3 class="text-lg font-semibold text-white mb-2">Corporate Clients Served</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">From SMB incorporations to multi-entity
                                enterprises — designed, managed, and scaled.</p>
                        </div>

                        <div
                            class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 hover:border-brand-gold/40 transition-all duration-300">
                            <div class="text-brand-gold text-4xl font-bold mb-2">15+</div>
                            <h3 class="text-lg font-semibold text-white mb-2">Years of Combined Expertise</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">Technical depth across Canadian taxation,
                                compliance automation, and digital record management.</p>
                        </div>
                    </div>

                    <!-- Statement -->
                    <div class="fade-up mt-16 max-w-3xl mx-auto border-t border-white/10 pt-8"
                        style="animation-delay: 0.9s;">
                        <p class="text-lg md:text-xl text-gray-200 font-light leading-relaxed">
                            MJRS isn’t an accounting firm — it’s a financial engineering partner built for precision,
                            compliance, and measurable growth.
                        </p>
                    </div>
                </div>

                <!-- COMPLETED ENGAGEMENTS -->
                <div class="text-center mb-20">
                    <h2 class="fade-up text-4xl md:text-5xl font-extrabold mb-6" style="animation-delay: 1.1s;">
                        Completed <span class="text-brand-gold">Engagements</span>
                    </h2>
                    <p class="fade-up text-gray-300 text-lg md:text-xl max-w-3xl mx-auto font-light leading-relaxed"
                        style="animation-delay: 1.3s;">
                        Real outcomes, engineered through control systems — every result traceable, repeatable, and
                        data-backed.
                    </p>
                </div>

                <!-- CASES -->
                <div class="space-y-24">

                    <!-- CASE 1 -->
                    <div class="fade-up md:flex items-start gap-10" style="animation-delay: 1.4s;">
                        <div class="md:w-1/3 border-l-2 border-brand-gold pl-6">
                            <h3 class="text-2xl font-semibold text-white mb-2">Revenue Stream Reclassification</h3>
                            <p class="text-sm uppercase tracking-wide text-brand-gold/80 mb-4">Manufacturing / Ontario
                            </p>
                            <p class="text-gray-400 leading-relaxed">
                                A client’s fragmented revenue recognition system delayed receivables by $1.2M annually.
                                MJRS audited departmental billing flow, unified reporting streams, and automated ledger
                                synchronization across business units.
                            </p>
                        </div>
                        <div class="md:w-2/3 grid md:grid-cols-3 gap-8 mt-8 md:mt-0">
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-gold mb-1">↓37%</div>
                                <p class="text-sm text-gray-300">Receivable delay reduction</p>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-gold mb-1">+19%</div>
                                <p class="text-sm text-gray-300">Cash flow efficiency gain</p>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-gold mb-1">6 Weeks</div>
                                <p class="text-sm text-gray-300">Implementation cycle</p>
                            </div>
                        </div>
                    </div>

                    <!-- CASE 2 -->
                    <div class="fade-up md:flex items-start gap-10" style="animation-delay: 1.6s;">
                        <div class="md:w-1/3 border-l-2 border-brand-red pl-6">
                            <h3 class="text-2xl font-semibold text-white mb-2">Cross-Border Compliance Alignment</h3>
                            <p class="text-sm uppercase tracking-wide text-brand-red/80 mb-4">SaaS / Canada–US</p>
                            <p class="text-gray-400 leading-relaxed">
                                During expansion, the client faced withholding mismatches and inconsistent reporting
                                between CRA and IRS.
                                MJRS built a unified compliance matrix integrating both systems through dual-ledger
                                automation.
                            </p>
                        </div>
                        <div class="md:w-2/3 grid md:grid-cols-3 gap-8 mt-8 md:mt-0">
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-red mb-1">0%</div>
                                <p class="text-sm text-gray-300">Compliance variance</p>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-red mb-1">100%</div>
                                <p class="text-sm text-gray-300">Audit clearance rate</p>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-red mb-1">Bi-System</div>
                                <p class="text-sm text-gray-300">CRA + IRS sync achieved</p>
                            </div>
                        </div>
                    </div>

                    <!-- CASE 3 -->
                    <div class="fade-up md:flex items-start gap-10" style="animation-delay: 1.8s;">
                        <div class="md:w-1/3 border-l-2 border-brand-gold pl-6">
                            <h3 class="text-2xl font-semibold text-white mb-2">Digital Incorporation Rebuild</h3>
                            <p class="text-sm uppercase tracking-wide text-brand-gold/80 mb-4">Professional Services /
                                GTA</p>
                            <p class="text-gray-400 leading-relaxed">
                                Partner onboarding required structural reorganization and legal continuity.
                                MJRS rebuilt the incorporation digitally, redesigned share classes, and implemented
                                auto-tracked corporate governance logs.
                            </p>
                        </div>
                        <div class="md:w-2/3 grid md:grid-cols-3 gap-8 mt-8 md:mt-0">
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-gold mb-1">4x</div>
                                <p class="text-sm text-gray-300">Faster legal turnaround</p>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-gold mb-1">0</div>
                                <p class="text-sm text-gray-300">Manual filings post-rebuild</p>
                            </div>
                            <div class="bg-white/5 rounded-2xl p-6 border border-white/10">
                                <div class="text-2xl font-bold text-brand-gold mb-1">100%</div>
                                <p class="text-sm text-gray-300">CRA verification success</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ / KNOWLEDGE PANEL - LIGHT THEME -->
        <section class="relative py-28 bg-white overflow-hidden border-t border-gray-200">
            <!-- Subtle Grid Background -->
            <div class="absolute inset-0 opacity-[0.4]" style="background-image:
    linear-gradient(to right, rgba(229,229,229,0.3) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(229,229,229,0.3) 1px, transparent 1px);
    background-size: 40px 40px;">
            </div>

            <!-- Accent Glow -->
            <div class="absolute right-0 top-0 w-[28rem] h-[28rem] bg-brand-red/5 rounded-full blur-[180px]"></div>

            <div class="relative z-10 max-w-4xl mx-auto px-6">
                <!-- Heading -->
                <div class="text-center mb-16">
                    <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                        style="animation-delay: 0.2s;">
                        Frequently <span class="text-brand-red">Asked Questions</span>
                    </h2>
                    <p class="fade-up text-gray-600 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed"
                        style="animation-delay: 0.4s;">
                        Precision demands transparency.
                        Here are the most common questions clients ask before engaging with MJRS.
                    </p>
                </div>

                <!-- FAQ Accordion -->
                <div class="space-y-6 fade-up" style="animation-delay: 0.6s;">

                    <!-- FAQ Item 1 -->
                    <details
                        class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:border-brand-gold/30">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <h3
                                class="text-lg font-medium text-brand-black group-open:text-brand-red transition-colors">
                                What types of businesses does MJRS work with?
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            We work with privately held corporations, professional practices, and expanding enterprises
                            that need structured
                            financial control. Our work spans incorporation, taxation, and compliance across industries
                            like logistics, tech,
                            and healthcare.
                        </p>
                    </details>

                    <!-- FAQ Item 2 -->
                    <details
                        class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:border-brand-gold/30">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <h3
                                class="text-lg font-medium text-brand-black group-open:text-brand-red transition-colors">
                                How does MJRS ensure CRA compliance across filings?
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Each filing passes through a two-stage review: digital ledger verification and CRA-aligned
                            documentation control.
                            Our audit-trace system ensures all reports remain inspection-ready, version-controlled, and
                            fully traceable.
                        </p>
                    </details>

                    <!-- FAQ Item 3 -->
                    <details
                        class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:border-brand-gold/30">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <h3
                                class="text-lg font-medium text-brand-black group-open:text-brand-red transition-colors">
                                What makes MJRS different from traditional accounting firms?
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            We operate more like a financial engineering team than a bookkeeping service.
                            Instead of just preparing reports, we build systems — automating compliance, optimizing tax
                            structures,
                            and delivering actionable intelligence to decision-makers.
                        </p>
                    </details>

                    <!-- FAQ Item 4 -->
                    <details
                        class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:border-brand-gold/30">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <h3
                                class="text-lg font-medium text-brand-black group-open:text-brand-red transition-colors">
                                Do you handle cross-border or multi-entity taxation?
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Absolutely. We manage cross-border taxation between CRA and IRS frameworks, align
                            multi-entity structures,
                            and standardize reporting for global compliance — ensuring accuracy without redundancy.
                        </p>
                    </details>

                    <!-- FAQ Item 5 -->
                    <details
                        class="group bg-white border border-gray-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all hover:border-brand-gold/30">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <h3
                                class="text-lg font-medium text-brand-black group-open:text-brand-red transition-colors">
                                How does MJRS protect client data and confidentiality?
                            </h3>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Client records are stored within encrypted, access-controlled environments compliant with
                            PIPEDA and FINTRAC regulations.
                            We maintain full audit logs, encrypted backups, and zero third-party data exposure.
                        </p>
                    </details>

                </div>
            </div>
        </section>

        <!-- CTA + CONTACT FORM -->
        <?php include('./components/form.php'); ?>

        <!-- FOOTER -->
        <?php include('./components/footer.php'); ?>


    </main>

</body>

</html>