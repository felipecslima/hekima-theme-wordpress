<div class="home-box-5 d-flex justify-content-center">
    <div class="home-content">

        <h2 class="d-flex">
            O que temos feito
        </h2>

        <div class="home-blog">
            <ul class="">
                <?php

                $rss = new DOMDocument();
                $rss->load('http://www.bigdatabusiness.com.br/feed/');
                $feed = array();

                $cnt = 0;
                foreach ($rss->getElementsByTagName('item') as $node) {
                    //  echo "<pre>"; print_r($node->getElementsByTagName('creator')->item(0)->nodeValue); exit;
                    $item = array(
                        'creator' => $node->getElementsByTagName('creator')->item(0)->nodeValue,
                        'category' => $node->getElementsByTagName('category')->item(0)->nodeValue,
                        'category2' => $node->getElementsByTagName('category')->item(1)->nodeValue,
                        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                        'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                    );

                    if ($cnt < 3) {
                        array_push($feed, $item);
                    }
                    $cnt++;
                }

                ?>
                <?php foreach ($feed as $post) { ?>

                    <?php

                    setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
                    date_default_timezone_set('America/Sao_Paulo');

                    $title = str_replace(' & ', ' &amp; ', $post['title']);
                    $category = $post['category'];
                    $category2 = $post['category2'];

                    $categorys = join(', ', [$category2, $category]);

                    $creator = $post['creator'];
                    $link = $post['link'];
                    $description = $post['desc'];
                    $date = strftime("%d %b %Y", strtotime($post['date']));
                    ?>
                    <li>
                        <div class="text">
                            <h3><?php echo $title ?></h3>
                            <div class="line-1">
                                <div class="category"><?php echo $categorys ?></div>
                                <div class="author">Artigo por <?php echo $creator ?></div>
                            </div>
                            <div class="line-2 description"><?php echo $description ?></div>
                            <div class="line-3">
                                <div class="date d-flex align-items-center"><?php echo $date ?></div>

                                <a class="permalink d-flex align-items-center" href="<?php echo $link ?>">
                                    <span>VER MAIS</span>
                                    <img src="<?php bloginfo('template_url'); ?>/images/arrow-right-blue@3x.png"
                                         alt="Clique aqui">
                                </a>
                            </div>
                        </div>
                    </li>
                <?php } ?>


            </ul>
            <div class="link">
                <a href="" class="">
                    <span>Acesse nossos conteúdos</span>
                    <img src="<?php bloginfo('template_url'); ?>/images/arrow-right-blue@3x.png" alt="Clique aqui">
                </a>
            </div>
        </div>
    </div>
</div>
