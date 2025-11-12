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
                        <h2>Capture Attention with Strategic</h2>
                        <h4>Metro Pillar Branding Across Dubai</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands transform these structural elements into powerful storytelling tools. Our creative pillar wraps are designed to deliver continuous visibility, strengthen brand recall, and connect with the city’s dynamic commuter audience.
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
                    <h4>What Is Metro Pillar Advertising?</h4>
                    <p>
                        Metro pillar advertising involves wrapping or branding the vertical support columns found throughout metro stations and walkways. These pillars are strategically located in high-footfall zones such as ticket counters, platforms, escalator areas, and station corridors.
                        <br><br>
                        Unlike traditional billboards or posters, pillar ads are at eye level, providing direct visibility and ensuring your message stands out even in busy transit spaces.
                        <br><br>
                        This form of advertising combines practicality and creativity, using existing station infrastructure to deliver a cost-effective, high-frequency brand presence that connects with commuters during their daily journeys.
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
                    
                    <h4>Why Metro Pillar Advertising Works in Dubai</h4>
                    <p>
                        Dubai’s metro network is one of the busiest in the Middle East, connecting key residential, commercial, and tourist areas. Every day, tens of thousands of passengers use the metro system, passing by branded pillars multiple times during their commute.
                    </p>
                </div>
                <div class="col-lg-5 mt-0">
                    <p>
                        Here are the reasons why metro pillar advertising is highly effective:
                    </p>
                    <ul>
                        <li>
                            <strong>High Daily Impressions</strong><br>
                            Each station receives a steady flow of passengers from early morning to late night. A single pillar campaign can generate thousands of impressions daily.
                        </li>
                        <li>
                            <strong>Eye-Level Visibility</strong><br>
                            Positioned perfectly within commuter sightlines, pillar wraps naturally attract attention without being intrusive.
                        </li>
                        <li>
                            <strong>Repetitive Brand Exposure</strong><br>
                            Because passengers often travel through the same stations daily, metro pillars ensure repeated exposure, which strengthens brand recall over time.
                        </li>
                        <li>
                            <strong>Flexible and Scalable</strong><br>
                            Pillar campaigns can range from a few branded columns to full-station domination, depending on your marketing goals and budget.
                        </li>
                        <li>
                            <strong>Cost-Effective</strong><br>
                            Compared to large-format billboards or full takeovers, metro pillar advertising delivers strong visibility at a lower cost per impression.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 mt-0">
                    <h4>Metro Pillar Advertising Options</h4>
                    <p>
                        At DataMySite, we offer multiple formats and creative solutions to make your metro pillar campaign as effective as possible.
                    </p>
                    <ul>
                        <li>
                            <strong>Single Pillar Branding</strong><br>
                            A focused, budget-friendly option where one or more pillars in key zones are wrapped with your brand design. Ideal for targeted exposure.
                        </li>
                        <li>
                            <strong>Series of Branded Pillars</strong><br>
                            A sequence of consecutive branded pillars creates visual continuity, ensuring your message follows commuters throughout their route.
                        </li>
                        <li>
                            <strong>Thematic Pillar Designs</strong><br>
                            Perfect for product launches or storytelling, this approach uses coordinated designs across multiple pillars to create a unified brand message.
                        </li>
                        <li>
                            <strong>Digital Pillar Integration</strong><br>
                            Some premium metro stations in Dubai offer digital or backlit pillar screens for dynamic advertising. Motion graphics and videos make your brand more engaging and modern.
                        </li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



    
        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Metro Pillar Advertising in Dubai</h4>
                    <ul>
                        <li>
                            <strong>Continuous Brand Presence</strong><br>
                            Pillars are visible across multiple touchpoints within a station, ensuring that your brand message appears consistently along a commuter’s path.
                        </li>
                        <li>
                            <strong>Perfect for Brand Reinforcement</strong><br>
                            The repeated visuals of branded pillars reinforce recognition and familiarity with your product or service.
                        </li>
                        <li>
                            <strong>Creative Flexibility</strong><br>
                            Designs can include visuals, taglines, QR codes, and product displays, giving brands full creative control.
                        </li>
                        <li>
                            <strong>Long-Term Exposure</strong><br>
                            Pillar campaigns can run for several weeks or months, ensuring ongoing visibility and steady audience engagement.
                        </li>
                        <li>
                            <strong>Ideal for Multiple Industries</strong><br>
                            Suitable for real estate, retail, telecom, automotive, government awareness, and lifestyle brands aiming to reach a wide and diverse audience.
                        </li>
                    </ul>
                    <br>
                    <h4>Where Metro Pillar Advertising Is Most Effective</h4>
                    <p>
                        Metro pillar advertising performs exceptionally well in high-traffic stations where visibility and footfall are at their peak.
                        <br>
                        Some of the most effective locations include:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Mall/Burj Khalifa Station</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Mall of the Emirates Station</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Union Station</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay Station</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> BurJuman Station</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Jumeirah Lakes Towers (JLT) Station</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Internet City Station</span>

                        <br>
                        Each of these stations attracts thousands of passengers daily, including residents, office workers, shoppers, and tourists.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Executes Metro Pillar Campaigns</h4>
                    <p>
                        DataMySite has extensive experience managing metro advertising campaigns across Dubai, ensuring every pillar ad meets the highest design, installation, and compliance standards.
                        <br><br>
                        Our process is streamlined for efficiency and maximum impact.
                    </p>
                    <ul>
                        
                        <li>
                            <strong>Step 1. Campaign Strategy and Planning</strong><br>
                            We assess your brand objectives, audience, and budget to recommend the most effective metro stations and pillar placements.
                        </li>
                        <li>
                            <strong>Step 2. Creative Design</strong><br>
                            Our design team crafts visually engaging layouts that communicate your brand identity clearly and attract commuter attention.
                        </li>
                        <li>
                            <strong>Step 3. Approvals and Compliance</strong><br>
                            We handle all approvals with the RTA (Roads and Transport Authority) and ensure full compliance with Dubai’s advertising regulations.
                        </li>
                        <li>
                            <strong>Step 4. Production and Installation</strong><br>
                            We use high-quality, durable printing materials that maintain color vibrancy and brand consistency under all conditions.
                        </li>
                        <li>
                            <strong>Step 5. Monitoring and Reporting</strong><br>
                            Our team monitors campaign performance and provides reports detailing exposure, maintenance, and campaign duration.
                        </li>
                    </ul>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Metro Advertising in Dubai</h4>
                    <p>
                        DataMySite is a trusted name in outdoor advertising in Dubai and across the UAE. We combine creative expertise with deep industry knowledge to deliver metro advertising solutions that drive real results.
                        <br>
                        <strong>What Sets Us Apart</strong>
                    </p>
                    <ul>
                        <li>End-to-end campaign management</li>
                        <li>Direct access to premium metro stations</li>
                        <li>Competitive pricing and flexible packages</li>
                        <li>Skilled in both static and digital formats</li>
                        <li>Experienced team familiar with RTA processes</li>

                    </ul>
                    <p>We focus on delivering visibility, creativity, and measurable outcomes that help brands stand out in one of the world’s most dynamic cities.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Best Practices for Effective Metro Pillar Advertising</h4>
                    <p>
                        To maximize your campaign success, consider these strategies:
                    </p>
                    <ul>
                        <li><strong>Use Bold, Simple Designs</strong> – Clean visuals with minimal text work best for commuters on the move.</li>
                        <li><strong>Maintain Consistent Branding</strong> – Use uniform designs across pillars for better recall.</li>
                        <li><strong>Add Interactive Elements</strong> – QR codes and short links can drive digital engagement.</li>
                        <li><strong>Leverage Lighting</strong> – Consider illuminated or digital pillars for night visibility.</li>
                        <li><strong>Focus on Location</strong> – Choose stations aligned with your target audience’s demographics.</li>
                    </ul>
                    <br>
                    <h4>Partner with DataMySite for High-Impact Metro Pillar Advertising in Dubai</h4>
                    <p>
                        Metro pillar advertising combines visibility, consistency, and cost-efficiency to deliver exceptional results for brands of all sizes. Whether you want to boost awareness, promote a new product, or enhance credibility, DataMySite offers tailored solutions designed to engage Dubai’s on-the-move audience.
                        <br><br>
                        Contact our team today to plan your metro pillar advertising campaign in Dubai and experience the power of continuous commuter visibility.
                    </p>
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
                                        <span class="badge">&nbsp;</span>How many pillars can I advertise on in one station?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can brand as few as one pillar or cover all available pillars for a complete campaign. DataMySite customizes placements based on your objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long can pillar ads stay active?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns typically run for a minimum of 4 weeks, though many brands opt for 3 to 6-month durations for better results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are digital pillars available in all metro stations?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Digital pillar screens are available in select high-traffic stations. Our team can help you identify where they’re most effective.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Is metro pillar advertising suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes. It’s an affordable option for SMEs that want high visibility without the large investment required for station takeovers or train wraps.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What approvals are required for pillar advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>All metro advertising must be approved by the RTA. DataMySite handles the full approval and installation process on your behalf.</p>
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