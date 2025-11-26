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
                        <h2>Brands Looking to Expand Regionally</h2>
                        <h4>cannot afford to overlook the Kingdom.</h4>
                        <br>
                        <p>
                            At DataMySite, we empower Dubai and UAE-based companies to establish a powerful presence in Saudi Arabia through a mix of retail media, digital outdoor advertising, and community MUPIs (street-level billboards).
                            <br>
                            Our localized Saudi marketing strategies combine nationwide exposure with precise targeting, ensuring your brand reaches the right audience — in the right place, at the right time.
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
                    <h4>Why Saudi Arabia Is a Prime Market for Dubai Brands</h4>
                    <br>
                    <p>
                        Saudi Arabia is undergoing a transformation under Vision 2030, opening vast opportunities in retail, tourism, entertainment, and e-commerce.
                        <br>
                        <strong>Key reasons to advertise in Saudi Arabia:</strong>
                    </p>
                    <ul>
                        <li>Population of 36+ million with one of the world’s highest social media penetration rates.</li>
                        <li>Strong retail growth through national brands like Panda and Danube.</li>
                        <li>Massive urban footfall across Riyadh, Jeddah, and Dammam.</li>
                        <li>Government-driven events and entertainment attracting millions annually.</li>
                        <li>Rising purchasing power and brand curiosity among youth and families.</li>
                    </ul>
                    <p>
                        For Dubai-based brands, Saudi Arabia is the next logical step for regional expansion, both digitally and physically.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/re2nXszkJcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Our Saudi Marketing Channels</h4>
                    <p>We offer a multi-format marketing ecosystem in the Kingdom, built around retail visibility, digital screen dominance, and strategic outdoor advertising.</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Panda In-Store Advertising</h5>
                    <p>
                        As one of Saudi Arabia’s largest and most trusted supermarket chains, Panda provides unparalleled reach across cities and regions.
                        <br>
                        DataMySite brings your brand directly to consumers inside Panda stores through in-store digital screens placed above cashier tills and in key aisles.
                        <br><br>
                        <strong>Features of Panda Store Advertising:</strong>
                    </p>
                    <ul>
                        <li>250+ Panda branches across the Kingdom.</li>
                        <li>High-definition digital screens above cash counters for direct consumer engagement.</li>
                        <li>Short ad loops (8–15 seconds) delivering continuous brand repetition.</li>
                        <li>Excellent for FMCG, tech, food, beverage, telecom, and health brands.</li>
                    </ul>
                    <p>
                        <strong>Benefits:</strong><br>
                        Captures attention at the point of purchase, influencing immediate buying decisions.<br>
                        Offers nationwide coverage with consistent media quality.<br>
                        Delivers measurable impressions and repeat exposure.<br>
                        <strong>Example Campaigns:</strong>

                    </p>
                    <ul>
                        <li>Beverage brands promoting new flavors during checkout.</li>
                        <li>Telecom companies advertising special data offers.</li>
                        <li>FMCG brands launching new products across Saudi cities.</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Digital Screens at High-Traffic Locations</h5>
                    <p>
                        Saudi Arabia’s digital out-of-home (DOOH) landscape is evolving rapidly, with LED screens now dominating commercial zones, waterfronts, and highways.
                        <br>
                        DataMySite leverages these prime locations — especially the Jeddah Waterfront, Riyadh Boulevard, and commercial districts — to deliver high-visibility campaigns that captivate diverse audiences.
                        <br>
                        <strong>Features of Digital Screen Advertising:</strong>

                    </p>
                    <ul>
                        <li>Premium LED screens at waterfront and entertainment hubs.</li>
                        <li>Large-format screens with dynamic motion creatives.</li>
                        <li>Strategically placed along shopping, dining, and tourist zones.</li>
                        <li>High recall value due to visual dominance and repeated exposure.</li>
                    </ul>
                    <p>
                        <strong>Why It Works:</strong><br>
                         Ideal for lifestyle, entertainment, and luxury brands.<br>
                         Perfect synergy with Saudi’s growing tourism and event calendar.<br>
                         Boosts brand prestige with modern, high-tech visuals.<br>
                         Generates social media engagement as people capture and share content.<br>
                        <strong>Example Campaigns:</strong>

                    </p>
                    <ul>
                        <li>Dubai-based hospitality brands promoting staycations to Saudi travelers.</li>
                        <li>Automotive launches with synchronized videos across city screens.</li>
                        <li>Retail fashion promotions tied to Saudi Seasons festivals.</li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">MUPIs (Municipal Urban Panels & Interactive Screens)</h5>
                    <p>
                        MUPIs (Municipal Urban Panels) are street-level digital displays and backlit units that connect your brand directly with pedestrians, drivers, and community audiences.
                        <br>
                        Placed in residential, commercial, and high-traffic community zones, MUPIs deliver localized reach with cost-effective frequency.
                        <br>
                        
                    </p>
                    <div class="row">
                        <div class="col-lg-5">
                            <p><strong>Features of MUPI Advertising:</strong></p>
                            <ul>
                                <li>Digital and static formats available across Riyadh, Jeddah, and Dammam.</li>
                                <li>Rotating digital content loops for dynamic storytelling.</li>
                                <li>Ideal for promotions, events, and brand awareness campaigns.</li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <p>
                                <strong>Advantages:</strong><br>
                                Continuous presence in community areas.<br>
                                Affordable reach with measurable audience impressions.<br>
                                Complements nationwide campaigns for 360° exposure.<br>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <p><strong>Example Campaigns:</strong></p>
                            <ul>
                                <li>Real estate developers advertising new communities.</li>
                                <li>Banks promoting new digital banking services.</li>
                                <li>Education institutions announcing open enrollments.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image88.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit from Saudi Marketing</h4>
                    <ul>
                        <li>Retail & FMCG Brands</li>
                        <li>Telecom & Technology</li>
                        <li>Banking & Financial Services</li>
                        <li>Tourism & Hospitality</li>
                        <li>Entertainment & Events</li>
                        <li>Real Estate & Construction</li>
                    </ul>
                    <p>Whether you’re launching a new product, expanding regionally, or boosting brand awareness, DataMySite builds custom Saudi campaigns that deliver measurable business results.</p>
                    <br>
                    <h4>Expand Your Brand in the Kingdom of Saudi Arabia</h4>
                    <p>
                        Saudi Arabia is more than a growing market — it’s a gateway to regional dominance. With the perfect combination of in-store advertising, digital screens, and MUPIs, your brand can achieve both mass awareness and targeted conversions.
                        <br><br>
                        At DataMySite, we help you navigate Saudi Arabia’s dynamic media ecosystem with precision, compliance, and creativity.
                        <br><br>
                        <strong>Reach millions of Saudi consumers — from retail aisles to city skylines — with DataMySite’s Saudi Marketing solutions.</strong>

                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for Saudi Marketing</h4>
                    <p>
                        Our deep regional knowledge and on-ground media partnerships allow us to execute campaigns that deliver both scale and precision.
                        <br><br>
                        <strong>We offer:</strong>
                    </p>
                    <ul>
                        <li>Access to exclusive Panda store screen networks.</li>
                        <li>Partnerships with premium outdoor screen providers.</li>
                        <li>Full campaign lifecycle — from design to deployment and reporting.</li>
                        <li>Culturally localized creatives in Arabic and English.</li>
                        <li>Comprehensive analytics for digital and OOH campaigns.</li>
                    </ul>
                    <p>
                        <strong>Our approach ensures:</strong>
                    </p>
                    <ul>
                        <li>Strategic coverage across KSA’s major urban centers.</li>
                        <li>Seamless coordination between retail and outdoor touchpoints.</li>
                        <li>Brand messaging that resonates with Saudi audiences.</li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image179.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section pr-blogs-section">

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

        <section id="service-cards" class="blog-section section  striped-section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What is Panda in-store advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s a retail media channel where brands display ads on digital screens inside Panda supermarkets, reaching customers while they shop or wait at the checkout.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I combine Panda screens with outdoor digital screens?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we recommend combining retail exposure with citywide screens and MUPIs for maximum coverage and frequency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Do you offer Arabic content creation?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Our content is localized in both Arabic and English to align with Saudi cultural tone and language.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Are Saudi campaigns measurable?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Both Panda in-store and digital screens provide impression data and exposure duration for performance analysis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can Dubai-based companies advertise directly in Saudi Arabia?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, through DataMySite’s local media partnerships, you can launch fully managed campaigns across the Kingdom without requiring a local entity.</p>
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