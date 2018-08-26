<div class="contact-box-1 display-flex flex-column flex-align-all-center bg-dawn-pink padding-top-128">
    <div class="content">
        <div class="custom-form">

            <div class="contact-title">
                <h1>
                    Estamos ansiosos para entender <br/>
                    o seu desafio de negócio!
                </h1>

                <div class="image">
                    <img src="<?php bloginfo('template_url'); ?>/images/svg/home-box-6-coffee.svg" alt="Image Coffee">
                </div>
            </div>
            <div class="contact-form margin-top-32">
                <?php
                $customField = get_post_meta(19, 'CONTACT_FORM_HOME');
                if ($customField) {
                    echo do_shortcode(current($customField));
                }
                ?>
            </div>
        </div>

    </div>
</div>
