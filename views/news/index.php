<?php include ROOT . '/views/layouts/header.php';?>

    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>

        <div id="holder">

            <div class="pagetitle">
                <h2>Акции</h2>
                <ul>
                    <li><img src="/upload/images/icons/sales.png" alt="" />
                </ul>
            </div>


            <div id="content">

                <div id="wide" class="contact">

                    <blockquote>
                        <p>
                            <b>Здесь находится полная информация о всех скидках и акциях на баре.
                            Экономьте свои средства и следите за акциями и скидками от ALISA. Отдыхайте на полную за меньшую стоимость!</b>
                        </p>
                    </blockquote>

                    <div class="clear sep"></div>

                    <?php foreach ($newsList as $newsItem) : ?>
                        <div class="post_short">

                            <blockquote>
                                <h3><?php echo $newsItem['title']; ?></h3>
                                <p><?php echo $newsItem['content']; ?></p>
                                <br>
                                <p class="post_meta">Опубликовано:<?php echo $newsItem['date']; ?></p>
                            </blockquote>

                            <!-- Кнопка "поделиться" вконтакте -->
                            <script type="text/javascript">
                                document.write(VK.Share.button(false,{type: "custom", text: "<img src=\"https://vk.com/images/share_32.png\" width=\"28\" height=\"28\" />"}));
                            </script>

                            <!-- Кнопка "поделиться" твиттер -->
                            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ru" data-size="large">Твитнуть</a>
                            <script>
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                            </script>

                        </div>		<!-- .post_short ends -->

                        <div class="post_short alt">
                            <p><img src="<?php echo News::getImage($newsItem['id']); ?>" width="589"></p>
                        </div>		<!-- .post_short ends -->

                        <div class="clear sep"></div>
                    <?php endforeach; ?>

                </div>		<!-- #wide ends -->

            </div>		<!-- #content ends -->

        </div>		<!-- #holder ends -->


<?php include ROOT . '/views/layouts/footer.php';?>