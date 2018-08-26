<div class="home-box-4 d-flex justify-content-center">
    <div class="home-content">

        <h2 class="d-flex justify-content-center">
            Quem confia na Hekima
        </h2>

        <div class="partners">
            <?php
            $args = array('post_type' => 'hkm-partners', 'posts_per_page' => 100, 'orderby=id&order=DESC');
            $loop = new WP_Query($args);
            $arrPostsFull = $loop->get_posts();
            $cnt = 0
            ?>
            <?php foreach ($arrPostsFull as $post) { ?>
                <div data-aos="fade-up" data-aos-delay="0">
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                    <a href="">
                        <img src="<?php echo $image[0] ?>" alt="Clique aqui">
                    </a>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
