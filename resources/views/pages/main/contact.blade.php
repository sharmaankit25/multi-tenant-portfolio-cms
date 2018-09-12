@extends('layouts.main')

@section('content')
    		<!-- Page Header AREA START -->
		<section class="page-head page-bg" style="background-image: url('assets/images/bg/contact.jpg')">
			<div class="container">    
				<h3 class="page-heading">Contact</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<a href="#"><span>Contact</span></a>
				</div>
			</div> <!-- /.container -->
		</section> <!-- /.page-head -->
		<!-- /Page Header AREA END -->

		<!-- Contact AREA START -->
		<section class="contact-us section">
			<div class="container">    
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="contact-content">
							<div class="comm-title">
								<h3>Contact Us</h3>
							</div>
							<p>{{ $organisation->description }}</p>
						</div> <!-- /.contact-content -->
						<div class="lets-contact">
							 <ul class="contact-list">
								<li>
									<a href="#"><i class="fa fa-paper-plane-o"></i>{{ $organisation->address }}</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-envelope-o"></i>{{ $organisation->email }}</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-phone"></i>{{ $organisation->phone }}</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-history"></i>9.00 am to 9.00 pm in a day, 7 days a week</a>
								</li>

							</ul> <!-- /.contact-list -->
							<div class="contact-social">
								<ul>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-facebook"></i>
										  <i class="fa hover-show fa-facebook"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-twitter"></i>
										  <i class="fa hover-show fa-twitter"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-google-plus"></i>
										  <i class="fa hover-show fa-google-plus"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-pinterest-p"></i>
										  <i class="fa hover-show fa-pinterest-p"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-youtube"></i>
										  <i class="fa hover-show fa-youtube"></i>
									  </a>
								  </li>
							  </ul>
							</div> <!-- /.contact-social -->
						</div> <!-- /.lets-contact -->
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6">
						<div class="border-in">
							<div class="comm-title">
								<h3>Get in touch with us</h3>
							</div>
							<div class="contact-form">
								<form method="post" action="#">
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="Name" class="form-control" required placeholder="Your Name">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="email" name="Email" class="form-control" required placeholder="Your Email">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="Subject" class="form-control" placeholder="Your Subject">
											</div>
										</div> <!-- /.col- -->

										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<textarea name="Comment" class="form-control" required placeholder="Your Message"></textarea>
											</div>
										</div> <!-- /.col- -->
										<div class="form-group col-xs-12">
											<div class="form-btn">
												<input type="submit" name="submit" value="Send" class="contact-form-btn">
											</div>
										</div>
									</div> <!-- /.row -->
								</form>
							</div> <!-- /.contact-form -->
						</div>
					</div> <!-- /.col- -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section> <!-- /.contact-us -->
		<!-- /Contact AREA END -->


		<!-- Map AREA START -->
		<div class="map-area">
			<div class="gmap-container">
                @php
                    $lat_lng = explode(',',$organisation->lat_long);
                    $lat = $lat_lng[0];
                    $lng = $lat_lng[1];
                @endphp
				<div class="gmap init-gmap" data-lat="{{ $lat }}" data-lng="{{ $lng }}" data-zoom="8"></div>
			</div>
		</div> <!-- /.map-area -->
		<!-- /Map AREA END -->
@endsection