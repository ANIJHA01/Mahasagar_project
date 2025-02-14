<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
			html, body {
				height: 100%;
			}

			.wrap {
				height: 100%;
				display: flex;
				align-items: center;
				justify-content: center;
			}

			.button {
				min-width: 200px;
				min-height: 50px;
				display: inline-flex;
				font-family: 'Nunito', sans-serif;
				font-size: 22px;
				align-items: center;
				justify-content: center;
				text-transform: uppercase;
				text-align: center;
				letter-spacing: 1.3px;
				font-weight: 700;
				color: #313133;
				background: #4FD1C5;
				background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
				border: none;
				border-radius: 1000px;
				box-shadow: 12px 12px 24px rgba(79,209,197,.64);
				transition: all 0.3s ease-in-out 0s;
				cursor: pointer;
				outline: none;
				position: relative;
				padding: 10px;
			}

			.button::before {
				content: '';
				border-radius: 1000px;
				min-width: calc(300px + 12px);
				min-height: calc(60px + 12px);
				border: 6px solid #00FFCB;
				box-shadow: 0 0 60px rgba(0,255,203,.64);
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				opacity: 0;
				transition: all .3s ease-in-out 0s;
			}

			.button:hover, 
			.button:focus {
				color: #313133;
				transform: translateY(-6px);
			}

			.button:hover::before, 
			.button:focus::before {
				opacity: 1;
			}

			.button::after {
				content: '';
				width: 30px; height: 30px;
				border-radius: 100%;
				border: 6px solid #00FFCB;
				position: absolute;
				z-index: -1;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				animation: ring 1.5s infinite;
			}

			.button:hover::after, 
			.button:focus::after {
				animation: none;
				display: none;
			}

			@keyframes ring {
			0% {
				width: 30px;
				height: 30px;
				opacity: 1;
			}
			100% {
				width: 300px;
				height: 300px;
				opacity: 0;
			}
			}
		</style>
	</head>
