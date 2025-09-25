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
                        <h2>The impact of Arabian News PR Coverage</h2>
                        <br>
                        <p>Datamysite enables your brand to appear in Arabian News, which is one of the most significant news platforms throughout the UAE and the entire Middle East region. Achieving credibility and brand recognition through an Arabian News PR Agency Dubai, like datamysite, becomes possible because of its global and regional scope of coverage.</p>
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

                <div class="col-lg-6 vertical-center">
                    <h4>Why Choose Arabian News PR Agency Dubai?</h4>
                    <p>
                        An Arabian News PR Agency Dubai, like datamysite, is an excellent choice for brand promotion because it reaches a broad audience across the UAE and Middle Eastern territories. The dependable news platform allows you to gain exposure, which builds your brand reputation.
                    </p>
                    <ul>
                        <li>Your brand can achieve maximum exposure through Arabian News because it interacts with a broad audience across the UAE and Middle Eastern regions.</li>
                        <li>Your brand receives greater credibility through news outlet endorsements, which allows it to establish authority and gain more influential status.</li>
                    </ul>
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

                <div class="col-lg-7">
                    <h4>What We Offer</h4>
                    <p>Datamysite specialises in obtaining meaningful placements through its services as a prominent Arabian News PR Agency Dubai. Our services include:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-51">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-51" data-aria-expanded="true" data-aria-controls="faqCollapse-51">
                                        <span class="badge">&nbsp;</span>Press Release
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-51" class="collapse show" aria-labelledby="faqHeading-51" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We at datamysite offer Arabian News Press Release Services to develop and publish important press releases expressly designed for your brand statements. These are designed to enhance your brand image and credibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-52">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-52" data-aria-expanded="false" data-aria-controls="faqCollapse-52">
                                        <span class="badge">&nbsp;</span>Brand Promotions
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-52" class="collapse" aria-labelledby="faqHeading-52" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Through brand promotion in Arabian News, companies can gain brand exposure through expertly developed stories and feature articles. Contact us for further details on this service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-53">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-53" data-aria-expanded="false" data-aria-controls="faqCollapse-53">
                                        <span class="badge">&nbsp;</span>Media Coverage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-53" class="collapse" aria-labelledby="faqHeading-53" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We also offer Arabian News Media Coverage Dubai. This service provides visibility opportunities through specialised news interviews as well as expert commentary and media mentions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>  
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-5">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7">
                    <h4>How Does PR in Arabian News PR Agency Dubai Work?</h4>
                    <p>
                       At datamysite, we develop professionally sponsored articles in Arabian News, establishing your brand as a market-leading authority.
                    </p>
                    <ul>
                        <li><strong>Step 1:</strong> The first step of PR work at our Arabian News PR Agency Dubai begins with examining brand goals, among other factors that help create individualised PR approaches.</li>
                        <li><strong>Step 2:</strong> This involves our experts developing press releases along with valuable articles and exclusive interviews through strategic content planning.</li>
                        <li><strong>Step 3:</strong> In the third step, we focus on securing placements in Arabian News, starting by following the media outreach procedures, which results in article and press release publications.</li>
                        <li><strong>Step 4:</strong> We understand that just having press releases and coverages is not enough. You also need to see if it is working and modify it accordingly. We thereby monitor the impressions and website traffic to measure the success of a campaign.</li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9 vertical-center">
                    <h4>Why Choose Datamysite?</h4>
                    <p>
                        As a premium Arabian News PR Agency Dubai, datamysite serves as a leading marketing firm that operated from its foundation in 2021 with expertise in digital and out-of-home (OOH) media solutions. Through digital media buying, we leverage data to determine prime spots for placing advertisements on digital platforms. Our OOH media buying service delivers effective outdoor visibility at first-class locations.
                        <br><br>
                        The team works with major PR media institutions to create compelling messaging that leads to high-profile media coverage. Datamysite unifies regional market knowledge with worldwide optimal strategies to enable businesses to reach their marketing targets. Here's what sets us apart:
                    </p>
                    <ul>
                        <li><strong>Proven Expertise</strong>: Years of experience in PR, digital marketing, and media relations.</li>
                        <li><strong>Customised PR Solutions</strong>: Our team works hard to design our strategies in alignment with your brand's particular targets.</li>
                    </ul>

                    <p>
                        As a result of our well-established connections with Arabian News, we can obtain exceptional coverage.
                        <br><br>
                        Contact Datamysite immediately to choose premium positions with Arabian News PR.
                        <br>
                        Call <a href="tel:971525287259"><strong>+971 525 287 259</strong></a> or send an email to <a href="mailto:contact@datamysite.com"><strong>contact@datamysite.com</strong></a>.
                    </p>
                </div>
                <div class="col-lg-3 mob-not-visible">
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

        <section id="service-cards" class="blog-section striped-section section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How do I get featured in Arabian News?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We at datamysite can help you get featured in Arabian News. As a leading Arabian News PR Agency Dubai, we manage the media outreach process to secure placements in Arabian News, including articles and press releases.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>What content can be featured in Arabian News?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Arabian News showcases three major content types, including press releases, feature articles, and interviews. They also feature opinion pieces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>How long will it take to secure coverage?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Based on editorial timelines and content requirements, acquiring coverage with Arabian News requires between a few days and a couple of weeks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>Is Arabian News coverage suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Small businesses, along with any enterprise, can benefit from Arabian News PR coverage exposure to build their regional market footprint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>How do you measure the success of PR coverage?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our datamysite team utilises website traffic metrics, engagement metrics, and social media mentions to determine PR success.</p>
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