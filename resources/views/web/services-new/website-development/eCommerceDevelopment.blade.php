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
                    <h2 class="web-heading2">Scalable, Secure & Conversion-Focused Online Stores</h2>
                    <p>
                        At <strong>DataMySite</strong>, we build high-performing, user-friendly <strong>e-commerce websites</strong> designed to convert visitors into customers. Whether you’re launching a new online store or upgrading your current platform, we deliver fully customized <strong>e-commerce website development services in </strong> that meet your business goals.
                        <br><br>
                        From sleek, high-converting product pages to seamless and secure checkout experiences, our team blends design, development, and strategic thinking to create powerful eCommerce solutions. We focus on optimizing every step of the customer journey to help you boost sales, enhance user engagement, and grow your brand — both <strong>locally</strong> and <strong>globally</strong>.


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
                            <h3>Why Your Business Needs a Custom E-Commerce Website</h3>
                            <p>
                                The UAE’s online shopping market is booming. With increasing competition, having a professional, fast, and mobile-friendly e-commerce website is no longer optional — it’s essential.
                                <br><br>
                                With <strong>DataMySite</strong>, your e-commerce site will:
                            </p>
                            <ul>
                                <li>Load quickly across devices</li>
                                <li>Offer a seamless shopping experience</li>
                                <li>Be fully optimized for Google (SEO)</li>
                                <li>Convert more visitors into buyers</li>
                                <li>Grow with your inventory and customer base</li>
                            </ul>
                            <br>

                            <h5>Book Your Free Consultation — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <img src="{{URL::to('/public/full-stack1.png')}}" alt="What is Full-Stack Development?" width="100%">
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
                    <h3>Our E-Commerce Development Services Include:</h3>
                    <p>Our e-commerce development services include end-to-end solutions such as custom storefront design, shopping cart integration, secure payment gateways, product management systems, mobile optimization, and ongoing maintenance — everything you need to launch, run, and scale a successful online store.</p>
                    <br>

                    <div class="row services seo-block gy-4">
                        <div class="col-lg-4">
                          <h4><i class="bi bi-braces"></i> Custom Store Design</h4>
                          <p>We design visually stunning and user-centric e-commerce websites aligned with your brand.</p>
                          <ul>
                            <li>Responsive design (mobile-first)</li>
                            <li>Product-focused layouts</li>
                            <li>UX/UI tailored for higher conversions</li>
                            <li>Brand-aligned design systems</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-code-slash"></i> E-Commerce Platform</h4>
                          <p>Whether you prefer hosted or custom-built solutions, we develop on the world’s leading platforms:</p>
                          <ul>
                            <li>Shopify</li>
                            <li>WooCommerce (WordPress)</li>
                            <li>Magento</li>
                            <li>Custom Laravel or headless commerce</li>
                            <li>BigCommerce & Wix eComm</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-credit-card"></i> Payment Integration</h4>
                          <p>We ensure smooth and secure transactions with:</p>
                          <ul>
                            <li>Integrated payment gateways (Stripe, PayPal, local banks)</li>
                            <li>SSL certificates & HTTPS</li>
                            <li>Checkout optimization</li>
                            <li>Cart abandonment prevention tools</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-search"></i> SEO-Optimized Product Pages</h4>
                          <p>Every page is built with on-page SEO, Core Web Vitals, and mobile usability in mind.</p>
                          <ul>
                            <li>Keyword-optimized product descriptions</li>
                            <li>Schema markup for rich snippets</li>
                            <li>Speed-optimized image & asset delivery</li>
                            <li>SEO-friendly URLs and breadcrumb navigation</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-cart-check"></i> Product & Inventory Management</h4>
                          <p>We develop back-end systems that simplify your product handling.</p>
                          <ul>
                            <li>Easy-to-use product dashboards</li>
                            <li>Filters, variations, stock alerts</li>
                            <li>Bulk uploads and CSV imports</li>
                            <li>Inventory sync with warehouses or POS</li>

                          </ul>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="bi bi-gear-wide-connected"></i> Conversion Optimization Tools</h4>
                          <p>Your online store is built to convert with:</p>
                          <ul>
                            <li>Wishlist, product comparison & reviews</li>
                            <li>Smart search and category filters</li>
                            <li>Promo banners, upsells, and cross-sells</li>
                            <li>Analytics, heatmaps & A/B testing tools</li>

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

                <div class="col-lg-6">
                    <h3>Why Choose DataMySite for E-Commerce Development?</h3>
                    <p>At <strong>DataMySite</strong>, we combine deep industry expertise with cutting-edge technology to build e-commerce platforms that drive results. Our solutions are tailored to your brand, fully scalable, and optimized for performance, security, and user experience. From strategy to launch and beyond, we partner with you to ensure your online store thrives in a competitive digital market.</p>
                    <br>

                    <ul>
                      <li>Dubai-based team with UAE market insights</li>
                      <li>Multi-platform experience (Shopify, Woo, Magento, Custom)</li>
                      <li>Full-stack team (front-end, back-end, SEO, UX)</li>
                      <li>Transparent project timelines & pricing</li>
                      <li>Post-launch support & optimization available</li>                    
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
                                        <span class="badge">1</span>Which E-commerce platform is best for my store?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We recommend platforms based on your SKU count and goals—Shopify for ease of use, WooCommerce for flexibility, or Magento for enterprise-scale operations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can you integrate local payment gateways?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we have extensive experience integrating regional favorites like Telr, Checkout.com, and Network International, as well as Apple Pay and Google Pay.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Is the checkout process optimized to prevent "Cart Abandonment"?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We design high-conversion checkouts with minimal steps, guest checkout options, and "Trust Signals" to ensure customers complete their purchases.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>Can the site handle "Flash Sales" with high traffic?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We build on scalable infrastructure that can automatically handle traffic spikes, ensuring your site doesn't crash during your biggest sales events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>Do you provide inventory management tools?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, your dashboard will allow you to track stock levels, manage shipping labels, and view detailed sales reports in real-time.</p>
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
                    <h3>Start Selling Smarter with DataMySite</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>Whether you’re launching your first store or upgrading to a better e-commerce platform, our Dubai-based team is ready to help you build an online store that performs.</p>

                            <p><strong>Your journey starts with free consultation.</strong></p>

                            @include('web.includes.elements.contact')
                        </div>

                        <div class="col-lg-5">

                            <div class="web-form-div">
                                <h4>Ideal For:</h4>
                                <ul>
                                    <li>Fashion & apparel stores</li>
                                    <li>Electronics & gadget shops</li>
                                    <li>Furniture & home décor businesses</li>
                                    <li>Health & wellness products</li>
                                    <li>Local product sellers expanding to e-commerce</li>
                                    <li>Subscription box and D2C brands</li>

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