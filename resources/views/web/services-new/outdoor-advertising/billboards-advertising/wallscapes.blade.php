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
                        <h2>Transform Building Facades and Walls</h2>
                        <h4>into massive, attention-grabbing brand statements.</h4>
                        <br>
                        <p>At DataMySite, we help businesses in Dubai and across the UAE harness the full potential of wallscape advertising to create memorable, high-impact campaigns. Whether your goal is to launch a new product, enhance brand recognition, or dominate a specific area’s visual landscape, we deliver custom wallscape solutions that demand attention — day and night.</p>
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
                    <h4>What Is Wallscape Advertising?</h4>
                    <p>
                        Wallscape advertising refers to large-format outdoor ads displayed directly on building walls, facades, or specially constructed frames. These can be temporary or long-term installations and are often located in high-traffic urban zones such as Sheikh Zayed Road, Business Bay, Downtown, and Dubai Marina.
                        <br>
                        Unlike traditional billboards, wallscapes are not limited by standard dimensions. They can cover an entire side of a building, allowing brands to create truly monumental advertising experiences that dominate their surroundings.
                        <br><br>
                        Common Uses of Wallscape Advertising:
                    </p>
                    <ul>
                        <li>Product and brand launches</li>
                        <li>Real estate and property promotions</li>
                        <li>Event or festival marketing</li>
                        <li>Corporate rebranding campaigns</li>
                        <li>Seasonal or luxury brand advertising</li>
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
                    <h4>Why Wallscape Advertising Works in Dubai</h4>
                    <p>
                        Dubai is home to some of the most visually competitive advertising real estate in the world, where creativity and size go hand in hand. Wallscape advertising thrives here because it aligns perfectly with the city’s bold, architectural aesthetic.
                        <br>
                        Here’s why brands in Dubai choose wallscape campaigns:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Unmatched Visual Impact</h5>
                    <p>
                        A wallscape ad transforms an ordinary building into a powerful marketing platform. When placed strategically, it dominates sightlines and captures the attention of thousands of commuters daily.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>High-Traffic Locations</h5>
                    <p>
                       Dubai’s busiest roads and business districts — from Downtown Dubai to Dubai Marina — ensure that your wallscape receives constant visibility from both pedestrians and motorists.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Brand Prestige & Awareness</h5>
                    <p>
                        Large-scale, high-quality wallscapes signal brand authority and scale. They’re often associated with premium and luxury brands that want to reinforce their market presence.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Long-Term Exposure</h5>
                    <p>
                        Unlike short-term digital ads, wallscapes stay in place for weeks or months, delivering consistent visibility and brand reinforcement without recurring costs.
                    </p>
                </div>  


                <div class="col-lg-12">
                    <h5>Customizable Size & Placement</h5>
                    <p>
                        From small wall murals to entire building facades, wallscapes are highly customizable — allowing brands to adapt campaigns to specific budgets, goals, and locations.
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
                    <h4>Ideal Locations for Wallscape Advertising in Dubai</h4>
                    <p>
                        Dubai is packed with iconic areas ideal for wallscape campaigns. Some of the most impactful zones include:
                    </p>
                    <ul>
                        <li><strong>Sheikh Zayed Road</strong>: Maximum exposure to daily commuters and business travelers.</li>
                        <li><strong>Downtown Dubai</strong>: Premium placement near Burj Khalifa and Dubai Mall.</li>
                        <li><strong>Business Bay</strong>: High-end corporate visibility for B2B and luxury brands.</li>
                        <li><strong>Dubai Marina & JBR</strong>: Perfect for lifestyle, real estate, and entertainment brands.</li>
                        <li><strong>Deira & Bur Dubai</strong>: Ideal for retail, electronics, and FMCG campaigns.</li>
                        <li><strong>Dubai Airport Road</strong>: Captures local and international travelers.</li>
                    </ul>
                    <p>Each of these locations offers unique advantages in terms of audience demographics, traffic volume, and brand visibility.</p>
                </div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image46.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>DataMySite’s Wallscape Advertising Services</h4>
                    <p>At DataMySite, we manage every stage of your wallscape campaign — from creative design to professional installation — ensuring maximum exposure and visual perfection.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Strategic Consultation & Location Selection</h5>
                    <p>
                        We begin by understanding your campaign goals and recommending prime wallscape locations across Dubai — areas with the highest footfall and visual impact.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Creative Design & Branding</h5>
                    <p>
                       Our creative team develops customized artwork that blends perfectly with the architectural features of each building while ensuring clarity, contrast, and aesthetic appeal.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Material & Print Production</h5>
                    <p>
                        We use high-resolution, UV-protected, weather-resistant materials, including mesh vinyl, PVC banners, or fabric wall coverings. Every print is made to withstand Dubai’s harsh sunlight and wind conditions.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Municipality Permissions</h5>
                    <p>
                        We handle all Dubai Municipality and RTA permit requirements, ensuring your wallscape ad complies with city advertising laws and safety regulations.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Professional Installation</h5>
                    <p>
                        Our trained technicians execute safe and precise installations, even at elevated heights, using advanced rigging and scaffolding systems.
                    </p>
                </div>  

                <div class="col-lg-6">
                    <h5>Maintenance & Removal</h5>
                    <p>
                        We also offer routine maintenance to keep your wallscape fresh and vibrant, and safe removal once the campaign ends — leaving no damage to the surface.
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

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image52.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Wallscape Advertising</h4>
                    <ul>
                        <li><strong>High Impact</strong>: Large, bold visuals grab attention instantly.</li>
                        <li><strong>Durability</strong>: Designed to last in Dubai’s hot, windy climate.</li>
                        <li><strong>Brand Prestige</strong>: Elevates your image through scale and design.</li>
                        <li><strong>Wide Reach</strong>: Thousands of daily views from strategic city zones.</li>
                        <li><strong>Long-Term ROI</strong>: Continuous visibility without ongoing digital spend.</li>
                    </ul>
                    <br>
                    <h4>Make Your Brand a Landmark in Dubai’s Skyline</h4>
                    <p>
                        In a city where architecture meets artistry, your brand deserves to be seen on the grandest scale. Wallscape advertising in Dubai offers unmatched visibility, credibility, and long-term impact — helping you connect with your audience every single day.
                        <br>
                        At DataMySite, we transform walls into storytelling spaces that command attention and drive awareness.
                        <br><br>
                        Contact DataMySite today to discuss your wallscape advertising project in Dubai or anywhere in the UAE, and let’s make your brand part of the city’s skyline.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section striped-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Wallscape Advertising?</h4>
                    <p>
                        At DataMySite, we combine creativity, strategy, and technical expertise to deliver wallscape campaigns that stand tall and perform effectively. Our understanding of the UAE market and outdoor advertising regulations makes us a trusted partner for brands aiming for large-scale visibility.
                        <br><br>
                        Here’s what sets us apart:

                    </p>
                    <ul>
                        <li><strong>End-to-End Service</strong> – From creative design to printing, permits, and installation.</li>
                        <li><strong>Local Expertise</strong> – We understand Dubai’s outdoor media regulations and optimal sites.</li>
                        <li><strong>High-Quality Materials</strong> – UV-resistant, waterproof, and eco-friendly materials used.</li>
                        <li><strong>Custom Solutions</strong> – Tailored wallscapes for every industry and campaign scale.</li>
                        <li><strong>On-Time Execution</strong> – We value deadlines and deliver with precision.</li>
                        <li><strong>Strategic Placement</strong> – Location-first approach for maximum audience exposure.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image53.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>How do Wallscapes differ from traditional billboards?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Wallscapes are custom-fitted to a building's unique shape and are often located in high-density urban areas where traditional billboards are not permitted.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Are Wallscapes hand-painted or vinyl?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We offer both. Hand-painted murals offer a "prestige" feel and often go viral on social media, while vinyl allows for photographic detail and faster installation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the lead time for a Wallscape campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Because they are custom-sized, they require about 3–4 weeks for site survey, production, and specialized rigging installation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can Wallscapes be illuminated at night?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can install external spot lighting to ensure your message dominates the city skyline even after the sun goes down.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Are Wallscapes effective for "Call to Action" (CTA) ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>They are better suited for "Brand Dominance." Because of their scale, they create massive brand authority and trust in a specific geographic area.</p>
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