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
                        <h2>UAE's most beloved Arabic radio stations</h2>
                        <br>
                        <p>
                            DataMySite specialises in helping brands create advertising campaigns on Al Khaleejiya 100.9 FM that feel genuine, culturally appropriate, and effective — whether you are targeting Emirati consumers, GCC nationals living in the UAE, or Arabic music lovers across the region.
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
                    <h4>Why Advertise on Al Khaleejiya 100.9 FM?</h4>
                    <br>
                    <p>Al Khaleejiya 100.9 FM holds a special place in Gulf culture, making it a uniquely powerful advertising environment:</p>
                    <ul>
                        <li>Dedicated to Khaleeji Arabic music and culture, with deep loyalty among UAE and GCC nationals</li>
                        <li>Strong listenership among Emirati families and GCC expats across the UAE</li>
                        <li>Cultural relevance that generic mainstream stations simply cannot replicate</li>
                        <li>High listener trust and emotional engagement with station content and presenters</li>
                        <li>Excellent platform for reaching high-income Emirati and Gulf Arab consumers</li>
                        <li>Ideal for campaigns around UAE National Day, Eid, and cultural occasions</li>
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
                    <h4>Who Listens to Al Khaleejiya 100.9 FM?</h4>
                    <p>
                        Al Khaleejiya 100.9 FM serves a specific and highly valuable audience:
                    </p>
                    <ul>
                        <li>UAE nationals who strongly identify with Khaleeji culture and music</li>
                        <li>GCC nationals from Saudi Arabia, Kuwait, Bahrain, Qatar, and Oman living in the UAE</li>
                        <li>Gulf Arab families tuning in for cultural content, traditional music, and local news</li>
                        <li>Middle to upper-income listeners who are key decision-makers for major purchases</li>
                        <li>Arabic music enthusiasts who prefer traditional Gulf sounds over mainstream Western pop</li>
                    </ul>
                    <br>
                    <h4>Ad Formats Available on Al Khaleejiya 100.9 FM</h4>
                    <p>
                        DataMySite connects you with the right advertising formats for your campaign:
                    </p>
                    <ul>
                        <li>Spot Commercials: 15, 30, or 60-second Arabic ads placed within programme breaks</li>
                        <li>Cultural Show Sponsorships: Align your brand with Khaleeji music programmes, poetry shows, or cultural features</li>
                        <li>Presenter Live Reads: Station hosts deliver your message in a warm, culturally appropriate Khaleeji tone</li>
                        <li>Seasonal Campaign Packages: Special Eid, National Day, and Ramadan advertising packages</li>
                        <li>Weekend and Family Programme Integrations: Reach families during high-engagement weekend listening periods</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section   why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Handles Your Al Khaleejiya Campaign</h4>
                    <p>Advertising on a culturally specific station requires the right approach. We bring both the expertise and cultural sensitivity needed:</p>
                    <ul>
                        <li>Cultural Insight Strategy: We tailor your campaign messaging to resonate with Gulf Arab cultural values and sensitivities</li>
                        <li>Khaleeji Arabic Script Writing: Our team writes in the appropriate Gulf Arabic dialect and tone</li>
                        <li>Voice Talent Selection: We use voice artists with authentic Gulf Arabic accents and delivery styles</li>
                        <li>Time Slot Planning: We identify peak listening hours specific to Khaleeji audience habits</li>
                        <li>Campaign Tracking: We measure response rates and provide post-campaign performance reports</li>
                    </ul>

                    <br>
                    <h4>Top Industries for Al Khaleejiya 100.9 FM Advertising</h4>
                    <p>
                        Al Khaleejiya 100.9 FM is particularly effective for businesses targeting UAE nationals and Gulf Arab consumers:
                    </p>
                    <ul>
                        <li>Real estate and luxury property developments targeting Emirati buyers</li>
                        <li>Automotive brands targeting high-income Gulf Arab consumers</li>
                        <li>Islamic banking and financial products</li>
                        <li>Jewellery, luxury goods, and premium retail</li>
                        <li>Traditional fashion, abayas, and Khaleeji clothing brands</li>
                        <li>Healthcare, hospitals, and wellness brands</li>
                        <li>Government and public sector awareness campaigns</li>
                        <li>Tourism, hospitality, and cultural events in the UAE</li>
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
                  <h2>Connect Authentically with <br>Gulf Arab Consumers</h2>
                  <p>Al Khaleejiya 100.9 FM offers something no other station can — genuine cultural connection with UAE nationals and Gulf Arabs. If your brand wants to build real trust and recognition within this valuable audience, advertising here is a smart investment.</p>
                  <div class="cap-list">
                    <div class="cap-item"><span class="cck">✓</span> Contact DataMySite today for a free consultation on Al Khaleejiya 100.9 FM radio advertising.</div>
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
                                        <span class="badge">&nbsp;</span>Why is it important to use Gulf Arabic dialect specifically?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Gulf Arabic, or Khaleeji Arabic, is the native dialect of Emirati and GCC nationals. Using a different Arabic dialect in advertising can feel foreign or out of place to this audience and significantly reduce the effectiveness of your message. Al Khaleejiya 100.9 FM listeners respond best to content that feels culturally authentic, which is why our scripts and voice productions are specifically crafted in the Khaleeji dialect.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can international brands advertise on Al Khaleejiya 100.9 FM?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, international brands regularly advertise on Gulf Arabic stations. The key is ensuring your message is adapted — not just translated — for the Khaleeji audience. DataMySite handles the localisation process to make sure your brand feels relevant and credible to this audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>When is the best time to advertise on Al Khaleejiya 100.9 FM?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Like all radio stations, peak listening hours are typically morning and evening drive times. However, Al Khaleejiya 100.9 FM also sees strong weekend listenership when Gulf Arab families are relaxing at home or visiting friends and relatives. DataMySite advises on the best time slots based on your campaign objectives.</p>
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