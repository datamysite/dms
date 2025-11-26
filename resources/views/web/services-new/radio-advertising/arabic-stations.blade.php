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
                        <h2>Connect with the UAE’s Locals</h2>
                        <h4>Engage Arabic-Speaking Listeners with Trusted Voices Across the Airwaves</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands tap into this vibrant and loyal listener base through strategically planned Arabic radio advertising campaigns across Dubai’s most influential FM stations.
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
                    <h4>Why Choose Arabic Radio Advertising in Dubai</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Reach Millions of Arabic Listeners Daily
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arabic FM stations dominate the UAE airwaves, reaching millions of Emirati nationals and Arab expats from countries like Egypt, Lebanon, Syria, Jordan, and Saudi Arabia. Whether your goal is to grow brand recognition or drive local sales, Arabic radio ensures mass coverage across all Emirates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Builds Cultural & Emotional Connection
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arabic radio advertising speaks to listeners in their native language and cultural context, making your message more authentic, relatable, and trusted. A voice that sounds familiar builds far stronger connections than any other medium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Strong Presence During Commute Hours
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With long daily drives across Dubai and Abu Dhabi, radio remains a companion medium for many Arabic-speaking residents. Running your ads during morning and evening commute slots ensures your message reaches an alert, engaged audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Trusted Medium for Brand Endorsement
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arabic radio hosts are often local influencers and community figures. Having your brand endorsed or mentioned by a popular presenter adds a layer of credibility and trust that digital ads can’t replicate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Affordable, Repeatable, and Scalable
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arabic radio offers excellent cost-efficiency compared to TV or outdoor ads, allowing multiple daily ad plays for strong frequency and recall — ideal for both large brands and local businesses.</p>
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
                    <h4>Top Arabic Radio Stations in Dubai</h4>
                    <p>DataMySite manages campaigns across the UAE’s most popular Arabic FM channels — each with a distinct listener base and content style.</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Al Arabiya 99 FM</h5>
                    <p>
                        One of the leading Arabic music stations in Dubai, Al Arabiya 99 appeals to a wide audience of Emiratis and Arab expats who love contemporary Arabic hits. Perfect for retail, lifestyle, entertainment, and FMCG brands.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Al Khaleejiya 100.9 FM</h5>
                    <p>
                        A premium station catering primarily to Emirati nationals with Khaleeji music and cultural programming. Great for brands aiming to build local trust and high-end visibility.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Noor Dubai 93.9 FM</h5>
                    <p>
                        A station known for its family-oriented and community-based content, focusing on social, religious, and inspirational programming. Suitable for government initiatives, healthcare, and educational campaigns.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Radio Hala 95.6 FM</h5>
                    <p>
                        Energetic and youth-driven, Radio Hala mixes contemporary Arabic pop with interactive talk shows — ideal for entertainment, telecom, and youth-oriented brands.
                    </p>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">Panorama FM</h5>
                    <p>
                        Broadcasting across the UAE and Saudi Arabia, Panorama FM offers access to a regional audience, great for brands with GCC-wide reach and cross-border visibility goals.
                        <br><br>
                        <strong>Each of these stations provides multiple advertising options — from short audio spots and sponsorships to presenter mentions — ensuring your campaign reaches the right demographic in the right tone.</strong>
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
                    <h4>Industries That Benefit from Arabic Radio Advertising</h4>
                    <p>Arabic radio advertising in Dubai and the UAE works for brands across multiple sectors, especially those that rely on trust, community engagement, and broad exposure.</p>
                    <ul>
                        <li><strong>Retail & Supermarkets</strong> – Announce sales, promotions, and offers.</li>


                        <li><strong>Government & Public Awareness Campaigns</strong> – Spread initiatives and messages in local language.</li>


                        <li><strong>Healthcare & Hospitals</strong> – Reach families and local residents with health messages.</li>


                        <li><strong>Real Estate Developers</strong> – Promote property projects to Emirati investors and Arab expats.</li>


                        <li><strong>Automotive Companies</strong> – Announce new car models and finance deals.</li>


                        <li><strong>Education & Training</strong> – Market universities and vocational courses.</li>


                        <li><strong>Banks & Insurance Providers</strong> – Build brand trust and explain services clearly.</li>


                        <li><strong>Telecom & Technology</strong> – Launch new offers, plans, or digital apps.</li>
                    </ul>
                    <br>
                    <h4>Benefits of Arabic Radio Advertising</h4>
                    <p>
                        Reaches millions of native and Arab expatriate listeners across the UAE<br>
                        Culturally resonant communication that builds trust and relatability<br>
                        Affordable frequency and coverage across all Emirates<br>
                        Ideal for both national and local campaigns<br>
                        Flexibility in targeting by station and time slot
                        <br><br>
                        Perfect blend of audio emotion and brand recall
                        <br>
                        Easily integrated with digital, outdoor, or PR campaigns
                    </p>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section striped-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12">
                    <h4>Advertising Formats on Arabic Radio Stations</h4>
                    <p>We at DataMySite provide full-service radio advertising solutions — from concept to execution — using diverse ad formats tailored to your campaign goals.</p>
                    
                </div> 
                <div class="col-lg-4">
                    <h5 class="text-theme">Standard Commercial Spots</h5>
                    <p>
                        Broadcast short, high-impact ads (15, 30, or 45 seconds) during peak listening hours. Ideal for brand launches, retail offers, and service promotions.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Presenter Mentions</h5>
                    <p>
                        Have popular radio hosts talk about your brand in their own style. These organic endorsements are highly influential and often outperform traditional ad spots in recall.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Program Sponsorships</h5>
                    <p>
                        Sponsor specific shows, weather updates, or traffic reports to ensure consistent brand exposure and association with trusted content.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Custom Jingles & Sound Branding</h5>
                    <p>
                        Create a memorable audio identity through catchy Arabic jingles or sound logos that reinforce your brand’s personality.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Interviews & Feature Segments</h5>
                    <p>
                        Engage listeners with meaningful conversations about your brand, product, or service through radio interviews and expert features.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Event Tie-Ins & Live Broadcasts</h5>
                    <p>
                        Combine on-air presence with on-ground activations or event sponsorships, maximizing engagement and brand visibility.
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
                    <h4>Why Choose DataMySite for Arabic Radio Advertising in Dubai</h4>
                    <p>
                        DataMySite brings years of expertise in planning, producing, and managing Arabic radio campaigns that deliver real business results.
                        <br>
                        <strong>Our Services Include:</strong>

                    </p>
                    <ul>
                        <li>Selection of the best Arabic FM stations based on audience and region</li>


                        <li>Ad scriptwriting and Arabic voice-over production</li>


                        <li>Sponsorship and presenter endorsement coordination</li>


                        <li>Peak-hour scheduling for maximum exposure</li>


                        <li>Performance monitoring and post-campaign analytics</li>


                    </ul>
                    <p>
                        Our bilingual creative and media team ensures that every Arabic script is linguistically accurate, culturally relevant, and emotionally compelling, helping your brand build genuine resonance with Arabic listeners.
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
                    <h4>Campaign Planning Process</h4>
                    <br>
                    <ul>
                        <li><strong>Audience Research</strong> – Identify your ideal Arabic-speaking segment (Emirati nationals, Arab expats, families, youth, etc.)</li>


                        <li><strong>Station Selection</strong> – Choose from top networks based on listener profile and location.</li>


                        <li><strong>Creative Development</strong> – Produce powerful scripts, jingles, and voiceovers in classical or dialectal Arabic.</li>


                        <li><strong>Ad Scheduling & Placement</strong> – Secure prime time slots during peak hours (morning/evening drive time).</li>


                        <li><strong>Campaign Reporting</strong> – Analyze reach, frequency, and listener response.</li>
                    </ul>
                    <p>We make radio advertising simple, effective, and transparent — ensuring your brand gains both awareness and credibility in the Arabic-speaking community.</p>
                    <br>
                    <h4>Broadcast Your Brand Message in the UAE’s Native Language</h4>
                    <p>
                        Arabic radio is more than a medium — it’s a bridge that connects your brand to millions of listeners across cultures and communities.
                        <br><br>
                        With DataMySite’s Arabic Radio Advertising services, you can build trust, inspire loyalty, and amplify your presence in the UAE’s local market.
                        <br><br>
                        Contact us today to launch your campaign across the top Arabic radio stations in Dubai, Abu Dhabi, and beyond — and let your brand voice be heard where it truly matters.
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
                                        <span class="badge">&nbsp;</span>Which are the top Arabic FM stations in Dubai for advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Stations like Al Arabiya 99, Al Khaleejiya 100.9, Noor Dubai 93.9, and Radio Hala 95.6 are among the most popular.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How much does Arabic radio advertising cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs depend on the station, duration, frequency, and time slot. DataMySite provides tailored packages to match your goals and budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I choose specific Emirates or target Arabic-speaking expats?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes — we can target by geography, listener profile, and even dialect preference to ensure precision in reach.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What makes Arabic radio advertising effective?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It creates emotional resonance, builds trust, and reaches large, loyal audiences who tune in daily.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Does DataMySite handle Arabic ad production?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we manage the full process — from Arabic copywriting and voiceover casting to production, scheduling, and post-campaign analysis.</p>
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