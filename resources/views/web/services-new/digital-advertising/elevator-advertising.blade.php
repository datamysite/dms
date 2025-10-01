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
                        <h2>The Impact of Elevator Advertising</h2>
                        <br>
                        <p>
                            The elevator advertising sector presents viewers with a distinct marketing opportunity in the intimate elevator environment. With Dubai's skyscrapers and high-rise buildings, Elevator advertising Dubai is an innovative way to reach people during their short journey between floors. At datamysite, we offer elevator advertising solutions catered to your business needs.
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
                    <h4>How Elevator Advertising Dubai Works</h4>
                    <p>
                        Elevator advertising Dubai involves placing ads inside or outside elevators in commercial and residential buildings. The target is to deliver advertising messages to people who cannot escape the focused area of limited space.
                        <br><br>
                        The message becomes more impactful because of its environment having minimal distractions so people can remember it better. The format of advertising varies between static images and digital displays and interactive experiences based on the advertising targets.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/re2nXszkJcI?si=9lATrbRekh8VvaCz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

                <div class="col-lg-5">
                    <img src="{{URL::to('/public/section-images/image3.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7">
                    <h4>Our Elevator Advertising Services</h4>
                    <p>Here's what we offer:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-210">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-210" data-aria-expanded="true" data-aria-controls="faqCollapse-210">
                                        <span class="badge">&nbsp;</span>Digital Elevator Screens Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-210" class="collapse show" aria-labelledby="faqHeading-210" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Digital elevator screens Dubai offer dynamic advertising opportunities. Audiences find this format highly efficient for brand engagement since screens show video content along with promotional messages alongside interactive advertising. The combination of real-time updates together with targeted messaging provides businesses an opportunity to improve their audience engagement. It is a major part of Elevator video advertising UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Poster Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Brand visibility through poster advertisements becomes certain because everyone entering the elevator space will see them. Brand recall effectiveness and impactful messaging work best when using this format.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Floor Graphics & Window Clings
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The interior space of elevators makes floor graphics and window clings an advanced advertising medium that exists beyond traditional print formats. Additional contact points enable engagement when advertising inside elevators.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Elevator Ads Dubai</h4>
                    <ul>
                        <li><strong>Captive Audience</strong>: People in an elevator have limited distractions, ensuring higher ad engagement.</li>
                        <li><strong>High Recall Rate</strong>: Multiple exposures to the same advertisement in one environment create an environment where memory recall becomes higher.</li>
                        <li><strong>Excellent ROI</strong>: Compared to traditional advertising methods, elevator ads Dubai offer excellent ROI.</li>
                        <li><strong>Cost-Effective</strong>: The advertising platform allows you to place your ad in areas that target your specific audience, such as commercial buildings and malls, as well as hotels and residential towers.</li>
                        <li><strong>Brand Visibility</strong>: With elevator video advertising UAE, businesses can showcase their brand in high-traffic locations.</li>
                    </ul>
                    <br>
                    <h4>The Role of Lift Media Dubai in Brand Growth</h4>
                    <p>Lift advertising Dubai plays a crucial role in brand positioning by reaching people in a distraction-free environment. The lift advertising solutions from our company achieve maximal audience engagement while making brands visible to the public.</p>
                    <br>
                    <h4>Elevator Video Advertising UAE – The Future of Out-of-Home Advertising</h4>
                    <p>
                        Elevator video advertising UAE is an advanced marketing solution that allows businesses to run engaging video ads inside elevators. These screens can display:
                        <ul>
                            <li>Brand commercials</li>
                            <li>Event promotions</li>
                            <li>Special offers</li>
                            <li>Interactive ads with QR codes for instant engagement</li>
                        </ul>
                        Video ads play through high-definition display mechanisms and motion graphics to preserve a deep impact on people watching.
                    </p>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image4.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Datamysite for Elevator Advertising Dubai?</h4>
                    <p>
                       At datamysite, we specialise in elevator advertising campaigns UAE that drive engagement and brand awareness. Here's why businesses trust us:
                    </p>
                    <ul>
                        <li><strong>Innovative Approach</strong>: The company merges technology with creative concepts to generate successful elevator advertisement strategies.</li>
                        <li><strong>Strategic Locations</strong>: We place your ads in high-rise buildings, corporate offices, and premium residential areas for maximum visibility.</li>
                        <li><strong>Custom Solutions</strong>: Whether you need static posters, digital Elevator screens Dubai, or interactive media, we tailor campaigns to fit your needs.</li>
                        <li><strong>Proven Expertise</strong>: The leading position of our agency allows us to optimise advertisement performance with the help of data-driven analytical insights.</li>
                    </ul>
                    <p>
                        Does your brand require an advertising visibility boost? Partner with datamysite for impactful Elevator advertising Dubai campaigns that drive engagement and results. Reach us immediately at <a href="tel:971525287259" class="inline-block">+971 525 287 259</a> to start your project.
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

        <section id="service-cards" class="blog-section section striped-section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How long do people spend in an elevator?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>An elevator journey lasts between thirty seconds to two minutes, which provides sufficient time for delivering concise messages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I target specific buildings for Elevator advertising Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can place ads in high-rise buildings, corporate offices, and residential towers based on your target audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What businesses benefit most from lift advertising UAE?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lift Advertising UAE works best for businesses targeting professionals, real estate developers, luxury brands, and service providers in commercial and residential areas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What is elevator advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Elevator advertising presents some form of advertisement signage visible within elevator compartments. These particular advertising methods reach broad groups, starting with executive workers and continuing to shoppers found in shopping centres.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How much does Elevator advertising Dubai cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The cost of Elevator advertising Dubai varies depending on factors such as ad format, location, and campaign duration. You can contact datamysite to receive a personalised price estimate.</p>
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