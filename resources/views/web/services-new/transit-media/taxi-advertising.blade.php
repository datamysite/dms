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
                        <h2>The Impact of Taxi Advertising</h2>
                        <br>
                        <p>
                            Effective mobile advertising opportunities are available throughout Dubai thanks to its extensive taxi network. Taxis serve as effective mobile advertisement platforms that allow your brand to reach both inside their passenger compartments and through city sidewalk visibility. Taxi Advertising Dubai allows your message to move around the city, reaching diverse audiences and creating high visibility for your brand.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            <h3>Want to know more?</h3>
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control" required>
                                
                                <input type="tel" name="mailphone" id="phone-field2" class="form-control" required>
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
                    <h4>What We Offer in Taxi Advertising Dubai</h4>
                    <p>
                        Our taxi advertising solutions at datamysite accommodate different types of business needs. Maximum brand visibility is possible through our solutions, which function effectively regardless of targeting particular districts or achieving whole city market dominance.
                    </p>
                    <ul>
                        <li><strong>Full Wraps:</strong> Your brand advertises as a mobile display through taxis with complete coverage wraps. Full taxi wrap advertising awards you maximum visibility because it transforms the entire vehicle into your advertisement.</li>
                        <li><strong>Partial Ads:</strong> You can choose between less obtrusive taxi advertising areas by placing ads on doors or surrounding the roof or back of the vehicle. Your marketing spend can achieve both excellent visibility rates and provide an economically viable solution.</li>
                        <li><strong>Interior Ads:</strong> Within vehicles, advertising extends directly to passengers through internal advertisements. Your brand gains attention from people aboard because you provide advertising specifically directed toward them during their trips.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe taxi-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            <div class="row gy-4 first-row">
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8">
                    <h4>Cost of Taxi Advertising: What You Need to Know</h4>
                    <p>
                        In contrast to other outside brand messaging methods, taxi advertising Dubai remains more accessible to reach your target audience. Taxi advertising exists in yellow, green, and red taxis, which provides multiple branding opportunities for advertisers. Your campaign can function with a minimum of 25 taxis, yet bulk advertising gives the best prices and provides great value for large advertising efforts.
                        <br>
                        The advertising process requires a one-month rental commitment, leading to a tight timeline between artwork approval and campaign launch that can finish within two weeks. We supply comprehensive design assistance to construct taxi art that complies with regional mandatory specifications.
                    </p>
                    <br>
                    <h4>Additional Campaigns: Moving Billboard Campaigns GCC</h4>
                    <p>In addition to traditional taxi ads, we offer Moving billboard campaigns GCC, which allows you to expand your advertising strategy beyond Dubai. Through these campaigns, your brand reaches progressively minded audiences from the Gulf Cooperation Council's member nations, and city residents and road commuters get to witness your message during their journeys.</p>
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Taxi Advertising Dubai?</h4>
                    <p>
                      The United Arab Emirates serves as a commercial and touristic centre that depends on taxi transportation for millions of its residents. Taxi Advertising Dubai offers your brand a unique chance to reach a diverse audience. Taxi advertising showcases products effectively to diverse audiences, specifically in transit areas, encompassing airports, malls, and numerous business districts.

                    </p>
                    <ul>
                        <li><strong>Covers Multiple Areas and Demographics:</strong> Taxi advertising UAE allows advertisers to penetrate multiple areas and address both local residents and visiting business people and guests. Your message receives maximum visibility because this strategy encompasses a wide range of possible viewers.</li>
                        <li><strong>Ideal for High-Frequency Exposure:</strong> Regular route activities by taxi services yield multiple opportunities for your target market to see your advertisement.</li>
                        <li><strong>Customisable Campaigns:</strong> Our team creates tailor-made advertising campaigns that match your branding approach and your business objectives. From Mobile billboard ads Dubai to targeted Taxi marketing solutions Dubai, we provide the flexibility to adjust your campaign as needed.</li>
                    </ul>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">
                
                <div class="col-lg-4">
                    <img src="{{URL::to('/public/conclusion.png')}}" width="100%" alt="Conclusion">
                </div> 

                <div class="col-lg-8 vertical-center">
                    <h4>Conclusion</h4>
                    <p>
                      Taxi Advertising Dubai is an innovative and effective way to showcase your brand to thousands of potential customers daily. datamysite stands as the top choice for helping you master the city's taxi advertising sector through our custom-built campaigns combined with our deep market knowledge.
                      <br><br>
                        Your brand will enhance visibility through mobile billboard advertising initiatives that you can launch today. Call datamysite today for an advertising consultation if you are seeking ways to boost your marketing approach and desired client acquisition. Your brand deserves to shine among the busy streets of Dubai.
                        <br><br>
                        For additional details, simply reach out to us at <a href="tel:97142957001">(+971) 42 957 001</a>.
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

        <section id="service-cards" class="blog-section striped-section section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How effective is taxi advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With thousands of taxis on the road, your brand gains significant exposure daily.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can campaigns target specific routes?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can tailor campaigns to specific areas for better audience targeting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Who sees your taxi ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Commuters, tourists, business owners, and pedestrians across Dubai's busiest locations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long do taxi advertising campaigns run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns typically run for a minimum of one month, with options for longer durations.</p>
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