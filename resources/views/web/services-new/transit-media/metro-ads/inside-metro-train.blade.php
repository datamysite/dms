@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$mainservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Engage a Captive Audience</h2>
                        <h4>While They Travel</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands take advantage of this high-exposure medium by creating impactful and visually appealing advertising campaigns inside metro trains across Dubai. From seat panels and digital screens to full-train branding, we design and execute campaigns that connect with passengers throughout their journey.
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
                                
                                <input type="hidden" name="service" value="{{$mainservice->name}}" required>
                                                                
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
                    <h4>What is Inside Metro Train Advertising</h4>
                    <p>
                        Inside Metro Train Advertising refers to brand promotions placed inside metro coaches, where passengers spend their travel time. The advertisements are displayed across multiple formats — such as wall stickers, window wraps, door panels, and digital screens — offering high visibility and engagement.
                        <br><br>
                        Since commuters are often seated or standing for several minutes, they are more likely to notice and retain brand messages. This environment allows advertisers to communicate effectively with a calm, receptive audience, making it one of the most powerful out-of-home (OOH) advertising platforms in Dubai.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

        

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-5 mt-0">
                    <h4>Why Inside Metro Train Advertising Works in Dubai</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Captive Audience
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Inside metro trains, passengers are enclosed in a distraction-free space. This ensures that your brand message gets uninterrupted attention, increasing recall and engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Repeated Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most commuters use the metro daily, meaning your ad is seen multiple times by the same audience. This frequency significantly strengthens brand recall and trust over time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Premium Brand Placement
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai Metro is a symbol of sophistication and modernity. Advertising inside the trains associates your brand with progress, reliability, and innovation — values that resonate with Dubai’s cosmopolitan audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Citywide Reach
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The Dubai Metro network connects all major commercial, residential, and tourist hubs, including Business Bay, Dubai Marina, Deira, Bur Dubai, and Dubai Mall. This ensures your message reaches a large and diverse group of potential customers every single day.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Cost-Effective and Long-Lasting
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Inside train ads run for weeks or months, providing constant exposure without the need for continuous spending, making it one of the most cost-efficient transit media options in the UAE.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 mt-0">
                    <h4>Types of Inside Metro Train Advertising</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Interior Train Wraps
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Transform the interior of an entire train into a branded space. Walls, doors, ceilings, and windows can be covered with creative graphics that immerse passengers in your brand story from the moment they board.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Door Panel Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Each metro door can feature your ad on both sides, giving maximum visibility as commuters enter and exit. Door branding is perfect for short, impactful messages or product highlights.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Window Graphics
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Semi-transparent window wraps allow branding without blocking the view. This is an excellent format for adding visual consistency to your campaign while maintaining passenger comfort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Seat Back Panels and Armrest Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Advertising on seat panels ensures eye-level visibility for seated passengers. It’s subtle yet highly effective due to its close proximity and repeated exposure.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Overhead Panels and Roof Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Utilize the space above windows and doors to display creative visuals, taglines, or brand imagery. This ensures visibility even during crowded travel times.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-35">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-35" data-aria-expanded="false" data-aria-controls="faqCollapse-35">
                                        <span class="badge">&nbsp;</span>Digital Screens and DOOH Displays
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-35" class="collapse" aria-labelledby="faqHeading-35" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Many trains are equipped with digital displays that broadcast short video ads or animated visuals. These screens are ideal for delivering dynamic and time-sensitive content that grabs instant attention.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-36">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-36" data-aria-expanded="false" data-aria-controls="faqCollapse-36">
                                        <span class="badge">&nbsp;</span>Handle Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-36" class="collapse" aria-labelledby="faqHeading-36" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Even the hand grips or poles can be branded with your logo or tagline, ensuring your brand is literally held in the hands of passengers throughout the journey.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>



    
        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Key Benefits of Inside Metro Advertising in Dubai</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Long Dwell Time = High Attention</h4>
                            <p> 
                                Passengers spend an average of 15–25 minutes inside the metro. This uninterrupted time frame allows brands to communicate messages effectively and creatively.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Non-Intrusive Yet Highly Visible</h4>
                            <p> 
                                Inside metro advertising integrates naturally into the commuter environment — visible, but not annoying. It creates a positive and memorable brand impression.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Ideal for B2C and B2B Brands</h4>
                            <p> 
                                Whether you’re promoting a consumer product, real estate project, or professional service, metro train advertising reaches professionals, residents, and decision-makers daily.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Flexible Campaign Options</h4>
                            <p> 
                                Choose between a single train, multiple carriages, or full network coverage based on your budget and target audience.y.
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h4>Boosts Brand Credibility</h4>
                            <p> 
                                Brands that advertise in the metro are perceived as established and trustworthy. The Dubai Metro’s clean and premium environment enhances your brand reputation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Strategic Impact of Inside Metro Advertising in Dubai</h4>
                    <p>The Dubai Metro covers some of the city’s most important commercial and lifestyle zones, including:</p>
                    <ul>
                        <li><strong>Business Bay and Financial Centre</strong> – for corporate and luxury brands.</li>
                        <li><strong>Dubai Mall/Burj Khalifa</strong> – perfect for fashion, lifestyle, and hospitality ads.</li>
                        <li><strong>Dubai Marina and JLT</strong> – reaching young professionals and residents.</li>
                        <li><strong>Mall of the Emirates</strong> – connecting with shoppers and families.</li>
                        <li><strong>Deira City Centre and Union Station</strong> – broad audience reach for mass-market brands.</li>
                    </ul>
                    <p>Each of these routes allows brands to target specific customer segments while maintaining citywide exposure.</p>
                    <br>
                    <h4>Industries That Benefit from Inside Metro Advertising</h4>
                    <p>This advertising format is ideal for:</p>
                    <ul>
                        <li>Telecom and Technology Brands – showcasing new innovations or offers.</li>
                        <li>Real Estate Developers – promoting upcoming property launches.</li>
                        <li>Retail and FMCG Brands – boosting product awareness.</li>
                        <li>Banks and Financial Institutions – building credibility and promoting services.</li>
                        <li>Automotive Brands – launching new models or campaigns.</li>
                        <li>Education and Training Institutes – targeting professionals and students.</li>
                        <li>Government and Public Awareness Campaigns – reaching mass audiences effectively.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>

                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Executes Inside Metro Advertising Campaigns</h4>
                    <p>
                        DataMySite provides a full-service solution for Metro Train Advertising in Dubai, managing every detail from design to installation.
                    </p>
                    <ul>
                        <li>
                            <strong>Step 1: Audience Research and Planning</strong><br>
                            We analyze your target demographics, travel patterns, and brand goals to select the right metro lines and train routes.
                        </li>
                        <li>
                            <strong>Step 2: Concept and Creative Design</strong><br>
                            Our team develops visually striking concepts that make your message stand out in a competitive advertising environment.
                        </li>
                        <li>
                            <strong>Step 3: RTA Compliance and Approvals</strong><br>
                            We handle all the necessary approvals with the Dubai Roads and Transport Authority (RTA) to ensure smooth execution.
                        </li>
                        <li>
                            <strong>Step 4: Printing and Installation</strong><br>
                            Using premium materials and professional installation methods, we ensure your campaign maintains quality and durability throughout its duration.
                        </li>
                        <li>
                            <strong>Step 5: Monitoring and Performance Reporting</strong><br>
                            Once the campaign is live, we monitor its visibility and engagement levels, providing clear performance metrics and feedback.
                        </li>

                    </ul>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Metro Advertising in Dubai</h4>
                    <p>
                        With years of experience in outdoor and transit advertising, DataMySite is one of Dubai’s leading marketing and advertising agencies. Our expertise ensures that your campaign reaches the right audience with maximum visual impact and measurable ROI.
                        <br><br>
                        We provide:
                    </p>
                    <ul>
                        
                        <li>Access to RTA-approved advertising spaces across all metro lines.</li>
                        <li>Expert creative and production teams.</li>
                        <li>Seamless project management from concept to completion.</li>
                        <li>Competitive pricing and transparent reporting.</li>
                        <li>Proven success working with top brands across the UAE.</li>


                    </ul>
                    <p>Our goal is simple — to help your brand stand out, engage, and connect with millions of metro passengers across Dubai.</p>
                    <br>
                    <h4>Connect with Dubai’s Commuters Through Powerful Metro Advertising</h4>
                    <p>
                        Advertising inside Dubai Metro trains is one of the smartest ways to engage a large, diverse, and captive audience daily. It transforms the travel experience into a storytelling journey where your brand becomes part of the city’s rhythm.
                        <br>
                        Partner with DataMySite to plan, design, and execute a high-impact Inside Metro Train Advertising campaign in Dubai. Our expertise, creativity, and attention to detail will ensure your message travels across the city with maximum impact.
                        <br><br>
                        Contact us today to start your campaign and take your brand visibility to the next level.
.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section  striped-section  faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What is the duration of a typical metro train advertising campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns usually run from one month to six months, depending on your objectives and train availability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I advertise inside specific metro trains only?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can target trains running on specific lines or routes that align with your audience’s location and behavior.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What materials are used for train interior wraps?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>High-quality vinyl materials are used for durability, ensuring smooth finishes and easy removal without damaging surfaces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Is digital advertising available inside metro trains?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, select trains are equipped with digital screens that can display video or animated content, offering dynamic visibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How do you ensure campaign compliance with Dubai’s advertising rules?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We manage all approvals through the Dubai RTA and follow strict guidelines to maintain quality and regulatory compliance.</p>
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