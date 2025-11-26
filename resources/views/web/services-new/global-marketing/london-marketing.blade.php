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
                        <h2>Offers Unparalleled Opportunities</h2>
                        <h4>for brand visibility and international prestige.</h4>
                        <br>
                        <p>
                            At DataMySite, we help Dubai and UAE-based brands expand into the UK market through premium transit advertising — specifically, London Taxi Advertising and Bus Advertising.
                            <br>
                            These formats capture the city’s constant movement, delivering your brand message across London’s busiest commercial, financial, and tourist zones.
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
                    <h4>Why Market in London?</h4>
                    <br>
                    <p>
                        London is not just a city — it’s an international stage where global brands make their mark. For UAE businesses looking to build trust, recognition, and consumer reach in Europe, London provides:
                    </p>
                    <ul>
                        <li>A daily audience of over 9 million people (residents + tourists).</li>
                        <li>World-class transport infrastructure with unmatched ad exposure.</li>
                        <li>High-value demographics: professionals, students, business travelers, and global decision-makers.</li>
                        <li>Cultural diversity and purchasing power that align with Dubai’s cosmopolitan audience.</li>
                        <li>Premium brand positioning — being visible in London means global credibility.</li>
                    </ul>
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
                    <h4>Our London Marketing Channels</h4>
                    <p>We specialize in high-impact transit media that transforms London’s iconic vehicles into moving billboards — maximizing visibility and prestige for your brand.</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Taxi Advertising in London</h5>
                    <p>
                        The London black cab is a global icon — and an incredibly effective medium for high-visibility brand promotion. These vehicles travel through every major business district, shopping area, and tourist landmark, making them one of the most efficient ways to deliver brand exposure across the capital.
                        <br>
                        <strong>Taxi Advertising Options Include:</strong>
                    </p>
                    <ul>
                        <li><strong>Full Taxi Wraps</strong> – Transform the entire vehicle into a moving brand experience.</li>
                        <li><strong>Super Sides & Rear Panels</strong> – Target pedestrians and vehicles in traffic zones.</li>
                        <li><strong>Tip Seats & Interior Branding</strong> – Engage passengers with creative storytelling during their ride.</li>
                        <li><strong>Digital Taxi Tops</strong> – High-brightness LED panels running dynamic ad rotations.</li>
                    </ul>
                    <p>
                        <strong>Why Taxi Advertising Works in London:</strong><br>
                        24/7 mobility across London’s core business and leisure routes.<br>
                        Access to high-income, professional audiences.<br>
                        Strong recall due to London taxis’ iconic, instantly recognizable design.<br>
                        Full creative flexibility — from bold visuals to digital messages.<br>
                        <strong>Example Campaigns:</strong>
                    </p>
                    <ul>
                        <li>A Dubai tourism brand showcasing “Visit Dubai” visuals on taxis around Heathrow and central London.</li>
                        <li>A UAE real estate firm promoting London property exhibitions and investment opportunities.</li>
                    </ul>
                    <p>
                        <strong>Key Locations Covered:</strong><br>
                        Oxford Street • Knightsbridge • Canary Wharf • Heathrow Airport • Westminster • London Bridge • Soho • Shoreditch
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Bus Advertising in London</h5>
                    <p>
                        With over 8,000 buses operating daily across Greater London, bus advertising delivers massive reach and repeated impressions. It’s ideal for both brand awareness and event-based promotions.
                        <br>
                        <strong>Bus Advertising Formats:</strong>
                    </p>
                    <ul>
                        <li><strong>Full Wraps</strong> – Create an immersive brand experience across double-decker buses.</li>
                        <li><strong>Super Sides & Mega Rears</strong> – Large, visible creative space for urban exposure.</li>
                        <li><strong>Bus Interior Panels & Digital Screens</strong> – Engage commuters with product visuals or QR-based offers.</li>
                    </ul>
                    <p>
                        <strong>Why Bus Advertising Works:</strong><br>
                        12–18 hours of continuous daily visibility.<br>
                        Covers key London routes connecting airports, offices, and retail districts.<br>
                        Perfect for lifestyle, retail, education, and tourism campaigns.<br>
                        Builds frequency and reach with long exposure durations.<br>
                        <strong>Example Campaigns:</strong>
                    </p>
                    <ul>
                        <li>A Dubai airline advertising direct flights between London and UAE.</li>
                        <li>A UAE-based education brand promoting international programs to UK students.</li>
                        <li>A luxury hospitality brand showcasing Dubai resorts during London’s summer travel season.</li>
                    </ul>
                    <p><strong>Prime Routes for Maximum Impact:</strong></p>
                    <ul>
                        <li>Oxford Street – Central shopping & retail visibility</li>
                        <li>Kensington & Chelsea – Luxury audience reach</li>
                        <li>Canary Wharf – Financial & corporate exposure</li>
                        <li>Piccadilly Circus – High tourist engagement</li>
                        <li>Heathrow to Central London – International traveler audience</li>
                    </ul>
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
                    <img src="{{URL::to('/public/section-images/image107.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit Most</h4>
                    <ul>
                        <li>Tourism & Hospitality – Hotels, airlines, and travel brands</li>
                        <li>Luxury Retail & Lifestyle – Fashion, watches, and jewelry</li>
                        <li>Real Estate & Property Investment</li>
                        <li>Education & Business Schools</li>
                        <li>Technology & Fintech – Global exposure for innovation-driven brands</li>
                        <li>Government & Destination Marketing Campaigns</li>
                    </ul>
                    <br>
                    <h4>Bring Your Brand to the Streets of London</h4>
                    <p>
                        London’s streets are alive with movement — and your brand can be part of that rhythm.
                        <br>
                        Through iconic taxi and bus advertising, DataMySite connects UAE brands with London’s diverse and influential audience, amplifying visibility where the world is watching.
                        <br><br>
                        Whether it’s building awareness, launching a campaign, or entering the UK market, we make your brand move — across London, and beyond.
                        <br><br>
                        <strong>Expand globally. Advertise confidently. Partner with DataMySite.</strong>
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for London Marketing</h4>
                    <p>
                        As a Dubai-based global marketing agency, we bridge the gap between the UAE’s leading brands and London’s most valuable audiences. Our partnerships with transport media owners and OOH networks in the UK enable us to offer premium placements, end-to-end creative production, and real-time campaign management.
                        <br><br>
                        <strong>Our Capabilities Include:</strong>
                    </p>
                    <ul>
                        <li>Access to the entire London taxi and bus advertising network</li>
                        <li>Creative design and production tailored for UK audiences</li>
                        <li>Campaign routing and schedule planning for maximum city coverage</li>
                        <li>Compliance and permit handling with Transport for London (TfL) standards</li>
                        <li>Performance monitoring and post-campaign analytics with imagery proof</li>
                    </ul>
                    <p>
                        <strong>Benefits:</strong><br>
                        Global visibility with a premium European audience<br>
                        Trusted UK media partners and certified ad inventory<br>
                        Hassle-free execution from Dubai to London<br>
                        Brand prestige — associating your business with London’s global influence
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 vertical-center mob-not-visible">
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

        <section id="service-cards" class="blog-section section  striped-section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>Why should UAE brands advertise in London?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>London is one of the most influential global cities — visibility here instantly strengthens international credibility and opens access to a premium global audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What’s the best format for high-end exposure?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Full taxi wraps and double-decker bus wraps offer maximum visibility and creative space for impactful branding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can DataMySite manage campaigns remotely from Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We manage the entire process — from media booking and design approvals to campaign monitoring — through our UK media partners.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Are there options for short-term campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we offer flexible booking durations, from 2-week bursts to 3-month full-city coverage plans.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can I run the same creative in Dubai and London?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We recommend localizing the creative to align with UK audience tone and compliance requirements. Our team will adapt your Dubai visuals for maximum relevance in London.</p>
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