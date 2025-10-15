<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "Open Incorporation in Canada – Register Your Business with MJRS Associates";
$page_description = "Start your Canadian business with confidence. MJRS Associates provides expert incorporation services, helping entrepreneurs and corporations set up the right legal and tax structure from day one.";
$page_keywords = "Open Incorporation Canada, Register Business Ontario, Federal Incorporation Canada, Incorporation Services Toronto, MJRS Associates";
$page_robots = "index, follow";
$page_url = "https://mjrsassociates.ca/open-incorporation";
$page_image = "https://mjrsassociates.ca/assets/images/og-incorporation.jpg";
$GTM_ID = "GTM-XXXXXXX"; // replace with actual when available

$page_jsonld = [
    [
        "@context" => "https://schema.org",
        "@type" => "Service",
        "serviceType" => "Business Incorporation",
        "provider" => [
            "@type" => "Organization",
            "name" => "MJRS Associates",
            "url" => "https://mjrsassociates.ca",
            "logo" => "https://mjrsassociates.ca/assets/images/mjrs-logo-light.svg"
        ],
        "areaServed" => [
            "@type" => "Country",
            "name" => "Canada"
        ],
        "description" => "Incorporation and business registration services across Canada, helping entrepreneurs and organizations establish compliant corporate structures."
    ],
    [
        "@context" => "https://schema.org",
        "@type" => "WebPage",
        "name" => "Open Incorporation – MJRS Associates",
        "url" => "https://mjrsassociates.ca/open-incorporation",
        "description" => "Register your business and get incorporated in Canada with MJRS Associates’ expert guidance on structure, compliance, and CRA registration."
    ]
];
?>

<?php include('./components/head.php'); ?>

