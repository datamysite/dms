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
                        <h4>with Air Arabia Airline Advertising in the UAE</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in designing and executing Air Arabia advertising campaigns that make your brand stand out in the skies. Whether through in-flight magazines, seatback branding, airport touchpoints, or digital screens, we ensure your message captures attention, builds trust, and drives measurable impact.
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
                    <h4>Why Choose Air Arabia for Advertising</h4>
                    <p>
                        Air Arabia is not just an airline — it’s a trusted brand synonymous with comfort, reliability, and accessibility. With millions of passengers annually and flights connecting Sharjah, Abu Dhabi, Ras Al Khaimah, and other key regional hubs, Air Arabia advertising delivers consistent visibility to both local and international audiences.
                        <br>
                        Here’s why brands choose Air Arabia as a strategic advertising platform:
                    </p>
                    <ul>
                        <li>
                            <strong>Extensive Regional Reach:</strong>
                             Connect with travelers across the GCC, North Africa, South Asia, and Europe through Air Arabia’s comprehensive route network.
                         </li>


                        <li>
                            <strong>Diverse Audience:</strong>
                             From business professionals to tourists and expatriates, Air Arabia carries passengers from multiple socio-economic backgrounds — offering high exposure across segments.
                         </li>


                        <li>
                            <strong>Premium Association:</strong>
                             Advertising on a trusted UAE airline adds credibility and prestige to your brand image.
                         </li>


                        <li>
                            <strong>High Engagement:</strong>
                             Passengers spend hours onboard, providing undistracted time to absorb your brand message in a calm and focused environment.
                         </li>
                    </ul>
                    <p>
                        At DataMySite, we combine strategy, creativity, and analytics to ensure your Air Arabia campaigns deliver the highest visibility and ROI possible.
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
                    <h4>Types of Air Arabia Airline Advertising</h4>
                    <p>
                        Air Arabia provides several impactful advertising opportunities across both in-flight and on-ground channels. Here are the most effective ad formats you can choose:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>In-Flight Magazine Advertising</h5>
                    <p>
                        Air Arabia’s in-flight magazine, Al Nawras, is a premium print publication with high readership. It’s available in every seat pocket, offering long dwell time and strong brand recall. You can choose full-page, half-page, or double-spread ads to showcase your brand story or new offerings.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Seatback & Tray Table Branding</h5>
                    <p>
                        Seatback and tray table advertising provide constant visual exposure throughout the flight. Passengers interact with these surfaces multiple times during the journey — while eating, reading, or relaxing — making them ideal for repetitive brand impressions.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Overhead Bin & Cabin Wall Branding</h5>
                    <p>
                        Transform the aircraft interior into a moving billboard by placing your brand visuals on overhead compartments, side panels, and aisle walls. This immersive experience makes your ad impossible to ignore.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>In-Flight Video Commercials</h5>
                    <p>
                        Air Arabia offers brands the opportunity to display video ads and digital content through onboard entertainment systems. With an attentive audience and minimal distractions, video advertising ensures maximum engagement and message retention.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Boarding Pass Advertising</h5>
                    <p>
                        Every passenger interacts with a boarding pass several times — during booking, check-in, boarding, and post-flight. Adding your brand logo or message to digital or printed boarding passes ensures constant visibility throughout the travel journey.
                    </p>
                </div> 


                <div class="col-lg-6">
                    <h5>Airport Check-In & Lounge Branding</h5>
                    <p>
                        Air Arabia operates from major airports in the UAE — including Sharjah, Abu Dhabi, and Ras Al Khaimah. Advertising at these touchpoints (check-in areas, baggage belts, lounges) offers high-frequency exposure even before the flight begins.
                    </p>
                </div> 


                <div class="col-lg-12">
                    <h5>Headrest Covers & Cabin Announcements</h5>
                    <p>
                        Customized headrest covers and sponsored announcements by cabin crew can directly introduce your brand to passengers in a personal and memorable way, creating a strong emotional connection.
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
                    <h4>Advantages of Advertising on Air Arabia</h4>
                    <p>
                        Airline advertising on Air Arabia delivers unique benefits that extend far beyond traditional media exposure.
                    </p>
                    <ul>
                        <li>
                            <strong>Global Reach with Regional Focus</strong><br>
                            Air Arabia connects the UAE with Asia, Africa, and Europe, offering you access to international audiences while keeping regional relevance intact.
                        </li>
                        <li>
                            <strong>Targeted Exposure</strong><br>
                            Choose specific routes, destinations, or flight categories that align with your brand’s market and audience profile.
                        </li>
                        <li>
                            <strong>Longer Attention Span</strong><br>
                            Passengers are relaxed and attentive, offering a distraction-free environment that traditional ads rarely achieve.
                        </li>
                        <li>
                            <strong>360-Degree Brand Experience</strong><br>
                            With options ranging from digital screens to physical branding, you can create multi-touchpoint visibility throughout the passenger journey.
                        </li>
                        <li>
                            <strong>Cost-Effective Advertising Medium</strong><br>
                            Compared to traditional outdoor or TV campaigns, airline ads offer premium exposure at lower costs per impression, making them an excellent ROI choice.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit from Air Arabia Advertising</h4>
                    <p>Advertising with Air Arabia is suitable for a wide range of sectors, including:</p>
                    <ul>
                        <li><strong>Tourism & Hospitality</strong>: Promote hotels, resorts, and travel packages to passengers already in a travel mindset.</li>
                        <li><strong>Retail & Luxury Brands</strong>: Showcase your latest fashion, jewelry, or lifestyle collections to high-income passengers.</li>
                        <li><strong>Financial Services</strong>: Banks, insurance, and investment firms can target professionals and business travelers.</li>
                        <li><strong>Technology & Telecom</strong>: Promote digital apps, telecom products, or fintech solutions.</li>
                        <li><strong>Education & Real Estate</strong>: Reach investors, students, and decision-makers seeking opportunities in the UAE and beyond.</li>
                        <li><strong>Healthcare & Wellness</strong>: Highlight clinics, hospitals, or medical tourism services targeting international travelers.</li>
                    </ul>
                    <p>At DataMySite, we help you select the right advertising format and creative strategy for your industry and audience.</p>
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
                    <h4>Why Partner with DataMySite for Air Arabia Advertising</h4>
                    <p>
                        At DataMySite, we go beyond ad placement — we build strategic campaigns designed to deliver measurable impact.
                        <br>
                        Here’s what sets us apart:
                    </p>
                    <ul>
                        <li><strong>Experience Across UAE Airlines</strong>:<br> We have expertise running ad campaigns across major carriers including Emirates, Etihad, Fly Dubai, and Air Arabia.</li>
                        <li><strong>Customized Campaigns</strong>:<br> Every brand is different — we tailor strategies based on your goals, audience, and routes.</li>
                        <li><strong>Creative Excellence</strong>:<br> Our design and content team creates visuals that stand out while aligning with airline standards.</li>
                        <li><strong>End-to-End Management</strong>:<br> From airline coordination and creative approval to final execution, we handle it all seamlessly.</li>
                        <li><strong>Performance Tracking</strong>:<br> We provide post-campaign insights so you can measure visibility, engagement, and ROI.</li>
                    </ul>
                    <p>
                        When you choose DataMySite, you’re partnering with a team that understands both aviation advertising and UAE’s marketing ecosystem — ensuring your message soars above the competition.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Final Thoughts</h4>
                    <p>
                        Air Arabia Airline Advertising is one of the most powerful and efficient ways to take your brand message beyond borders. It combines the reach of international travel with the intimacy of direct engagement — ensuring every impression counts.
                        <br><br>
                        At DataMySite, we transform ordinary ad spaces into extraordinary brand experiences that inspire, inform, and convert. From planning to execution, we make sure your campaign flies high with maximum visibility and measurable success.
                        <br><br>
                        If you’re ready to elevate your brand across the skies of the Middle East, Asia, and Europe — partner with DataMySite for your next Air Arabia advertising campaign.

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
                                        <span class="badge">&nbsp;</span>How many passengers travel with Air Arabia each year?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Air Arabia serves over 13 million passengers annually across more than 170 destinations worldwide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What are the available ad formats?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Formats include in-flight magazines, seatback branding, cabin wraps, video ads, boarding pass placements, and airport touchpoints.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long does it take to start an advertising campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns typically go live within 2–4 weeks after design approval and airline scheduling.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I advertise on specific routes or regions?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes. Air Arabia allows targeted campaigns on specific flight routes or geographic markets based on your objectives.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Is Air Arabia advertising cost-effective for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. With flexible package options, even SMEs can leverage airline advertising for brand awareness and regional outreach.</p>
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