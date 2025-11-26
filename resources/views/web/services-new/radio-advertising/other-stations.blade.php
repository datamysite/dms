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
                        <h2>Offering Brands a Unique Opportunity</h2>
                        <h4>to connect with specialized listener groups.</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses leverage other radio stations in Dubai to run targeted and impactful advertising campaigns. Whether your goal is brand awareness, product promotion, or event marketing, advertising on these stations ensures your message reaches the right community at the right time.
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
                    <h4>Why Advertise on Other Radio Stations in Dubai?</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Niche Audience Targeting
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse show" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Other radio stations in Dubai cater to specific expatriate communities, allowing brands to communicate directly with their target audience. For example, a brand targeting the Filipino community can advertise on Filipino radio stations to reach listeners more effectively than through general media.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Cultural Relevance
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Ads on these stations can be tailored culturally and linguistically, making your message more relatable and memorable. Whether it’s using a native language, cultural references, or local community themes, this approach increases listener engagement and brand recall.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Cost-Effective Marketing
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Advertising on niche radio stations is often more affordable than mainstream media, offering high ROI for small businesses and international brands looking to tap into specific markets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>High Listener Loyalty
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Listeners of community and international radio stations are typically highly engaged and consistently tune in to their preferred stations, making it a reliable platform for repeated exposure.</p>
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


        <section id="service-cards" class="blog-section section  striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Popular Other Radio Stations in Dubai</h4>
                    <p>Dubai hosts a variety of other radio stations that cater to diverse communities, including:</p>
                    <ul>
                        <li><strong>Radio One Filipino</strong><br> – Popular among the Filipino community, offering music, talk shows, and community news.</li>


                        <li><strong>Radio France Internationale (RFI)</strong><br> – Targets French-speaking expatriates, with news, music, and cultural programs.</li>


                        <li><strong>Russian Radio Dubai</strong><br> – Serves the Russian-speaking community with a mix of news, entertainment, and music programs.</li>


                        <li><strong>Asian Radio Network</strong><br> – Covers multiple South and Southeast Asian languages, including Tamil, Malayalam, and Bengali.</li>
                    </ul>
                    <p>By advertising on these stations, businesses can connect with niche communities in a way that mainstream advertising cannot achieve.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image184.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image185.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Advertising with DataMySite on Other Radio Stations</h4>
                    <p>At DataMySite, we provide end-to-end solutions for radio advertising campaigns targeting niche audiences in Dubai:</p>
                    <ul>
                        <li><strong>Customized Ad Campaigns</strong><br> – We craft messages that resonate with specific communities, including language, cultural nuances, and community trends.</li>


                        <li><strong>Professional Voiceovers</strong><br> – Native speakers deliver ads to ensure authenticity and engagement.</li>


                        <li><strong>Strategic Placement</strong><br> – Ads are scheduled during peak listening hours for maximum exposure.</li>


                        <li><strong>Performance Monitoring</strong><br> – Campaigns are tracked to measure engagement, listener reach, and ROI.</li>


                        <li><strong>Affordable Packages</strong><br> – Flexible pricing ensures businesses of all sizes can advertise effectively.</li>
                    </ul>
                    <br>
                    <h4>How Other Radio Stations Advertising Works</h4>
                    <ul>
                        <li><strong>Audience Analysis</strong>: Identify the specific community or niche you want to target.</li>


                        <li><strong>Ad Creation</strong>: Develop culturally and linguistically appropriate ad scripts.</li>


                        <li><strong>Voiceover Production</strong>: Hire native speakers to record professional ads.</li>


                        <li><strong>Ad Placement</strong>: Strategically schedule ads on stations to reach maximum listeners.</li>


                        <li><strong>Monitoring & Optimization</strong>: Track campaign performance and optimize for better engagement.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section  striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Key Advantages of Advertising on Other Radio Stations</h4>
                    <br>
                    <ul>
                        <li><strong>Direct Community Reach</strong>: Connect directly with niche communities like Filipinos, Russians, and French expatriates.</li>


                        <li><strong>Enhanced Brand Loyalty</strong>: Culturally relevant messaging fosters stronger connections and loyalty.</li>


                        <li><strong>Cost-Effective Campaigns</strong>: Reach high-value audiences without the high costs of mainstream advertising.</li>


                        <li><strong>Flexible Scheduling</strong>: Choose daily, weekly, or long-term campaigns based on your goals.</li>


                        <li><strong>Unique Market Positioning</strong>: Stand out by showing cultural awareness and inclusivity in your campaigns.</li>
                    </ul>
                    <br>
                    <h4>Conclusion</h4>
                    <p>
                        Advertising on other radio stations in Dubai is a powerful way to reach niche audiences that mainstream platforms often miss. By delivering culturally and linguistically relevant messages, businesses can increase brand visibility, build loyalty, and drive conversions.
                        <br><br>
                        DataMySite offers complete solutions for radio advertising on these stations, from strategy and ad creation to placement and performance tracking.
                        <br><br>
                        Start your campaign today and connect with Dubai’s diverse communities through targeted radio advertising!

                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image186.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>Who should advertise on other radio stations in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Businesses targeting niche expatriate communities such as Filipino, Russian, French, and other international residents. Suitable industries include retail, education, restaurants, travel, entertainment, and healthcare.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How much does it cost to advertise on these stations?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary based on the station, ad duration, and time slots. At DataMySite, we provide competitive and customizable pricing packages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can ads be produced in the native language of the community?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we create ads in the language of your target audience, using native speakers to ensure clarity, authenticity, and engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How long does it take to launch a campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns can go live within 3–7 days after ad approval and scheduling.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How is the success of a campaign measured?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We track key performance indicators such as ad frequency, reach, listener engagement, and ROI to ensure your campaign is successful.</p>
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