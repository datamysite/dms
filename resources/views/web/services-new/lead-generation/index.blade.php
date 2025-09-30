@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
    <style>
        #serviceVideo{
            position: absolute;
              right: 0;
              bottom: 0;
              min-width: 100%; 
              min-height: 100vh;
              object-fit: cover;
        }
    </style>
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$service->name}}</h1>
                        <h2>About Lead Generation</h2>
                        <br>
                        <p>
                            Datamysite focuses on building custom-made lead-generation techniques to help businesses succeed in Dubai and throughout the UAE. Lead Generation Dubai operates as the primary connection system that drives any thriving business toward interested customers who want to purchase their products. Advanced tools combined with strategic approaches and data analytics lead to a steady stream of valuable leads for your business.
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-5">
                    <iframe class="service-iframe transit-iframe" src="https://www.youtube.com/embed/re2nXszkJcI?si=9lATrbRekh8VvaCz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-7">
                    <h4>Why Choose Datamysite for Lead Generation Dubai?</h4>
                    <ul>
                        <li><strong>Customised Campaigns</strong>: The Lead Generation Dubai services from our company offer customised campaign approaches that produce exceptional results for your business requirements. Our approach opposes standardised marketing methods because we develop distinctive online campaigns that match industry requirements and target market characteristics.</li>
                        <li><strong>High-Quality Leads</strong>: Lead Generation Dubai delivers high-quality prospects that successfully convert rather than achieving quantity-based growth. Our strategies focus on the correct audience to guarantee every lead prospect transforms successfully.</li>
                        <li><strong>Data-Driven Approach</strong>: We use analytical data approaches to permanently enhance your Lead Generation Dubai strategies, thereby making your marketing efforts smarter.</li>
                        <li><strong>Proven Results</strong>: Datamysite uses leading Lead Generation Dubai methods to expand business customer bases and has demonstrated sustainable growth results through many years of proven success.</li>
                    </ul>
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
                                <div id="faqCollapse-{{$s}}" class="collapse" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
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



        <div id="testimonials" class="striped-section">
          @include('web.includes.elements.clients')
        </div>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-8 vertical-center">
                    <h4>Our Lead Generation Services Dubai</h4>
                    <p>
                        Datamysite provides a set of Lead Generation Services in Dubai that helps businesses achieve efficient lead attraction and conversion. Our approach includes:
                    </p>
                    <ul>
                        <li><strong>Landing Page Optimisation</strong>: The development of landing pages directed at maximising visitor response rates effectively collects useful information from prospective customers.</li>
                        <li><strong>Clear Calls-to-Action (CTAs)</strong>: The complete implementation of compelling Call-to-Action mechanisms provides effective lead-capture opportunities.</li>
                        <li><strong>Lead Magnets</strong>: Our company provides Lead Magnets, which include eBooks webinars and free trials available in exchange for obtaining customer contact information.</li>
                        <li><strong>Social Media Engagement</strong>: Attracting potential customers through social media campaigns, blogs, and videos.</li>
                        <li><strong>Webinars and Live Events</strong>: You should organise interactive webinars and live events that enable you to teach and connect with your target audience.</li>
                    </ul>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image33.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image34.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>

                <div class="col-lg-8 vertical-center">
                    <h5>The Power of Digital Lead Generation Dubai</h5>
                    <p>
                        The digital era requires businesses to use online tactics that enable them to catch potential leads demonstrating high buying intent. Our Digital Lead Generation Dubai service emphasises multiple channels to cover any potential customer base. This includes:
                    </p>
                    <ul>
                        <li><strong>SEO and Content Marketing</strong>: Driving organic traffic through well-optimised content.</li>
                        <li><strong>PPC Advertising</strong>: We utilise PPC Advertising to run specific advertising campaigns that bring in carefully selected high-quality leads.</li>
                        <li><strong>Email Marketing</strong>: We use first-person email marketing to develop potential clients through automated personalised correspondence.</li>
                        <li><strong>Social Media Marketing</strong>: Our social media marketing strategy utilises LinkedIn, Facebook, and Instagram platforms to obtain new leads.</li>
                    </ul>
                    <br>
                    <h5>Expanding Reach with Online Lead Generation Services UAE</h5>
                    <p>
                        The Online Lead Generation Services UAE from our company enable businesses to engage potential customers in every region of the United Arab Emirates. Our lead generation strategies unite inbound and outbound methods to maintain consistent lead acquisition.
                    </p>
                    <ul>
                        <li>Search Engine Marketing (SEM)</li>
                        <li>Influencer Collaborations</li>
                        <li>AI-Driven Lead Targeting</li>
                        <li>Automated Chatbots for Instant Engagement</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>The Datamysite Difference</h4>
                    <p>
                       Lead Generation Marketing Dubai operates as a platform that delivers maximum results from its operations. To achieve successful Lead Generation Marketing, Dubai businesses must integrate three essential elements: creative approaches, analytical analysis and audience interaction. Our method guarantees that our marketing initiatives gain ground through data-driven analysis to target audience behaviour patterns.
                    </p>
                    <h6>How We Work:</h6>
                    <ul>
                        <li>Our team identifies potential customers through data analysis combined with market investigation techniques.</li>
                        <li>Interesting content alongside advertisement strategies attracts target prospects to our platform.</li>
                        <li>Smart lead collection approaches allow the organisation to gather essential customer data records.</li>
                        <li>The combination of automatic and human-operated follow-up initiatives generates paying customers from leads.</li>
                    </ul>
                    <p>Datamysite operates as a marketing agency that launched in 2021 from its Dubai UAE headquarters to provide modern out-of-home (OOH) and digital media solutions. Datamysite uses both place-based market intelligence and universal marketing approaches to guide businesses toward achieving their promotional targets. We need to connect so I can understand how to position your brand for success.</p>
                    
                    
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
                                        <span class="badge">&nbsp;</span>How does lead generation work?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The job of Lead Generation Dubai consists of seeking and luring future potential customers for the enterprise through targeted promotional approaches. The marketing strategies used for lead generation consist of email campaigns together with social media ads and search engine marketing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Under which sectors would lead generation services create the most value?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lead Generation Services Dubai exist to serve businesses from multiple sectors, which consist of real estate technology, healthcare, retail, and others.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Which steps will you take to maintain lead quality?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team employs progressed targeting systems together with data analytical tools and campaign optimisation programs to produce leads that are purposeful and likely to transform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How fast can I see results?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Digital Lead Generation Dubai generally produces results throughout a few weeks of operation; however, the strategic plan's complexity determines this timeframe.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Which lead generation approaches do you currently employ?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The Online Lead Generation Services UAE from our company combines SEO with PPC advertising alongside email marketing, content marketing, social media marketing and influencer collaborations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>How does lead generation benefit small company operations?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! Lead Generation Marketing Dubai provides exceptional results for small companies that seek customer connections with individuals having clear purchasing intentions.</p>
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