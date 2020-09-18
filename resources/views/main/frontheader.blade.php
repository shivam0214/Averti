<div class="mobile-menu">
<nav class="mobile-header primary-menu d-xl-none">
    <div class="header-logo">
        <a href="#" class="logo"><img src="{{asset('assets/images/averti.png')}}" alt="logo"></a>
    </div>
    <div class="header-bar" id="open-button">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
<nav class="menu">
    <div class="mobile-menu-area d-xl-none">
        <div class="mobile-menu-area-inner" id="scrollbar">
            <ul class="m-menu">
                        <li><a  href="{{route('advisor_question')}}">For Advisors</a> </li>
                            <li><a  href="{{route('find_advisor')}}">For Clients</a> </li>
                            <li><a href="{{route('pricing')}}">Pricing</a>
										<!-- <ul class="submenu">
											<li><a href="#">Shop</a></li>
											<li><a href="#">Search Page</a></li>
											<li><a href="#">Search None Page</a></li>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">404</a></li>
										</ul> -->
									</li>
                                    <li><a href="{{route('about_us')}}">About Us</a></li>

									<li><a href="{{route('contact_us')}}">Contact</a></li>

                            <li><a  href="/login">Sign In</a> </li>
            </ul>
            <ul class="social-link-list d-flex flex-wrap">
                <li><a href="#" class="facebook"><i class=" fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="twitter-sm"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
</div>
	
<header class="header-section d-none d-xl-block">
		<div class="header-bottom">
			<nav class="primary-menu">
				<div class="container">
					<div class="menu-area">
						<div class="row justify-content-between align-items-center">
							<a href="/" class="logo">
								<img src="{{asset('assets/images/averti.png')}}" alt="logo">
							</a>
							<div class="main-menu-area d-flex align-items-center">
								<ul class="main-menu d-flex align-items-center">
									<li><a  href="{{route('for_advisor')}}">For Advisors</a> </li>
									<li><a  href="{{route('for_client')}}">For Clients</a> </li>
                                    
									<li><a href="{{route('pricing')}}">Pricing</a>
										<!-- <ul class="submenu">
											<li><a href="#">Shop</a></li>
											<li><a href="#">Search Page</a></li>
											<li><a href="#">Search None Page</a></li>
											<li><a href="#">Coming Soon</a></li>
											<li><a href="#">404</a></li>
										</ul> -->
									</li>
                                    <li><a href="{{route('about_us')}}">About Us</a></li>

									<li><a href="{{route('contact_us')}}">Contact</a></li>
                                    <li><a  href="/login">Sign In</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
</header>
	