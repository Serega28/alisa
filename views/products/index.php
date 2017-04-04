<?php include ROOT . '/views/layouts/header.php';?>

			<div id="holder">

				<div class="pagetitle">
					<h2>Напитки</h2>
					<ul>
						<li><img src="/upload/images/icons/cocktail_mini.png" alt="" />
					</ul>
				</div>

				<div id="content">

					<div id="main" class="blogpost">
						<blockquote>
							<p>
                                <b>Там, где люди собираются вместе, отдыхают, общаются и радуются жизни, всегда будут востребованы всевозможные коктейли
								(напитки, получаемые смешиванием нескольких жидкостей), освежающие и приподнимающие настроение.
								Популярность коктейлей растёт, а рецепты становятся всё оригинальнее. Такие напитки приятно не только пить,
								но и смешивать. В данном разделе вы найдёте рецепты алкогольных, безалкогольных и авторских коктейлей.</b>
							</p>
						</blockquote>

						<div id="post_comments">

							<?php foreach ($productsList as $productItem) : ?>
								<div class="comment">
									<div class="cmnt_meta">
										<span><img src="/upload/images/icons/cocktail.png" alt="" /></span>
										<h4><strong><?php echo $productItem['name']; ?></strong></h4> <br />
										<p><span><?php echo $productItem['description']; ?></span></p></div>
									<div class="cmnt_message">
										<li><strong><?php echo $productItem['price']; ?>  грн.</strong></li>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>		<!-- #content ends -->
						<div id="side">

							<p>Кокте́йль (англ. cocktail) — напиток, получаемый смешиванием нескольких компонентов.
								Коктейли бывают алкогольные (в качестве одного или нескольких ингредиентов содержащие
								спиртные напитки) и безалкогольные.
							</p>

							<blockquote>
								<p><img src="/upload/images/products/2.jpg" alt="" width="240"/></p>
								<p><img src="/upload/images/products/1.jpg" alt="" width="240"/></p>
								<p><img src="/upload/images/products/4.jpg" alt="" width="240"/></p>
								<p><img src="/upload/images/products/3.jpg" alt="" width="240"/></p>
								<p><img src="/upload/images/products/5.jpg" alt="" width="240"/></p>
							</blockquote>
					</div>		<!-- #side ends -->

				</div>

			</div>		<!-- #holder ends -->




<?php include ROOT . '/views/layouts/footer.php';?>
