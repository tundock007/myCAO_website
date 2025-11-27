<?php
/**
 * Main template file
 * @package myCAO
 */
get_header();

if (is_front_page()) {
    get_template_part('front-page');
} else {
?>
<main class="section">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>
<?php
}
get_footer();
