<?php
/**
 * Theme Header
 * @package myCAO
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="myCAO - Modern Cloud-Based Accounting ERP System">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">myCAO</a>
        <ul class="nav-links">
            <li><a href="#features">Features</a></li>
            <li><a href="#modules">Modules</a></li>
            <li><a href="#technology">Technology</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="https://github.com/tundock007/myCAO" class="btn btn-primary" target="_blank">Get Started</a></li>
        </ul>
    </div>
</nav>
