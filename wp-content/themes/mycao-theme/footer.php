<?php
/**
 * Theme Footer
 * @package myCAO
 */
?>

<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">myCAO</a>
                <p>Modern Cloud-Based Accounting ERP System. Streamline your financial operations with comprehensive tools.</p>
            </div>
            <div class="footer-col">
                <h4>Product</h4>
                <ul class="footer-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#modules">Modules</a></li>
                    <li><a href="#technology">Technology</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Resources</h4>
                <ul class="footer-links">
                    <li><a href="https://github.com/tundock007/myCAO" target="_blank">Documentation</a></li>
                    <li><a href="https://github.com/tundock007/myCAO" target="_blank">API Reference</a></li>
                    <li><a href="https://github.com/tundock007/myCAO" target="_blank">GitHub</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> myCAO - Chief Accounting Officer System. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
