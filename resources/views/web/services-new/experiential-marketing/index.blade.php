@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$service->name}}</h1>
                        <h2>Create Memorable Brand Experiences</h2>
                        <br>
                        <p>
                            In today’s competitive Dubai market, brands need more than just traditional advertising—they need to create experiences that connect emotionally and physically with their audience. This is where experiential marketing comes in.
                            <br><br>
                            At DataMySite, we specialize in experiential marketing campaigns in Dubai and across the UAE, offering innovative solutions that leave lasting impressions and drive engagement, awareness, and leads. Our campaigns focus on interactive experiences that immerse your audience in your brand story.

                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form">
                                @csrf
                                <input type="hidden" name="service" value="{{$service->name}}" required>
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

                <div class="col-lg-6">
                    <h4>What is Experiential Marketing?</h4>
                    <p>
                        Experiential marketing is a strategy that engages consumers directly through live, interactive experiences. Unlike standard advertising, it allows your audience to experience your brand in real-time, creating stronger emotional connections, higher brand recall, and increased loyalty.
                        <br>
                        Experiential marketing can take many forms, from events, activations, and product sampling to innovative mobile and outdoor campaigns. In Dubai, where residents are exposed to multiple marketing channels daily, experiential marketing cuts through the noise and makes your brand memorable.
                    </p>
                    <div class="faq " id="accordion">
                        @foreach($subservices as $key => $val)
                            @php $s = $key; @endphp
                            <div class="card">
                                <div class="card-header" id="faqHeading-{{$s}}">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$s}}" data-aria-expanded="true" data-aria-controls="faqCollapse-{{$s}}">
                                            <i class="{{$val->icon}}"></i> &nbsp; {{$val->name}}
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-{{$s}}" class="collapse" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{{$val->description}}</p>
                                        <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
                    <h4>Our Experiential Marketing Services in Dubai</h4>
                    <p>At DataMySite, we offer four unique experiential marketing categories designed to elevate your brand presence:</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Top Golf Activations</h5>
                    <p>
                        Top Golf activations combine sports, entertainment, and brand messaging to create a fun and interactive experience. These campaigns are ideal for:
                    </p>
                    <ul>
                        <li>Engaging audiences in leisure environments</li>
                        <li>Product launches and promotional events</li>
                        <li>Lead generation through on-site participation</li>

                    </ul>
                    <p>
                        Participants enjoy branded games, challenges, and competitions while interacting with your products or services. The social and digital shareability of these events amplifies brand reach beyond the physical venue.
                        <br>
                        <strong>Benefits:</strong>
                    </p>
                    <ul>
                        <li>Direct audience engagement</li>
                        <li>Increased social media exposure</li>
                        <li>Lead collection and data capture</li>
                        <li>High brand recall</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Mall Activations</h5>
                    <p>
                        Dubai malls are high-traffic hubs, making mall activations a powerful way to reach thousands of consumers in one place. Our mall activation campaigns include:
                    </p>
                    <ul>
                        <li>Interactive booths and pop-up experiences</li>
                        <li>Product demonstrations and sampling</li>
                        <li>Competitions and games with branded prizes</li>
                        <li>Photo opportunities and social media integration</li>

                    </ul>
                    <p>
                        Mall activations are perfect for B2C brands, retail promotions, or awareness campaigns, allowing your brand to connect with audiences in a controlled, high-engagement environment.
                        <br>
                        <strong>Benefits:</strong>
                    </p>
                    <ul>
                        <li>Immediate consumer engagement</li>
                        <li>Strong footfall exposure</li>
                        <li>Data collection for follow-ups</li>
                        <li>Boosted brand visibility in premium locations</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Hot Air Balloon Activations</h5>
                    <p>
                        For brands seeking a truly unique and unforgettable experience, hot air balloon activations are ideal. These campaigns allow participants to:
                    </p>
                    <ul>
                        <li>Enjoy a spectacular aerial experience</li>
                        <li>Engage with your brand during a once-in-a-lifetime adventure</li>
                        <li>Capture stunning content for social media and PR</li>
                    </ul>
                    <p>
                        Hot air balloon activations are perfect for luxury brands, travel, lifestyle, or experiential campaigns aimed at creating a high-impact brand story.
                        <br>
                        <strong>Benefits:</strong>
                    </p>
                    <ul>
                        <li>High media and social coverage potential</li>
                        <li>Memorable and exclusive brand experience</li>
                        <li>Emotional connection with participants</li>
                        <li>Unique content creation opportunities</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Tesla Wrap Activations</h5>
                    <p>
                        Tesla wrap activations involve transforming Tesla vehicles into mobile, branded experiences. These campaigns allow your brand to:
                    </p>
                    <ul>
                        <li>Reach audiences across Dubai with eye-catching mobile displays</li>
                        <li>Conduct interactive street-level campaigns</li>
                        <li>Create viral content through photos and videos of wrapped vehicles</li>
                    </ul>
                    <p>
                        Tesla wrap activations are ideal for innovative, tech-savvy, and luxury brands, helping you stand out in high-traffic areas and upscale locations.
                        <br>
                        <strong>Benefits:</strong>
                    </p>
                    <ul>
                        <li>Highly visible and mobile brand presence</li>
                        <li>Instagram-worthy content for digital amplification</li>
                        <li>Targeted audience reach across Dubai</li>
                        <li>Modern and innovative brand positioning</li>

                    </ul>
                </div>
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose Experiential Marketing in Dubai?</h4>
                    <p>Dubai is a city of experiences, attracting residents and tourists who are constantly exposed to media and advertising. Experiential marketing allows your brand to:</p>
                    <ul>
                        <li><strong>Cut through the noise:</strong><br> Create memorable interactions that stand out.</li>


                        <li><strong>Engage multiple senses:</strong><br> Touch, sight, sound, and movement make your brand unforgettable.</li>


                        <li><strong>Drive social sharing:</strong><br> Encourage attendees to share their experiences online, expanding your brand reach.</li>


                        <li><strong>Collect valuable data:</strong><br> Gather participant information for follow-ups and conversion.</li>


                        <li><strong>Build brand loyalty:</strong><br> Experiences create emotional connections that last beyond the event.</li>
                    </ul>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" class="side-image" width="100%" alt="Why choose us">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section striped-section  section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image137.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>Why Partner with DataMySite for Experiential Marketing in Dubai</h4>
                    <p>
                        At DataMySite, we combine creativity, strategy, and execution to deliver experiential campaigns that resonate with Dubai audiences. Our team ensures:
                    </p>
                    <ul>
                        <li><strong>End-to-end campaign management</strong>: From concept design to event execution and post-event analytics.</li>


                        <li><strong>Customizable experiences</strong>: Tailored to your brand goals, audience, and budget.</li>


                        <li><strong>Data-driven results</strong>: We measure engagement, leads, and ROI for every campaign.</li>


                        <li><strong>Multi-channel integration</strong>: Amplify experiences with social media, PR, and digital marketing.</li>


                        <li><strong>Local expertise</strong>: We understand Dubai’s market, demographics, and cultural preferences.</li>
                    </ul>
                    <br>
                    <h4>Conclusion</h4>
                    <p>
                        Experiential marketing in Dubai is more than an event—it’s a strategic tool to build emotional connections, generate leads, and create buzz.
                        <br><br>
                        Whether it’s Top Golf activations, mall activations, hot air balloon adventures, or Tesla wrap campaigns, DataMySite delivers innovative and memorable brand experiences designed to maximize engagement, awareness, and ROI.
                        <br><br>
                        Bring your brand to life in Dubai. Contact DataMySite today to design your next experiential marketing campaign!

                    </p>
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section  pr-blogs-section">

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

        <section id="service-cards" class="blog-section section striped-section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>What types of brands benefit from experiential marketing?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Any brand seeking to engage customers directly, build awareness, or create lasting impressions. Retail, lifestyle, luxury, tech, and F&B brands benefit most.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long does an experiential campaign last?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaign duration depends on the concept—mall activations may run for days or weeks, while hot air balloon or Tesla wrap campaigns may be single-day events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can campaigns be customized for specific audiences?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Each activation is tailored for your target audience, event location, and marketing goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Do you provide measurement and reporting?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We track engagement metrics, leads, social shares, and media coverage to ensure ROI.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can experiential marketing be combined with digital campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We integrate social media, influencer marketing, and PR to maximize reach and engagement.</p>
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