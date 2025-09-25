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
                    <h2 class="web-heading2">Flexible SEO Packages for Every Stage of Growth</h2>
                    <p>
                        At <strong>DataMySite</strong>, we know every business is different — that’s why our SEO packages are designed to match your goals and budget at every stage. From startups to established brands, we combine technical SEO, on-page fixes, content strategy, and link building to help you rank higher and grow faster.
                        
                        <strong>No hidden fees</strong>. No long-term contracts. Just clear pricing, proven results, and support that scales with you.
                        <br><br>
                        Ready to attract more traffic, boost your rankings, and turn visitors into loyal customers? 
                        <br>
                        <strong>Get in touch with DataMySite today and let’s build an SEO plan that grows with your business.</strong>

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
                <div class="col-lg-12 text-center">
                    <h2>Alignment DataMySite SEO Price & Package Plans</h2>
                    <p>Our SEO plans are aligned with your growth stage, offering the right strategy and support to maximize results at every level.</p>
                </div>
                <div class="col-lg-4">
                    <div class="case-studies-item pricing-item">
                        <h3><strong>Starter SEO Plan</strong></h3>
                        <p>
                            Perfect for small, local businesses aiming to build search presence.
                        </p>
                        <h6>Includes:</h6>
                        <ul>
                            <li><i class="bi bi-check-circle text-theme2"></i> Keyword research (10 keywords)</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> On-page optimization (up to 10 pages)</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Technical audit & core fixes (speed, mobile)</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Google Analytics & Search Console setup</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Local SEO setup (GMB profile & citations)</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> 1 blog post (500 words) per month</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Monthly performance report & call</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> 25–50 quality backlinks/month</li>
                        </ul>
                        <h6>Why Choose This?</h6>
                        <p>A cost-effective solution, under the mid-market range of AED 1,500–3,500 </p>
                        <a href="javascript:void(0)" class="scroll-up">Enquire Now</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="case-studies-item pricing-item">
                        <h3><strong>Growth SEO Plan</strong></h3>
                        <p>
                            Ideal for growing businesses looking to compete in Dubai’s market.
                        </p>
                        <h6>Includes everything in Starter, plus:</h6>
                        <ul>
                            <li><i class="bi bi-check-circle text-theme2"></i> Target 25–50 strategic keywords</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> On-page optimization expanded to 25 pages</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Comprehensive technical SEO</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> 4 blog posts/articles (500+ words each)</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Link building: 8–10 quality backlinks/month</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Local SEO advanced (multi-location support)</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Enhanced monthly reporting with analytics insights</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> 70–100 quality backlinks/month</li>
                        </ul>
                        <h6>Why It Works:</h6>
                        <p>This aligns with common mid-tier packages (AED 4,000–8,000) and covers deep optimization.</p>
                        <a href="javascript:void(0)" class="scroll-up">Enquire Now</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="case-studies-item pricing-item">
                        <h3><strong>Enterprise SEO Plan</strong></h3>
                        <p>
                            Large-scale sites and e-commerce platforms needing full-scale SEO.
                        </p>
                        <h6>Includes everything in Growth, plus:</h6>
                        <ul>
                            <li><i class="bi bi-check-circle text-theme2"></i> 50–100+ keyword targets</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> On-page for 50+ pages</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Advanced technical optimization</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> 8 articles + 2 cornerstone guides/month</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> 20+ high-authority backlinks/month</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> E-commerce SEO support</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Quarterly strategy reviews + Google Core updates</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> Premium support with dedicated account manager</li>
                            <li><i class="bi bi-check-circle text-theme2"></i> 120–150 quality backlinks/month</li>
                        </ul>
                        <h6>Why It Stands Out:</h6>
                        <p>This package matches enterprise-level ranges (AED 10,000+) </p>
                        <a href="javascript:void(0)" class="scroll-up">Enquire Now</a>
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
                            <h3>Why DataMySite’s Packages Make Sense</h3>
                            <br>
                            <ul>
                                <li>
                                    <strong>Market-aligned pricing:</strong> Our Starter, Growth, Enterprise plans mirror real agency benchmarks in Dubai 
                                </li>
                                <li>
                                    <strong>Clear deliverables:</strong> Each plan defines keyword limits, content, technical, and link-building scopes.
                                </li>
                                <li>
                                    <strong>Scalable options:</strong> Flexibility to upgrade as your business expands.
                                </li>
                                <li>
                                    <strong>Local market-focus:</strong> Target Dubai and UAE audiences with local SEO baked into all plans.
                                </li>
                            </ul>
                            <br>

                            <h5>Book Your Free SEO Audit — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <img src="{{URL::to('/public/local-seo1.png')}}" alt="Why Local SEO Matters for Your Business in Dubai" width="100%">
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
                    <h3>Ready to Be Our Next Success Story?</h3>
                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>At DataMySite, we don’t follow cookie-cutter SEO plans — we design personalized strategies that solve your business challenges and deliver measurable results. Whether you're in e-commerce, SaaS, legal, or local service-based industries, our SEO solutions are built to scale with your business.</p>

                            <p><strong>Your journey starts with free consultation.</strong></p>

                            @include('web.includes.elements.contact')
                        </div>

                        <div class="col-lg-5">

                            <div class="web-form-div">
                                <h4>Next Steps – Get Started Today</h4>
                                <ul>
                                    <li><strong>Schedule a free consultation</strong><br> We'll assess your website and goals.</li>
                                    <li><strong>Select your plan</strong><br> Or go for a custom package tailored to your needs.</li>
                                    <li><strong>Launch your SEO campaign</strong><br> Kickoff with audit and implementation.</li>
                                    <li><strong>Monitor growth</strong><br> Monthly reports show traffic, ranking, and ROI.</li>

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