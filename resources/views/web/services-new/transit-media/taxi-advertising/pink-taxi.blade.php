@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$mainservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Empowering Brands with Visibility</h2>
                        <h4>and Purpose Through Pink Taxi Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands connect with this growing and influential audience through Pink Taxi Advertising campaigns that are creative, targeted, and compliant with local advertising standards.
                            <br><br>
                            If you’re looking for a marketing channel that blends visibility with values, Pink Taxi Advertising is the perfect choice.
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
                    <h4>What is Pink Taxi Advertising?</h4>
                    <p class="mb-0">
                        Pink Taxis in Dubai are part of the Roads and Transport Authority (RTA) initiative to provide safe and convenient travel options for women, children, and families. These taxis are exclusively driven by female chauffeurs, catering primarily to women passengers.
                        <br><br>
                        By branding Pink Taxis with your company’s message, logo, or product visuals, you gain access to a premium advertising space that travels daily through Dubai’s busiest residential, commercial, and leisure zones — from Downtown Dubai to Jumeirah, Marina, and beyond.
                        <br><br>
                        Pink Taxi Advertising allows your brand to associate with trust, safety, and empowerment while reaching a valuable demographic: female decision-makers and families.    
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

        

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-5 mt-0">
                    <h4>Why Choose Pink Taxi Advertising in Dubai?</h4>
                    <p>Dubai’s Pink Taxi network covers thousands of trips every week — traveling through malls, schools, residential areas, business districts, and entertainment destinations. Here’s why advertising on Pink Taxis is a powerful marketing investment:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Targeted Audience Reach
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pink Taxis cater specifically to women and families, giving your brand direct visibility among one of the most influential consumer groups in the UAE — female professionals, homemakers, and mothers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Association with Trust and Safety
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Because Pink Taxis are operated by female drivers for women and children, your brand automatically benefits from being associated with safety, respect, and empowerment — values that resonate deeply in the UAE market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>High Mobility and Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>These taxis travel across Dubai’s busiest zones — Downtown, Marina, Deira, Al Barsha, and Business Bay — ensuring your message reaches audiences citywide, throughout the day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Perfect for Lifestyle and Family-Focused Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Whether you’re in fashion, healthcare, education, beauty, retail, or hospitality, Pink Taxi advertising offers a premium platform to connect with your ideal audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Long-Lasting Brand Recall
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Unlike digital ads that can be skipped, taxi advertising delivers repeated daily impressions, helping your brand stay visible and memorable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 mt-0">
                    <h4>Types of Pink Taxi Advertising Formats</h4>
                    <p>At DataMySite, we offer multiple creative formats for Pink Taxi advertising in Dubai — each designed for maximum visibility, creativity, and compliance with RTA advertising regulations.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Full Taxi Wrap
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Transform the entire Pink Taxi into a moving billboard by covering it with your brand’s logo, imagery, and colors. Full wraps offer maximum visual impact and consistent brand exposure across the city.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Door & Side Panel Ads
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Perfect for promoting short messages, logos, or product visuals — these side panels grab attention every time the taxi stops, picks up, or drops off passengers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Rear Window Graphics
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Rear window branding ensures visibility for vehicles and pedestrians behind the taxi, ideal for website URLs or call-to-action messages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Roof-Top Digital Screens
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Some Pink Taxis in Dubai are now equipped with digital roof screens, offering dynamic, animated ad displays that stand out, day and night.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-35">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-35" data-aria-expanded="false" data-aria-controls="faqCollapse-35">
                                        <span class="badge">&nbsp;</span>Interior Headrest Screens
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-35" class="collapse" aria-labelledby="faqHeading-35" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Engage passengers directly during their journey through in-cabin digital ads or printed displays — ideal for storytelling or product highlights.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>



    
        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Where Pink Taxis Operate in Dubai</h4>
                    <p>
                        Pink Taxis cover all major districts, providing maximum route diversity for advertising campaigns. Key areas include:
                    </p>
                    <ul>
                        <li><strong>Downtown Dubai & Business Bay</strong> – Ideal for corporate and lifestyle brands</li>
                        <li><strong>Jumeirah & Al Wasl</strong> – Reaching family and premium residential zones</li>
                        <li><strong>Dubai Marina & JLT</strong> – High-traffic entertainment and business districts</li>
                        <li><strong>Deira & Bur Dubai</strong> – High-density local audience</li>
                        <li><strong>Dubai Airport, Al Barsha & Mirdif</strong> – Exposure to travelers and families</li>
                       <li> <strong>Mall of the Emirates, Dubai Mall, and Ibn Battuta Mall</strong> – High-traffic retail destinations</li>
                    </ul>
                    <br>
                    <h4>Ideal Industries for Pink Taxi Advertising</h4>
                    <p>Pink Taxi Advertising is a perfect fit for brands that want to connect emotionally and practically with women and families. Industries that benefit most include:</p>
                    <ul>
                        <li><strong>Fashion and Beauty</strong> (cosmetics, apparel, skincare, perfumes)</li>
                        <li><strong>Healthcare and Wellness</strong> (clinics, fitness centers, nutrition brands)</li>
                        <li><strong>Education and Childcare</strong> (schools, nurseries, learning centers)</li>
                        <li><strong>Retail and E-commerce</strong> (shopping malls, online stores)</li>
                        <li><strong>Hospitality and Tourism</strong> (hotels, resorts, family attractions)</li>
                        <li><strong>Financial Services</strong> (banks, insurance, and family investment plans)</li>
                        <li><strong>Technology and Telecom</strong> (apps, mobile devices, family entertainment platforms)</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>Benefits of Pink Taxi Advertising for Businesses</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Direct Access to a Female Audience</h5>
                            <p>
                                Pink Taxi Advertising allows brands to directly engage women — a key decision-making group in UAE households when it comes to shopping, healthcare, education, and lifestyle choices.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>24/7 Visibility Across Dubai</h5>
                            <p>
                               Pink Taxis operate day and night across residential, commercial, and entertainment areas — giving your brand continuous exposure to a wide audience.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>Builds Positive Brand Perception</h5>
                            <p>
                                Associating with Pink Taxis helps position your brand as socially aware, inclusive, and progressive, appealing to audiences that value empowerment and safety.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>High ROI and Brand Recall</h5>
                            <p>
                                Taxi advertising offers one of the lowest costs per impression among outdoor media in Dubai, ensuring excellent long-term ROI and visibility.
                            </p>
                        </div>  


                        <div class="col-lg-12">
                            <h5>Perfect for Integrated Marketing</h5>
                            <p>
                                Pink Taxi Advertising can easily complement your digital, social media, and influencer campaigns — creating consistent, citywide visibility for your brand.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>How DataMySite Manages Pink Taxi Advertising Campaigns</h4>
                    <p>Our process ensures smooth execution and measurable success for every campaign:</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Audience Targeting & Strategy</h5>
                            <p>
                                We analyze your business goals, audience demographics, and campaign objectives to design a tailored Pink Taxi advertising plan.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>Creative Concept & Design</h5>
                            <p>
                               Our creative team designs visually stunning and compliant taxi wraps that grab attention and communicate your brand effectively.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>RTA Coordination & Approvals</h5>
                            <p>
                                We handle all the necessary RTA advertising permissions and documentation, ensuring full compliance with Dubai’s outdoor advertising regulations.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>Printing & Installation</h5>
                            <p>
                                We use high-quality, weather-resistant materials for long-lasting visuals that maintain color consistency and durability throughout the campaign.
                            </p>
                        </div>  


                        <div class="col-lg-12">
                            <h5>Tracking & Reporting</h5>
                            <p>
                                You’ll receive regular updates, photos, and reports detailing coverage, reach, and impressions — giving you full transparency on your campaign performance.
                            </p>
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

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Pink Taxi Advertising</h4>
                    <p>
                        At DataMySite, we bring expertise, creativity, and local market knowledge to help your brand stand out on Dubai’s roads.
                        <br>
                        Here’s why businesses choose us for Pink Taxi Advertising:
                    </p>
                    <ul>
                        <li>Experience with Dubai’s RTA advertising formats</li>
                        <li>End-to-end management – from concept to execution</li>
                        <li>Targeted campaign planning for maximum visibility</li>
                        <li>High-quality printing and design standards</li>
                        <li>Transparent pricing and flexible packages</li>
                        <li>Proven success across multiple industries</li>
                    </ul>
                    <p>We make it easy for you to run a professional, efficient, and eye-catching taxi advertising campaign — whether for brand awareness, product launch, or audience engagement.</p>
                    <br>
                    <h4>Make Your Brand Move with Purpose</h4>
                    <p>
                        Pink Taxi Advertising in Dubai is more than just outdoor media — it’s a statement of inclusion, empowerment, and visibility. Whether your goal is to reach female shoppers, mothers, or professionals, this platform helps your brand connect meaningfully with a premium audience that values trust and quality.
                        <br>
                        At DataMySite, we make it simple to plan, design, and launch Pink Taxi campaigns that deliver measurable impact.
                        <br><br>
                        Contact us today to create a customized Pink Taxi Advertising campaign that moves your message across Dubai — with elegance, purpose, and precision.
.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section   faq-new-section">

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
                                        <span class="badge">&nbsp;</span>Who can advertise on Pink Taxis in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Any brand that complies with RTA guidelines can advertise on Pink Taxis. It’s especially recommended for brands targeting women and families.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How much does Pink Taxi Advertising cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary depending on the number of taxis, ad format (full wrap, side panel, or digital), and campaign duration. Packages can be customized to suit your budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are there any restrictions on advertising content?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Since Pink Taxis are family-oriented, the RTA has strict content guidelines to ensure ads remain respectful and family-friendly. Our team ensures full compliance before launch.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How long can a Pink Taxi ad campaign run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Campaigns typically run for 1 to 6 months, but longer-term advertising can be arranged for ongoing visibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can I run Pink Taxi Advertising along with other taxi types?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Many brands combine Pink Taxi campaigns with standard RTA taxis, airport taxis, and digital unipoles to maximize exposure across demographics.</p>
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