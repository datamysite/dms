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
                        <h2>About PR Coverage with Khaleej Times</h2>
                        <br>
                        <p>Since its establishment, Khaleej Times has maintained its position as the UAE's most reliable English-language newspaper, serving an important demographic group of different age segments. At datamysite, we are your trusted Khaleej Times PR Agency Dubai, offering comprehensive solutions for your PR needs.</p>
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
                    <h4>Why the Khaleej Times?</h4>
                    <p>
                        Advancing your brand through Khaleej Times produces enhanced exposure that strengthens both your brand recognition and ties with the UAE population and business sector. And that is exactly what we, at datamysite, offer. As a leading Khaleej Times PR Agency Dubai, we help businesses achieve credibility with a trusted media connection through Khaleej Times, which leads to decision-making recognition and attracts their attention in the region.


                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 vertical-center">
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
                    <h4>What We Offer:</h4>
                    <p>Datamysite, a leading Khaleej Times PR Agency Dubai, supports businesses in their media strategies to obtain prime positions in Khaleej Times using multiple promotional methods. Your brand can reach new heights through our services that merge with Khaleej Times' broad audience network to generate a maximised presence on both digital and print platforms.</p>
                </div>
                <div class="col-lg-7">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-51">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-51" data-aria-expanded="true" data-aria-controls="faqCollapse-51">
                                        <span class="badge">&nbsp;</span>News Coverage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-51" class="collapse show" aria-labelledby="faqHeading-51" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We help businesses obtain news section coverage in the Khaleej Times so they can get maximum exposure for their initiatives. A powerful news dissemination method allows your firm to notify numerous audience members about ongoing developments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-52">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-52" data-aria-expanded="false" data-aria-controls="faqCollapse-52">
                                        <span class="badge">&nbsp;</span>Interviews and Expert Opinions
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-52" class="collapse" aria-labelledby="faqHeading-52" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Demonstrate your professional skills by participating in one-on-one spoken features and editorial opinion pieces at Khaleej Times. Your industry leadership stance, along with increased audience trust, are both established through these strategic initiatives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-53">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-53" data-aria-expanded="false" data-aria-controls="faqCollapse-53">
                                        <span class="badge">&nbsp;</span>Business Section Highlights
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-53" class="collapse" aria-labelledby="faqHeading-53" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Through our public relations services, we secure business section content about your brand's achievements for publication in the Khaleej Times. When you obtain this placement, your brand will create an identifiably distinct position above other professionals and local decision-makers within the region</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-54">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-54" data-aria-expanded="false" data-aria-controls="faqCollapse-54">
                                        <span class="badge">&nbsp;</span>Khaleej Times Advertising Services UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-54" class="collapse" aria-labelledby="faqHeading-54" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The advertising service portfolio available at datamysite includes specific promotional services that appear in Khaleej Times. Businesses using this approach can maximise their visibility between print and digital channels, which creates another opportunity to reach potential customers.</p>
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

            <div class="row gy-4 split-block first-row">

                <div class="col-lg-5">
                    <img src="{{URL::to('/public/section-images/image14.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7">
                    <h4>Benefits of Hiring a Khaleej Times PR Agency Dubai:</h4>
                    <p>A Khaleej Times press release Dubai offers a range of benefits.</p>
                    <ul>
                        <li><strong>Better Reach</strong>: The audience of Khaleej Times consists of well-educated people who have access to high net worth. Customer exposure through brand placement will help you reach important readers who possess the potential to drive business growth. Corporate PR in Khaleej Times can help you reach your target audience the right way.</li>
                        <li><strong>Better Market Standing</strong>: When your brand obtains coverage in this esteemed publication it enhances its local market standing and generates greater trust from readers. Businesses that target market domination in the UAE must establish this fundamental step. Moreover, with brand promotions in Khaleej Times UAE, you benefit from gaining credibility.</li>
                        <li><strong>Enhanced Visibility</strong>: The news publication Khaleej Times serves a substantial audience that includes both professional workers and executives who make choices for their organisations. The publication of your material through PR services directly raises your brand's visibility among the influential decision-makers operating in the UAE.</li>
                    </ul>
                    <p>Contact us now to discover how we will elevate your brand's visibility through impactful media exposure initiatives. Call us now at <a href="tel:971525287259" class="inline-block">+971 525 287 259</a>!</p>
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

        <section id="service-cards" class="blog-section section  faq-new-section">

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
                                        <span class="badge">&nbsp;</span>Where does the Khaleej Times dedicate its editorial focus?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The news coverage of Khaleej Times extends from technology to the healthcare, real estate, and education fields. Your media exposure increases when our team builds PR strategies that follow the Khaleej Times editorial direction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>Do you manage interviews with Khaleej Times journalists?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We arrange interviews between your staff members and Khaleej Times journalists while providing guidance to ensure effective communication. Our team manages the complete process, starting with message development, and achieves successful media interviews with appropriate journalists to present your brand optimally. As a leading Khaleej Times PR Agency Dubai, we take care of every aspect.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>What Khaleej Times PR services does datamysite offer?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team at datamysite, your trusted Khaleej Times PR Agency Dubai, delivers comprehensive media placement and PR solutions that strengthen business exposure to target markets. The datamysite team exists to help your brand achieve higher visibility throughout the UAE. Contact our team today to discuss our customised PR services and your potential coverage opportunities in the Khaleej Times.</p>
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