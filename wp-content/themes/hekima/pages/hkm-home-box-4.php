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

                ?>
                <?php foreach ($arrPostsDivide6 as $arrPost) { ?>
                    <li class="line-with-6">
                        <?php foreach ($arrPost as $post) { ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>
                            <a href="">
                                <img src="<?php echo $image[0] ?>" alt="Clique aqui">
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</div>
