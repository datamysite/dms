@extends('web.includes.master')

@section('content')

	<main class="main">


	    <section id="service-cards" class="faq-section service-cards section">

	      <div class="container">

            <br><br><br>
	        <div class="row gy-4 first-row">

	          <div class="col-lg-5  hide-mobile" data-aos="fade-up" data-aos-delay="100">
	          	<div class="container">
                  <div class="slick-slider">
                    <div><img src="{{URL::to('public/assets/img/service/starz-plkay.png')}}" alt="Slide 1"></div>
                    <div><img src="{{URL::to('public/assets/img/service/netflix.png')}}" alt="Slide 2"></div>
                    <div><img src="{{URL::to('public/assets/img/service/abd-tv.png')}}" alt="Slide 3"></div>
                  </div>
                </div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="400" style="z-index: 9;">
	          	<div class=""> 
		            <span class="text-theme">SERVICES</span>
		            <h2>Digital Media Buying</h2>
		            <br>
		        </div>

	            <div class="faq  " id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>Which OTT platforms do you work with?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>StarzOn, Abu Dhabi TV, Netflix</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span>Where will my ads be displayed?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Pre-roll, In-stream Ads</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>What is the campaign model?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>CPCV (Cost per Completed View)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span>What are the ad types available?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>Video ads (10-30 seconds)</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section>


	</main>


@endsection