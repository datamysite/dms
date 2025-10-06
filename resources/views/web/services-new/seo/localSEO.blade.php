@extends('web.includes.master')

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
                        <h2>Get Discovered by Customers</h2>
                        <h4>Near You with DataMySite's Local SEO Solutions</h4>
                        <br>
                        <p>
                            If you're a business targeting customers in Dubai, showing up in local search results is essential. At DataMySite, we specialize in local SEO services in Dubai that help you appear where it matters most — Google Maps, “near me” searches, and the top of local search results.
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

                <div class="col-lg-6">
                    <iframe class="service-iframe inf-iframe" src="https://www.youtube.com/embed/Kbxm_z_ScYU?si=589eks2setWiGTUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Local SEO Matters for Your Business in Dubai</h4>
                    <p>
                        In a fast-paced city like Dubai, users rely on Google to find nearby services. If you're not ranking locally, you’re missing real customers.
                    </p>
                    <ul>
                        <li>76% of users who search for something nearby visit a business within 24 hours</li>
                        <li>Over 50% of mobile searches include location-based intent</li>
                        <li>Being visible on Google Maps means instant credibility and trust</li>
                    </ul>
                    <p>As a leading local SEO agency in Dubai, we help small businesses, service providers, and retail locations attract more foot traffic and calls from people nearby — right when they’re searching for what you offer.</p>
                    <br>
                    <h5>Book Your Free SEO Audit — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                </div>
            </div>

          </div>

        </section>


        <div class="section-striped">
                @include('web.includes.elements.clients')
        </div>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>


         <section id="service-cards" class="blog-section section-striped section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Our Local SEO Services in Dubai Include:</h3>
                    <p>As your trusted local SEO agency Dubai, we provide a full suite of services to boost your visibility in specific areas of the city like Business Bay, JLT, Marina, Deira, and more.</p>
                    <br>

                    <div class="row services seo-block gy-4">
                        <div class="col-lg-4">
                          <h4><i class="bi bi-google"></i> Google Business Profile (GMB)</h4>
                          <p>We set up, optimize, and manage your Google Business Profile to rank in the 3-pack and local maps.</p>
                          <ul>
                            <li>NAP (Name, Address, Phone) consistency</li>
                            <li>Business categories, photos, hours & services</li>
                            <li>Local keyword optimization</li>
                            <li>Post updates, Q&A management & review replies</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-easel"></i> Local Keyword Research</h4>
                          <p>We target high-intent, local keywords that bring ready-to-buy traffic to your site and GMB listing</p>
                          <ul>
                            <li>Example: "plumber near me Dubai", "best dental clinic in JLT"</li>
                            <li>Area-specific targeting for Dubai districts</li>
                            <li>Service + location keyword pairing</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-file-earmark"></i> Location Landing Pages</h4>
                          <p>If you serve multiple Dubai locations, we create SEO-optimized landing pages for each area to dominate search.</p>
                          <ul>
                            <li>Custom content for each location</li>
                            <li>Geo-specific SEO meta tags</li>
                            <li>Embedded Google Maps & schema markup</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-list-stars"></i> Local Citations & Business Listings</h4>
                          <p>We build and manage your listings across Dubai-based directories to boost trust and local SEO authority.</p>
                          <ul>
                            <li>Listing on high-quality UAE directories</li>
                            <li>NAP consistency across the web</li>
                            <li>Manual submissions and updates</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-body-text"></i> Localized Content Strategy</h4>
                          <p>Our SEO content writers create blogs and service pages that target location-based search intent.</p>
                          <ul>
                            <li>"Best [your service] in Dubai" style articles</li>
                            <li>Locally optimized blogs and FAQs</li>
                            <li>Content optimized for mobile search</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-stars"></i> Online Reviews & Reputation</h4>
                          <p>We help you get and manage customer reviews that improve rankings and build trust.</p>
                          <ul>
                            <li>Review generation strategies</li>
                            <li>Monitor and respond to reviews</li>
                            <li>Embed testimonials on your site</li>

                          </ul>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>

         <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Who Needs Local SEO Services?</h3>
                    <p>Our local SEO services in Dubai are ideal for:</p>

                    <div class="row services seo-need-block gy-4 mt-0">
                        <div class="col-lg-3 filled">
                          <i class="bi bi-hospital"></i>
                          <h4>Clinics, Spas, Salons</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-heart-pulse"></i>
                          <h4>GYM</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-shop-window"></i>
                          <h4>Restaurants & Cafes</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-house-heart"></i>
                          <h4>Real Estate Agencies</h4>
                        </div>
                    </div>
                    <div class="row services split-block seo-need-block gy-4 mt-0">
                        <div class="col-lg-3">
                          <i class="bi bi-truck-flatbed"></i>
                          <h4>Transportation Businesses</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-tools"></i>
                          <h4>Home Services</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-capsule"></i>
                          <h4>Dental, and Medical Practices</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-shop"></i>
                          <h4>Retail Shops, Grocery Stores</h4>
                        </div>
                    </div>
                    <br>
                    <p>If your business relies on local customers — <strong>local SEO is a must</strong>.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section-striped section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite as Your Local SEO Agency in Dubai?</h4>
                    <p>At DataMySite, we combine deep local market knowledge with proven SEO strategies to help your business rank higher in Dubai’s competitive search landscape. From optimizing your Google Business Profile to targeting location-specific keywords, we ensure more visibility, more traffic, and more local customers for your brand.</p>
                    <br>

                    <ul>
                      <li>Dubai-based team with local market expertise</li>
                      <li>Proven track record of GMB & map rankings</li>
                      <li>Custom strategies for different industries</li>
                      <li>Transparent monthly reporting</li>
                      <li>Affordable and scalable SEO packages</li>                    
                    </ul>
                    
                    <br>
                    <p>We don’t just claim to be the best — we back it up with data and results.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
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



        <section id="service-cards" class="blog-section section section-striped faq-new-section">

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
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>What is local SEO and how is it different from regular SEO?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Local SEO focuses on ranking your business in location-specific searches, like “restaurant near me” or “best plumber in Dubai,” while general SEO targets broader search visibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>How long does it take to rank locally in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most businesses start seeing results in 1–3 months, depending on competition and consistency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>Can you help my business show up in Google Maps?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Our local SEO service Dubai includes Google Business Profile optimization, the key to appearing in Maps and the 3-pack.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">&nbsp;</span>Do I need a physical address to do local SEO?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Ideally, yes. Having a verifiable Dubai location helps, but service-area businesses can still rank with the right setup.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">&nbsp;</span>What’s the cost of local SEO in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our packages are flexible. Contact us for a custom quote based on your business type, goals, and service areas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">&nbsp;</span>Can I switch from another SEO company to you?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely! We start with a full audit, fix what’s lacking, and then implement our SEO agency Dubai strategy from there.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h3>Don’t Settle for an Average Website — Let’s Build Something Powerful</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>Whether you need a sleek corporate site, a robust e-commerce platform, or a lead-generation powerhouse, DMS delivers websites that work as hard as you do.</p>

                            <p><strong>Your journey starts with free consultation.</strong></p>

                            @include('web.includes.elements.contact')
                        </div>

                        <div class="col-lg-5">

                            <div class="web-form-div">
                                <h4>What You Get with Our Local SEO Packages</h4>
                                <ul>
                                    <li>GMB setup & optimization</li>
                                    <li>Keyword research & targeting</li>
                                    <li>Citation building & management</li>
                                    <li>Local content writing</li>
                                    <li>Review building & monitoring</li>
                                    <li>Monthly reports with ranking updates</li>

                                </ul>

                                <h5>Want a website that actually drives business? <br><a href="javascript:void(0)" class="scroll-up">Let’s Talk</a>!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>
    </main>


@endsection