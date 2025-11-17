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
                        <h2>Elevate Your Brand</h2>
                        <h4>with Fly Dubai Airline Advertising in the UAE</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses create impactful, visually stunning, and result-driven Fly Dubai advertising campaigns that connect with travelers from all over the world. Whether it’s in-flight ads, seatback placements, cabin branding, or airport touchpoints, our goal is to make your message visible, memorable, and effective.
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
                                
                                <input type="hidden" name="service" value="{{$mainservice->name}}" required>
                                                                
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
                    <h4>Why Choose Fly Dubai for Advertising</h4>
                    <br>
                    <p>
                        Fly Dubai is one of the most recognized low-cost carriers in the UAE, serving millions of passengers each year through its extensive flight network. With routes connecting Dubai to over 100 destinations, the airline has become a preferred choice for business and leisure travelers alike — making it a highly valuable advertising channel.
                        <br><br>
                        By investing in Fly Dubai airline advertising, brands can reach a diverse demographic mix — from high-income professionals and frequent travelers to families and tourists exploring Dubai and beyond. This exposure ensures that your brand not only gains visibility but also builds credibility through association with one of Dubai’s leading airline brands.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
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

        
        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Types of Fly Dubai Advertising Opportunities</h4>
                    <p>
                        Fly Dubai provides multiple advertising formats that allow brands to interact with passengers throughout their travel journey — from pre-boarding to in-flight experiences. At DataMySite, we customize every campaign to suit the advertiser’s goals and audience.
                        <br>
                        Here are the major Fly Dubai advertising formats available:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>In-Flight Magazine Advertising</h5>
                    <p>
                        Fly Dubai’s in-flight magazine offers a premium platform for brand storytelling. With a readership that spans across international passengers, this magazine is the perfect place to run full-page, half-page, or double-spread ads. Passengers often spend several minutes browsing through the magazine during flights, giving brands long-lasting visibility and recall value.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Seatback and Tray Table Branding</h5>
                    <p>
                        Seatback ads and tray table branding are among the most effective in-flight placements. They ensure constant visibility throughout the journey, as passengers spend hours seated and interacting with these surfaces. From food delivery services to travel apps, fashion brands, and luxury goods — seatback branding makes sure your message travels wherever the plane does.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Overhead Bin and Cabin Panel Branding</h5>
                    <p>
                        The cabin interior of Fly Dubai aircraft provides multiple branding surfaces — including overhead bins, cabin walls, and aisle panels. These placements allow for immersive visual experiences that catch the eye immediately upon boarding and during the flight.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Boarding Pass Advertising</h5>
                    <p>
                        Boarding passes are among the most viewed travel items. Whether digital or printed, your ad placement on Fly Dubai boarding passes ensures high engagement, as every passenger interacts with it multiple times — while checking flight details, scanning at gates, or saving for reference.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>In-Flight Video Advertising</h5>
                    <p>
                        In-flight video ads or safety card sponsorships offer a dynamic and memorable way to capture passengers’ attention. These videos are displayed on seatback screens, providing audio-visual engagement for brands looking to leave a lasting impression.
                    </p>
                </div> 


                <div class="col-lg-6">
                    <h5>Airport Lounge and Check-In Area Branding</h5>
                    <p>
                        Before passengers even step on board, Fly Dubai’s airport presence — including check-in counters, kiosks, and lounges — provides excellent advertising opportunities. This pre-flight exposure ensures that travelers encounter your brand multiple times during their airport journey, reinforcing awareness and familiarity.
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
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Advantages of Advertising on Fly Dubai</h4>
                    <ul>
                        <li>
                            <strong>High Passenger Volume:</strong><br>
                            Fly Dubai serves millions of passengers annually, offering guaranteed visibility for your campaigns across diverse markets.
                        </li>

                        <li>
                            <strong>Targeted Reach:</strong><br>
                            With routes connecting Dubai to Asia, Africa, and Europe, you can tailor campaigns based on regional interests or audience demographics.
                        </li>

                        <li>
                            <strong>Long Dwell Time:</strong><br>
                            Average flight durations allow passengers to engage with your ad content without distraction — improving recall and conversion potential.
                        </li>

                        <li>
                            <strong>Premium Brand Association:</strong><br>
                            Advertising with Fly Dubai associates your business with Dubai’s fast-growing aviation brand, strengthening your image and trustworthiness.
                        </li>

                        <li>
                            <strong>Comprehensive Exposure:</strong><br>
                            From airport to aircraft, Fly Dubai’s ad inventory provides a complete 360-degree exposure — ensuring your message reaches travelers at every point of their journey.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit Most from Fly Dubai Advertising</h4>
                    <p>While Fly Dubai advertising is suitable for all industries, it is particularly effective for:</p>
                    <ul>
                        <li>Tourism and hospitality brands promoting destinations, resorts, or experiences.</li>
                        <li>Financial services such as banks, forex, and credit card providers.</li>
                        <li>Luxury and retail brands looking to target high-spending travelers.</li>
                        <li>Real estate and investment companies appealing to international buyers.</li>
                        <li>Technology and telecom companies offering digital services for travelers.</li>
                        <li>Food and beverage brands expanding into new markets.</li>
                    </ul>
                    <p>At DataMySite, we develop customized campaigns aligned with your audience, message, and budget — ensuring your investment delivers measurable ROI.</p>
                </div>
            </div>

          </div>

        </section>

    
        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Helps You Achieve Maximum Impact</h4>
                    <p>
                        As one of Dubai’s trusted advertising agencies, DataMySite combines creativity, strategy, and data-driven execution to maximize the impact of your airline campaign.
                        <br>
                        Our process includes:
                    </p>
                    <ul>
                        <li><strong>Strategic Planning</strong>:<br> Understanding your brand goals, target audience, and desired outcomes.</li>
                        <li><strong>Creative Design</strong>:<br> Developing visually appealing and message-driven creatives that align with Fly Dubai’s standards.</li>
                        <li><strong>Placement Optimization</strong>:<br> Selecting the best advertising formats and routes for maximum exposure.</li>
                        <li><strong>Performance Tracking</strong>:<br> Providing analytics and reports to measure brand engagement and campaign success.</li>
                    </ul>
                    <p>
                        Our expertise ensures that every ad placement contributes to stronger brand visibility and higher recognition among travelers.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Fly Dubai Advertising</h4>
                    <ul>
                        <li><strong>Expert Team</strong>: We understand Dubai’s advertising landscape and airline media dynamics.</li>
                        <li><strong>Customized Campaigns</strong>: Each campaign is designed to suit your unique audience and business goals.</li>
                        <li><strong>Seamless Execution</strong>: From design to placement approvals, we handle everything end-to-end.</li>
                        <li><strong>Transparent Reporting</strong>: We provide detailed performance insights, ensuring accountability and trust.</li>
                    </ul>
                    <p>When you choose DataMySite, you partner with a team dedicated to delivering effective, high-visibility campaigns across Dubai’s top airline networks.</p>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Fly Dubai Airline Advertising is one of the most impactful and cost-effective ways to connect with an international audience traveling through Dubai. It transforms idle travel time into brand engagement moments — ensuring your message reaches, resonates, and remains memorable.
                        <br><br>
                        At DataMySite, we help you harness the full potential of Fly Dubai’s advertising network to grow your visibility and influence across borders.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section  pr-blogs-section">

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

        <section id="service-cards" class="blog-section section  faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How many passengers does Fly Dubai carry annually?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Fly Dubai serves millions of passengers each year across more than 100 destinations worldwide, offering vast visibility for advertisers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What type of brands can advertise on Fly Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Virtually all brands — from tourism boards to luxury goods and e-commerce platforms — can benefit from airline advertising.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long does it take to launch a Fly Dubai campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Depending on ad format and creative approvals, campaigns can go live within a few weeks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Is in-flight video advertising available on all Fly Dubai flights?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, in-flight video placements are available across Fly Dubai’s fleet, subject to format and inventory availability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can small businesses advertise with Fly Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. DataMySite offers tailored packages suitable for startups and SMEs looking to reach premium audiences cost-effectively.</p>
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