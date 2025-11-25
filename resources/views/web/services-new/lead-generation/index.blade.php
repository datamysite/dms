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
                        <h2>We Specialize in</h2>
                        <h5>lead generation services in Dubai and across the UAE</h5>
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
                </div>
                <div class="col-lg-7">
                    <h4>Why Lead Generation is Critical for Businesses in Dubai</h4>
                    <p>
                        Dubai is a commercial hub with a diverse population, including expatriates and locals from over 200 nationalities. While this presents a massive opportunity, it also means the market is highly competitive. Many businesses rely on traditional marketing methods like billboards, print ads, and social media campaigns, but these often generate traffic without guaranteed conversions.
                        <br>
                        Lead generation solves this problem by:
                    </p>
                    <ul>
                        <li><strong>Focusing on quality over quantity</strong>: Capture leads who are genuinely interested in your offerings.</li>


                        <li><strong>Reducing acquisition costs</strong>: A well-optimized lead generation strategy lowers marketing spend per customer.</li>


                        <li><strong>Increasing conversion potential</strong>: Engaged leads are more likely to become paying customers.</li>


                        <li><strong>Building a predictable sales pipeline</strong>: Consistent lead flow allows businesses to forecast revenue accurately.</li>
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
                    <p>In short, Dubai businesses need more than traffic; they need qualified leads, and that’s where DataMySite excels.</p>
                </div>  
                <div class="col-lg-5 vertical-center">
                    <iframe class="service-iframe transit-iframe" src="https://www.youtube.com/embed/zrKP3REbO7Y?si=qafY5PwxtYi86Z6q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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


         <section id="service-cards" class="blog-section striped-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12">
                    <h4>Our Comprehensive Lead Generation Approach</h4>
                    <p>At DataMySite, we follow a data-driven, multi-channel strategy to generate leads that convert. Here’s how we do it:</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">In-Depth Strategy & Audience Research</h5>
                    <p>
                        Every lead generation campaign begins with understanding your business, goals, and audience. We:
                    </p>
                    <ul>
                        <li>Define ideal customer personas (demographics, interests, profession, nationality, location).</li>


                        <li>Analyze competitor strategies in Dubai and UAE.</li>


                        <li>Identify high-intent keywords and phrases your target audience searches for online.</li>


                        <li>Determine the most effective channels to reach your prospects — search engines, social media, email, or offline campaigns.</li>
                    </ul>
                    <p>This ensures that every lead we generate is highly targeted and relevant.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Customized Lead Capture Systems</h5>
                    <p>
                        We design high-converting lead capture solutions tailored for your Dubai audience:
                    </p>
                    <ul>
                        <li><strong>Landing Pages</strong>: Optimized for speed, mobile-friendliness, and user experience.</li>


                        <li><strong>Forms</strong>: Clear, simple, and persuasive forms designed to capture essential information without losing prospects.</li>


                        <li><strong>Calls-to-Action (CTA)</strong>: Strategically placed to encourage action, such as “Get a Free Quote” or “Book a Consultation.”</li>
                    </ul>
                    <p>We also ensure that every lead is integrated into your CRM or marketing automation system for efficient follow-up.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Multi-Channel Lead Generation</h5>
                    <p>
                        Our campaigns leverage multiple channels to maximize reach and results:
                    </p>
                    <ol>
                        <li>
                            <strong>Paid Advertising:</strong>
                            <ul>
                                <li>Google Ads: Target users actively searching for your products/services in Dubai.</li>


                                <li>Meta Ads (Facebook & Instagram): Geo-targeted campaigns for UAE users.</li>


                                <li>LinkedIn Ads: Perfect for B2B lead generation targeting decision-makers.</li>

                            </ul>
                        </li>
                        <li>
                            <strong>Organic Channels:</strong>
                            <ul>
                                <li>Local SEO: Optimizing your website for Dubai/UAE-specific searches.</li>


                                <li>Content Marketing: Engaging blog posts, guides, and case studies designed to attract leads.</li>


                                <li>Social Media: Organic campaigns to build trust and engagement.</li>

                            </ul>
                        </li>
                        <li>
                            <strong>Community & Offline Integration:</strong>
                            <ul>
                                <li>WhatsApp campaigns, email outreach, and directory listings in Dubai.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>This multi-channel approach ensures maximum visibility and lead capture across all relevant platforms.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Lead Qualification & Nurturing</h5>
                    <p>
                        Not all leads are created equal. We implement a qualification system to prioritize:
                    </p>
                    <ul>
                        <li><strong>High-intent leads</strong>:<br> Those who are ready to purchase.</li>


                        <li><strong>Decision-makers</strong>:<br> The right contacts in companies or households.</li>


                        <li><strong>Demographically relevant leads</strong>:<br> Matching your Dubai market focus.</li>
                    </ul>
                    <p>Once captured, leads are nurtured via email sequences, WhatsApp follow-ups, or retargeting campaigns. This keeps your brand top-of-mind and increases conversion rates.</p>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">Continuous Optimization & Reporting</h5>
                    <p>
                        Dubai’s market is dynamic, so we continuously analyze and optimize campaigns:
                    </p>
                    <ul>
                        <li>Track metrics like Cost Per Lead (CPL), conversion rate, and lead quality.</li>


                        <li>A/B test landing pages, ad creatives, and CTAs to find the highest performing combinations.</li>


                        <li>Reallocate budget to high-performing channels.</li>


                        <li>Provide detailed analytics and reports, allowing you to see exactly how your investment is generating results.</li>
                    </ul>
                    <p>This approach ensures long-term campaign success and continuous improvement.</p>
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
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image34.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>

                <div class="col-lg-8 vertical-center">
                    <h5>Benefits of Choosing DataMySite for Lead Generation in Dubai</h5>
                    <ul>
                        <li><strong>Local Expertise</strong>:<br> We understand Dubai’s multicultural audience, business culture, and market regulations.<br><br></li>


                        <li><strong>High-Quality Leads</strong>:<br> Our focus is on leads that convert, not just numbers.<br><br></li>


                        <li><strong>End-to-End Service</strong>:<br> Strategy, setup, ad creation, landing pages, tracking, and optimization — we handle everything.<br><br></li>


                        <li><strong>Multi-Language Support</strong>:<br> Campaigns can be run in English, Arabic, Hindi/Urdu, or other languages for Dubai’s diverse audience.<br><br></li>


                        <li><strong>Transparent Reporting</strong>:<br> Know exactly where your leads come from and the ROI they deliver.<br><br></li>


                        <li><strong>Scalable Solutions</strong>:<br> We can start small and scale campaigns as your business grows.<br><br></li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Types of Businesses That Benefit</h4>
                    <p>
                       Our lead generation services are ideal for:
                    </p>
                    <ul>
                        <li><strong>Startups & SMEs</strong>: Generate leads quickly to establish a market presence in Dubai.</li>


                        <li><strong>B2B Companies</strong>: Connect with decision-makers and enterprises in UAE.</li>


                        <li><strong>Service Providers</strong>: Education, healthcare, real estate, finance, and consulting businesses.</li>


                        <li><strong>E-commerce Brands</strong>: Generate leads for email marketing, retargeting, and promotions.</li>


                        <li><strong>Local Businesses</strong>: Restaurants, gyms, beauty salons, and other service-based businesses seeking Dubai-specific customers.</li>
                    </ul>
                    <br>
                    <h4>Conclusion</h4>
                    <p>
                        Lead generation is the lifeblood of any business, especially in Dubai’s competitive and multicultural market. With the right strategy, targeting, and execution, you can consistently capture high-quality leads that convert into paying customers.
                        <br><br>
                        DataMySite offers a complete lead generation solution in Dubai and across the UAE — from strategy and campaign setup to tracking, optimization, and reporting.
                        <br><br>
                        Start your lead generation journey today and grow your business with high-quality leads in Dubai and UAE. Contact us for a free consultation!

                    </p>
                    
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible vertical-center">
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
                                        <span class="badge">&nbsp;</span>How much does lead generation cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary depending on your industry, target audience, campaign channels, and volume. At DataMySite, we provide customized packages based on your goals and budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How quickly will I start seeing leads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Paid campaigns can deliver leads within days, while organic methods such as SEO and content marketing may take 3–6 months. We often combine both for immediate and long-term results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is a high-quality lead?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A lead is high-quality if it matches your ideal customer profile, has purchase intent, and can be contacted directly. We filter and score leads to ensure you receive the best prospects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can you target specific languages or nationalities?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Dubai’s diverse market allows us to target by language, nationality, and location, including English, Arabic, Hindi/Urdu, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Do you provide reporting and analytics?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We provide detailed dashboards and reports showing lead source, conversion rates, CPL, and other performance metrics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>How do you nurture leads after capture?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We set up automated email campaigns, WhatsApp follow-ups, and retargeting strategies to increase conversion rates and engagement.</p>
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