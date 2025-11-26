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
                        <h2>In today’s connected world</h2>
                        <h4>your brand’s influence shouldn’t stop at the UAE’s borders.</h4>
                        <br>
                        <p>
                            At DataMySite, we empower Dubai and UAE-based businesses to go global with confidence through our comprehensive Global Marketing Solutions — designed to connect your brand with audiences across China, Saudi Arabia, India, and London.
                            <br>
                            We combine strategic localization, cross-border media expertise, and data-driven execution to ensure your campaigns achieve measurable results — anywhere in the world.
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
                <div class="col-lg-12 mb-0">
                    <h4>Why Choose DataMySite for Global Marketing</h4>
                    <p class="mb-0">
                        We understand that every market is different — culturally, digitally, and behaviorally. That’s why our approach focuses on customizing your message for each region while maintaining a consistent global brand identity.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p><strong>What Sets Us Apart:</strong></p>
                    <ul>
                        <li><strong>Global Reach with Local Relevance</strong>: We execute campaigns in four high-growth regions — China, Saudi Arabia, India, and London.</li>
                        <li><strong>Data-Driven Targeting</strong>: Audience insights and localized strategies ensure every campaign reaches its ideal consumer base.</li>
                        <li><strong>Creative Localization</strong>: We translate and culturally adapt creatives for maximum relevance and resonance.</li>
                        <li><strong>Integrated Media Ecosystem</strong>: From airport and transit to digital, retail, and cinema — all under one strategic framework.</li>
                        <li><strong>End-to-End Management</strong>: Strategy, production, deployment, reporting, and optimization — all managed seamlessly from Dubai.</li>
                    </ul>
                    <p>At DataMySite, we bridge the gap between Dubai’s innovation and the world’s most valuable markets.</p>
                </div>  
                <div class="col-lg-6 vertical-center">
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
                    <h4>Our Global Marketing Regions</h4>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">China Marketing – Airport & Digital Advertising</h5>
                    <p>
                        Expand your brand visibility in one of the world’s most competitive markets through high-traffic airport advertising and localized digital campaigns.
                        <br>
                        We help brands establish presence across China’s top airports — from Beijing to Shanghai — and across local digital platforms like WeChat, Baidu, and Little Red Book.
                        <br><br>
                        <strong>Key Channels</strong>: Airport advertising, WeChat & Baidu marketing, influencer campaigns.<br>
                        <strong>Perfect For</strong>: Tourism, real estate, luxury, education, and lifestyle brands.
                        Explore China Marketing
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Saudi Marketing – Retail & Outdoor Advertising</h5>
                    <p>
                        Connect with millions of consumers in Saudi Arabia through Panda Store in-store screens, digital billboards, and community MUPIs.
                        <br>
                        We combine in-store shopper visibility with digital outdoor reach, making your brand stand out across Riyadh, Jeddah, and Dammam.
                        <br><br>
                        <strong>Key Channels</strong>: Panda retail screens, waterfront digital displays, community MUPIs.<br>
                        <strong>Perfect For</strong>: FMCG, telecom, retail, real estate, and entertainment campaigns.
                        Explore Saudi Marketing
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">India Marketing – Transit, Cinema & Mall Advertising</h5>
                    <p>
                        With over a billion consumers and the fastest-growing urban population, India is an unmissable market.
                        <br>
                        Our integrated campaigns use Taxi Ads, Metro Branding, PVR Cinema Advertising, and Mall Marketing to deliver citywide visibility and audience engagement.
                        <br><br>
                        <strong>Key Channels</strong>: Taxi wraps, metro panels, cinema ads, mall activations.<br>
                        <strong>Perfect For</strong>: Technology, fashion, education, real estate, and FMCG brands.
                        Explore India Marketing
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">London Marketing – Taxi & Bus Advertising</h5>
                    <p>
                        Showcase your brand in one of the world’s most prestigious cities through London Taxi and Double-Decker Bus Advertising.
                        <br>
                        We help UAE businesses gain exposure in London’s most iconic routes — from Oxford Street and Canary Wharf to Heathrow and Westminster.
                        <br><br>
                        <strong>Key Channels</strong>: Taxi wraps, digital taxi tops, double-decker bus advertising.<br>
                        <strong>Perfect For</strong>: Luxury, tourism, education, property, and corporate brands.
                        Explore London Marketing
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

                <div class="col-lg-8 vertical-center">
                    <h4>How Our Global Marketing Process Works</h4>
                    <ul>
                        <li><strong>Market Discovery</strong> – Identify your brand’s ideal markets and audience segments.</li>


                        <li><strong>Localization Strategy</strong> – Adapt visuals, tone, and messaging for cultural fit.</li>


                        <li><strong>Channel Planning</strong> – Select the right media formats (airport, taxi, metro, retail, etc.).</li>


                        <li><strong>Creative Production</strong> – Design locally relevant and compliant campaigns.</li>


                        <li><strong>Execution & Tracking</strong> – Deploy across target markets with live reporting and analytics.</li>


                        <li><strong>Performance Optimization</strong> – Refine campaigns for maximum ROI and global brand consistency.</li>
                    </ul>
                    <br>
                    <h4>Benefits of Partnering with DataMySite</h4>
                    <p>
                        <strong>One Agency, Global Reach</strong> – Launch campaigns in multiple countries from Dubai.<br>
                        <strong>Localized Expertise</strong> – Region-specific teams and partnerships.<br>
                        <strong>Premium Media Access</strong> – Airports, transport, retail, and digital screens.<br>
                        <strong>Cross-Platform Integration</strong> – OOH + digital marketing for measurable results.<br>
                        <strong>Full Transparency</strong> – Clear reporting and real-time performance data.
                    </p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center mob-not-visible">
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
                    <h4>Who We Work With</h4>
                    <ul>
                        <li>Tourism & Hospitality Brands</li>
                        <li>Real Estate & Developers</li>
                        <li>Education Institutions</li>
                        <li>Luxury & Lifestyle Brands</li>
                        <li>FMCG & Retail</li>
                        <li>Government & Destination Marketing Authorities</li>
                        <li>Tech & Financial Services</li>
                    </ul>
                    <p>Our clients trust us to deliver culturally intelligent campaigns that convert awareness into growth — globally.</p>
                    <br>
                    <h4>Expand Globally. Execute Seamlessly.</h4>
                    <p>
                        At DataMySite, we turn international ambitions into measurable success.
                        <br>
                         Our Global Marketing Dubai services help your brand break boundaries and connect with high-value audiences across the world — through innovative media channels, localized strategies, and unmatched execution precision.
                         <br><br>
                        <strong>From Dubai to the world — your brand, everywhere.
                        <br>
                        Let’s Build Your Global Campaign Today.</strong>


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
                                        <span class="badge">&nbsp;</span>What is included in your Global Marketing service?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We provide media planning, creative localization, production, deployment, and reporting across China, Saudi Arabia, India, and London.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I run one campaign across multiple countries?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We specialize in multi-market campaigns managed through a single centralized Dubai-based team for easy coordination.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How do you handle content localization?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We adapt copy, visuals, and language to match local culture, tone, and consumer preferences — ensuring maximum engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What industries benefit most from global campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Ideal industries include real estate, tourism, retail, luxury, education, technology, and finance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How long does it take to launch a global campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Depending on the market and channel, campaigns can go live in 2–4 weeks once creative and approvals are finalized.</p>
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