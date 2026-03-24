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
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Most recognised and exciting radio brands in the UAE</h2>
                        <br>
                        <p>
                            DataMySite partners with businesses to create bold, energetic, and creative radio advertising campaigns on Virgin Radio Dubai 104.4 FM that genuinely connect with a young and engaged audience.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form">
                                @csrf
                                <input type="hidden" name="service" value="{{$service->name}} - {{$subservice->name}}" required>
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
                    <h4>Why Advertise on Virgin Radio Dubai 104.4 FM?</h4>
                    <br>
                    <p>The Virgin Radio brand carries enormous recognition and loyalty. Here is why advertisers love it:</p>
                    <ul>
                        <li>One of the UAE's most popular English radio stations with a strong youth and entertainment following</li>
                        <li>Globally recognised Virgin brand brings instant credibility and premium perception</li>
                        <li>High listener engagement driven by exclusive celebrity content, concerts, and competitions</li>
                        <li>Strong cross-platform presence — radio, social media, and live events create multi-touchpoint brand exposure</li>
                        <li>Vibrant, aspirational format that creates powerful emotional associations with your brand</li>
                        <li>Ideal for lifestyle, entertainment, fashion, and technology brands</li>

                    </ul>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/4qP3sAMhMkM?si=Bwuovnsu7mqpSDKs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image177.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Who Listens to Virgin Radio Dubai 104.4 FM?</h4>
                    <p>
                        Virgin Radio Dubai 104.4 FM draws a youthful and digitally connected audience:
                    </p>
                    <ul>
                        <li>Young English-speaking adults aged 18 to 35 across Dubai and the UAE</li>
                        <li>Entertainment and music fans who closely follow global and regional pop culture</li>
                        <li>Trendsetters and early adopters who are first to try new products and experiences</li>
                        <li>University students, young professionals, and creatives</li>
                        <li>Social media-active individuals who amplify brand messages organically</li>
                        <li>Expats and UAE residents who consume a mix of local and global entertainment content</li>

                    </ul>
                    <br>
                    <h4>Advertising Formats on Virgin Radio Dubai 104.4 FM</h4>
                    <p>
                        Virgin Radio Dubai 104.4 FM offers a range of creative and engaging advertising formats:
                    </p>
                    <ul>
                        <li>Spot Commercials: High-energy 15, 30, or 60-second ads placed in commercial breaks</li>
                        <li>Morning Drive Integrations: Reach the highest-volume listener window of the day</li>
                        <li>Presenter Endorsements: Beloved Virgin Radio hosts personally mention and endorse your brand</li>
                        <li>Competitions and Giveaways: Your brand sponsors exclusive prize competitions that drive massive listener engagement</li>
                        <li>Event and Concert Sponsorships: Align your brand with Virgin Radio Dubai's live events and celebrity appearances</li>
                        <li>Social Media Amplification Packages: Combined on-air and digital campaign packages for maximum reach</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section   why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Creates Your Virgin Radio Dubai Campaign</h4>
                    <p>We make sure your campaign captures the energy and excitement of the Virgin Radio Dubai brand:</p>
                    <ul>
                        <li>Creative Strategy: We develop campaign concepts that match the fun, bold, and trendy personality of Virgin Radio Dubai</li>
                        <li>Youthful Script Writing: Our team writes scripts with the right tone — exciting, relatable, and action-driven</li>
                        <li>Dynamic Voice Casting: We select voice artists who bring high energy and personality to your ad</li>
                        <li>Prime Slot Booking: We secure placement in the highest-listening windows, including the famous morning show</li>
                        <li>Multi-Platform Packages: We can combine radio with digital and social media amplification for even greater reach</li>
                        <li>Performance Tracking: We monitor campaign results and provide actionable post-campaign insights</li>

                    </ul>

                    <br>
                    <h4>Top Industries for Virgin Radio Dubai 104.4 FM Advertising</h4>
                    <p>
                        Virgin Radio Dubai 104.4 FM works best for brands that target Dubai's youth and entertainment culture:
                    </p>
                    <ul>
                        <li>Fashion, streetwear, and lifestyle brands</li>
                        <li>Entertainment venues, concerts, and nightlife</li>
                        <li>Food delivery, quick-service restaurants, and cafes</li>
                        <li>Smartphones, gaming, and consumer electronics</li>
                        <li>Travel, holiday packages, and experience brands</li>
                        <li>Beauty, wellness, and personal care products</li>
                        <li>Fitness clubs, gyms, and active lifestyle brands</li>
                        <li>Apps, streaming services, and digital platforms</li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image180.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section class="tm-captive tm-radio">
            <div class="container">
              <div class="in">
                <div>
                  <div class="tag w">Get Started</div>
                  <h2>Make Your Brand a Part of Dubai's <br>Entertainment Scene</h2>
                  <p>Virgin Radio Dubai 104.4 FM is where the energy of Dubai's youth culture comes alive every day. Advertising on this station gives your brand access to a passionate, engaged, and socially influential audience that drives trends across the city.</p>
                  <div class="cap-list">
                    <div class="cap-item"><span class="cck">✓</span> Contact DataMySite today for a free consultation and a creative advertising proposal for Virgin Radio Dubai 104.4 FM.</div>
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


        <section id="service-cards" class="blog-section striped-section section pr-blogs-section">

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


        <section id="service-cards" class="blog-section section  faq-new-section">

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
                                        <span class="badge">&nbsp;</span>Can I sponsor a Virgin Radio Dubai celebrity interview segment?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, programme sponsorships and integrations are available on Virgin Radio Dubai 104.4 FM. Celebrity interview segments and exclusive show integrations are particularly popular with lifestyle brands looking for premium content association. Contact DataMySite to find out about current availability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Does Virgin Radio Dubai have good social media reach?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Virgin Radio Dubai has a significant social media following that extends your ad campaign beyond the broadcast itself. DataMySite can build integrated packages that combine on-air advertising with social media shoutouts and digital activations to amplify your brand message across multiple touchpoints.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Is Virgin Radio Dubai 104.4 FM right for a global brand entering the UAE market?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Virgin Radio Dubai is one of the best entry points for global brands launching in the UAE's English-speaking youth market. The Virgin brand's global recognition creates an immediately familiar and trusted environment for your advertising.</p>
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