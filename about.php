<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "About Us – MJRS Associates";
$page_description = "MJRS Associates is a financial engineering partner for Canadian businesses—focused on clarity, compliance, and measurable outcomes.";
$page_keywords = "About MJRS Associates, Corporate Tax Canada, Compliance Architecture, Financial Advisory Toronto";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/about";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";

include('./components/head.php');
?>

<body class="font-body bg-white text-brand-black antialiased">

    <?php include('./components/navbar.php'); ?>

    <main class="pt-[50px]">

        <!-- HERO (matches index: grid + subtle glows) -->
        <section
            class="relative flex items-center justify-center min-h-[60vh] bg-white overflow-hidden border-b border-gray-200">
            <!-- Grid BG -->
            <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image:
      linear-gradient(to right, rgba(229,229,229,0.5) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(229,229,229,0.5) 1px, transparent 1px);
      background-size: 40px 40px;"></div>
            <!-- Glows -->
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-red/10 rounded-full blur-[140px]"></div>
            <div class="absolute -bottom-40 -right-40 w-[28rem] h-[28rem] bg-brand-black/5 rounded-full blur-[160px]">
            </div>

            <div class="relative z-10 max-w-5xl px-6 text-center">
                <span class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide
                   bg-brand-red/10 text-brand-red border border-brand-red/20" style="animation-delay:.2s">
                    About MJRS Associates
                </span>

                <h1 class="fade-up font-heading text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05] text-brand-black"
                    style="animation-delay:.5s">
                    MJRS Associates<br />
                    <span class="text-brand-red capitalize">Service, Solution, Success</span>
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay:.9s">
                    We build financial systems that are clear, compliant, and audit-ready—so growth feels controlled,
                    not chaotic.
                </p>
            </div>
        </section>

        <!-- WHO WE ARE (split like your “brand strip” pattern) -->
        <section class="relative flex flex-col md:flex-row overflow-hidden border-t border-gray-200">
            <!-- Left: brand block with logo -->

            <!-- Right: copy -->
            <div class="bg-gray-50 flex items-center md:w-1/2 w-full" style="
    justify-content: center;
    text-align: left;
