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
                        <h2>High-Impact Bus Stop Wrap</h2>
                        <h4>campaigns across Dubai and the UAE</h4>
                        <br>
                        <p>Whether it’s commuters waiting for buses in Business Bay, Jumeirah, Downtown, or Deira, your brand can dominate the view with large, creative, and high-visibility wraps that make people stop, look, and remember.</p>
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
                    <h4>What is Bus Stop Wrap Advertising?</h4>
                    <p>
                        Bus stop wrap advertising involves covering bus shelters and surrounding structures with printed graphics or digital visuals that promote your brand. It’s a static yet high-visibility form of outdoor advertising, positioned in key public transport zones where thousands of people pass by or wait daily.
                        <br><br>
                        Each bus stop wrap can be customized to include side panels, back panels, seats, and roof branding, turning the space into a mini outdoor showroom for your message.
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
                    <h4>Why Choose Bus Stop Advertising in Dubai?</h4>
                    <p>
                        Dubai’s public transportation system, managed by the RTA, serves millions of commuters annually. Bus stops are located in strategic, high-traffic areas — near malls, offices, residential communities, and metro stations — providing your brand with round-the-clock visibility.
                        <br><br>
                        When placed strategically, bus stop wraps can engage drivers, pedestrians, and commuters simultaneously, making them one of the most effective static advertising formats in Dubai.
                        <br><br>
                        <strong>Key Advantages:</strong>

                    </p>
                    <ul>
                        <li><strong>High Daily Footfall</strong>: Thousands of people interact with bus shelters every day.</li>
                        <li><strong>Extended Viewing Time</strong>: Commuters spend several minutes waiting, giving your ad lasting exposure.</li>
                        <li><strong>Cost-Effective</strong>: Long-term visibility at a fraction of digital billboard costs.</li>
                        <li><strong>Customizable</strong>: Choose full or partial wraps to suit your campaign design.</li>
                        <li><strong>Strategic Locations</strong>: Near offices, shopping areas, residential zones, and landmarks.</li>
                        <li><strong>24/7 Brand Exposure</strong>: Your ad is visible day and night to both commuters and passing vehicles.</li>
                    </ul>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image62.png')}}" width="100%" alt="Why choose us">
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
                    <img src="{{URL::to('/public/section-images/image63.png')}}" class="flyer-img" width="100%" alt="Flyers that find the right hands">
                </div>
                <div class="col-lg-8">
                    <h4>Types of Bus Stop Wrap Advertising</h4>
                    <p>At DataMySite Advertising, we provide a full range of customized bus shelter advertising options to help you reach your target audience effectively.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Full Bus Stop Wrap
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse show" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A full wrap covers the entire bus shelter — including panels, benches, and sometimes even the roof. This format gives your brand maximum visual dominance and turns the bus stop into a branded experience zone.
                                        <br>
                                        <strong>Best For:</strong>
                                    </p>
                                    <ul>
                                        <li>New product launches</li>
                                        <li>Brand awareness campaigns</li>
                                        <li>Real estate and retail promotions</li>
                                    </ul>
                                    <p><strong>Benefits:</strong></p>
                                    <ul>
                                        <li>Complete brand takeover of the space</li>
                                        <li>Perfect for long-term exposure</li>
                                        <li>High visual impact and recall</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="true" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Partial Bus Stop Wrap
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A partial wrap covers selected panels or sections of the bus shelter — such as side panels or back walls — providing an economical yet impactful way to advertise.
                                        <br>
                                        <strong>Best For:</strong>
                                    </p>
                                    <ul>
                                        <li>Short-term promotions</li>
                                        <li>Seasonal sales or offers</li>
                                        <li>Local brand activations</li>

                                    </ul>
                                    <p><strong>Benefits:</strong></p>
                                    <ul>
                                        <li>Cost-effective option</li>
                                        <li>Quick installation and removal</li>
                                        <li>Flexible design options</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="true" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Digital Bus Stop Panels (DOOH)
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Modern bus shelters in Dubai often feature digital LED panels that allow animated and rotating ads. This digital-out-of-home (DOOH) format combines technology with visibility, making your campaign more engaging.
                                        <br>
                                        <strong>Best For:</strong>   
                                    </p>
                                    <ul>
                                        <li>Tech brands</li>
                                        <li>Retail and e-commerce promotions</li>
                                        <li>Time-sensitive or event-based campaigns</li>

                                    </ul>
                                    <p><strong>Benefits:</strong></p>
                                    <ul>
                                        <li>Eye-catching dynamic content</li>
                                        <li>Multiple ads can rotate in one spot</li>
                                        <li>Easy to update remotely</li>

                                    </ul>
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
                    <h4>Why Bus Stop Wrap Advertising Works</h4>
                    <br>
                    <ol>
                        <li>
                            <strong>Daily Exposure to High-Intent Audiences</strong><br>
                            Commuters are often local residents or employees within the area — making bus stop wraps ideal for businesses looking to attract nearby customers.
                        </li>
                        <li>
                            <strong>Constant Visibility</strong><br>
                            Unlike digital ads that disappear after a few seconds, your bus stop ad remains visible 24/7, delivering continuous impressions.
                        </li>
                        <li>
                            <strong>Creative Flexibility</strong><br>
                            From 3D elements and lighting effects to interactive QR codes, bus stop wraps allow endless creative possibilities.
                        </li>
                        <li>
                            <strong>Long-Term Value</strong><br>
                            Durable materials ensure that your branding lasts for months with minimal maintenance, maximizing your investment.
                        </li>
                    </ol>
                    <br>
                    <h4>Strategic Bus Stop Advertising Locations in Dubai</h4>
                    <p>
                        We manage bus stop wrap campaigns across prime RTA-approved locations throughout Dubai, including:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Sheikh Zayed Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Marina & JBR</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Deira & Bur Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Barsha</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Jumeirah</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Mirdif & Al Warqa</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Silicon Oasis</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai International City</span>


                        <br>
                        Each location is carefully selected to ensure your brand reaches the right audience demographics — professionals, families, tourists, and daily commuters.
                    </p>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image64.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible vertical-center">
                    <img src="{{URL::to('/public/section-images/image1.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Bus Stop Wrap Advertising?</h4>
                    <p>
                        At DataMySite Advertising, we bring years of expertise in outdoor and transit advertising — offering full-service solutions that include strategy, design, printing, installation, and reporting.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li>Creative concept development and 3D visualization</li>
                        <li>High-resolution design and vinyl printing</li>
                        <li>RTA approval and location selection</li>
                        <li>Professional installation and maintenance</li>
                        <li>Post-campaign reports and visibility analytics</li>

                    </ul>
                    <p>We partner with premium RTA-approved outdoor vendors to ensure your campaign meets the highest industry standards for quality and compliance.</p>
                    <br>
                    <h4>Industries That Benefit from Bus Stop Advertising</h4>
                    <p>Bus stop advertising in Dubai is versatile and effective for a wide range of industries, including:</p>
                    <ul>
                        <li>Retail & Shopping Malls</li>
                        <li>Restaurants & Cafés</li>
                        <li>Telecommunication Companies</li>
                        <li>Banks & Financial Institutions</li>
                        <li>Real Estate Developers</li>
                        <li>Healthcare & Clinics</li>
                        <li>Events & Exhibitions</li>
                        <li>Education & Training Institutes</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-6">
                    <h4>Creative Design & Quality Production</h4>
                    <p>
                        Your brand deserves to shine in every detail. Our in-house creative and printing teams use UV-resistant, weatherproof materials to withstand Dubai’s climate while maintaining vivid color and finish.
                        <br>
                        We ensure your campaign is visually consistent, on-brand, and strategically placed for maximum effectiveness..
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4>Eco-Friendly Bus Stop Advertising</h4>
                    <p>
                        We care about sustainability. Our eco-friendly printing options use recyclable vinyl and non-toxic inks — ideal for brands that value green marketing solutions.
                    </p>
                </div>

                <div class="col-lg-6">
                    <h4>Campaign Management and Reporting</h4>
                    <p>Our team manages every stage of the process:</p>
                    <ul>
                        <li><strong>Location Planning</strong> – Based on your target audience and campaign goals.</li>
                        <li><strong>Creative Design</strong> – Concept creation and mockups.</li>
                        <li><strong>Installation & Maintenance</strong> – Done by professionals with RTA compliance.</li>
                        <li><strong>Performance Reporting</strong> – Includes photos, coverage reports, and exposure data.</li>
                    </ul>
                    <p>With DataMySite, you get a transparent, measurable, and professionally managed campaign from start to finish.</p>
                </div>
                <div class="col-lg-6">
                    <h4>Get Started with Bus Stop Wrap Advertising in Dubai</h4>
                    <p>
                        Make your brand impossible to miss. Whether you want a full bus shelter wrap, digital panel, or strategic campaign across multiple locations, DataMySite Advertising has you covered.
                        <br>
                        We’ll help you design, plan, and execute a customized bus stop wrap campaign that connects with your audience where it matters most — in the heart of the city.
                        <br><br>
                        Contact us today to launch your Bus Stop Wrap Advertising Campaign in Dubai, UAE.E.
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
                                        <span class="badge">&nbsp;</span>How much does bus stop wrap advertising cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Prices depend on location, size, and campaign duration. On average, bus shelter wraps start from AED 5,000/month for partial wraps and AED 10,000/month for full wraps.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Are all bus stop advertisements approved by RTA?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. All outdoor and transit advertising in Dubai requires RTA approval. DataMySite manages all permissions and regulations for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I advertise on multiple bus stops at once?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we offer citywide and area-based campaigns across multiple RTA-approved shelters.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How long does installation take?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Installation usually takes 2–3 working days depending on the scope and creative complexity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can I use lighting or digital elements in my bus stop ad?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We offer backlit and digital (DOOH) options for premium visibility, especially at night.</p>
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