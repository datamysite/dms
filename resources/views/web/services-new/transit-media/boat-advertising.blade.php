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
                        <h2>Elevate Your Brand</h2>
                        <h4>on Dubai’s Waterfront</h4>
                        <br>
                        <p>
                            At DataMySite, we bring creativity to the waves with Boat Advertising in Dubai — a dynamic, high-visibility medium that turns yachts, ferries, and cruise boats into floating billboards. Whether your goal is to capture the attention of beachgoers, tourists, or waterfront communities, our Dubai Sea Route advertising solutions ensure your message sails across the city’s most iconic routes.
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
                    <h4>What Is Boat Advertising?</h4>
                    <p>
                        Boat advertising (also known as marine or waterway advertising) involves displaying brand messages, graphics, or digital screens on boats, yachts, ferries, and other marine vessels. These branded boats travel along popular coastal routes, attracting thousands of eyes from beaches, promenades, marinas, and sea-view hotels.
                        <br><br>
                        In Dubai — home to attractions like Dubai Marina, Palm Jumeirah, Bluewaters Island, and Jumeirah Beach Residence (JBR) — the impact of sea route ads is exceptional. With Dubai’s skyline and beaches as the backdrop, your brand becomes part of the city’s luxury lifestyle imagery.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image138.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-7">
                    <h4>Why Choose Boat Advertising in Dubai?</h4>
                    <p>Dubai’s coastline is not just a scenic attraction — it’s a prime commercial zone with endless advertising potential. Here’s why Boat Advertising in Dubai is becoming one of the most premium and effective marketing channels:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-210">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-210" data-aria-expanded="true" data-aria-controls="faqCollapse-210">
                                        <span class="badge">&nbsp;</span>Unmatched Visibility
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-210" class="collapse" aria-labelledby="faqHeading-210" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Boats move along the busiest tourist and residential areas like Dubai Marina, The Palm, and JBR. Your brand is visible to audiences on beaches, waterfront cafes, cruise terminals, and even from passing cars on the roads nearby.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Exclusive & Premium Audience Reach
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai’s sea routes attract a high-income demographic — luxury travelers, yacht owners, hotel guests, and local residents. This means your ads reach a sophisticated and affluent audience that aligns perfectly with premium brands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Creative and Eye-Catching Advertising Medium
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Unlike traditional billboards, boat ads are dynamic, moving, and visually unique. Whether it’s a full boat wrap, a digital LED screen, or a 3D logo display, your message instantly draws attention in a visually crowded cityscape.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-213">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-213" data-aria-expanded="false" data-aria-controls="faqCollapse-213">
                                        <span class="badge">&nbsp;</span>Perfect for Brand Launches & Events
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-213" class="collapse" aria-labelledby="faqHeading-213" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Boat advertising is often used for brand activations, product launches, and special events. It creates buzz and exclusivity — perfect for luxury, fashion, real estate, or tourism-related promotions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-214">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-214" data-aria-expanded="false" data-aria-controls="faqCollapse-214">
                                        <span class="badge">&nbsp;</span>High Recall Value
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-214" class="collapse" aria-labelledby="faqHeading-214" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        People remember what they see in extraordinary contexts. Seeing a moving branded yacht under the Burj Al Arab skyline leaves a lasting impression that’s hard to forget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-215">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-215" data-aria-expanded="false" data-aria-controls="faqCollapse-215">
                                        <span class="badge">&nbsp;</span>Ideal for Social Media Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-215" class="collapse" aria-labelledby="faqHeading-215" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Boat advertisements are naturally Instagrammable. Tourists and locals love capturing photos and videos of branded boats cruising along the coast — giving your brand free social media exposure.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section  section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8">
                    <h4>Types of Boat Advertising in Dubai</h4>
                    <p>At DataMySite, we offer customized boat and marine advertising solutions that suit different campaign needs and budgets. Here are the most popular types:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-220">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-220" data-aria-expanded="true" data-aria-controls="faqCollapse-220">
                                        <span class="badge">&nbsp;</span>Boat Wrap Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-220" class="collapse" aria-labelledby="faqHeading-220" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Full or partial wraps transform the exterior of boats into stunning visual displays. From corporate logos to large-scale graphics, a fully wrapped yacht or ferry becomes a floating billboard that commands attention wherever it goes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-221">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-221" data-aria-expanded="false" data-aria-controls="faqCollapse-221">
                                        <span class="badge">&nbsp;</span>Digital LED Boat Screens
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-221" class="collapse" aria-labelledby="faqHeading-221" data-parent="#accordion">
                                <div class="card-body">
                                    <p>High-definition LED screens mounted on boats display video ads, brand animations, or promotional messages. This is a great option for nighttime campaigns or event-based advertising during major Dubai festivals and celebrations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-222">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-222" data-aria-expanded="false" data-aria-controls="faqCollapse-222">
                                        <span class="badge">&nbsp;</span>Branded Sails and Flags
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-222" class="collapse" aria-labelledby="faqHeading-222" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sails, masts, and flags can be branded with company logos, colors, and taglines — offering subtle yet highly visible promotion during sea tours or marina stops.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-223">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-223" data-aria-expanded="false" data-aria-controls="faqCollapse-223">
                                        <span class="badge">&nbsp;</span>Luxury Yacht Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-223" class="collapse" aria-labelledby="faqHeading-223" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        For high-end events, luxury yacht branding combines elegance and exclusivity. Brands can charter yachts wrapped with their visual identity and even host promotional events onboard for media and influencers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-224">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-224" data-aria-expanded="false" data-aria-controls="faqCollapse-224">
                                        <span class="badge">&nbsp;</span>Ferry and Commercial Vessel Ads
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-224" class="collapse" aria-labelledby="faqHeading-224" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai ferries carry thousands of commuters and tourists daily. Branding these ferries provides continuous exposure across key locations like Deira, Al Ghubaiba, and Dubai Marina.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 

                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image139.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Popular Routes for Boat Advertising in Dubai</h4>
                    <p>
                        The Dubai Sea Route Advertising network covers iconic waterways and high-traffic areas where your campaign can achieve maximum visibility:
                    </p>
                    <ul>
                        <li><strong>Dubai Marina & JBR</strong> – Perfect for lifestyle and retail brands targeting tourists and residents.</li>
                        <li><strong>Palm Jumeirah & Atlantis Route</strong> – Ideal for luxury, real estate, and hospitality promotions.</li>
                        <li><strong>Burj Al Arab & Jumeirah Coastline</strong> – Offers exposure to both beachgoers and hotel visitors.</li>
                        <li><strong>Bluewaters Island & Ain Dubai Route</strong> – Premium zone for entertainment and lifestyle brands.</li>
                        <li><strong>Deira Creek & Al Seef Route</strong> – Great for heritage-themed campaigns and local engagement.</li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image140.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit from Boat Advertising</h4>
                    <p>Boat advertising in Dubai is versatile and impactful across various industries:</p>
                    <ul>
                        <li><strong>Luxury & Fashion Brands</strong><br> – Showcase elegance and exclusivity.</li>
                        <li><strong>Real Estate Developers</strong><br> – Promote new waterfront or luxury projects.</li>
                        <li><strong>Hospitality & Tourism</strong><br> – Boost hotel visibility and travel experiences.</li>
                        <li><strong>Automotive Brands</strong><br> – Perfect for premium launches and high-end image building.</li>
                        <li><strong>Tech & Telecom</strong><br> – Target urban consumers in a modern and memorable way.</li>
                        <li><strong>Entertainment & Events</strong><br> – Amplify visibility during festivals, races, and city events.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 vertical-center mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="80%" alt="Why choose us">
                </div>
                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for Boat Advertising?</h4>
                    <p>
                       At DataMySite, we combine creativity, technology, and strategic media placement to make your campaign unforgettable.
                        <br>
                        <strong>Our team:</strong>
                    </p>
                    <ul>
                        <li>Designs customized boat advertising concepts aligned with your brand identity.</li>
                        <li>Manages all permissions and marine authority approvals.</li>
                        <li>Ensures high-quality printing, wrapping, and screen installation.</li>
                        <li>Provides tracking, reporting, and visual documentation for performance insights.</li>
                    </ul>
                    <p>With years of experience in Dubai’s outdoor advertising market, we’ve helped numerous brands make waves — literally — across Dubai’s waterways.</p>
                    <br>
                    <h4>Benefits of Advertising on the Dubai Sea Route</h4>
                    <ul>
                        <li>Continuous exposure throughout the day.</li>
                        <li>Ideal for event-based promotions and long-term campaigns.</li>
                        <li>Reaches diverse audiences — locals, tourists, and international travelers.</li>
                        <li>Enhances brand perception by associating with Dubai’s luxury coastal lifestyle.</li>
                        <li>Cost-effective mobility compared to static high-end billboards.</li>
                    </ul>
                    
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section  striped-section section pr-blogs-section">

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
                                        <span class="badge">&nbsp;</span>What permissions are needed for boat advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Advertising on boats requires approval from the Dubai Maritime Authority and related municipal departments. DataMySite handles all necessary permits for a smooth campaign.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long can a boat advertising campaign run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns can run for a few days (for events) or several months, depending on your marketing objectives and contract terms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I advertise on yachts and ferries?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, both yachts and commercial ferries can be used for branding, depending on the desired audience reach and visibility level.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What is the best location for boat advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai Marina, Palm Jumeirah, and Jumeirah Beach are the top-performing routes due to their heavy tourist and local footfall.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Does boat advertising work at night?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. With LED-lit boats and digital screens, your ad remains visible and striking even after sunset — perfect for evening campaigns or nightlife events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>Is boat advertising suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. DataMySite offers flexible options including short-term branding, partial wraps, or shared campaigns, making it affordable for both SMEs and large corporations.</p>
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