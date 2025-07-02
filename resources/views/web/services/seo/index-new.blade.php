@extends('web.includes.master')

@section('content')

    <main class="main seo-main">

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
              <div class="col-lg-8" style="margin-top:0px;">
                <div class="post-container">
                    <h2 class="web-heading2">#1 <strong>SEO Agency in Dubai</strong> — 1st Page or Money Back Guaranteed</h2>
                    <p>
                        In today’s digital landscape, ranking on Google is not optional — it’s essential. At <strong>DataMySite</strong>, we’re not just another <strong>SEO agency</strong> — we’re your strategic partner in driving organic growth, increasing conversions, and building a strong online presence in the UAE and beyond.
                        <br><br>
                        As a trusted <strong>SEO company Dubai</strong> businesses rely on, we deliver <strong>SEO services</strong> that combine data, creativity, and proven strategies — all tailored to your unique goals.

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

        <div class="section-striped">
                @include('web.includes.elements.clients')
        </div>

        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Our SEO Services in Dubai Include:</h3>
                    <p>Our SEO services in Dubai include keyword research, on-page optimization, technical SEO, content creation, link building, local SEO, and performance tracking — all tailored to boost your search rankings, drive traffic, and generate leads for your business.</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{URL::to('/public/seo1.png')}}" width="100%" alt="Our SEO Services in Dubai Include">
                </div>
                <div class="col-lg-7">
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
                            <div>
                              <h4 class="title">{{$val->name}}</h4>
                              <p class="description two-line">{{$val->description}}</p>
                              <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                          <!-- End Service Item -->
                        @endforeach
                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section ">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <div class="row services gy-4">
                        <div class="col-lg-6">
                            <h3>Why SEO Matters for UAE Businesses</h3>
                            <p>Every day, thousands of potential customers search for products and services just like yours. Without a solid SEO strategy, your website risks being invisible while your competitors claim top spots and valuable traffic.</p>
                            <br>
                            <p>Effective SEO bridges the gap between your business and your audience. Whether you run a small local shop, an e-commerce store, or a multi-location enterprise, ranking higher in search results means more leads, more sales, and more growth.</p>
                            <br>

                            <h5>Book Your Free SEO Audit — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <img src="{{URL::to('/public/seo2.jpg')}}" alt="Why Local SEO Matters for Your Business in Dubai" width="100%">
                        </div>
                    </div>

                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section section-striped">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <div class="row services gy-4">
                        <div class="col-lg-5">
                            <img src="{{URL::to('/public/seo3.png')}}" alt="Why Local SEO Matters for Your Business in Dubai" width="100%">
                        </div>
                        <div class="col-lg-7">
                            <h3>What Makes DataMySite Different?</h3>
                            <p>
                                We’re not your average SEO agency Dubai has to offer — we go beyond rankings and traffic. Our mission is to help you achieve sustainable, long-term growth with customized SEO solutions.
                                <br><br>
                                When you choose DataMySite, you get:
                            </p>
                            <ul>
                                <li><strong>Proven Results</strong> — We don’t just promise. We deliver.</li>
                                <li><strong>Transparent Reporting</strong> — Know exactly how your campaigns are performing.</li>
                                <li><strong>Custom Strategies</strong> — One-size-fits-all? Not here.</li>
                                <li><strong>Dedicated SEO Experts</strong> — Your business deserves undivided attention.</li>
                                <li><strong>UAE-Focused Approach</strong> — Local SEO expertise for Dubai’s competitive market.</li>
                            </ul>
                            <br>

                            <h5>Book Your Free SEO Audit — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
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
                    <h3>We Work With:</h3>
                    <p>Whether you're a local entrepreneur or an international brand expanding to the UAE, we offer web development services that match your needs and goals.</p>
                    <br>

                    <div class="row services seo-need-block gy-4">
                        <div class="col-lg-3 filled">
                          <i class="bi bi-house-heart"></i>
                          <h4>Real Estate Agencies</h4>
                        </div>
                        <div class="col-lg-3 ">
                          <i class="bi bi-hospital"></i>
                          <h4>Clinics & Healthcare Providers</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-shop-window"></i>
                          <h4>Restaurants & Cafes</h4>
                        </div>
                        <div class="col-lg-3 ">
                          <i class="bi bi-cart-check"></i>
                          <h4>E-Commerce Stores</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-book"></i>
                          <h4>Educational Institutions</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-luggage"></i>
                          <h4>Travel & Tourism Agencies</h4>
                        </div>
                        <div class="col-lg-3">
                          <i class="bi bi-buildings"></i>
                          <h4>Corporate Enterprises</h4>
                        </div>
                        <div class="col-lg-3 filled">
                          <i class="bi bi-building"></i>
                          <h4>Startup Companies</h4>
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
                    <h3>Why Dubai Businesses Trust Us</h3>
                    <p>We deliver real results, clear communication, and custom digital solutions tailored to Dubai’s competitive market—helping local brands grow and stand out online.</p>
                    <br>

                    <ul>
                      <li><strong>9/10 Clients Renew</strong><br> because they see results that matter.</li>
                      <li><strong>Experienced SEO Specialists</strong><br> our team stays ahead of Google’s latest updates.</li>
                      <li><strong>100% White-Hat Practices</strong><br> we use ethical, sustainable SEO methods that protect your site long term.</li>
                      <li><strong>Flexible Packages</strong><br> we work with your budget, goals, and timelines.</li>                    
                    </ul>
                    
                    <br>
                    <p>We don’t just claim to be the best — we back it up with data and results.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <img src="{{URL::to('/public/local-seo2.jpg')}}" alt="Why Choose DataMySite as Your Local SEO Agency in Dubai?" width="100%">
                </div>
                <div class="col-lg-12">
                  
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How much do SEO services cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary based on your goals and competition, but we offer flexible packages for startups, SMEs, and enterprises. Contact us for a custom quote.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How long will it take to see results?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While SEO is a long-term strategy, many clients see noticeable improvements within 3–6 months.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Do you guarantee first-page rankings?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No ethical SEO company can guarantee rankings. We focus on sustainable growth using proven strategies that align with Google’s best practices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>Can you help with multilingual SEO?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely! We can optimize your website for English, Arabic, or any target language to reach Dubai’s diverse audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>Do you offer SEO for agencies too?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! Our white-label solutions make it easy for agencies to deliver high-quality SEO to their clients.</p>
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
                                <h4>Who We Work With</h4>
                                <p>Our clients span industries, sizes, and markets — from startups to large enterprises. Whether you’re in retail, real estate, hospitality, healthcare, or e-commerce, our SEO company Dubai experts tailor strategies to match your unique needs.</p>

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