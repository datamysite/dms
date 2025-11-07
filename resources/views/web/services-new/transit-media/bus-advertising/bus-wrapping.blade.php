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
                        <h2>High-Impact Bus Wrapping Campaigns</h2>
                        <br>
                        <p>At DataMySite Advertising, we specialize in high-impact bus wrapping campaigns across Dubai and the UAE. From concept to execution, we transform ordinary buses into moving billboards that create lasting impressions and deliver unmatched visibility for your brand.</p>
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
                    <h4>What is Bus Wrapping Advertising?</h4>
                    <p>
                        Bus wrapping involves applying high-quality printed vinyl graphics over the exterior surface of buses — covering sections or even the entire vehicle. These wraps showcase your brand message, product visuals, or marketing campaign in vibrant colors, turning every bus into a mobile advertising platform.
                        <br><br>
                        Each wrapped bus moves through high-traffic routes, residential communities, and business districts, making it a highly effective and cost-efficient advertising solution.
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

                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose Bus Wrapping Advertising in Dubai?</h4>
                    <p>
                        Dubai is one of the busiest cities in the world, with an ever-growing network of public transport. According to the RTA (Roads and Transport Authority), thousands of buses travel across Dubai daily — connecting neighborhoods, business hubs, and tourist destinations.
                        <br>
                        That means your brand can travel everywhere your customers do — from Business Bay to Dubai Marina, JLT, Downtown, Deira, and beyond.
                        <br><br>
                        <strong>Benefits of Bus Wrapping Advertising:</strong>

                    </p>
                    <ul>
                        <li><strong>Massive Reach</strong> – Reach thousands of commuters and pedestrians every day.</li>
                        <li><strong>High Visibility</strong> – Eye-catching visuals make your brand stand out in traffic and public spaces.</li>
                        <li><strong>Cost-Effective</strong> – More affordable and longer-lasting than TV or digital billboards.</li>
                        <li><strong>24/7 Exposure</strong> – Your ad moves through key city locations day and night.</li>
                        <li><strong>Flexible Campaign Durations</strong> – Choose from weekly, monthly, or long-term campaigns.</li>
                        <li><strong>Brand Trust</strong> – Being featured on RTA buses boosts credibility and brand perception.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        
        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image40.png')}}" class="flyer-img" width="100%" alt="Flyers that find the right hands">
                </div>
                <div class="col-lg-8">
                    <h4>Types of Bus Wrap Advertising We Offer</h4>
                    <p>At DataMySite, we provide a range of customized bus wrap options depending on your marketing goals and budget.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Full Bus Wrap
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse show" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A full bus wrap covers the entire surface — including sides, rear, and sometimes windows — creating a striking 360° visual experience.
                                        <br>
                                        Perfect for brand launches, events, or high-visibility national campaigns.
                                        <br>
                                        <strong>Benefits:</strong>
                                    </p>
                                    <ul>
                                        <li>Maximum brand exposure</li>
                                        <li>Visually dominant and hard to miss</li>
                                        <li>Creates strong recall value</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="true" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Partial Bus Wrap
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A cost-effective option that covers selected areas of the bus, such as the side panels or back section.
                                        <br>
                                        Ideal for short-term promotions or targeted messages.
                                        <br>
                                        <strong>Benefits:</strong>
                                    </p>
                                    <ul>
                                        <li>Budget-friendly</li>
                                        <li>Great for promotions and seasonal offers</li>
                                        <li>Easier installation and removal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="true" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Rear Bus Wrap
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The rear of the bus gets direct visibility from vehicles and pedestrians behind it — especially in Dubai’s busy traffic.
                                        <br>
                                        It’s one of the most effective spots for call-to-action messages, like websites, contact numbers, or QR codes.    
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit from Bus Advertising</h4>
                    <p>
                        Bus wrapping is suitable for nearly all industries, including:
                    </p>
                    <ul>
                        <li><strong>Real Estate Developers</strong> – promote new projects or community launches</li>
                        <li><strong>Retail & Shopping Malls</strong> – advertise seasonal offers and openings</li>
                        <li><strong>Restaurants & Food Chains</strong> – promote delivery apps or new menus</li>
                        <li><strong>Events & Exhibitions</strong> – announce upcoming shows and festivals</li>
                        <li><strong>Education & Training Institutes</strong> – promote admissions and programs</li>
                        <li><strong>Technology & Telecom Brands</strong> – drive product awareness</li>
                        <li><strong>Tourism & Hospitality</strong> – promote hotels, destinations, and attractions</li>
                    </ul>
                    <br>
                    <h4>Strategic Bus Routes in Dubai for Advertising</h4>
                    <p>
                        We operate across all major RTA bus routes to ensure your campaign covers the right audience.
                        <br>
                        Popular advertising routes include:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Sheikh Zayed Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Marina & JBR</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Barsha</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Deira & Bur Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Silicon Oasis</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Mirdif & Al Warqa</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Jumeirah & Al Wasl</span>

                        <br>
                        Each route is carefully selected based on demographics, footfall, and visibility to deliver the best ROI.
                    </p>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Bus Wrapping Advertising?</h4>
                    <p>
                        With years of experience in outdoor media and transit advertising, DataMySite offers end-to-end solutions — from concept design to production, RTA approval, and installation.
                        <br>
                        Our Expertise Includes:

                    </p>
                    <ul>
                        <li>Professional campaign planning and creative design</li>
                        <li>Premium quality 3M-certified vinyl materials</li>
                        <li>RTA-approved installations</li>
                        <li>Real-time campaign monitoring</li>
                        <li>Detailed coverage reports</li>
                        <li>Nationwide campaign execution</li>
                    </ul>
                    <p>We ensure your bus wraps are visually stunning, durable, and strategically placed to deliver measurable brand impact.</p>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-6">
                    <h4>Creative Design & Printing Quality</h4>
                    <p>
                        We understand that your brand image deserves perfection. That’s why we use UV-resistant, weatherproof vinyl materials and high-resolution digital printing to ensure vibrant colors and long-lasting performance under Dubai’s climate.
                        <br>
                        Our creative team works closely with you to craft visually powerful designs that fit perfectly across bus panels and comply with RTA advertising regulations.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4>Bus Advertising Packages</h4>
                    <p>
                        We offer flexible packages tailored to your needs:
                    </p>
                    <ul>
                        <li>Single Bus Campaigns</li>
                        <li>Fleet Campaigns</li>
                        <li>Long-Term Branding</li>
                        <li>Event-Specific Promotions</li>
                    </ul>
                    <p>All packages include design support, RTA permissions, printing, wrapping, and installation.</p>
                </div>

                <div class="col-lg-6">
                    <h4>Eco-Friendly & Sustainable Options</h4>
                    <p>At DataMySite, we also care about the environment. We offer eco-friendly printing inks and recyclable vinyl options for clients who prefer sustainable advertising materials — helping your brand stand out responsibly.</p>
                </div>
                <div class="col-lg-6">
                    <h4>Get Your Brand Moving with DataMySite</h4>
                    <p>
                        Whether you’re launching a new product or building long-term awareness, Bus Wrapping Advertising in Dubai is the most effective way to keep your brand in motion.
                        <br>
                        Let your brand travel through the city — turning every street into your marketplace.
                        <br><br>
                        Contact DataMySite Advertising today to start your Bus Wrapping Campaign in Dubai, UAE.
                    </p>
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

        <section id="service-cards" class="blog-section section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How long does a bus wrap last?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With proper installation and maintenance, a bus wrap can last 6–12 months, even in Dubai’s weather.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Is bus advertising approved by RTA?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. All bus advertisements must be RTA-approved. DataMySite handles all approval processes for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I advertise on multiple buses at once?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We manage fleet campaigns across Dubai and UAE for maximum coverage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What’s the cost of bus wrapping in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Costs depend on coverage type (full, partial, or rear wrap), bus count, and campaign duration.
                                        <br>
                                        Typical rates start from AED 8,000 per bus/month.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Do you handle design and printing?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes — we provide complete creative design, printing, and installation services using high-quality materials.</p>
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