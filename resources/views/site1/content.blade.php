<section class="slider-area">
			<div class="slider-list">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="imageover"></div>
							<div class="main-image"></div>
							<div class="carousel-captions">
								<h1 class="revive1"><span>{{$pa[1]->text}}</span></h1>
								<h2 class="revive2">{{$pa[1]->text2}}</h2>
								<h3 class="revive3">{{$pa[1]->text3}}</h3>
							</div>
						</div>
						<div class="item">
							<div class="imageover"></div>
							<div class="main-image1"></div>
							<div class="carousel-captions">
								<h1 class="revive4"><span>{{$pa[1]->text}}</span></h1>
								<h2 class="revive5">{{$pa[1]->text2}}</h2>
								<h3 class="revive6">{{$pa[1]->text3}}</h3>
							</div>
						</div>
					</div>
					<a class="left slider-left-btn" href="#carousel-example-generic" role="button" data-slide="prev">
						<i class="fa fa-chevron-left"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right slider-right-btn" href="#carousel-example-generic" role="button" data-slide="next">
						<i class="fa fa-chevron-right"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>	
		</section>
		<!-- =========================================
        About US Section
        ========================================== -->
        <section id="about-us" class="feature-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                        <div class="section-title">
                            <div class="main-title">
                                <h2>{{$pa[2]->name}}</h2>
                            </div>
                            <div class="desc-title">
                                 <p>{{$pa[2]->text4}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-center wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="200ms">
						<div class="circular"></div>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-duration="1.5" data-wow-delay="200ms">
						<div class="features-list">
							<div class="more-about">
								<div class="about-icon">
									<i class="pe-7s-compass"></i>
								</div>
								<div class="about-content">
									<h4>БОЛЕЕ 15 ЛЕТ МЫ НА РЫНКЕ</h4>
									<p>{{$pa[2]->text}}.</p>
								</div>
							</div>
							<div class="more-about">
								<div class="about-icon">
									<i class="pe-7s-magnet"></i>
								</div>
								<div class="about-content">
									<h4>ЛУЧШИЕ МАТЕРИАЛЫ</h4>
									<p>{{$pa[2]->text2}}.</p>
								</div>
							</div>
							<div class="more-about">
								<div class="about-icon">
									<i class="pe-7s-pen"></i>
								</div>
								<div class="about-content">
									<h4>ПРОФЕССИОНАЛЬНЫЕ СТАНДАРТЫ</h4>
									<p>{{$pa[2]->text3}}.</p>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="service-btn">
								<a href="{{route('page',array('alias'=>$pa[2]->alias))}}"><i class="pe-7s-users"></i>УЗНАЙТЕ О НАС ПОБОЛЬШЕ</a>
							</div>
            </div>
        </section>
        <!-- =========================================
        Our Service Section
        ========================================== -->
        <section id="services" class="servicer-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                        <div class="section-title">
                            <div class="main-title">
                                <h2>СЕРВИС</h2>
                            </div>
                            <div class="desc-title">
                                 <p>наша компания .........................</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="200ms">
						<div class="service-content">
							<h4>Что мы умеем</h4>
							<div class="hr-border">
								<span></span>
							</div>
							<div class="service-para">
								<p>тексссс</p>
								<p>еще текссссссссссссссссссссссссст</p>
							</div>
							<div class="hr-border">
								<span></span>
							</div>
						</div>
					</div>
					@foreach($services as $service)
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="700ms" data-wow-delay="200ms">
						<div class="features-list service-list">
							<div class="more-about about-service">
								<div class="about-icon servicebase">
									<i class="fa {{$service->icon}}"></i>
								</div>
								<div class="about-content servic-content">
									<h4>{{$service->name}}</h4>
									<p>{{$service->text}}.</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
        </section>
		<!-- =========================================
        Latest Project Section
        ========================================== -->
		<section id="portfolio" class="latest-project-area">
			<div class="container">
				<div class="row">
                    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                        <div class="latest-title">
                            <div class="main-title">
                                <h2>Проекты</h2>
                            </div>
                            <div class="desc-title">
                                <p>здесь проекты</p>
                            </div>
                        </div>
                    </div>	  
					<div class="col-md-12">
					<div class="container-less">
						<div class="project-filter wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
								<a href="#" id="prev">‹</a>
								<a href="#" id="next">›</a>
							<ul class="project-menu">
								<li class="filter item" data-filter="all">All</li>
								@foreach($filt as $fil)
								<li class="filter item" data-filter=".{{$fil}}">{{$fil}}</li>
								@endforeach
							</ul>
						</div>
						<div class="project-list wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
							@foreach($portfolios as $portfolio)
							<div class="mix {{$portfolio->sort}}" data-myorder="2">
								{{ Html::image('assets/img/'.$portfolio->images)}}
							</div>	
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- =========================================
        Our Team Section
        ========================================== -->
		<section id="team" class="team-area">
			<div class="container client">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                        <div class="latest-title">
                            <div class="main-title">
                                <h2>Наша команда</h2>
                            </div>
                            <div class="desc-title">
                                 <p>тут тексссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссстттттт</p>
                            </div>
                        </div>
                    </div>
                    @foreach($let as $le)
					<div class="col-md-3 col-sm-6 col-xs-12 envelopes wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="200ms">
						<div class="team-member">
							<div class="team-bdr">
								<div class="member-image">
									{{ Html::image('assets/img/'.$le->images)}}
								</div>
								<div class="team-content">
									<h4>{{$le->name}}</h4>
									<h5>{{$le->pos}}</h5>
									<p>{{$le->text}}</p>
									<div class="meat-icon">
										<ul>
											<li><a><i class="fa fa-facebook-square"></i></a></li>
											<li><a><i class="fa fa-twitter-square"></i></a></li>
											<li><a><i class="fa fa-linkedin-square"></i></a></li>
											<li><a><i class="fa fa-rss-square"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- =========================================
        Latest NEWS Section
        ========================================== -->
		<section id="blog" class="news-area">
			<div class="container latest-news-area">
				<div class="row">
                    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                        <div class="section-title">
                            <div class="main-title">
                                <h2>ПОСЛЕДНИЕ НОВОСТИ</h2>
                            </div>
                            <div class="desc-title">
                                 <p>Здесь новости</p>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="row">
				@foreach($blogs as $blog)
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="100ms">
						<div class="news-box">
							<div class="news-text">
								<ul class="news-info">
									<li>{{$blog->date}}</li>
								</ul>
								<h4>{{$blog->title}}</h4>
								<p class="news-para">{{$blog->text}}</p>
								<div class="post-img">
									{{ Html::image('assets/img/'.$blog->images)}}
								</div>
								<p class="favorite">By {{$blog->name}},Должность {{$blog->pos}} </p>
							</div>
							<figure class="news-image">
								{{ Html::image('assets/img/'.$blog->images2)}}
							</figure>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- =========================================
        Contact Information Section
        ========================================== -->
		<section class="contact-info">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                        <div class="latest-title">
                            <div class="main-title">
                                <h2>Напишите нас</h2>
                            </div>
                            <div class="desc-title">
                                 <p>Мы очень вас любим ценим текссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссссс</p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		<!-- =========================================
        Map Section
        ========================================== -->
		<section id="contacts" class="map-area">
			<div class="map-icon">
				<i class="fa fa-map-marker"></i>
			</div>
			<div id="map" class="map" data-lat="43.6532" data-lng="-79.3832"></div>
			<div class="contact-form wow zoomIn" data-wow-duration="700ms" data-wow-delay="200ms">
				<form id="contact" action="{{route ('home')}}" method="post">
					<div class="contact-address-info">
						<h5>Контактная информация</h5>
						<h6 class="contact-addres">город, улица, дом</h6>
						<h6>Контактный телефон1</h6>
						<h6>Контакты 2</h6>
					</div>
					<fieldset>
						<input placeholder="Имя" type="text" tabindex="1" name="name" required>
					</fieldset>
					<fieldset>
						<input placeholder="Email" type="email" tabindex="2" name="email" required>
					</fieldset>
					<fieldset>
						<input placeholder="Тема" type="tel" tabindex="3" name="subject" required>
					</fieldset>
					<fieldset>
						<textarea placeholder="Ваще сообщение...." tabindex="5" name="text" required></textarea>
					</fieldset>
					<fieldset>		
						<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Отправить</button>
					</fieldset>
					{{csrf_field()}}
				</form>
			</div>
		</section>
		<!-- =========================================
        Footer Top Section
        ========================================== -->
		<section class="footer-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-4">
						<div class="left-side">
							<h3>Lend</h3>
							<p>Текст про нас </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="quick-link">
							<h4>линки</h4>
							<ul class="categories">
								<li><a href="#home">Home</a></li>
								<li><a href="#services">Service</a></li>
								<li><a href="#portfolio">Portfolio</a></li>
							</ul>
							<ul class="categories-right">
								<li><a href="#about-us">About us</a></li>
								<li><a href="#team">Team</a></li>
								<li><a href="#blog">Blog</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="right-side">
							<h4>Текст</h4>
							<p>текст1.</p><br>
							<p>текст2</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =========================================
        Footer Section
        ========================================== -->
		<footer class="footer-area">
			<div class="scroll-top-icon wow zoomIn" data-wow-duration="700ms" data-wow-delay="200ms">
				<i class="fa fa-chevron-up"></i>
			</div>
			<div class="container footer">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copyright-boot">
							<p>Copyright 2018 by <a href="http://127.0.0.1/">Lend</a></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="social-icons footer-social">
							<ul>
								<li><a><i class="fa fa-facebook-square"></i></a></li>
								<li><a><i class="fa fa-twitter-square"></i></a></li>
								<li><a><i class="fa fa-linkedin-square"></i></a></li>
								<li><a><i class="fa fa-behance-square"></i></a></li>
								<li><a><i class="fa fa-rss-square"></i></a></li>
								<li><a><i class="fa fa-pinterest-square"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
</footer>