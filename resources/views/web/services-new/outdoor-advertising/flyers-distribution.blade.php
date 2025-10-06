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
                        <h2>Why Direct Marketing Still Rules?</h2>
                        <br>
                        <p>Digital fatigue is real. Your potential clients receive hundreds of emails daily, but a well-designed flyer demands attention. Our flyers distribution in Dubai service capitalises on this psychological advantage. Physical marketing materials create lasting impressions and drive action – that's why 39% of our clients report prospects keeping their flyers for future reference.</p>
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

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Flyers Distribution in Dubai – Your Direct Path to Business Growth</h4>
                    <p>
                        Not everything needs to be digital. Sometimes, a simple flyer does what a flashy online ad can’t—it creates a real connection. You can scroll past a banner ad, ignore an email, and skip a sponsored post. But a well-placed flyer? People hold it. They see it. They remember it.
                        <br>
                        That’s why flyer distribution in Dubai still works. It’s personal. It’s direct. And when done right, it gets results.
                        At DataMySite, we don’t just hand out flyers. We deliver messages that stick in the right hands at the right time. We make sure your brand gets noticed whether it is a door-to-door flyer campaign in the UAE or a targeted flyer marketing strategy in Dubai.
                    </p>

                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe flyer-iframe" src="https://www.youtube.com/embed/WR2HoD0FpyM?si=Ba7ZxHCiRwpc1Hyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Flyers That Find the Right Hands</h4>
                    <p>Not all flyers distribution in Dubai campaigns is created equal. Are you tossing leaflets on random doorsteps? That is a waste. Smart businesses make sure every flyer counts. That is where you can count on us.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image40.png')}}" class="flyer-img" width="100%" alt="Flyers that find the right hands">
                </div>
                <div class="col-lg-8">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Targeted Flyer Marketing in Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse show" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We don’t just distribute flyers—we place them with purpose. We put your flyers in the right location with demographic research as well as local insights.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="true" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Door-to-Door Flyer Campaigns in the UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The ideal way to reach a customer is right at their doorstep. Our door-to-door flyer campaigns in the UAE help businesses connect with people in specific localities.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="true" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Bulk Flyer Delivery Services in the UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Do you need thousands of flyers distributed across Dubai’s busiest spots? Our bulk flyer delivery services in the UAE ensure optimum reach. We focus on high-visibility locations like shopping centres, corporate offices, and key transport hubs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="true" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Design That Gets Noticed
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A boring flyer will land straight in the bin. However, a great flyer will stop people in their tracks. We create engaging designs that do not just look good but get results.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="true" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Real-Time Tracking & Reporting
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>There will be no guessing games. We provide detailed reports on where your flyers went and the response rates. You will know exactly what is working with flyer distribution in Dubai.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row flyer-para-sec">
                        <div class="col-lg-6">
                            <h5>Quality Control That Sets Standards</h5>
                            <p>
                                When you choose our flyers distribution in Dubai service, you're choosing peace of mind. Our quality assurance system includes:
                            </p>
                            <ul>
                                <li>Real-time GPS tracking monitors every distributor's movement</li>
                                <li>Photo verification confirms the proper placement of flyers</li>
                                <li>Daily progress reports keep you informed</li>
                                <li>Performance metrics measure the engagement of direct marketing</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h5>Technology-Driven Insights</h5>
                            <p>
                                Modern problems need modern solutions. Our bulk flyer delivery services in the UAE employ cutting-edge technology to track and optimise campaigns. Heat maps show distribution density, while engagement metrics reveal which areas generate the strongest response.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>Creating Impact Through Design</h5>
                            <p>
                                Great distribution deserves attention-grabbing design. While our focus stays on flyers distribution in Dubai, we guide you on creating materials that grab attention. We know what works in different business districts and can advise on the following:
                            </p>
                            <ul>
                                <li>Optimal flyer sizes for different environments</li>
                                <li>Paper quality that reflects your brand value</li>
                                <li>Design elements that resonate with UAE executives</li>
                                <li>Call-to-action placement that drives response</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h5>Building Long-Term Success</h5>
                            <p>
                                We believe that one-off campaigns have their place, but consistent presence builds brands. Our flyer distribution in Dubai service helps you maintain visibility through:
                            </p>
                            <ul>
                                <li>Regular distribution schedules</li>
                                <li>Updated target area analysis</li>
                                <li>Seasonal campaign adjustments</li>
                                <li>Ongoing performance optimisation</li>
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>How Flyers Lead to More Customers?</h4>
                    <p>
                        A flyer is not a piece of paper. We believe that it is a conversation starter. It gets people talking, visiting, and buying. Here is what makes a flyer campaign successful:
                    </p>
                    <ul>
                        <li><strong>A Clear Message</strong> – No fluff. No gimmicks. Just a strong, simple offer that makes people take action.</li>
                        <li><strong>The Right Timing</strong> – Flyers distributed before a big event, sale, or promotion? That’s smart marketing.</li>
                        <li><strong>Strategic Placement</strong> – Flyers in high-traffic areas? Instant brand exposure.</li>
                        <li><strong>Professional Execution</strong> – Sloppy, random flyer drops don’t work. But what about a well-planned flyers distribution in Dubai campaign? That brings real results.</li>
                    </ul>
                    <p>Are you ready to transform your marketing reach? Contact us to discover how our flyers distribution in Dubai service delivers measurable impact.</p>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>How Quickly Can You Launch a Distribution Campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We can mobilise within 48 hours of campaign approval. Our established networks and prepared teams mean your message starts reaching audiences fast.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What Makes Your Premium Distribution Different from Standard Services?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We combine real-time GPS tracking and strategic timing with premium location targeting. Our distributors understand corporate etiquette and ensure your materials reach decision-makers.</p>
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