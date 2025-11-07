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
                        <h2>High-Quality Building Wraps across Dubai</h2>
                        <br>
                        <p>At DataMySite, we specialize in designing, printing, and installing high-quality building wraps across Dubai and the UAE — helping your brand command attention in one of the world’s most competitive advertising landscapes.</p>
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
                    <h4>What Is Building Wrap Advertising?</h4>
                    <p>
                        Building wrap advertising (also known as full building branding or building facade advertising) involves covering the exterior surface of a building — either partially or completely — with a massive, custom-printed banner or mesh material that displays your brand’s message.
                        <br>
                        These wraps are typically made from durable, weather-resistant materials designed to withstand Dubai’s hot and humid climate while maintaining color vibrancy and clarity.
                        <br>
                        They’re ideal for:
                    </p>
                    <ul>
                        <li>Real estate project promotions</li>
                        <li>Event and product launches</li>
                        <li>Corporate branding campaigns</li>
                        <li>Long-term brand visibility in high-traffic areas    </li>                
                    </ul>
                    <p>
                        Unlike traditional billboards, building wraps turn the entire structure into a dynamic, larger-than-life advertisement — a true architectural statement.
                    </p>
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
                    <h4>Why Choose Building Wrap Advertising in Dubai?</h4>
                    <p>Dubai is one of the world’s top destinations for outdoor media, with thousands of vehicles and pedestrians passing through major commercial zones every day. Here’s why building wrap advertising is particularly effective in the UAE market:</p>
                </div>
                <div class="col-lg-6">
                    <h5>Massive Visibility</h5>
                    <p>
                        A well-placed building wrap in Sheikh Zayed Road or Downtown Dubai can attract thousands of daily impressions. It provides your brand with an unparalleled opportunity to dominate the skyline and be noticed by both locals and international visitors.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Premium Brand Perception</h5>
                    <p>
                       In Dubai, size and visibility often correlate with prestige. A full building branding campaign signals confidence, scale, and dominance — aligning your company with top-tier brands and developers.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Extended Exposure Time</h5>
                    <p>
                        Unlike digital ads that appear for a few seconds, building wraps offer weeks or months of consistent exposure. This makes them ideal for long-term branding campaigns or major events like Expo exhibitions or product launches.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Cost-Effective Impact</h5>
                    <p>
                        When measured in cost per impression, building wraps are among the most cost-effective outdoor advertising formats in Dubai. They reach massive audiences at a lower per-view cost compared to TV, digital, or print.
                    </p>
                </div>  


                <div class="col-lg-12">
                    <h5>Strategic Locations</h5>
                    <p>
                        From Business Bay to Dubai Marina, Jumeirah, and Downtown, building wraps can be strategically placed on high-traffic structures to target key demographics — ensuring your brand reaches exactly who you want.
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
                    <h4>Ideal Locations for Building Wraps in Dubai</h4>
                    <p>
                        Dubai’s skyline offers numerous iconic locations perfect for building wrap advertising, including:
                    </p>
                    <ul>
                        <li><strong>Sheikh Zayed Road</strong> – Dubai’s most iconic outdoor advertising hub</li>
                        <li><strong>Business Bay & Downtown</strong> – Ideal for corporate and luxury campaigns</li>
                        <li><strong>Dubai Marina & JLT</strong> – Perfect for real estate and lifestyle brands</li>
                        <li><strong>Al Barsha & Deira</strong> – Great for high-traffic consumer brand promotions</li>
                        <li><strong>Airport Road & E11 Highways</strong> – Maximum visibility for mass-market exposure</li>
                    </ul>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image46.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Building Wrap Advertising Services</h4>
                    <p>At DataMySite, we handle the entire process — from concept to installation — ensuring smooth execution and maximum visibility. Our services include:</p>
                </div>
                <div class="col-lg-6">
                    <h5>Creative Concept & Design</h5>
                    <p>
                        Our creative team collaborates with your brand to design visually impactful and high-resolution artwork that matches both your campaign goals and building dimensions.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Material Selection</h5>
                    <p>
                       We use UV-resistant, waterproof, and fire-retardant mesh materials, ensuring safety and durability in all weather conditions — a crucial factor in the UAE’s climate.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Printing & Production</h5>
                    <p>
                        Using large-format printing technology, we produce crisp, high-quality graphics that retain sharpness and color brilliance even from long viewing distances.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Site Survey & Permissions</h5>
                    <p>
                        We conduct detailed site surveys, handle necessary permissions, and comply with all Dubai Municipality advertising regulations to ensure a smooth approval process.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Professional Installation</h5>
                    <p>
                        Our skilled installation team ensures that every building wrap is securely and aesthetically installed — guaranteeing visibility, safety, and structural integrity.
                    </p>
                </div>  

                <div class="col-lg-6">
                    <h5>Maintenance & Removal</h5>
                    <p>
                        We also provide maintenance services to keep your wraps looking fresh and handle safe removal once the campaign period ends.
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
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Advantages of Choosing DataMySite</h4>
                    <p>
                        At DataMySite, we bring deep local expertise and modern advertising technology together to create campaigns that deliver measurable impact.
                        <br>
                        End-to-End Project Management – From design to permits, we manage everything.
                        <br>
                        Local Market Knowledge – Experience with Dubai and UAE outdoor advertising regulations.
                    </p>
                    <ul>
                        <li><strong>High-Quality Materials</strong> – UV-protected, weatherproof, and eco-friendly media.</li>
                        <li><strong>Strategic Guidance</strong> – We help you select the right building and location for maximum ROI.</li>
                        <li><strong>Quick Turnaround</strong> – Fast, reliable installation without compromising quality.</li>
                    </ul>
                    <br>
                    <h4>Transform Your Brand Visibility Today</h4>
                    <p>
                        In a city that never stops building higher and brighter, your brand deserves to be seen. Let DataMySite help you turn buildings into bold brand statements with building wrap advertising in Dubai that captures attention and drives awareness.
                        <br>
                        Contact DataMySite today to discuss your next building branding project in Dubai or anywhere across the UAE.

                    </p>
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
                                        <span class="badge">&nbsp;</span>What is the cost of building wrap advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The cost depends on factors like building size, location, duration, and material type. On average, building wrap campaigns in Dubai can range from AED 50,000 to AED 250,000 or more, depending on scope and visibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long can a building wrap remain installed?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most wraps last 3 to 12 months, depending on material durability and campaign duration. Our premium materials are designed to endure Dubai’s weather while maintaining color and clarity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are permissions required for building wraps in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, Dubai Municipality approval is mandatory before installation. At DataMySite, we handle all regulatory permissions and safety checks for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can building wraps be used for temporary events or product launches?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Building wraps are ideal for short-term promotional campaigns, event branding, and product launches, providing high-impact exposure within a short period.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What materials are used in building wrap advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We use perforated mesh PVC, vinyl banners, and eco-solvent prints — all UV-resistant and flame-retardant to meet UAE safety standards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>Why choose DataMySite for building wrap advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Because we combine local experience, premium materials, and creative design expertise to deliver visually stunning, regulation-compliant, and result-driven campaigns across the UAE.</p>
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