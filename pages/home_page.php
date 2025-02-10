<div class="container-fluid">
	<div class="container animate-box">
		<div class="row main-header">
			<div class="owl-carousel owl-theme js carausel slider section_margin" id="slider-small">
				<?php
					$sql = "SELECT * FROM news_posts ORDER BY id DESC";
					$result = mysqli_query($db, $sql) or die("Query Failed: " . mysqli_error($db));
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
				?>
					<div class="item px-2">
						<div class="alith_latest_trading_img_position_relative">
							<figure class="alith_post_thumb">
								<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
									<img src="<?=NEWS_UPLOAD_URL.$row['news_banner'];?>" alt="<?php echo $row['news_title']; ?>" />
								</a>
							</figure>
							<div class="alith_post_title_small">
								<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
									<strong><?=$row['news_title']?></strong>
								</a>
								<p class="meta"><span><?php echo $row['added_dt']; ?></span> <span><?= $row['news_views']; ?> Views</span></p>
							</div>
							<?php if(isset($_SESSION["user_id"]) && isset($_SESSION["role"]) && $_SESSION["role"] == 1) { ?>
							<div class="recent-page-btn">
								 	<div class="RecentPageView">
									 	<a href='<?=SITE_URL?>news?id=<?php echo $row["id"]; ?>'>
											<button class="addImgBtn"><i class="bi bi-eye"></i></button>
										</a>
									</div>						
									<div id="RecentPageEdit">
										<a href='<?=SITE_URL?>edit?id=<?php echo $row["id"]; ?>'>
											<button class="addImgBtn"><i class="bi bi-pencil-square"></i></button>
										</a>
									</div>
									<div id="RecentPagedelete">
										<a href='<?=SITE_URL?>delete?id=<?php echo $row["id"]; ?>'>
											<button class="addImgBtn"><i class="bi bi-trash"></i></button>
										</a>
									</div>
							</div>
							<?php } ?>
						</div>
					</div>
				<?php
						}
					} else {
						echo "<div>No news posts found.</div>";
					}

				?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<div class="primary margin-15">
			<div class="row">
				<div class="col-md-8">
					<!-- Button trigger modal -->
					<?php if(isset($_SESSION["user_id"]) && isset($_SESSION["role"]) && $_SESSION["role"] == 1) { ?>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCarouselModal">
							Edit Carousel Images
						</button>
					<?php } ?>
					<?php 
					
						$sql = "SELECT * FROM news_posts ORDER BY id DESC";
						$result = mysqli_query($db, $sql) or die("Query Failed:" . mysqli_error($db));
						if(mysqli_num_rows($result)>0){
					?>
					<div class="owl-carousel owl-theme js section_margin line_hoz animate-box" id="slideshow_face">
						<?php
							while($row = mysqli_fetch_assoc($result)){
						?>
						<div class="item">
							<figure class="alith_post_thumb_big">
								<span class="post_meta_categories_label">home_page 71 line, Blog</span>
								<div class="home_page_image_size">
									<img src="<?=NEWS_UPLOAD_URL.$row['news_banner'] ?>" alt="<?= $row['news_title'] ?>"/>
								</div>
							</figure>
							<h3 class="alith_post_title animate-box" data-animate-effect="fadeInUp">
								<a href='/single'><?= $row["news_title"] ?></a>
							</h3>
							<div class="alith_post_content_big">
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<div class="post_meta_center animate-box">
											<p><a href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a></p>
											<p><a class='author' href='/page-author'><strong><?= $row['page_author'] ?></strong></a></p>
											<span class="post_meta_date"><?= $row['modified_dt'] ?></span>
										</div>
									</div>
									<div class="col-md-8 col-sm-12 animate-box">
										<p class="alith_post_except"><?= $row['news_description'] ?></p>
									</div>
								</div>
							</div>
						</div>
						<?php 
							}
						?>
					</div>
					<?php 
						}else{
							echo "No news posts found.";
						}
					?>
					<div class="post_list post_list_style_1">
						<div class="alith_heading">
							<h2 class="alith_heading_patern_2">Recent Posts</h2>
						</div>
						<?php
							$limit3 = 6;
							$sidebar = "SELECT np.id, np.news_title, np.news_banner, np.page_author, np.added_dt, mc.cat_id, mc.cat_name 
										FROM news_posts np
										LEFT JOIN main_categories mc ON np.category = mc.cat_id
										ORDER BY np.id DESC LIMIT {$limit3}";

							$result = mysqli_query($db, $sidebar) or die("Query Failed: " . mysqli_error($db));

							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_assoc($result)){	
										$categoryID = $row['cat_id'];
										$categoryName = $row['cat_name'];

										$categoryURL = SITE_URL . "category?cid=" . $categoryID;						
						?>
							<article class="row section_margin animate-box">
								<div class="col-md-3 animate-box">
									<figure class="alith_news_img">
										<a href='<?=SITE_URL?>news?id=<?= $row['id']; ?>'>
											<img src="<?=NEWS_UPLOAD_URL.$row['news_banner'];?>" alt="<?= $row['news_title']; ?>" />
										</a>
									</figure>
								</div>
								<div class="col-md-9 animate-box">
									<h3 class="alith_post_title">
										<a href='<?=SITE_URL?>news?id=<?= $row['id']; ?>'>
											<strong><?=$row['news_title']?></strong>
										</a>
									</h3>
									<div class="post_meta">
										<a class='meta_author_avatar' href='/page-author'>
											<img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" />
										</a>
										<span class="meta_author_name">
											<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
												<?= htmlspecialchars($row['page_author']); ?>
											</a>
										</span>
										
										<span class="meta_categories"><a href="<?php echo $categoryURL; ?>">
												<?= $row['cat_name']; ?>
											</a>, <a
											href="archive.html">News</a></span>
										<span class="meta_date"><?= $row['added_dt']; ?></span>
									</div>
								</div>
							</article>
						<?php 
							}
						}
						?>

						<div class="site-pagination animate-box">
							<ul class="page-numbers">
								<li><a href="#" class="prev page-numbers">PREV</a></li>
								<li><span class="page-numbers current" aria-current="page">1.</span></li>
								<li><a href="#" class="page-numbers">2.</a></li>
								<li><a href="#" class="page-numbers">3.</a></li>
								<li><a href="#" class="page-numbers">4.</a></li>
								<li><a href="#" class="next page-numbers">NEXT</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--Start Sidebar-->
				<aside class="col-md-4">
					<div class="sidebar_right">
						<div class="sidebar-widget animate-box">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Popular Articles</span></h4>
							</div>
							<?php   							
							$limit2 = 5;
							$sidebar = "SELECT * FROM news_posts ORDER BY id DESC LIMIT {$limit2}";
							$result = mysqli_query($db, $sidebar) or die("Query Failed: " . mysqli_error($db));
							if(mysqli_num_rows($result) > 0){
    							while($row = mysqli_fetch_assoc($result)){							
							?>
							<div class="latest_style_1">
								<div class="latest_style_1_item">
									<div class="alith_post_title_small">
										<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
											<strong><?=$row['news_title']?></strong>
										</a>
										<p class="meta"><span><?php echo $row['added_dt']; ?></span> <span>👁️ <?= $row['news_views']; ?> Views</span></p>
									</div>
									<figure class="alith_news_img">
										<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
											<img src="<?=NEWS_UPLOAD_URL.$row['news_banner'];?>" alt="<?php echo $row['news_title']; ?>" />
										</a>
									</figure>
								</div>
								<?php 
									}
								}
								?>
							</div> <!--.sidebar-widget-->

							<div class="sidebar-widget animate-box">
								<div class="widget-title-cover">
									<h4 class="widget-title"><span>Search</span></h4>
								</div>
								<form action="#" class="search-form" method="get" role="search">
									<label>
										<input type="search" name="s" value="" placeholder="Search …"
											class="search-field">
									</label>
									<input type="submit" value="Search" class="search-submit">
								</form>
							</div> <!--.sidebar-widget-->

							<?php
								$limit = 4;
								$trendingQuery = "SELECT id, news_title, news_banner, added_dt, news_views 
												FROM news_posts 
												ORDER BY news_views DESC 
												LIMIT {$limit}";

								$result = mysqli_query($db, $trendingQuery) or die("Query Failed: " . mysqli_error($db));

								if(mysqli_num_rows($result) > 0){
							?>
							<div class="sidebar-widget animate-box">
								<div class="widget-title-cover">
									<h4 class="widget-title"><span>Trending</span></h4>
								</div>
								<div class="latest_style_2">
									<?php 
									$count = 0;
									while($row = mysqli_fetch_assoc($result)) { 
										if ($count == 0) { // Pehli post (Sabse zyada views wali)
											?>
											<div class="latest_style_2_item_first">
												<figure class="alith_post_thumb_big">
													<a href='<?=SITE_URL?>news?id=<?= $row['id']; ?>'>
														<img src="<?= NEWS_UPLOAD_URL . $row['news_banner']; ?>" alt="<?= htmlspecialchars($row['news_title']); ?>" />
													</a>
												</figure>
												<h3 class="alith_post_title">
													<a href='<?=SITE_URL?>news?id=<?= $row['id']; ?>'>
														<strong><?= htmlspecialchars($row['news_title']); ?></strong>
													</a>
												</h3>
												<div class="post_meta">
													<span class="meta_date"><?= $row['added_dt']; ?></span>
													<span class="meta_views">👁️ <?= $row['news_views']; ?> Views</span>
												</div>
											</div>
											<?php
										} else { // Baaki 3 posts
											?>
											<div class="latest_style_2_item">
												<figure class="alith_news_img">
													<a href='<?=SITE_URL?>news?id=<?= $row['id']; ?>'>
														<img src="<?= NEWS_UPLOAD_URL . $row['news_banner']; ?>" alt="<?= htmlspecialchars($row['news_title']); ?>" />
													</a>
												</figure>
												<h3 class="alith_post_title">
													<a href='<?=SITE_URL?>news?id=<?= $row['id']; ?>'>
														<?= htmlspecialchars($row['news_title']); ?>
													</a>
												</h3>
												<div class="post_meta">
													<span class="meta_date"><?= $row['added_dt']; ?></span>
													<span class="meta_views">👁️ <?= $row['news_views']; ?> Views</span>
												</div>
											</div>
											<?php
										}
										$count++;
									} 
									?>
								</div>
							</div>
							<?php 
							}
							?>

						</div> <!--sidebar-widget-->

						<div class="sidebar-widget animate-box">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Tags cloud</span></h4>
							</div>
							<div class="alith_tags_all">
								<a href="#" class="alith_tagg">Business</a>
								<a href="#" class="alith_tagg">Technology</a>
								<a href="#" class="alith_tagg">Sport</a>
								<a href="#" class="alith_tagg">Art</a>
								<a href="#" class="alith_tagg">Lifestyle</a>
								<a href="#" class="alith_tagg">Three</a>
								<a href="#" class="alith_tagg">Photography</a>
								<a href="#" class="alith_tagg">Lifestyle</a>
								<a href="#" class="alith_tagg">Art</a>
								<a href="#" class="alith_tagg">Education</a>
								<a href="#" class="alith_tagg">Social</a>
								<a href="#" class="alith_tagg">Three</a>
							</div>
						</div> <!--.sidebar-widget-->
					</div>
				</aside>
				<!--End Sidebar-->
			</div>
		</div> <!--.primary-->

	</div>
