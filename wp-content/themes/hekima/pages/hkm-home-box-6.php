<div class="home-box-6 d-flex justify-content-center">
    <div class="home-content">

        <div class="title">
            <h2 class="d-flex align-items-end">
                Estamos ansiosos para entender o seu desafio de negócio!
            </h2>
            <div class="image">
                <img src="<?php bloginfo('template_url'); ?>/images/svg/home-box-6-coffee.svg" alt="Image Coffee">
            </div>
        </div>

        <div class="home-form">
            <?php
            $customField = get_post_meta(19, 'CONTACT_FORM_HOME');
            if ($customField) {
                echo do_shortcode(current($customField));
            }
            ?>
        </div>
    </div>
</div>
