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
                    <div><img src="{{URL::to('public/assets/img/service/dubai-elevators.png')}}" alt="Slide 1"></div>
                    <div><img src="{{URL::to('public/assets/img/service/abu-dhabi-elevators.png')}}" alt="Slide 2"></div>
                  </div>
                </div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="400" style="z-index: 9;">
	          	<div class=""> 
		            <span class="text-theme">SERVICES</span>
		            <h2>Elevators</h2>
		            <br>
		        </div>

	            <div class="faq  " id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>In which areas do you have elevator screens?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>All over Dubai</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span>Do you have commercial buildings with screens?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, we have a total of 437 buildings with 172 screens.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>Do you have residential buildings with screens?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, we have a total of 298 buildings with over 1,000 screens.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span>What are the ad types and exposure details?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>Video or static ads for 12 seconds, with a 4-minute rotation for continuous exposure.</p>
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