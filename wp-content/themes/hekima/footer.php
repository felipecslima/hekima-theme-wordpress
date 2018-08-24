</div>
<footer class="footer">
    <div class=" wrap ">
        <div class="column-1">
            <div>
                <div class="footer-logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/svg/logo-hekima-white.svg" alt="Logo Hekima">
                </div>
                <p class="footer-slogan">
                    <b>Seus dados. Nossa Inteligência Artificial.</b> <br/>
                    A melhor estratégia de negócios
                    que sua empresa pode ter.
                </p>
            </div>
            <div class="menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-nav',
                    'container' => 'nav',
                    'container_id' => 'primary-nav',
                )) ?>
            </div>
        </div>
        <div class="column-2"> <!-- d-flex flex-column justify-content-end -->
            <div class="footer-social">
                <ul> <!-- d-flex flex-row justify-content-end -->
                    <li><a href="">contato@hekima.com</a></li>
                    <li class="footer-social-links">
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                &copy; <?php bloginfo('name') ?> <?= date('Y') ?> . Todos os direitos reservados. <br/>
                Made with love in San Pedro Valley.
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>

<script>
    AOS.init();
</script>
</body>
</html>
