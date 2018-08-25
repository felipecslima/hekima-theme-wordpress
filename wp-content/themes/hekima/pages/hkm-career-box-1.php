<?php $post = get_post() ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<div class="career-box-1 bg-satin-linen display-flex flex-column flex-align-all-center width-100">
    <div class="menu-degrade"></div>
    <div class="featured-image" style="background-image: url(<?php echo $image[0] ?>)"></div>
    <div class="content padding-top-64 width-100 max-with-1240 padding-bottom-48">
        <div class="list-about-jobs">
            <div class="display-flex flex-align-start-center">
                <img width="245"
                     src="<?php bloginfo('template_url'); ?>/images/about-great-place-to-work@3x.png"
                     alt="">
            </div>
            <div>
                <p class="font-size-18 color-greyish-brown">
                    Nos empenhamos para criar um ambiente colaborativo, focado e criativo, que incentiva a evolução e
                    valoriza as habilidades de toda a equipe. Também trabalhamos pelo equilíbrio entre vida profissional
                    e pessoal, e em 2015 e 2018 fomos premiados pelo Great Place to Work como uma das melhores
                    microempresas para se trabalhar.
                </p>
            </div>
            <div>
                <p class="font-size-18 color-greyish-brown">
                    Se você é uma pessoa empreendedora, proativa, prática, com jogo de cintura, brilho nos olhos, tem
                    visão de negócio, muita vontade de atuar no mercado gerando valor para organizações e acredita que
                    tem algo a agregar ao nosso time, inscreva-se em nossas vagas abertas! Queremos muito te conhecer
                    melhor. ;)
                </p>
            </div>
        </div>

        <div class="display-flex flex-align-end-center width-100 margin-top-20">
            <a href="" class="display-flex flex-direction-row flex-align-all-center">
                            <span class="font-family-grace color-blue font-size-32 margin-right-16">
                                Veja nossas vagas
                            </span>
                <img width="24" src="<?php bloginfo('template_url'); ?>/images/arrow-right-blue@3x.png"
                     alt="Clique aqui">
            </a>
        </div>
    </div>
</div>