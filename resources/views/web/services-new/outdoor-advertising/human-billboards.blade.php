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
                            Human billboard advertising is one of the most eye-catching outdoor advertising formats, perfect for product launches, events, retail promotions, and brand activations. By combining creativity and human interaction, this form of advertising gives your brand a personal, memorable, and high-visibility presence in busy areas of Dubai and the UAE.
                            
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
                <div class="col-lg-6">
                    <iframe class="service-iframe flyer-iframe" src="https://www.youtube.com/embed/Ny7v7w6dtq4?si=oAHAurPi9RcZjBPT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>  
                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">

                    <h4>What is Human Billboard Advertising?</h4>
                    <p>
                        A human billboard is a live, walking or stationary promoter who carries your brand message on a wearable display board. Unlike static advertising on walls or signboards, human billboards move through high-traffic areas — allowing your brand to be seen, noticed, and remembered by thousands of potential customers.
                        <br>
                        It’s interactive, versatile, and a smart solution for businesses looking to connect directly with their audience in a fun and attention-grabbing way.
                        <br>
                        At DataMySite, we plan and manage customized human billboard campaigns across Dubai, ensuring maximum visibility in key hotspots like Downtown Dubai, Dubai Mall, City Walk, JBR, Dubai Marina, and Expo City.
                    </p>

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
                    
                    <h4>Types of Human Billboard Advertising</h4>
                    <p>We offer several forms of human billboard advertising to meet your campaign goals and suit different marketing environments.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Backpack Billboards
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse show" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Backpack Billboards are a mobile and highly flexible form of human advertising. A brand ambassador wears a lightweight illuminated backpack display that showcases your ad message or creative visual as they move through public areas.
                                        <br>
                                        These are ideal for events, exhibitions, festivals, and shopping areas, allowing your brand to move with the crowd and engage directly with people.
                                        <br>
                                        Benefits of Backpack Billboards:
                                    </p>
                                    <ul>
                                        <li>Highly mobile – your ad travels through busy locations</li>
                                        <li>LED-backlit for maximum visibility, even at night</li>
                                        <li>Cost-effective compared to traditional outdoor displays</li>
                                        <li>Perfect for promotional events and product launches</li>
                                        <li>Eco-friendly and reusable</li>
                                    </ul>
                                    <p><strong>Best for</strong>: Restaurants, cafés, retail brands, events, concerts, product promotions, and street marketing campaigns.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Stationary Billboards (Human Standing Displays)
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Stationary Human Billboards are ideal for fixed locations where you want to maximize exposure in a specific area. Promoters stand at store entrances, event venues, or busy pedestrian zones holding customized signage or digital display boards featuring your message.
                                        <br>
                                        This format ensures continuous visibility and engagement throughout your campaign period.
                                        <br>
                                        Benefits of Stationary Billboards:

                                    </p>
                                    <ul>
                                        <li>Eye-catching and hard to ignore</li>
                                        <li>Ideal for grand openings, exhibitions, and store promotions</li>
                                        <li>Enables one-on-one brand interaction</li>
                                        <li>Offers more detailed brand messaging opportunities</li>

                                    </ul>
                                    <p><strong>Best for</strong>: Retail stores, exhibitions, product displays, and experiential marketing campaigns.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="true" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Walking Human Billboards
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        This is the classic form of human billboard advertising, where trained promoters walk through high-traffic areas wearing double-sided or digital boards that display your ad content. It’s a proven way to attract real attention and spark curiosity among passersby.
                                        <br>
                                        Walking billboards combine mobility and human connection, making your campaign stand out in crowded streets, beaches, malls, and public spaces.
                                        <br>
                                        Benefits of Walking Human Billboards:

                                    </p>
                                    <ul>
                                       <li> Maximum exposure across multiple areas</li>
                                        <li>Engages the audience directly through human interaction</li>
                                        <li>Can be combined with flyer handouts or QR code promotions</li>
                                        <li>Perfect for brand awareness and location-based promotions</li>

                                    </ul>
                                    <p><strong>Best for</strong>: Food delivery apps, entertainment events, local retail promotions, and new product launches.</p>
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
                    <h4>Why Choose Human Billboard Advertising in Dubai?</h4>
                    <p>
                        Dubai is one of the most visually competitive advertising markets in the world. With countless brands vying for attention, human billboard advertising provides a creative edge that helps your campaign stand out.
                        <br>
                        At DataMySite Advertising, we specialize in strategically planned and professionally managed campaigns that deliver measurable results.
                        <br>
                        <strong>Key Advantages:</strong>
                    </p>
                    <ul>
                        <li><strong>High Visibility</strong>: Human billboards naturally attract attention in busy areas.</li>
                        <li><strong>Direct Engagement</strong>: Create face-to-face interactions with potential customers.</li>
                        <li><strong>Creative Flexibility</strong>: Use LED displays, QR codes, or branded costumes.</li>
                        <li><strong>Budget-Friendly</strong>: More affordable than digital screens or large static billboards.</li>
                        <li><strong>Perfect for Events</strong>: Ideal for trade shows, exhibitions, and live marketing.</li>
                    </ul>
                    <br>
                    <h4>Industries That Benefit from Human Billboard Advertising</h4>
                    <ul>
                        <li><strong>Retail & Shopping Malls</strong> – drive foot traffic and awareness</li>
                        <li><strong>Restaurants & Cafés</strong> – promote new menus or grand openings</li>
                        <li><strong>Event Management</strong> – advertise concerts, exhibitions, and entertainment events</li>
                        <li><strong>Real Estate Developers</strong> – promote new projects or launches</li>
                        <li><strong>Telecom & Tech Brands</strong> – enhance visibility for product launches</li>
                        <li><strong>E-commerce & Apps</strong> – promote downloads and online sales</li>
                    </ul>
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image39.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image39.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <h4>Our Human Billboard Advertising Process</h4>
                    <p>
                        We follow a structured, performance-driven process to ensure your campaign achieves its goals:
                    </p>
                    <ul>
                        <li><strong>Campaign Planning</strong>: Define target areas, timing, and audience demographics.</li>
                        <li><strong>Creative Design</strong>: We create engaging visuals or digital content for maximum impact.</li>
                        <li><strong>Team Selection</strong>: Trained and professional promoters represent your brand.</li>
                        <li><strong>Execution</strong>: Our promoters engage the public while ensuring high visibility.</li>
                        <li><strong>Reporting</strong>: We provide performance feedback and coverage summaries.</li>
                    </ul>
                    <p>Whether you’re launching a new restaurant in Business Bay, promoting an event at Dubai World Trade Centre, or advertising a product in Jumeirah Beach Residence (JBR) — we tailor campaigns to your exact needs.</p>
                    <br>
                    <h4>Where We Operate</h4>
                    <p>
                        Our human billboard campaigns cover all major areas of Dubai and across the UAE, including:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Dubai Marina</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Jumeirah</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Deira</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Al Barsha</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>City Walk</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Mirdif</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Expo City Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i>Sharjah & Abu Dhabi (on request)</span>
                    </p>

                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section  why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8">
                    <h4>Why Choose DataMySite Advertising?</h4>
                    <p>
                        At DataMySite, we go beyond traditional marketing — our goal is to make your brand seen and remembered. With years of experience in outdoor and experiential advertising, we help clients create memorable, high-impact campaigns that deliver results.
                        <br>
                        What You Get:
                    </p>
                    <ul>
                        <li>Expert campaign planning and execution</li>
                        <li>Trained promoters and brand ambassadors</li>
                        <li>Affordable and customizable packages</li>
                        <li>Strategic placement for maximum ROI</li>
                        <li>Detailed post-campaign performance reports</li>

                    </ul>
                    <br>
                    <h4>Get Started with Human Billboard Advertising Today</h4>
                    <p>
                        Ready to turn heads and boost brand engagement?
                        <br>
                        At DataMySite Advertising, we’ll help you design and execute a customized human billboard campaign that reaches your audience in the most creative and effective way possible.
                        <br><br>
                        Contact us today to discuss your Human Billboard Advertising campaign in Dubai, UAE.
                    </p>

                </div>
                <div class="col-lg-1"></div>

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

                <div class="col-lg-12">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What exactly is a "Human Billboard"?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It involves brand ambassadors wearing high-visibility signage or walking with LED backpacks. It’s a high-engagement, mobile form of OOH advertising.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can the ambassadors interact with potential customers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Unlike a static sign, our ambassadors are trained to answer basic questions and direct traffic to your nearby store or booth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Where are Human Billboards most effective?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>They are perfect for areas where traditional signage is restricted, such as busy sidewalks, malls, or right outside a competitor’s event.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Do you provide the costumes/uniforms?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We can customize the outfits and signage to perfectly match your brand’s colors and logos for a professional look.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How do I track the movement of the human billboards?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>All our ambassadors are managed by an on-site supervisor, and we can provide GPS logs of their walking routes during the shift.</p>
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