</div>
<!-- /**
	*
	* Bottom Section
	*
	* Most comments
	* Latest
	* Categories
	* Instagram
	* 
	*/ -->
	<div class="container-fluid">
		<div class="container animate-box">
			<div class="bottom margin-15">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="sidebar-widget">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Most comments</span></h4>
							</div>
							<div class="latest_style_3">
								<div class="latest_style_3_item">
									<span class="item-count vertical-align">1.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Frtuitous spluttered unlike ouch vivid blinked
												far inside</strong></a>
									</div>
								</div>
								<div class="latest_style_3_item">
									<span class="item-count vertical-align">2.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Against and lantern where a and gnashed
												nefarious</strong></a>
									</div>
								</div>
								<div class="latest_style_3_item">
									<span class="item-count vertical-align">3.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Ouch oh alas crud unnecessary invaluable
												some</strong></a>
									</div>
								</div>
								<div class="latest_style_3_item">
									<span class="item-count vertical-align">4.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>And far hey much hello and bashful one save
												less</strong></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="sidebar-widget">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Latest</span></h4>
							</div>
							<div class="latest_style_2">
							<?php
								$limit = 3;
								$sql_latest = "SELECT id, news_title, news_banner FROM news_posts ORDER BY id DESC LIMIT ?";
								$stmt_latest = $db->prepare($sql_latest);
								$stmt_latest->bind_param("i", $limit);
								$stmt_latest->execute();
								$result_latest = $stmt_latest->get_result();

								while ($row = $result_latest->fetch_assoc()) {
							?>
							<div class="latest_style_2_item">
								<figure class="alith_news_img">
									<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
										<img alt="<?= htmlspecialchars($row['news_title']); ?>" src="<?= NEWS_UPLOAD_URL . $row['news_banner']; ?>" class="hover_grey">
									</a>
								</figure>
								<h3 class="alith_post_title">
									<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
										<?= htmlspecialchars($row['news_title']); ?>
									</a>
								</h3>
							</div>
							<?php
								}
								$stmt_latest->close();
							?>
						</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="sidebar-widget">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Categories</span></h4>
							</div>
							<ul class="bottom_menu">
								<?php
									$sql = "SELECT * FROM main_categories WHERE post >= 1";
									$result = mysqli_query($db, $sql) or die("Query Failed.: category");

									if (mysqli_num_rows($result) > 0) {
										while ($row = $result->fetch_assoc()) {
											$categoryID = $row['cat_id'];
											$categoryName = $row['cat_name'];
											
											$categoryURL = SITE_URL . "category?cid=" . $categoryID;

											$activeClass = (isset($_GET['category_id']) && $_GET['category_id'] == $categoryID) ? 
												'class="active" style="background-color: #ffecec5c; border-radius:30px;"' : '';
											echo "<li $activeClass><a href=\"$categoryURL\" class=\"\"><i class=\"fa fa-angle-right\"></i>&nbsp;&nbsp; $categoryName</a></li>";
										}
									}
								?>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="sidebar-widget">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Instagram</span></h4>
							</div>
							<ul class="alith-instagram-grid-widget alith-clr alith-row alith-gap-10">
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
								<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
									<a class="" target="_blank" href="#">
										<img class="" title="" alt="" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div> <!--.row-->
			</div>
		</div>
