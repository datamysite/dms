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
                        <h2>The Impact of Gulf News</h2>
                        <br>
                        <p>Gulf News is the UAE's trusted English-language newspaper. They offer unmatched credibility and reach. At datamysite, we help you feature in Gulf News to enhance the reputation and visibility of your business across diverse audiences.</p>
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

                <div class="col-lg-6 vertical-center">
                    <h4>Why Gulf News PR Coverage Dubai?</h4>
                    <p>
                        The PR service Gulf News provides for Dubai enables strong brand credibility development and broad visibility achievement. Gulf News operates as the top English newspaper in the United Arab Emirates to deliver news to professionals and foreign and local residents. A central feature in Gulf News elevates your brand reputation and functions as exposure in a highly reliable regional media outlet.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/WR2HoD0FpyM?si=Ba7ZxHCiRwpc1Hyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>  
            </div>

          </div>

        </section>


        <hr  class="section-divider">


        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
          <div class="container section-title" style="padding-bottom: 15px;">
            <h2 class="text-theme">Available Publications</h2>
          </div><!-- End Section Title -->
          <div class="container">
            <div class="row publications-logos">
                @foreach($publications as $val)
                    <div class="col-lg-2 col-sm-4 col-xs-6">
                        <div class="pub-item">
                            <a href="{{$val->link}}" target="_blank" rel="nofollow">
                                <div class="pub-item-img">
                                    <img src="{{URL::to('/public/publications/'.$val->image)}}" alt="{{$val->name}} Logo">
                                </div>
                            </a>
                            <a href="{{$val->link}}" target="_blank" rel="nofollow">
                                <h5>{{$val->name}}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pub-see-more">
                <button>See More</button>
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
                    <h4>What We Offer – Gulf News PR Coverage Dubai</h4>
                    <p>At Datamysite, we provide comprehensive solutions to help your business secure Gulf News PR Coverage Dubai. When you choose our services, your brand content connects with the suitable audience during their optimal viewing period.</p>
                </div>
                <div class="col-lg-7">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-51">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-51" data-aria-expanded="true" data-aria-controls="faqCollapse-51">
                                        <span class="badge">&nbsp;</span>Press Release Writing and Distribution
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-51" class="collapse show" aria-labelledby="faqHeading-51" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team prepares attractive press releases that follow all Gulf News editorial guidelines. Our PR experts develop newsworthy material that follows Gulf News' guidelines to maximize the potential of getting featured. The distribution of our press releases ensures proper placement among Gulf News editors and journalists.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-52">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-52" data-aria-expanded="false" data-aria-controls="faqCollapse-52">
                                        <span class="badge">&nbsp;</span>Feature Story Placement
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-52" class="collapse" aria-labelledby="faqHeading-52" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The construction of well-written feature stories proves valuable for showcasing brands through their achievements, innovations, and success stories to readers. The Gulf News journalists work with us to find feature placement opportunities that match both business messaging needs and Gulf News' editorial blueprint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-53">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-53" data-aria-expanded="false" data-aria-controls="faqCollapse-53">
                                        <span class="badge">&nbsp;</span>Event Coverage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-53" class="collapse" aria-labelledby="faqHeading-53" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Whether it's a product launch, a corporate gathering, or an industry conference, we secure Gulf News PR Coverage Dubai for your event. Gulf News journalists, together with photographers, belong to our team, who will cover your event to help you reach maximum media coverage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-54">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-54" data-aria-expanded="false" data-aria-controls="faqCollapse-54">
                                        <span class="badge">&nbsp;</span>Interview Opportunities
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-54" class="collapse" aria-labelledby="faqHeading-54" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your organisation can establish leadership status by obtaining Gulf News interviews that represent you as an expert in your field. The team successfully secures access to main Gulf News journalists to provide your brand with a platform through UAE's top media outlet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-55">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-55" data-aria-expanded="false" data-aria-controls="faqCollapse-55">
                                        <span class="badge">&nbsp;</span>Gulf News Advertising Rates UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-55" class="collapse" aria-labelledby="faqHeading-55" data-parent="#accordion">
                                <div class="card-body">
                                    <p>In addition to PR coverage, we provide insights on Gulf News advertising rates UAE. Our expertise helps clients understand the advertising solutions at Gulf News and select the appropriate package based on their brand amplification needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image13.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>  
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-5">
                    <img src="{{URL::to('/public/section-images/image14.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7">
                    <h4>Benefits of Gulf News PR Coverage Dubai</h4>
                    <p>
                       The readership base at Gulf News includes professional workers as well as business executives and foreign immigrants who live in the UAE.
                    </p>
                    <ul>
                        <li>A trusted publication feature enables your brand to establish itself as more credible.</li>
                        <li>Your organisation will secure exposure to vital industry decision-makers to boost visibility levels.</li>
                        <li>Your business will achieve market leader status when it receives coverage in Gulf News.</li>
                    </ul>

                    <p>
                        Our Gulf News press release services ensure that your brand's announcements receive the attention they deserve. Our company provides full service, including press release preparation and strategic distribution for increased publicity.
                    </p>
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why choose Datamysite for Gulf News PR coverage?</h4>
                    <p>
                        As the Best PR agency for Gulf News Dubai, our PR experts:
                    </p>
                    <ul>
                        <li>Create expert-level informative press releases specifically written for Gulf News distribution.</li>
                        <li>Ensure complimentary formatting and strict adherence to Gulf News' editorial guidelines exist for all services.</li>
                        <li>Distributes press releases both through direct media contacts and news wire platforms.</li>
                        <li>Monitor media outlets concerning campaign success alongside providing status updates on campaign achievements.</li>
                    </ul>

                    <p>
                        Your brand will shine brighter with the premier Gulf News PR solutions that we provide.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
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

        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>What stories does Gulf News publish?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Gulf News publishes articles about business news alongside lifestyle content and technology reports, as well as event information and market developments. The editorial focus of Gulf News becomes our guide to match your brand story, which improves publication potential.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>How long does it take to get featured in Gulf News?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The duration of time it takes for a company to get featured depends on the organisation's editorial planning calendar. Your story processing moves quickly through our team's efforts, bringing it to publication with speed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>Can I promote my business through sponsored content?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>As part of its marketing service, Gulf News provides advertising opportunities through sponsored content. Contact us to explore Gulf News advertising rates UAE.</p>
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