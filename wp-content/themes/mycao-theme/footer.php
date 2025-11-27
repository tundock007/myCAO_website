<?php
/**
 * Theme Footer - myCAO.ai
 * @package myCAO
 */
?>

<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <div class="logo-icon">my</div>
                    <div class="logo-text">
                        <span>myCAO.ai</span>
                    </div>
                </a>
                <p>AI-powered bookkeeping, payroll & IRS-ready taxes for US businesses and individuals.</p>
            </div>
            <div class="footer-col">
                <h4>Product</h4>
                <ul class="footer-links">
                    <li><a href="#offerings">Enterprise</a></li>
                    <li><a href="#offerings">Business</a></li>
                    <li><a href="#offerings">Individuals</a></li>
                    <li><a href="#demo">Demo</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Resources</h4>
                <ul class="footer-links">
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">API Reference</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> myCAO.ai - AI bookkeeping, payroll & tax. All rights reserved.</p>
            <p>Same myCAO.ai experience on web and mobile - approve, review and export from anywhere.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
