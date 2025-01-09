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
                    <div><img src="{{URL::to('public/assets/img/service/dubai-taxi.png')}}" alt="Slide 1"></div>
                    <div><img src="{{URL::to('public/assets/img/service/abu-dhabi-taxi.png')}}" alt="Slide 2"></div>
                    <div><img src="{{URL::to('public/assets/img/service/london.png')}}" alt="Slide 3"></div>
                  </div>
                </div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="400" style="z-index: 9;">
	          	<div class=""> 
		            <span class="text-theme">SERVICES</span>
		            <h2>TAXI</h2>
		            <br>
		        </div>

	            <div class="faq  " id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>In which cities do you have taxis?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>Dubai, Abu Dhabi, London</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span>How many taxis do you have in Dubai?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>5,000+ taxis</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>How many taxis do you have in Abu Dhabi?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>2,000+ taxis</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span>How many taxis do you have in London?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>500+ taxis</p>
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