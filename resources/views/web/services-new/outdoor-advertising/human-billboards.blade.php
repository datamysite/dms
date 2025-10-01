@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
    <style>
    </style>
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$subservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Maximise Brand Impact</h2>
                        <h4>with High-Visibility Human Billboards in Dubai</h4>
                        <br>
                        <p>
                            Human billboards in Dubai fall into the second category. They don’t just flash a message—they bring it to life. Whether it’s a brand ambassador walking through Dubai Mall, a team of promoters turning heads at a major event, or a well-placed sign in the busiest part of Sheikh Zayed Road, these campaigns make people stop, look, and engage.
                            
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
                <div class="col-lg-12">
                    <h4>Why Choose Human Billboards from DataMySite?</h4>
                    <p>
                        Think about the last time an ad truly grabbed your attention. Was it a digital pop-up? A billboard on a highway? Or was it something personal—an experience, a recommendation, a conversation? 
                        For CEOs, CFOs, and Marketing Heads, every advertising dirham has to count. Every campaign needs to drive brand awareness, foot traffic, and conversions—not just impressions on a report. That’s why brands looking for high-visibility, high-impact advertising choose our human billboard advertising in Dubai to create real-world connections that turn into sales.
                        That’s the power of high-impact street advertising in Dubai. It puts your brand into the hands (literally) of trained brand representatives who don’t just hold a message—they deliver it. Here’s why companies choose our human billboard advertising services.
                    </p>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/WR2HoD0FpyM?si=Ba7ZxHCiRwpc1Hyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>  
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>You Can’t Ignore a Human Billboard
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse show" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>People scroll past digital ads. They drive by billboards. But when someone stands in front of them, holding a message, making eye contact, or handing them something valuable—they pay attention.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Real Interactions = Real Conversions.
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With human billboard advertising in Dubai, customers don’t just see your brand. They experience it. Brand ambassadors answer questions, hand out samples, and create personal connections that drive trust. And trust leads to sales.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="true" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Flexible and Affordable
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Static billboards are expensive and locked in place. Digital ads fight for attention in a crowded space. But cost-effective human billboard campaigns in GCC can go where your audience is—whether that’s a shopping mall, an event, or the heart of a busy district.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="true" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Perfect for Time-Sensitive Campaigns.
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Are you opening a new store? Human billboards put your message on the ground immediately. Unlike traditional ads that take weeks to set up, this strategy is fast, adaptable, and effective from day one.</p>
                                </div>
                            </div>
                        </div>
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-8">
                    <h4>How It Works: From Brand Message to Human Connection</h4>
                    <p>We don’t just place people on the street and hope for the best. We engineer campaigns for maximum engagement.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-40">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-40" data-aria-expanded="true" data-aria-controls="faqCollapse-40">
                                        <span class="badge">&nbsp;</span>Location Strategy: We Go Where the People Are
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-40" class="collapse show" aria-labelledby="faqHeading-40" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your audience isn’t just anywhere—they’re in specific high-traffic places. We position your campaign at malls, events, business districts, and tourist hotspots where people are ready to engage.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-41">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-41" data-aria-expanded="true" data-aria-controls="faqCollapse-41">
                                        <span class="badge">&nbsp;</span>Branding That Stands Out
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-41" class="collapse" aria-labelledby="faqHeading-41" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team wears branded uniforms, holds eye-catching signage, and uses custom messaging designed to grab attention. Whether it's day or night, your brand stays visible.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-42">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-42" data-aria-expanded="true" data-aria-controls="faqCollapse-42">
                                        <span class="badge">&nbsp;</span>Trained Brand Ambassadors Who Make an Impact.
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-42" class="collapse" aria-labelledby="faqHeading-42" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Holding a sign is easy. Engaging people is an art. Our teams are trained to:</p>
                                    <ul>
                                        <li>Answer questions about your product</li>
                                        <li>Start conversations and build interest</li>
                                        <li>Hand out flyers, samples, or exclusive promo codes</li>
                                        <li>Direct people to your store, website, or activation area</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-43">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-43" data-aria-expanded="true" data-aria-controls="faqCollapse-43">
                                        <span class="badge">&nbsp;</span>Integrated with Your Digital Strategy
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-43" class="collapse" aria-labelledby="faqHeading-43" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Do you want to track campaign performance? We add QR codes, social media links, and exclusive offers so you can measure engagement in real-time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image38.png')}}" class="flyer-img" width="100%" alt="human billboard">
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>How Our Human Billboards in Dubai Compare to Traditional Advertising?</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Advertising Type</th>
                                <th>Visibility</th>
                                <th>Engagement</th>
                                <th>Cost</th>
                                <th>ROI</th>
                            </tr>

                            <tr>
                                <td>Human Billboards</td>
                                <td>High</td>
                                <td>Direct, face-to-face</td>
                                <td>Affordable</td>
                                <td>High</td>
                            </tr>

                            <tr>
                                <td>Digital Ads</td>
                                <td>Medium</td>
                                <td>Limited interaction</td>
                                <td>Expensive</td>
                                <td>Medium</td>
                            </tr>

                            <tr>
                                <td>Static Billboards</td>
                                <td>High</td>
                                <td>Zero engagement</td>
                                <td>Very expensive</td>
                                <td>Low</td>
                            </tr>

                            <tr>
                                <td>Social Media Ads</td>
                                <td>Medium</td>
                                <td>Passive audience</td>
                                <td>Variable</td>
                                <td>Medium</td>
                            </tr>
                        </table>
                    </div>
                    <p>Do you want to connect with your audience? Do you want not just to be seen but to be remembered? Our human billboards in Dubai deliver that edge.</p>
                    <br>
                    <h4>Get Your Brand on the Streets and in Front of Your Audience</h4>
                    <p>It is time to explore human billboard advertising in Dubai if you are looking for advertising that grabs attention and drives real results,
                        <br>Call us today to build a cost-effective human billboard campaign in GCC that delivers real, measurable impact.</p>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image39.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
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
                                        <span class="badge">&nbsp;</span>What Tracking Metrics Do You Provide?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our comprehensive analytics include engagement rates, lead generation numbers, and ROI calculations. These are presented in weekly detailed reports.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How Do You Ensure Consistency?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We ensure brand consistency through rigorous training programs and quality control measures. We use our proprietary monitoring system.</p>
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