@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="about-section section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
	          	<p>
                    Founded in 2021 and based in Dubai, UAE, <strong>datamysite</strong> is a leading marketing agency specializing in cutting-edge digital and out-of-home (OOH) media strategies. Our expertise spans across <strong>Digital Media Buying</strong>, where we leverage data-driven approaches to optimize ad placements on digital platforms, and <strong>OOH Media Buying</strong>, where we ensure impactful visibility across premier outdoor locations.
                    <br><br>
                    In addition, we work closely with top <strong>PR Media Houses</strong> to craft compelling narratives and secure high-impact media coverage. Our mission is to deliver innovative marketing solutions that drive growth and elevate brand presence.
                    <br><br>
                    At <strong>datamysite</strong>, we combine local insights with global best practices to help businesses achieve their marketing goals. Let’s connect and explore how we can make your brand stand out.
                </p>
                <h3>Vision</h3>
                <p>
                    We aspire to be the trusted partner that businesses turn to for growth, known for our unwavering commitment to hands-on. We aspire to be the trusted partner that businesses turn to for growth, known for our unwavering commitment to hands-on collaboration and cutting-edge innovation, making a lasting difference in the success of our clients.
                </p>
                <h3>Mission</h3>
                <p>
                    To empower our clientele to grow their businesses through hands-on support and innovative strategies, delivering tailored solutions that drive success and foster long-term partnerships.
                </p>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section>

        <section class="section" style="background-image:url('{{URL::to('public/assets/img/about-b.jpg')}}'); background-size: cover;">

          <div class="container working-container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center"> 
                    <span class="text-theme">HOW WE WORK</span>
                    <h3 class="text-bold">Our Working Proccess</h3>
                </div>
                <div class="hide-mobile" style="height: 50px;"></div>
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-list-task" style="color: #cbcbcb;"></i>
                        <p class="working-title">Select Your Service</p>
                        <p>helps us understand your needs and align our strategies with your business goals.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-calendar4-week" style="color: #cbcbcb;"></i>
                        <p class="working-title">Booking & Confirm</p>
                        <p>we’ll finalize the details and set a timeline to kick off your customized marketing strategy.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-credit-card" style="color: #cbcbcb;"></i>
                        <p class="working-title">Booking Payment</p>
                        <p>ensures your service is reserved and allows us to start preparing for your campaign with full commitment.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-graph-up-arrow" style="color: #cbcbcb;"></i>
                        <p class="working-title">Launch & Monitor</p>
                        <p>We launch your campaign and continuously track its performance</p>
                    </div>
                </div>
                <div class="hide-mobile" style="height: 50px;"></div>
                <p class="text-center">We Ready For More Information <strong>(+971) 42 957 001</strong></p>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>


        <section class="section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100"> 
                    
                <div class="row">
                    <div class="col-lg-7">
                        <span class="text-theme">MAKE APPOINTMENT</span>
                        <h3 class="text-bold">Get Our Service Easily</h3>
                        <div class="hide-mobile" style="height: 50px;"></div>

                        @include('web.includes.elements.contact')
                    </div>
                    <div class="col-lg-5">
                        <br>
                        @include('web.includes.elements.contact-form')
                    </div>
                </div>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>

	</main>


@endsection