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
                        <h2>Millions of Listeners</h2>
                        <h4>tune in every day to enjoy music, talk shows, and news in their native languages.</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in crafting targeted radio advertising campaigns for Hindi and Urdu stations in Dubai, ensuring your brand reaches the right audience with the right message. Whether you are promoting a product, service, event, or brand, radio advertising is an ideal medium to increase visibility, engagement, and sales.
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
                    <h4>Why Advertise on Hindi / Urdu Radio Stations in Dubai?</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Targeted Audience Reach
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse show" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Hindi and Urdu radio stations cater specifically to South Asian expatriates. Advertising on these platforms allows businesses to connect with a loyal and engaged audience that is culturally aligned with the content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Cost-Effective Marketing
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Compared to other advertising mediums like TV or outdoor billboards, radio provides high ROI at a fraction of the cost, making it suitable for both small businesses and large corporations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>High Engagement and Recall
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Listeners of Hindi and Urdu radio stations often form a strong connection with their favorite shows, meaning your ads are more likely to be noticed, remembered, and acted upon.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Cultural Relevance
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Radio advertising in native languages allows brands to deliver messages that resonate culturally, including the use of popular phrases, songs, and storytelling techniques familiar to the audience.</p>
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
                    <h4>Popular Hindi / Urdu Radio Stations in Dubai</h4>
                    <p>Some of the top Hindi/Urdu radio stations in Dubai include:</p>
                    
                </div> 
                <div class="col-lg-4">
                    <h5 class="text-theme">Radio Mirchi Dubai</h5>
                    <p>
                        Known for its Bollywood music and entertainment shows, it attracts thousands of listeners daily.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">City 101.6 FM</h5>
                    <p>
                        Offers music, talk shows, and news tailored for the South Asian audience in Dubai.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Hit FM Dubai</h5>
                    <p>
                        Features a mix of Hindi/Urdu music and live talk shows, making it ideal for brand promotions.
                    </p>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">Radio Zindagi</h5>
                    <p>
                        Popular among Hindi-speaking residents, with high listener engagement and loyalty.
                        <br>
                        <strong>Advertising on these stations ensures that your brand is visible to a relevant and attentive audience, increasing your chances of lead generation and conversions.</strong>
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


                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image164.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How Hindi / Urdu Radio Advertising Works</h4>
                    <ul>
                        <li><strong>Audience Analysis</strong>: We identify your target audience based on demographics, location, and listening habits.</li>


                        <li><strong>Ad Creation</strong>: Our team develops engaging scripts that communicate your message effectively.</li>


                        <li><strong>Voiceover Recording</strong>: Professional native speakers record the ads to ensure authenticity and clarity.</li>


                        <li><strong>Placement & Scheduling</strong>: Ads are strategically placed on top Hindi/Urdu stations during high-listenership hours.</li>


                        <li><strong>Monitoring & Optimization</strong>: We track performance, listener feedback, and adjust campaigns for maximum impact.</li>
                    </ul>
                    <br>
                    <h4>Benefits of Advertising with DataMySite</h4>
                    <p>
                        At DataMySite, we provide end-to-end radio advertising solutions in Dubai for Hindi/Urdu audiences:
                    </p>
                    <ul>
                        <li><strong>Customized Ad Campaigns</strong> – We craft ad scripts tailored to your brand and target audience, ensuring maximum engagement.</li>


                        <li><strong>Professional Voiceovers</strong> – Our native Hindi/Urdu voice artists deliver high-quality, clear, and engaging ad recordings.</li>


                        <li><strong>Optimal Scheduling</strong> – We help you select the best time slots for your ads to reach maximum listeners, such as peak commute hours or prime shows.</li>


                        <li><strong>Performance Tracking</strong> – Our campaigns include analytics and reporting to measure engagement and ROI.</li>


                        <li><strong>Affordable Packages</strong> – We offer flexible pricing options suitable for small businesses and large brands alike.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section  striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Key Advantages</h4>
                    <br>
                    <ul>
                        <li><strong>Brand Awareness</strong>: Radio ads help create instant recognition among your target audience.</li>


                        <li><strong>Quick Turnaround</strong>: Campaigns can be launched within days of finalizing ad scripts.</li>


                        <li><strong>Wide Reach</strong>: Access a large, diverse audience without high costs.</li>


                        <li><strong>Flexibility</strong>: Ads can run daily, weekly, or as part of long-term campaigns.</li>


                        <li><strong>Community Connection</strong>: Strengthen your brand’s connection with Dubai’s South Asian community.</li>
                    </ul>
                    <p>We make radio advertising simple, effective, and transparent — ensuring your brand gains both awareness and credibility in the Arabic-speaking community.</p>
                    <br>
                    <h4>Conclusion</h4>
                    <p>
                        Hindi and Urdu radio stations in Dubai offer a unique and effective platform to reach the South Asian community. With the right messaging and strategic placement, your brand can increase visibility, engagement, and leads.
                        <br><br>
                        At DataMySite, we combine industry expertise, creative ad development, and strategic media placement to ensure your campaigns are successful.
                        <br><br>
                        Start your Hindi/Urdu radio advertising campaign in Dubai today! Contact us for a free consultation and customized advertising plan..
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image172.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>Who should advertise on Hindi/Urdu radio stations in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Businesses targeting the South Asian expatriate community, including retail, education, entertainment, food & beverage, healthcare, and service sectors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How much does a radio ad cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pricing depends on station, ad duration, and time slots. At DataMySite, we offer competitive packages suitable for all budgets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How do I know which station is best for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team conducts a detailed audience and station analysis to recommend the most effective options.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I advertise in both Hindi and Urdu?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can create dual-language campaigns to reach the widest South Asian audience in Dubai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How long does it take to launch a campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Once the ad script is approved, campaigns can go live within 3–7 days, depending on station availability.</p>
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