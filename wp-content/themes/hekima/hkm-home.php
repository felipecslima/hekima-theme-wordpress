<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
    <div class='wrap'>
        <?php get_template_part('pages/hkm-home-box-1', 'home'); ?>
        <?php get_template_part('pages/hkm-home-box-2', 'home'); ?>
        <?php get_template_part('pages/hkm-home-box-3', 'home'); ?>
    </div>
<?php get_footer(); ?>