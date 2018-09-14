		<!-- Start Main Slider -->
		<section id="main-slider">
			<!-- Carousel -->
			<div id="main-slide" class="main-slider carousel slide" data-ride="carousel">
				<!-- Carousel inner -->
				<div class="carousel-inner">
					@if(!empty($items))
					@foreach($items as $k => $item)
					<div class="item {{ $k == 0 ? 'active' : '' }}">
						<img class="img-responsive" src="{{ asset('storage/'.$item->photo)}}" alt="slider">
						<div class="container">
							<div class="slider-content">
								<div class="container">
									<h2 class="animated{{ $k }}">
										<span>We Make Creative <strong>Website</strong></span>
									</h2>
									<p class="animated{{ $k+1 }} slide-para">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</span>
									</p>
									<p class="animated{{ $k+2 }}">
										<a href="#" class="slider-btn cbiz-btn">Watch Video</a>
										<a href="#" class="slider-btn cbiz-btn cbiz-btn-border">Buy Now</a>
									</p>
								</div>
							</div>
						</div> <!-- /.container -->
					</div> <!-- /.item -->
					@endforeach
					@endif
				</div>
				<!-- Carousel inner end-->

				<!-- Controls -->
				<a class="left carousel-control" href="#main-slide" data-slide="prev">
					<span><i class="fa fa-angle-left"></i></span>
				</a>
				<a class="right carousel-control" href="#main-slide" data-slide="next">
					<span><i class="fa fa-angle-right"></i></span>
				</a>
				<div class="click-to-next bottom-top-animation">
					<i></i>
				</div>

			</div>
			<!-- /carousel -->
		</section> <!-- /.main-slider -->
		<!-- End Main Slider -->