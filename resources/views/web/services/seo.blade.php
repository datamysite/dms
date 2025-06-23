@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug).'.png'}}');">
            <div class="container">
              <h1>{{$service->name}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li class="current">{{$service->name}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->


        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <section id="service-cards" class="blog-section section">

                  <div class="container">

                    <div class="row gy-4 first-row">

                      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                            
                            <div class="post-container">
                                <h4 class="web-heading2">Leading SEO Company in Dubai Helping You Rank & Grow</h4>
                                <p>
                                    Looking for a trusted SEO agency in Dubai to skyrocket your search rankings and traffic? At DataMySite, we deliver result-driven SEO services tailored for agencies, startups, and established businesses in the UAE.
                                    <br>
                                    Whether you want to dominate Google SERPs, increase leads, or improve online visibility — we’re the best SEO company in Dubai to get it done. Our strategic SEO packages are designed to meet your goals while complying with the latest Google algorithm updates.
                                </p>
                                <h4 class="web-heading2">Why Choose an SEO Agency Like DataMySite?</h4>
                                <p>As a business in one of the world’s most competitive markets, you need a performance-focused SEO company in Dubai with deep local insight and global best practices.</p>
                                <ul>
                                    <li>We specialize in local SEO in Dubai</li>
                                    <li>100% white-hat strategies (Google-approved)</li>
                                    <li>SEO tailored for your industry, market, and location</li>
                                    <li>Transparent, data-backed reporting</li>
                                    <li>Affordable and flexible SEO packages for all business sizes</li>
                                </ul>
                            </div> 

                  </div>

                </section>


                <section id="service-cards" class="blog-section section section-striped" style="margin-top:-50px">

                  <div class="container">

                    <div class="row gy-4 first-row">

                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="row services gy-4">

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Keyword Research & Competitive Analysis</h4>
                                      <p class="description">We begin by identifying the most valuable search terms your audience uses. Whether you're a small business or a digital agency, we customize keywords based on your niche and goals.</p>
                                      <ul>
                                          <li>Location-based keyword targeting (e.g., “SEO services near me”)</li>
                                            <li>Competitor gap analysis in the Dubai market</li>
                                            <li>High-intent, conversion-focused terms for better ROI</li>
                                      </ul>
                                    </div>
                                  </div>
                                  

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">On-Page SEO Optimization</h4>
                                      <p class="description">As a seasoned SEO agency, we fine-tune every element of your website for maximum visibility on Google and other search engines.</p>
                                      <ul>
                                          <li>Title tags, meta descriptions, headers (H1-H6)</li>
                                            <li>Optimized content structure and keyword placement</li>
                                            <li>Internal linking, URL slugs, and multimedia SEO</li>
                                            <li>Mobile-friendly and Core Web Vitals checks</li>
                                      </ul>
                                    </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Technical SEO for Agencies & Businesses</h4>
                                      <p class="description">Our developers work closely with SEO experts to identify and fix backend issues affecting performance and crawlability.</p>
                                      <ul>
                                          <li>XML sitemaps, Robots.txt configuration</li>
                                            <li>Page speed optimization</li>
                                            <li>Broken link & 404 error fixes</li>
                                            <li>Structured data & schema implementation</li>
                                      </ul>
                                    </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Content Creation with Built-in SEO</h4>
                                      <p class="description">Content is the foundation of search engine rankings. Our SEO agency in Dubai creates compelling content that ranks and converts.</p>
                                      <ul>
                                          <li>Blog writing & on-page service content</li>
                                            <li>Landing pages for local SEO Dubai</li>
                                            <li>Content optimized for both readers and algorithms</li>
                                            <li>Focused on E-E-A-T (Experience, Expertise, Authority, Trust)</li>
                                      </ul>
                                    </div>
                                  </div>


                                  <div class="col-lg-12 col-md-12 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Local SEO Agency in Dubai</h4>
                                      <p class="description">If your business targets a specific location like Business Bay or JLT, our local SEO services make sure you appear in “near me” searches, Google Maps, and the local 3-pack.</p>
                                      <ul>
                                          <li>Google Business Profile (GMB) optimization</li>
                                            <li>Local citations and listings</li>
                                            <li>Location-specific landing pages</li>
                                            <li>Review management and NAP consistency</li>
                                      </ul>
                                    </div>
                                  </div>
                            </div>

                            <h5 class="text-center">Need a professional website? <a href="javascript:void(0)" class="open-newsletter">Get Started Today</a></h5>
                        </div>
                    </div>

                  </div>

                </section> 
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h3>Who We Serve</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-5">
                            <div class="web-step-img">
                                <img src="{{URL::to('/public/5-steps-a.png')}}">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <h5>As a versatile web development company in Dubai, we work with:</h5>
                            <br>
                            <ul>
                                <li>Real Estate Agencies</li>
                                <li>Clinics & Healthcare Providers</li>
                                <li>Restaurants & Cafés</li>
                                <li>E-Commerce Stores</li>
                                <li>Educational Institutions</li>
                                <li>Travel & Tourism Agencies</li>
                                <li>Startups & Corporate Enterprises</li>
                            </ul>
                            <p>Whether you're a local entrepreneur or an international brand expanding to the UAE, we offer web development services that match your needs and goals.</p>
                            <br>

                            <h5>Book Your Free Strategy Call — <a href="javascript:void(0)" class="open-newsletter">Let’s Bring Your Vision to Life</a></h5>
                        </div>
                    </div>

                </div>
            </div>

          </div>

        </section>

        

         <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h3>Why DataMySite is the Best SEO Company in Dubai</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-4">
                          <h4>Trusted by Agencies & Local Businesses</h4>
                            <p>We're the go-to SEO company in Dubai for businesses looking to grow organically and sustainably.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>Affordable SEO Packages</h4>
                            <p>Choose from customized SEO packages that meet your budget without sacrificing quality.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>Proven Track Record</h4>
                            <p>Our work has helped dozens of UAE-based clients rank on Page 1 for competitive keywords.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>Expertise in Local SEO</h4>
                            <p>As a local SEO agency in Dubai, we understand the search behavior of your target market and how to tap into it.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>End-to-End SEO Strategy</h4>
                            <p>From keyword research to link building and analytics — we handle it all under one roof.</p>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>

         <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h3>Our SEO Process</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-4">
                          <h4>Website & Market Audit</h4>
                            <p> We analyze your current SEO status and competitors.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>Strategy Planning</h4>
                            <p> Identify keywords like “SEO agency Dubai”, prioritize goals, and build a roadmap.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>On-Page & Technical Fixes</h4>
                            <p>We optimize your existing content and website structure.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>Content & Link Building</h4>
                            <p>Develop keyword-rich, high-quality content and authority backlinks.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>Local SEO Enhancements</h4>
                            <p>For clients targeting Dubai neighborhoods, we optimize local listings and maps visibility.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>Monthly Reporting & Growth Tracking</h4>
                            <p> Get transparent, easy-to-digest insights.</p>
                        </div>
                    </div>


                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How long does it take to rank on Google?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most clients see ranking improvements in 3–6 months, depending on keyword difficulty and competition in Dubai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Do you provide SEO for other agencies?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we offer SEO for agencies looking for white-label or outsourcing solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>What makes you the best SEO company in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We combine local market understanding with expert-level SEO strategy and custom SEO packages — all focused on real results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>What’s included in your SEO packages?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our SEO packages include on-page SEO, technical fixes, content creation, link building, and monthly reporting — all tailored to your goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>How do I know if I need local SEO?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>If you're targeting customers in a specific Dubai area (e.g., JLT, Marina, Downtown), local SEO Dubai is essential to appear in maps and local search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span>Can I switch from another SEO company to you?
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
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
                                <h4>Who Should Use Our SEO Services?</h4>
                                <ul>
                                    <li>Digital Agencies looking to outsource or scale with SEO for agencies</li>
                                    <li>Real Estate Firms in Dubai needing local visibility</li>
                                    <li>Healthcare Providers wanting to dominate Google Maps</li>
                                    <li>E-commerce businesses needing better category rankings</li>
                                    <li>Startups & SMEs needing budget-friendly SEO packages</li>
                                    <li>Any business searching for “SEO services near me” with a Dubai focus</li>

                                </ul>

                                <h5>Want a website that actually drives business? <br><a href="javascript:void(0)" class="open-newsletter">Let’s Talk</a>!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>
    </main>


@endsection