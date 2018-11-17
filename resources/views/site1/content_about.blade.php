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
                	<a href="{{route('home')}}"><i class="pe-7s-users"></i>НАЗАД</a>
								
							</div>
            </div>
        </section>