<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>महासागर समाचार</title>

		<link href="<?=BASE_URL?>web/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_URL?>web/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_URL?>web/css/animate.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_URL?>web/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_URL?>web/css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_URL?>web/css/normalize.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_URL?>web/css/slicknav.min.css" rel="stylesheet" type="text/css"/>

		<!-- Header-Btn CSS -->
		<!-- <link href="<?=BASE_URL?>web/css/header-btn.css" rel="stylesheet" type="text/css"/> -->
		<link href="<?=BASE_URL?>web/css/RecentNews.css" rel="stylesheet" type="text/css"/>
		
		<!-- Site CSS -->
		<link href="<?=BASE_URL?>web/css/main.css?v=2.0" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_URL?>web/css/responsive.css?v=2.0" rel="stylesheet" type="text/css"/>
	
<!-- Banner style -->
	<style>

		.header-style{
			width: 100%;
			/* border: 1px #ff0000 solid; */
			border-radius: 5px;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.upload-container {
			width: 180px;
			height: 50px;
			background-color: red;
			border-radius: 100px;
			box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
			color: white;
			transition: all 250ms;
			font-size: 16px;
			font-weight: bold;
			text-align: center;
			line-height: 50px;	
			border-radius: 50px;
			position: relative;
			cursor: pointer;
			overflow: hidden;
		}

		.upload-container input[type="file"] {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			opacity: 0;
			cursor: pointer;
		}
		.upload-container.submitting {
			pointer-events: none;
			opacity: 0.6;
		}
		/* image Edit */
		#bannerAdImageUpload{
        position: absolute; 
        top: 25px;
        right: 10px; 
        width: 30px;
        height: 30px; 
        border-radius: 100%; 
        overflow: hidden; 
        box-shadow: rgba(0, 225, 255, 0.844) 0px 2px 4px 0px, rgba(4, 0, 255, 0.844) 0px 2px 16px 0px;
        transition: all 1s;
		}
		#bannerAdImageUpload:hover{
			box-shadow: rgba(0, 225, 255, 0.844) 0px 2px 4px 0px, rgba(4, 0, 255, 0.844) 0px 2px 16px 0px;
		}
/* Button */
		.addImgBtn{
		background-color: white;
		text-align: center;
        position: absolute; 
        top: 0; 
        height: 100%; 
        width: 100%;
		}
/* Input */
		.addImgInput{
			position: absolute;
			top: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
		}

		#bannerAdImagedelete{
        position: absolute;
        top: 25px;
        right: 60px;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        box-shadow: rgba(0, 255, 187, 0.844) 0px 2px 4px 0px, rgba(234, 0, 255, 0.844) 0px 2px 16px 0px;
        overflow: hidden;
        transition: all 1s;
		}
		#bannerAdImagedelete:hover{
			box-shadow: rgba(4, 0, 255, 0.844) 0px 2px 4px 0px, rgba(0, 225, 255, 0.844) 0px 2px 16px 0px;
		}
/* Delete Button */
		.deleteImgBtn{
        position: absolute; 
        top: 0; 
        height: 100%; 
        width: 100%;
		}
