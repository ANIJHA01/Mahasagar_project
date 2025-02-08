<div class="container-fluid">
	<div class="container animate-box">
		<div class="row">
			<div class="archive-header">
				
				<?php 
					$categoryID = isset($_GET['cid']) ? intval($_GET['cid']) : 0; 

					$categoryName = "Unknown Category"; 

					if ($categoryID > 0) {
						$sql = "SELECT cat_name FROM main_categories WHERE cat_id = ?";
						$stmt = $db->prepare($sql);
						$stmt->bind_param("i", $categoryID);
						$stmt->execute();
						$result = $stmt->get_result();

						if ($row = $result->fetch_assoc()) {
							$categoryName = $row['cat_name'];
						}
					}
				?>

				<div class="archive-title">
					<h2><?php echo strtoupper($categoryName); ?></h2>
				</div>
				<div class="bread">
					<ul class="breadcrumbs" id="breadcrumbs">
						<li class="item-current item-cat"><a class='bread-link bread-cat' href='<?php echo BASE_URL; ?>' title='Home' onclick="window.location.href='/mahasagar-prj3/home'; return false;">Home</a></li>
						<li class="separator separator-home"> /</li>
						<li class="item-current item-cat"><strong class="bread-current bread-cat">House &amp; Living</strong></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include 'includes/config.php'; 

	$category_id = isset($_GET['cid']) ? intval($_GET['cid']) : 0;
	$category_name = "Unknown";
	$total_posts = 0; 

	if ($category_id > 0) {
		$sql = "SELECT mc.cat_name, COUNT(np.id) AS total_posts 
				FROM main_categories mc
				LEFT JOIN news_posts np ON mc.cat_id = np.category
				WHERE mc.cat_id = ?
				GROUP BY mc.cat_id";
		$stmt = $db->prepare($sql);
		$stmt->bind_param("i", $category_id);
		$stmt->execute();
		$result = $stmt->get_result();
		
		if ($row = $result->fetch_assoc()) {
			$category_name = $row['cat_name'];
			$total_posts = $row['total_posts'];
		}
		$stmt->close();

		$update_sql = "UPDATE main_categories SET post = ? WHERE cat_id = ?";
		$update_stmt = $db->prepare($update_sql);
		$update_stmt->bind_param("ii", $total_posts, $category_id);
		$update_stmt->execute();
		$update_stmt->close();
	}

	$sql_posts = "SELECT * FROM news_posts WHERE category = ?";
	$stmt_posts = $db->prepare($sql_posts);
	$stmt_posts->bind_param("i", $category_id);
	$stmt_posts->execute();
	$posts_result = $stmt_posts->get_result();
?>

<div class="container-fluid">
	<div class="container">
		<div class="primary margin-15">
			<div class="row">
				<div class="col-md-8">
					<div class="post_list post_list_style_1">
						<div class="grid grid_three_column">
							<div class="grid-sizer">
							<?php while ($post = $posts_result->fetch_assoc()) { ?>
                                    <article class="grid-item animate-box">
									<?php
										$sql_posts = "SELECT * FROM news_posts WHERE category = ?";
										$stmt_posts = $db->prepare($sql_posts);
									?>
                                        <figure class="alith_news_img">
                                            <span class="post_meta_categories_label"><?= htmlspecialchars($category_name); ?></span>
											<a href='<?=SITE_URL?>news?id=<?php echo $post['id']; ?>'>
												<img src="<?=NEWS_UPLOAD_URL.$post['news_banner'];?>" alt="Image not found" />
											</a>
                                        </figure>
                                        <h3 class="alith_post_title">
											<a href='<?=SITE_URL?>news?id=<?php echo $post['id']; ?>'>
												<?= htmlspecialchars($post['news_title']); ?>
											</a>
										</h3>
                                        <div class="post_meta">
											<a class='meta_author_avatar' href='/page-author'>
												<img src="https://cdn.prod.website-files.com/62d84e447b4f9e7263d31e94/6399a4d27711a5ad2c9bf5cd_ben-sweet-2LowviVHZ-E-unsplash-1.jpeg" alt="author details" />
											</a>
											<span class="meta_author_name">
												<a href='<?=SITE_URL?>news?id=<?php echo $post['id']; ?>'>
													<?= htmlspecialchars($post['page_author']); ?>
												</a>
											</span>
											<span class="meta_date"><?= $post['added_dt']; ?></span>
										</div>
                                        <p class="alith_post_except"><?= htmlspecialchars(substr($post['news_description'], 0, 100)); ?>...</p>
                                        <div class="line-space"></div>
                                    </article>
                                <?php } ?>
                                <?php $stmt_posts->close(); ?>
							</div>
						</div>
					</div>
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
									<input type="search" name="s" value="" placeholder="Search …" class="search-field">
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
							?> <!--.sidebar-widget-->

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
<?php
    // include_once("../layouts/footer.php");
?>
