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
                        <p>At DataMySite, we are the UAE's most comprehensive transit media partner. From full taxi wraps on Dubai's fleet to metro station takeovers, airport advertising, and boat branding on the waterfront — we plan, execute, and manage end-to-end transit advertising campaigns that deliver citywide visibility and measurable results.</p>
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
                    <h2>Why <em>Transit Media Advertising</em> <br>in Dubai is a Strategic Advantage</h2>
                  </div>
                  <a href="https://datamysite.com/contact-us" class="bbtn btn-r">Plan My Campaign <span class="arr">→</span></a>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <p>
                            Transit advertising works where other channels struggle: in the physical world, at scale, with no ad blockers. Here's why the UAE's most successful brands consistently invest in transit media:
                        </p>
                        <ul>
                            <li>Can't be skipped — transit ads exist in the real world; no close button, no scroll</li>
                            <li>Massive citywide reach — a single taxi wrap travels an average of 200 km per day across all 33 districts of Dubai</li>
                            <li>Repeated exposure — commuters on the Dubai Metro take an average of 22 journeys per month, seeing platform and carriage ads every ride</li>
                            <li>Contextual relevance — your brand reaches audiences while they travel to offices, hotels, shopping malls, and business districts</li>
                            <li>Complements digital marketing — transit ads dramatically increase the recall rate of concurrent digital campaigns</li>

                        </ul>
                    </div>
                    <div class="col-lg-5">
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
              </div>
          </div>
        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-7 vertical-center">
                    <h4>Who Benefits Most from Transit Advertising in Dubai?</h4>
                    <br>
                    <ul>
                        <li><strong>Real estate developers</strong> — targeting commuters on routes near project locations<br><br></li>
                        <li><strong>Hospitality and tourism</strong> — airport and hotel zone campaigns<br><br></li>
                        <li><strong>Retail and FMCG</strong> — mass-reach commuter campaigns across all demographics<br><br></li>
                        <li><strong>Luxury brands</strong> — premium taxi, tram, and marina advertising<br><br></li>
                        <li><strong>Technology and telecom</strong> — metro and business district transit<br><br></li>
                        <li><strong>Food delivery and restaurant chains</strong> — bus and taxi coverage in residential areas<br><br></li>
                        <li><strong>Government and public sector</strong> — citywide awareness campaigns<br><br></li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image22.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Transit Media Advertising Services</h4>
                </div>
                <div class="col-lg-6">
                    <h5>Taxi Advertising in Dubai</h5>
                    <p>
                        Dubai's RTA taxi fleet is one of the largest in the world, operating 24/7 across all areas of the emirate. Taxi advertising delivers your brand into every corner of Dubai — from five-star hotel drop-offs to business parks, residential communities, and the airport.
                        <br>
                        Formats available: full body wraps, rear panel ads, door ads, rooftop light boxes, and in-cabin screen advertising.
                        <br>
                        We offer placements across all RTA-approved taxi fleets including the Red Taxi, Blue Taxi, Pink Taxi (female-only), Red Airport Taxi, and Abu Dhabi Taxi. Ideal for brands targeting high-income professionals, tourists, and business travellers.

                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Dubai Metro Advertising</h5>
                    <p>
                       The Dubai Metro carries over 700,000 passengers daily across the Red and Green lines. These are professional commuters, residents, and tourists — a captive, engaged audience with high purchasing power.
                        <br>
                        Metro advertising options include: in-carriage ads (directly in front of passengers for the full journey), platform billboards (where passengers stand and wait), station wall wraps (large-format murals at key stations), DOOH screens inside the metro system, metro station takeovers (100% brand domination at a chosen station), and metro pillar branding.
                        <br>
                        Landmark stations for advertising include Mall of the Emirates, Dubai Mall/Burj Khalifa, DMCC (JLT), and Union Station — among the highest-traffic hubs in the network.

                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Bus Advertising in Dubai</h5>
                    <p>
                        RTA buses cover routes that the metro doesn't reach — serving suburban communities, industrial areas, labour camps, and key residential corridors. Bus advertising delivers your message across the full breadth of Dubai's geography.
                        <br>
                        Formats: full bus wraps (entire exterior), side panel ads, rear panel ads, and bus shelter advertising. Full bus wraps in particular are among the most visually impactful outdoor formats available — turning a vehicle into a moving billboard visible to thousands of pedestrians and motorists daily.

                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Airport Advertising in Dubai</h5>
                    <p>
                        Dubai International Airport (DXB) is one of the world's busiest airports — handling over 86 million passengers per year. Airport advertising places your brand in front of a globally diverse, high-net-worth, decision-making audience at a moment of peak attention.
                        <br>
                        We manage advertising placements across DXB Terminal 1, 2, and 3, as well as Al Maktoum International Airport, Sharjah Airport, and connections to major Indian airports. Formats: baggage belt branding, departure gate displays, terminal wall wraps, digital screens, and walkway wraps.
                        <br>
                        Airport advertising is particularly effective for: luxury brands, real estate, financial services, automotive, tourism, hospitality, and B2B solutions.

                    </p>
                </div>


                <div class="col-lg-6">
                    <h5>Airline Advertising</h5>
                    <p>
                        Your brand can fly with the passengers. We offer advertising placements aboard Emirates, Etihad, flydubai, Air Arabia, and SpiceJet — through in-flight magazine ads, boarding pass branding, seat-back screen advertising, and tray table mats. Airline advertising reaches a captive, high-attention audience during long-haul and regional flights — with dwell times of 1–14 hours.

                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Tram Advertising in Dubai</h5>
                    <p>
                        The Dubai Tram connects JBR, Dubai Marina, Media City, and Internet City — servicing one of Dubai's most affluent and technology-forward catchment areas. Tram ads — including full exterior wraps, window vinyls, and interior cards — deliver premium brand visibility to high-income residents, media professionals, and tourists. Ideal for luxury, lifestyle, tech, and F&B brands.

                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Boat & Waterfront Advertising</h5>
                    <p>
                        Dubai's waterfront — from the Marina and JBR Beach to the Dubai Creek and Palm Jumeirah — is one of the city's most premium leisure environments. Boat advertising (full yacht wraps, ferry branding, dhow wraps) delivers your brand to beach crowds, waterfront diners, hotel guests, and tourists on water taxi routes. A genuinely unique and premium format.

                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Truck & Fleet Branding</h5>
                    <p>
                        Transform your company's vehicles — or partner with our fleet network — into moving billboards across Dubai's main highways and industrial corridors. Truck advertising is a cost-effective, long-duration format with exceptional citywide coverage. Ideal for: logistics, FMCG, construction, and B2B suppliers.

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
                    <h4>How We Plan and Execute Your Transit Media Campaign</h4>
                    <br>
                    <ul>
                        <li><strong>Step 1</strong> — Campaign Briefing: Define objectives (awareness, consideration, or conversion), audience, geography, and budget.<br><br></li>
                        <li><strong>Step 2</strong> — Media Planning: We recommend the optimal transit formats and coverage based on your audience's daily routes and touchpoints.<br><br></li>
                        <li><strong>Step 3</strong> — Creative Production: We design campaign artwork compliant with RTA and UAE advertising guidelines for each format.<br><br></li>
                        <li><strong>Step 4</strong> — Permit Management: We handle all RTA approvals, permits, and compliance paperwork.<br><br></li>
                        <li><strong>Step 5</strong> — Installation & Activation: Professional installation across all vehicles, stations, or airports.<br><br></li>
                        <li><strong>Step 6</strong> — Monitoring & Reporting: Campaign performance reports including verified impressions, coverage maps, and photographic documentation.<br><br></li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
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
                <div class="col-lg-12">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>Can I combine multiple transit formats in one campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely — and we strongly recommend it. Multi-format campaigns (e.g., taxi wraps + metro station advertising + bus wraps) create a 360° brand presence that dramatically increases recall and conversion. DataMySite specialises in integrated transit media planning across all formats.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Is transit advertising approved by the RTA?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. All our transit advertising solutions are executed through RTA-approved channels and comply fully with Dubai Municipality and UAE National Media Council advertising guidelines. We manage all permits as part of our service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the minimum campaign period for transit advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaign minimums vary by format: taxi wraps typically require a minimum of 4 weeks; metro advertising is available from 2-week campaigns; airport advertising is available for shorter durations depending on format and terminal.</p>
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