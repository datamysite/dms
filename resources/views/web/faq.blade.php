@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="faq-section service-cards section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-6  hide-mobile" data-aos="fade-up" data-aos-delay="100">
	          	<img src="{{URL::to('/public/assets/img/faq.png')}}" width="80%">
	          </div><!-- End Card Item -->

	          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
	          	<div class="faq-sec faq-heading"> 
		            <span class="text-theme">FAQ</span>
		            <h2>Frequently Asked Questions</h2>
		            <br>
		        </div>

	            <div class="faq  faq-sec" id="accordion">
                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">1</span>Where is datamysite located?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>Our agency is based in Dubai, UAE, and we cater to clients across the GCC & South East Asia region.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">2</span>What services does datamysite offer?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                            <div class="card-body">
                                <p>DataMySite provides a comprehensive range of marketing services including Digital Media Buying, OOH Media Buying, and PR Media Coverage. We specialize in creating data-driven strategies to enhance your brand's visibility and impact.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">3</span>How do you ensure the effectiveness of your media buying strategies?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                            <div class="card-body">
                                <p>We utilize data-driven approaches and industry best practices to optimize media placements, whether for digital platforms or out-of-home locations, ensuring maximum visibility and impact.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">4</span>Can you provide examples of clients you’ve worked with?
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, we’ve had the privilege of working with several renowned brands. For specific case studies or client examples, please contact us directly.</p>
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