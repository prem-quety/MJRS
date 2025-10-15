<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Services – Financial Architecture, Tax Structuring & Advisory";
$page_description = "MJRS designs financial systems: accounting, bookkeeping, tax engineering, advisory, and payroll — integrated for audit-ready, scalable operations.";
$page_keywords = "Accounting, Bookkeeping, Tax Structuring, Advisory, Payroll, Canada, CRA Compliance";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/services.php";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";
$GTM_ID = $GTM_ID ?? "GTM-XXXXXXX";

$page_jsonld = [
    [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "name" => "Financial Architecture & Advisory",
        "provider" => [
            "@type" => "Organization",
            "name" => "MJRS Associates",
            "url" => "https://mjrsassociates.ca"
        ],
        "areaServed" => "CA",
        "serviceType" => "Accounting, Bookkeeping, Tax, Advisory, Payroll"
    ]
];
?>
<?php include('./components/head.php'); ?>

<body class="font-body bg-white text-brand-black antialiased">
    <?php include('./components/navbar.php'); ?>

    <main class="pt-[56px]">

        <!-- HERO: Blueprint Reveal -->
        <section
            class="relative min-h-[70vh] flex items-center justify-center overflow-hidden border-b border-gray-200">
            <!-- animated wireframe background -->
            <div class="absolute inset-0 pointer-events-none" aria-hidden="true" style="
        background-image:
          linear-gradient(to right, rgba(212,175,55,0.08) 1px, transparent 1px),
          linear-gradient(to bottom, rgba(212,175,55,0.06) 1px, transparent 1px);
        background-size: 48px 48px;
        mask-image: radial-gradient(ellipse at center, black 40%, transparent 80%);
        animation: gridShift 18s linear infinite alternate;
      ">
            </div>
            <div class="absolute -top-40 -left-40 w-[32rem] h-[32rem] bg-brand-red/10 rounded-full blur-[200px]"></div>
            <div class="absolute -bottom-40 -right-40 w-[32rem] h-[32rem] bg-brand-gold/10 rounded-full blur-[220px]">
            </div>

            <div class="relative z-10 max-w-5xl px-6 text-center">
                <h1 class="fade-up text-4xl md:text-6xl font-extrabold tracking-tight leading-[1.08]"
                    style="animation-delay:.1s">
                    We don’t sell services — <span class="text-brand-red">we build systems</span>.
                </h1>
                <p class="fade-up mt-5 text-lg md:text-xl text-gray-700 font-light max-w-3xl mx-auto"
                    style="animation-delay:.3s">
                    Accounting, bookkeeping, tax engineering, advisory, and payroll — designed as one <span
                        class="font-medium text-brand-black">financial operating system</span>.
                </p>
                <div class="fade-up mt-10 flex items-center justify-center gap-2 text-sm text-gray-500"
                    style="animation-delay:.5s">
                    <i data-lucide="chevrons-down" class="w-5 h-5"></i>
                    <span>Explore the framework</span>
                </div>
            </div>
        </section>

        <style>
            @keyframes gridShift {
                0% {
                    background-position: 0px 0px, 0px 0px;
                }

                100% {
                    background-position: 32px 24px, 24px 32px;
                }
            }
        </style>

        <!-- THE FRAMEWORK GRID (Interactive Matrix) -->
        <section class="relative py-24 bg-white border-b border-gray-200">
            <div class="absolute -top-32 right-0 w-[26rem] h-[26rem] bg-brand-gold/10 rounded-full blur-[200px]"></div>
            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <div class="mb-10">
                    <h2 class="text-3xl md:text-4xl font-extrabold">The Financial Blueprint</h2>
                    <p class="mt-3 text-gray-600 max-w-2xl">Five pillars working as one system. Hover, focus, or tap to
                        explore a pillar — the grid rebalances to spotlight it.</p>
                </div>

                <!-- matrix: flex so we can grow/shrink tiles smoothly -->
                <div id="serviceMatrix" class="flex flex-col md:flex-row gap-4 md:h-[420px]">
                    <!-- Each column is a flex item that can expand; inside, a tile with content -->
                    <?php
                    $services = [
                        ["title" => "Accounting", "desc" => "Precision reporting for clarity and control.", "icon" => "file-text", "color" => "red"],
                        ["title" => "Bookkeeping", "desc" => "Every transaction engineered for traceability.", "icon" => "book", "color" => "gold"],
                        ["title" => "Tax Structuring", "desc" => "From compliance to optimization — built-in.", "icon" => "layers", "color" => "red"],
                        ["title" => "Advisory", "desc" => "Financial intelligence embedded in decisions.", "icon" => "target", "color" => "black"],
                        ["title" => "Payroll Systems", "desc" => "Scalable, compliant, automated payroll flows.", "icon" => "users", "color" => "gold"],
                    ];
                    foreach ($services as $idx => $s):
                        $brand = [
                            "red" => "text-brand-red bg-brand-red/10 border-brand-red/20",
                            "gold" => "text-brand-gold bg-brand-gold/10 border-brand-gold/20",
                            "black" => "text-brand-black bg-brand-black/10 border-brand-black/20",
                        ][$s["color"]];
                        ?>
                        <div
                            class="service-col basis-full md:basis-1/5 flex-1 transition-[flex-basis] duration-500 ease-out">
                            <button
                                class="service-tile group relative w-full h-full rounded-2xl border border-gray-200 shadow-sm overflow-hidden bg-white p-6 text-left focus:outline-none focus:ring-2 focus:ring-brand-red"
                                data-service="<?= $idx ?>">
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                    style="background: radial-gradient(60% 60% at 50% 50%, rgba(224,37,38,0.06), transparent 70%);">
                                </div>

                                <div class="relative z-10 flex flex-col h-full">
                                    <div
                                        class="mb-4 inline-flex items-center gap-2 px-3 py-1 rounded-full border text-xs font-medium <?= $brand ?>">
                                        <i data-lucide="<?= $s['icon'] ?>" class="w-4 h-4"></i>
                                        <span><?= $s["title"] ?></span>
                                    </div>

                                    <h3 class="text-xl font-semibold"><?= $s["title"] ?></h3>
                                    <p class="mt-2 text-sm text-gray-600"><?= $s["desc"] ?></p>

                                    <div
                                        class="mt-auto pt-6 text-sm font-medium text-brand-red inline-flex items-center gap-2 opacity-80 group-hover:opacity-100 transition">
                                        Learn more <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- SCROLL NARRATIVE (Sticky horizontal takeover) -->
        <section id="services-horizontal" class="relative bg-gray-50 border-y border-gray-200">
            <!-- sticky container sits under your 56px navbar -->
            <div id="services-sticky" class="sticky top-[56px] overflow-hidden">
                <div id="services-track"
                    class="flex flex-nowrap items-stretch gap-8 h-full px-6 lg:px-10 will-change-transform items-center">
                    <?php
                    $panels = [
                        ["title" => "Accounting", "kicker" => "Data is strategy.", "icon" => "bar-chart-3", "body" => "We turn statements into control surfaces — variance clarity, margin integrity, audit-ready reporting."],
                        ["title" => "Bookkeeping", "kicker" => "Traceability by design.", "icon" => "notebook", "body" => "Transactions map to decisions. Clean ledgers, automated checks, documented flows."],
                        ["title" => "Tax Structuring", "kicker" => "Structure is leverage.", "icon" => "layers", "body" => "Entity planning, fiscal-year orchestration, and policies aligned to minimize exposure."],
                        ["title" => "Advisory", "kicker" => "Insight compounds.", "icon" => "lightbulb", "body" => "Modeling, forecasting, and scenario analysis embedded into leadership rhythms."],
                        ["title" => "Payroll Systems", "kicker" => "Scale without friction.", "icon" => "users", "body" => "Compliant, automated payroll that grows with your org — clean inputs, clean outputs."],
                    ];
                    foreach ($panels as $p):
                        ?>
                        <article
                            class="shrink-0 w-[86vw] md:w-[70vw] lg:w-[58vw] bg-white rounded-3xl border border-gray-200 shadow-sm overflow-hidden">
                            <div class="grid md:grid-cols-5 h-full">
                                <div class="md:col-span-2 bg-brand-black text-white p-8 relative">
                                    <div
                                        class="absolute -top-24 -left-24 w-72 h-72 bg-brand-red/20 rounded-full blur-[160px]">
                                    </div>
                                    <div class="relative z-10">
                                        <div class="inline-flex items-center gap-2 text-sm text-white/90 mb-3">
                                            <i data-lucide="<?= $p['icon'] ?>" class="w-4 h-4"></i>
                                            <span><?= $p["kicker"] ?></span>
                                        </div>
                                        <h3 class="text-3xl font-extrabold"><?= $p["title"] ?></h3>
                                    </div>
                                </div>
                                <div class="md:col-span-3 p-8 flex flex-col">
                                    <p class="text-gray-700 text-lg font-light"><?= $p["body"] ?></p>
                                    <div class="mt-8 grid grid-cols-3 gap-4">
                                        <div class="rounded-xl border border-gray-200 p-4 text-center">
                                            <div
                                                class="mx-auto w-8 h-8 rounded-full bg-brand-red/10 flex items-center justify-center mb-2">
                                                <i data-lucide="check-circle" class="w-4 h-4 text-brand-red"></i>
                                            </div>
                                            <p class="text-sm text-gray-600">Audit-ready</p>
                                        </div>
                                        <div class="rounded-xl border border-gray-200 p-4 text-center">
                                            <div
                                                class="mx-auto w-8 h-8 rounded-full bg-brand-gold/10 flex items-center justify-center mb-2">
                                                <i data-lucide="gauge" class="w-4 h-4 text-brand-gold"></i>
                                            </div>
                                            <p class="text-sm text-gray-600">Real-time signals</p>
                                        </div>
                                        <div class="rounded-xl border border-gray-200 p-4 text-center">
                                            <div
                                                class="mx-auto w-8 h-8 rounded-full bg-brand-black/10 flex items-center justify-center mb-2">
                                                <i data-lucide="shield" class="w-4 h-4 text-brand-black"></i>
                                            </div>
                                            <p class="text-sm text-gray-600">Policy-first</p>
                                        </div>
                                    </div>
                                    <div class="mt-auto pt-8">
                                        <a href="#contact-form"
                                            class="inline-flex items-center gap-2 text-sm font-semibold text-brand-red">
                                            Talk to an advisor <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>


        <!-- PROCESS STRIP (Horizontal Flow) -->
        <section class="relative py-20 bg-white border-b border-gray-200">
            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-extrabold">How We Engineer Systems</h2>
                <div class="mt-10 overflow-x-auto">
                    <ol class="flex items-center min-w-[720px] gap-10">
                        <?php
                        $steps = [
                            ["icon" => "search", "title" => "Discovery", "desc" => "Map risks, goals, constraints."],
                            ["icon" => "layers", "title" => "Architecture", "desc" => "Design entities, flows, controls."],
                            ["icon" => "settings", "title" => "Integration", "desc" => "Implement with automation."],
                            ["icon" => "bar-chart-3", "title" => "Optimization", "desc" => "Monitor signals, iterate."],
                            ["icon" => "shield", "title" => "Compliance", "desc" => "Audit-ready documentation."],
                        ];
                        foreach ($steps as $i => $st):
                            ?>
                            <li class="relative">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-brand-red/10 flex items-center justify-center border border-brand-red/20">
                                        <i data-lucide="<?= $st['icon'] ?>" class="w-5 h-5 text-brand-red"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold"><?= $st['title'] ?></p>
                                        <p class="text-xs text-gray-600"><?= $st['desc'] ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php if ($i < count($steps) - 1): ?>
                                <li class="h-px w-20 bg-gradient-to-r from-gray-200 to-gray-300 self-center"></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="relative py-24 bg-brand-black text-white overflow-hidden">
            <div class="absolute inset-0 opacity-[0.07]" style="
      background-image:
        radial-gradient(circle at 20% 20%, rgba(224,37,38,.6), transparent 35%),
        radial-gradient(circle at 80% 80%, rgba(212,175,55,.5), transparent 35%);
      filter: blur(60px);
    "></div>

            <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
                <h3 class="text-3xl md:text-4xl font-extrabold">We design financial infrastructure that scales with you.
                </h3>
                <p class="mt-4 text-gray-300 text-lg font-light">Let’s architect a system that keeps your decisions
                    fast, defensible, and compliant.</p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="./contactus.php#contact-form"
                        class="inline-flex items-center justify-center px-8 py-3 rounded-md bg-brand-red text-white font-semibold hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                        Start a Consultation
                    </a>
                    <a href="./contactus.php"
                        class="inline-flex items-center justify-center px-8 py-3 rounded-md border border-white/20 text-white/90 hover:bg-white/10 focus:outline-none">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>

    </main>

    <?php include('./components/footer.php'); ?>

    <!-- ===== Interactions (Option B scaffolding) ===== -->
    <script>
        // Ensure Lucide icons render
        if (window.lucide && lucide.createIcons) { lucide.createIcons(); }

        // MATRIX: expand tile on hover/focus (desktop), tap to expand (mobile)
        (function () {
            const cols = document.querySelectorAll('#serviceMatrix .service-col');
            const tiles = document.querySelectorAll('#serviceMatrix .service-tile');

            function expand(idx) {
                cols.forEach((c, i) => {
                    // expanded column grows, others shrink
                    c.style.flexBasis = (i === idx) ? '40%' : '15%';
                });
            }
            function reset() {
                cols.forEach(c => c.style.flexBasis = '');
            }

            tiles.forEach((tile, idx) => {
                tile.addEventListener('mouseenter', () => {
                    if (window.matchMedia('(pointer:fine)').matches) expand(idx);
                });
                tile.addEventListener('focus', () => expand(idx));
                tile.addEventListener('mouseleave', () => {
                    if (window.matchMedia('(pointer:fine)').matches) reset();
                });
                tile.addEventListener('blur', reset);
                tile.addEventListener('click', () => {
                    // toggle expand on small screens
                    if (!window.matchMedia('(min-width: 768px)').matches) {
                        const expanded = cols[idx].style.flexBasis && cols[idx].style.flexBasis !== '';
                        if (expanded) reset(); else expand(idx);
                    }
                });
            });
        })();

        // HORIZONTAL SCROLLER: make mouse wheel scroll horizontally
        (function () {
            const scroller = document.getElementById('serviceScroller');
            if (!scroller) return;
            scroller.addEventListener('wheel', (e) => {
                // hold shift OR natural wheel triggers horizontal
                if (!e.shiftKey) {
                    e.preventDefault();
                    scroller.scrollLeft += (e.deltaY || e.deltaX);
                }
            }, { passive: false });
        })();

        // Reveal animations using IntersectionObserver for .fade-up
        (function () {
            const els = document.querySelectorAll('.fade-up');
            if (!('IntersectionObserver' in window)) {
                els.forEach(el => el.style.opacity = 1);
                return;
            }
            const obs = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationDelay = entry.target.style.animationDelay || '0s';
                        entry.target.classList.add('animate-[fadeUp_1s_ease-out_forwards]');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            els.forEach(el => obs.observe(el));
        })();
    </script>
    <style>
        #services-horizontal {
            position: relative;
        }

        /* height set by JS */
        #services-track {
            scrollbar-width: none;
        }

        #services-track::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script>
        (function () {
            const section = document.getElementById('services-horizontal');
            const sticky = document.getElementById('services-sticky');
            const track = document.getElementById('services-track');

            if (!section || !sticky || !track) return;

            // Enable/disable horizontal takeover by breakpoint
            const mq = window.matchMedia('(min-width: 1024px)'); // lg and up
            let enabled = mq.matches;

            function setSectionHeight() {
                if (!enabled) {
                    section.style.height = '';
                    track.style.transform = '';
                    track.style.willChange = '';
                    return;
                }
                // sticky height already equals viewport minus navbar (calc in class)
                const stickyH = sticky.getBoundingClientRect().height;
                const trackW = track.scrollWidth;
                const viewportW = window.innerWidth;

                // extra vertical scroll needed to move the track fully across
                const extra = Math.max(0, trackW - viewportW);
                section.style.height = (stickyH + extra) + 'px';
                track.style.willChange = 'transform';
            }

            function onScroll() {
                if (!enabled) return;

                const rect = section.getBoundingClientRect();
                const stickyH = sticky.getBoundingClientRect().height;

                // how far we’ve scrolled through the section
                const start = rect.top;
                const end = rect.bottom - stickyH;
                const total = end - start;

                if (total <= 0) return;

                const progress = Math.min(1, Math.max(0, (-start) / total));

                const maxX = track.scrollWidth - window.innerWidth;
                track.style.transform = `translate3d(${-progress * maxX}px, 0, 0)`;
            }

            // handle resize/orientation changes
            function onResize() {
                enabled = mq.matches;
                setSectionHeight();
                onScroll();
            }

            // init
            window.addEventListener('resize', onResize);
            window.addEventListener('orientationchange', onResize);
            window.addEventListener('load', () => { setSectionHeight(); onScroll(); });
            window.addEventListener('scroll', onScroll, { passive: true });
            mq.addEventListener ? mq.addEventListener('change', onResize) : mq.addListener(onResize);

            // first paint
            setSectionHeight();
            onScroll();
        })();
    </script>


</body>

</html>