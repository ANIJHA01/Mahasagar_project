<div class="container-fluid">
	<div class="container animate-box">
		<div class="row">
			<div class="owl-carousel owl-theme js carausel_slider section_margin" id="slider-small">

				<?php
				$limit = 4;

				$sql = "SELECT * FROM news_posts ORDER BY id DESC LIMIT {$limit}";

				$result = mysqli_query($db, $sql) or die("Query Failed: " . mysqli_error($db));

				if(mysqli_num_rows($result) > 0){
    				while($row = mysqli_fetch_assoc($result)){
				?>
        				<div class="item px-2">
            				<div class="alith_latest_trading_img_position_relative">
                				<figure class="alith_post_thumb">
                    				<a href='/singleid=<?php echo $row['id']; ?>'>
                        			<img src="<?=NEWS_UPLOAD_URL.$row['news_banner'];?>" alt="<?php echo $row['news_title']; ?>" />
                    				</a>
                				</figure>
                				<div class="alith_post_title_small">
                    				<a href='<?=SITE_URL?>news?id=<?php echo $row['id']; ?>'>
                        				<strong><?=$row['news_title']?></strong>
                    				</a>
                    				<p class="meta"><span><?php echo $row['added_dt']; ?></span> <span>268 views</span></p>
									<?php if(isset($_SESSION["user_id"]) && isset($_SESSION["role"]) && $_SESSION["role"] == 1) { ?>
										<div id="RecentPageEdit">
											<a href='<?=SITE_URL?>edit?id=<?php echo $row["id"]; ?>'>
											<button class="addImgBtn"><i class="fa fa-edit"></i></button>
											</a>
										</div>
										<div id="RecentPagedelete">
											<a href='<?=SITE_URL?>delete?id=<?php echo $row["id"]; ?>'>
												<button class="addImgBtn"><i class="fa fa-trash"></i></button>
											</a>
										</div>
									<?php } ?>
                				</div>
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
					<div class="owl-carousel owl-theme js section_margin line_hoz animate-box"
						id="slideshow_face">
						<div class="item">
							<figure class="alith_post_thumb_big">
								<span class="post_meta_categories_label">Legal, Blog</span>
								<a href='/single'><img src="<?=BASE_URL?>web/images/slideshow.jpg"
										alt="" /></a>
							</figure>
							<h3 class="alith_post_title animate-box" data-animate-effect="fadeInUp">
								<a href='/single'>Lorem ipsum dui sollic itudin praesent ut mollis primiseros torquent fames</a>
							</h3>
							<div class="alith_post_content_big">
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="post_meta_center animate-box">
											<p><a href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a></p>
											<p><a class='author' href='/page-author'><strong>Steven Job</strong></a></p>
											<span class="post_meta_date">19 Sep, 2023</span>
										</div>
									</div>
									<div class="col-md-8 col-sm-12 animate-box">
										<p class="alith_post_except">Is very common and rather normal for
											blogging beginners to be highly perplexed when it comes to
											selecting a theme for their blog. There are a plethora of free
											as well as paid options.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<figure class="alith_post_thumb_big">
								<span class="post_meta_categories_label">Fashion, Men</span>
								<a href="#"><img src="<?=BASE_URL?>web/images/slideshow.jpg" alt="" /></a>
							</figure>
							<h3 class="alith_post_title animate-box" data-animate-effect="fadeInUp">
								<a href='/single'>Lorem ipsum dui sollic itudin praesent ut mollis primis
									eros torquent fames</a>
							</h3>
							<div class="alith_post_content_big">
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="post_meta_center animate-box">
											<p><a href='/page-author'><img
														src="<?=BASE_URL?>web/images/author-avatar.png"
														alt="author details" /></a></p>
											<p><a class='author' href='/page-author'><strong>Steven
														Job</strong></a></p>
											<span class="post_meta_date">21 Sep, 2023</span>
										</div>
									</div>
									<div class="col-md-8 col-sm-12 animate-box">
										<p class="alith_post_except">Is very common and rather normal for
											blogging beginners to be highly perplexed when it comes to
											selecting a theme for their blog. There are a plethora of free
											as well as paid options.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<figure class="alith_post_thumb_big">
								<span class="post_meta_categories_label">Entertainment, Style</span>
								<a href="#"><img src="https://cdn.pixabay.com/photo/2024/02/27/00/13/heliconia-8599119_1280.jpg" alt="natureimg1" /></a>
							</figure>
							<h3 class="alith_post_title animate-box" data-animate-effect="fadeInUp">
								<a href='/single'>Lorem ipsum dui sollic itudin praesent ut mollis primis
									eros torquent fames</a>
							</h3>
							<div class="alith_post_content_big">
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="post_meta_center animate-box">
											<p><a href='/page-author'><img
														src="<?=BASE_URL?>web/images/author-avatar.png"
														alt="author details" /></a></p>
											<p><a class='author' href='/page-author'><strong>Steven
														Job</strong></a></p>
											<span class="post_meta_date">23 Sep, 2023</span>
										</div>
									</div>
									<div class="col-md-8 col-sm-12 animate-box">
										<p class="alith_post_except">Is very common and rather normal for
											blogging beginners to be highly perplexed when it comes to
											selecting a theme for their blog. There are a plethora of free
											as well as paid options.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="post_list post_list_style_1">
						<div class="alith_heading">
							<h2 class="alith_heading_patern_2">Recent Posts</h2>
						</div>
						<article class="row section_margin animate-box">
							<div class="col-md-3 animate-box">
								<figure class="alith_news_img"><a href='/single'><img
											src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
							</div>
							<div class="col-md-9 animate-box">
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img
											src="<?=BASE_URL?>web/images/author-avatar.png"
											alt="author details" /></a>
									<span class="meta_author_name"><a class='author'
											href='/page-author'>Steven Job</a></span>
									<span class="meta_categories"><a href="archive.html">Politics</a>, <a
											href="archive.html">News</a></span>
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
						</article>
						<article class="row section_margin animate-box">
							<div class="col-md-3 animate-box">
								<figure class="alith_news_img"><a href='/single'><img
											src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
							</div>
							<div class="col-md-9 animate-box">
								<h3 class="alith_post_title"><a href='/single'>Letraset sheets containing
										Lorem Ipsum passages, and more recently</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img
											src="<?=BASE_URL?>web/images/author-avatar.png"
											alt="author details" /></a>
									<span class="meta_author_name"><a class='author'
											href='/page-author'>Steven Job</a></span>
									<span class="meta_categories"><a href="archive.html">Politics</a>, <a
											href="archive.html">News</a></span>
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
						</article>
						<article class="row section_margin animate-box">
							<div class="col-md-3 animate-box">
								<figure class="alith_news_img"><a href='/single'><img
											src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
							</div>
							<div class="col-md-9 animate-box">
								<h3 class="alith_post_title"><a href='/single'>There are many variations of
										passages of Lorem Ipsum available, but the majority have
										suffered</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img
											src="<?=BASE_URL?>web/images/author-avatar.png"
											alt="author details" /></a>
									<span class="meta_author_name"><a class='author'
											href='/page-author'>Steven Job</a></span>
									<span class="meta_categories"><a href="archive.html">Politics</a>, <a
											href="archive.html">News</a></span>
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
						</article>
						<article class="row section_margin animate-box">
							<div class="col-md-3 animate-box">
								<figure class="alith_news_img"><a href='/single'><img
											src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
							</div>
							<div class="col-md-9 animate-box">
								<h3 class="alith_post_title"><a href='/single'>It uses a dictionary of over
										200 Latin words, combined</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img
											src="<?=BASE_URL?>web/images/author-avatar.png"
											alt="author details" /></a>
									<span class="meta_author_name"><a class='author'
											href='/page-author'>Steven Job</a></span>
									<span class="meta_categories"><a href="archive.html">Politics</a>, <a
											href="archive.html">News</a></span>
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
						</article>
						<article class="row section_margin animate-box">
							<div class="col-md-3 animate-box">
								<figure class="alith_news_img"><a href='/single'><img
											src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
							</div>
							<div class="col-md-9 animate-box">
								<h3 class="alith_post_title"><a href='/single'>Reading is not only informed
										by what’s going on with us at that moment</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img
											src="<?=BASE_URL?>web/images/author-avatar.png"
											alt="author details" /></a>
									<span class="meta_author_name"><a class='author'
											href='/page-author'>Steven Job</a></span>
									<span class="meta_categories"><a href="archive.html">Politics</a>, <a
											href="archive.html">News</a></span>
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
						</article>
						<article class="row section_margin animate-box">
							<div class="col-md-3 animate-box">
								<figure class="alith_news_img"><a href='/single'><img
											src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
							</div>
							<div class="col-md-9 animate-box">
								<h3 class="alith_post_title"><a href='/single'>What you see and what you’re
										experiencing as you read these</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img
											src="<?=BASE_URL?>web/images/author-avatar.png"
											alt="author details" /></a>
									<span class="meta_author_name"><a class='author'
											href='/page-author'>Steven Job</a></span>
									<span class="meta_categories"><a href="archive.html">Politics</a>, <a
											href="archive.html">News</a></span>
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
						</article>

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
							$sql2 = "SELECT ads_id, ads_title, ads_image, ads_date FROM news_ads ORDER BY ads_id DESC LIMIT {$limit2}";
							$result = mysqli_query($db, $sql2) or die("Query Failed: " . mysqli_error($db));
							if(mysqli_num_rows($result) > 0){
    							while($row = mysqli_fetch_assoc($result)){							
							?>
							<div class="latest_style_1">
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">
										<!-- 1. 2. 3. 4. 5. last wale post ke no. ke hisab se-->
										<!-- 1. -->
									</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong><?php echo $row['ads_title']; ?></strong></a>
										<p class="meta"><span><?php echo $row['ads_date']; ?></span> <span>268 views</span></p>
									</div>
									<figure class="alith_news_img"><img src="uploads/<?php echo $row['ads_image']; ?>" alt="<?php echo $row['ads_title']; ?>"/></figure>
								</div>
							<?php 
								}
							}
							?>
							<!-- <div class="latest_style_1">
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">1.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Anil enim ad minima veniam, quisnostrum</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">2.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Curae lacinia consec tetur
												varius</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>

								<div class="latest_style_1_item">
									<span class="item-count vertical-align">3.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Euismod lacus vulpu tate
												augue</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>

								<div class="latest_style_1_item">
									<span class="item-count vertical-align">4.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Quam mauris lorem erat est
												euismod</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>

								<div class="latest_style_1_item">
									<span class="item-count vertical-align">5.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Nec eget ince ptos aenean
												gravida</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
							</div> -->
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

						<div class="sidebar-widget animate-box">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Trending</span></h4>
							</div>
							<div class="latest_style_2">
								<div class="latest_style_2_item_first">
									<figure class="alith_post_thumb_big">
										<span class="post_meta_categories_label">Legal, Blog</span>
										<a href='/single'><img src="<?=BASE_URL?>web/images/thumb-large.jpg"
												alt="" /></a>
									</figure>
									<h3 class="alith_post_title">
										<a href='/single'><strong>Nor again is there anyone who loves or
												pursues or desires to obtain</strong></a>
									</h3>
								</div>
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad
											minim veniam</a></h3>
									<div class="post_meta">
										<span class="meta_date">18 Sep, 2023</span>
									</div>
								</div>
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad
											minim veniam</a></h3>
									<div class="post_meta">
										<span class="meta_date">18 Sep, 2023</span>
									</div>
								</div>
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad
											minim veniam</a></h3>
									<div class="post_meta">
										<span class="meta_date">18 Sep, 2023</span>
									</div>
								</div>
							</div>
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
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img alt=""
											src="<?=BASE_URL?>web/images/thumb-square.png"
											class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam</a></h3>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img alt=""
											src="<?=BASE_URL?>web/images/thumb-square.png"
											class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam quis </a></h3>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img alt=""
											src="<?=BASE_URL?>web/images/thumb-square.png"
											class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam quis </a></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="sidebar-widget">
						<div class="widget-title-cover">
							<h4 class="widget-title"><span>Categories</span></h4>
						</div>
						<ul class="bottom_menu">
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
									Business</a></li>
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
									Entertainment</a></li>
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
									Environment</a></li>
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
									Health</a></li>
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Life
									style</a></li>
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
									Politics</a></li>
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
									Technology</a></li>
							<li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; World</a>
							</li>
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
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt=""
										src="<?=BASE_URL?>web/images/thumb-square.png">
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
