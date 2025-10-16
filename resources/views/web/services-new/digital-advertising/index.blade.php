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
                        <h2>High-Impact Digital Advertising</h2>
                        <h4>for Businesses in Dubai</h4>
                        <br>
                        <p>
                            Some ads get ignored. Others make people stop, look, and act.
                            That’s the difference between ordinary ads and high-ROI digital advertising in the UAE. It’s not about throwing money at screens—it’s about making every dirham count.
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>About Digital Advertising</h4>
                    <p>
                        The right strategy puts your brand where your audience already is—whether that’s streaming Netflix or standing in an elevator. Digital advertising is not a mere item in the budget for CEOs and Marketing Heads. It is an investment. And like any investment, it needs to pay off.
                        So, what’s the smartest way to advertise in Dubai? Simple. Go where the attention is with Data My Site.
                    </p>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe digital-iframe" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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



        <section id="testimonials" class="testimonials striped-section section">
          @include('web.includes.elements.clients')
        </section>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Our Digital Advertising Services: Where Visibility Meets Conversion</h4>
                    <p>We do not run ads for the sake of running ads. Our online marketing solutions in the GCC involve the creation of impactful campaigns that get seen, remembered, and acted on.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-210">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-210" data-aria-expanded="true" data-aria-controls="faqCollapse-210">
                                        <span class="badge">&nbsp;</span>OTT Advertising (Streaming Ads That Do Not Get Skipped
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-210" class="collapse show" aria-labelledby="faqHeading-210" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        No one watches traditional TV anymore. They stream. And that’s exactly where your brand needs to be.
                                        With OTT advertising, your brand appears on platforms like Netflix, Hulu, and Amazon Prime Video—inside premium content, not buried in social media noise.
                                        <br><strong>Why OTT Works?</strong>
                                        <ul>
                                            <li><strong>Your Ad Cannot Be Skipped</strong> – Unlike YouTube, these ads get watched.</li>
                                            <li><strong>Laser-Targeted Reach </strong>– Ads are shown based on demographics, interests, and habits.</li>
                                            <li><strong>Measured Performance</strong> – Every impression, view, and action is tracked.</li>
                                        </ul>
                                        This is digital advertising without the waste.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>DOOH Advertising (Digital Billboards That Actually Work)
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Most billboards are background noise. People glance at them and move on.
                                        Our DOOH (Digital Out-of-Home) advertising changes that. High-resolution, animated, and strategically placed in Dubai’s busiest locations, these screens demand attention.
                                        <br><strong>Why DOOH Advertising Delivers?</strong>
                                        <ul>
                                            <li>Your Audience is Engaged – No distractions, no skipping.</li>
                                            <li>24/7 Brand Visibility – Ads run around the clock in prime locations.</li>
                                            <li>Elevated Brand Positioning – Your brand is placed next to premium experiences.</li>
                                        </ul>
                                        If you want to target affluent customers who make big decisions, this is how you do it.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Elevator Advertising (The Ad That Cannot Be Ignored)
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        What did you do the last time when you were in an elevator? Probably nothing. Maybe you checked your phone or stared at the door. Now imagine if, in that silent, distraction-free moment, a well-placed ad caught your eye. That’s why elevator digital advertising works. No one can skip and ignore it.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image42.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 split-block first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image43.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>Why It’s So Effective?</h4>
                    <ul>
                        <li><strong>Captive Audience</strong> – People are stuck in a small space with your ad.</li>
                        <li><strong>High Daily Exposure</strong> – Office workers, residents, and visitors see it multiple times a day.</li>
                        <li><strong>Hyper-Local Targeting</strong> – Choose specific buildings to reach your ideal customers.</li>
                    </ul>
                    <p>
                        This is not just visibility. It is repeated, unavoidable visibility.
                    </p>
                    

                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Our Digital Advertising Services in Dubai?</h4>
                    <p>
                       Most ads get ignored. People skip them, scroll past them, or tune them out.<br>
                        But what if your ad wasn’t something to avoid? What if it felt natural, relevant, even helpful?<br>
                        That’s where our best digital ad campaigns in Dubai make the difference. Instead of shouting into the void, they place your brand in the right moments, with the right message, in front of the right people.
                    </p>
                    <ul>
                        <li>Your audience already watches streaming content—so meet them there.</li>
                        <li>They already visit malls and hotels—so show up where they walk.</li>
                        <li>They already ride elevators—so make them notice your brand while they wait.</li>
                    </ul>
                    <p>
                        This isn’t about disrupting. It’s about fitting seamlessly into their world.
                        <br><br>
                        Are you ready to make every dirham count? It is time for a smarter approach if you are done wasting money on ads no one notices. Call Data My Site today to launch high-ROI digital advertising in Dubai.
                    </p>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
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
                                        <span class="badge">&nbsp;</span>Why is OTT Advertising Beneficial?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>OTT ads designed by us target specific demographics. It makes them more effective than traditional TV commercials.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Is DOOH Advertising Expensive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our DOOH ads offer dynamic content, higher engagement, and real-time updates—all at a competitive cost.</p>
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