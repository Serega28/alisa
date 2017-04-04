<?php include ROOT . '/views/layouts/header.php'; ?>


        <div id="holder">

            <div class="pagetitle">
                <h2>Галерея</h2>
                <ul>
                    <li><img src="/upload/images/icons/gallery.png" alt="" />
                </ul>
            </div>

            <div id="content">

                <div id="portfolio">
                    <?php foreach ($imagesList as $imageItem) : ?>
                        <div class="project_small logo middle">
                            <a href="<?php echo Gallery::getImage($imageItem['id']); ?>" rel="portfolio"><img src="<?php echo Gallery::getImage($imageItem['id']); ?>" width="260"></a>
                            <h3><?php echo $imageItem['date']; ?></h3>
                        </div>		<!-- .project_small ends -->
                    <?php endforeach; ?>
                </div>
                <!-- #portfolio ends -->

            </div>		<!-- #content ends -->

        </div>		<!-- #holder ends -->




<?php include ROOT . '/views/layouts/footer.php'; ?>