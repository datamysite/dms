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
                        <h2>Branded Tesla Vehicles</h2>
                        <h4>are becoming one of the most sophisticated and attention-grabbing marketing tools.</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in creating Tesla car wrap activations that combine visual appeal, environmental consciousness, and premium branding exposure — delivering a high-impact experiential marketing experience that drives attention on the road and online.
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
                                
                                <input type="hidden" name="service" value="{{$subservice->name}}" required>
                                                                
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
                    <h4>What is Tesla Wrap Experiential Marketing?</h4>
                    <br>
                    <p>
                        Tesla Wrap Experiential Marketing involves branding Tesla electric vehicles with creative, eye-catching wraps that turn heads wherever they go. Whether as a mobile billboard, event display, or influencer-driven experience, these wrapped Teslas embody innovation and class — aligning your brand with the future of sustainable luxury.
                        <br><br>
                        It’s more than just car advertising — it’s an immersive moving experience that connects your brand with Dubai’s urban, tech-savvy, and high-income audience.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/re2nXszkJcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Why Tesla Wrap Marketing Works in Dubai</h4>
                    <p>Dubai is a city built on innovation, luxury, and sustainability — exactly what Tesla represents. <br>Here’s why Tesla Wrap campaigns are so powerful here:</p>
                    
                </div> 
                <div class="col-lg-4">
                    <h5 class="text-theme">Premium Visibility in High-Traffic Zones</h5>
                    <p>
                        Tesla cars command attention on Dubai’s busiest roads and iconic areas like Downtown Dubai, Sheikh Zayed Road, JBR, and Business Bay — giving your brand continuous exposure to thousands daily.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Eco-Friendly Brand Positioning</h5>
                    <p>
                        As Dubai moves toward sustainable urban mobility, associating your brand with Tesla reinforces eco-consciousness and forward-thinking values.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Perfect for Product Launches & Events</h5>
                    <p>
                        Wrapped Teslas can be featured at mall activations, corporate launches, concerts, and PR events, amplifying your presence in a high-luxury context.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Social Media Amplification</h5>
                    <p>
                        People love photographing luxury cars. A well-designed Tesla wrap becomes a shareable digital asset, driving organic engagement and social buzz.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Premium Target Audience</h5>
                    <p>
                        Teslas are admired by Dubai’s affluent residents, business professionals, and global visitors — making it the perfect way to connect with decision-makers and aspirational consumers.
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

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image164.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Executes Tesla Wrap Activations</h4>
                    <p>
                        We handle everything from creative concept to on-road execution, ensuring your campaign delivers real-world and digital impact.
                    </p>
                    <ul>
                        <li>
                            <strong>Creative Concept & Design</strong><br>
                            Our designers craft stunning, high-definition Tesla wraps aligned with your brand message — from minimalist branding to bold visual storytelling.
                        </li>
                        <li>
                            <strong>Vehicle Sourcing & Branding</strong><br>
                            We manage Tesla fleet availability, wrapping logistics, and placement schedules, ensuring your branded Teslas operate across Dubai’s most strategic zones.
                        </li>
                        <li>
                            <strong>Location Planning & Route Mapping</strong><br>
                            Routes are optimized for maximum visibility — covering Downtown Dubai, Dubai Marina, JLT, City Walk, and major event venues.
                        </li>
                        <li>
                            <strong>On-Ground & Event Integration</strong><br>
                            Wrapped Teslas can be positioned at events, red carpets, or mall activations for photo ops, influencer collaborations, and live coverage.
                        </li>
                        <li>
                            <strong>Performance Tracking & Analytics</strong><br>
                            We measure reach, impressions, and engagement through GPS tracking, audience analytics, and social mentions — delivering a complete ROI report post-campaign.
                        </li>
                    </ul>
                </div>
            </div>

          </div>

        </section>

         <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-8 vertical-center">

                    <h4>Benefits of Tesla Wrap Experiential Marketing</h4>
                    <ul>
                        <li><strong>High-End Brand Association</strong> – Your brand aligns with the prestige and innovation of Tesla.</li>
                        <li><strong>Maximum Urban Visibility</strong> – Reach premium audiences across Dubai’s most influential neighborhoods.</li>
                        <li><strong>Eco-Friendly Branding</strong> – Showcase sustainability through a zero-emission platform.</li>
                        <li><strong>Cost-Effective & Long-Term Exposure</strong> – Unlike short-term ads, wraps provide continuous promotion for months.</li>
                        <li><strong>Social Media Virality</strong> – Visually striking cars naturally attract photos, shares, and influencer engagement.</li>
                    </ul>
                    <br>
                    <h4>Ideal Use Cases for Tesla Wrap Campaigns</h4>
                    <p>Tesla wrap activations are ideal for:</p>
                    <ul>
                        <li><strong>Luxury & Lifestyle Brands</strong> – Fashion, watches, perfumes, and technology.</li>
                        <li><strong>Real Estate Projects</strong> – Launches of premium properties or communities.</li>
                        <li><strong>Corporate Branding</strong> – Brand repositioning or awareness campaigns.</li>
                        <li><strong>Tech & Electric Brands</strong> – Perfect synergy with innovation-driven businesses.</li>
                        <li><strong>Event & Festival Promotion</strong> – Use wrapped Teslas for on-ground visibility and PR value.</li>
                    </ul>
                    <br>
                    <h4>Drive Your Brand Into the Future</h4>
                    <p>
                        At DataMySite, we merge creativity with technology to make your brand move — literally. Our Tesla Wrap Experiential Marketing Campaigns transform luxury vehicles into moving stories that grab attention, inspire conversation, and reflect innovation.
                        <br><br>
                        Whether it’s one Tesla or an entire branded fleet, we ensure every drive becomes a powerful experience for your audience.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image172.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section striped-section  section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>Why choose Tesla for brand activations in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Tesla vehicles represent luxury, innovation, and sustainability — three qualities that resonate strongly with Dubai’s audience. They ensure your brand is perceived as forward-thinking and premium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can the wrap design be customized fully?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We create full, partial, or minimalist wraps based on your creative needs. The entire car exterior, including panels and bumpers, can be branded.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long does the campaign last?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns typically run between 1–3 months, but durations can be extended based on visibility and marketing goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Are these vehicles used only for road exposure?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No — Teslas can also be used at events, exhibitions, and PR activities as display elements, allowing live brand engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How do you measure ROI?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We track metrics like on-road visibility, social engagement, impressions, and media reach. You’ll receive a post-campaign report with data and insights.</p>
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