<body class="font-body bg-white text-brand-black antialiased">
    <?php include('./components/navbar.php'); ?>
    <main class="pt-[50px]">

        <section class="relative flex items-center justify-center min-h-[60vh] bg-brand-black overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="./assets/images/corporate3.jpg" alt="Incorporation Background"
                    class="w-full h-full object-cover object-center opacity-70">
            </div>

            <!-- Soft Overlay for Text Readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/80"></div>

            <!-- Glow Shapes -->
            <div class="absolute -top-40 -left-40 w-[30rem] h-[30rem] bg-brand-red/20 rounded-full blur-[160px]"></div>
            <div class="absolute -bottom-32 -right-32 w-[28rem] h-[28rem] bg-brand-gold/10 rounded-full blur-[150px]">
            </div>

            <!-- Content -->
            <div class="relative z-10 max-w-5xl px-6 text-center text-white">
                <span class="fade-up inline-block mb-4 px-4 py-1 rounded-full text-xs font-medium tracking-wide
        bg-white/10 text-brand-gold border border-white/20" style="animation-delay: 0.2s">
                    Start Your Journey the Right Way
                </span>

                <h1 class="fade-up font-heading text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05]"
                    style="animation-delay: 0.5s">
                    Open Your <span class="text-brand-gold">Incorporation</span><br />
                    with <span class="text-brand-red">Confidence & Clarity</span>
                </h1>

                <p class="fade-up mt-6 text-lg md:text-xl text-gray-100 max-w-3xl mx-auto leading-relaxed font-light"
                    style="animation-delay: 0.9s">
                    Incorporate your Canadian business seamlessly with MJRS Associates — ensuring compliance,
                    structure, and peace of mind from day one.
                </p>

                <div class="fade-up mt-8 flex flex-wrap justify-center gap-4" style="animation-delay: 1.2s">
                    <a href="#contact" class="inline-flex items-center rounded-md bg-brand-red px-6 py-2 text-sm font-semibold text-white
            hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                        Incorporate Now
                    </a>
                    <a href="#learn-more" class="inline-flex items-center rounded-md border border-white/30 bg-transparent px-6 py-2 text-sm font-medium text-white
            hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/20">
                        Learn More
                    </a>
                </div>
            </div>
        </section>




        <!-- OPEN INCORPORATION FORM -->
        <section class="relative py-28 bg-gradient-to-b from-white to-gray-50 border-t border-gray-200 overflow-hidden">
            <!-- Glow -->
            <div class="absolute top-0 right-0 w-[28rem] h-[28rem] bg-brand-red/5 rounded-full blur-[200px]"></div>

            <div class="relative z-10 max-w-6xl mx-auto px-6">
                <!-- Title -->
                <div class="text-center mb-16">
                    <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                        style="animation-delay: 0.2s;">
                        Open Your <span class="text-brand-red">Incorporation</span>
                    </h2>
                    <p class="fade-up text-gray-700 text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed"
                        style="animation-delay: 0.4s;">
                        Fill in the form below to begin your incorporation request. Our advisors will review your
                        submission
                        and get in touch to guide you through the next steps.
                    </p>
                </div>

                <!-- Form -->
                <form id="incorporation-form"
                    class="fade-up bg-white border border-gray-200 rounded-3xl shadow-md p-10 space-y-10"
                    style="animation-delay: 0.6s;">
                    <input type="hidden" name="_csrf"
                        value="8Q2LPT6XKB-rC4R1yBxe1dD6o2yBGdUEuOSYLNMx9nSXa-pYZ_1fKO1R1wWmfRmKqZCXOfVAo1fWvfoeklOpMA==">

                    <!-- PERSONAL DETAILS -->
                    <div>
                        <h5 class="text-xl font-semibold text-brand-black mb-4">Personal Details</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">First Name</label>
                                <input type="text" name="OpenIncorporationRequests[first_name]" required
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Last Name</label>
                                <input type="text" name="OpenIncorporationRequests[last_name]" required
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Phone</label>
                                <input type="text" name="OpenIncorporationRequests[phone]"
                                    placeholder="+1 (___) ___-____"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Email</label>
                                <input type="email" name="OpenIncorporationRequests[primary_email]" required
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">SIN</label>
                                <input type="text" name="OpenIncorporationRequests[sin]" placeholder="___-___-___"
                                    maxlength="11"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Marital Status</label>
                                <select name="OpenIncorporationRequests[fk_marital_status_id]"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                                    <option value="">Select</option>
                                    <option value="1">Married</option>
                                    <option value="2">Living common-law</option>
                                    <option value="3">Separated</option>
                                    <option value="4">Widowed</option>
                                    <option value="5">Divorced</option>
                                    <option value="6">Single</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Address</label>
                                <input type="text" name="OpenIncorporationRequests[address]" required
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">City</label>
                                <input type="text" name="OpenIncorporationRequests[city]" required
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-brand-black mb-2">Province</label>
                                    <select name="OpenIncorporationRequests[state]"
                                        class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                                        <option value="">Select</option>
                                        <option value="9">ON</option>
                                        <option value="2">BC</option>
                                        <option value="1">AB</option>
                                        <option value="3">MB</option>
                                        <option value="11">QC</option>
                                        <option value="12">SK</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-brand-black mb-2">Postal Code</label>
                                    <input type="text" name="OpenIncorporationRequests[zip]" placeholder="___ ___"
                                        maxlength="7"
                                        class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COMPANY DETAILS -->
                    <div>
                        <h5 class="text-xl font-semibold text-brand-black mb-4">Company Details</h5>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Incorporation
                                    Type</label>
                                <select name="OpenIncorporationRequests[fk_incorporation_type_id]"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                                    <option value="">Select</option>
                                    <option value="1">Federal</option>
                                    <option value="2">Provincial</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Industry</label>
                                <select name="OpenIncorporationRequests[fk_industry_type_id]"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                                    <option value="">Select</option>
                                    <option value="1">IT</option>
                                    <option value="2">Logistics</option>
                                    <option value="3">Restaurant</option>
                                    <option value="4">Truck Driver</option>
                                    <option value="5">Owner Operator</option>
                                    <option value="6">Grocery Store</option>
                                    <option value="7">Immigration</option>
                                    <option value="8">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Named or
                                    Numbered?</label>
                                <select name="OpenIncorporationRequests[named_company]"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                                    <option value="">Select</option>
                                    <option value="1">Named</option>
                                    <option value="2">Numbered</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-6">
                            <label class="block text-sm font-medium text-brand-black mb-2">Company Name
                                Preferences</label>
                            <input type="text" name="OpenIncorporationRequests[company_name_preferences]"
                                class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                        </div>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Business Address</label>
                                <input type="text" name="OpenIncorporationRequests[company_address]"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">City</label>
                                <input type="text" name="OpenIncorporationRequests[company_city]"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Province</label>
                                <select name="OpenIncorporationRequests[company_state]"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                                    <option value="">Select</option>
                                    <option value="9">ON</option>
                                    <option value="2">BC</option>
                                    <option value="1">AB</option>
                                    <option value="3">MB</option>
                                    <option value="11">QC</option>
                                    <option value="12">SK</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-brand-black mb-2">Postal Code</label>
                                <input type="text" name="OpenIncorporationRequests[company_zip]" placeholder="___ ___"
                                    maxlength="7"
                                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5">
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="pt-8 flex justify-center">
                        <button type="submit" id="submitBtn"
                            class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-brand-red text-white font-semibold rounded-lg hover:bg-red-600 focus:ring-2 focus:ring-red-300 transition">
                            Submit Request
                        </button>
                    </div>

                    <p id="form-message" class="text-center text-sm mt-4"></p>
                </form>

                <!-- Footer Note -->
                <div class="fade-up mt-10 text-center text-gray-500 text-sm" style="animation-delay: 0.8s;">
                    Need assistance? Email us at
                    <a href="mailto:info@mjrsassociates.ca" class="text-brand-red font-medium hover:underline">
                        info@mjrsassociates.ca
                    </a>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('incorporation-form');
                const btn = document.getElementById('submitBtn');
                const msg = document.getElementById('form-message');

                form.addEventListener('submit', async function (e) {
                    e.preventDefault();

                    msg.textContent = '';
                    btn.disabled = true;
                    btn.textContent = 'Submitting...';

                    try {
                        const formData = new FormData(form);

                        const response = await fetch('./open-new-incorporation', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        // Handle server response
                        const result = await response.text();

                        if (response.ok) {
                            form.reset();
                            msg.textContent = 'Thank you! Your incorporation request has been submitted.';
                            msg.className = 'text-center text-green-600 font-medium mt-4';
                        } else {
                            msg.textContent = result || 'Something went wrong. Please try again later.';
                            msg.className = 'text-center text-red-600 font-medium mt-4';
                        }

                    } catch (error) {
                        msg.textContent = 'Network error. Please check your connection.';
                        msg.className = 'text-center text-red-600 font-medium mt-4';
                    } finally {
                        btn.disabled = false;
                        btn.textContent = 'Submit Request';
                    }
                });
            });
        </script>



        <!-- FOOTER -->
        <?php include('./components/footer.php'); ?>


    </main>

</body>

</html>