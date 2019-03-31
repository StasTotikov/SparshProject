
	<footer class="footer footer-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-center text-sm-left">
					<h3 class="footer__title">Top Products</h3>
					<ul class="footer__link">
						<li><a href="#/">managed Website</a></li>
						<li><a href="#/">Manage Reputation</a></li>
						<li><a href="#/">power Tools</a></li>
						<li><a href="#/">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-center text-sm-left">
					<h3 class="footer__title">Quick Links</h3>
					<ul class="footer__link">
						<li><a href="#/">Jobs</a></li>
						<li><a href="#/">Brand Assets</a></li>
						<li><a href="#/">Investor Relations</a></li>
						<li><a href="#/">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-center text-sm-left">
					<h3 class="footer__title">Features</h3>
					<ul class="footer__link">
						<li><a href="#/">Jobs</a></li>
						<li><a href="#/">Brand Assets</a></li>
						<li><a href="#/">Investor Relations</a></li>
						<li><a href="#/">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-lg-2 mb-4 mb-lg-0 text-center text-sm-left">
					<h3 class="footer__title">Resources</h3>
					<ul class="footer__link">
						<li><a href="#/">Guides</a></li>
						<li><a href="#/">Research</a></li>
						<li><a href="#/">Experts</a></li>
						<li><a href="#/">Agencies</a></li>
					</ul>
				</div>
				<div class="col-sm-8 col-lg-4 mb-4 mb-lg-0 text-center text-sm-left">
					<h3 class="footer__title">Newsletter</h3>
					<p>You can trust us. we only send promo offers,</p>
					<form action="" class="form-subscribe">
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Your email address" required>
							<div class="input-group-append">
								<button class="btn-append" type="submit"><i class="lnr lnr-arrow-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="d-sm-flex justify-content-between footer__bottom top-border">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<ul class="social-icons mt-2 mt-sm-0">
					<li><a href="#/"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#/"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#/"><i class="fab fa-dribbble"></i></a></li>
					<li><a href="#/"><i class="fab fa-behance"></i></a></li>					
				</ul>
			</div>
		</div>
	</footer>



	<script src="<?=base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>	
	<script src="<?=base_url('assets/vendor/bootstrap/bootstrap.bundle.min.js')?>"></script>
  	<script src="<?=base_url('assets/vendor/owl-carousel/owl.carousel.min.js')?>"></script>
  
  <script>
    var testimonialCarousel = $('.testimonialCarousel');
      testimonialCarousel.owlCarousel({
      loop:true,
      margin:80,
      startPosition: 2,
      nav: false,
      responsiveClass:true,
      responsive:{
        0:{
            items:1
        },
        1000:{
            items:2,
            loop:true
        }
      }
	});
	
	var dropToggle = $('.menu_right > li').has('ul').children('a');
	dropToggle.on('click', function() {
		dropToggle.not(this).closest('li').find('ul').slideUp(200);
		$(this).closest('li').children('ul').slideToggle(200);
		return false;
	});

	$( ".toggle_icon" ).on('click', function() {
		$( 'body' ).toggleClass( "open" );
	});
  </script>
</body>
</html>