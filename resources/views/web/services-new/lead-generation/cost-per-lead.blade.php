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
                        <h2>About Cost-Per-Lead (CPL)</h2>
                        <br>
                        <p>
                            Generating high-quality leads is important for business growth. Cost-per-lead services Dubai help businesses determine the investment required to acquire a potential customer. Leading industry factors, together with marketing channels alongside market competition, determine the overall price for lead acquisition.
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
                <div class="col-lg-12">
                    <h4>Impact of Cost-Per-Lead Services</h4>
                    <p>
                        At Datamysite, we customise our CPL solutions to provide optimal marketing return on investment to clients. We offer high quality performance-driven lead generation solutions that help businesses achieve their growth objectives.
                    </p>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                   <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-210">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-210" data-aria-expanded="true" data-aria-controls="faqCollapse-210">
                                        <span class="badge">&nbsp;</span>Benefits of Cost-Per-Lead Services Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-210" class="collapse show" aria-labelledby="faqHeading-210" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><strong>Budget Efficiency</strong>: You only pay for actual leads, optimising your marketing spend.</li>
                                        <li><strong>Scalability</strong>: CPL campaigns can be scaled to match business growth objectives.</li>
                                        <li><strong>Measurable Performance</strong>: Transparent analytics provide clear insights into campaign success.</li>
                                        <li><strong>Customised Targeting</strong>: We create tailored campaigns for specific audience segments.</li>
                                        <li><strong>Reduced Financial Risk</strong>: You invest in actual results rather than uncertain impressions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Effective CPL campaigns UAE with Datamysite
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Datamysite is a trusted partner in delivering successful CPL campaigns UAE tailored to business needs. We provide:</p>
                                    <ul>
                                        <li><strong>Data-Driven Strategies</strong>: The use of analytics in CPL campaigns results in optimised performance through data-driven strategies.</li>
                                        <li><strong>Customised Solutions</strong>: We provide businesses with lead-generation approaches that fulfil their strategic goals.</li>
                                        <li><strong>Multi-Channel Approach</strong>: Paid ads, SEO, and content marketing.</li>
                                       <li> <strong>Continuous Optimisation</strong>: The continuous monitoring of real-time data helps organisations build higher-quality leads at reduced prices.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <iframe class="service-iframe cpl-iframe" src="https://www.youtube.com/embed/zrKP3REbO7Y?si=qafY5PwxtYi86Z6q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

                <div class="col-lg-8">
                    <h4>Key Factors Affecting Cost-per-lead services Dubai</h4>
                    <p>Let’s take a look at the major factors that influence Cost-per-lead services Dubai. </p>
                    <ul>
                        <li>
                            <strong>Industry</strong>: CPL financial investment adjusts depending on the particular business field. Real estate and finance sectors tend to face increased lead generation expenses because of market competition and the valuable nature of their customers.
                        </li>
                        <li>
                            <strong>Marketing Channel</strong>: Cost depends on the selection of marketing channels, which leads carry to the company for future opportunities. Common methods include:
                            <ol>
                                <li>Advertising campaigns that pay for service include Google Ads and social media advertising with display advertising options.</li>
                                <li>The content strategy uses blogs together with whitepapers and ebooks as lead generation tools.</li>
                                <li>The process of optimising organic search functionality allows businesses to attract leads without paying for advertisement.</li>
                                <li>Media outreach combined with branding programs known as PR campaigns represents the approach to generating leads.</li>

                            </ol>
                        </li>
                        <li><strong>Lead Quality</strong>: A business must recognise that all sales leads carry different values. These leads generate higher conversion rates but command higher expenses. Establishing an optimised CPL strategy will generate high-quality leads instead of general volume increases.</li>
                        <li><strong>Competition</strong>: Competitive market environments drive up CPL expenses because quality lead generation becomes more challenging in such areas of high demand. A powerful marketing plan allows businesses to distinguish themselves from competitors and decrease marketing expenses.</li>

                    </ul>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image35.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-12">
                    <h5>How to Calculate Cost-per-lead services Dubai</h5>
                    <p>
                        To determine your CPL, use this simple formula:<br>
                        <strong>Total Campaign Cost</strong> / <strong>Number of Leads Generated</strong> = <strong>Cost-per-lead</strong>.<br>
                        Businesses use this metric to evaluate marketing performance, thus enhancing their strategies for future success.
                    </p>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">

                    <h4>Why Choose Datamysite for Cost-per-lead services Dubai?</h4>
                    <p>Founded in 2021, Datamysite specialises in digital and out-of-home (OOH) media strategies. The company employs data-driven techniques to maximise leads and advertisement placement effectiveness for both digital and outdoor media channels.<br>
                    The company develops strong alliances with leading PR media houses that help broaden brand exposure through meaningful media coverage, which produces premium quality leads. The capabilities of our Dubai-based team bridge local understanding of markets with worldwide business best practices to produce CPL campaigns which produce trackable outcomes.<br>
                    Get Started with Datamysite Today! Ready to elevate your lead generation with Cost-per-lead services Dubai? Contact us and let us work together on developing CPL campaigns that give your business growth while achieving maximum returns on investment.</p>
                    

                    <h5>Effective CPL campaigns UAE with Datamysite</h5>
                    <p>Datamysite is a trusted partner in delivering successful CPL campaigns UAE tailored to business needs. We provide:</p>
                    <ul>
                        <li><strong>Data-Driven Strategies</strong>: The use of analytics in CPL campaigns results in optimised performance through data-driven strategies.</li>
                        <li><strong>Customised Solutions</strong>: We provide businesses with lead-generation approaches that fulfil their strategic goals.</li>
                        <li><strong>Multi-Channel Approach</strong>: Paid ads, SEO, and content marketing.</li>
                        <li><strong>Continuous Optimisation</strong>: The continuous monitoring of real-time data helps organisations build higher-quality leads at reduced prices.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
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

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>What are Cost-per-lead services Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Cost-per-lead services Dubai refer to marketing strategies where businesses pay for each potential customer generated through various marketing channels, ensuring cost-effective lead acquisition.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>How do CPL campaigns UAE benefit my business?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>CPL campaigns UAE help businesses track marketing spend effectively, ensuring they only pay for actual leads rather than broad advertising, resulting in a higher return on investment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>How do you ensure lead quality?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We use advanced targeting, lead verification, and scoring methods to deliver high-quality leads.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">&nbsp;</span>Which platforms do you use for CPL campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We utilise Google Ads, Facebook, LinkedIn, and other high-traffic digital channels.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">&nbsp;</span>How much does a lead cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The cost varies based on industry, competition, and marketing channels. Contact us for a tailored quote.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">&nbsp;</span>Can CPL campaigns be customised?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, our strategies are fully tailored to meet specific business objectives.</p>
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