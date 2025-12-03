<?php
/**
 * Template Name: Privacy Policy
 * Privacy Policy Page - myCAO.ai
 * @package myCAO
 */

get_header();
?>

<main class="legal-page">
    <div class="container">
        <div class="legal-content">
            <header class="legal-header">
                <h1>Privacy Policy</h1>
                <p class="last-updated">Last Updated: December 2025</p>
            </header>

            <section class="legal-section">
                <h2>1. Overview</h2>
                <p>myCAO ("the Application") is currently in pre-release and not publicly available.</p>
                <p>This placeholder policy describes how information is handled within the test/sandbox version of the Application.</p>
            </section>

            <section class="legal-section">
                <h2>2. Information We Collect (Testing Only)</h2>
                <p>During this development stage, the Application may collect basic technical metadata such as:</p>
                <ul>
                    <li>Browser or device type</li>
                    <li>IP address</li>
                    <li>Error logs</li>
                    <li>Test data manually entered for evaluation</li>
                </ul>
                <p class="warning-text"><strong>No production financial data, payroll data, or sensitive identifiable information should be entered into the system.</strong></p>
            </section>

            <section class="legal-section">
                <h2>3. How Information Is Used</h2>
                <p>Any information collected in the sandbox environment may be used for:</p>
                <ul>
                    <li>Debugging</li>
                    <li>Improving features</li>
                    <li>Monitoring system performance</li>
                    <li>Testing integrations (e.g., QuickBooks, payroll APIs, banking sandboxes)</li>
                </ul>
                <p>The Application is not processing real customer or regulated data.</p>
            </section>

            <section class="legal-section">
                <h2>4. Data Storage and Security</h2>
                <p>We apply reasonable development-phase security practices, but the sandbox environment is not intended for storage of sensitive or regulated data.</p>
                <p>Data entered may be deleted, reset, or overwritten during development.</p>
            </section>

            <section class="legal-section">
                <h2>5. Third-Party Integrations</h2>
                <p>The sandbox environment may connect to third-party test APIs, such as:</p>
                <ul>
                    <li>QuickBooks Sandbox</li>
                    <li>Payroll/HR sandbox providers</li>
                    <li>Banking/Financial data sandboxes</li>
                    <li>OCR/Document processing APIs</li>
                </ul>
                <p>These integrations operate using test credentials and simulated data only.</p>
            </section>

            <section class="legal-section">
                <h2>6. Cookies and Tracking</h2>
                <p>Basic session cookies may be used to support authentication in the development interface.</p>
                <p>No advertising, analytics, or cross-site tracking tools are used.</p>
            </section>

            <section class="legal-section">
                <h2>7. Your Rights</h2>
                <p>Since this environment is not open for public use and stores no production data, user rights under consumer privacy laws (e.g., GDPR, CCPA, NDPR) are not yet applicable.</p>
                <p>These will be fully supported upon official launch.</p>
            </section>

            <section class="legal-section">
                <h2>8. Changes to This Policy</h2>
                <p>This placeholder policy will be replaced with a full Privacy Policy once myCAO approaches production release.</p>
            </section>

            <section class="legal-section">
                <h2>9. Contact</h2>
                <p>Questions can be directed to:</p>
                <p><a href="mailto:privacy@mycao.ai">privacy@mycao.ai</a></p>
            </section>

            <div class="back-link">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">← Back to Home</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
