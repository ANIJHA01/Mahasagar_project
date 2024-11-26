<div class="container-fluid">
	<div class="container animate-box">
		<div class="row">
			<div class="archive-header">
				
				 <?php 
    				$currentURL = $_SERVER['REQUEST_URI'];
    				$urlPath = parse_url($currentURL, PHP_URL_PATH);
    				$trimmedPath = rtrim($urlPath, '/');

    				$pathSegments = explode('/', $trimmedPath);

    				$lastSlug = end($pathSegments);	 
				 
				 ?>
				 
				<div class="archive-title">
					<h2><?php echo $lastSlug; ?></h2>
				</div>
				<div class="archive-description">
					<p>Massa tortor ante arcu ut tempus placerat</p>
				</div>
				<div class="bread">
					<ul class="breadcrumbs" id="breadcrumbs">
						<li class="item-home"><a class='bread-link bread-home' href='/' title='Home'>Home</a></li>
						<li class="separator separator-home"> /</li>
						<li class="item-current item-cat"><strong class="bread-current bread-cat">House &amp; Living</strong></li>
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
					<div class="post_list post_list_style_1">
						<div class="grid grid_three_column">
							<div class="grid-sizer"></div>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Politics</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam quis </a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Steven Job</a></span>
									<span class="meta_date">Aug 16,2023</span>
								</div>
								<p class="alith_post_except">Aliquet accumsan etiam pharetra quisque turpis et metus nullam suspendisse ultricies, eu tempus phasellus platea lectus maecenas lorem sagittis pretium </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Fashion</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Tempor posuere conubia primis aenean pulvinar nisi</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Meredith</a></span>
									<span class="meta_date">Dec 16,2023</span>
								</div>
								<p class="alith_post_except">Est sociosqu gravida euismod erat tortor, amet turpis maecenas metus class enim lectus litora, magna urna morbi quisque non suscipit. </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item sticky animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Sport</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Laoreet orci faucibus consectetur torquent himenaeos libero</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Joyce</a></span>
									<span class="meta_date">Sep 18,2023</span>
								</div>
								<p class="alith_post_except">Morbi blandit et curabitur, litora sociosqu sem nisl posuere varius nostra velit dapibus diam, adipiscing a sem et inceptos </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Travel</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Nam class sociosqu taciti aenean nisl vivamus tempor</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Geoffrey</a></span>
									<span class="meta_date">Aug 15,2023</span>
								</div>
								<p class="alith_post_except">Himenaeos proin tristique vulputate egestas erat in porta pellentesque, ullamcorper porta eget metus accumsan ultricies donec interdum </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Technology</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Nostra purus ut integer potenti sodales, donec nulla ac </a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Fergal</a></span>
									<span class="meta_date">Jun 16,2023</span>
								</div>
								<p class="alith_post_except">Egestas ultricies inceptos lorem leo fringilla leo posuere platea condimentum mi vitae elementum sodales, nostra purus ut integer potenti. </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Technology</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Lacinia semper ut tincidunt mollis quam</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Emery</a></span>
									<span class="meta_date">Sep 17,2023</span>
								</div>
								<p class="alith_post_except">Volutpat habitant aptent porttitor, nam sit est suscipit quisque nisi curabitur, fermentum . </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box sticky">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Politics</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam quis </a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Steven Job</a></span>
									<span class="meta_date">Aug 16,2023</span>
								</div>
								<p class="alith_post_except">Aliquet accumsan etiam pharetra quisque turpis et metus nullam suspendisse ultricies, eu tempus phasellus platea lectus maecenas lorem sagittis pretium </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Fashion</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Tempor posuere conubia primis aenean pulvinar nisi</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Meredith</a></span>
									<span class="meta_date">Dec 16,2023</span>
								</div>
								<p class="alith_post_except">Est sociosqu gravida euismod erat tortor, amet turpis maecenas metus class enim lectus litora, magna urna morbi quisque non suscipit. </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Sport</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Laoreet orci faucibus consectetur torquent himenaeos libero</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Joyce</a></span>
									<span class="meta_date">Sep 18,2023</span>
								</div>
								<p class="alith_post_except">Morbi blandit et curabitur, litora sociosqu sem nisl posuere varius nostra velit dapibus diam, adipiscing a sem et inceptos </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Travel</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Nam class sociosqu taciti aenean nisl vivamus tempor</a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Geoffrey</a></span>
									<span class="meta_date">Aug 15,2023</span>
								</div>
								<p class="alith_post_except">Himenaeos proin tristique vulputate egestas erat in porta pellentesque, ullamcorper porta eget metus accumsan ultricies donec interdum </p>
								<div class="line-space"></div>
							</article>
							<article class="grid-item animate-box">
								<figure class="alith_news_img">
									<span class="post_meta_categories_label">Technology</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb_medium.png" alt="" /></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Nostra purus ut integer potenti sodales, donec nulla ac </a></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Fergal</a></span>
									<span class="meta_date">Jun 16,2023</span>
								</div>
								<p class="alith_post_except">Egestas ultricies inceptos lorem leo fringilla leo posuere platea condimentum mi vitae elementum sodales, nostra purus ut integer potenti. </p>
								<div class="line-space"></div>
							</article>
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
							<div class="latest_style_1">
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">1.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Ut enim ad minima veniam, quis
												nostrum</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">2.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Curae lacinia consec tetur
												varius</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>28 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">3.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Euismod lacus vulpu tate
												augue</strong></a>
										<p class="meta"><span>2 Aug, 2023</span> <span>18 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">4.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Quam mauris lorem erat est
												euismod</strong></a>
										<p class="meta"><span>21 Aug, 2023</span> <span>18 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">5.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Nec eget ince ptos aenean
												gravida</strong></a>
										<p class="meta"><span>21 Jun, 2023</span> <span>18 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
							</div>
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

						<div class="sidebar-widget animate-box">
							<div class="widget-title-cover">
								<h4 class="widget-title"><span>Trending</span></h4>
							</div>
							<div class="latest_style_2">
								<div class="latest_style_2_item_first">
									<figure class="alith_post_thumb_big">
										<span class="post_meta_categories_label">Legal, Blog</span>
										<a href='/single'><img class="w-100" src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
									<h3 class="alith_post_title">
										<a href='/single'><strong>Nor again is there anyone who loves or
												pursues or desires to obtain</strong></a>
									</h3>
								</div>
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad
											minim veniam</a></h3>
									<div class="post_meta">
										<span class="meta_date">18 Sep, 2023</span>
									</div>
								</div>
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad
											minim veniam</a></h3>
									<div class="post_meta">
										<span class="meta_date">18 Sep, 2023</span>
									</div>
								</div>
								<div class="latest_style_2_item">
									<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
									<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad
											minim veniam</a></h3>
									<div class="post_meta">
										<span class="meta_date">18 Sep, 2023</span>
									</div>
								</div>
							</div>
						</div> <!--.sidebar-widget-->

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
								<figure class="alith_news_img"><a href='/single'><img alt="" src="<?=BASE_URL?>web/images/thumb-square.png" class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam</a></h3>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img alt="" src="<?=BASE_URL?>web/images/thumb-square.png" class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam</a></h3>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img alt="" src="<?=BASE_URL?>web/images/thumb-square.png" class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam</a></h3>
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
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
								</a>
							</li>
							<li class="wow fadeInUp alith-col-nr alith-clr alith-col-3 animated">
								<a class="" target="_blank" href="#">
									<img class="" title="" alt="" src="<?=BASE_URL?>web/images/thumb-square.png">
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
