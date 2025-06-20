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
                <h2 class="post-title">About SEO Services</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <section id="service-cards" class="blog-section section">

                  <div class="container">

                    <div class="row gy-4 first-row">

                      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

                            <h2 class="web-heading">Launch Your Digital Presence with Impact</h2>
                            
                            <div class="post-container">
                                <h4 class="web-heading2">Website Development That Grows Your Business</h4>
                                <p>
                                    At DataMySite (DMS), we don’t just build websites — we engineer high-performing digital experiences designed to convert visitors into loyal customers. Whether you’re a startup, SME, or a growing enterprise, our expert team is here to turn your vision into a stunning, user-centric, results-driven website.
                                </p>
                                <h6>What We Do</h6>
                                <ul>
                                    <li>Custom Website Solutions </li>
                                    <li>E-Commerce Development</li>
                                    <li>Mobile-First, Responsive Design</li>
                                    <li>Easy-to-Manage CMS Integration</li>
                                    <li>SEO-Ready & Performance Optimized</li>
                                    <li>Secure, Scalable, and Future-Proof</li>
                                </ul>
                                <h5>
                                    Let’s build your future-ready website - <a href="javascript:void(0)" class="open-newsletter">Schedule Your Free Consultation</a>
                                </h5>
                            </div> 

                  </div>

                </section>


                <section id="service-cards" class="blog-section section section-striped">

                  <div class="container">

                    <div class="row gy-4 first-row">

                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-center">What You’ll Get with DMS Website Development</h3>
                            <br>

                            <div class="row services gy-4">

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-braces-asterisk" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Custom Website Solutions </h4>
                                      <p class="description">Every website we build is custom designed, not templated. We tailor every detail to reflect your brand, engage your audience, and meet your specific business goals.</p>
                                    </div>
                                  </div>
                                  <!-- End Service Item -->

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-cart" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">E-Commerce Development</h4>
                                      <p class="description">Want to start selling online or scale your store? We develop secure, scalable e-commerce platforms with smooth UX, mobile-ready layouts, and integrated payment systems.</p>
                                    </div>
                                  </div>
                                  <!-- End Service Item -->

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-phone" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Mobile-First, Responsive Design</h4>
                                      <p class="description">From smartphones to large screens, your website will look sharp and load fast on every device.</p>
                                    </div>
                                  </div>
                                  <!-- End Service Item -->

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-wordpress" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Easy-to-Manage CMS Integration</h4>
                                      <p class="description">Update your content without the tech stress. We integrate platforms like WordPress, Shopify, Webflow, or create custom CMS solutions tailored to your needs.</p>
                                    </div>
                                  </div>
                                  <!-- End Service Item -->

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-speedometer2" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">SEO-Ready & Performance Optimized</h4>
                                      <p class="description">Speed, structure, and SEO — all in one. We build sites that rank better, load faster, and keep visitors engaged.</p>
                                    </div>
                                  </div>
                                  <!-- End Service Item -->

                                  <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon flex-shrink-0"><i class="bi bi-graph-up-arrow" style="color: #f44d46;"></i></div>
                                    <div>
                                      <h4 class="title">Secure, Scalable, and Future-Proof</h4>
                                      <p class="description">Using the latest tech stacks and security best practices, we make sure your site is safe, scalable, and built to last.</p>
                                    </div>
                                  </div>
                                  <!-- End Service Item -->
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
                    <h3>Our Simple 5-Step Website Development Process</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-5">
                            <div class="web-step-img">
                                <img src="{{URL::to('/public/5-steps-a.png')}}">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <ul>
                                <li>
                                    <h6>Discovery & Strategy</h6>
                                    <p>
                                        We understand your goals, audience, and competition to align your digital vision with your business objectives.
                                    </p>
                                </li>

                                <li>
                                    <h6>Design & Prototyping</h6>
                                    <p>
                                        We turn ideas into visual reality with beautiful, user-friendly design mockups.
                                    </p>
                                </li>
                                
                                <li>
                                    <h6>Development</h6>
                                    <p>
                                        We bring your site to life using clean, scalable, and modern code.
                                    </p>
                                </li>
                                
                                <li>
                                    <h6>Testing & QA</h6>
                                    <p>
                                        We test every page, button, and form to ensure smooth performance across browsers and devices.
                                    </p>
                                </li>
                                
                                <li>
                                    <h6>Launch & Ongoing Support</h6>
                                    <p>
                                        We go live — and stay with you. Our team provides post-launch support to ensure your site performs day in and day out.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h5>Book Your Free Strategy Call — <a href="javascript:void(0)" class="open-newsletter">Let’s Bring Your Vision to Life</a></h5>
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
                                <h4>Why Businesses Trust DMS</h4>
                                <ul>
                                    <li>10+ Years of Web Development Experience</li>
                                    <li>End-to-End Project Management</li>
                                    <li>Creative Meets Technical Brilliance</li>
                                    <li>Transparent Communication & On-Time Delivery</li>
                                    <li>Ongoing Maintenance & Growth Support</li>

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