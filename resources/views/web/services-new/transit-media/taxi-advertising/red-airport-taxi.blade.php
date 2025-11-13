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
                        <h2>High-Impact Outdoor Advertising</h2>
                        <h4>opportunities available for brands targeting both residents and international visitors</h4>
                        <br>
                        <p>
                            These taxis are the first point of contact for millions of travelers entering Dubai each year, making them an ideal medium for impactful brand visibility. 
                            <br>
                            At DataMySite, we help you take advantage of this premium platform by designing and executing powerful Red Airport Taxi Advertising campaigns that ensure your brand makes a memorable first impression the moment visitors land in Dubai.
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
                    <h4>What is Red Airport Taxi Advertising?</h4>
                    <p class="mb-0">
                        Red Airport Taxi Advertising involves branding taxis that operate primarily from airports — transporting visitors, business travelers, and residents between Dubai International Airport and the city’s major destinations.
                        <br><br>
                        These taxis are part of the Roads and Transport Authority (RTA) fleet and are instantly recognizable by their red roofs. Each taxi travels hundreds of kilometers daily, covering airport terminals, hotel routes, business hubs, shopping malls, and residential districts — offering continuous visibility across Dubai.
                        <br><br>
                        When you advertise on Red Airport Taxis, your brand doesn’t just appear on the streets — it travels alongside your audience, reaching them during the crucial moments of arrival, transit, and exploration in the city.
   
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
                <div class="col-lg-6 mt-0">
                    <h4>Why Choose Red Airport Taxi Advertising in Dubai?</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Access to Millions of Arriving Passengers
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai International Airport is one of the busiest airports in the world, welcoming over 80 million passengers annually. Red Airport Taxi Advertising allows you to reach this massive influx of travelers as soon as they arrive — ensuring your brand is among the first they see in the UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Citywide Visibility and Coverage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Airport taxis travel across Dubai and often to other emirates, giving your ad exposure far beyond the airport area. Your message reaches business districts, shopping centers, beaches, and residential communities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Premium Audience Targeting
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Airport taxis cater mainly to business professionals, tourists, and high-income travelers, offering your brand visibility among a quality audience with high purchasing power.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>24/7 Mobile Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Red Airport Taxis operate around the clock — from early morning arrivals to late-night departures — ensuring your ad stays visible every hour of the day.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Perfect for Global and Local Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Whether you’re promoting a real estate project, luxury retail brand, fintech service, or tourism campaign, airport taxis give your message global reach through Dubai’s diverse international audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-0">
                    <h4>The Power of Airport Taxi Advertising</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>First Impression Advantage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your brand is among the first seen by tourists or business travelers upon arrival. This creates a psychological association between your brand and Dubai’s modern, vibrant identity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Extended Travel Routes
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Red Airport Taxis often transport passengers over long distances, sometimes beyond Dubai. This ensures your ad travels across highways, residential areas, and even other emirates — extending reach and impressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Repetition and Recall
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Airport taxi routes include Dubai’s most high-traffic areas like Sheikh Zayed Road, Downtown, Business Bay, Jumeirah, Dubai Marina, Deira, and Bur Dubai, ensuring repeated exposure and strong recall value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Brand Prestige and Trust
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Advertising on airport taxis signifies brand credibility. Travelers often associate airport transportation with safety, reliability, and quality — characteristics that transfer to your brand perception.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Effective for Product Launches and Awareness Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        If you’re introducing a new product or brand to the UAE market, airport taxi branding ensures instant visibility among both new visitors and long-term residents.
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
                    <h4>Types of Red Airport Taxi Advertising Formats</h4>
                    <ul>
                        <li>
                            <strong>Full Taxi Wrap Advertising</strong><br>
                             A full wrap transforms the entire taxi into a moving advertisement. The entire body of the vehicle is covered with your brand design, ensuring maximum visual impact. Ideal for premium campaigns, product launches, or global brand activations.
                         </li>
                        <li>
                            <strong>Door Panel Advertising</strong><br>
                             A cost-effective option that places branding on the taxi’s doors. It provides visibility from both sides of the vehicle while maintaining flexibility for long-term or high-volume campaigns.
                         </li>
                        <li>
                            <strong>Back Panel Ads</strong><br>
                             Back panels are particularly effective for short, strong messages. They’re easily visible to motorists and pedestrians behind the taxi, often while stuck in traffic near airports or main roads.
                         </li>
                            <li>
                            <strong>Roof Top Light Branding</strong><br>
                             This option involves placing your brand or logo on the taxi’s roof sign, ensuring visibility in high-traffic zones such as terminal exits, hotel entrances, and highways.
                         </li>
                    </ul>
                    <br>
                    <h4>Industries That Benefit Most from Airport Taxi Advertising</h4>
                    <ul>
                        <li><strong>Hospitality & Tourism</strong>: Hotels, resorts, and travel agencies welcoming tourists.</li>
                        <li><strong>Real Estate</strong>: Developers promoting new projects to global investors.</li>
                        <li><strong>Retail & Fashion</strong>: Luxury brands reaching high-income travelers.</li>
                        <li><strong>Technology & Finance</strong>: Fintech, mobile apps, and digital services targeting professionals.</li>
                        <li><strong>Education</strong>: Universities and institutions reaching international students.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section  striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>DataMySite: Your Partner for Red Airport Taxi Advertising</h4>
                    <p>
                        At DataMySite, we understand that airport taxi advertising requires creativity, precision, and perfect timing. Our team combines local expertise and global advertising standards to execute campaigns that stand out and deliver measurable results.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li>Creative concept development and ad design</li>
                        <li>RTA-compliant printing and installation</li>
                        <li>Strategic route planning and deployment</li>
                        <li>Campaign tracking and performance reporting</li>
                        <li>Maintenance and replacement of wraps during the campaign period</li>

                    </ul>
                    <p>We ensure that your Red Airport Taxi Advertising campaign aligns with Dubai’s advertising regulations while maximizing exposure and engagement across key city routes.</p>
                    <br>
                    <h4>Strategic Benefits of Partnering with DataMySite</h4>
                    <ul>
                        <li><strong>End-to-End Campaign Management</strong> – from idea to execution</li>
                        <li><strong>Extensive Media Access</strong> – across taxis, buses, metro, and outdoor billboards</li>
                        <li><strong>RTA Compliance Guarantee</strong> – ensuring smooth approval and installation</li>
                        <li><strong>High-Quality Materials</strong> – weatherproof and fade-resistant wraps</li>
                        <li><strong>Performance Analytics</strong> – data-driven insights for continuous optimization</li>
                    </ul>
                    <p>Our approach is designed to simplify the advertising process while ensuring that every campaign achieves its full potential.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-sectionsection why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Best Practices for Effective Airport Taxi Ads</h4>
                    <ul>
                        <li>
                            <strong>Use Simple, Impactful Messaging</strong><br>
                            Travelers only have seconds to notice your ad. Keep the message short, powerful, and easy to understand.
                        </li>
                        <li>
                            <strong>Leverage Brand Colors and Icons</strong><br>
                            Strong visual identity helps your ad stand out and remain memorable.
                        </li>
                        <li>
                            <strong>Add Clear Contact Information</strong><br>
                            Include your website, social media, or QR codes so travelers can easily connect with your brand.
                        </li>
                        <li>
                            <strong>Incorporate Multilingual Messaging</strong><br>
                            Dubai’s audience is international. Including both English and Arabic (or other relevant languages) enhances your ad’s accessibility.
                        </li>
                        <li>
                            <strong>Plan for Long-Term Visibility</strong><br>
                            Longer campaigns reinforce brand familiarity and create deeper audience recall.
                        </li>
                    </ul>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Red Airport Taxi Advertising in Dubai is one of the most powerful and premium outdoor marketing platforms for brands seeking visibility, credibility, and direct audience engagement. It captures attention at the perfect moment — when travelers are most alert, impressionable, and open to discovering new experiences.
                        <br><br>
                        At DataMySite, we help you turn these mobile advertising spaces into high-performing brand assets — ensuring your message travels from the airport runway to the city skyline. With creativity, compliance, and performance at the core of our service, your campaign is always in motion — just like Dubai itself.
.
                    </p>
                    <ul>
                        
                    </ul>
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
                                        <span class="badge">&nbsp;</span>How many Red Airport Taxis operate in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Hundreds of RTA-approved airport taxis operate across DXB and DWC, providing continuous service to travelers around the clock.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long does it take to launch an airport taxi campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Typically, campaigns can launch within 10–14 working days after design approval and RTA clearance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are the ads visible inside the airport premises?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While taxis primarily operate outside terminals, their constant movement around terminals, parking zones, and hotel routes ensures high visibility near airport entrances.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I advertise only on taxis operating between specific routes (like DXB to Marina)?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, DataMySite can customize your campaign based on preferred routes, locations, or target zones.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How do you ensure durability under Dubai’s weather?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We use premium-grade, UV-resistant vinyl materials that maintain vibrancy and integrity under heat and sunlight.</p>
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