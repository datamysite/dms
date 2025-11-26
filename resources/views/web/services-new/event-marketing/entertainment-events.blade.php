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
                        <h2>Execute Entertainment Events</h2>
                        <h4>that inspire, engage, and convert.</h4>
                        <br>
                        <p>
                            Dubai is a city that thrives on entertainment, energy, and unforgettable experiences — and that’s exactly what your brand deserves to be part of. At DataMySite, we specialize in Entertainment Event Marketing that blends creativity, audience engagement, and strategic visibility to make your brand the star of the show.
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
                    <h4>What is Entertainment Event Marketing?</h4>
                    <br>
                    <p>
                        Entertainment event marketing is about creating experiences around entertainment platforms to connect your brand with large, enthusiastic audiences. Instead of traditional ads, your brand becomes part of the action — through sponsorships, on-ground activations, collaborations, and experiential integrations at live entertainment events.
                        <br><br>
                        From Dubai’s biggest concerts and film festivals to sports and lifestyle shows, we help your brand stand out in the most exciting spaces where people are already emotionally engaged and ready to connect.
                    </p>
                </div>
                <div class="col-lg-5 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/AsFfeWdyqHg?si=CcxQxksrRT5dh4wp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            <div class="row gy-4 first-row">
                <div class="col-lg-5">
                    <h4>Why Entertainment Event Marketing Works in Dubai</h4>
                    <p>Dubai is one of the global capitals of entertainment — a hub for international artists, global festivals, and world-class productions. Here’s why entertainment marketing campaigns thrive in this environment:</p>

                    <ul>
                        <li>
                            <strong>High-Impact Audience Reach</strong><br>
                             Entertainment events in Dubai attract tens of thousands of attendees, offering unmatched exposure for your brand.
                         </li>
                        <li>
                            <strong>Emotional Brand Connection</strong><br>
                             When people are having fun, they’re more open to engaging. Entertainment events help your brand connect emotionally with its audience.
                         </li>
                        <li>
                            <strong>Massive Media Coverage</strong><br>
                             Most major events in Dubai receive regional and international press coverage, multiplying your brand’s visibility.
                         </li>
                        <li>
                            <strong>Influencer & Celebrity Collaboration</strong><br>
                             Many entertainment events include celebrity appearances and influencer participation, giving brands powerful endorsement opportunities.
                         </li>
                        <li>
                            <strong>Diverse Audience Segments</strong><br>
                             From youth concerts and cultural festivals to luxury shows, Dubai’s entertainment scene offers segmented exposure based on your brand’s target market.
                         </li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image11.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-5">
                    <h4>How DataMySite Executes Entertainment Event Marketing</h4>
                    <p>At DataMySite, we don’t just promote events — we turn them into brand-building moments. Our team handles every step from strategy to execution to ensure your event delivers impact, engagement, and measurable ROI.</p>

                    <ul>
                        <li>
                            <strong>Event Strategy & Planning</strong><br>
                            We identify entertainment events that align perfectly with your target audience — from music and fashion to sports and lifestyle.
                        </li>
                        <li>
                            <strong>Sponsorship & Brand Integration</strong><br>
                            We negotiate sponsorship opportunities, co-branding placements, and custom activations such as product zones, booths, and on-stage moments.
                        </li>
                        <li>
                            <strong>Pre-Event Digital Promotion</strong><br>
                            Our marketing team creates multi-channel campaigns using Google Ads, social media, influencer marketing, and PR coverage to build anticipation.
                        </li>
                        <li>
                            <strong>On-Ground Brand Activation</strong><br>
                            We bring your brand to life at the event — through interactive booths, digital walls, photo experiences, giveaways, and live engagement setups.
                        </li>
                        <li>
                            <strong>Post-Event Marketing & Reporting</strong><br>
                            After the event, we capture data, social buzz, and media mentions to create a detailed performance report highlighting brand reach, engagement, and ROI.
                        </li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


          <section id="service-cards" class="blog-section section  pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image12.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Entertainment Event Marketing</h4>
                    <p>
                        <strong>High-Volume Exposure</strong> – Reach thousands of potential customers in one powerful setting.<br>
                        <strong>Brand Emotionalization</strong> – Associate your brand with excitement, energy, and positive experiences.<br>
                        <strong>Increased Social Media Visibility</strong> – Events generate massive organic content and user engagement.<br>
                        <strong>Lead Generation & Data Capture</strong> – On-ground activations allow you to collect audience insights for future campaigns.<br>
                        <strong>Stronger Brand Recall</strong> – People remember brands they experienced, not just saw in ads.
                    </p>
                    <br>
                    <h4>Ideal Entertainment Marketing Opportunities in Dubai</h4>
                    <ul>
                        <li>Music Concerts & Festivals (Coca-Cola Arena, Dubai Jazz Festival, UNTOLD Dubai)</li>
                        <li>Film & Celebrity Events (Dubai International Film Festival, influencer galas)</li>
                        <li>Cultural & Community Events (Dubai Shopping Festival, Global Village)</li>
                        <li>Luxury & Lifestyle Shows (Fashion Week, Car Launches, Yacht Shows)</li>
                        <li>Sports & Fitness Events (Dubai Marathon, Golf Championships, Racing Events)</li>
                    </ul>
                    <p>Each platform presents an opportunity to position your brand in front of a premium, engaged audience.</p>
                    <br>
                    <h4>Transform Entertainment Into Engagement</h4>
                    <p>At DataMySite, we help brands become part of Dubai’s most exciting entertainment moments — turning events into experiences and audiences into loyal fans. Whether you want to sponsor a major concert, host an activation at a film festival, or collaborate with entertainment influencers, we ensure your brand shines where the world is watching.</p>
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

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>What types of entertainment events can brands participate in?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Brands can be part of concerts, film premieres, festivals, exhibitions, and sporting events — depending on audience and marketing objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>Is entertainment marketing suitable for small brands?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We customize campaigns based on your budget and goals — from micro-events to large-scale sponsorships.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>How is ROI measured in event marketing?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We analyze attendance data, engagement levels, brand mentions, lead collection, and media exposure to determine results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">&nbsp;</span>Can DataMySite manage both marketing and event execution?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We handle end-to-end event marketing, including strategy, sponsorship, creative activation, media promotion, and post-event analysis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">&nbsp;</span>What’s the ideal time to start planning an entertainment marketing campaign in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Ideally, brands should start 6–8 weeks before the event for best planning, permits, and creative execution.</p>
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