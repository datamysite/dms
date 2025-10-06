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
                        <h2>The Impact of Entertainment Sponsorships</h2>
                        <br>
                        <p>
                            Entertainment sponsorships Dubai help businesses achieve proper reach and growth. It is a process in which a business partners with an entertainment personality or platform or even an event. This includes celebrity endorsements to concerts along with festivals and film premiers.
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Choose Entertainment Sponsorships Dubai?</h4>
                </div>
                <div class="col-lg-6">
                    <p>
                        Entertainment sponsorships Dubai are a great way to build meaningful connections with the target audience and improve brand awareness. Datamysite offers all of this and more. We provide a range of entertainment sponsorship services suited to your needs.
                        <br>
                        When you choose entertainment sponsorships Dubai, you get:
                    </p>
                    <ul>
                        <li>An increase in visibility and audience engagement.</li>
                        <li>Your brand aligns with high-profile entertainment brands.</li>
                        <li>Promotional advantages through exclusive branding opportunities.</li>
                        <li>You can strengthen customer loyalty by associating with popular entertainment experiences.</li>
                    </ul>

                    <iframe class="service-iframe cop-iframe" src="https://www.youtube.com/embed/re2nXszkJcI?si=9lATrbRekh8VvaCz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="faq " id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-71">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-71" data-aria-expanded="true" data-aria-controls="faqCollapse-71">
                                            <span class="badge">&nbsp;</span>Benefits of Entertainment Sponsorships Dubai
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-71" class="collapse show" aria-labelledby="faqHeading-71" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            There are a number of benefits of choosing Brand sponsorships in entertainment Dubai. These are as follows:
                                            <ul>
                                                <li><strong>Cost-Effective Marketing</strong>: These sponsorships help lower the cost of events and also help in gaining proper market visibility.</li>
                                                <li><strong>Better Credibility</strong>: You benefit from gaining the trust of your audience and customers through enhanced credibility when you partner with a reliable and well-known entertainment personality or event.</li>
                                                <li><strong>Focused Promotion</strong>: Sponsors get unique promotional scopes. This can be in the form of logo placements or digital advertisements along with on-site branding.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-72">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-72" data-aria-expanded="true" data-aria-controls="faqCollapse-72">
                                            <span class="badge">&nbsp;</span> Types of Brand Sponsorship Models
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-72" class="collapse" aria-labelledby="faqHeading-72" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            We offer different sponsorship models tailored to meet brand objectives:
                                            <ul>
                                                <li><strong>Financial Sponsorships</strong>: You can offer financial support to entertainment events. In return you get visibility and promotional advantages.</li>
                                                <li><strong>In-Kind Sponsorships</strong>: You can also sponsor products or services to support events. This helps in gaining brand recognition in return.</li>
                                                <li><strong>Media Sponsorships</strong>: In this, you offer advertising space in newspapers or television. You can also choose online platforms that ensure extensive media coverage.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
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

            <div class="row gy-4 split-block first-row">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image20.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>Our Event Sponsorship Services GCC</h4>
                    <p>
                    At Datamysite, we offer a range of event sponsorship services GCC to help brands connect with the right entertainment platforms. Our services include:
                    <ul>
                        <li><strong>Concert Sponsorships</strong>: This is when you support a live music event. This helps you to engage with a wider audience base, including both local and international individuals.</li>
                        <li><strong>Film & TV Sponsorships</strong>: We also help you tie up with film premiers and TV shows. This way, you can gain visibility among the entertainment audience.</li>
                        <li><strong>Festival Sponsorships</strong>: This type of sponsorship aids in gaining visibility by sponsoring events based on music, food or any cultural aspect. It should align with your brand.</li>
                        <li><strong>Celebrity Sponsorships</strong>: People trust celebrities. When they endorse your brand, you benefit from getting the trust of their following and fans.
                        <li><strong>Sports Entertainment Sponsorships</strong>: You can also sponsor major sports events to reach out to the active and engaged sports fan community.</li>
                    </ul>
                </p>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>How Entertainment Brand Partnerships UAE Work</h4>
                    <p>Our entertainment brand partnerships UAE strategy ensures a seamless sponsorship experience. Here’s our process:</p>
                    <ul>
                        <li>Understanding Your Goals</li>
                        <li>Finding the Right Partnership</li>
                        <li>Customising Your Sponsorship Package</li>
                        <li>Launch & Monitor</li>
                    </ul>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image21.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Datamysite for Sponsorship for Entertainment Events UAE?</h4>
                    <p>
                       At Datamysite, we have a team of skilled experts in the field of entertainment sponsorships Dubai. Our services guarantee the best growth and reach for your business. Here’s how we stand out:
                    </p>
                        <ul>
                            <li><strong>Expert Media Buying</strong>: We optimise ad placements using data-driven insights.</li>
                            <li><strong>Extensive PR Network</strong>: We collaborate with top PR media houses for high-impact brand exposure.</li>
                            <li><strong>Innovative Marketing Solutions</strong>: We create tailored sponsorship strategies that drive results.</li>
                        </ul>
                    <p>
                        Get in touch with <a href="{{route('contact')}}"><strong>datamysite</strong></a> today for the best entertainment sponsorship solutions.
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
                                        <span class="badge">&nbsp;</span>How can entertainment sponsorships Dubai benefit my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can achieve brand recognition and credibility with the right entertainment sponsorship strategy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What types of events can I sponsor with your assistance?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>At datamysite, we work with concerts, festivals, film premieres, TV shows, and sports events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can datamysite negotiate sponsorship deals for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. At datamysite, we take care of all negotiations to secure the best sponsorship terms for your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Does datamysite provide promotional support during events?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we assist with branding materials, activations, and audience engagement strategies.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What is the perfect timeline for securing an entertainment sponsorship?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We recommend starting discussions at least three to six months before the event for optimal planning.</p>
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