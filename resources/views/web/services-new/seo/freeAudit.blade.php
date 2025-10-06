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
                        <h2>Free SEO Audit Tool</h2>
                        <h4>Analyze Your Website Instantly</h4>
                        <br>
                        <p>
                            Curious why your website isn't ranking higher on Google? Start with a free SEO audit by DataMySite — the fastest way to uncover SEO issues and performance gaps in your site.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            <h3>Want to know more?</h3>
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control" required>
                                
                                <input type="tel" name="mailphone" id="phone-field2" placeholder="Phone" class="form-control" required>
                                <input type="hidden" name="phone" id="fullphone-field2" required="">
                                <br>
                                <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                                
                                <input type="hidden" name="service" value="{{$subservice->name}}" required>
                                                                
                                <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
                                
                                <button class="btn btn-theme">Submit Your Enquiry</button>
                                <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>
        </div><!-- End Page Title -->



        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-5">
                    <iframe class="service-iframe cop-iframe" src="https://www.youtube.com/embed/Kbxm_z_ScYU?si=589eks2setWiGTUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>About Free SEO Audit</h4>
                    <p>
                        Our free SEO audit provides a detailed and comprehensive overview of your website’s performance, covering on-page SEO, technical issues, keyword opportunities, and more. In just a few clicks, you’ll gain valuable insights into what’s working, what needs improvement, and how to boost your site’s visibility and rankings on Google.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <div class="section-striped">
                @include('web.includes.elements.clients')
        </div>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>




        <section id="service-cards" class="blog-section section  section-striped">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <div class="row split-block services gy-4">
                        <div class="col-lg-4">
                            <img src="{{URL::to('/public/free-audit1.png')}}" alt="What You’ll Get in Your Free SEO Audit Report:" width="100%">
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <br>
                            <h2>What You’ll Get in Your Free SEO Audit Report:</h2>
                            <br>
                            <ul>
                                <li>On-page SEO score (titles, meta descriptions, headings, content)</li>
                                <li>Technical SEO errors (broken links, redirects, crawl errors)</li>
                                <li>Page speed & mobile responsiveness insights</li>
                                <li>Google indexing and sitemap issues</li>
                                <li>Keyword usage and optimization status</li>
                                <li>Internal linking structure health</li>
                                <li>Security and HTTPS check</li>

                            </ul>
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

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <div class="row services gy-4">
                        <div class="col-lg-6">
                            <br><br>
                            <h2>Why Use Our Free SEO Audit Tool?</h2>
                            <br>
                            <ul>
                                <li>100% Free – No obligations, no hidden fees</li>
                                <li>Instant Report – Delivered within minutes</li>
                                <li>Actionable Recommendations – Clear fixes you can implement</li>
                                <li>Dubai-Focused SEO Standards – We audit with Google UAE in mind</li>

                            </ul>
                            <br>

                            <h5>Book Your Free SEO Audit — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <img src="{{URL::to('/public/free-audit2.png')}}" alt="Why Use Our Free SEO Audit Tool?" width="100%">
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
                    <p>Our free SEO audit is perfect for business owners, marketers, startups, and website managers who want to improve their online visibility. Whether you're running an e-commerce store, a local business, or a corporate website, this audit is tailored to help you uncover hidden SEO opportunities and fix critical issues.</p>
                    <br>

                    <div class="row services seo-need-block gy-4">
                        <div class="col-lg-4 filled">
                          <i class="bi bi-check2"></i>
                          <p>Businesses not ranking on Google</p>
                        </div>
                        <div class="col-lg-4">
                          <i class="bi bi-check2"></i>
                          <p>Startups launching new websites</p>
                        </div>
                        <div class="col-lg-4 filled">
                          <i class="bi bi-check2"></i>
                          <p>Local businesses in Dubai needing local SEO help</p>
                        </div>
                        <div class="col-lg-4">
                          <i class="bi bi-check2"></i>
                          <p>Agencies and marketers doing competitor research</p>
                        </div>
                        <div class="col-lg-4 filled">
                          <i class="bi bi-check2"></i>
                          <p>Website owners wanting to improve SEO themselves</p>
                        </div>
                        <div class="col-lg-4">
                          <i class="bi bi-check2"></i>
                          <p>E-commerce brands aiming to boost traffic and drive more sales</p>
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
                    <h3>What Makes Our Audit Better?</h3>
                    <p>Unlike generic online tools, DataMySite’s Free SEO Audit is customized for the UAE market. We audit with Dubai search behavior and local ranking factors in mind — so your report is not only technical but relevant to your actual audience.</p>
                    <br>

                    <h3>How It Works:</h3>
                    <p>Simply enter your website URL to start the audit. Our system scans your site for on-page SEO, technical issues, and keyword performance. Within minutes, you’ll receive a detailed report with insights and clear recommendations to improve your rankings.</p>
                    <div class="row how-seo-block">
                        <div class="col-lg-4">
                            <h4>Enter your website URL</h4>
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="col-lg-4">
                            <h4>Receive your audit report via email</h4>
                            <i class="bi bi-envelope-check"></i>
                        </div>
                        <div class="col-lg-4">
                            <h4>Book a free consultation</h4>
                            <i class="bi bi-telephone-forward"></i>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </section>



        <section id="service-cards" class="blog-section section pr-blogs-section">

          <div class="container section-title">
            <h2 class="text-theme">Blogs</h2>
            <p class="pr-blog-sub">What’s Going On in the Industry?</p>
            <div class="row gy-4 blog-portrait-card first-row">
                @foreach($blogs as $val)
                    <div class="col-lg-4">
                        <a href="{{route('blogs.detail', [$val->slug])}}">
                          <div class="popular-card blog-card-2 flex-grow-1" bis_skin_checked="1">
                            <div class="card-image" bis_skin_checked="1">
                              <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                            </div>
                            <div class="popular-text" bis_skin_checked="1">
                              <h6 class="mt-2" title="{{$val->heading}}">{{$val->heading}}</h6>
                              <p class="line-break-3">{{$val->short_description}}</p>
                              <small>by <font class="text-theme2">{{$val->author->name}}</font> - <font class="text-bold">{{date('F d, Y', strtotime($val->created_at))}}</font></small>
                            </div>
                          </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <a href="{{URL::to('/blogs/pr-and-media-relations')}}" class="see-all-btn" target="_blank">See All Blogs</a>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section  section-striped  faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>Is this really free?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! You’ll get a detailed SEO audit report with no strings attached.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>Can I get help fixing the issues?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Our team can turn your audit into an action plan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>How long does the audit take?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Reports are usually generated within 3–5 minutes after submitting your URL.</p>
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
                    <h3>Get Your Free SEO Audit Now</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>Take the first step toward better rankings. Get a free SEO audit from DataMySite, and discover what’s holding your site back — today.</p>

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