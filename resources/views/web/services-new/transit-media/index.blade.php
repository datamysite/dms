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
                    <h4>About Transit Media</h4>
                    <p>At <strong>DataMySite</strong>, we turn everyday journeys into brand experiences. A taxi on Sheikh Zayed Road. A metro train packed with professionals. A bus winding through bustling streets. Each one carries your message and makes sure people see and act on it.</p>
                </div>
                <div class="col-lg-6">
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




        <section id="service-cards" class="blog-section section pr-impact-section">

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


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

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