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
                        <h2>Improve Your Brand's Visibility</h2>
                        <h4>with Our DOOH Advertising Solutions</h4>
                        <br>
                        <p>
                            Your brand needs visibility that makes an impact. Your message needs to grab attention in Dubai's busy spaces. DOOH Advertising Dubai puts your brand on brilliant digital screens. These displays catch the eyes across the UAE, making your content impossible to miss. Consult us for this type of advertising solution at DataMySite.
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
                    <h4>Why Choose Digital Out-of-Home Ads UAE?</h4>
                    <p>
                        Traditional advertising lacks the flexibility modern brands need. DOOH Advertising Dubai changes your content in real-time to match market conditions. Your campaigns adapt to time, weather, and events - keeping your message fresh and relevant.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <iframe class="service-iframe dooh-iframe" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Our Digital out of home ads Services</h4>
                    <p>Here's what we offer:</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Premium Locations across Dubai</h5>
                    <p>
                        Your ads need the right spot to work. We pick prime spaces where your ideal customers spend time. We've secured prime spots in Dubai's most influential areas. From Business Bay to Dubai Marina, your DOOH advertising campaigns appear where they matter most. Financial districts, shopping centres, and transit hubs showcase your brand to high-value audiences.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Data-Driven Success</h5>
                    <p>
                        Numbers tell the real story. Our DOOH advertising analytics track viewer engagement and campaign performance. You'll see exactly how your investment translates into brand awareness and consumer action.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Smart Technology Integration</h5>
                    <p>
                        Your DOOH Advertising campaign works harder through smart integration. Social media feeds, stock updates, and news tickers keep content dynamic. We place your Innovative DOOH campaigns GCC at the forefront of advertising technology.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Maximum Impact, Minimum Waste</h5>
                    <p>
                        Every dirham counts in your marketing budget. DOOH Advertising Dubai targets specific locations and times for optimal audience reach. Your message appears when decision-makers are most receptive.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Beyond Static Displays</h5>
                    <p>
                        Static billboards fade into the background. Digital out-of-home ads UAE command attention through motion and interactivity. Your brand story unfolds through compelling visual narratives that stop viewers in their tracks.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Measurable Returns</h5>
                    <p>
                        Track your campaign's success in real numbers. Our DOOH Advertising platform provides detailed analytics on viewer engagement and exposure time. You'll know exactly how your investment performs.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Environmental Responsibility</h5>
                    <p>
                        Print advertising creates waste. DOOH Advertising reduces your environmental impact while increasing campaign effectiveness. Your brand shows corporate responsibility through sustainable advertising choices.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Expert Campaign Management</h5>
                    <p>
                        We handle every aspect of your DOOH Advertising campaign. From design to deployment, our team ensures flawless execution. Your message reaches the right audience at the right time.
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
                    <h4>Why choose Datamysite for DOOH</h4>
                    <br>

                    <h5>Our Approach to DOOH Campaigns</h5>
                    <p>
                       We build innovative DOOH campaigns GCC that turn heads and bring returns with these services –
                    </p>

                    <h5>Premium Screen Selection</h5>
                    <p>
                       Your brand needs the perfect spot to shine. We've secured access to Dubai's most sought-after digital displays. From financial centres to luxury malls, your message reaches high-value viewers.
                    </p>
                    
                    <h5>Rich Dynamic Content</h5>
                    <p>
                       Static ads fade into background noise. Black and white won't cut it anymore. Rich videos and live updates make people stop and notice. Your content springs to life with smooth animations and crisp video. Live updates keep your message fresh and relevant throughout the day.
                    </p>
                    
                    <h5>Smart Campaign Integration</h5>
                    <p>
                       Numbers tell the truth about ads that work. Watch your reach grow with detailed reports and performance tracking done by our team. Your DOOH Advertising works in harmony with other marketing channels. We sync digital displays with your social media, web presence, and traditional advertising for maximum impact.
                    </p>
                    
                    <h5>Drive Business Growth with DOOH Advertising</h5>
                    <p>
                       Your brand can't afford to blend in. From new product buzz to fresh market push, DOOH Advertising Dubai puts you where you need to be. Talk to us about making your next campaign unmissable. Contact us to discover how DOOH Advertising transforms your brand visibility. Our team creates campaigns that capture attention and drive results in Dubai's dynamic market.
                    </p>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
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
                                        <span class="badge">&nbsp;</span>What makes DOOH different from standard digital ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>DOOH is "Digital Out-Of-Home"—think large digital screens in malls or streets. It combines the impact of OOH with the flexibility of digital (video, animation, real-time updates).</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I trigger my DOOH ads based on the weather?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! We can program your ads to change based on live data. For example, a beverage brand can show a "Cold Drink" ad only when the temperature exceeds 35°C.</p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Is DOOH more expensive than static billboards?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While the "per-slot" cost is lower because you share the screen, the production is more cost-effective as there are no printing or installation fees.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How do you track who sees a digital screen?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We use anonymous sensor technology and mobile signal data to provide "Impression" reports, showing how many people were in the "viewing cone" of the screen.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can I run a DOOH campaign for just one day?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. One of the biggest benefits of DOOH is the ability to run "Short-Burst" or "Flash" campaigns for 24-hour sales or specific events.</p>
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