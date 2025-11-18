@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Transform Every Journey</h2>
                        <h4>into a Moving Brand Story</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in Tram Advertising solutions in Dubai that combine strategic creativity with advanced audience targeting. Whether you’re launching a product, building brand awareness, or promoting an event, tram ads make your brand an integral part of Dubai’s vibrant urban lifestyle.
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
                    <h4>What is Tram Advertising?</h4>
                    <p>
                        Tram advertising involves placing promotional visuals, wraps, and digital displays on trams or tram stations. These can include full exterior wraps, interior panels, digital screens, or platform branding — all designed to attract the attention of commuters, pedestrians, and nearby traffic.
                        <br><br>
                        Dubai’s tram network connects Dubai Marina, Jumeirah Lakes Towers (JLT), Knowledge Village, Media City, and Palm Jumeirah, making it a powerful advertising platform that reaches thousands of residents, professionals, and tourists daily.
                        <br><br>
                        With trams gliding through Dubai’s most photographed areas, your brand message becomes part of the city’s daily scenery — seen, remembered, and shared by countless people.

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

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image24.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>Why Choose Tram Advertising in Dubai?</h4>
                    <p>Dubai’s tram system offers advertisers a premium opportunity to connect with both local and international audiences. Here are the key reasons why tram advertising stands out:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-210">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-210" data-aria-expanded="true" data-aria-controls="faqCollapse-210">
                                        <span class="badge">&nbsp;</span>Uninterrupted Urban Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-210" class="collapse" aria-labelledby="faqHeading-210" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Trams travel through Dubai’s most scenic and high-traffic locations — including beachfronts, commercial hubs, and residential districts — ensuring your brand is visible throughout the day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Massive Commuter Audience
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Thousands of professionals, tourists, and residents use or pass by trams daily. With frequent trips along Marina and JBR, your message reaches an active, engaged audience across different demographics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Dynamic and Eye-Catching Displays
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A fully wrapped tram acts as a moving billboard, instantly capturing attention. The unique motion and large size make it impossible to ignore, even from a distance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-213">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-213" data-aria-expanded="false" data-aria-controls="faqCollapse-213">
                                        <span class="badge">&nbsp;</span>Long-Term Branding Impact
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-213" class="collapse" aria-labelledby="faqHeading-213" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Tram campaigns can run for months, maintaining brand consistency and long-term recall among city dwellers. This format is ideal for brands looking for sustainable visibility rather than short-term exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-214">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-214" data-aria-expanded="false" data-aria-controls="faqCollapse-214">
                                        <span class="badge">&nbsp;</span>Eco-Friendly Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-214" class="collapse" aria-labelledby="faqHeading-214" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai’s tram network is a green mode of transportation, aligning perfectly with brands that value sustainability and innovation — an increasingly important factor for modern consumers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-215">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-215" data-aria-expanded="false" data-aria-controls="faqCollapse-215">
                                        <span class="badge">&nbsp;</span>Ideal for Premium Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-215" class="collapse" aria-labelledby="faqHeading-215" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The tram route covers Dubai Marina and JBR — luxury residential and retail zones that attract high-income audiences. This makes Tram Advertising particularly effective for premium and lifestyle brands.</p>
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

                <div class="col-lg-7">
                    <h4>Types of Tram Advertising</h4>
                    <p>At DataMySite, we provide a variety of tram advertising formats to suit every marketing objective:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-220">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-220" data-aria-expanded="true" data-aria-controls="faqCollapse-220">
                                        <span class="badge">&nbsp;</span>Full Tram Wraps
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-220" class="collapse" aria-labelledby="faqHeading-220" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Transform an entire tram into a stunning moving billboard. Full wraps cover the exterior with brand imagery, logos, and messaging — offering 360-degree visibility as the tram moves through busy city routes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-221">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-221" data-aria-expanded="false" data-aria-controls="faqCollapse-221">
                                        <span class="badge">&nbsp;</span>Partial Tram Wraps
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-221" class="collapse" aria-labelledby="faqHeading-221" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A more cost-effective option, partial wraps allow you to brand specific sections like doors, panels, or sides. Ideal for targeted promotions or event-based campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-222">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-222" data-aria-expanded="false" data-aria-controls="faqCollapse-222">
                                        <span class="badge">&nbsp;</span>Interior Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-222" class="collapse" aria-labelledby="faqHeading-222" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Inside trams, advertisers can use seat backs, window decals, grab handles, or digital screens to engage passengers directly during their commute.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-223">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-223" data-aria-expanded="false" data-aria-controls="faqCollapse-223">
                                        <span class="badge">&nbsp;</span>Station Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-223" class="collapse" aria-labelledby="faqHeading-223" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Enhance visibility by branding tram stations, shelters, ticket counters, and waiting areas. This combination of static and motion-based advertising maximizes audience impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-224">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-224" data-aria-expanded="false" data-aria-controls="faqCollapse-224">
                                        <span class="badge">&nbsp;</span>Digital and LED Tram Screens
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-224" class="collapse" aria-labelledby="faqHeading-224" data-parent="#accordion">
                                <div class="card-body">
                                    <p>For brands that want to stand out with animation and video content, digital tram screens offer vibrant displays with dynamic visuals, perfect for high-traffic zones like Dubai Marina Mall or JBR.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 

                <div class="col-lg-1"></div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image24.png')}}" width="100%" alt="Impact of PR Coverage">
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
                    <h4>Popular Tram Advertising Locations in Dubai</h4>
                    <p>
                        Dubai’s tram route passes through some of the most active commercial and residential areas, ensuring strong reach and high-value impressions:
                    </p>
                    <ul>
                        <li><strong>Dubai Marina</strong> – A hub of high-end residences, cafes, and shopping centers.</li>
                        <li><strong>Jumeirah Beach Residence (JBR)</strong> – Perfect for lifestyle and luxury brands targeting tourists and residents.</li>
                        <li><strong>Media City & Knowledge Village</strong> – Ideal for B2B and corporate branding.</li>
                       <li><strong> Palm Jumeirah Access Points</strong> – Premium visibility for travel, hospitality, and property promotions.</li>
                        <li><strong>Al Sufouh & Dubai Internet City</strong> – Reaches working professionals and tech-oriented audiences.</li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit from Tram Advertising</h4>
                    <p>Tram advertising in Dubai is versatile and suitable for multiple industries, including:</p>
                    <ul>
                        <li>Real Estate & Property Developers</li>
                        <li>Retail & Fashion Brands</li>
                        <li>Tourism & Hospitality</li>
                        <li>Telecom & Technology</li>
                        <li>Automotive & Luxury Brands</li>
                        <li>Financial Institutions & Banks</li>
                        <li>Entertainment & Event Companies</li>

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
                    <h4>Why Choose DataMySite for Tram Advertising in Dubai?</h4>
                    <p>
                       At DataMySite, we understand that outdoor advertising is more than visibility — it’s about creating lasting impressions. Our tram advertising campaigns are designed with precision, creativity, and strategy to ensure your brand connects effectively with Dubai’s urban audience.
                        <br>
                        Here’s what makes us different:
                    </p>
                    <ul>
                        <li>End-to-End Campaign Management – From creative design to media booking and installation.</li>
                        <li>Compliance with RTA & Dubai Municipality Regulations.</li>
                        <li>Custom Campaign Strategies – Tailored based on brand goals and audience demographics.</li>
                        <li>High-Quality Printing & Wrapping Materials.</li>
                        <li>Performance Reporting & Campaign Monitoring.</li>

                    </ul>
                    <p>We partner with you every step of the way to ensure your brand rides the tracks of success — quite literally.</p>
                    <br>
                    <h4>Benefits of Tram Advertising with DataMySite</h4>
                    <ul>
                        <li>Continuous brand exposure across Dubai’s busiest zones.</li>
                        <li>Perfect balance between mass reach and premium targeting.</li>
                        <li>Sustainable and eco-conscious advertising medium.</li>
                        <li>Enhances brand image through creative, high-impact visuals.</li>
                        <li>Boosts brand recall due to repeated visibility on daily commutes.</li>

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
                                        <span class="badge">&nbsp;</span>How effective is tram advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Extremely effective. Dubai’s tram routes run through high-traffic residential and commercial areas like Marina and JBR, making it one of the most visible and premium outdoor advertising options.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What are the types of tram advertising formats available?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can choose from full tram wraps, partial wraps, interior panels, station branding, and digital LED tram screens depending on your campaign goals and budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long should a tram advertising campaign run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most campaigns run from one month to six months. Longer durations ensure stronger brand recall and continuous exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Is tram advertising allowed anywhere in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, but all tram advertising must follow the RTA (Roads and Transport Authority) guidelines. DataMySite manages the approval process for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What is the cost of tram advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pricing depends on tram size, ad format, duration, and design. Contact DataMySite for customized packages based on your specific campaign objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>Can I combine tram advertising with metro or bus ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Many brands achieve city-wide exposure by combining tram, metro, and bus advertising — a strategy we can fully manage for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-16">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-16" data-aria-expanded="false" data-aria-controls="faqCollapse-16">
                                        <span class="badge">&nbsp;</span>Which industries benefit most from tram ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-16" class="collapse" aria-labelledby="faqHeading-16" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Real estate, luxury retail, hospitality, tech, and financial brands benefit greatly due to the affluent and urban audience along the tram route.</p>
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