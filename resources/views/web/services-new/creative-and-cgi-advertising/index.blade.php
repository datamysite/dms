@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
    <style>
        #serviceVideo{
            position: absolute;
              right: 0;
              bottom: 0;
              min-width: 100%; 
              min-height: 100vh;
              object-fit: cover;
        }
    </style>
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade">
            <video autoplay muted loop id="serviceVideo">
              <source src="{{URL::to('public/assets/img/service-new/'.$service->slug.'.mp4')}}" type="video/mp4">
            </video>

            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$service->name}}</h1>
                        <h2>Impact of Creative and CGI Advertising</h2>
                        <br>
                        <p>
                            Datamysite uses Creative and CGI Advertising Dubai to convert static marketing into innovative interactive encounters. Our team combines advanced CGI technology with creative specialisation to create breathtaking ads which retain audience attention while building brand visibility. Datamysite turns hyper-realistic 3D animations and interactive AR and VR ads into innovative solutions which leave your brand imprinted in audiences' minds.
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe transit-iframe" src="https://www.youtube.com/embed/OG0RXZzPrqA?si=Miagk5hGZL8FFR5V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <h4>Why Choose Creative and CGI Advertising Dubai?</h4>
                    <p>Datamysite maintains its position as a reliable Creative advertising services Dubai provider that createscustomised impactful advertising campaigns for Dubai-based brands. Strategic effectiveness meets visual excellence through our approach, which applies creative design to technological capabilities to produce compelling advertisements.</p>
                    <ul>
                        <li>Visual excellence in our advertisements emerges from using advanced CGI and animated technology.</li>
                        <li>Our organisation boasts designers and animators who specialise in their artistic disciplines.</li>
                        <li>The approach generates customised solutions which adapt to show both your core brand identity and marketing targets.</li>
                        <li>Every advertising effort we produce generates campaign material that stays with your target audience.</li>
                    </ul>
                    <div class="faq " id="accordion">
                        @foreach($subservices as $key => $val)
                            @php $s = $key; @endphp
                            <div class="card">
                                <div class="card-header" id="faqHeading-{{$s}}">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$s}}" data-aria-expanded="true" data-aria-controls="faqCollapse-{{$s}}">
                                            <i class="{{$val->icon}}"></i> &nbsp; {{$val->name}}
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-{{$s}}" class="collapse" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{{$val->description}}</p>
                                        <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>  
            </div>

          </div>

        </section>



        <div id="testimonials" class="striped-section">
          @include('web.includes.elements.clients')
        </div>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12">
                    <h4>Benefits of Creative and CGI Advertising Dubai</h4>
                    <p>The chief advantages of CGI animation for advertising UAE are</p>
                </div>
                <div class="col-lg-8">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-910">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-910" data-aria-expanded="true" data-aria-controls="faqCollapse-910">
                                        <span class="badge">&nbsp;</span>Unlimited Creative Freedom
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-910" class="collapse show" aria-labelledby="faqHeading-910" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Through CGI animation for advertising UAE, brands achieve freedom from conventional restrictions in their advertisement creation. Through CGI, people can create both futuristic urban landscapes and complex productions of detailed products, which were previously seen as impossible tasks. Your brand can achieve unique visual appeal, which will draw attention from your audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-911">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-911" data-aria-expanded="false" data-aria-controls="faqCollapse-911">
                                        <span class="badge">&nbsp;</span>Increased Engagement and Brand Awareness
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-911" class="collapse" aria-labelledby="faqHeading-911" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Unique visual content manages to attract viewers while maintaining their interest. Creative digital advertising UAE develops advertising solutions which remind viewers once they see your ads. High-quality CGI makes storytelling more effective, which keeps your brand at the forefront of consumer consciousness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-912">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-912" data-aria-expanded="false" data-aria-controls="faqCollapse-912">
                                        <span class="badge">&nbsp;</span>Cost-Effective Solutions
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-912" class="collapse" aria-labelledby="faqHeading-912" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The cost of doing traditional physical advertisement shoots remains high. By using CGI, you can remove all expenses linked to set production and location selection, as well as material handling expenses. The investment in CGI advertising Dubai creates substantial profits by delivering powerful visual narratives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-913">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-913" data-aria-expanded="false" data-aria-controls="faqCollapse-913">
                                        <span class="badge">&nbsp;</span>Industries Benefiting from Creative and CGI Advertising Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-913" class="collapse" aria-labelledby="faqHeading-913" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        <strong>Real Estate</strong>: Showcase properties with lifelike 3D walkthroughs.<br>
                                        <strong>Automotive</strong>: The automotive industry can showcase cars in a modern design environment using CGI improvements to their visual presentations.<br>
                                        <strong>Fashion</strong>: Fashion brands must use distinctive creative marketing efforts to present their products visually with intense originality.<br>
                                        <strong>Technology</strong>: The tech industry features product characteristics through visual effects and engaging animations to capture viewer attention.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-914">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-914" data-aria-expanded="false" data-aria-controls="faqCollapse-914">
                                        <span class="badge">&nbsp;</span>Our Creative and CGI Advertising Dubai Services
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-914" class="collapse" aria-labelledby="faqHeading-914" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        <strong>3D Product Visualisations</strong>: Present your products in lifelike detail with 3D CGI advertising Dubai.<br>
                                        <strong>Animated Explainer Videos</strong>: The utilisation of animated explainer videos simplifies difficult concepts through animated presentation methods.<br>
                                        <strong>Augmented Reality Ads</strong>: Deliver interactive and immersive advertising experiences.<br>
                                        <strong>Virtual Reality Content</strong>: Bring your brand story to life in a fully immersive environment.Our company provides Cinematic CGI Campaigns which deliver high-quality cinematic CGI solutions for spectacular visual advertising campaigns.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image29.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>How Datamysite Leads in Creative and CGI Advertising Dubai</h4>
                    <p>
                       The innovative company Datamysite emerged as a digital and out-of-home (OOH) media leader when it launched in Dubai in 2021. Datamysite specialises in Creative digital advertising UAE to deliver advanced marketing solutions which meet specific business requirements. Our company assists brands by using digital media buying approaches to achieve optimal placements, which ensures market success.
                    </p>
                    <ul>
                        <li>We employ the latest CGI and animation tools to create visually stunning ads.</li>
                        <li>Our team comprises designers, and animators who are experts in their craft.</li>
                        <li>Every campaign we offer is designed to reflect your brand's personality and objectives.</li>
                        <li>We create ads that leave a lasting impression on your audience.</li>
                    </ul>
                    <p>Contact Datamysite for Creative and CGI Advertising Dubai services if you want to revolutionise your advertising techniques. Partner with Datamysite for top-tier "Creative and CGI Advertising Dubai" solutions.</p>
                    
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-blogs-section">

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
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What industries can use CGI advertising to their benefit?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>CGI advertising demonstrates flexibility to suit advertising needs within real estate industries as well as automotive sectors, fashion markets, and technology platforms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What is the time required to make a CGI ad?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The project duration depends on the level of complexity contained throughout the project work. The duration for executing a CGI advertising campaign spans between 4 weeks and 8 weeks on average.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Is CGI advertising expensive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Investing in CGI advertising leads to superior returns as it enables the production of compelling advertisement campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I use CGI for social media campaigns?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>CGI advertising material is prepared for multiple platforms like social media, which ensures maximum audience engagement across multiple platforms.</p>
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