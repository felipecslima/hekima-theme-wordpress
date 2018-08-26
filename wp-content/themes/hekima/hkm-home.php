<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
    <div class='wrap'>
        <?php // the_content()?>
        <?php get_template_part('pages/hkm-home-box-1', 'home'); ?>
        <?php get_template_part('pages/hkm-home-box-2', 'home'); ?>
        <?php get_template_part('pages/hkm-home-box-3', 'home'); ?>
        <?php get_template_part('pages/hkm-home-box-4', 'home'); ?>
        <?php get_template_part('pages/hkm-home-box-5', 'home'); ?>
        <?php get_template_part('pages/hkm-home-box-6', 'home'); ?>
    </div>
<?php get_footer(); ?>