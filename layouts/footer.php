<div class="container-fluid alith_footer_right_reserved">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 bottom-logo">
				<h1 class="logo"><a href='/'><img src="<?= BASE_URL ?>/logo.png" alt=""></a></h1>
				<div class="tagline social">
					<ul>
						<li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
						<li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
						<li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-12 coppyright">
				<p>© Copyright <?= date("Y") ?>, All rights reserved. Design by <a href="http://mahasagarsamachar.com/"
						title="Mahasagar Samachar">mahasagarsamachar.com</a></p>
			</div>
		</div>
	</div>
</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><span>Take Me Top</span></a>
	</div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

<script src="<?= BASE_URL ?>web/js/jquery-3.7.0.min.js"></script>
<script src="<?= BASE_URL ?>web/js/owl.carousel.min.js"></script>
<script src="<?= BASE_URL ?>web/js/jquery.waypoints.min.js"></script>
<script src="<?= BASE_URL ?>web/js/jquery.slicknav.min.js"></script>
<script src="<?= BASE_URL ?>web/js/masonry.pkgd.min.js"></script>
<script src="<?= BASE_URL ?>web/js/jquery.sticky-sidebar.js"></script>
<script src="<?= BASE_URL ?>web/js/main.js?v=2.0"></script>
<script src="<?= BASE_URL ?>web/js/smart-sticky.js?v=2.0"></script>
<script src="<?= BASE_URL ?>web/js/custom.js"></script>
<!-- <script src="<?= BASE_URL ?>web/js/GetDate.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- jQuery aur Owl Carousel CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
	$(document).ready(function(){
		var owl = $("#slider-small").owlCarousel({
			items: 8, 
			loop: true,
			margin: 15,
			nav: false,
			dots: false,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplaySpeed: 1000,
			smartSpeed: 1000,
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			responsive: {
				0: { items: 1 },
				600: { items: 2 },
				1000: { items: 4 }
			}
		});

		$("#slider-small").on('mouseenter', function() {
			owl.trigger('stop.owl.autoplay');
		});

		$("#slider-small").on('mouseleave', function() {
			owl.trigger('play.owl.autoplay', [4000]);
		});
	});
</script>
<!-- text editor -->

<!-- Include SweetAlert2 library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
// Check if session variables for status are set and display SweetAlert if true
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
	?>
	<script>
		Swal.fire({
			title: "<?php echo $_SESSION['status']; ?>",
			icon: "<?php echo $_SESSION['status_code']; ?>", // use "success" or "error"
			confirmButtonText: "OK"
		});
	</script>
	<?php
	unset($_SESSION['status']); // Clear the session status after showing the alert
}
?>


</html>