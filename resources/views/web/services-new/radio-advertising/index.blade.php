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
                        <h2>Improve Your Brand's Voice</h2>
                        <h4>with Radio Advertising Dubai</h4>
                        <br>
                        <p>
                            The UAE's radio market presents exceptional opportunities for businesses. With more than half of Dubai's population tuning in daily during commutes and work hours, radio advertising builds instant connections with potential customers. At DataMySite, we bring your message to life through strategic radio advertising Dubai campaigns that resonate with your target audience.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            <h3>Want to know more?</h3>
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control" required>
                                
                                <input type="tel" name="mailphone" id="phone-field2" class="form-control" required>
                                <input type="hidden" name="phone" id="fullphone-field2" required="">
                                <br>
                                <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                                
                                <input type="hidden" name="service" value="{{$service->name}}" required>
                                                                
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

                <div class="col-lg-6">
                    <iframe class="service-iframe inf-iframe" src="https://www.youtube.com/embed/4qP3sAMhMkM?si=Bwuovnsu7mqpSDKs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <h4>Role of Radio Advertising Dubai</h4>
                    <p>
                        Your advertising strategy needs media channels that deliver consistent returns. We at DataMySite understand that radio stands out as a potent marketing force in Dubai's business landscape.
                    </p>
                    <ul>
                        <li>Radio reaches deep into Dubai's diverse communities</li>
                        <li>Radio offers remarkable cost advantages compared to other advertising channels (production costs remain significantly lower than television or video content)</li>
                        <li>Music, voice modulation, and sound effects work together to create memorable brand associations</li>
                        <li>Radio delivers time-critical messages (announcements about sales, events, or limited-time offers reach audiences almost instantly)</li>
                        <li>Radio Advertising Dubai amplifies your other marketing efforts</li>
                        <li>The advertising targets specific areas within Dubai and the UAE</li>
                    </ul>
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

        <section id="service-cards" class="blog-section striped-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>The DataMySite Radio Advertising Dubai Advantage</h4>
                    <p>
                        Radio advertising offers outstanding value compared to other media channels. We negotiate competitive rates across Dubai's top stations. Our packages accommodate various budgets while ensuring optimal reach.
                        <br>
                        Local market expertise meets international standards. Our team brings years of experience in UAE's radio landscape. We understand the cultural nuances that make radio advertising Dubai campaigns successful.
                    </p>
                    <br>
                    <h4>Advanced Targeting Through Radio Ad Placements Dubai</h4>
                    <p>Your message will reach the right ears at the right time. We analyse listener demographics, peak listening hours, and program preferences to position your ads strategically. The targeted approach maximise your return on investment.</p>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image36.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Radio Campaign Services UAE - What We Bring on Offer at DataMySite</h4>
                    <p>We start by learning your business objectives. Our team analyses your target demographics, preferred languages, and core message through these steps</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Tactical Broadcast Planning
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse show" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Your campaign deserves prime airtime. We select radio stations based on listener profiles and peak engagement hours. Whether you need coverage on Dubai's leading English stations or want to reach Arabic, Hindi, or Malayalam speakers, we place your ads where they'll make the strongest impact.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Creative Excellence in Audio Production
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Great radio ads tell stories that stick. Our creative team crafts scripts that capture attention within seconds. We collaborate with professional voice artists who bring your message to life in multiple languages. What's the result? Memorable ads that prompt action.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-213">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-213" data-aria-expanded="false" data-aria-controls="faqCollapse-213">
                                        <span class="badge">&nbsp;</span>Measuring Your Radio Campaign Success
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-213" class="collapse" aria-labelledby="faqHeading-213" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Modern radio advertising Dubai campaigns need clear performance metrics. We can track these with our radio campaign services UAE
                                    </p>
                                    <ul>
                                        <li>Real-time listener engagement data</li>
                                        <li>Call volume during and after broadcast periods</li>
                                       <li> Website traffic correlation with air times Campaign reach and frequency metrics</li>
                                       <li> Audience response patterns</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-214">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-214" data-aria-expanded="false" data-aria-controls="faqCollapse-214">
                                        <span class="badge">&nbsp;</span>Complete Campaign Management from Our Team
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-214" class="collapse" aria-labelledby="faqHeading-214" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        From concept to execution, we manage every aspect of your radio campaign services UAE:
                                    </p>
                                        <ul>
                                            <li>Script development and translations</li>
                                            <li>Voice talent selection</li>
                                            <li>Music and sound design</li>
                                            <li>Airtime booking and scheduling</li>
                                           <li> Performance tracking</li>
                                            <li>Campaign optimisation</li>
                                        </ul>
                                    <p>
                                        Radio advertising amplifies your other marketing efforts. We synchronise your radio campaigns with your digital presence, print ads, and outdoor advertising to create a cohesive brand message across all channels.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" class="side-image" width="100%" alt="Why choose us">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section striped-section  section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image37.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>Advanced Targeting Through Radio Ad Placements Dubai</h4>
                    <p>
                        Your message will reach the right ears at the right time. We analyse listener demographics, peak listening hours, and program preferences to position your ads strategically. The targeted approach maximise your return on investment.
                    </p>
                    <br>
                    <h4>Start Your Radio Success Story with DataMySite</h4>
                    <p>
                        Ready to make your brand heard across Dubai? Contact DataMySite for a consultation. Our team will analyse your requirements and create a radio advertising method with the best radio ad rates UAE to deliver the best results.
                        <br>
                        Make your brand's voice heard across Dubai. Contact DataMySite today to discuss your radio advertising needs. Contact DataMySite today to discuss your radio advertising needs. Discuss your requirements today with our team.
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
                                        <span class="badge">&nbsp;</span>What is the cost of running a radio ad in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The best radio ad rates UAE depend on your chosen stations, broadcast frequency, and time slots. Popular morning and evening drive-time segments command premium rates, reflecting their higher listener engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can ads be aired in multiple languages?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai's radio networks actively support multilingual advertising. Your ads get broadcast in Arabic, English, and other languages across different stations.</p>
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