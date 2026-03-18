@extends('web.includes.master')
@section('metaAddition')
    
@endsection
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
                        <h2>The Impact of Elevator Advertising</h2>
                        <h4>With over 45,000 residential and commercial towers</h4>
                        <br>
                        <p>
                            At DataMySite, we provide end-to-end elevator advertising solutions across residential towers, commercial office buildings, hotels, and malls — with both static and digital screen options to suit every campaign objective.
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



        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>How Elevator Advertising Works in Dubai</h4>
                    <p>
                        Unlike most advertising channels, elevators create a controlled, distraction-free environment. Passengers cannot skip, scroll, or look away. This captive audience dynamic makes elevator ads one of the highest-recall formats in out-of-home advertising.
                        <br>
                        Here's how the media works:
                    </p>
                    <ul>
                        <li><strong>Placement</strong>: Ads are installed inside elevator cabins, in lift lobbies, or on digital screens mounted in elevator waiting areas.</li>
                        <li><strong>Frequency</strong>: Residents and office workers typically use the same elevator 4–6 times per day, creating very high repeat exposure.</li>
                        <li><strong>Targeting</strong>: Buildings are selected based on tenant or resident demographics — enabling precise targeting of income segments, professions, and lifestyles.</li>
                        <li><strong>Formats</strong>: Static poster frames, backlit displays, digital LCD/LED screens, floor graphics, and door stickers.</li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div> 
            </div>

          </div>

        </section>



        <section id="testimonials" class="testimonials striped-section section">
          @include('web.includes.elements.clients')
        </section>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>


        <section id="service-cards" class="blog-section striped-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image3.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>Our Elevator Advertising Services in Dubai</h4>
                    <p>Here's what we offer:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-210">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-210" data-aria-expanded="true" data-aria-controls="faqCollapse-210">
                                        <span class="badge">&nbsp;</span>Digital Elevator Screen Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-210" class="collapse" aria-labelledby="faqHeading-210" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        High-definition digital screens inside elevators display your video ads, motion graphics, promotional content, and branded messaging. Digital elevator screens allow real-time creative updates, day-parting (running different ads at morning vs. evening), and interactive QR code integration. This format is particularly effective for property developers, luxury brands, retailers, and food delivery platforms targeting specific building profiles.
                                        <br>
                                        Key advantages: Video-capable, QR code integration for instant lead capture, remote content management, and high dwell-time engagement.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Static Poster Frame Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Premium-quality printed ads mounted in elevator frames deliver 100% share of voice for your campaign. Static posters are ideal for brand awareness, product launches, and ongoing campaigns that benefit from consistent creative. Cost-effective with long campaign durations available.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Lift Lobby & Waiting Area Displays
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The time passengers spend waiting for elevators is prime advertising real estate. Lobby displays, A-frames, and wall-mounted screens in lift lobbies extend your brand's presence beyond the cabin itself — adding to total dwell time and impression frequency.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-213">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-213" data-aria-expanded="false" data-aria-controls="faqCollapse-213">
                                        <span class="badge">&nbsp;</span>Floor Graphics & Door Wraps
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-213" class="collapse" aria-labelledby="faqHeading-213" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Elevator floors and doors create unexpected, highly engaging touch points. Floor graphics and full-door wraps turn the entire elevator into a branded experience — particularly effective for experiential campaigns, real estate launches, and premium lifestyle brands.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Elevator Advertising in Dubai</h4>
                    <ul>
                        <li><strong>Captive Audience</strong> — passengers cannot skip or exit mid-ad; attention is guaranteed</li>
                        <li><strong>Ultra-High Frequency</strong> — the same residents and workers see your ad 4–6 times daily</li>
                        <li><strong>Precise Demographic Targeting</strong> — building-level selection by income, profession, and lifestyle</li>
                        <li><strong>Cost-Effective</strong> — lower CPM than outdoor billboards or digital display, with superior recall rates</li>
                        <li><strong>Hyperlocal Reach</strong> — perfect for businesses that want to dominate specific buildings, communities, or districts</li>
                        <li><strong>Measurable Impact</strong> — impressions calculated from verified building occupancy and daily foot traffic data</li>
                        <li><strong>Low Clutter</strong> — your ad is the only brand in the elevator; no competitor noise</li>

                    </ul>
                    <br>
                    <h4>Elevator Advertising Packages We Offer</h4>
                    <ul>
                        <li><strong>Single Building Package</strong> — ideal for hyperlocal campaigns; restaurants, clinics, home services</li>
                        <li><strong>Building Cluster Package</strong> — 10–50 buildings in a specific community or district</li>
                        <li><strong>Residential Network Package</strong> — 100+ residential towers across Dubai for mass B2C reach</li>
                        <li><strong>Corporate Network Package</strong> — office buildings in key business districts for B2B campaigns</li>
                        <li><strong>Hotel Network Package</strong> — premium hotel properties in Dubai and Abu Dhabi</li>
                        <li><strong>Full City Coverage</strong> — maximum reach across all building types and districts</li>

                    </ul>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image4.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Elevator Advertising by Building Type</h4>
                    <p>One of the most powerful aspects of elevator advertising is demographic precision. We segment our building portfolio so you reach exactly the right audience:</p>
                </div>
                <div class="col-lg-6">
                    <h5>Residential Tower Advertising</h5>
                    <p>
                        Target affluent homeowners and tenants in premium residential communities including Dubai Marina, JBR, Downtown Dubai, Business Bay, and Jumeirah Lakes Towers. Ideal for: F&B delivery, home services, insurance, luxury lifestyle, and property investment offers. Average residential building impressions: 800–1,500 per day per building.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Commercial Office Building Advertising</h5>
                    <p>
                       Reach corporate decision-makers, senior executives, and business professionals inside Grade-A office towers in DIFC, Business Bay, JLT, and Deira. Ideal for: B2B services, financial products, SaaS solutions, corporate training, and executive recruitment. Average office building impressions: 1,200–2,500 per day per building.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Hotel Elevator Advertising</h5>
                    <p>
                        Capture a premium, high-spending audience of both leisure and business travellers in 4-star and 5-star hotels across Dubai and Abu Dhabi. Ideal for: luxury retail, dining, experiences, tours, and automotive. Audience profile: high-net-worth, international, and decision-makers.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Mall Elevator Advertising</h5>
                    <p>
                        Shoppers in malls are already in a buying mindset. Mall elevator advertising in Dubai's flagship malls — The Dubai Mall, Mall of the Emirates, Ibn Battuta Mall — reaches millions of active consumers every month. Ideal for: retail brands, restaurants, promotions, and entertainment.
                    </p>
                </div>   
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Who Benefits Most from Elevator Advertising in Dubai?</h4>
                    <p>
                       Elevator advertising delivers outsized results for businesses that benefit from hyperlocal or demographic precision:
                    </p>
                    <ul>
                        <li>Real estate developers and brokers — targeting residential community residents</li>
                        <li>Restaurants and food delivery apps — reaching residents within delivery zones</li>
                        <li>Healthcare clinics and wellness centres — targeting nearby residents and professionals</li>
                        <li>Financial services and insurance — reaching working professionals in office buildings</li>
                        <li>Luxury retail and fashion — hotel and premium residential tower campaigns</li>
                        <li>Education and training providers — B2B in commercial buildings; B2C in family communities</li>
                        <li>Home services — targeting building residents directly</li>

                    </ul>
                    <p>
                        Does your brand require an advertising visibility boost? Partner with datamysite for impactful Elevator advertising Dubai campaigns that drive engagement and results. Reach us immediately at <a href="tel:971525287259" class="inline-block">+971 525 287 259</a> to start your project.
                    </p>
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-blogs-section">

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

        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 vertical-center">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How many buildings does DataMySite have access to?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We have an active network spanning 500+ buildings across Dubai, Abu Dhabi, and Sharjah. This includes premium residential towers, Grade-A commercial buildings, 4 and 5-star hotels, and major retail malls.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I target a specific community, like Dubai Marina or JLT?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We offer community-level and district-level targeting. You can run a campaign in all buildings within a specific community, along a specific road, or within a defined radius of your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the minimum campaign duration? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most campaigns run for a minimum of 4 weeks. Longer durations (8–12 weeks) deliver higher cumulative frequency and significantly stronger brand recall.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How quickly can a campaign go live?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Digital screen campaigns can go live within 48–72 hours of creative approval. Static poster campaigns typically require 5–7 business days for printing and installation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What is the typical "view frequency" per person?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Residents or office workers typically see your ad 4 to 6 times a day, leading to incredibly high brand recall and "top-of-mind" awareness.</p>
                                </div>
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

@endsection