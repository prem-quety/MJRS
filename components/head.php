<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    if (!empty($page_title) && stripos($page_title, 'MJRS') === false) {
        $page_title .= ' | MJRS Associates';
    }
    ?>

    <!-- Dynamic Meta Tags -->
    <title><?= $page_title ?? 'MJRS Associates' ?></title>
    <meta name="description"
        content="<?= $page_description ?? 'Precision-driven corporate, tax, and financial advisory services designed for sustainable business growth in Canada.' ?>">
    <meta name="keywords"
        content="<?= $page_keywords ?? 'MJRS, Tax, Incorporation, Accounting, Corporate Structuring, Canada' ?>">
    <meta name="author" content="MJRS Associates">
    <meta name="robots" content="<?= $page_robots ?? 'index, follow' ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= $page_url ?? 'https://mjrsassociates.ca' ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $page_title ?? 'MJRS Associates' ?>">
    <meta property="og:description"
        content="<?= $page_description ?? 'Precision-driven corporate, tax, and financial advisory services designed for sustainable business growth in Canada.' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $page_url ?? 'https://mjrsassociates.ca' ?>">
    <meta property="og:image" content="<?= $page_image ?? 'https://mjrsassociates.ca/assets/images/og-banner.jpg' ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $page_title ?? 'MJRS Associates' ?>">
    <meta name="twitter:description"
        content="<?= $page_description ?? 'Precision-driven corporate, tax, and financial advisory services designed for sustainable business growth in Canada.' ?>">
    <meta name="twitter:image" content="<?= $page_image ?? 'https://mjrsassociates.ca/assets/images/og-banner.jpg' ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['Inter', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            red: '#e02526',
                            black: '#231F20',
                            gold: '#d4af37',
                        }
                    }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Global Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            opacity: 0;
            animation: fadeUp 1s ease-out forwards;
        }
    </style>

    <!-- Google Tag Manager (placeholder) -->
    <?php if (!empty($GTM_ID)): ?>
        <script>
                (function (w, d, s, l, i) {
                    w[l] = w[l] || []; w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    }); var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', '<?= $GTM_ID ?>');
        </script>
    <?php endif; ?>
    <!-- Page-Specific JSON-LD -->
    <?php if (!empty($page_jsonld)): ?>
        <?php if (is_array($page_jsonld)): ?>
            <?php foreach ($page_jsonld as $json): ?>
                <script type="application/ld+json">
                                                                                <?= is_array($json) ? json_encode($json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : $json ?>
                                                                            </script>
            <?php endforeach; ?>
        <?php else: ?>
            <script type="application/ld+json">
                                                        <?= is_array($page_jsonld) ? json_encode($page_jsonld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : $page_jsonld ?>
                                                    </script>
        <?php endif; ?>
    <?php endif; ?>
</head>