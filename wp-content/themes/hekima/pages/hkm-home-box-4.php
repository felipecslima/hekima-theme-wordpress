<div class="home-box-4 d-flex justify-content-center">
    <div class="home-content">

        <h2 class="d-flex justify-content-center">
            Quem confia na Hekima
        </h2>

        <div class="partners">
            <ul>
                <?php
                $args = array('post_type' => 'hkm-partners', 'posts_per_page' => 100, 'orderby=id&order=DESC');
                $loop = new WP_Query($args);

                $arrPostsFull = $loop->get_posts();
                $arrPostsDivide6 = array_chunk($arrPostsFull, 6);
                $arrPostsDivide4 = array_chunk($arrPostsFull, 4);

                ?>
                <?php foreach ($arrPostsDivide6 as $arrPost) { ?>
                    <li class="d-flex flex-row justify-content-between line-with-6">
                        <?php foreach ($arrPost as $post) { ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>
                            <a href="">
                                <img src="<?php echo $image[0] ?>" alt="Clique aqui">
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>

                <?php foreach ($arrPostsDivide4 as $arrPost) { ?>
                    <li class="d-flex flex-row justify-content-between line-with-4">
                        <?php foreach ($arrPost as $post) { ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>
                            <a href="">
                                <img src="<?php echo $image[0] ?>" alt="Clique aqui">
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>

            </ul>
            <div class="link d-flex align-items-center justify-content-center">
                <a href="" class="d-flex flex-row align-items-center">
                    <span>Conheça nossas soluções</span>
                    <img src="<?php bloginfo('template_url'); ?>/images/arrow-right-blue@3x.png" alt="Clique aqui">
                </a>
            </div>
        </div>
    </div>
</div>
