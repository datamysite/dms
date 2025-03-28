@extends('web.includes.master')
@section('addStyle')
	<style type="text/css">
		.hero .blockquote {
			  color: #fff;
			  padding-left: 20px;
			  border-left: 2px solid #e04a43;
			  margin: 14px 0;
			}
			@media (max-width: 767px) {
			    .hero-title-sec h1 {
			        font-size: 42px;
			        line-height: 52px;
			    }
			}
	</style>
@endsection
@section('content')

	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/banner.jpeg" class="hero-img-bg" alt="Hero Image">

	      <div class="container">
	        <div class="row">
	          <div class="col-xl-1 hide-mobile">
	          	<p class="hero-title">DataMySite</p>
	          </div>
	          <div class="col-xl-4">
	          	<div class="hero-img">
		          	<img src="{{URL::to('/public')}}/assets/img/background/banner2.png" alt="DataMySite - Dubai UAE">
		          </div>
	          </div>
	          <div class="col-xl-5 hero-title-sec">
	          	<div class="hero-spacing"></div>
	          	<h6 class="text-theme text-bold">D M S</h6>
	            <h1>The New Level For Advertising</h1>
	            <br>
	            <p class="blockquote">People do not buy goods and services.</p>
	            <p class="blockquote">They buy relations, stories, and magic.</p>

	          </div>
	        </div>
	      </div>

	    </section><!-- /Hero Section -->



	    <!-- Services Section -->
	    <section class="home-business">

	      <div class="container">

	        <div class="row gy-4">

	          <div class="col-lg-3 business-first">
	            <div>
	              <h5 class="text-theme">BEST SOLUTIONS</h5>
	              <h2 class="text-bold" style="font-size:40px">For Your Business</h2>
	            </div>
	          </div>
	          <!-- End Service Item -->

	          <div class="col-lg-3 business-item">

	          	<img src="{{URL::to('/public/assets/img/service/1.png')}}" alt="Billboards Advertising dubai uae">
	          	<p class="business-title">Billboards Advertising</p>
	          	<p class="main-service-desc">Billboards dominate outdoor advertising with their commanding presence in high-traffic areas.</p>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item"  >

	          	<img src="{{URL::to('/public/assets/img/service/2.png')}}" alt="Influencer Marketing dubai uae">
	          	<p class="business-title">Influencer Marketing</p>
	          	<p class="main-service-desc">Access 4,500+ influencers across the GCC to boost your brand and drive targeted engagement.</p>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item"  >

	          	<img src="{{URL::to('/public/assets/img/service/3.png')}}" alt="PR Coverage dubai uae">
	          	<p class="business-title">PR Coverage</p>
	          	<p class="main-service-desc">Elevate your brand’s presence with TOP PR Media houses internationally that secure high-impact media placements and amplify your message.</p>
	           
	          </div><!-- End Service Item -->

	        </div>

	      </div>

	    </section><!-- /Services Section -->

	     <!-- Service Cards Section -->
	    <section id="service-cards" class="section-striped service-cards section">

	      <!-- Section Title -->
	      <div class="container section-title">
	        <h3 class="text-theme">What We Do</h3>
	        <p class="service-tp">At <strong>DataMySite</strong>, we create powerful marketing solutions that help businesses grow and thrive. From outdoor and digital advertising to influencer marketing, PR coverage, and event promotions, we offer a full suite of services to boost your brand’s visibility. Whether it's billboard ads, OTT advertising, transit media, or celebrity marketing, we craft strategic campaigns tailored to your goals. Our expertise in lead generation, sponsorships, and creative advertising ensures maximum impact and measurable results. Let us help you reach the right audience and take your business to the next level!</p>
	      </div><!-- End Section Title -->

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-6"  >
	          	<div class="row">
	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="87"></span>
					        </div>
					      </div>
					    </div>
					    <p>Digital Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="96"></span>
					        </div>
					      </div>
					    </div>
					    <p>OOH Media Buying</p>
	          		</div>

	          		<div class="col-lg-4 col-sm-6 col-xs-6 service-card-last">
			            <div class="box-circle">
					      <div class="circle-border red-background" data-color1="#fff" data-color2="#f44d46">
					        <div class="circle-percentage">
					          <span class="percentage" data-percentage="80"></span>
					        </div>
					      </div>
					    </div>
					    <p>Strategic planning</p>
	          		</div>
	          	</div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-6 mob-text-center"  >
	            <span class="text-theme">DataMySite</span>
	            <h2>Marketing Solutions for Your Business's Growth</h2>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section><!-- /Service Cards Section -->


	    
	    <!-- Services Section -->
	    <section id="services" class="services section">

	      <!-- Section Title -->
	      <div class="container section-title">
	        <h2 class="text-theme">Our Services</h2>
	        <p class="service-p">Elevate Your Brand Visibility and Boost Sales</p>
	        <p class="service-tp">At <strong>DataMySite</strong>, we provide a comprehensive range of marketing and advertising solutions designed to maximize your brand's visibility and impact. Whether it's traditional <strong>outdoor advertising</strong> like <strong>billboards</strong>, flyers distribution, and human billboards, or cutting-edge <strong>digital advertising</strong> through OTT, DOOH, hotel digital screens, and elevator ads, we ensure your message reaches the right audience.
					Our <strong>PR coverage</strong> in top publications such as Gulf News, Forbes, Khaleej Times, and Arabian News strengthens brand credibility, while <strong>celebrity</strong> and <strong>influencer marketing</strong>—from sports personalities to Bollywood stars and nano to macro influencers—boosts engagement.
					We also specialize in <strong>event marketing</strong> for corporate and private events, <strong>transit media advertising</strong> across airlines, taxis, and buses, and <strong>radio advertising</strong> for widespread outreach. Need <strong>lead generation</strong> or <strong>corporate sponsorships</strong>? We’ve got you covered. Plus, our creative and <strong>CGI advertising</strong> brings innovative storytelling to life.

					Explore our services and let’s craft a powerful marketing strategy to drive results for your business!</p>
	      </div><!-- End Section Title -->

	      <div class="container">

	        <div class="row service-row gy-4">

	        	@foreach($header_services as $val)
		          <div class="col-lg-4 col-md-6 service-item d-flex"  >
		            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
		            <div>
		              <h4 class="title">{{$val->name}}</h4>
		              <p class="description">{{$val->description}}</p>
		              <a href="{{URL::to('/'.$val->slug)}}" class="readmore stretched-link"><i class="bi bi-arrow-right"></i></a>
		            </div>
		          </div>
		          <!-- End Service Item -->
	          @endforeach
	          
	        </div>

	      </div>

	    </section><!-- /Services Section -->


	    <div class="section-striped">
				@include('web.includes.elements.clients')
			</div>

	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards section">
	    	<!-- Section Title -->
	      <div class="container section-title">
	        <h2 class="text-theme">Our Successful Projects</h2>
	        <p class="service-tp">
	        	At <strong>DataMySite</strong>, we take pride in delivering impactful marketing campaigns that drive real business success. From high-visibility billboard advertising to cutting-edge digital and influencer marketing, our projects have helped brands expand their reach and boost engagement.
						
						We have successfully executed PR campaigns in top publications, launched celebrity endorsements, and implemented targeted lead generation strategies that deliver measurable results. Our expertise in event marketing, transit media, and sponsorships has empowered businesses to connect with their audience in meaningful ways. Each project reflects our dedication to innovation, strategy, and excellence—turning marketing challenges into success stories. Let’s make your brand our next big success!
	        </p>
	      </div><!-- End Section Title -->
	      <div class="container">

	        <div class="row">
          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="1219"></div><label>+</label>
				      <span>Succesfull Project</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="15"></div><label>+</label>
				      <span>Years Experience</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="5"></div><label>+</label>
				      <span>Winning Awards</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <div class="counter" data-target="81"></div><label>+</label>
				      <span>Satisfied Clients</span>
				    </div>
          		</div>
          	</div>

	      </div>

	    </section><!-- /Service Cards Section -->

	 

	    <!-- Call To Action Section -->
	    <section id="call-to-action" class="call-to-action section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/call-to.jpg" alt="Call to action background">

	      <div class="container">
	        <div class="row justify-content-center">
	          <div class="col-xl-10">
	          	<div class="hero-spacing hide-mobile"></div>
	            <div class="text-center">
	              <p class="text-theme" style="text-transform: uppercase;">Schedule Your Appointment Today</p>
	              <h3>Don't Miss Out on This Opportunity to <br>Elevate Your Advertising Game</h3>
	              <br>
	              <p><span class="text-theme">Smarter Marketing, Better Outcomes.</span>
					<br>Boost your brand’s visibility, enhance campaign performance</p>
	              <a class="cta-btn" href="{{route('contact')}}">Contact Us</a>
	            </div>
	          	<div class="hero-spacing hide-mobile"></div>
	          </div>
	        </div>
	      </div>

	    </section><!-- /Call To Action Section -->

	</main>


@endsection