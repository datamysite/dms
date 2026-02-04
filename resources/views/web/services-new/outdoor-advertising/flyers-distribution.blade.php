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
                        <h2>We Specialize in Strategic</h2>
                        <h4>flyer distribution services across Dubai</h4>
                        <br>
                        <p>Whether you want to promote a new product, launch a special offer, or increase brand visibility, our flyer marketing solutions ensure that your message reaches the right people at the right time.</p>
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

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Choose Flyer Distribution in Dubai?</h4>
                    <br>
                    <p>
                        Dubai’s dynamic urban landscape, diverse communities, and fast-paced commercial growth make it an ideal place for flyer and leaflet advertising. With thousands of businesses competing for attention, physical marketing like flyers still cuts through the noise — it’s tangible, personal, and memorable.
                        <br><br>
                        At DataMySite, we combine traditional distribution methods with modern tracking and targeting techniques to make sure every flyer counts. Our team understands every area — from Dubai Marina to Business Bay, Downtown, JLT, and Deira — ensuring your campaign hits your ideal audience efficiently..
                    </p>

                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe flyer-iframe" src="https://www.youtube.com/embed/Ny7v7w6dtq4?si=oAHAurPi9RcZjBPT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Our Flyer Distribution Services</h4>
                    <p>We offer a complete range of flyer and leaflet distribution services in Dubai, customized to match your marketing goals and budget.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image40.png')}}" class="flyer-img" width="100%" alt="Flyers that find the right hands">
                </div>
                <div class="col-lg-8">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Door-to-Door Flyer Distribution
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse show" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Door-to-door flyer distribution is one of the most effective ways to ensure your message reaches every household in your target area. Our professional team handles precise delivery, covering residential communities, apartments, and villas across Dubai and other emirates.
                                        <br>
                                        We carefully segment areas based on your campaign goals — whether you’re targeting specific neighborhoods, income brackets, or customer demographics.
                                        <br>
                                        <strong>Benefits:</strong>
                                    </p>
                                    <ul>
                                        <li>Wide coverage in both residential and business areas</li>
                                        <li>Direct contact with potential customers</li>
                                        <li>Highly measurable and cost-effective</li>
                                        <li>Builds strong local brand awareness</li>

                                    </ul>
                                    <p>Popular areas for this service include Jumeirah Village Circle (JVC), Dubai Marina, Mirdif, Al Barsha, Business Bay, and Downtown Dubai.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="true" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Digital Flyers Distribution
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        In today’s digital-first world, Digital Flyers are transforming traditional marketing into a hybrid online model. With DataMySite’s digital flyer campaigns, you can reach your audience through WhatsApp marketing, email campaigns, and social media platforms like Instagram and Facebook.
                                        <br>
                                        We design visually stunning, mobile-friendly flyers that grab attention instantly — perfect for promoting restaurant offers, retail sales, real estate listings, and events.
                                        <br>
                                        <strong>Benefits:</strong>
                                    </p>
                                    <ul>
                                        <li>Instant reach across online platforms</li>
                                        <li>Cost-effective and easy to track performance</li>
                                        <li>Ideal for flash sales and limited-time offers</li>
                                        <li>Eco-friendly — no paper waste</li>

                                    </ul>
                                    <p>Our team can integrate QR codes, landing pages, or call-to-action buttons to convert engagement into measurable leads.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="true" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Handout Flyers Distribution
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Handout flyer distribution targets high-footfall areas where customers are most likely to engage with your brand. This includes malls, exhibitions, trade shows, busy streets, and public events. Our trained promoters hand out flyers directly, ensuring professional representation and meaningful customer interactions.
                                        <br>
                                        <strong>Benefits:</strong>
                                    </p>
                                    <ul>
                                        <li>Direct, face-to-face engagement</li>
                                        <li>Ideal for event promotions and product launches</li>
                                        <li>Great for creating an immediate impact</li>
                                        <li>Increases brand recognition through human connection</li>

                                    </ul>
                                    <p>Popular handout locations include Dubai Mall, Mall of the Emirates, City Walk, Expo City Dubai, Global Village, and Downtown Boulevard.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for Flyer Distribution in Dubai?</h4>
                    <p>
                        At DataMySite Advertising, we believe successful flyer campaigns require more than just distribution — they need strategy, design, and precise execution.
                        <br>
                        Here’s what sets us apart:

                    </p>
                    <ul>
                        <li><strong>Targeted Planning</strong>: We help you identify the most responsive areas and audiences for your flyers.</li>
                        <li><strong>Professional Team</strong>: Our trained distributors ensure punctual, ethical, and accurate delivery.</li>
                        <li><strong>Campaign Reporting</strong>: Get detailed reports and performance tracking after completion.</li>
                        <li><strong>Creative Design Services</strong>: Our in-house design team creates eye-catching flyers that convert.</li>
                        <li><strong>Dubai-Wide Coverage</strong>: From Sheikh Zayed Road to Jumeirah, Business Bay, and Dubai Marina — we’ve got every corner covered.</li>
                    </ul>
                    <br>
                    <h4>Flyer Distribution Coverage in Dubai</h4>
                    <p>
                        We provide extensive flyer delivery coverage across all major regions in Dubai and UAE, including:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Marina</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> JLT</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Deira</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Barsha</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Mirdif</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Jumeirah</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Qusais</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Silicon Oasis</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Sports City</span>
                        <br>
                        Each campaign is customized based on area demographics, traffic density, and audience relevance, ensuring maximum return on investment.
                    </p>

                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit from Flyer Marketing</h4>
                    <p>
                        Our flyer distribution services in Dubai cater to a wide range of industries, including:

                    </p>
                    <ul>
                        <li><strong>Real Estate</strong> (project launches, open houses)</li>
                        <li><strong>Restaurants & Cafés</strong> (new menu promotions, delivery offers)</li>
                        <li><strong>Retail Stores</strong> (discounts, new arrivals, clearance sales)</li>
                        <li><strong>Fitness & Gyms</strong> (membership offers, grand openings)</li>
                        <li><strong>Event Management Companies</strong> (concerts, exhibitions, and community events)</li>
                        <li><strong>Educational Institutions</strong> (courses, admissions, training programs)</li>
                    </ul>
                    <br>
                    <h4>Eco-Friendly Flyer Options</h4>
                    <p>
                        We also offer eco-friendly flyer printing options using recycled materials and sustainable inks. This not only helps you reduce environmental impact but also appeals to the growing number of eco-conscious consumers in Dubai.
                    </p>
                    <br>
                    <h4>Get Started with Your Flyer Distribution Campaign Today</h4>
                    <p>
                        Ready to take your brand directly to your audience?
                        <br>
                        Our flyer distribution experts will guide you through the entire process — from campaign planning and creative design to printing, targeting, and reporting.
                        Whether you need door-to-door, digital, or handout flyer distribution, DataMySite Advertising ensures your message makes a real impact.
                        <br><br>
                        Contact us today to launch your next flyer distribution campaign in Dubai, UAE.
                    </p>
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section  section pr-blogs-section">

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
                                        <span class="badge">&nbsp;</span>How do you prevent "dumping" of flyers?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Every distribution team is tracked via GPS in real-time. We provide "Heat Maps" showing exactly where and when your flyers were delivered.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can you target specific villa communities or apartment buildings?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we have specialized permits for various residential zones, allowing us to target by neighborhood, income level, or property type.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Do you provide the design and printing of the flyers as well?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we offer end-to-end packages including professional copywriting, high-speed printing, and strategic distribution.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What is the typical conversion rate for flyer distribution?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>This varies by industry, but we see the highest ROI when flyers offer a "scannable" discount code or a time-sensitive "limited offer."</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can you distribute flyers at specific events?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can deploy "Street Teams" to distribute collateral at trade shows, concerts, or high-traffic metro exits.</p>
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