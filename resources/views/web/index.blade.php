@extends('web.includes.master')
@section('content')

	<main class="main">

	    <!-- Hero Section -->
	    <section id="hero" class="hero section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/banner.jpeg" alt="" data-aos="fade-in">

	      <div class="container">
	        <div class="row">
	          <div class="col-xl-1 hide-mobile">
	          	<p class="hero-title">DataMySite</p>
	          </div>
	          <div class="col-xl-4">
	          	<div class="hero-img">
		          	<img src="{{URL::to('/public')}}/assets/img/background/banner2.png">
		          </div>
	          </div>
	          <div class="col-xl-5">
	          	<div class="hero-spacing"></div>
	          	<h6 class="text-theme text-bold">D M S</h6>
	            <h1 data-aos="fade-up">The New Level For Advertising</h1>
	            <blockquote data-aos="fade-up" data-aos-delay="100">
	              <p>Transform your brand’s visibility with cutting-edge advertising solutions that drive success and innovation.</p>
	            </blockquote>

	          </div>
	        </div>
	      </div>

	    </section><!-- /Hero Section -->



	    <!-- Services Section -->
	    <section class="home-business">

	      <div class="container">

	        <div class="row gy-4">

	          <div class="col-lg-3 business-first" data-aos="fade-up" data-aos-delay="100">
	            <div>
	              <h5 class="text-theme">BEST SOLUTIONS</h5>
	              <h1 class="text-bold">For Your Business</h1>
	            </div>
	          </div>
	          <!-- End Service Item -->

	          <div class="col-lg-3 business-item" data-aos="fade-up" data-aos-delay="200">

	          	<img src="{{URL::to('/public/assets/img/service/1.png')}}">
	          	<p class="business-title">TAXI</p>
	          	<p>Mobile billboard that displays your brand to on-the-move audience 24/7.</p>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item" data-aos="fade-up" data-aos-delay="200">

	          	<img src="{{URL::to('/public/assets/img/service/2.png')}}">
	          	<p class="business-title">RADIO</p>
	          	<p>Connect with audiences across the Emirates and reach them during their daily routines.</p>
	           
	          </div><!-- End Service Item -->

	          <div class="col-lg-3 business-item" data-aos="fade-up" data-aos-delay="200">

	          	<img src="{{URL::to('/public/assets/img/service/3.png')}}">
	          	<p class="business-title">Transit Media</p>
	          	<p>From airport advertising to in-flight promotions, we've got you covered.</p>
	           
	          </div><!-- End Service Item -->

	        </div>

	      </div>

	    </section><!-- /Services Section -->

	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
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

	          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
	            <span class="text-theme">WHAT WE DO</span>
	            <h2>Marketing Solutions for Your Business's Growth</h2>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section><!-- /Service Cards Section -->


		@include('web.includes.elements.clients')


	     <!-- Service Cards Section -->
	    <section id="service-cards" class="service-cards section">

	      <div class="container">

	        <div class="row">
          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <i class="fab fa-instagram fa-3x"></i>
				      <div class="counter" data-target="1219"></div><label>+</label>
				      <span>Succesfull Project</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <i class="fab fa-instagram fa-3x"></i>
				      <div class="counter" data-target="15"></div><label>+</label>
				      <span>Years Experience</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <i class="fab fa-instagram fa-3x"></i>
				      <div class="counter" data-target="5"></div><label>+</label>
				      <span>Winning Awards</span>
				    </div>
          		</div>

          		<div class="col-lg-3 col-sm-6 col-xs-6">
		            <div class="counter-container">
				      <i class="fab fa-instagram fa-3x"></i>
				      <div class="counter" data-target="81"></div><label>+</label>
				      <span>Satisfied Clients</span>
				    </div>
          		</div>
          	</div>

	      </div>

	    </section><!-- /Service Cards Section -->

	    @include('web.includes.elements.services')


	    <!-- Call To Action Section -->
	    <section id="call-to-action" class="call-to-action section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/background/call-to.jpg" alt="">

	      <div class="container">
	        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
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