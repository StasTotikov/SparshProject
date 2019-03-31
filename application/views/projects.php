<?php $this->load->view('header');?>


	<!--================Canvus Menu Area =================-->
	<div class="canvus_menu">
		<div class="container">
			<div class="float-right">
				<div class="toggle_icon" title="Menu Bar">
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<!--================End Canvus Menu Area =================-->
  <header class="hero-banner project-bg">
    <a class="navbar-brand" href="index.html">
      <img src="img/logo.png" alt="">
    </a>
    <div class="container">
      <h2 class="section-intro__subtitle">About Us</h2>
      <div class="btn-group breadcrumb">
        <a href="#/" class="btn">Home</a>
        <span class="btn btn--rightBorder">About</span>
      </div>
    </div>
  </header>
  <section class="portfolio section-margin">
		<div class="container">
			<div class="section-intro">
				<h4 class="section-intro__title">OUR PORTFOLIO</h4>
				<h2 class="section-intro__subtitle bottom-border">Latest Completed Projects</h2>
			</div>

			<div class="row align-items-end pb-md-5 mb-4">
				<div class="col-md-7 mb-4 mb-md-0">
					<div class="portfolio__img">
						<img class="img-fluid" src="<?=base_url('img/portfolio1.png')?>" alt="">
					</div>
				</div>
				<div class="col-md-5 mb-5 pl-xl-5">
					<h4 class="section-intro__title left-border">December, 2018</h4>
					<h2 class="section-intro__subtitle small">Pure Bedroom Architecture</h2>
					<p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>

					<a class="btn btn--rightBorder mt-3" href="#/">Read More</a>
				</div>
			</div>

			<div class="row align-items-end pb-md-5 mb-4">
				<div class="col-md-5 mb-5 pr-xl-5 order-2 order-md-1">
					<h4 class="section-intro__title left-border">December, 2018</h4>
					<h2 class="section-intro__subtitle small">Pure Bedroom Architecture</h2>
					<p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>

					<a class="btn btn--rightBorder mt-3" href="#/">Read More</a>
				</div>
				<div class="col-md-7 mb-4 mb-md-0 order-1 order-md-2">
					<div class="portfolio__img">
						<img class="img-fluid" src="<?=base_url('img/portfolio2.png')?>" alt="">
					</div>
				</div>
			</div>

			<div class="row align-items-end pb-md-5 mb-4">
				<div class="col-md-7 mb-4 mb-md-0">
					<div class="portfolio__img">
						<img class="img-fluid" src="<?=base_url('img/portfolio3.png')?>" alt="">
					</div>
				</div>

				<div class="col-md-5 mb-5 pl-xl-5">
					<h4 class="section-intro__title left-border">December, 2018</h4>
					<h2 class="section-intro__subtitle small">Pure Bedroom Architecture</h2>
					<p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>

					<a class="btn btn--rightBorder mt-3" href="#/">Read More</a>
				</div>
			</div>

			<div class="row align-items-end pb-md-5 mb-4">
				<div class="col-md-5 mb-5 pr-xl-5 order-2 order-md-1">
					<h4 class="section-intro__title left-border">December, 2018</h4>
					<h2 class="section-intro__subtitle small">Pure Bedroom Architecture</h2>
					<p>If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>

					<a class="btn btn--rightBorder mt-3" href="#/">Read More</a>
				</div>

				<div class="col-md-7 order-1 order-md-2 mb-4 mb-md-0">
					<div class="portfolio__img">
						<img class="img-fluid" src="<?=base_url('img/portfolio4.png')?>" alt="">
					</div>
				</div>
			</div>

			<div class="text-center pt-2">
				<button class="btn btn--rightBorder btn--leftBorder">Load More Projects</button>
			</div>
		</div>
	</section>

	<<?php $this->load->view('footer');?>
