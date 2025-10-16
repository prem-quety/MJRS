<!-- CTA + CONTACT FORM -->
<section class="relative py-28 bg-gradient-to-b from-white to-gray-50 border-t border-gray-200 overflow-hidden">
    <!-- Glow -->
    <div class="absolute top-0 right-0 w-[28rem] h-[28rem] bg-brand-red/5 rounded-full blur-[200px]"></div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
        <!-- CTA Text -->
        <div class="mb-16">
            <h2 class="fade-up text-4xl md:text-5xl font-extrabold text-brand-black mb-6"
                style="animation-delay: 0.2s;">
                Still Have <span class="text-brand-red">Questions?</span>
            </h2>
            <p class="fade-up text-gray-700 text-lg md:text-xl max-w-2xl mx-auto font-light leading-relaxed"
                style="animation-delay: 0.4s;">
                Our advisory team can guide you through the optimal structure, tax plan, or compliance process —
                tailored to your business, not a one-size-fits-all template.
            </p>
        </div>

        <!-- Contact Form -->
        <form
            class="fade-up bg-white border border-gray-200 rounded-3xl shadow-md p-10 text-left space-y-6 max-w-2xl mx-auto"
            style="animation-delay: 0.6s;">
            <div>
                <label for="name" class="block text-sm font-medium text-brand-black mb-2">Full Name</label>
                <input type="text" id="name" name="name" placeholder="John Smith"
                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5 text-gray-800 placeholder-gray-400 transition">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-brand-black mb-2">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com"
                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5 text-gray-800 placeholder-gray-400 transition">
            </div>

            <div>
                <label for="subject" class="block text-sm font-medium text-brand-black mb-2">Contact Number</label>
                <input type="text" id="subject" name="subject" placeholder="+1 (234) 45678"
                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5 text-gray-800 placeholder-gray-400 transition">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-brand-black mb-2">Message</label>
                <textarea id="message" name="message" rows="5"
                    placeholder="Tell us a bit about your business or what you need help with."
                    class="w-full rounded-lg border border-gray-300 focus:border-brand-red focus:ring-1 focus:ring-brand-red px-4 py-2.5 text-gray-800 placeholder-gray-400 transition"></textarea>
            </div>

            <div class="flex justify-center pt-4">
                <button type="submit"
                    class="inline-flex items-center justify-center px-8 py-3 bg-brand-red text-white font-semibold rounded-lg hover:bg-red-600 focus:ring-2 focus:ring-red-300 transition">
                    Send Message
                </button>
            </div>
        </form>

        <!-- Contact Footer Note -->
        <div class="fade-up mt-10 text-gray-500 text-sm" style="animation-delay: 0.8s;">
            Or reach us directly at
            <a href="mailto:info@mjrsassociates.ca" class="text-brand-red font-medium hover:underline">
                info@mjrsassociates.ca
            </a>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const btn = form.querySelector('button[type="submit"]');
        const msg = document.createElement('p');
        msg.className = 'text-center text-sm mt-4';
        form.appendChild(msg);

        form.addEventListener('submit', async function (e) {
            e.preventDefault();
            msg.textContent = '';
            btn.disabled = true;
            btn.textContent = 'Sending...';

            try {
                const formData = new FormData(form);
                const response = await fetch('contact-form-handler', {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const result = await response.json();

                if (response.ok && result.success) {
                    form.reset();
                    msg.textContent = result.success;
                    msg.className = 'text-center text-green-600 font-medium mt-4';
                } else {
                    msg.textContent = result.error || 'Something went wrong. Please try again.';
                    msg.className = 'text-center text-red-600 font-medium mt-4';
                }
            } catch (err) {
                msg.textContent = 'Network error. Please check your connection.';
                msg.className = 'text-center text-red-600 font-medium mt-4';
            } finally {
                btn.disabled = false;
                btn.textContent = 'Send Message';
            }
        });
    });
</script>