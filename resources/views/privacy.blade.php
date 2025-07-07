<!-- WILLY -->
<x-base-layout title="Privacy Notice">
    <div class="max-w-4xl mx-auto px-4 py-12 bg-white text-black space-y-8 leading-relaxed text-sm">

        <h1 class="text-3xl font-bold text-slate-800 mb-6">Privacy Notice</h1>

        <p class="text-slate-700">Last updated: {{ now()->format('F d, Y') }}</p>

        <h2 class="text-2xl font-bold text-slate-800">1. Data Controller</h2>
        <p>
            The data controller is <strong>[Vibe s.r.l]</strong>, located at <strong>[Company Address]</strong>.
            You can contact us at <strong>[email@example.com]</strong> for any questions about your data.
        </p>

        <h2 class="text-2xl font-bold text-slate-800">2. Types of Data Collected</h2>
        <ul class="list-disc ml-6 space-y-1">
            <li>Identification data: name, email, encrypted password.</li>
            <li>Usage data: IP address, browser type, visit time and date.</li>
            <li>User activity: selected packages, generated content (e.g. book titles, descriptions).</li>
            <li>Any data submitted through contact or purchase forms.</li>
        </ul>

        <h2 class="text-2xl font-bold text-slate-800">3. Purpose of Data Processing</h2>
        <p>We collect and process your personal data to:</p>
        <ul class="list-disc ml-6 space-y-1">
            <li>Provide and manage access to the platform and services.</li>
            <li>Generate and deliver requested content (e.g. books).</li>
            <li>Respond to inquiries or support requests.</li>
            <li>Send important service communications (only if consented).</li>
            <li>Monitor, improve, and secure the platform.</li>
        </ul>

        <h2 class="text-2xl font-bold text-slate-800">4. Legal Basis</h2>
        <p>Your data is processed based on:</p>
        <ul class="list-disc ml-6 space-y-1">
            <li>The performance of a contract (e.g. service use).</li>
            <li>Your explicit consent (e.g. marketing emails).</li>
            <li>Legal obligations (e.g. accounting or fraud prevention).</li>
        </ul>

        <h2 class="text-2xl font-bold text-slate-800">5. Data Storage</h2>
        <p>Your data will be retained for as long as necessary to fulfill the purposes described, or until you request deletion, and in compliance with applicable laws.</p>

        <h2 class="text-2xl font-bold text-slate-800">6. Data Sharing</h2>
        <p>We may share your data with trusted service providers (e.g. hosting, analytics, email). We never sell your data. External providers may include:</p>
        <ul class="list-disc ml-6 space-y-1">
            <li>Hosting platforms</li>
            <li>Email delivery systems</li>
            <li>Analytics tools (e.g. Google Analytics)</li>
        </ul>

        <h2 class="text-2xl font-bold text-slate-800">7. Your Rights</h2>
        <p>As a user, you have the right to:</p>
        <ul class="list-disc ml-6 space-y-1">
            <li>Access, correct or delete your personal data.</li>
            <li>Limit or oppose data processing.</li>
            <li>Withdraw consent at any time.</li>
            <li>Request data portability.</li>
        </ul>
        <p>You can make these requests by writing to <strong>[email@example.com]</strong>.</p>

        <h2 class="text-2xl font-bold text-slate-800">8. Cookies</h2>
        <p>
            We use technical cookies and, where consented, analytical or third-party cookies. See our separate <a href="/cookies" class="underline text-blue-600">Cookie Policy</a> for more information.
        </p>

        <h2 class="text-2xl font-bold text-slate-800">9. Changes to this Notice</h2>
        <p>
            We may update this Privacy Notice at any time. Changes will be posted on this page with a new "Last Updated" date.
        </p>

        <h2 class="text-2xl font-bold text-slate-800">10. Contact</h2>
        <p>
            For questions or requests regarding your data or this policy, please contact us at <strong>[email@example.com]</strong>.
        </p>
    </div>
</x-base-layout>
