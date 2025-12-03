<?php
/**
 * Template Name: EULA
 * End-User License Agreement Page - myCAO.ai
 * @package myCAO
 */

get_header();
?>

<main class="legal-page">
    <div class="container">
        <div class="legal-content">
            <header class="legal-header">
                <h1>Temporary End-User License Agreement (EULA)</h1>
                <p class="last-updated">Last Updated: December 2025</p>
                <div class="status-banner">
                    <span class="status-icon">⚠️</span>
                    <p><strong>Status:</strong> This is a temporary placeholder agreement used solely for development, testing, and sandbox integrations. The final EULA will be published prior to public launch.</p>
                </div>
            </header>

            <section class="legal-section">
                <h2>1. Overview</h2>
                <p>myCAO ("the Application") is currently in pre-release development. This temporary EULA governs your access to test or evaluate the Application for demonstration or sandbox purposes only.</p>
            </section>

            <section class="legal-section">
                <h2>2. Limited License</h2>
                <p>You are granted a non-exclusive, revocable, non-transferable license to access and use the Application solely for testing, evaluation, and development purposes.</p>
                <p class="warning-text"><strong>No production or commercial use is permitted.</strong></p>
            </section>

            <section class="legal-section">
                <h2>3. No Warranty</h2>
                <p>The Application is provided "as is" without warranties of any kind, express or implied.</p>
                <p>The platform is under active development and may contain incomplete features, bugs, or inaccuracies.</p>
            </section>

            <section class="legal-section">
                <h2>4. Data Use Disclaimer</h2>
                <p>Any data input into the Application during this pre-release phase is treated as test data only.</p>
                <p class="warning-text"><strong>Do not upload confidential, sensitive, financial, payroll, or personally identifiable customer data into this environment.</strong></p>
            </section>

            <section class="legal-section">
                <h2>5. Intellectual Property</h2>
                <p>All intellectual property associated with myCAO, including software, design, and content, is the property of conTraville LLC.</p>
                <p>This placeholder EULA does not grant any ownership rights.</p>
            </section>

            <section class="legal-section">
                <h2>6. Restrictions</h2>
                <p>You agree not to:</p>
                <ul>
                    <li>Reverse engineer or attempt to access source code</li>
                    <li>Use the Application in production or for real financial reporting</li>
                    <li>Circumvent authentication or security measures</li>
                    <li>Misrepresent the nature of the testing environment</li>
                </ul>
            </section>

            <section class="legal-section">
                <h2>7. Termination</h2>
                <p>conTraville LLC may suspend or terminate sandbox access at any time for any reason.</p>
            </section>

            <section class="legal-section">
                <h2>8. Changes to This EULA</h2>
                <p>This placeholder EULA may be replaced or updated at any time when the final product documentation becomes available.</p>
            </section>

            <section class="legal-section">
                <h2>9. Contact</h2>
                <p>For questions, contact:</p>
                <p><a href="mailto:support@mycao.ai">support@mycao.ai</a></p>
            </section>

            <div class="back-link">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">← Back to Home</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
