<div class="container-fluid">
	<div class="container animate-box">
		<div class="row">
			<div class="post-header">
				<div class="bread">
					<ul class="breadcrumbs" id="breadcrumbs">
						<li class="item-home">You are here: <a class='bread-link bread-home' href='/' title='Home'>Home</a></li>
						<li class="separator separator-home"> /</li>
						<li class="item-current item-cat"><a class='bread-link bread-home' href='/' title='Home'>Lifestyle</a></li>
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
						<figure class="alith_news_img animate-box"><a href='<?=SITE_URL?>news'><img src="<?=NEWS_UPLOAD_URL.$row['news_banner']?>" alt="No img there" /></a></figure>
						<div class="post-content">
							<div class="single-header">

								<!-- title -->
								<h3 class="alith_post_title"><?php echo $row['news_title']; ?></h3>
								<div class="post_meta">
									<a class='meta_author_avatar' href='/page-author'><img src="<?=BASE_URL?>web/images/author-avatar.png" alt="author details" /></a>
									<span class="meta_author_name"><a class='author' href='/page-author'>Steven Job</a></span>
									<span class="meta_categories"><a href="archive.html">Politics</a>, <a href="archive.html">News</a></span>
									<span class="meta_date">18 Sep, 2023</span>
								</div>
				<?php 
						}
					}
					}else{
						echo "Result not found";
					}
                    ?>
							</div>
							<div class="single-content animate-box">
								<p class="alith_post_except animate-box">Vivamus hac faucibus primis eleifend ligula curabitur phasellus augue, quisque rhoncus purus quam per felis rhoncus viverra bibendum, habitasse sem turpis fermentum</p>
								<div class="dropcap column-2 animate-box">
									<p>The lemming hello and hence leapt hello more otter aerially or dear monkey much illustrative bled showed crud fox yikes but spelled far onto nudged some frog and bluebird one surreptitiously ground frenetically much far up rewrote this.</p>
									<p>And far hey much hello and bashful one save less much goldfish analogically rabbit more hello threw thanks therefore truthful unproductive strenuously <strong>concentric repaid</strong> manifestly and oh between the one jeez and hit terrier dense unwittingly shark versus inscrutably that much fit involuntary a endearingly.</p>
									<p> <img alt="" src="<?=BASE_URL?>web/images/thumb_medium.png"></p>
									<p>Knew opposite sped hey insect wow interminable telepathic far oh this to one goldfinch some under chose attractively a<em> yet clenched one less prodigious amenably far one inset much much that hound gosh goodness articulate</em> spitefully ape repeatedly yikes that drooled glumly some romantic lion far far wow woolly a some one meant self-consciously pangolin poorly until a dizzily morbid house.</p>
									<p>Pellentesque neque nulla cubilia enim consequat eleifend, taciti nec aenean vehicula congue dolor etiam, ornare morbi class tristique quisque mattis augue tempus semper venenatis donec ipsum cras dapibus elit, ut fusce rhoncus senectus sit lectus tristique cursus convallis</p>
									<p>Vivamus hac faucibus primis eleifend ligula curabitur phasellus augue, quisque rhoncus purus quam per felis rhoncus viverra bibendum, habitasse sem turpis fermentum morbi ut diam elit vestibulum consectetur suscipit pellentesque commodo dictumst potenti gravida libero donec in, non tristique orci habitant ipsum diam himenaeos</p>
									<p>Ouch much until in ahead until much scallop obliquely expansive experimentally daintily more regardless wherever conjointly overslept elegant then wow extrinsically irrespective imminently and ladybug cynic hawk between a guffawed as coaxingly strictly blubbered meant much pending overheard and eagle meanly jeez untiring jeez past well far realistic on mounted a by.</p>
									<blockquote>
										<p>Jeez secure hound python slit one began indubitably much owing cackled however fabulous leapt dully across hey around due that fumed invaluably came tranquilly one jeez salamander.</p>
									</blockquote>
									<p>Frtuitous spluttered unlike ouch vivid blinked far inside under far the wild one wasp nightingale spluttered wide otter crud lemming aside about and python until.</p>
									<p>Against and lantern where a and gnashed nefarious far rigorous cheerfully much far owing funny lusty cantankerous<a href="#"> until much</a> dire some deliberate close condescendingly tarantula angelfish glum shut a dipped wow that jeepers much and shut discarded this.</p>
									<p>Ouch oh alas crud unnecessary invaluable some goodness opposite hello since audacious far <em>barring and</em> absurdly much boa until read porpoise grouped the scooped the lied save minutely gosh much this outside and much snorted dear eel resold callously flinched smoothly.</p>
									<h2>Sample Heading</h2>
									<p>Close unthinking darn as darn between naked beyond seriously guiltily chameleon and that fish lent alas spuriously winced and shuddered unlocked more some gosh darn the trustfully talkative goodness indubitably single-mindedly ouch astride.</p>
									<p>Freshly turtle took toward more much notably fearlessly resolutely tastefully thus far some hello amazingly well overthrew far youthfully where stiffly below mongoose ordered dizzy the some far cosmetically much cuddled far oh this much darn one much much cuckoo ungracefully underneath because snarling less.</p>
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
							<div class="single-comment">
								<section id="comments">
									<h4 class="single-comment-title">Comments</h4>
									<div class="comments-inner clr">
										<div class="comments-title">
											<p>There are 3 comments for this article</p>
										</div>
										<ol class="commentlist">
											<li id="li-comment-4">
												<article class="comment even thread-even depth-1 clr" id="comment-4">
													<div class="comment-author vcard"> <img width="60" height="60" src="<?=BASE_URL?>web/images/author-avatar.png" alt=""></div>
													<div class="comment-details clr ">
														<header class="comment-meta"> <strong class="fn"> Steven Jobs </strong> <span class="comment-date">July 4, 2017 7:25 am </span></header>
														<div class="comment-content entry clr">
															<p>dived wound factual legitimately delightful goodness fit rat some lopsidedly far when.</p>
														</div>
														<div class="reply comment-reply-link-div"> <a aria-label="Reply to spadmin" href="#respond" class="comment-reply-link" rel="nofollow">Reply</a></div>
													</div>
												</article>
												<ul class="children">
													<li id="li-comment-6">
														<article class="comment odd alt depth-2 clr" id="comment-6">
															<div class="comment-author vcard"><img width="60" height="60" src="<?=BASE_URL?>web/images/author-avatar.png" alt=""></div>
															<div class="comment-details clr ">
																<header class="comment-meta"> <strong class="fn"> Jim Calist </strong> <span class="comment-date">July 16, 2017 1:29 am </span></header>
																<div class="comment-content entry clr">
																	<p>Slung alongside jeepers hypnotic legitimately some iguana this agreeably triumphant pointedly far</p>
																</div>
																<div class="reply comment-reply-link-div"><a aria-label="Reply to spadmin" href="#respond" class="comment-reply-link" rel="nofollow">Reply</a></div>
															</div>
														</article>
													</li>
												</ul>
											</li>
											<li id="li-comment-5">
												<article class="comment even thread-odd thread-alt depth-1 clr" id="comment-5">
													<div class="comment-author vcard"> <img width="60" height="60" src="<?=BASE_URL?>web/images/author-avatar.png" alt=""></div>
													<div class="comment-details clr ">
														<header class="comment-meta"> <strong class="fn"> Steven Jobs </strong> <span class="comment-date">July 4, 2017 7:25 am </span></header>
														<div class="comment-content entry clr">
															<p>jeepers unscrupulous anteater attentive noiseless put less greyhound prior stiff ferret unbearably cracked oh.</p>
														</div>
														<div class="reply comment-reply-link-div"><a aria-label="Reply to spadmin" href="#respond" class="comment-reply-link" rel="nofollow">Reply</a></div>
													</div>
												</article>
											</li>
											<li id="li-comment-85">
												<article class="comment byuser comment-author-spadmin bypostauthor odd alt thread-even depth-1 clr" id="comment-85">
													<div class="comment-author vcard"><img width="60" height="60" src="<?=BASE_URL?>web/images/author-avatar.png" alt=""></div>
													<div class="comment-details clr ">
														<header class="comment-meta"> <strong class="fn"> Steven Jobs <span class="author-badge"></span> </strong> <span class="comment-date">May 10, 2023 2:41 am </span></header>
														<div class="comment-content entry clr">
															<p>So sparing more goose caribou wailed went conveniently burned the the the and that save that adroit gosh and sparing armadillo grew some overtook that magnificently that</p>
														</div>
														<div class="reply comment-reply-link-div"><a aria-label="Reply to spadmin" href="#respond" class="comment-reply-link" rel="nofollow">Reply</a></div>
													</div>
												</article>
											</li>
											<li id="li-comment-86">
												<article class="comment byuser comment-author-spadmin bypostauthor even thread-odd thread-alt depth-1 clr" id="comment-86">
													<div class="comment-author vcard"><img width="60" height="60" src="<?=BASE_URL?>web/images/author-avatar.png" alt=""></div>
													<div class="comment-details clr ">
														<header class="comment-meta"> <strong class="fn"> Steven Jobs <span class="author-badge"></span> </strong> <span class="comment-date">May 10, 2023 2:42 am </span></header>
														<div class="comment-content entry clr">
															<p>Circuitous gull and messily squirrel on that banally assenting nobly some much rakishly goodness that the darn abject hello left because unaccountably spluttered unlike a aurally since contritely thanks</p>
														</div>
														<div class="reply comment-reply-link-div"><a aria-label="Reply to spadmin" href="#respond" class="comment-reply-link" rel="nofollow">Reply</a></div>
													</div>
												</article>
											</li>
										</ol> <!--comment list-->
										<nav role="navigation" class="comment-navigation clr">
											<div class="nav-previous span_1_of_2 col col-1"></div>
											<div class="nav-next span_1_of_2 col"> <a href="#comments">Newer Comments →</a></div>
										</nav> <!--comment nav-->
										<div class="comment-respond" id="respond">
											<h3 class="comment-reply-title" id="reply-title">Leave a Reply <small><a href="#respond" id="cancel-comment-reply-link" rel="nofollow"><i class="fa fa-times"></i></a></small></h3>
											<form novalidate="" class="comment-form" id="commentform" method="post" action="">
												<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span></p>
												<div class="row">
													<div class="comment-form-author col-sm-12 col-md-6"> <label for="author">Name (optional)</label> <input type="text" size="30" value="" placeholder="Your name *" name="author" id="author"></div>
													<div class="comment-form-email col-sm-12 col-md-6"> <label for="email">Email (optional)</label> <input type="email" size="30" value="" placeholder="Email *" name="email" id="email"></div>
												</div>
												<p class="comment-form-comment"><label for="comment">Comment</label><textarea aria-required="true" placeholder="Your Comment" rows="8" cols="45" name="comment" id="comment"></textarea></p>

												<p class="form-submit"><input type="submit" value="Post Comment" class="submit" id="submit" name="submit"> <input type="hidden" id="comment_post_ID" value="80" name="comment_post_ID"> <input type="hidden" value="0" id="comment_parent" name="comment_parent"></p>
											</form>
										</div> <!--comment form-->

									</div>
								</section>
							</div>
						</div>
					</article>
					<div class="single-more-articles single-disable-inview">
						<h4><span>You might be interested in</span></h4>
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
									<figure class="alith_news_img"><a href='/single'><img
										src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
									</figure>
								</div>
								<div class="latest_style_1_item">
									<span class="item-count vertical-align">2.</span>
									<div class="alith_post_title_small">
										<a href='/single'><strong>Curae lacinia consec tetur
												varius</strong></a>
										<p class="meta"><span>2 Sep, 2023</span> <span>28 views</span></p>
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
										<p class="meta"><span>2 Aug, 2023</span> <span>18 views</span></p>
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
										<p class="meta"><span>21 Aug, 2023</span> <span>18 views</span></p>
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
										<p class="meta"><span>21 Jun, 2023</span> <span>18 views</span></p>
									</div>
									<figure class="alith_news_img"><a href='/single'><img
												src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a>
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
						</div> <!--.sidebar-widget-->

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
											src="<?=BASE_URL?>web/images/thumb-square.png" class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam</a></h3>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img alt=""
											src="<?=BASE_URL?>web/images/thumb-square.png" class="hover_grey"></a>
								</figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim
										veniam</a></h3>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img alt=""
											src="<?=BASE_URL?>web/images/thumb-square.png" class="hover_grey"></a>
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
