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
                        <h2>Uplift Your Brand Presence</h2>
                        <h4>with Hotel Digital Screen Advertising at DataMySite</h4>
                        <br>
                        <p>
                            Capturing the attention of viewers is critical in a land like Dubai. But now, you can ensure visibility among high-value individuals by placing your brand's message on digital screens in lobbies or elevators (and also conference areas).
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            <h3>Want to know more?</h3>
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control" required>
                                
                                <input type="tel" name="mailphone" id="phone-field2" placeholder="Phone" class="form-control" required>
                                <input type="hidden" name="phone" id="fullphone-field2" required="">
                                <br>
                                <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                                
                                <input type="hidden" name="service" value="{{$subservice->name}}" required>
                                                                
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
                    <h4>Why Choose Hotel Advertising Screens UAE?</h4>
                    <p>
                        We at DataMySite place your advertisements where they make the strongest impact. Our hotel screen advertising network spans exclusive locations - from grand hotel lobbies to executive lounges and premium conference facilities. We ensure your message receives prime visibility in spaces where business decisions take shape with digital signage in hotels GCC. Your brand connects with high-net-worth individuals and business leaders who appreciate refined marketing approaches.
                        <br>
                        We at DataMySite bring your brand to life through premium hotel digital screens advertising in Dubai's most prestigious properties. Your message will reach corporate leaders and decision-makers in spaces where influence meets opportunity.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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


        
        <section id="service-cards" class="blog-section striped-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12">
                    <h4>Our Hotel digital screen service</h4>
                    <p>Here’s what we offer:</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Creating Measurable Impact –</h5>
                    <p>
                        Our hotel digital screens advertising solutions deliver concrete results. We track engagement metrics that matter to your business growth. Through our advanced analytics, you'll see how your content performs across different hotel locations and time periods.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Premium Placement in Dubai's Finest Hotels –</h5>
                    <p>
                        We understand the Dubai market intimately. Our luxury hotel ad campaigns Dubai reach affluent audiences in their preferred environments.s.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Complete Solutions for Premium Hotel Advertising –</h5>
                    <p>
                        We deliver digital advertising solutions that can help your brand connect with high-value audiences. Our professional team creates digital content that meets your brand identity and targets luxury hotel guests.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Designing and Placing the Digital Ads in the Right Place –</h5>
                    <p>
                        Your campaign starts with our expert selection of Dubai's most prestigious hotels. We analyse guest demographics, foot traffic patterns, and booking data to identify the perfect placement opportunities for your brand. Our relationships with Dubai's leading hotels give you access to premium advertising spaces in lobbies, executive lounges, and conference centres.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Selecting the Top-Notch Hotels in Dubai –</h5>
                    <p>
                        The visual impact of your advertisements matters. We craft high-definition content optimised for large-format displays, ensuring your message stands out in these refined environments. Our designers understand the subtleties of luxury marketing and create visuals that capture attention without compromising elegance.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Analysing the Campaigns Accordingly –</h5>
                    <p>
                        We give you clear insight into your campaign's performance. Our advanced analytics can track –
                        <ul>
                            <li>Viewer engagement</li>
                            <li>Peak viewing times</li>
                            <li>Response rates</li>
                        </ul>
                        You'll receive detailed reports showing the real impact of your investment. We fine-tune your campaign for maximum returns in Dubai's luxury market.
                    </p>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">Return on Investment –</h5>
                    <p>
                        The numbers speak clearly. Hotel advertising generates impressive engagement rates. Your advertisements reach guests during their most receptive moments - whether they are attending conferences or conducting business meetings.
                        <br>
                        Our hotel advertising offers exposure in environments where your target audience spends quality time. It builds brand recognition among key decision-makers.
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
                    <h4>Consult Us Today at DataMySite</h4>
                    <p>
                       We at DataMySite know the power of analytics to optimise your hotel advertising screens UAE campaigns. Our team monitors performance metrics and adjusts content strategy to maximise impact. You'll receive regular reports showing clear ROI measurements.
                        <br><br>
                        Our hotel advertising combines state-of-the-art display technology with strategic placement. We select prime positions in Dubai's leading hotels to ensure maximum visibility for your brand.
                        <br><br>
                        Your success drives our approach. We handle every aspect of your hotel advertising campaign - from content creation to placement optimisation. Our experienced team ensures seamless execution across all hotel properties. Contact us today to discover how our hotel digital screens advertising solutions can transform your brand presence in Dubai's premium spaces.
                    </p>
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-blogs-section">

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

                <div class="col-lg-12 vertical-center">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>Where exactly are these screens located within the hotel?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We place screens in high-traffic "dwell zones" such as the main lobby, reception desks, near the concierge, and inside business centers to ensure maximum exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I target specific types of travelers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We can select hotels based on their profile—choosing "Business Hotels" for B2B services or "Luxury Resorts" for high-end retail and lifestyle brands.</p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are the ads silent or do they have audio?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most lobby screens are silent to maintain the hotel’s ambiance, so we focus on high-impact visual storytelling and clear text overlays.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I run a "welcome" message for specific event attendees?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. If a major conference is staying at the hotel, we can sync your campaign to run specifically during their event dates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How long is the typical ad loop?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The loop is generally kept short (3–5 minutes) to ensure that even a guest walking through the lobby sees your ad at least once.</p>
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