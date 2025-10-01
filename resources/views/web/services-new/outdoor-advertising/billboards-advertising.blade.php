@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$subservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Transform Your Brand Presence</h2>
                        <h4>with Billboards Advertising Dubai</h4>
                        <br>
                        <p>Your brand message should stand tall above Dubai's bustling streets and highways. Through strategic billboard advertising Dubai, you can broadcast your message to millions of potential customers daily. We at DataMySite can turn your brand presence to a newer height with our customised billboard advertising solutions.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            <h3>Want to know more?</h3>
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control" required>
                                
                                <input type="tel" name="mailphone" id="phone-field2" class="form-control" required>
                                <input type="hidden" name="phone" id="fullphone-field2" required="">
                                <br>
                                <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                                
                                <input type="hidden" name="service" value="{{$service->name}}" required>
                                                                
                                <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
                                
                                <button class="btn btn-theme">Submit Your Enquiry</button>
                                <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>
          </div><!-- End Page Title -->



        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Billboard Advertising Solutions – Beyond <br class="hide-on-mobile">Old-School Marketing</h4>
                    <br class="hide-on-mobile">
                    <p>Digital billboards UAE brings your marketing vision to life. Your advertisements shine bright on premium displays – drawing attention from business leaders and consumers across the emirate.
                    <br><br>
                    Static and digital displays work in perfect sync to build your brand recognition. These massive marketing platforms turn heads and hold attention, creating lasting impressions that stick with viewers long after they pass by. With our advertising solutions, we focus on these key essentials</p>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/WR2HoD0FpyM?si=Ba7ZxHCiRwpc1Hyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>  
            </div>

          </div>

        </section>



        <section id="testimonials" class="testimonials striped-section section">
          @include('web.includes.elements.clients')
        </section>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Billboard Advertising  Services</h4>
                    <p>Here's what we offer:</p>
                </div>
                <div class="col-lg-6">
                    <h5>Location Excellence</h5>
                    <p>
                        Our billboard advertising campaign starts with selecting prime spots that match your goals. Business districts buzz with corporate decision-makers, while retail zones capture consumer attention at key shopping moments.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Smart Technology Meets Marketing Innovation</h5>
                    <p>
                       Our digital billboards UAE solutions include advanced display capabilities with precise targeting. You can adjust your message throughout the day. Real-time updates keep your campaigns fresh and relevant.
                        <br>
                        High-impact billboard campaigns UAE deliver measurable results for your marketing investment. We monitor daily views, peak exposure times, and audience engagement patterns through detailed analytics.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Billboard Marketing Services Dubai – Top Ways We Benefit You with Our Advertising Solutions</h5>
                    <p>
                        Your billboard advertising investment includes full-service campaign management. We guide you from initial planning through design, placement, and performance tracking. Digital billboards deliver tangible benefits for your brand –
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Constant Visibility – 24/7 (A Round the Clock Solution)</h5>
                    <p>
                        Billboards maintain a continuous presence, unlike digital ads, which can be skipped, or social media posts, which get buried. Your advertisement remains in sight – whether it's rush-hour traffic or late-night travel.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Targets both Commuters & Pedestrians</h5>
                    <p>
                        Billboards are placed in high-traffic areas that capture drivers' attention. It lets your brand engage with a diverse audience – from daily commuters to shoppers. Billboards (unlike online ads that rely on user engagement) can naturally attract attention.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Builds Long-Term Brand Recall</h5>
                    <p>
                        Repetition is key to brand recognition – and billboards offer consistent exposure. People who see the same ad multiple times develop familiarity with the brand. It makes it simpler for them to recall information while making a purchase. Billboards (whether it's a catchy slogan, a memorable image, or a bold logo) can create lasting impressions.
                        <br>
                        Your message reaches viewers twenty-four hours a day. Repeated exposure builds strong brand recall. Premium locations demonstrate market leadership. Wide reach connects with diverse audience segments.
                    </p>
                </div>   
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Your Path to Marketing Success</h4>
                    <p>
                        Billboard advertising Dubai puts your brand message where it matters most. From busy highways to premium retail locations, your advertisements command attention and drive results.
                        <br>
                        Let our team show you how digital billboards can transform your marketing impact. Book your consultation today and discover the perfect locations for your campaign.
                    </p>
                    <br>
                    <h4>Start Your Success Story with us at DataMySite</h4>
                    <p>
                        Launch your billboards advertising Dubai campaign today. Consult our team to explore premium locations and custom solutions that match your marketing goals.
                        <br><br>
                        Contact us at <a href="tel:971525287259"><Strong>+971 525 287 259</Strong></a>, or<br>
                        You may mail us at <a href="mailto:contact@datamysite.com"><Strong>contact@datamysite.com</Strong></a>.<br>
                        We are located at <strong>Al Bayan Building, Dubai Investment Park, Dubai – UAE</strong>. So, you can plan for a visit to seek a consultation in a personalised manner.
                    </p>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image1.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section striped-section section pr-blogs-section">

          <div class="container section-title">
            <h2 class="text-theme">Blogs</h2>
            <p class="pr-blog-sub">What’s Going On in the Industry?</p>
            <div class="row gy-4 blog-portrait-card first-row">
                @foreach($blogs as $val)
                    <div class="col-lg-4">
                        <a href="{{route('blogs.detail', [$val->slug])}}">
                          <div class="popular-card blog-card-2 flex-grow-1" bis_skin_checked="1">
                            <div class="card-image" bis_skin_checked="1">
                              <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                            </div>
                            <div class="popular-text" bis_skin_checked="1">
                              <h6 class="mt-2" title="{{$val->heading}}">{{$val->heading}}</h6>
                              <p class="line-break-3">{{$val->short_description}}</p>
                              <small>by <font class="text-theme2">{{$val->author->name}}</font> - <font class="text-bold">{{date('F d, Y', strtotime($val->created_at))}}</font></small>
                            </div>
                          </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <a href="{{URL::to('/blogs/pr-and-media-relations')}}" class="see-all-btn" target="_blank">See All Blogs</a>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How are billboard locations chosen?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your billboard location matches your specific marketing goals through data-driven analysis. We examine each site's traffic counts, viewer demographics, and visibility duration. Our team evaluates driving patterns, speed zones, and viewing angles to pick spots with maximum impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can digital billboards display video ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Digital billboards support rich content (including motion graphics, animations, and dynamic messaging). You can schedule different creative content throughout the day. Our LED displays maintain crystal-clear visibility in all lighting conditions, ensuring your dynamic content captures attention.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>


    </main>

@endsection

@section('addScript')

@endsection