/* Delete Input */
		.deleteImgInput{
			position: absolute;
			top: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
		}

		.bannerBtn{
		margin-left: 50px;
		width: 200px;
		height: 42px;
		padding: 0.6em 2em;
		border: none;
		outline: none;
		color: rgb(255, 255, 255);
		background: #111;
		cursor: pointer;
		position: relative;
		z-index: 0;
		border-radius: 10px;
		user-select: none;
		-webkit-user-select: none;
		touch-action: manipulation;
		}

		.bannerBtn:before {
		content: "";
		background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000 );
		position: absolute;
		top: -2px;
		left: -2px;
		background-size: 400%;
		z-index: -1;
		filter: blur(5px);
		-webkit-filter: blur(5px);
		width: calc(100% + 4px);
		height: calc(100% + 4px);
		animation: glowing-button-85 20s linear infinite;
		transition: opacity 0.3s ease-in-out;
		border-radius: 10px;
		}

		@keyframes glowing-button-85 {
		0% {
			background-position: 0 0;
		}
		50% {
			background-position: 400% 0;
		}
		100% {
			background-position: 0 0;
		}
		}

		.bannerBtn:after {
		z-index: -1;
		content: "";
		position: absolute;
		width: 100%;
		height: 100%;
		background: #222;
		left: 0;
		top: 0;
		border-radius: 10px;
		}

	</style>
		
		<!-- Modernizr JS -->
		<script src="<?=BASE_URL?>web/js/modernizr-3.5.0.min.js"></script>
		<link rel="icon" type="image/png" href="<?=BASE_URL?>/favicon.ico">

		<!-- TINYMCE -->
		<!-- Place the first <script> tag in your HTML's <head> -->
		<script src="https://cdn.tiny.cloud/1/3qy7g4cwo3sj0y8gx2ch7bxhbjwt1nbl2rr6vhb8f1fgqowx/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

		<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
		<script>
		tinymce.init({
			selector: '.mycontarea',
			plugins: [
			'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
			'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
			'importword', 'exportword', 'exportpdf'
			],
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
			tinycomments_mode: 'embedded',
			tinycomments_author: 'Author name',
			mergetags_list: [
			{ value: 'First.Name', title: 'First Name' },
			{ value: 'Email', title: 'Email' },
			],
			ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
			exportpdf_converter_options: { 'format': 'Letter', 'margin_top': '1in', 'margin_right': '1in', 'margin_bottom': '1in', 'margin_left': '1in' },
			exportword_converter_options: { 'document': { 'size': 'Letter' } },
			importword_converter_options: { 'formatting': { 'styles': 'inline', 'resets': 'inline',	'defaults': 'inline', } },
		});
		</script>

		<!-- preview image -->
		<script type="text/javascript">
        	function previewImage(event) {
        	var input = event.target;
        	var image = document.getElementById('preview');
        	if (input.files && input.files[0]) {
            	var reader = new FileReader();
            	reader.onload = function(e) {
               	image.src = e.target.result;
            	}
            	reader.readAsDataURL(input.files[0]);
        	}
        	}
    	</script>

		<!-- header image -->
		<script>
			function handleBannerAdImg(event) {
				const form = document.getElementById('manageBannerAdImgForm');
				const container = document.querySelector('.upload-container');
				const spanContainer = document.querySelector('.upload-container span');
			
				container.classList.add('submitting');
				spanContainer.textContent = 'Submitting...';
			
				form.submit();
			}
		</script>

		<!-- Banner edit image.. -->
		<script>
			function handleBannerEditImg(event) {
				event.preventDefault(); 
				const form = document.getElementById('editBannerAdImgForm');
				const container = document.querySelector('#bannerAdImageUpload');
				const spanContainer = document.querySelector('#bannerAdImageUpload span');
				const fileInput = container.querySelector('input[type="file"]');

				if (!fileInput) {
					alert('File input element not found inside #bannerAdImageUpload.');
					return;
				}

				if (fileInput.files.length > 0) {
					container.classList.add('submitting');
					spanContainer.textContent = 'Submitting...';

					form.submit();
				} else {
					alert('Please select an image before submitting.');
				}
			}
		</script>




	</head>
	<body>
		<div id="wrapper">
			<div id="sidebar-wrapper">
				<div class="sidebar-inner">
					<div class="off-canvas-close"><span>CLOSE</span></div>
					<div class="sidebar-widget">
						<div class="widget-title-cover">
							<h4 class="widget-title"><span>Popular Articles</span></h4>
						</div>
						<ul class="menu" id="sidebar-menu">
							<li class="menu-item"><a href="#">Trending</a></li>
							<li class="menu-item menu-item-has-children"><a href="#">Thinking</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="#">Home &amp; Living</a></li>
									<li class="menu-item menu-item-has-children"><a href="#">Lifestyle</a>
										<ul class="sub-menu">
											<li class="menu-item"><a href="#">Travel</a></li>
											<li class="menu-item"><a href="#">Gardening</a></li>
											<li class="menu-item"><a href="#">Inspirations</a></li>
										</ul>
									</li> 
									<li class="menu-item"><a href="#">Inspirations</a></li>
									<li class="menu-item"><a href="#">Gardening</a></li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children"><a href="#">Inspirations</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="#">House &amp; Living</a></li>
									<li class="menu-item"><a href="#">Travel</a></li>
								</ul>
							</li>
							<li class="menu-item"><a href="#">Contact</a></li>
						</ul>
					</div>

					<div class="sidebar-widget">
						<div class="widget-title-cover">
							<h4 class="widget-title"><span>Trending</span></h4>
						</div>
						<div class="latest_style_2">
							<div class="latest_style_2_item_first">
								<figure class="alith_post_thumb_big">
									<span class="post_meta_categories_label">Legal, Blog</span>
									<a href='/single'><img src="<?=BASE_URL?>web/images/thumb-large.jpg" alt=""/></a>
								</figure>
								<h3 class="alith_post_title">
									<a href='/single'><strong>Nor again is there anyone who loves or pursues or desires to obtain</strong></a>
								</h3>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a></figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam quis </a></h3>
								<div class="post_meta">
									<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
								</div>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a></figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
								<div class="post_meta">
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
							<div class="latest_style_2_item">
								<figure class="alith_news_img"><a href='/single'><img src="<?=BASE_URL?>web/images/thumb-square.png" alt="" /></a></figure>
								<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
								<div class="post_meta">
									<span class="meta_date">18 Sep, 2023</span>
								</div>
							</div>
						</div>
					</div> <!--.sidebar-widget-->
					<div class="sidebar-widget">
						<div class="widget-title-cover">
							<h4 class="widget-title"><span>Advertise</span></h4>
						</div>
						<div class="banner-adv">
							<div class="adv-thumb">
								<a href="#">
									<img class="aligncenter" alt="img1" src="<?=BASE_URL?>web/images/ads.jpg">
								</a>
							</div>
						</div>
					</div> <!--.sidebar-widget-->
				</div>
			</div>
			<!--#sidebar-wrapper-->
			<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="container">
						<div class="top_bar margin-15">
							<div class="row">
								<div class="col-md-6 col-sm-12 time">
									<div class="off-canvas-toggle" id="off-canvas-toggle"><span></span>
										<p class="sidebar-open">MORE</p>
									</div>
									<i class="fa fa-clock-o " id="currentdate"></i><span> <?=date('l, j F Y')?></span>
								</div>
								<div class="col-md-6 col-sm-12 social">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									</ul>
									<div class="top-search">
										<i class="fa fa-search"></i><span>SEARCH</span>
									</div>
									<div class="top-search-form">
										<form action="#" class="search-form" method="get" role="search">
											<label>
												<span class="screen-reader-text">Search for:</span>
												<input type="search" name="s" value="" placeholder="Search …"
													class="search-field">
											</label>
											<input type="submit" value="Search" class="search-submit">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-3 header">
								<h1 class="logo"><a href='/'><img src="<?=BASE_URL?>/logo.png" alt=""></a></h1>
								<!-- <p class="tagline">NEWSPAPER / MAGAZINE / PUBLISHER</p> -->
							</div>
							<div class="col-12 col-md-8 header p-0 py-md-3">
							<div class="col-3 col-md-2 header p-0 py-md-1 position-relative header-style">
                            <?php
                            // $BannerAdlimit = 1;
                            // $sqlImage = "SELECT * FROM banner_ad_images ORDER BY id DESC LIMIT {$BannerAdlimit}";
							$sqlImage = "SELECT meta_value FROM mhs_meta WHERE meta_key = 'banner_ad_img'";
                            $resultImage = mysqli_query($db, $sqlImage) or die("Query Failed: " . mysqli_error($db));

                            if (mysqli_num_rows($resultImage) > 0) {
                                while ($row = mysqli_fetch_assoc($resultImage)) {
                            ?>
                                    <!-- Display the Image -->
                                    <figure class="alith_post_thumb">
                                        <a href='/singleid=<?php echo $row['id']; ?>'>
                                            <img class="w-100" src="<?= NEWS_UPLOAD_URL . $row['meta_value']; ?>" alt="Banner Image">
                                        </a>
                                    </figure>
                                    <!-- Edit Form -->
                                    <form id="editBannerAdImgForm" action="" method="POST" enctype="multipart/form-data">
                                        <div id="bannerAdImageUpload">
											<span class="addImgBtn"><i class="fa fa-edit"></i></span>
                                            <input type="file" name="bannerEditImg" class="addImgInput" onchange="handleBannerEditImg(event)"/>	
                                        </div>
										<input type="hidden" name="form-name" value="bannereditimg" />
                                    </form>
                                    <!-- Delete Form -->
									<div id="bannerAdImagedelete">
										<a href='<?= SITE_URL ?>banneraddelete?id=<?php echo $row["id"]; ?>'>
											<button class="deleteImgBtn"><i class="fa fa-trash"></i></button>
										</a>
									</div>
                            <?php
                                }
                            } else {
                            ?>
                                <!-- Upload Form -->
                                <form id="manageBannerAdImgForm" action="" method="POST" enctype="multipart/form-data">
                                    <div class="upload-container">
										<span>+ Upload Ad Image</span>
                                        <input type="file" name="adImage" onchange="handleBannerAdImg(event)" />
                                    </div>
                                    <input type="hidden" name="form-name" value="bannerimg" />
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                        </div>
						</div>
					</div>
				</div>
				<div class="main-nav section_margin">
					<div class="container-fluid">
						<div class="container">
							<div class="row bg-white">
								<div class="col-12 col-md-12 main_nav_cover" id="nav">

									<ul id="main-menu">
										<li><a href="<?=SITE_URL?>home">Home</a></li>
										<?php
											$sql = "SELECT cat_name FROM main_categories WHERE status = 1";
											$result = mysqli_query($db, $sql) or die("Query Failed.: category");
											if(mysqli_num_rows($result) > 0){
												while ($row = $result->fetch_assoc()) {
													$categoryName = $row['cat_name'];
													echo "<li><a href=\"$categoryName\">$categoryName</a></li>";
												}
											}
									 	?>
										<li><a href="<?=SITE_URL?>gallery">Gallery</a></li>
										<?php if(isset($_SESSION["user_id"])){ ?>
    										<li><a href="<?php echo SITE_URL; ?>logout">Logout</a></li>
										<?php } else { ?>
    										<li><a href="<?php echo SITE_URL; ?>admin-login">Login</a></li>
										<?php } ?>

										<?php if(isset($_SESSION["user_id"]) && isset($_SESSION["role"]) && $_SESSION["role"] == 1) { ?>
    										<li><a href="<?php echo SITE_URL; ?>add">Add</a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		