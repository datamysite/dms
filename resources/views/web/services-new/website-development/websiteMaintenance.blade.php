@extends('web.includes.master')

@section('content')

    <main class="main seo-main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug).'.png'}}');">
            <div class="container">
              <h1>{{$subservice->name}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li><a href="{{URL::to('/'.$service->slug)}}">{{$service->name}}</a></li>
                  <li class="current">{{$subservice->name}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->


        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">
              <div class="col-lg-8" style="margin-top:0px;">
                <div class="post-container">
                    <h2 class="web-heading2">Keep Your Website Fast, Secure, and Fully Functional – 24/7</h2>
                    <p>
                        At <strong>DataMySite</strong>, we provide professional and affordable <strong>website maintenance services in Dubai</strong> to keep your online presence running smoothly. From regular updates and security patches to performance tuning and content changes — we take care of everything so you can focus on growing your business.
                        <br><br>
                        Our team ensures your website stays up-to-date, secure, and fully functional across all devices and browsers. Whether it's fixing bugs, updating plugins, or adding new features, we offer flexible maintenance plans tailored to your business needs—so your website always reflects the best version of your brand.
                    </p>
                </div> 
              </div>
              <div class="col-lg-4">
                <div class="aside-form">
                  <h3>Want to know more?</h3>
                  <h4>Ask us anything</h4>
                  <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                      @csrf
                      <input type="text" name="name" placeholder="Name" class="form-control" required>
                      
                      <input type="tel" name="mailphone" id="phone-field2" placeholder="Phone" class="form-control" required>
                      <input type="hidden" name="phone" id="fullphone-field2" required="">
                      <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                      
                      <input type="hidden" name="service" value="Website Development">
                      
                      <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
                      
                      <button class="btn btn-theme">Submit Your Enquiry</button>
                      <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                  </form>
              </div>
              </div>
            </div>
          </div>

        </section>


        <section id="service-cards" class="blog-section section  section-striped">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <div class="row services gy-4">
                        <div class="col-lg-6">
                            <h3>Why Website Maintenance Matters</h3>
                            <p>
                                Your website is your digital storefront. If it’s slow, broken, or outdated, you're losing trust, traffic, and revenue. Routine maintenance ensures:
                            </p>
                            <ul>
                                <li>Fast loading times</li>
                                <li>No broken links or outdated content</li>
                                <li>Security from hackers & malware</li>
                                <li>Updated plugins, themes, and CMS versions</li>
                                <li>Smooth mobile & browser performance</li>
                                <li>Better SEO and user experience</li>
                            </ul>
                            <br>

                            <h5>Book Your Free Consultation — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <img src="{{URL::to('/public/dev1.png')}}" alt="Why Website Maintenance Matters" width="100%">
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
                    <h3>Our Website Maintenance Services Include:</h3>
                    <p>Our website maintenance services include regular content updates, security monitoring, bug fixes, speed optimization, plugin and software updates, backup management, and technical support—ensuring your website stays fast, secure, and up-to-date at all times.</p>
                    <br>

                    <div class="row services seo-block gy-4">
                        <div class="col-lg-4">
                          <h4><i class="bi bi-braces"></i> Regular Updates & Upgrades</h4>
                          <ul>
                            <li>CMS updates (WordPress, Shopify, etc.)</li>
                            <li>Theme and plugin upgrades</li>
                            <li>Compatibility testing after each update</li>
                            <li>Core system version checks (PHP, MySQL)</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-shield-lock"></i> Security Monitoring & Protection</h4>
                          <ul>
                            <li>Firewall setup and malware scans</li>
                            <li>Security patch implementation</li>
                            <li>SSL renewal & HTTPS monitoring</li>
                            <li>Backup scheduling & disaster recovery</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-speedometer2"></i> Performance Optimization</h4>
                          <ul>
                            <li>Speed tuning & image compression</li>
                            <li>Broken link checks and fixes</li>
                            <li>Code cleanup (CSS, JS, HTML)</li>
                            <li>Core Web Vitals optimization</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-file-earmark-break"></i> Content & Design Updates</h4>
                          <ul>
                            <li>Upload new products, blogs, banners</li>
                            <li>Add/remove web pages or sections</li>
                            <li>Fix layout issues and broken elements</li>
                            <li>UI improvements based on user feedback</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-list-check"></i> Testing & Troubleshooting</h4>
                          <ul>
                            <li>Monthly browser and device testing</li>
                            <li>Form validation and email testing</li>
                            <li>Bug tracking and quick resolution</li>
                            <li>Uptime & error log monitoring</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-headset"></i> Reporting & Support</h4>
                          <ul>
                            <li>Monthly maintenance reports</li>
                            <li>Real-time issue alerts</li>
                            <li>Priority support via email or WhatsApp</li>
                            <li>Consultation for upgrades and redesigns</li>

                          </ul>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section-striped section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Website Platforms We Support</h3>
                    <p>We support a wide range of website platforms, including WordPress, Shopify, Magento, WooCommerce, Wix, Squarespace, and custom-built websites. No matter the platform, our team ensures smooth performance, regular updates, and expert technical support.</p>
                    <br>

                    <div class="row services seo-need-block gy-4">
                        <div class="col-lg-2">
                            <img src="{{URL::to('/public/tech-logo1.png')}}" alt="wordpress" width="100%">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{URL::to('/public/tech-logo2.png')}}" alt="shopify" width="100%">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{URL::to('/public/tech-logo3.png')}}" alt="laravel" width="100%">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{URL::to('/public/tech-logo4.png')}}" alt="wix" width="100%">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{URL::to('/public/tech-logo5.png')}}" alt="squarespace" width="100%">
                        </div>
                        <div class="col-lg-2">
                            <img src="{{URL::to('/public/tech-logo6.png')}}" alt="magento" width="100%">
                        </div>

                    </div>
                </div>
            </div>

          </div>

        </section>

        
        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <h3>Why Choose DataMySite?</h3>
                    <p>We combine technical expertise, creative design, and strategic thinking to deliver digital solutions that drive real results. Whether it's website development, SEO, or ongoing maintenance, our team is committed to quality, transparency, and customer satisfaction—making us a trusted partner for businesses looking to grow online.</p>
                    <br>

                    <ul>
                      <li>UAE-based team, fast response times</li>
                      <li>Dedicated account manager for support</li>
                      <li>SEO-aware maintenance practices</li>
                      <li>Hands-off solution — we do it all for you</li>
                      <li>Affordable, scalable packages for all business types</li>                    
                    </ul>
                    
                    <br>
                    <p>We don’t just claim to be the best — we back it up with data and results.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <img src="{{URL::to('/public/local-seo2.jpg')}}" alt="Why Choose DataMySite as Your Local SEO Agency in Dubai?" width="100%">
                </div>
                <div class="col-lg-12">
                  
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>Why do I need a maintenance plan if my site is already finished?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Websites require regular "Health Checks"—including plugin updates, security patches, and database optimization—to prevent slow speeds or hacking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>What happens if my website goes down?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our maintenance plans include 24/7 uptime monitoring. If your site goes offline, our team is alerted immediately to bring it back up.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Do you offer content updates as part of the monthly fee?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most of our plans include a set number of "Support Hours" which you can use for adding new blogs, changing banners, or updating staff bios.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>Do you perform regular backups of my data?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we perform daily off-site backups, so even in a worst-case scenario, we can restore your entire website with a single click.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>How does maintenance help with my Google ranking?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Google penalizes sites that are slow or have broken links. Regular maintenance ensures your "Core Web Vitals" remain high, keeping you in Google's good books.</p>
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
                    <h3>Keep Your Website Healthy, Secure & High-Performing</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>Don’t let your website become outdated or vulnerable. Trust <strong>DataMySite</strong> for expert <strong>website maintenance services in Dubai</strong>, whether it’s WordPress, Shopify, or a custom-built platform.</p>

                            <p><strong>Your journey starts with free consultation.</strong></p>

                            @include('web.includes.elements.contact')
                        </div>

                        <div class="col-lg-5">

                            <div class="web-form-div">
                                <h4>Use Cases We Excel At:</h4>
                                <ul>
                                    <li>Business websites & corporate portals</li>
                                    <li>E-commerce platforms & marketplaces</li>
                                    <li>SaaS & web-based applications</li>
                                    <li>Membership & booking systems</li>
                                    <li>Custom dashboards and admin panels</li>
                                    <li>API integrations and cross-platform apps</li>

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

    <div id="particles-js"></div>

@endsection
@section('addStyle')
    <link rel="stylesheet" media="screen" href="{{URL::to('/public/assets/particles.js-master')}}/css/style.css">
@endsection
@section('addScript')

    <!-- scripts -->
    <script src="{{URL::to('/public/assets/particles.js-master')}}/particles.js"></script>
    <script src="{{URL::to('/public/assets/particles.js-master')}}/js/app.js"></script>

    <!-- stats.js -->
    <script src="{{URL::to('/public/assets/particles.js-master')}}/js/lib/stats.js"></script>
    <script>
      var count_particles, stats, update;
      stats = new Stats;
      stats.setMode(0);
      stats.domElement.style.position = 'absolute';
      stats.domElement.style.left = '0px';
      stats.domElement.style.top = '0px';
      document.body.appendChild(stats.domElement);
      count_particles = document.querySelector('.js-count-particles');
      update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
          count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>
@endsection