</div>

<!-- Modal -->
<div id="editCarouselModal" class="modal fade" tabindex="-1" aria-labelledby="editCarouselModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title" id="editCarouselModalLabel">Edit Carousel Images</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<div class="row">
					
					<?php
						$sql = "SELECT * FROM font_ms";
						$result = $db->query($sql);

						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
					?>

						<div class="col-md-3 mb-4" id="ci<?=$row['ms_id']?>">
							<div class="card shadow">
								<div class="card-body">
									<div style="height:150px; width:100%; text-align:center">
										<img style="max-height:100%;" src="<?= NEWS_UPLOAD_URL . $row['ms_images'] ?>" alt="Image">
									</div>
								</div>
								<div class="card-footer">
									<div class="row text-center">
										<div class="col-6">
											<form id="frontUploadImageForm<?php echo $row['ms_id'] ?>" method="POST" enctype="multipart/form-data">
												<label class="btn btn-sm btn-info">
													<i class="fa fa-edit"></i> Edit
													<input type="file" name="frontEditImg" class="d-none" onchange="handleFrontEditImg(event, 'frontUploadImageForm<?php echo $row['ms_id'] ?>', '<?php echo $row['ms_id'] ?>')" />
												</label>
												<input type="hidden" name="form-name" value="fronteditimg" />
												<input type="hidden" name="ms_id" value="<?php echo $row['ms_id'] ?>" />
											</form>
										</div>
										<div class="col-6">
											<button type="button" class="btn btn-sm btn-danger" onclick="deleteCarousalImage(<?=$row['ms_id']?>)">
												<i class="fa fa-trash"></i> Delete
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php
							}
						} else {
							echo '<p>No images found.</p>';
						}
					?>
				</div>
			</div>

			<!-- Modal Footer -->
			<div class="modal-footer">
				<!-- Add New Image -->
				<form id="frontAddImageForm" method="POST" enctype="multipart/form-data">
					<label class="btn btn-success mb-0">
						Add New
						<input type="file" name="frontAddImg" class="d-none" onchange="handleFrontAddImg(event)" />
					</label>
					<input type="hidden" name="form-name" value="frontaddimg" />
				</form>

				<!-- close -->
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
