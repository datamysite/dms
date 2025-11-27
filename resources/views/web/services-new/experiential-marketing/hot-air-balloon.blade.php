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
                        <h2>Brands Need Bold Ideas</h2>
                        <h4>that rise above the noise — quite literally.</h4>
                        <br>
                        <p>
                            Hot Air Balloon Experiential Marketing is one of the most breathtaking and unforgettable brand experiences you can create in Dubai. At DataMySite, we turn the skies into your brand’s stage, helping you engage audiences in ways they’ve never imagined.
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
                    <h4>What is Hot Air Balloon Experiential Marketing?</h4>
                    <br>
                    <p>
                        Hot air balloon marketing isn’t just about branding a balloon — it’s about creating a 360° immersive experience that tells your story from the ground up to the clouds. From branded flights to sky-view activations, this unique format lets your brand:
                    </p>
                    <ul>
                        <li>Capture massive attention in open-air environments</li>
                        <li>Engage both participants and onlookers</li>
                        <li>Showcase your brand from a premium, adventurous, and luxurious perspective</li>
                    </ul>
                    <p>This is not just advertising — it’s an adventure-driven marketing experience that people remember, talk about, and share.</p>
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
                    <h4>Why Hot Air Balloon Activations Work in Dubai</h4>
                    <p>Dubai’s stunning landscapes, golden deserts, and luxury tourism make it the perfect location for aerial brand activations. <br><strong>Here’s why:</strong></p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Iconic Visual Exposure</h5>
                    <p>
                        The Dubai desert, skyline, and sunrise form the ideal backdrop for aerial brand visibility. A branded balloon in the sky becomes a moving billboard visible from kilometers away.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">High-Value Audience Engagement</h5>
                    <p>
                        Hot air balloon rides attract a premium audience — tourists, executives, influencers, and media personalities. That means your brand is connecting with an affluent, global demographic.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Social Media Buzz</h5>
                    <p>
                        A hot air balloon flight is a highly shareable experience. Attendees and viewers flood social media with pictures and videos, creating organic brand amplification without extra cost.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Perfect for Luxury, Lifestyle, and Tourism Brands</h5>
                    <p>
                        Whether you’re launching a product, announcing a new service, or simply creating brand awareness, this format reflects luxury, aspiration, and adventure — values Dubai consumers admire.
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
                    <img src="{{URL::to('/public/section-images/image178.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Executes Hot Air Balloon Activations</h4>
                    <p>
                        At DataMySite, we handle every detail of your aerial experiential campaign, ensuring safety, visibility, and engagement.
                    </p>
                    <ul>
                        <li>
                            <strong>Concept & Strategy Development</strong><br>
                            We design creative campaigns that align with your brand story and objectives — whether it’s brand awareness, product reveal, or experiential PR.
                        </li>
                        <li>
                            <strong>Balloon Design & Branding</strong><br>
                            From full balloon wraps to basket branding and onboard experiences, we ensure every visual detail speaks your brand language.
                        </li>
                        <li>
                            <strong>Location & Licensing</strong><br>
                            We coordinate with Dubai Civil Aviation authorities and event partners to manage location permits, logistics, and safety regulations.
                        </li>
                        <li>
                            <strong>Live Engagement & Coverage</strong><br>
                            On-flight photo ops, influencer participation, live-stream coverage, and drone shots ensure your brand gets maximum exposure on-ground and online.
                        </li>
                        <li>
                            <strong>PR & Social Media Integration</strong><br>
                            Our team plans and manages digital amplification — ensuring every share, mention, and tag adds to your campaign reach.
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
                    <h4>Benefits of Hot Air Balloon Brand Activations</h4>
                    <ul>
                        <li><strong>Sky-High Visibility</strong> – A balloon becomes an iconic floating brand statement visible across large areas.</li>
                        <li><strong>Unforgettable Brand Experiences</strong> – People remember brands they experience in unique, emotional settings.</li>
                        <li><strong>Earned Media & PR Value</strong> – Media outlets and influencers are naturally drawn to cover such unique campaigns.</li>
                        <li><strong>Viral Social Media Content</strong> – Stunning visuals generate massive engagement across platforms.</li>
                        <li><strong>Premium Brand Perception</strong> – Associate your business with adventure, innovation, and exclusivity.</li>
                    </ul>
                    <br>
                    <h4>Ideal Industries for Hot Air Balloon Experiential Marketing</h4>
                    <p>This format is perfect for:</p>
                    <ul>
                        <li><strong>Luxury Brands</strong> – Fashion, watches, jewelry, automobiles</li>
                        <li><strong>Tourism & Hospitality</strong> – Hotels, resorts, travel companies</li>
                        <li><strong>Real Estate Developers</strong> – High-end property promotions</li>
                        <li><strong>Automobile Launches</strong> – Especially for electric or premium car brands</li>
                        <li><strong>Corporate Branding Events</strong> – Milestones, rebranding, or awareness campaigns</li>
                    </ul>
                    <p>At DataMySite, we don’t just market your brand — we lift it to the skies. Our Hot Air Balloon Experiential Marketing campaigns in Dubai are designed to inspire awe, create conversation, and elevate brand love to new heights.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
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
                                        <span class="badge">&nbsp;</span>Is hot air balloon advertising legal in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. With proper permissions from aviation authorities and event organizers, DataMySite ensures full compliance with Dubai’s regulations for aerial advertising and brand displays.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long does a hot air balloon campaign take to plan and execute?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Typically 3–6 weeks, depending on design, permissions, and logistics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can the balloon be fully customized with branding?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. You can choose from partial or full-wrap branding, as well as branded baskets, onboard giveaways, or flags.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Is it safe for participants?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>100%. We partner with licensed balloon operators and follow strict aviation safety protocols to ensure passenger and crew safety.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What kind of ROI can brands expect?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>ROI comes in the form of massive visual reach, PR coverage, influencer engagement, and social virality — offering far greater recall than traditional ads.</p>
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