<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Contact MJRS Associates – Speak with a Tax & Advisory Expert";
$page_description = "Get in touch with MJRS Associates for structured corporate tax planning, business incorporation, and compliance advisory across Canada.";
$page_keywords = "Contact MJRS, Tax Advisory Canada, Corporate Accounting Ontario, Business Structuring, MJRS Toronto Office";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/contactus.php";
$page_image = "https://mjrsassociates.ca/assets/images/og-banner.jpg";
$GTM_ID = "GTM-XXXXXXX";

$page_jsonld = [
    [
        "@context" => "https://schema.org",
        "@type" => "ContactPage",
        "name" => "Contact MJRS Associates",
        "url" => "https://mjrsassociates.ca/contactus.php",
        "publisher" => [
            "@type" => "Organization",
            "name" => "MJRS Associates",
            "logo" => [
                "@type" => "ImageObject",
                "url" => "https://mjrsassociates.ca/assets/images/mjrs-logo-light.svg"
            ]
        ]
    ]
];
?>

<?php include('./components/head.php'); ?>

<body class="font-body bg-white text-brand-black antialiased">
    <?php include('./components/navbar.php'); ?>


    <!-- CONTACT HERO -->
    <section
        class="relative flex items-center justify-center min-h-[70vh] bg-gradient-to-b from-white to-gray-50 border-b border-gray-200 overflow-hidden">

        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 opacity-[0.15] pointer-events-none" style="
        background-image:
        linear-gradient(to right, rgba(0,0,0,0.04) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(0,0,0,0.04) 1px, transparent 1px);
        background-size: 48px 48px;">
        </div>

        <!-- Glows -->
        <div class="absolute -top-40 -left-40 w-[28rem] h-[28rem] bg-brand-red/10 rounded-full blur-[180px]"></div>
        <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-brand-gold/10 rounded-full blur-[180px]"></div>

        <!-- Content -->
        <div class="relative z-10 w-full max-w-6xl px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- Left Text Column -->
            <div class="fade-up" style="animation-delay: 0.2s;">
                <span
                    class="inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide bg-brand-red/10 text-brand-red border border-brand-red/20">
                    Let’s Start a Conversation
                </span>
                <h1 class="text-5xl md:text-6xl font-extrabold leading-[1.1] text-brand-black mb-6">
                    Connect with <span class="text-brand-red">MJRS Associates</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed font-light max-w-lg mb-8">

                    Reach out! our experts are ready to guide you through your next financial move.
                </p>
                <a href="#contact-form"
                    class="inline-flex items-center px-8 py-3 text-sm font-semibold text-white bg-brand-red rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-brand-red/40 transition">
                    Get in Touch
                </a>
            </div>

            <!-- Right Illustration / Visual Column -->
            <div class="fade-up relative md:justify-end md:flex" style="animation-delay: 0.5s;">

            </div>
        </div>
    </section>



    <!-- CONTACT + FORM -->
    <section class="relative py-20 bg-white overflow-hidden" id="contact-form">
        <div class="absolute -top-40 right-0 w-[26rem] h-[26rem] bg-brand-gold/10 rounded-full blur-[160px]"></div>
        <div class="absolute bottom-0 left-0 w-[22rem] h-[22rem] bg-brand-red/10 rounded-full blur-[140px]"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 space-y-16">

            <!-- HEADER INTRO -->
            <div class="text-center fade-up" style="animation-delay: 0.2s;">
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-black mb-4">Get in Touch</h2>
                <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto font-light">
                    Connect directly with our leadership team or send us a message — we’re here to help with your
                    accounting, tax, and compliance needs.
                </p>
            </div>

            <!-- CONTACT CARDS -->
            <div class="fade-up grid md:grid-cols-2 gap-8" style="animation-delay: 0.6s;">

                <!-- Rupinder Sandhu -->
                <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-brand-black mb-1 flex items-center gap-2">
                        <i data-lucide="user" class="w-5 h-5 text-brand-red"></i> Rupinder Sandhu
                    </h3>
                    <p class="text-sm text-gray-600 mb-4">Owner / Director</p>
                    <div class="space-y-3 text-gray-600 text-sm">
                        <p class="flex items-center gap-2">
                            <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i>
                            <span><span class="font-semibold text-brand-black">Office:</span> +1 (905) 460-3756
                                Ext:205</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <i data-lucide="smartphone" class="w-4 h-4 text-brand-red"></i>
                            <span><span class="font-semibold text-brand-black">Cell:</span> +1 (647) 888-0883</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <i data-lucide="mail" class="w-4 h-4 text-brand-gold"></i>
                            <span><span class="font-semibold text-brand-black">Email:</span> Sandhu057@gmail.com</span>
                        </p>
                    </div>
                </div>

                <!-- Rimi Sandhu -->
                <div class="bg-white border border-gray-200 rounded-2xl shadow-md p-8 hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-brand-black mb-1 flex items-center gap-2">
                        <i data-lucide="user" class="w-5 h-5 text-brand-red"></i> Rimi Sandhu
                    </h3>
                    <p class="text-sm text-gray-600 mb-4">Controller</p>
                    <div class="space-y-3 text-gray-600 text-sm">
                        <p class="flex items-center gap-2">
                            <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i>
                            <span><span class="font-semibold text-brand-black">Office:</span> +1 (905) 460-3756
                                Ext:201</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <i data-lucide="smartphone" class="w-4 h-4 text-brand-red"></i>
                            <span><span class="font-semibold text-brand-black">Cell:</span> +1 (647) 464-8624</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <i data-lucide="mail" class="w-4 h-4 text-brand-gold"></i>
                            <span><span class="font-semibold text-brand-black">Email:</span>
                                rimi.sandhu05@gmail.com</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- FORM SECTION -->
            <div class="fade-up grid lg:grid-cols-2 gap-10 items-start" style="animation-delay: 0.4s;">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-10">
                    <h3 class="text-2xl font-extrabold text-brand-black mb-6 flex items-center gap-2">
                        <i data-lucide="mail-open" class="w-6 h-6 text-brand-red"></i> Send Us a Message
                    </h3>

                    <form id="contactForm" action="contact-form-main.php" method="POST" class="space-y-6">

                        <div>
                            <label for="name" class="block text-sm font-semibold text-brand-black mb-2">Full
                                Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:ring-2 focus:ring-brand-red focus:outline-none"
                                required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-brand-black mb-2">Email
                                Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:ring-2 focus:ring-brand-red focus:outline-none"
                                required>
                        </div>
                        <div>
                            <label for="subject"
                                class="block text-sm font-semibold text-brand-black mb-2">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:ring-2 focus:ring-brand-red focus:outline-none">
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-semibold text-brand-black mb-2">Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:ring-2 focus:ring-brand-red focus:outline-none"
                                required></textarea>
                        </div>
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full rounded-md bg-brand-red text-white font-semibold py-3 hover:bg-red-600 transition focus:outline-none focus:ring-2 focus:ring-brand-red">
                                Submit Inquiry
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Map -->
                <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200 h-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.89533833065!2d-79.38064488451094!3d43.6425669791214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34d2c9b1e5b3%3A0xf19c51df7e3bfb20!2s123%20Bay%20St%2C%20Toronto%2C%20ON!5e0!3m2!1sen!2sca!4v1700000000000!5m2!1sen!2sca"
                        width="100%" height="100%" style="border:0; min-height: 460px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>

            <!-- LOCATION FOOTER -->
            <div class="text-center fade-up pt-12 border-t border-gray-200" style="animation-delay: 0.8s;">
                <h4 class="text-lg font-semibold text-brand-black mb-2 flex items-center justify-center gap-2">
                    <i data-lucide="map-pin" class="w-5 h-5 text-brand-gold"></i> Office Location
                </h4>
                <p class="text-gray-600">
                    Toronto, Ontario, Canada<br>
                    Monday–Friday: 9AM – 6PM
                </p>
            </div>
        </div>
    </section>

    <script>
        document.querySelector('#contactForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);

            const response = await fetch(form.action, { method: 'POST', body: formData });
            const result = await response.json();

            if (result.success) {
                alert(result.success);
                form.reset();
            } else {
                alert(result.error || 'Something went wrong. Please try again.');
            }
        });
    </script>



    <?php include('./components/footer.php'); ?>
</body>

</html>