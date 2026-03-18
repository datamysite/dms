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
                        <h2>The Impact of <br>Public Relations</h2>
                        <br>
                        <p>At DataMySite, we secure editorial placements, media features, and press coverage across 30+ of the UAE's and the world's most respected publications. From Gulf News and Khaleej Times to Forbes Middle East and Business Insider — we get your story in front of the audiences that matter most.</p>
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
                    <h4>What Is PR Coverage and Why Does It Matter in the UAE?</h4>
                    <p>
                        PR coverage refers to editorial mentions of your brand in news publications, magazines, digital media, and broadcast outlets. Unlike paid advertising, editorial coverage carries implicit third-party validation — a journalist or editor chose to feature your brand because it was credible and newsworthy.
                        <br>
                        In the UAE, where consumers and B2B buyers are highly media-literate and trust-driven, this distinction is enormous:
                    </p>
                    <ul>
                        <li>Editorial coverage generates 3x higher trust than equivalent paid advertising</li>
                        <li>A feature in Forbes or Gulf News permanently elevates brand perception</li>
                        <li>High-DA media backlinks directly improve your Google search rankings</li>
                        <li>PR coverage is repurposable across your website, pitch decks, and social media as social proof</li>
                        <li>CEO or founder features establish personal brand authority and open B2B doors</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/WR2HoD0FpyM?si=Ba7ZxHCiRwpc1Hyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="faq " id="accordion">
                        @foreach($subservices as $key => $val)
                            @php $s = $key; @endphp
                            <div class="card">
                                <div class="card-header" id="faqHeading-{{$s}}">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$s}}" data-aria-expanded="true" data-aria-controls="faqCollapse-{{$s}}">
                                            <i class="bi bi-newspaper"></i> &nbsp; {{$val->name}}
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-{{$s}}" class="collapse {{$s == 0 ? 'show' : ''}}" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
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


        <section class="pr-pubs striped-section section">
            <div class="container">
              <div class="in">
                <div class="top">
                  <div class="tag" style="justify-content:center">Our Media Partners</div>
                  <h2>Get Featured in <em>UAE's Most Trusted</em> Publications</h2>
                  <p class="sub">Editorial placements that build credibility money simply can't buy through paid ads.</p>
                </div>
                <div class="pub-grid">
                  <div class="pub-feat-card">
                    <div class="pf-icon">📰</div>
                    <div class="pf-name">Gulf News</div>
                    <div class="pf-type">English Daily · UAE</div>
                    <div class="pf-reach">2M+ monthly readers</div>
                    <div class="pf-cred">DA 82 · High Trust</div>
                  </div>
                  <div class="pub-feat-card">
                    <div class="pf-icon">💼</div>
                    <div class="pf-name">Forbes ME</div>
                    <div class="pf-type">Business Magazine · Global</div>
                    <div class="pf-reach">Exec & HNW audience</div>
                    <div class="pf-cred">DA 94 · Global Authority</div>
                  </div>
                  <div class="pub-feat-card">
                    <div class="pf-icon">🗞️</div>
                    <div class="pf-name">Khaleej Times</div>
                    <div class="pf-type">English Daily · 1976</div>
                    <div class="pf-reach">1.8M+ monthly readers</div>
                    <div class="pf-cred">DA 78 · Legacy Brand</div>
                  </div>
                  <div class="pub-feat-card">
                    <div class="pf-icon">🌍</div>
                    <div class="pf-name">Arabian News</div>
                    <div class="pf-type">Digital Media · GCC</div>
                    <div class="pf-reach">GCC business audience</div>
                    <div class="pf-cred">Regional Influence</div>
                  </div>
                </div>
                <div class="pub-cta">
                  <div>
                    <h3>Not sure which publication fits your brand?</h3>
                    <p>Our PR team recommends the right editorial placement for your industry and goals — free.</p>
                  </div>
                  <div style="display:flex;gap:12px;flex-wrap:wrap;flex-shrink:0">
                    <a href="https://datamysite.com/contact-us" class="bbtn btn-w">Get a Free PR Plan <span class="arr">→</span></a>
                    <a href="https://api.whatsapp.com/send/?phone=971525287259" class="bbtn btn-ow">💬 WhatsApp Us</a>
                  </div>
                </div>
              </div>
          </div>
        </section>


        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
          <div class="container section-title" style="padding-bottom: 15px;">
            <h2 class="text-theme">Available Publications</h2>
          </div><!-- End Section Title -->
          <div class="container">
            <div class="row publications-logos">
                @foreach($publications as $val)
                    <div class="col-lg-2 col-sm-4 col-xs-6">
                        <div class="pub-item">
                            <a href="{{$val->link}}" target="_blank" rel="nofollow">
                                <div class="pub-item-img">
                                    <img src="{{URL::to('/public/publications/'.$val->image)}}" alt="{{$val->name}} Logo">
                                </div>
                            </a>
                            <a href="{{$val->link}}" target="_blank" rel="nofollow">
                                <h5>{{$val->name}}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pub-see-more">
                <button>See More</button>
            </div>
          </div>

        </section>



        <div class=" striped-section">
          @include('web.includes.elements.clients')
        </div>



        <section id="testimonials" class="testimonials case-studies-section section">
            @include('web.includes.elements.case-studies')

        </section>


        <section class="pr-cred  striped-section ">
            <div class="container">
              <div class="in">
                <div class="left">
                  <div class="tag">Why PR Coverage Matters</div>
                  <h2>Editorial Coverage Builds<br>Trust <em>Ads Simply Can't Buy</em></h2>
                  <p>Being featured in Gulf News or Forbes isn't just a vanity win — it signals legitimacy, generates high-authority SEO backlinks, and permanently positions your brand as an industry leader in the UAE.</p>
                  <div class="cred-points">
                    <div class="cp"><span class="ck">✓</span> Earns high-DA backlinks that boost your Google ranking permanently</div>
                    <div class="cp"><span class="ck">✓</span> Trusted editorial coverage converts sceptical buyers better than paid ads</div>
                    <div class="cp"><span class="ck">✓</span> Positions your CEO or founder as a recognised industry voice</div>
                    <div class="cp"><span class="ck">✓</span> Repurposable across your website, social media and sales materials</div>
                  </div>
                  <div style="margin-top:28px;display:flex;gap:12px;flex-wrap:wrap">
                    <a href="https://datamysite.com/contact-us" class="bbtn btn-r">Get PR Coverage Now <span class="arr">→</span></a>
                    <a href="https://api.whatsapp.com/send/?phone=971525287259" class="bbtn btn-ro">💬 WhatsApp Us</a>
                  </div>
                </div>
                <div class="cred-right">
                  <div class="cred-stat"><div class="cv">82+</div><div class="cl">Average Domain Authority of our media partners</div></div>
                  <div class="cred-stat"><div class="cv">4M+</div><div class="cl">Combined monthly readers reached</div></div>
                  <div class="cred-stat"><div class="cv">48hrs</div><div class="cl">Average story submission turnaround</div></div>
                </div>
              </div>
          </div>
        </section>
        



        <section id="service-cards" class="blog-section section  pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>The Business Impact of PR Coverage — What You Can Expect</h4>
                    <ul>
                        <li><strong>Permanent SEO value</strong><br> — high-DA editorial backlinks from Gulf News, Forbes, and Forbes ME improve your domain authority and search rankings long-term<br><br></li>
                        <li><strong>Increased conversion rates</strong><br> — prospects who have 'seen you in Forbes' convert at significantly higher rates than cold leads<br><br></li>
                        <li><strong>Investor and partner credibility</strong><br> — enterprise clients and investors actively research brands before meetings; PR coverage provides powerful pre-meeting validation<br><br></li>
                        <li><strong>Talent attraction</strong><br> — top candidates prefer joining brands they've seen featured in respected media<br><br></li>
                        <li><strong>Event and speaking invitations</strong><br> — media visibility generates inbound speaking and partnership opportunities<br><br></li>

                    </ul>
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-6">
                    <h4>Our Media Network: 30+ Publications We Place Your Brand In</h4>
                    <p>DataMySite has built active editorial relationships across an extensive portfolio of regional and global publications. Key placements include:</p>

                    <h5>UAE & GCC Publications</h5>
                    <p>Gulf News (DA 82, 2M+ monthly readers), Khaleej Times (DA 78, UAE's oldest English daily), Arabian Business, Gulf Times, and Esquire Middle East. These publications are the go-to sources for UAE residents, business decision-makers, and expat professionals. A feature here positions your brand as part of the UAE's business and lifestyle conversation.</p>
                    <h5>Global Business & Finance</h5>
                    <p>Forbes Middle East (DA 94), Financial Times, Business Insider, Entrepreneur, Fast Company, and International Business Times. Global publications carry enormous credibility weight with investors, enterprise clients, and international partners. A Forbes feature, in particular, signals that your brand has achieved a standard of excellence recognised worldwide.</p>
                    <h5>Technology & Innovation Media</h5>
                    <p>Hackernoon, GeekWire Middle East, Analytics Insight, and Digital Journal. For technology companies, SaaS platforms, and fintech brands, coverage in tech media builds credibility with technical buyers and investors.</p>
                    <h5>Lifestyle & Luxury Media</h5>
                    <p>Luxury Lifestyle Magazine UK, Esquire ME, and LA Weekly. For premium consumer brands, hospitality groups, and luxury real estate developers, lifestyle media coverage reaches high-net-worth audiences in the right context.</p>
                    <h5>Newswire Distribution</h5>
                    <p>Associated Press and Apple News distribution ensures your press releases and stories are indexed across thousands of downstream platforms — multiplying reach with a single submission.</p>

                </div>
                <div class="col-lg-6">
                    <h4>Our PR Services in Dubai</h4>
                    
                    <h5>Media Relations & Editorial Placement</h5>
                    <p>We pitch your brand story, product launches, company milestones, and expert commentary to journalists and editors at UAE and international publications. Our existing editorial relationships with reporters at Gulf News, Forbes, Khaleej Times, and 27 other outlets mean your story lands in the right inbox — not a general submissions queue.
                    <br>
                    Editorial placements are secured on merit and newsworthiness. We guide you on the angles, timing, and narrative framing that gives your story the highest chance of publication.</p>
                    <h5>Press Release Writing & Distribution</h5>
                    <p>A well-written press release is the foundation of earned media. Our editorial team writes release copy to journalistic standards — clean, factual, newsworthy, and formatted for maximum pickup. We then distribute to a curated list of UAE and international media contacts relevant to your industry.
                    <br>
                    Typical press release triggers: company launches, funding rounds, product launches, key hires, awards, partnerships, event sponsorships, and milestone announcements.</p>

                    <h5>CEO & Executive Thought Leadership</h5>
                    <p>Personal brand authority is among the most valuable business assets in today's UAE market. We place your CEO, founder, or senior executives in:</p>
                    <ul>
                        <li>Expert op-eds and opinion articles in Gulf News, Forbes, and Entrepreneur</li>
                        <li>Industry panel discussions and conference speaking slots</li>
                        <li>Podcast appearances and broadcast interview placements</li>
                        <li>LinkedIn thought leadership articles syndicated to media platforms</li>
                    </ul>
                    <p>Executive positioning is particularly powerful for B2B companies, professional service firms, and brands looking to attract high-value partnership or investment conversations.</p>

                    <h5>Crisis Communication & Reputation Management</h5>
                    <p>When something goes wrong — and in business, it eventually does — how you communicate defines your brand's long-term reputation. DataMySite provides crisis communication strategy and media management to protect your brand's integrity, control the narrative, and restore stakeholder trust.
                    <br>
                    Our crisis services include: media monitoring, holding statement preparation, journalist response management, social media crisis response, and reputation recovery planning.</p>
                    <h5>Award Nominations & Rankings</h5>
                    <p>UAE and GCC business media publish multiple prestigious annual award lists — Forbes 30 Under 30, Entrepreneur's 100, Gulf News Business Awards, and more. Being nominated and featured in these rankings creates lasting credibility. We identify the right awards for your brand and manage the nomination and submission process.</p>

                </div>
                  
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section  section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h4>PR Coverage Packages at DataMySite</h4>
                    <p>
                        We offer three service tiers to suit businesses at different stages:
                    </p>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <h5>Starter PR</h5>
                            <p> — Press release writing and distribution to UAE newswires + 1 editorial placement in a UAE publication. <br>Ideal for: new businesses, product launches.</p>
                        </div>
                        <div class="col-lg-4">
                            <h5>Growth PR</h5>
                            <p> — Monthly media outreach + 2–3 editorial placements per month across UAE and regional publications + executive positioning content. Ideal for: scaling businesses with active news flow.</p>
                        </div>
                        <div class="col-lg-4">
                            <h5>Authority PR</h5>
                            <p> — Full-service monthly retainer including media relations, press releases, executive thought leadership, award nominations, crisis monitoring, and 5+ placements per month across UAE, GCC, and global publications.</p>
                        </div>
                    </div>
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
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>Is editorial coverage guaranteed?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We do not guarantee specific editorial placements, as editorial decisions rest with journalists and editors. However, our relationships and track record mean we have an exceptionally high placement success rate. We will always be transparent about which outlets are realistic targets for your story.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>How long does it take to get published?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Timelines vary by publication. Digital outlets can publish within 48–72 hours of receiving a story. Print publications typically have a 2–4 week lead time. For newswire distribution, your story goes live within 24 hours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>Can PR coverage replace paid advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>PR and advertising serve different functions. Advertising delivers reach and frequency. PR delivers credibility and trust. The most effective marketing strategies combine both — using advertising to drive awareness and PR to convert that awareness into conviction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">&nbsp;</span>Do you offer one-off placements or only retainers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Both. We offer one-off placements for specific campaign moments (product launches, funding announcements) and monthly retainers for ongoing media presence. We'll recommend the right approach based on your goals.</p>
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