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
                        <h2>Flexible SEO Packages</h2>
                        <h4>for Every Stage of Growth</h4>
                        <br>
                        <p>
                            At DataMySite, we know every business is different — that’s why our SEO packages are designed to match your goals and budget at every stage. From startups to established brands, we combine technical SEO, on-page fixes, content strategy, and link building to help you rank higher and grow faster. No hidden fees. No long-term contracts. Just clear pricing, proven results, and support that scales with you.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form">
                                @csrf
                                <input type="hidden" name="service" value="{{$subservice->name}}" required>
                                <div class="form1-wrapper">
                                    <div class="form1-bg">
                                      <h2 class="form1-headline">Ready to Get <span>Results?</span></h2>
                                      <p class="form1-sub">Drop us your details — our experts respond within 60 minutes.</p>

                                      <div class="form1-field">
                                        <input type="text" placeholder="Your Full Name" name="name" required>
                                      </div>

                                      <div class="form1-field">
                                          <input type="tel" class="form-control" name="mainphone" id="phone-field2" required="">
                                          <input type="hidden" name="phone" id="fullphone-field2" required="">
                                      </div>

                                      <div class="form1-field">
                                        <input type="email" placeholder="Your Email Address" class="aside-email" name="email" required>
                                      </div>

                                      <div class="form1-field">
                                        <textarea class="form1-textarea" name="description" placeholder="Tell us what you need — the more detail, the better we can help." required></textarea>
                                      </div>

                                      <button class="form1-btn" type="submit">
                                        Get Free Consultation
                                        <span class="form1-btn-arrow">→</span>
                                      </button>

                                      <div class="form1-trust">
                                        <div class="form1-trust-item">
                                          <svg viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                                          No spam, ever
                                        </div>
                                        <div class="form1-trust-item">
                                          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                          Reply in 60 min
                                        </div>
                                        <div class="form1-trust-item">
                                          <svg viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
                                          100% Private
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                            <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                            
                        </div>
                    </div>
                </div>
              
            </div>
        </div><!-- End Page Title -->


        <div class="">
                @include('web.includes.elements.clients')
        </div>

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

                <div class="col-lg-12 text-center">
                    <p>
                        Ready to attract more traffic, boost your rankings, and turn visitors into loyal customers?
                        <br>
                        <strong>Get in touch with DataMySite today and let’s build an SEO plan that grows with your business.</strong>
                    </p>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section">

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

        <section id="service-cards" class="blog-section section-striped section">

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