">
                <div class="max-w-xl px-10 md:px-16 py-16">
                    <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3">Who we are</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-6 leading-snug">
                        A financial engineering partner for Canadian businesses
                    </h2>
                    <p class="text-gray-700 text-lg font-light">
                        Our team focuses on the fundamentals that change outcomes: clean ledgers, versioned
                        documentation,
                        and a monthly rhythm that keeps leadership decisive. If it doesn’t help you decide, it doesn’t
                        ship.
                    </p>
                </div>
            </div>
            <div class="bg-[#353639] flex items-center justify-center w-full md:w-1/2 py-20">
                <div class="px-6">
                    <img src="./assets/images/logo.png" alt="MJRS Associates Logo"
                        class="mx-auto w-full drop-shadow-md" />
                </div>
            </div>
        </section>

        <!-- OUR APPROACH (echoes your “Value Proposition / Identity” look) -->
        <section class="relative py-24 bg-gray-50 overflow-hidden border-t border-gray-200">
            <div class="absolute -top-40 right-0 w-[28rem] h-[28rem] bg-brand-red/5 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
                <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                    style="animation-delay:.2s;">
                    What we do
                </h2>
                <p class="fade-up text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay:.4s;">
                    We keep your books accurate, your reports clear, and your filings on time so you can run your
                    business.
                </p>

                <div class="fade-up mt-16 grid md:grid-cols-3 gap-10" style="animation-delay:.7s;">
                    <!-- Card 1 -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red">
                            <i data-lucide="layers" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Accurate records</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Clean, consistent books and organized documents ready whenever you need them.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-gold/10 text-brand-gold">
                            <i data-lucide="activity" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Clear monthly reports</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Simple scorecards that show cash, profit, and trends with no jargon.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-black/10 text-brand-black">
                            <i data-lucide="shield-check" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">CRA-ready compliance</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            On-time filings and audit-friendly records that meet CRA standards.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-28 bg-white overflow-hidden border-t border-gray-200">
            <div class="absolute -left-40 top-0 w-[28rem] h-[28rem] bg-brand-gold/5 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                        style="animation-delay:.2s;">
                        What you get with MJRS
                    </h2>
                    <p class="fade-up text-gray-700 text-lg leading-relaxed mb-6 font-light"
                        style="animation-delay:.4s;">
                        We help owners and operators see the business clearly. That means accurate numbers, a cadence
                        your team can keep, and documentation that stands up under audit.
                    </p>
                    <p class="fade-up text-gray-700 text-lg leading-relaxed font-light" style="animation-delay:.6s;">
                        The result is confidence: you know where margins bend, how cash behaves, and what to change
                        next.
                    </p>

                    <div class="fade-up mt-10 grid grid-cols-3 gap-6 text-center md:text-left"
                        style="animation-delay:.8s;">
                        <div>
                            <h3 class="text-3xl font-bold text-brand-red">15+</h3>
                            <p class="text-gray-600 text-sm mt-1">Industries served</p>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-brand-gold">98%</h3>
                            <p class="text-gray-600 text-sm mt-1">Client retention</p>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-brand-black">100%</h3>
                            <p class="text-gray-600 text-sm mt-1">CRA accuracy</p>
                        </div>
                    </div>
                </div>

                <div class="relative fade-up flex justify-center" style="animation-delay:.9s;">
                    <div
                        class="relative w-full max-w-md aspect-[4/5] rounded-2xl overflow-hidden shadow-xl border border-gray-200 bg-gradient-to-br from-brand-red/10 via-white to-brand-gold/10 p-1">
                        <img src="./assets/images/about-image.jpg" alt="MJRS Office"
                            class="rounded-2xl object-cover w-full h-full" />
                        <div class="absolute inset-0 bg-brand-black/10 backdrop-blur-[2px] rounded-2xl"></div>
                        <div class="absolute bottom-6 left-6 text-left">
                            <h4 class="text-xl font-semibold text-white drop-shadow-md">Precision in practice</h4>
                            <p class="text-sm text-gray-200">Where financial control meets clarity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- LEADERSHIP (cards; matches your card system) -->
        <section class="relative py-24 bg-white border-t border-gray-200">
            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black">Leadership</h2>
                    <p class="mt-4 text-lg text-gray-700 font-light">
                        Direct access. Clear answers. Real accountability.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Rupinder -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                        <p class="text-xs uppercase tracking-wide text-gray-500 mb-1">Owner / Director</p>
                        <h3 class="text-xl font-semibold text-brand-black mb-4">Rupinder Sandhu</h3>
                        <ul class="space-y-1 text-sm text-gray-700">
                            <li><span class="font-semibold">Office:</span> 905-460-3756 Ext: 205</li>
                            <li><span class="font-semibold">Cell:</span> 647-888-0883</li>
                            <li><span class="font-semibold">Email:</span> <a href="mailto:Sandhu057@gmail.com"
                                    class="hover:text-brand-red transition">Sandhu057@gmail.com</a></li>
                        </ul>
                    </div>
                    <!-- Rimi -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                        <p class="text-xs uppercase tracking-wide text-gray-500 mb-1">Controller</p>
                        <h3 class="text-xl font-semibold text-brand-black mb-4">Rimi Sandhu</h3>
                        <ul class="space-y-1 text-sm text-gray-700">
                            <li><span class="font-semibold">Office:</span> 905-460-3756 Ext: 201</li>
                            <li><span class="font-semibold">Cell:</span> 647-464-8624</li>
                            <li><span class="font-semibold">Email:</span> <a href="mailto:rimi.sandhu05@gmail.com"
                                    class="hover:text-brand-red transition">rimi.sandhu05@gmail.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- CTA aligned with theme -->
                <div class="text-center mt-16">
                    <a href="./contact" class="inline-flex items-center rounded-full bg-brand-red px-6 py-3 text-sm font-semibold text-white
                                   hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                        Start a Conversation
                    </a>
                </div>
            </div>
        </section>

        <script> lucide.createIcons(); </script>

        <?php include('./components/form.php'); ?>
        <?php include('./components/footer.php'); ?>

    </main>
</body>

</html>