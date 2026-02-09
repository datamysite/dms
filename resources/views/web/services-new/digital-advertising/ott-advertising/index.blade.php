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
                        <h2>Turn Your Brand's Digital Presence</h2>
                        <h4>with OTT Advertising at DataMySite</h4>
                        <br>
                        <p>
                            Your viewers have moved to streaming platforms. Meet them there with DataMySite's strategic OTT Advertising solutions. We've seen the shift in Dubai's media consumption habits. Your potential customers now spend more time streaming their favourite shows and content.
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
                    <h4>Make Every View Count with Us</h4>
                    <p>
                        UAE streaming subscriptions grew exponentially in the past year. Smart businesses in Dubai are moving their ad spend to OTT platform advertising UAE. OTT platform advertising UAE connects you with viewers during their most engaged moments. At DataMySite, we don't just place ads - we create meaningful connections.  Your brand reaches viewers through their preferred streaming platforms with our OTT Advertising Dubai. Our UAE-based team brings you precise targeting capabilities that put your message in front of the right eye. 
                        <br>
                        Your OTT Advertising campaign reaches viewers during their most receptive moments.
                        We place your programmatic OTT campaigns Dubai across leading streaming platforms. Our advertising strategies focus on reaching your ideal customer profile.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Beyond Basic Advertising – What We Do to Grow Your Brand?</h4>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Real-Time Performance Tracking –</h5>
                    <p>
                        You want to see your campaign results as they happen. Our real-time tracking shows you exactly how viewers interact with your ads.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Premium Ad Placements –</h5>
                    <p>
                        We've secured prime spots on top streaming platforms. Your ads play during popular shows and premium content that your target audience loves.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Advanced Audience Targeting –</h5>
                    <p>
                        Finding your exact audience takes skill. We pinpoint viewers based on their profession, interests, and viewing habits across Dubai.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Brand Safety Assurance –</h5>
                    <p>
                        Your brand reputation matters to us. We carefully select content partners to ensure your ads appear in brand-safe environments.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Regular Optimisation –</h5>
                    <p>
                        Good results can always get better. We fine-tune your campaigns daily based on performance data and viewer response.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Transparent Reporting –</h5>
                    <p>
                        You'll never wonder about your ad performance. Our straightforward reports show the numbers that matter to your business.
                    </p>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">Maximum Impact through Smart Targeting –</h5>
                    <p>
                        We bring you the experience of running successful campaigns for Dubai's leading brands. Your OTT Advertising investment deserves nothing less than proven expertise.
                    </p>
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
                <div class="col-lg-12 text-center">
                    <h4>The impact of OTT Advertisement</h4>
                </div>
                <div class="col-lg-4 vertical-center">
                    <h5>What Sets Our Approach Apart?</h5>
                    <p>The Dubai market demands sophistication. That's why we focus on premium placement for your programmatic OTT campaigns. Your OTT Advertising campaign reaches viewers during their most receptive moments. They're watching their preferred shows through streaming services.</p>

                    <h5>Your Brand Deserves Premium Placement</h5>
                    <p>Our OTT Advertising solutions put your message alongside top-tier content. We have grown relationships with leading streaming platforms. It offers your brand access to prime advertising destinations. That's the kind of impact targeted OTT ads GCC can deliver.</p>
                </div>

                <div class="col-lg-4 mob-not-visible vertical-center">
                    <img src="{{URL::to('/public/section-images/image2.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>

                <div class="col-lg-4 vertical-center">

                    <h5>Clear Results You Can Track</h5>
                    <p>No more guessing about your ad performance. Our OTT Advertising analytics show who sees your ads. You'll know how many completed views your campaign generates. We track engagement rates across different platforms and times. Smart targeting means your budget works harder.</p>

                    <h5>Making Your Investment Count</h5>
                    <p>ROI drives every decision we make. Your OTT Advertising campaign focuses on measurable business outcomes. We optimise your campaigns daily. So, your ads perform better as we gather more viewer data.</p>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why choose Datamysite for OTT Advertising</h4>
                    <p>
                       Your brand deserves more than standard ad placements. Our OTT Advertising strategy includes premium positioning. First, we analyse your target audience. It shapes your OTT Advertising strategy from day one.
                        <br>
                        Next, we select the right mix of platforms. Your ads appear where your potential customers spend their time. We create engaging video content so you can consult us for video-on-demand advertising UAE. 
                        <br><br>
                        Streaming continues growing in Dubai. Your OTT Advertising Dubai investment positions you for this future. From brand awareness to direct response, your investment generates tangible business results with us. Weekly reports show your campaign performance. You'll see clear metrics that matter to your business. We stay ahead of platform changes. We'll show you exactly how to reach your ideal audience.
                    </p>
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section pr-blogs-section">

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
                <div class="col-lg-12 vertical-center">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What exactly is OTT advertising? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>OTT refers to "Over-The-Top" media services like streaming apps. Your ads are delivered via the internet directly into the viewer's TV or device, bypassing traditional cable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I target users based on what they are watching?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We can target specific genres (e.g., Action, Documentaries, Sports) or demographic data, ensuring your ad reaches a highly engaged audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are OTT ads skippable?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Many OTT formats are "Non-Skippable," meaning the viewer must watch your 15 or 30-second spot to continue their show, resulting in near 100% completion rates.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How is OTT better than traditional TV commercials?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>OTT offers "Clickable" elements on mobile/desktop and provides precise data on who watched the ad, which traditional TV cannot match.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Do I need a huge production budget for an OTT ad?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Not necessarily. While high-quality video is key, even well-produced 15-second "snackable" content can perform exceptionally well on streaming platforms.</p>
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