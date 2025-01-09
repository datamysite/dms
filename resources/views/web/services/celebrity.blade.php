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
                    <div><img src="{{URL::to('public/assets/img/service/arabian.png')}}" alt="Slide 1"></div>
                    <div><img src="{{URL::to('public/assets/img/service/asian.png')}}" alt="Slide 2"></div>
                    <div><img src="{{URL::to('public/assets/img/service/euorap.png')}}" alt="Slide 3"></div>
                  </div>
                </div>
	          </div><!-- End Card Item -->

	          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="400" style="z-index: 9;">
	          	<div class=""> 
		            <span class="text-theme">SERVICES</span>
		            <h2>Celebrity & Influencer marketing</h2>
		            <br>
		        </div>

	            <div class="faq  " id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>What nationalities of influencers do you work with?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>Asians, Arabs, Westerners, Filipinos</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span>Which platforms can we run campaigns on?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Instagram, YouTube, TikTok, Snapchat</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>What categories of influencers do you offer?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>Nano, Micro, Macro, Mega</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span>What is the average Instagram followership of your influencers?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>Approximately 50,000 followers</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                    <span class="badge">5</span>Which celebrities can you source for campaigns?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>South Indian Stars, Bollywood Celebrities, GCC A-listers</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-6">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                    <span class="badge">6</span>What services are included in social media management?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                            <div class="card-body">
                                <p>We handle content creation, posting, audience engagement, performance tracking, and strategy optimization across platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-7">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                    <span class="badge">7</span>Which platforms do you manage?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                            <div class="card-body">
                                <p>We manage Instagram, Facebook, Twitter, LinkedIn, and more based on your brand’s needs</p>
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