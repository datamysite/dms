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
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>We Specialize in Hoarding Advertising</h2>
                        <h4>in Dubai and across the UAE</h4>
                        <br>
                        <p>At DataMySite, we specialize in hoarding advertising in Dubai and across the UAE, offering premium design, printing, and installation services that combine creativity with strategic visibility. Whether it’s a large-scale real estate project or a high-traffic commercial zone, our hoardings help businesses communicate brand value, attract investors, and generate excitement long before a project is complete.</p>
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
                    <h4>What Is Hoarding Advertising?</h4>
                    <p>
                        Hoarding advertising refers to large printed panels installed around construction sites or property developments. These panels serve dual purposes:
                    </p>
                    <ol>
                        <li><strong>Safety and privacy</strong> — keeping the site enclosed and secure.</li>
                        <li><strong>Marketing and branding</strong> — displaying creative visuals, messages, or promotional graphics to passersby.</li>             
                    </ol>
                    <p>
                        These advertising hoardings in Dubai are typically made of metal, aluminum composite panels (ACP), or PVC, and covered with high-resolution printed graphics that reflect the brand’s message or showcase the project’s upcoming features.
                        <br>
                        Common uses include:
                    </p>
                    <ul>
                        <li>Real estate and property launches</li>
                        <li>Corporate or retail project branding</li>
                       <li> Public infrastructure or government projects</li>
                       <li> Event venue promotions</li>
                        <li>Temporary outdoor marketing</li>

                    </ul>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/Ny7v7w6dtq4?si=oAHAurPi9RcZjBPT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Hoarding Advertising Works So Well in Dubai</h4>
                    <p>
                        Dubai’s skyline is constantly evolving. Every corner of the city — from Business Bay to Dubai Marina, Sheikh Zayed Road to Downtown — hosts construction activity, making it a prime environment for construction site hoardings that attract both investors and the general public.
                        <br>
                        Here’s why hoarding advertising in Dubai is one of the most effective outdoor marketing options:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>High-Traffic Exposure</h5>
                    <p>
                        Construction sites are often located in central or high-traffic areas. A well-designed site hoarding in Dubai can receive thousands of daily impressions from pedestrians and motorists alike.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Cost-Effective Outdoor Advertising</h5>
                    <p>
                       Compared to digital billboards or LED screens, hoarding panels are relatively affordable and remain visible for months — giving you long-term brand exposure at a lower cost per impression.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Enhances Brand Perception</h5>
                    <p>
                        A clean, professionally designed hoarding doesn’t just promote a project — it reflects brand quality, attention to detail, and professionalism. It tells investors and clients that you care about presentation and excellence.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Perfect for Pre-Launch Marketing</h5>
                    <p>
                        Hoardings help developers and brands create curiosity long before project completion. They can display 3D renders, upcoming project visuals, QR codes, and contact info — effectively converting casual onlookers into interested leads.
                    </p>
                </div>  


                <div class="col-lg-12">
                    <h5>Compliance & Aesthetics</h5>
                    <p>
                        Dubai’s municipalities encourage developers to maintain visually appealing construction barriers. A branded hoarding not only complies with city regulations but also enhances the surrounding aesthetics.
                    </p>
                </div>  
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Prime Locations for Hoarding Advertising in Dubai</h4>
                    <p>
                        Hoardings can be seen across almost every major development zone, including:
                    </p>
                    <ul>
                        <li><strong>Sheikh Zayed Road</strong> – Ideal for premium real estate campaigns.</li>
                        <li><strong>Dubai Marina & JLT</strong> – Perfect for luxury and lifestyle developments.</li>
                        <li><strong>Business Bay & Downtown</strong> – Great for commercial and high-profile projects.</li>
                        <li><strong>Dubai Creek Harbour</strong> – Ideal for new developments and off-plan promotions.</li>
                        <li><strong>Expo City & Jebel Ali</strong> – Excellent for industrial and corporate projects.</li>
                    </ul>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image48.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Hoarding Advertising Services</h4>
                    <p>At DataMySite, we offer end-to-end hoarding advertising solutions — from concept creation to installation and maintenance. Every project is executed with precision, ensuring your brand looks its best in any environment.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Creative Design & Concept Development</h5>
                    <p>
                        Our creative team designs visually appealing layouts tailored to your brand identity. We integrate 3D renders, lifestyle images, and brand messaging to maximize impact.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>High-Quality Printing</h5>
                    <p>
                       Using UV-protected large-format printers, we ensure vibrant colors and long-lasting durability, even under Dubai’s harsh sunlight.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Material Selection</h5>
                    <p>
                        We offer various material options including:
                    </p>
                    <ul>
                        <li>Aluminum Composite Panels (ACP)</li>
                        <li>PVC Sheets / Vinyl Wraps</li>
                        <li>Perforated Mesh Panels</li>
                        <li>Eco-friendly substrates</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5>Site Survey & Measurement</h5>
                    <p>
                        We conduct a detailed site inspection to assess dimensions, wind exposure, and visibility angles, ensuring a perfect fit for your hoarding.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Installation & Maintenance</h5>
                    <p>
                        Our expert team handles safe installation, adhering to Dubai Municipality guidelines. We also offer routine maintenance to ensure your hoarding remains attractive throughout the project timeline.
                    </p>
                </div>  

                <div class="col-lg-6">
                    <h5>Dismantling & Replacement</h5>
                    <p>
                        When the project completes or requires rebranding, we handle dismantling and replacement swiftly — minimizing downtime and ensuring your brand always looks professional.
                    </p>
                </div>  
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image49.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Hoarding Advertising</h4>
                    <ul>
                        <li><strong>24/7 Visibility</strong>: Always-on exposure, day and night.</li>
                        <li><strong>Location-Based Impact</strong>: Perfectly positioned in high-traffic areas.</li>
                        <li><strong>Customizable Messaging</strong>: Change graphics as your project evolves.</li>
                        <li><strong>Enhanced Brand Recall</strong>: Big, bold, and impossible to miss.</li>
                        <li><strong>Durable & Weatherproof</strong>: Built to withstand heat, dust, and humidity.</li>
                    </ul>
                    <br>
                    <h4>Turn Your Construction Site into a Branding Landmark</h4>
                    <p>
                        Don’t let your construction barriers go unnoticed. Transform them into a powerful storytelling platform that boosts awareness, attracts attention, and reinforces your brand image.
                        <br>
                        At DataMySite, we help you design, print, and install hoardings that work as round-the-clock billboards, visible to thousands daily.
                        <br>
                        Contact DataMySite today to discuss your hoarding advertising project in Dubai or anywhere in the UAE, and let’s create outdoor visibility that builds real impact.

                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section striped-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Hoarding Advertising in Dubai?</h4>
                    <p>
                        At DataMySite, we don’t just print and install hoardings — we help brands communicate stories visually. With years of experience in UAE outdoor advertising, we understand local regulations, aesthetics, and audience psychology better than anyone.
                        <br><br>
                        Here’s what makes us different:

                    </p>
                    <ul>
                        <li><strong>Comprehensive Solutions</strong> – From design to installation, we handle it all.</li>
                        <li><strong>Local Expertise</strong> – We comply with Dubai Municipality and RTA guidelines.</li>
                        <li><strong>Top-Quality Materials</strong> – Weather-resistant, UV-protected, and fire-retardant.</li>
                        <li><strong>Creative Excellence</strong> – Eye-catching visuals tailored to your target audience.</li>
                        <li><strong>Strategic Placement</strong> – Helping you choose the best exposure spots for maximum ROI.</li>
                        <li><strong>Quick Turnaround</strong> – We deliver and install hoardings efficiently without delays.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image22.png')}}" width="100%" alt="Why choose us">
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
                <div class="col-lg-12">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>Why should I advertise on construction hoarding?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It turns a "work-in-progress" area into a massive, eye-level billboard. It’s perfect for generating excitement for a new retail opening or residential project.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can you add 3D elements to hoarding?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can add "2D-plus" or 3D elements, such as cut-outs or integrated lighting, to make the hoarding stand out even more to pedestrians.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Is the material durable enough for construction sites?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We use heavy-duty Dibond or reinforced PVC panels that are scratch-resistant and easy to clean from construction dust.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can you include QR codes on hoarding?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We highly recommend it. It’s a great way to bridge the gap between physical advertising and your digital sales funnel for people passing by.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How quickly can you install hoarding graphics?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Once the design is approved, we can usually complete the printing and installation within 5 to 10 business days.</p>
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