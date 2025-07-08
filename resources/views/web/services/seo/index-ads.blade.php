@extends('web.includes.master')
@section('metaAddition')
<meta name="robots" content="noindex, follow">
@endsection
@section('addStyle')
<style>
    .header-info {
        display: none;
    }
    .post-container p {
        padding-left: 0px;
    }
</style>
@endsection
@section('content')

    <main class="main seo-main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug).'.png'}}');">
            <div class="container">
            </div>
          </div><!-- End Page Title -->


        <section id="service-cards" class="blog-section ads-main-section section">

          <div class="container">

            <div class="row gy-4 first-row">
              <div class="col-lg-8" style="margin-top:0px;">
                <div class="post-container">
                    <h2 class="web-heading2 seo-heading">
                        We Know You Want Results!
                    </h2>
                    <h4>That’s Why It’s <strong>1st Page</strong> Guaranteed. or Your Money Back. Just <strong>$82/Keyword</strong>.</h4>
                    <div  class="seo-cta"><a href="javascript:void(0)">Get My Free SEO Audit</a></div>
                    <hr class="seo-cta-hr">
                    <h4>Curious! 
                        <br>Why Your Website Isn’t Ranking? <strong>Let’s Find Out</strong> — <strong>At No Cost</strong>.</h4>
                    <p>
                        Let us understand your business better and help you outsmart the competition.
                        <br>
                        We’re offering a <strong>Free Website Audit</strong> that provides: 

                    </p>
                    <ul>
                        <li>
                            A detailed look at your <strong>top competitors</strong> — see what they’re doing right (and wrong).
                        </li>
                        <li>
                            A tailored <strong>3-month SEO roadmap</strong>, built to move you up in rankings and ahead of your industry.
                        </li>
                    </ul>
                    <p>
                        <strong>No cost</strong>. <strong>No pressure</strong>. Just pure <strong>insights</strong>.
                        <br>
                        Let’s turn your website into your top-performing marketing asset.
                    </p>
                </div> 
              </div>
              <div class="col-lg-4">
                <div class="aside-form seo-ads-aside-form">
                  <h3>Zero-Cost SEO Audit</h3>
                  <h4><small><small>Know Your Rank. Improve.</small></small></h4>
                  <form action="{{route('enquiry.help.submit')}}" id="enquiry-form" >
                      @csrf
                      <input type="text" name="name" placeholder="Name" class="form-control" required>
                      
                      <input type="tel" name="mailphone" id="phone-field2" class="form-control" required>
                      <input type="hidden" name="phone" id="fullphone-field2" required="">
                      <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                      
                      <input type="text" class="form-control" name="website_link" placeholder="Website" required>
                      
                      <input type="hidden" name="service" value="SEO Services">
                                            
                      <button class="btn btn-theme">Submit</button>
                      <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </section>

        <div class="section-striped">
            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section">
                <!-- Section Title -->
              <div class="container section-title" style="padding-bottom: 15px;">
                <h2 class="text-theme">Our Clients</h2>
                <p class="service-tp">
                    With over <strong>10 years of experience</strong> in SEO marketing, we understand what truly matters: <strong>results!</strong> 
                    <br>
                    At <strong>DMS</strong>, we don’t just make promises—we deliver. Our proven strategies have helped businesses across Dubai and the region secure top rankings on Google, boost traffic, and grow revenue sustainably.
                </p>
              </div><!-- End Section Title -->
              <div class="container">
                <div class="row client-logos-block">
                    @for($i = 1; $i<=23; $i++)
                        <div class="col-lg-1 col-sm-6 col-xs-6 client-logos">
                            <img src="{{URL::to('/public/assets/img/clients/'.$i.'-min.png')}}" class="" height="45px" alt="Clients Logo {{$i}}" loading="lazy">
                        </div><!-- End testimonial item -->
                    @endfor
                </div>
              </div>

            </section><!-- /Testimonials Section -->
        </div>

        <section id="service-cards" class="blog-section section  seo-ads  section-striped">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-4">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case1.jpg')}}" width="100%">
                        <h3><strong>Blunt Umbrella</strong></h3>
                        <h6>Engagement Duration: <strong>3 Years</strong></h6>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“windproof umbrella”</td>
                                <td class="text-right"><span>2</span></td>
                            </tr>
                            <tr>
                                <td>“designer umbrella NZ”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                            <tr>
                                <td>“high quality umbrellas”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">175%</font> increase in organic traffic</li>
                            <li><font style="color:green; font-weight: bold;">3x</font> improvement in conversion rate</li>
                            <li><font style="color:green; font-weight: bold;">40+</font> keywords ranking on Google’s first page</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case2.jpg')}}" width="100%">
                        <h3><strong>Injury Specialists Direct</strong></h3>
                        <h6>Engagement Duration: <strong>2 Years</strong></h6>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“injury claim specialists UK”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                            <tr>
                                <td>“no win no fee solicitors”</td>
                                <td class="text-right"><span>5</span></td>
                            </tr>
                            <tr>
                                <td>“personal injury compensation claims”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">320%</font> growth in organic traffic</li>
                            <li>Steady lead generation via SEO forms</li>
                            <li>Top 5 rankings for 20+ legal terms</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case3.jpg')}}" width="100%">
                        <h3><strong>TechHive Solutions</strong></h3>
                        <h6>Engagement Duration: <strong>1 Year</strong></h6>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“managed IT services USA”</td>
                                <td class="text-right"><span>4</span></td>
                            </tr>
                            <tr>
                                <td>“SaaS development company”</td>
                                <td class="text-right"><span>6</span></td>
                            </tr>
                            <tr>
                                <td>“custom CRM software provider”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">85%</font> increase in monthly organic traffic</li>
                            <li><font style="color:green; font-weight: bold;">50+</font> backlinks from authoritative tech domains</li>
                            <li>Surge in inquiries through SEO-optimized pages</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case4.jpg')}}" width="100%">
                        <h3><strong>Housing Disrepair</strong></h3>
                        <h6>Engagement Duration: <strong>1.5 Years</strong></h6>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“housing disrepair solicitors UK”</td>
                                <td class="text-right"><span>2</span></td>
                            </tr>
                            <tr>
                                <td>“claim compensation for housing disrepair”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                            <tr>
                                <td>“tenant rights housing UK”</td>
                                <td class="text-right"><span>4</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">280%</font> growth in organic leads</li>
                            <li><font style="color:green; font-weight: bold;">30+</font> legal keywords ranking on page 1</li>
                            <li>High-converting pages with lead form integration</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case5.jpg')}}" width="100%">
                        <h3><strong>MoneySavingExpert</strong></h3>
                        <h6>Engagement Duration: <strong>Ongoing (Consulting)</strong></h6>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“best credit card deals UK”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                            <tr>
                                <td>“how to save money on bills”</td>
                                <td class="text-right"><span>2</span></td>
                            </tr>
                            <tr>
                                <td>“PPI claims UK”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li>Improved SERP performance via schema and FAQ</li>
                            <li>Enhanced on-page SEO and content authority</li>
                            <li>Boosted CTR across several high-volume pages</li>
                        </ul>

                    </div>
                </div>
            </div>

          </div>

        </section>


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

@section('addScript')
<script>

    const inputhseo = document.querySelector("#phone-fieldseo");
    const hiddenInputhseo = document.querySelector("#fullphone-fieldseo");
    const itihseo = window.intlTelInput(inputhseo, {
      initialCountry: "ae",
      separateDialCode: true,
    });

    inputhseo.addEventListener('keyup', () => {
      const fullNumber = itihseo.getNumber();
      hiddenInputhseo.value = fullNumber;
    });
  </script>
@endsection