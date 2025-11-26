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
                        <h2>Amplify Your Brand Voice Across the UAE</h2>
                        <h4>Reach Millions of English-Speaking Listeners Every Day</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses create high-impact, localized radio advertising campaigns across Dubai’s leading English-language FM stations. Whether your goal is to boost brand awareness, promote a new product, or drive traffic to your business, English radio advertising ensures your brand voice is heard loud and clear — literally.
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

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Choose English Radio Advertising in Dubai</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Massive Daily Reach
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Over 80% of UAE residents listen to the radio every day, according to Nielsen reports. English-language stations reach a vast segment of Dubai’s expatriate population, ensuring wide demographic coverage across all age groups and professions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Builds Emotional Connection
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Radio is intimate and conversational. When your brand’s message is delivered by a trusted radio host or through a well-crafted voice-over, it builds emotion, familiarity, and trust — making your brand part of your audience’s daily life.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Perfect for On-the-Go Audiences
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With heavy daily commutes across Dubai and Abu Dhabi, car listeners make up a large share of radio audiences. English radio advertising is perfect for reaching professionals and families during morning and evening drives — when attention levels are highest.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Cost-Effective Brand Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Compared to outdoor or digital video campaigns, radio offers affordable frequency and reach. You can run your message multiple times a day for consistent exposure — without exceeding your budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Multilingual Market Advantage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>English radio advertising allows you to target non-Arabic-speaking audiences — including Western expatriates, South Asians, and African residents — giving your brand access to Dubai’s most diverse consumer base.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/4qP3sAMhMkM?si=Bwuovnsu7mqpSDKs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Top English Radio Stations in Dubai</h4>
                    <p>At DataMySite, we manage radio advertising campaigns across all major English-language FM networks in Dubai and the UAE. Each station caters to a unique listener profile, allowing us to tailor your message to the right audience.</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Virgin Radio 104.4 FM</h5>
                    <p>
                        One of the UAE’s most popular stations, Virgin Radio Dubai targets young professionals and millennials with energetic, music-driven programming. It’s ideal for lifestyle, retail, entertainment, and tech brands looking for vibrant engagement.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Dubai Eye 103.8 FM</h5>
                    <p>
                        A business and talk-based radio channel that attracts high-income professionals, decision-makers, and entrepreneurs. Perfect for real estate, finance, corporate, and luxury brand advertising..
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Dubai 92 FM</h5>
                    <p>
                        A family-friendly English station that reaches a broad audience, including expats from the UK, Europe, and Asia. Best suited for automotive, travel, retail, and F&B promotions.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Radio 1 UAE</h5>
                    <p>
                        This youth-focused English radio station connects with urban listeners who love contemporary music and pop culture — ideal for fashion, tech, and entertainment campaigns.
                    </p>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">Channel 4 FM 104.8</h5>
                    <p>
                        A vibrant English music station popular among working professionals and university students. Great for consumer goods, restaurants, and lifestyle brands.
                        <br><br>
                        <strong>Each of these stations offers diverse advertising formats, allowing you to select the one that fits your campaign tone, message, and audience profile.</strong>
                    </p>
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
                    <img src="{{URL::to('/public/section-images/image177.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit Most from English Radio Advertising</h4>
                    <br>
                    <ul>
                        <li><strong>Retail & E-commerce</strong> – Promote sales, discounts, and new collections.</li>


                        <li><strong>Real Estate Developers</strong> – Announce property launches or open houses.</li>


                        <li><strong>Automotive Companies</strong> – Showcase new car models or offers.</li>


                        <li><strong>Restaurants & Cafés</strong> – Advertise dine-in, delivery, or new branches.</li>


                        <li><strong>Travel & Hospitality</strong> – Promote destinations, hotels, or events.</li>


                        <li><strong>Technology & Apps</strong> – Encourage downloads or online registrations.</li>


                        <li><strong>Education & Training Institutes</strong> – Advertise short courses or MBAs.</li>


                        <li><strong>Banks & Insurance Providers</strong> – Build awareness for services or products.</li>
                    </ul>
                    <br>
                    <h4>Benefits of English Radio Advertising</h4>
                    <p>
                        Reach a broad English-speaking audience across Dubai and the UAE<br>
                        High frequency and repeat exposure at affordable costs<br>
                        Targeted advertising based on station audience demographics<br>
                        Builds emotional connection through tone, voice, and storytelling<br>
                        Flexible scheduling — peak, mid-day, or full-day rotations<br>
                        Perfect for both brand awareness and direct response campaigns<br>
                        Boosts recall when paired with digital or outdoor ads
                    </p>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section striped-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12">
                    <h4>Advertising Formats on English Radio Stations</h4>
                    <p>DataMySite provides complete creative and campaign management solutions for all major radio ad formats in Dubai and the UAE.</p>
                    
                </div> 
                <div class="col-lg-4">
                    <h5 class="text-theme">Spot Advertising (Radio Commercials)</h5>
                    <p>
                        Short audio ads (usually 15, 30, or 45 seconds) broadcast at peak hours throughout the day. Perfect for brand promotions, special offers, or product launches.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Presenter Mentions</h5>
                    <p>
                        Hosts mention your brand organically during live shows, adding credibility and personal endorsement. This builds trust and listener engagement.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Sponsorships</h5>
                    <p>
                        Sponsor weather updates, traffic reports, contests, or entire segments to keep your brand associated with valuable on-air content.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Jingles & Branded Audio</h5>
                    <p>
                        Custom sound branding and jingles create memorable audio identity, ensuring your brand sticks in listeners’ minds even after the ad ends.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Interviews & Talk Segments</h5>
                    <p>
                        Ideal for B2B and corporate brands, you can feature your spokesperson in an informative segment to establish expertise and authority.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Event Collaborations</h5>
                    <p>
                        Combine your radio campaign with live events, roadshows, and giveaways to boost brand engagement and generate real-world leads.
                    </p>
                </div>
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for Radio Advertising in Dubai</h4>
                    <p>
                        As one of Dubai’s leading advertising agencies, DataMySite specializes in radio campaign strategy, production, and placement — ensuring your brand message reaches the right audience at the right time.
                        <br>
                        <strong>Our Expertise Includes:</strong>

                    </p>
                    <ul>
                        <li>Media planning across top English radio stations</li>


                        <li>Audio scriptwriting and professional voice-over production</li>


                        <li>Creative jingle design and ad sequencing</li>


                        <li>Sponsorship negotiation and placement</li>


                        <li>Campaign scheduling and frequency optimization</li>


                        <li>Listener reach and performance reporting</li>

                    </ul>
                    <p>
                        We work closely with radio networks to secure premium ad slots, ensuring your brand gets maximum visibility during high-listenership hours like the morning and evening drive-time shows.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section  striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image180.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Our Process</h4>
                    <br>
                    <ul>
                        <li><strong>Consultation & Strategy</strong> – Understanding your campaign goals, audience, and budget.</li>


                        <li><strong>Creative Production</strong> – Crafting scripts, voiceovers, and audio design aligned with your brand.</li>


                        <li><strong>Media Planning & Booking</strong> – Selecting the best English FM stations and time slots.</li>


                        <li><strong>Campaign Execution</strong> – Broadcasting your message across selected networks.</li>


                        <li><strong>Performance Reporting</strong> – Providing insights, listener metrics, and campaign results.</li>
                    </ul>
                    <p>We make the process seamless, efficient, and tailored — so your radio campaign delivers measurable impact and strong ROI.</p>
                    <br>
                    <h4>Let Your Brand Voice Be Heard Across Dubai’s Airwaves</h4>
                    <p>
                        With millions of daily listeners tuning in, English Radio Advertising in Dubai remains one of the most powerful and cost-efficient ways to engage audiences across the UAE.
                        <br><br>
                        Let DataMySite help you design, produce, and broadcast a campaign that resonates — one that makes your brand heard, remembered, and trusted.
                        <br><br>
                        Contact us today to start your English Radio Advertising campaign across Dubai’s top FM networks — and amplify your brand presence like never before.
                    </p>
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
                                        <span class="badge">&nbsp;</span>Which are the top English radio stations in Dubai for advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Popular options include Virgin Radio 104.4, Dubai Eye 103.8, Dubai 92, Channel 4 FM, and Radio 1 — each targeting different audience segments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What’s the cost of English radio advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Rates vary depending on station, time slot, and ad duration. DataMySite offers packages to fit every marketing budget — from startups to major brands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I target specific areas or listener demographics?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Different stations have distinct listener bases, and we can help target by age group, profession, and location.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How long should my radio ad be?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most effective spots are 30 to 45 seconds long, delivering a clear and catchy message within a short timeframe.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can DataMySite handle production and voiceovers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Our in-house creative team handles scriptwriting, voice recording, and sound design — ensuring your ad sounds professional and engaging.</p>
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