		<!-- Header Area START -->
		<header class="clearfix header" data-spy="affix" data-offset-top="60">
			<!-- Start  Logo & Menu  -->
			<div class="navbar navbar-default navbar-top">
				<div class="container">
					<div class="navbar-header">
						<!-- Stat Toggle Nav Link For Mobiles -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<!-- End Toggle Nav Link For Mobiles -->
						<div class="logo">
							<a class="navbar-brand" href="{{ url('/') }}">
								<img alt="Logo" src="{{ asset('assets/images/logo.png')}}">
							</a>
						</div> <!-- /.logo -->
					</div>
					<div class="navbar-collapse collapse">
						<!-- Start Navigation List -->
						<ul class="nav navbar-nav navbar-right">
							<li><a class="active" href="{{ url('/') }}">Home</a></li>
							<li>
								<a href="#">Pages</a>
								<ul class="dropdown">
								@foreach($pages as $page)
									<li><a href="{{ route('main.page',['slug'=>$page->slug]) }}">{{ $page->title }}</a></li>
								@endforeach
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li>
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="blog2.html">Blog No Sidebar</a></li>
									<li><a href="blog.html">Blog Right Sidebar</a></li>
									<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
									<li><a href="single.html">Single right Sidebar</a></li>
									<li><a href="single-left-sidebar.html">Single Left Sidebar</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						<!-- End Navigation List -->
					</div>
					<!-- /.navbar-collapse -->
				</div> <!-- /.container -->

				<!-- Mobile Menu Start -->
				<ul class="wpb-mobile-menu">
					<li><a class="active" href="index.html">Home</a></li>
					<li>
						<a href="#">Pages</a>
						<ul class="dropdown">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="team.html">Team</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="404.html">404 / Error</a></li>
						</ul>
					</li>
					<li><a href="about.html">About</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li>
						<a href="blog.html">Blog</a>
						<ul class="dropdown">
							<li><a href="blog2.html">Blog No Sidebar</a></li>
							<li><a href="blog.html">Blog Right Sidebar</a></li>
							<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
							<li><a href="single.html">Single right Sidebar</a></li>
							<li><a href="single-left-sidebar.html">Single Left Sidebar</a></li>
						</ul>
					</li>
					<li><a href="{{ route('main.contact') }}">Contact</a></li>
				</ul> <!-- /.wpb-mobile-menu -->
			</div> <!-- /.navbar -->
			<!-- End Header Logo & Naviagtion -->
		</header> <!-- /.header -->
		<!--Header Area END -->