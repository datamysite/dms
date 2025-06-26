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
              <div class="col-lg-7" style="margin-top:0px;">
                <div class="post-container">
                    <h2 class="web-heading2">Expert SEO Tech Support Services in Dubai</h2>
                    <p>
                        Is your website not ranking despite having content and backlinks? The issue might be technical. At <strong>DataMySite</strong>, we offer specialized SEO tech support to identify and fix the backend issues holding your site back from ranking on Google.
                        <br><br>
                        Whether you're facing indexing errors, slow load speeds, crawl issues, or Core Web Vitals warnings — our team of technical SEO experts in Dubai is equipped to handle it all. We conduct in-depth audits to identify and fix critical backend issues that may be affecting your website’s performance on search engines. With a strong focus on speed, mobile usability, and structured data, we ensure your site meets Google’s technical standards and delivers a seamless experience for users and bots alike.
                    </p>
                </div> 
              </div>
              <div class="col-lg-1"></div>
              <div class="col-lg-4">
                <div class="aside-form">
                  <h3>Want to know more?</h3>
                  <h4>Ask us anything</h4>
                  <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                      @csrf
                      <input type="text" name="name" placeholder="Name" class="form-control" required>
                      
                      <input type="tel" name="mailphone" id="phone-field2" class="form-control" required>
                      <input type="hidden" name="phone" id="fullphone-field2" required="">
                      <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                      
                      <input type="hidden" name="service" value="SEO Services">
                      
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
                        <div class="col-lg-4">
                            <img src="{{URL::to('/public/tech-support1.png')}}" alt="What is SEO Technical Support?" width="100%">
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <br><br>
                            <h2>What is SEO Technical Support?</h2>
                            <p>SEO Tech Support focuses on the technical health of your website — ensuring that search engines can crawl, index, and rank your content properly. Without a technically sound site, even the best content can go unnoticed by Google.</p>
                            <br>
                            <br>

                            <h5>Book Your Free SEO Audit — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>

                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Our Technical SEO Services Include:</h3>
                    <p>Our Technical SEO services cover site audits, error fixes, speed optimization, mobile responsiveness, and structured data to boost your site’s search performance.</p>
                    <br>

                    <div class="row services seo-need-block gy-4">
                        <div class="col-lg-3 filled">
                          <i class="bi bi-speedometer2"></i>
                          <h4>Site Speed Optimization</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-phone"></i>
                          <h4>Mobile-Friendliness & Responsive</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-diagram-3"></i>
                          <h4>Sitemap & Robots.txt Setup</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-link-45deg"></i>
                          <h4>Broken Links & Redirect Chains Fixes</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-google"></i>
                          <h4>Indexing & Crawling Issues</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-signpost"></i>
                          <h4>Schema Markup & Structured Data</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-browser-chrome"></i>
                          <h4>Canonicalization, HTTPS, and URL</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-graph-up-arrow"></i>
                          <h4>GSC & GA4 Setup & Monitoring</h4>
                        </div>
                    </div>
                    <br>
                    <p>If your business relies on local customers — <strong>local SEO is a must</strong>.</p>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section-striped section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Platforms We Support:</h3>
                    <p>We offer SEO support for a wide range of platforms, including WordPress, Shopify, Magento, Wix, Squarespace, and custom-built websites — ensuring seamless optimization no matter where your site is hosted.</p>
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
                    <h3>Why Choose DataMySite for Technical SEO in Dubai?</h3>
                    <p>At DataMySite, we specialize in resolving complex technical SEO challenges with precision and speed. Our Dubai-based team uses advanced tools and strategies to improve site health, boost rankings, and ensure long-term search engine visibility. With a focus on performance, compliance, and user experience, we help your website meet Google’s highest standards.</p>
                    <br>

                    <ul>
                      <li>Dubai-based tech SEO specialists</li>
                        <li>Fast turnaround time (within 72 hours for most fixes)</li>
                        <li>One-time fixes or monthly maintenance options</li>
                        <li>Google Search Console & error logs monitoring</li>
                        <li>Affordable plans for businesses of all sizes</li>                    
                    </ul>
                    
                    <br>
                    <p>We don’t just claim to be the best — we back it up with data and results.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <img src="{{URL::to('/public/local-seo2.jpg')}}" alt="Why Choose DataMySite for Technical SEO in Dubai?" width="100%">
                </div>
                <div class="col-lg-12">
                  
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What’s the difference between SEO and technical SEO?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>SEO includes content, links, and UX — but technical SEO focuses on website performance, crawlability, and Google accessibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can I get tech support for an existing SEO campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We can work alongside your content or SEO team as your backend support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Is this a one-time service or monthly?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We offer both. One-time audits/fixes or monthly technical SEO support packages.</p>
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
                                <h4>Results You Can Expect:</h4>
                                <ul>
                                    <li>Faster indexing & ranking</li>
                                    <li>Improved website loading speed</li>
                                    <li>Better Google Core Web Vitals scores</li>
                                    <li>Higher visibility in search results</li>
                                    <li>Improved mobile and desktop performance</li>

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