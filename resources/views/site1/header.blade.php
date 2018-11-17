<header id="home" class="header-area">
<div class="container header">
				<div class="row">				
					<div class="col-md-2 col-sm-2">
						<div id="info">
							<span><i class="fa fa-phone"></i></span>
							<span>номер телефона компании</span>
						</div>
					</div>
					<div class="col-md-5 col-sm-4">															
						 <!--language-box -->
						<div class="language-box">
							<h4>Language:</h4>
							<div id="lang-switcher" class="ui-dropdown-list">
								<p class="ui-dropdown-list-trigger de"><strong>English</strong><i class="fa fa-angle-down"></i></p>
								<ul>
									<li><a href="#" title="" class="en">English</a></li>
									<li><a href="#" title="" class="en">Arabic</a></li>
								</ul>
							</div>
						</div><!-- /language-box -->
					</div>					
					<div class="col-md-5 col-sm-6">
						<!-- social-icons -->
						<div class="social-icons">
							<ul>
								<li><a><i class="fa fa-facebook"></i></a></li>
								<li><a><i class="fa fa-twitter"></i></a></li>
								<li><a><i class="fa fa-linkedin"></i></a></li>
								<li><a><i class="fa fa-behance"></i></a></li>
								<li><a><i class="fa fa-rss"></i></a></li>
								<li><a><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div><!-- /social-icons -->
					</div>
				</div>
			</div>
<section id="mainmenu" class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#home-section">
								<h2>Land</h2>
							</a>
						</div>
					</div>						
					<div class="col-md-9">								
							<!-- nav -->
							@if (isset($menu))
							<div class="navbar-collaps">
							<nav class="mainMenu">
								<div class="menuButton hidden-lg hidden-md">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<ul>
								@foreach($menu as $item)
									<li class="active"><a href="#{{ $item['alias'] }}">{{ $item['title'] }}</a></li>
								@endforeach
								</ul>
							</nav>
							@endif
							<!-- /nav -->
							<!-- Menue-Search-bar -->
							<div id="sb-search" class="sb-search " >
							    <form>
							        <input class="sb-search-input " onkeyup="buttonUp();" placeholder=	"Enter your search term..." onblur="monkey();" type="search" value="" name="search" id="search">
							        <input class="sb-search-submit" type="submit"  value="">
							        <span class="sb-icon-search"><i class="fa fa-search"></i></span>
							    </form>
							</div>
							<!-- /Menue-search-bar -->
						</div>
					</div>
				</div>
			</div>
		</section>	
</header>	
