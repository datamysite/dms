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
                        <h2>Engage Your Audience</h2>
                        <h4>Like Never Before</h4>
                        <br>
                        <p>
                            Dubai is a city that thrives on innovation, entertainment, and luxury experiences. To stand out in this dynamic market, brands need more than traditional advertising—they need experiences that engage, excite, and create lasting impressions.
                            <br>
                            At DataMySite, we specialize in Top Golf experiential marketing in Dubai, helping brands connect directly with their target audience through interactive and memorable campaigns.

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
                    <h4>What is Top Golf Experiential Marketing?</h4>
                    <br>
                    <p>
                        Top Golf activations are live, interactive marketing campaigns hosted at Top Golf venues. These activations combine sports, entertainment, and brand storytelling, offering participants a unique way to experience your brand firsthand.
                        <br><br>
                        Unlike standard advertising, Top Golf activations:

                    </p>
                    <ul>
                        <li>Encourage direct participation</li>


                        <li>Foster social interaction</li>


                        <li>Provide opportunities for real-time feedback and engagement</li>


                        <li>Amplify your brand message in an organic and fun environment</li>
                    </ul>
                    <p>These activations are perfect for B2B and B2C campaigns, product launches, brand awareness drives, and customer engagement programs.</p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/re2nXszkJcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12">
                    <h4>How DataMySite Executes Top Golf Experiential Marketing</h4>
                    <p>At DataMySite, we provide end-to-end Top Golf activations in Dubai:</p>
                    
                </div> 
                <div class="col-lg-4">
                    <h5 class="text-theme">Campaign Strategy & Planning</h5>
                    <p>
                        We begin by defining:
                    </p>
                    <ul>
                        <li>Your campaign goals (brand awareness, lead generation, product launch)</li>


                        <li>Target audience profiles (age, profession, interests, location in Dubai)</li>


                        <li>KPIs and engagement metrics</li>

                    </ul>
                    <p>This ensures the activation is aligned with your marketing objectives.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Event Design & Setup</h5>
                    <p>
                        We create customized Top Golf zones, including:
                    </p>
                    <ul>
                        <li>Branded golf bays and challenges</li>


                        <li>Interactive competitions and leaderboards</li>


                        <li>Product demos or sampling areas</li>


                        <li>Branded giveaways and merchandising</li>

                    </ul>
                    <p>Every detail is designed to engage participants and enhance brand recall.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Engagement Activities</h5>
                    <p>
                        Participants enjoy:
                    </p>
                    <ul>
                        <li>Golf challenges and contests</li>


                        <li>Skill-based games with prizes</li>


                        <li>Interactive storytelling about your brand</li>


                        <li>Photo zones for social sharing</li>

                    </ul>
                    <p>These activities turn the event into a fun and immersive brand experience.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Data Capture & Lead Generation</h5>
                    <p>
                        Top Golf activations are not just about fun. We integrate lead capture systems:
                    </p>
                    <ul>
                        <li>Participant registration forms</li>


                        <li>On-site surveys and feedback</li>


                        <li>QR codes for product info or special offers</li>

                    </ul>
                    <p>This provides you with qualified leads and valuable customer insights for future marketing.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Post-Event Analysis & Optimization</h5>
                    <p>
                        After the activation, we provide:
                    </p>
                    <ul>
                        <li>Comprehensive reports on engagement, participation, and social amplification</li>


                        <li>Insights for future campaigns</li>


                        <li>Recommendations for enhancing ROI and lead conversion</li>
                    </ul>
                </div>
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image160.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Top Golf Activations Work in Dubai</h4>
                    <p>Dubai’s residents are highly social, tech-savvy, and experience-driven, making Top Golf activations an ideal platform to:</p>
                    <ul>
                        <li>
                            <strong>Engage a Premium Audience</strong><br>
                            Top Golf attracts young professionals, families, and expatriates, ensuring that your brand interacts with high-value, engaged participants.
                        </li>
                        <li>
                            <strong>Create Memorable Experiences</strong><br>
                            Sports-based engagement and interactive challenges create lasting emotional connections, making your brand memorable long after the event.
                        </li>
                        <li>
                            <strong>Leverage Social Media Exposure</strong><br>
                            Top Golf events are highly Instagrammable and shareable. Participants naturally post about the experience, creating organic digital amplification for your brand.
                        </li>
                        <li>
                            <strong>Collect Valuable Data</strong><br>
                            From participant registration to real-time engagement tracking, Top Golf activations allow you to collect actionable insights, including leads and audience behavior.
                        </li>
                    </ul>
                    <br>
                    <h4>Benefits of Top Golf Experiential Marketing</h4>
                    <ul>
                        <li><strong>Memorable Engagement</strong>: Participants associate fun and excitement with your brand.</li>


                        <li><strong>Lead Generation Opportunities</strong>: Capture participant data for follow-ups and conversions.</li>


                        <li><strong>Social Media Amplification</strong>: Shareable moments increase your brand’s reach online.</li>


                        <li><strong>Emotional Connection</strong>: Direct engagement fosters trust and loyalty.</li>


                        <li><strong>Brand Differentiation</strong>: Stand out from competitors with a unique, high-energy campaign.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Partner with DataMySite</h4>
                    <p>
                        At DataMySite, we combine creativity, strategy, and execution to deliver Top Golf experiential campaigns in Dubai that engage audiences, generate leads, and create a lasting impact.
                    </p>
                    <ul>
                        <li><strong>End-to-end management</strong>: Strategy, setup, execution, and reporting</li>


                        <li><strong>Customizable experiences</strong>: Tailored for your brand and audience</li>


                        <li><strong>Data-driven results</strong>: Engagement metrics, leads, and ROI</li>


                        <li><strong>Local expertise</strong>: Understanding of Dubai’s market, culture, and demographics</li>

                    </ul>
                    <br>
                    <h4>Conclusion</h4>
                    <p>
                        Top Golf activations in Dubai provide an exciting, interactive, and highly engaging platform for brands to connect with their audience. By combining fun, competition, and brand storytelling, your campaign will leave a lasting impression, generate quality leads, and amplify your brand presence.
                        <br><br>
                        DataMySite ensures every Top Golf activation is strategically planned, creatively executed, and results-driven, making your brand stand out in Dubai’s competitive market.
                        <br><br>
                        Start your Top Golf experiential marketing campaign in Dubai today. Contact DataMySite for a consultation!

                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 vertical-center mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section  striped-section faq-new-section">

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
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>Who can benefit from Top Golf activations?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Brands targeting young professionals, families, or luxury audiences in Dubai. Ideal for B2B, B2C, product launches, or promotional events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long do Top Golf campaigns typically run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Activations can range from a few hours to multi-day campaigns, depending on objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can the activation be customized for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We tailor challenges, branding, giveaways, and experiences to align with your marketing goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Do you handle social media promotion?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We create shareable content and integrate social campaigns to amplify event reach.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How do you measure ROI?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We track participant engagement, social shares, lead capture, and conversion metrics, ensuring your campaign delivers measurable results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>Is Top Golf suitable for corporate or B2B events?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Corporate events benefit from team-building challenges, brand exposure, and networking opportunities while engaging with clients or employees.</p>
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