<body>

	<div class="container-fluid">
		<div class="container animate-box">
			<div class="row">
				<div class="post-header">
					<div class="bread">
					<ul class="breadcrumbs" id="breadcrumbs">
							<li class="item-home">You are here: <a class='bread-link bread-home' href='/' title='Home'>Home</a></li>
							<li class="separator separator-home"> /</li>
							<li class="item-current item-cat">
							<?php
								global $db;
								$news_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

								if ($news_id > 0) {
									$sql = "SELECT main_categories.cat_id, main_categories.cat_name 
											FROM news_posts 
											JOIN main_categories ON news_posts.category = main_categories.cat_id 
											WHERE news_posts.id = ?";
									
									$stmt = $db->prepare($sql);
									$stmt->bind_param("i", $news_id);
									$stmt->execute();
									$result = $stmt->get_result();

									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											$categoryID = $row['cat_id'];
											$categoryName = $row['cat_name'];
											
											$categoryURL = SITE_URL . "category?cid=" . $categoryID;

											$activeClass = (isset($_GET['category_id']) && $_GET['category_id'] == $categoryID) ?  : '';

											echo "<li $activeClass><a class='bread-link bread-home' href=\"$categoryURL\">$categoryName</a></li>";
										}
									} else {
										echo '<a class="bread-link bread-home" href="#" title="Categories Dropdown">Unknown Category</a>';
									}

									$stmt->close();
								}
							?>
							</li>
							<li class="separator separator-home"> /</li>
							<li class="item-current item-cat"><strong class="bread-current bread-cat">Simple life in big city</strong></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container">
			<div class="primary margin-15">
				<div class="row">
					<div class="col-md-8">
						<article class="section_margin">
					<?php
					global $db;
						$sql = "SELECT * FROM news_posts ";
						$result = mysqli_query($db, $sql) or die("Query Failed: " . mysqli_error($db));
						if(mysqli_num_rows($result) > 0){
							while($row= mysqli_fetch_assoc($result)){ 
								if($row["id"] == $_GET["id"]){
					?>
							<!-- img -->
							<figure class="alith_news_img animate-box">
								<a href='<?=SITE_URL?>news'>
									<img src="<?=NEWS_UPLOAD_URL.$row['news_banner']?>" alt="No img there" />
								</a>
							</figure>
							<div class="post-content">
								<div class="single-header">
									<!-- title -->
									<h3 class="alith_post_title"><?php echo $row['news_title']; ?></h3>
									<!-- Author section -->
									<div class="post_meta">
										<a class='meta_author_avatar' href='/page-author'>
											<img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" />
										</a>
										<span class="meta_author_name">
											<a class='author' href='/page-author'>
												<?php echo $row['page_author']; ?>
											</a>
										</span>
										<span class="meta_categories">
											<?php
												$category_id = $row["category"];
												$category_sql = "SELECT * FROM main_categories WHERE cat_id  = $category_id";
												$category_result = $db->query($category_sql) or die("Query Failed: " . $db->error);
												if ($category_result->num_rows > 0) {
													$category_row = $category_result->fetch_assoc();
													echo '<a href="archive.html">' . $category_row["cat_name"] . '</a>, ';
												}
											?>
											<a href="archive.html">News</a></span>
										<span class="meta_date"><?php echo $row["added_dt"]; ?></span>
									</div>
								</div>
								<div class="single-content animate-box">
									<p class="alith_post_except animate-box"><?php echo $row["news_description"]; ?></p>
									<?php 
												}
											}
										}else{
											echo "Result not found";
										}
									?>		
								</div>
								<div class="single-content animate-box">
									<?php
										include 'includes/config.php'; // Ensure you have database connection

									// Get the news_id from URL
									$news_id = isset($_GET['id']) ? intval($_GET['id']) : null;

									if ($news_id) {
										// Prepare SQL Query to Fetch Content
										$stmt = $db->prepare("SELECT news_content FROM news_posts WHERE id = ?");
										$stmt->bind_param("i", $news_id);
										$stmt->execute();
										$stmt->bind_result($news_content);
										$stmt->fetch();
										$stmt->close();
									} else {
										$news_content = "No content available!"; // If no ID is found
									}
									?>

									<!-- Display the news content inside the div -->
									<div class="text-editor-content">
										<?= $news_content; ?>
									</div>
									<div class="post-tags">
										<div class="post-tags-inner">
											<a href='/category-grid' rel='tag'>#Love</a>
											<a href='/category-grid' rel='tag'>#Fashion</a>
											<a href='/category-grid' rel='tag'>#Lifestyle</a>
											<a href='/category-grid' rel='tag'>#Politic</a>
										</div>
									</div>
									<div class="post-share">
										<ul>
											<li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
											<li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
											<li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
									<div class="post-author section_margin_40">
										<figure><a href='/page-author'><img src="<?=BASE_URL?>web/images/thumb-square.png"></a></figure>
										<div class="post-author-info">
											<h3><a href='/page-author'>Steven Jobs</a></h3>
											<p>Ouch oh alas crud unnecessary invaluable some goodness opposite hello since audacious far barring and absurdly much boa</p>
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-twitter"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="post-related section_margin_40">
										<div class="row">
											<div class="col-md-6">
												<div class="sidebar-widget">
													<div class="widget-title-cover">
														<h4 class="widget-title"><span>Related Posts</span></h4>
													</div>
													<div class="latest_style_3">
														<div class="latest_style_3_item">
															<span class="item-count vertical-align">1.</span>
															<div class="alith_post_title_small">
																<a href='/single'><strong>Frtuitous spluttered unlike ouch vivid blinked far inside</strong></a>
															</div>
														</div>
														<div class="latest_style_3_item">
															<span class="item-count vertical-align">2.</span>
															<div class="alith_post_title_small">
																<a href='/single'><strong>Against and lantern where a and gnashed nefarious</strong></a>
															</div>
														</div>
														<div class="latest_style_3_item">
															<span class="item-count vertical-align">3.</span>
															<div class="alith_post_title_small">
																<a href='/single'><strong>Ouch oh alas crud unnecessary invaluable some</strong></a>
															</div>
														</div>
														<div class="latest_style_3_item">
															<span class="item-count vertical-align">4.</span>
															<div class="alith_post_title_small">
																<a href='/single'><strong>And far hey much hello and bashful one save less</strong></a>
															</div>
														</div>
													</div>
												</div>
											</div> <!--post-related-->
											<div class="col-md-6">
												<div class="post-navigation">
													<div class="latest_style_2">
														<h5><span>Preview Post</span></h5>
														<div class="latest_style_2_item">
															<figure class="alith_news_img"><a href='/single'><img class="hover_grey" src="<?=BASE_URL?>web/images/thumb-square.png" alt=""></a></figure>
															<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
														</div>

														<h5><span>Next Post</span></h5>
														<div class="latest_style_2_item">
															<figure class="alith_news_img"><a href='/single'><img class="hover_grey" src="<?=BASE_URL?>web/images/thumb-square.png" alt=""></a></figure>
															<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> <!--post-related and navigation-->
								</div> <!--single content-->
								<?php
									include 'includes/config.php';

									error_reporting(E_ALL);
									ini_set('display_errors', 1);

									$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
									$comments = [];

									if ($post_id > 0) {
										$sql = "SELECT category FROM news_posts WHERE id = ?";
										$stmt = $db->prepare($sql);
										$stmt->bind_param("i", $post_id);
										$stmt->execute();
										$stmt->bind_result($category);
										$stmt->fetch();
										$stmt->close();

										if ($category) {
											$role = isset($_SESSION['role']) ? $_SESSION['role'] : 0;

											if ($role == 1) {
												$sql = "SELECT id, article_name, article_email, article_comment, created_at, status 
														FROM article_comments 
														WHERE news_post_id = ? 
														ORDER BY created_at DESC"; 
											} else {
												$sql = "SELECT id, article_name, article_email, article_comment, created_at 
														FROM article_comments 
														WHERE news_post_id = ? AND status = 'approved' 
														ORDER BY created_at DESC"; 
											}

											$stmt = $db->prepare($sql);

											if (!$stmt) {
												die("<p>SQL Error: " . $db->error . "</p>"); 
											}

											$stmt->bind_param("i", $post_id); 
											if (!$stmt->execute()) {
												die("SQL Error: " . $stmt->error);
											}

											$result = $stmt->get_result();

											while ($row = $result->fetch_assoc()) {
												$comments[] = $row;
											}

											$stmt->close();
										}
									}
									?>
								<!-- Display comments for this post -->
								<div class="single-comment">
									<section id="comments">
										<h4 class="single-comment-title">Comments</h4>
										<div class="comments-inner clr">
											<div class="comments-title">
												<p>There are <?= count($comments) ?> comments for this post</p>
											</div>
											<ol class="commentlist">
												<?php if (!empty($comments)) : ?>
													<?php foreach ($comments as $comment) : ?>
														<li>
															<article class="comment clr">
																<div class="comment-author vcard">
																	<img width="60" height="60" src="<?= BASE_URL ?>web/images/author-avatar.png" alt="">
																</div>
																<div class="comment-details clr">
																	<header class="comment-meta">
																		<strong class="fn"><?= htmlspecialchars($comment['article_name']) ?></strong>
																		<span class="comment-date"><?= date("F j, Y g:i a", strtotime($comment['created_at'])) ?></span>
																		<?php if ($role == 1) : ?>
																			<span class="comment-status">
																				(<?= $comment['status'] == 'approved' ? '✅ Approved' : '⏳ Pending' ?>)
																			</span>
																		<?php endif; ?>
																	</header>
																	<div class="comment-content entry clr">
																		<p><?= htmlspecialchars($comment['article_comment']) ?></p>
																	</div>

																	<!-- Admin can approve or delete comments -->
																	<?php if ($role == 1) : ?>
																		<div class="comment-actions">
																			<?php if ($comment['status'] == 'pending') : ?>
																				<button class="comment-show-btn" onclick="approveComment(<?= $comment['id'] ?>)">✅ Approve</button>
																			<?php endif; ?>
																				<button class="comment-show-btn" onclick="deleteComment(<?= $comment['id'] ?>)">❌ Delete</button>
																		</div>
																	<?php endif; ?>
																</div>
															</article>
														</li>
													<?php endforeach; ?>
												<?php else : ?>
													<p>No comments found for this post.</p>
												<?php endif; ?>
											</ol><!--comment list-->
											<nav role="navigation" class="comment-navigation clr">
												<div class="nav-previous span_1_of_2 col col-1"></div>
												<div class="nav-next span_1_of_2 col"> <a href="#comments">Comments →</a></div>
											</nav> <!--comment nav-->
											<div class="comment-respond" id="respond">
												<h3 class="comment-reply-title" id="reply-title">Leave a Reply 
													<small>
														<a href="#respond" id="cancel-comment-reply-link" rel="nofollow">
															<i class="fa fa-times"></i>
														</a>
													</small>
												</h3>
												<!-- comment form started -->
												<form novalidate="" class="comment-form" id="commentform" method="post" action="">
													<p class="comment-notes">
														<span id="email-notes">We respect your privacy. Your email address will not be shared or published.</span>
													</p>
													<div class="row">
														<div class="comment-form-author col-sm-12 col-md-6"> 
															<label for="author">Name (optional)</label> 
															<input type="text" size="30" value="" placeholder="Your name *" name="artical_name" id="author">
														</div>
														<div class="comment-form-email col-sm-12 col-md-6"> 
															<label for="email">Email (optional)</label> 
															<input type="email" size="30" value="" placeholder="Email *" name="artical_email" id="email">
														</div>
													</div>
													<div class="comment-form-comment">
														<label for="comment">Comment</label>
														<textarea aria-required="true" placeholder="Your Comment" rows="8" cols="45" name="artical_comment" id="comment" aria-required></textarea>
													</div>
													<input type="submit" class="button" name="form-name"  value="artical_comment"/>
												</form>
											</div> 
										</div>
									</section>
								</div> <!--  end comment -->
							</div>
						</article>
						<div class="single-more-articles single-disable-inview">
							<h4><span>423news.php You might be interested in</span></h4>
							<span class="single-more-articles-close-button"><i class="fa fa-times" aria-hidden="true"></i></span>
							<div class="latest_style_2">
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img class="hover_grey" src="<?=BASE_URL?>web/images/thumb-square.png" alt=""></a></figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
								</div>
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img class="hover_grey" src="<?=BASE_URL?>web/images/thumb-square.png" alt=""></a></figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
								</div>
							</div>
						</div> <!--end single more articles-->
					</div>
					<!--Start Sidebar-->
					<aside class="col-md-4">
						<div class="sidebar_right">
							<div class="sidebar-widget animate-box">
								<div class="widget-title-cover">
									<h4 class="widget-title"><span>news.php Popular Articles</span></h4>
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

							<!-- <div class="sidebar-widget animate-box">
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
							</div> .sidebar-widget -->
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
</body>
</html>