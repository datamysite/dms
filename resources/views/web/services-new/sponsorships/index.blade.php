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
                        <h2>The Impact of Sponsorships</h2>
                        <br>
                        <p>
                            At DataMySite, we identify, negotiate, activate, and manage sponsorship partnerships that deliver measurable brand value — not just a logo on a banner. From Dubai's largest corporate conferences to entertainment festivals, sports tournaments, and cultural initiatives, we connect your brand to the stages that matter.
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

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Sponsorship in Dubai Delivers Superior Brand Value</h4>
                    <p>
                        Dubai hosts more international events per capita than almost any other city in the world. GITEX, Expo City, ADIPEC, Art Dubai, Dubai World Cup, Dubai Shopping Festival, and dozens of conferences, concerts, and sporting events draw millions of local and international attendees annually.
                        <br>
                        Sponsoring the right event in Dubai offers a fundamentally different brand experience from advertising:
                    </p>
                    <ul>
                        <li><strong>Emotional association</strong> — your brand connects with audiences at moments of excitement, community, and celebration</li>
                        <li><strong>Audience quality</strong> — event attendees are pre-qualified by their interest in the event's category</li>
                        <li><strong>Networking access</strong> — sponsorship typically includes VIP access and executive networking opportunities</li>
                        <li><strong>Media value</strong> — sponsored events generate PR coverage, social media content, and photo/video assets</li>
                        <li><strong>Long-term brand memory</strong> — people remember sponsored experiences far longer than ads</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/WO0k1eTFGZQ?si=FWzEFlLrWaObGa4m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

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

        
        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12">
                    <h4>Our Sponsorship Services in Dubai</h4>
                </div>
                <div class="col-lg-6">
                    <h5>Corporate Event Sponsorships</h5>
                    <p>Corporate event sponsorships position your brand alongside industry leaders, decision-makers, and enterprise buyers. We identify the right conferences, summits, trade expos, and networking events for your category — whether that's fintech, real estate, healthcare, technology, or retail.
                    What corporate sponsorship delivers: logo placement at venue and on all event collateral, branded speaking slots and panel moderation opportunities, exhibition space and product demonstrations, branded lanyards, bags, or event app integrations, delegate list access (where applicable), and post-event media coverage attribution.
                    Key Dubai corporate sponsorship opportunities we work with include: GITEX Global, Cityscape Dubai, UAE PropTech Forum, Arab Health, ADIPEC, and the numerous industry summits hosted at Dubai World Trade Centre.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Entertainment & Cultural Sponsorships</h5>
                    <p>Entertainment sponsorships connect your brand to concerts, festivals, theatre productions, film screenings, and cultural events. In Dubai — where entertainment options range from international concerts at Coca-Cola Arena to beach festivals, Comedy Nights, and the Dubai Film Festival — entertainment sponsorships deliver mass audience engagement.
                    Entertainment sponsorship activations we execute: branded stage experiences and photo walls, product sampling and on-site activations, digital and social media co-branded content, influencer activation at the event, and VIP hospitality packages for client entertainment.
                    Ideal for: consumer brands, FMCG, food and beverage, automotive, lifestyle, banking, and telecom companies.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Sports Sponsorships</h5>
                    <p>Sport is the universal language of passion in the UAE. Sponsoring sports teams, tournaments, or individual athletes puts your brand in front of one of the most emotionally engaged, loyal audiences in existence.
                    We facilitate sponsorships for: Dubai Rugby 7s, UAE cricket tournaments, the Dubai Marathon, padel and tennis tournaments, fitness events and CrossFit competitions, as well as regional grassroots sports initiatives.
                    Sports sponsorship formats include: shirt and kit branding, stadium and pitch-side advertising, match-day programme advertising, athlete endorsement integrations, and digital content partnerships with sports media channels.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Community & CSR Sponsorships</h5>
                    <p>Community sponsorships — supporting schools, charitable causes, environmental initiatives, and social programmes — build genuine brand affection with local communities. In the UAE, where CSR alignment is increasingly important to corporate buyers and consumers, community sponsorships signal that your brand stands for more than profit.
                    We identify community programmes and NGO partnerships aligned with your brand values and manage the activation, publicity, and reporting.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Influencer & Content Creator Sponsorships</h5>
                    <p>Sponsoring influential content creators in the UAE is one of the highest-ROI forms of sponsorship. Instead of a one-off post, we structure content creator sponsorship deals that integrate your brand authentically into an influencer's ongoing content — across Instagram, YouTube, TikTok, and podcast platforms.
                    We work with nano, micro, and macro influencers across lifestyle, business, food, travel, fashion, fitness, and tech verticals — with follower bases ranging from 10,000 to 1M+.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Media Sponsorships</h5>
                    <p>Sponsoring media properties — radio shows, podcast series, digital publications, or YouTube channels — delivers consistent brand mentions to a loyal, niche audience. We identify UAE media properties aligned with your target audience and negotiate sponsorship packages that include verbal endorsements, branded segments, and social media integration.</p>

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
                    <h4>Sponsorship Activation — Maximising Your Investment</h4>
                    <p>Signing a sponsorship deal is only the beginning. The real value is created through activation — how you bring your brand to life at the event and in the surrounding media environment. DataMySite provides full sponsorship activation services:</p>
                    <ul>
                        <li>On-site brand experience design — branded booths, experiential zones, product demos, and interactive installations</li>
                        <li>Pre-event PR and social media campaigns building anticipation</li>
                        <li>Influencer coverage at the event for social amplification</li>
                        <li>Lead capture and data collection integrated into your activation</li>
                        <li>Post-event content production — reels, highlight videos, case study assets</li>
                        <li>Measuring ROI — media value tracking, lead attribution, and engagement metrics</li>

                    </ul>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image16.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-impact-section">

          <div class="container">

            <div class="row gy-4 split-block first-row">

                <div class="col-lg-3">
                    <img src="{{URL::to('/public/section-images/image17.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How We Find and Negotiate the Right Sponsorship for Your Brand</h4>
                    <ul>
                        <li><strong>Step 1</strong> — Briefing: We understand your brand values, target audience, budget, and campaign goals.</li>
                        <li><strong>Step 2</strong> — Opportunity Mapping: We identify sponsorship properties — events, teams, causes, media, or individuals — that align with your audience and values.</li>
                        <li><strong>Step 3</strong> — Due Diligence: We evaluate each opportunity on audience quality, media value, competitor exclusivity, and activation potential.</li>
                        <li><strong>Step 4</strong> — Negotiation: We negotiate the best sponsorship terms on your behalf, including exclusivity clauses, branding rights, and activation support.</li>
                        <li><strong>Step 5</strong> — Activation & Management: We design and execute the on-site and digital brand activation around the sponsorship.</li>
                        <li><strong>Step 6</strong> — Reporting: Post-campaign ROI report covering reach, media value equivalence, lead generation, and brand sentiment.</li>

                    </ul>
                    

                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Who Should Invest in Sponsorships in Dubai?</h4>
                    <ul>
                        <li>New market entrants — sponsorship rapidly builds brand awareness and credibility in a new market</li>
                        <li>B2B companies — corporate event sponsorships provide direct access to target clients</li>
                        <li>Luxury and premium brands — cultural and entertainment sponsorships align with aspirational audiences</li>
                        <li>Consumer brands — entertainment and sports sponsorships deliver emotional connection at scale</li>
                        <li>Financial services — sports and business event sponsorships build trust with high-value audiences</li>
                        <li>Real estate developers — expo, property, and lifestyle event sponsorships reach active buyers</li>

                    </ul>
                    <p><br>
                    
                        Are you ready to explore sponsorship opportunities Dubai for your brand?
                        <br>
                        Contact us today! Call us at <a href="tel:971525287259"><strong>+971 525 287 259</strong></a> or drop an email at <a href="mailto:contact@datamysite.com"><strong>contact@datamysite.com</strong></a>.
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
                                        <span class="badge">&nbsp;</span>What is a realistic sponsorship budget for Dubai events?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sponsorship investments in Dubai range significantly — from AED 15,000 for community events and local activations to AED 500,000+ for major festivals or GITEX-level conference partnerships. DataMySite will identify opportunities that match your budget and deliver measurable ROI at every tier.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How do I measure the ROI of a sponsorship?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We track: media value equivalence (the cost equivalent of all PR and media generated), lead generation and enquiries attributed to the event, social media impressions and engagement from event content, brand recall surveys (pre/post where applicable), and direct revenue attribution where possible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can we sponsor an event that a competitor is already involved in?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It depends on whether the event has category exclusivity clauses. We conduct thorough due diligence on competitive sponsorship landscape before recommending any opportunity, and actively seek category exclusivity for our clients where available.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Do you handle international sponsorship opportunities outside the UAE?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We have experience facilitating sponsorship activations in Saudi Arabia, India, the UK (London), and across the GCC. If your target audience is global, we can structure a multi-market sponsorship strategy.</p>
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