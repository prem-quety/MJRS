<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "About Us – MJRS Associates";
$page_description = "MJRS Associates is a financial engineering partner for Canadian businesses—focused on clarity, compliance, and measurable outcomes.";
$page_keywords = "About MJRS Associates, Corporate Tax Canada, Compliance Architecture, Financial Advisory Canada";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/about";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";

include('./components/head.php');
?>

<body class="font-body bg-white text-brand-black antialiased">

    <?php include('./components/navbar.php'); ?>

    <main class="pt-[50px]">

        <!-- HERO -->
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
                <span
                    class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide bg-brand-red/10 text-brand-red border border-brand-red/20"
                    style="animation-delay:.2s">
                    About MJRS Associates
                </span>

                <h1 class="fade-up font-heading text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05] text-brand-black"
                    style="animation-delay:.5s">
                    Your Financial Partners in Growth & Clarity
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay:.9s">
                    Accounting is more than numbers. It is people, purpose and possibility. We keep your books accurate
                    and compliant, and empower your business with insight, structure and peace of mind.
                </p>
            </div>
        </section>

        <!-- WHO WE ARE / INTRO -->
        <section class="relative flex flex-col md:flex-row overflow-hidden border-t border-gray-200">
            <!-- Left copy -->
            <div class="bg-gray-50 flex items-center md:w-1/2 w-full justify-center text-left">
                <div class="max-w-xl px-10 md:px-16 py-16">
                    <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3">Who we are</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-brand-black mb-6 leading-snug">
                        A boutique team with a personal touch
                    </h2>
                    <p class="text-gray-700 text-lg font-light">
                        Located in Oakville, Ontario and serving clients across Canada, our boutique team combines deep
                        expertise with a personal approach. We get to know your business, your goals and the unique
                        challenges you face, so you always feel supported, understood and confident.
                    </p>
                </div>
            </div>
            <!-- Right brand block -->
            <div class="bg-[#353639] flex items-center justify-center w-full md:w-1/2 py-20">
                <div class="px-6">
                    <img src="./assets/images/logo.png" alt="MJRS Associates Logo"
                        class="mx-auto w-full drop-shadow-md" />
                </div>
            </div>
        </section>

        <!-- OUR STORY -->
        <section class="relative py-20 bg-white overflow-hidden border-t border-gray-200">
            <div class="absolute -left-40 top-0 w-[28rem] h-[28rem] bg-brand-gold/5 rounded-full blur-[160px]"></div>
            <div class="relative z-10 max-w-5xl mx-auto px-6 text-center md:text-left">
                <span class="text-xs uppercase tracking-wide text-gray-500 block mb-3 text-center">Our Story</span>
                <h2 class="text-4xl font-extrabold text-brand-black text-center mb-6">Founded to go beyond year‑end
                    filing</h2>
                <p class="text-gray-700 text-lg font-light max-w-3xl mx-auto">
                    Built on the idea that businesses deserve more than just year end filing, MJRS Associates was
                    created to deliver audit‑ready accounting, proactive strategy and trusted advisory. We have grown
                    alongside ambitious owners, and our mission remains the same: simplify complexity, deliver clarity
                    and lay the foundation for long term success.
                </p>
            </div>
        </section>

        <!-- OUR APPROACH (3 pillars) -->
        <section class="relative py-24 bg-gray-50 overflow-hidden border-t border-gray-200">
            <div class="absolute -top-40 right-0 w-[28rem] h-[28rem] bg-brand-red/5 rounded-full blur-[160px]"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
                <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                    style="animation-delay:.2s;">Our Approach</h2>
                <p class="fade-up text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay:.4s;">
                    Client first, technology powered, strategy driven.
                </p>

                <div class="fade-up mt-16 grid md:grid-cols-3 gap-10" style="animation-delay:.7s;">
                    <!-- Client First -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-red/10 text-brand-red">
                            <i data-lucide="handshake" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Client first, partner driven</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We invest time to understand your structure, priorities and growth path. Services are
                            tailored to your needs, not a template.
                        </p>
                    </div>

                    <!-- Technology & Precision -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-gold/10 text-brand-gold">
                            <i data-lucide="cpu" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Technology and precision</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Cloud platforms, secure digital archives and streamlined workflows keep your records clean,
                            accessible and audit ready.
                        </p>
                    </div>

                    <!-- Strategic Insight -->
                    <div
                        class="group bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div
                            class="w-12 h-12 mx-auto mb-4 flex items-center justify-center rounded-full bg-brand-black/10 text-brand-black">
                            <i data-lucide="lightbulb" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-3 text-brand-black">Strategic insight</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We do not just close the books. We help interpret them with timely reports, clear summaries
                            and actionable recommendations.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHAT YOU GET visual block (kept for design richness) -->
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
                        Clean, reliable books prepared monthly, audit ready documentation and a cadence your team can
                        keep. You get confidence about margins, cash and next steps.
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
                        <img src="./assets/images/Picture4.jpg" alt="MJRS Office"
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

        <!-- OUR VALUES -->
        <section class="relative py-24 bg-gray-50 border-t border-gray-200">
            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black">Our Values</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-10 h-10 rounded-full bg-brand-red/10 flex items-center justify-center text-brand-red">
                                <i data-lucide="shield-check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Integrity</h3>
                                <p class="text-gray-600 text-sm">We maintain the highest standard of accuracy,
                                    confidentiality and ethics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-10 h-10 rounded-full bg-brand-gold/10 flex items-center justify-center text-brand-gold">
                                <i data-lucide="sparkles" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Clarity</h3>
                                <p class="text-gray-600 text-sm">Transparent communication. No jargon. No surprises.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-10 h-10 rounded-full bg-brand-black/10 flex items-center justify-center text-brand-black">
                                <i data-lucide="trending-up" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Growth and resilience</h3>
                                <p class="text-gray-600 text-sm">We build for today and tomorrow so your business can
                                    thrive under any scenario.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="shrink-0 w-10 h-10 rounded-full bg-brand-red/10 flex items-center justify-center text-brand-red">
                                <i data-lucide="users" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Partnership</h3>
                                <p class="text-gray-600 text-sm">You are a collaborator, not a ticket. We are here for
                                    your wins and your questions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MEET THE TEAM INTRO -->
        <section class="relative py-20 bg-white border-t border-gray-200">
            <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black">Meet the Team</h2>
                <p class="mt-4 text-lg text-gray-700 font-light max-w-3xl mx-auto">
                    We work with clients across Canada, with a local presence in Oakville. Our team includes experienced
                    accounting professionals, tax strategists and business advisors. When you call MJRS Associates, you
                    speak with someone who knows your name and your business.
                </p>
            </div>
        </section>

        <!-- LEADERSHIP (kept from original) -->
        <section class="relative py-24 bg-white border-t border-gray-200">
            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black">Leadership</h2>
                    <p class="mt-4 text-lg text-gray-700 font-light">Direct access. Clear answers. Real accountability.
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
                            <li><span class="font-semibold">Office:</span> 905-460-3756 Ext: 206</li>
                            <li><span class="font-semibold">Cell:</span> 647-464-8624</li>
                            <li><span class="font-semibold">Email:</span> <a href="mailto:rimi.sandhu05@gmail.com"
                                    class="hover:text-brand-red transition">rimi.sandhu05@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm">
                        <p class="text-xs uppercase tracking-wide text-gray-500 mb-1">CPA</p>
                        <h3 class="text-xl font-semibold text-brand-black mb-4">Jasmeet Juneja, CPA</h3>
                        <ul class="space-y-1 text-sm text-gray-700">
                            <li><span class="font-semibold">Cell:</span> 647-460-6865</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY CLIENTS CHOOSE US -->
        <section class="relative py-24 bg-gray-50 border-t border-gray-200">
            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black">Why Clients Choose Us</h2>
                </div>
                <div class="max-w-3xl mx-auto">
                    <ul class="space-y-4">
                        <li class="flex gap-3"><i data-lucide="check-circle"
                                class="w-5 h-5 text-brand-red mt-1"></i><span>Clean, reliable books prepared monthly,
                                not just at tax season.</span></li>
                        <li class="flex gap-3"><i data-lucide="check-circle"
                                class="w-5 h-5 text-brand-red mt-1"></i><span>Compliance you can trust, whether CRA
                                notices you or you are planning a growth round.</span></li>
                        <li class="flex gap-3"><i data-lucide="check-circle"
                                class="w-5 h-5 text-brand-red mt-1"></i><span>Advisory that links strategy, structure
                                and daily operations.</span></li>
                        <li class="flex gap-3"><i data-lucide="check-circle"
                                class="w-5 h-5 text-brand-red mt-1"></i><span>One partner for bookkeeping, payroll, HST,
                                WSIB, tax, corporate filings and advisory.</span></li>
                        <li class="flex gap-3"><i data-lucide="check-circle"
                                class="w-5 h-5 text-brand-red mt-1"></i><span>A team that understands small and mid
                                sized business realities and is here to help.</span></li>
                    </ul>
                </div>
                <div class="text-center mt-12">
                    <a href="./contactus"
                        class="inline-flex items-center rounded-full bg-brand-red px-6 py-3 text-sm font-semibold text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
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