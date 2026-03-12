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
                        <h2>Make Your Brand Unmissable</h2>
                        <h4>with Transit Media in the UAE</h4>
                        <br>
                        <p>Dubai moves fast, and so do its people. Commuters and tourists rush from one place to another each day. Their eyes scan the world around them. That is where transit media in the UAE comes in. You can position your brand right in front of them when they least expect it but need it most with transit media.</p>
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-6">
                    <h4>About Transit Media</h4>
                    <br>
                    <p>At <strong>DataMySite</strong>, we turn everyday journeys into brand experiences. A taxi on Sheikh Zayed Road. A metro train packed with professionals. A bus winding through bustling streets. Each one carries your message and makes sure people see and act on it.</p>
                    <iframe class="service-iframe transit-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
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
            </div>

          </div>

        </section>



        <section id="testimonials" class="testimonials striped-section section">
          @include('web.includes.elements.clients')
        </section>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>

        <section class="tm-stats striped-section">
            <div class="container">
              <div class="in">
                <div class="top">
                  <div>
                    <div class="tag">Unmatched Reach</div>
                    <h2>Dubai Transit by the<br><em>Numbers</em></h2>
                  </div>
                  <a href="https://datamysite.com/contact-us" class="btn btn-r">Plan My Campaign <span class="arr">→</span></a>
                </div>
                <div class="reach-grid">
                  <div class="reach-card">
                    <div class="ric">🚇</div>
                    <div class="rv">650K+</div>
                    <div class="rn">Metro Daily Riders</div>
                    <div class="rs">RTA Dubai Metro — Red & Green Lines</div>
                  </div>
                  <div class="reach-card">
                    <div class="ric">✈️</div>
                    <div class="rv">90M+</div>
                    <div class="rn">Airport Passengers / Year</div>
                    <div class="rs">DXB — world's busiest int'l airport</div>
                  </div>
                  <div class="reach-card">
                    <div class="ric">🚕</div>
                    <div class="rv">30K+</div>
                    <div class="rn">Taxis on Dubai Roads</div>
                    <div class="rs">Full city coverage, 24/7 impressions</div>
                  </div>
                  <div class="reach-card">
                    <div class="ric">🚌</div>
                    <div class="rv">1,500+</div>
                    <div class="rn">Bus Routes UAE-wide</div>
                    <div class="rs">Wraps, bus stops & interior panels</div>
                  </div>
                </div>
              </div>
          </div>
        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-7 vertical-center">
                    <h4>What Makes DataMySite Different?</h4>
                    <p>Here's what we offer:</p>
                    <p>
                       We know Dubai. We know its roads and its people. Our team does not place ads—they create campaigns that stick.
                    </p>
                    <ul>
                        <li><strong>Smart Targeting</strong> – We place your ads where they will have the highest impact. This makes sure they are seen by the right people at the right time.</li>
                        <li><strong>Creative That Stands Out</strong> – We design campaigns that demand attention and spark conversation.</li>
                        <li><strong>End-to-End Service</strong> – We handle everything from concept to execution.</li>
                    </ul>
                    <p>Dubai is a city of opportunities. Transit media in the UAE ensures your brand is everywhere. Let us create something unforgettable. Contact DataMySite today.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image22.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-5">
                    <img src="{{URL::to('/public/section-images/image23.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7">
                    <h4>How We Differentiate Your Brand with Transit Advertising in Dubai?</h4>
                    <p>
                        We do not believe in putting ads on vehicles and calling it a day. We create transit media campaigns in Dubai that demand attention.
                    </p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-210">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-210" data-aria-expanded="true" data-aria-controls="faqCollapse-210">
                                        <span class="badge">&nbsp;</span>Taxi Advertising – Your Brand, Citywide
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-210" class="collapse show" aria-labelledby="faqHeading-210" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Taxis are everywhere. They move through the busiest streets and pick up clients from five-star hotels. Your brand travels through Dubai and grabs eyeballs with full taxi wraps and rooftop ads.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Bus Advertising – Large and Impossible to Miss
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Buses do not move people—they move brands. Buses ensure your message gets seen, whether it is a full bus wrap dominating the road or side panel ads reinforcing your brand’s presence. What about bus shelters? That’s premium ad space right where commuters wait, giving them time to absorb your message.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Metro & Tram Advertising – High Traffic, High Impact
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai Metro moves thousands of professionals, residents, and tourists every day. That’s a captive audience—one that sees your brand while they wait, travel, and think. Options include:</p>
                                    <ul>
                                        <li><strong>In-Train Ads</strong> – Directly in front of passengers for the entire ride.</li>
                                        <li><strong>Station Branding</strong> – Complete takeovers for total dominance.</li>
                                        <li><strong>Platform Billboards</strong> – Placed right where people stand and stare.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-213">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-213" data-aria-expanded="false" data-aria-controls="faqCollapse-213">
                                        <span class="badge">&nbsp;</span>RTA Fleet Branding – Moving Billboards That Work
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-213" class="collapse" aria-labelledby="faqHeading-213" data-parent="#accordion">
                                <div class="card-body">
                                    <p>From trams to government transport fleets, these vehicles travel through high-value areas, ensuring maximum exposure for your brand.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Transit Advertising in Dubai Works?</h4>
                    <p>
                       People ignore digital ads. They scroll past them, block them, or just don’t care. But a massive, beautifully designed ad on a bus? A sleek, unmissable wrap on a metro? That sticks. It becomes part of their daily routine, a familiar sight in a city that never slows down.
                    </p>
                    <ul>
                        <li><strong>You Can’t Skip It</strong> – No “close” button. No ad blocker. Just pure, in-your-face brand visibility.</li>
                        <li><strong>People Actually Pay Attention</strong> – When you’re stuck in traffic or waiting for a bus, you look around. Your brand becomes part of their world.</li>
                        <li><strong>It Reaches the Right People</strong> – Whether it’s a CEO heading to a meeting or a shopper planning their next big purchase, our transit media campaigns in the UAE put your message exactly where it needs to be.</li>
                    </ul>
                    <br>
                    <h4>Why Transit Media Advertising Delivers Real ROI?</h4>
                    <p>
                       This is not about putting up an ad. It is about creating an experience as well as a brand memory that stays. Here is why our Dubai transit media services bring results.
                    </p>
                    <ul>
                        <li><strong>Longer Exposure</strong> – Transit ads stay in sight for months, unlike digital ads that disappear in seconds.</li>
                        <li><strong>Citywide Coverage</strong> – Your brand is not stuck in one place. It moves and reaches different areas.</li>
                        <li><strong>Perfect for Any Business</strong> – Transit media works whether you sell luxury watches or coffee. It builds trust and awareness.</li>
                        <li><strong>Affordable Advertising</strong> – Transit media gives long-term visibility for a one-time cost compared to online ads.</li>
                    </ul>
                    
                    
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section class="tm-captive">
            <div class="container">
              <div class="in">
                <div>
                  <div class="tag w">Why Transit Media Works</div>
                  <h2>Captive Audiences.<br><em>Zero Scroll-Past.</em></h2>
                  <p>Unlike digital ads that get skipped, transit media audiences are stationary, attentive, and repeatedly exposed to your brand — with no ability to close or skip.</p>
                  <div class="cap-list">
                    <div class="cap-item"><span class="cck">✓</span> Metro riders commute 2x daily — same ad, every day</div>
                    <div class="cap-item"><span class="cck">✓</span> In-flight passengers have zero distractions for 3–6 hrs</div>
                    <div class="cap-item"><span class="cck">✓</span> Elevator ads deliver 30–90 sec undivided attention</div>
                    <div class="cap-item"><span class="cck">✓</span> Airport lounges attract high-income, decision-making audiences</div>
                  </div>
                </div>
                <div class="cap-r">
                  <a href="https://datamysite.com/contact-us" class="bbtn btn-w">Get Transit Media Plan <span class="arr">→</span></a>
                  <a href="https://api.whatsapp.com/send/?phone=971525287259" class="bbtn btn-ow">💬 WhatsApp for Rates</a>
                  <span style="font-size:11px;color:rgba(255,255,255,.3);align-self:center">Free · Rates sent in 60 min</span>
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

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>Is Transit Advertising in Dubai Effective for Luxury Brands?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Several luxury brands use transit advertising to market their products. Luxury brands gain significant exposure with premium placement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I Choose Which Areas My Transit Ads Appear In?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We help you target specific business districts or residential areas to reach the right audience.</p>
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