<?php
/**
 * Theme Header - myCAO.ai
 * @package myCAO
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="myCAO.ai - AI bookkeeping, payroll & IRS-ready taxes for US businesses and individuals">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <div class="logo-icon">my</div>
            <div class="logo-text">
                <span>myCAO.ai</span>
                <span class="logo-subtitle">United States. AI bookkeeping, payroll & tax</span>
            </div>
        </a>
        <ul class="nav-links">
            <li><a href="#waitlist" class="btn btn-primary">COMING SOON</a></li>
            <li><a href="#demo" class="btn btn-secondary">VIEW DEMO</a></li>
        </ul>
    </div>
</nav>
