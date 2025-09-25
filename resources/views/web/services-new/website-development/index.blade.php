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
                                <h4 class="web-heading2">Your Trusted Web Design & Web Development Company in Dubai</h4>
                                <p>
                                    Looking for a web design company in Dubai that delivers stunning visuals, seamless functionality, and Google-ready performance? At DataMySite, we offer full-service web development services tailored for businesses across Dubai and the UAE.
                                    <br>
                                    We don’t just build websites — we create digital experiences that grow your brand, convert visitors, and generate revenue. From custom business websites to powerful e-commerce platforms, DataMySite is the best web design company in Dubai for businesses that want to thrive online.
                                </p>
                                <h4 class="web-heading2">Why a High-Performing Website Matters in Dubai’s Digital Market</h4>
                                <p>Dubai is one of the world’s fastest-growing tech and business hubs — and your website is the first impression many customers will have of you. Here’s why you need a professional website development company in Dubai:</p>
                                <ul>
                                    <li>94% of users form first impressions based on web design</li>
                                    <li>A slow or poorly structured website can cost you customers</li>
                                    <li>Mobile-first and SEO-friendly sites perform better on Google</li>
                                    <li>A well-designed website builds trust and credibility instantly</li>
                                </ul>
                                <br>
                                <h4 class="web-heading2">Our Website Design & Web Development Services</h4>
                                <p>As a leading web development company in Dubai, we offer end-to-end services from strategy to launch and ongoing support.</p>
                                <h6>Custom Web Design Services</h6>
                                <p>We create pixel-perfect, user-friendly designs that reflect your brand and engage your visitors.</p>
                                <ul>
                                    <li>Modern UI/UX design with intuitive navigation</li>
                                    <li>Responsive design for mobile, tablet & desktop</li>
                                    <li>Brand-aligned fonts, color schemes, and imagery</li>
                                    <li>Conversion-focused layouts and CTAs</li>
                                </ul>
                                <p>We position ourselves as the best web design company in Dubai by combining creativity with strategy — not just pretty websites, but websites that perform.</p>
                            </div> 

                  </div>

                </section>


                <section id="service-cards" class="blog-section section section-striped" style="margin-top: -50px;">

                  <div class="container">

                    <div class="row gy-4 first-row">

                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="row services gy-4">

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Full-Stack Web Development</h4>
                                      <p class="description">Our development team turns designs into fully functional, fast, and secure websites using the latest technologies.</p>
                                      <ul>
                                          <li>HTML5, CSS3, JavaScript, PHP, React, Laravel</li>
                                            <li>WordPress, Shopify, and other CMS integrations</li>
                                            <li>Custom development with backend logic and APIs</li>
                                            <li>Clean, scalable, SEO-ready code structure</li>
                                      </ul>
                                      <p>We are not just another website development company — we’re a strategic web development agency focused on digital growth.</p>
                                    </div>
                                  </div>
                                  

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">E-Commerce Website Development</h4>
                                      <p class="description">Sell smarter with a fast, mobile-optimized, and conversion-oriented e-commerce website.</p>
                                      <ul>
                                          <li>Shopify, WooCommerce, Magento platforms</li>
                                            <li>Custom cart, checkout, and payment integrations</li>
                                            <li>Product filtering, reviews, stock management</li>
                                            <li>Localized shopping experience for Dubai/UAE</li>
                                      </ul>
                                    </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Responsive & Mobile-First Design</h4>
                                      <p class="description">With more than 70% of users browsing on mobile in Dubai, we ensure your website performs perfectly across all devices.</p>
                                      <ul>
                                          <li>Cross-browser/device compatibility</li>
                                            <li>Touch-optimized UI/UX</li>
                                            <li>Mobile speed and performance tuning</li>
                                      </ul>
                                    </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Multilingual Website Support</h4>
                                      <p class="description">We offer bilingual website development to cater to Dubai’s diverse and multilingual population.</p>
                                      <ul>
                                          <li>RTL Arabic support and localization</li>
                                            <li>Easy language toggling</li>
                                            <li>SEO for both English and Arabic content</li>
                                      </ul>
                                    </div>
                                  </div>


                                  <div class="col-lg-12 col-md-12 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Website Maintenance Services</h4>
                                      <p class="description">We don’t disappear after launch. Our website maintenance services ensure your website stays fast, secure, and up-to-date.</p>
                                      <ul>
                                          <li>CMS/plugin updates</li>
                                            <li>Backup & recovery</li>
                                            <li>Speed checks and fixes</li>
                                            <li>Bug fixes and troubleshooting</li>
                                      </ul>
                                      <p>This sets us apart as a website development company that prioritizes long-term success, not just short-term delivery.</p>
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
                    <h3>Why Choose DataMySite as Your Web Development Partner?</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-4">
                          <h4>Local Market Expertise</h4>
                            <p>We know the cultural, design, and business preferences of users in Dubai.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>Design + Strategy</h4>
                            <p>We combine strong visual design with real business strategy for better ROI.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>SEO-Optimized Development</h4>
                            <p>Our websites are structured to rank — we integrate SEO best practices into every build.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>Scalable Solutions</h4>
                            <p>We build for the future — your site can grow with your business.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>Dedicated Support</h4>
                            <p>From consultation to launch and ongoing website maintenance services, we’ve got you covered.</p>
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
                    <h3>Our Web Design & Development Process</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-4">
                          <h4>Discovery & Strategy</h4>
                            <p>We assess your goals, audience, and competitors in the Dubai market.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>UI/UX Design</h4>
                            <p> Wireframes, mockups, and branding alignment for the perfect look.</p>
                        </div>

                        <div class="col-lg-4">
                          <h4>Web Development</h4>
                            <p>Coding, CMS setup, testing, and performance optimization.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>SEO & Launch</h4>
                            <p>Technical SEO setup + live deployment with analytics integration.</p>
                        </div>

                        
                        <div class="col-lg-4">
                          <h4>Maintenance & Support</h4>
                            <p>We keep your site running smoothly through our website maintenance services.</p>
                        </div>
                    </div>

                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How much does a website cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It depends on your requirements. A basic website starts at AED 2,500, while e-commerce and custom features increase the cost. Contact us for a free quote.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How long does it take to build a website?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most projects are completed within 2–4 weeks, depending on the complexity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Do you offer support after website launch?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! We offer ongoing website maintenance services including security, updates, and bug fixes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>What makes you the best web design company in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We combine stunning design with SEO, fast delivery, full transparency, and local market expertise — making us the go-to web development agency in Dubai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>Can you redesign an existing website?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely! We offer full redesign services to upgrade your outdated or underperforming website.</p>
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
                                <h4>Technologies We Use</h4>
                                <ul>
                                    <li><strong>Front-End</strong>: React, Bootstrap, Tailwind CSS</li>
                                    <li><strong>Back-End</strong>: PHP, Node.js, Laravel</li>
                                    <li><strong>CMS</strong>: WordPress, Shopify, Magento</li>
                                    <li><strong>E-commerce</strong>: WooCommerce, Shopify Plus</li>
                                    <li><strong>Hosting</strong>: AWS, SiteGround, cPanel</li>
                                    <li><strong>Security</strong>: SSL, CDN, firewall configurations</li>

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