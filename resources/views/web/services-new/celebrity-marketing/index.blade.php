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
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$service->name}}</h1>
                        <h2>The Impact of Celebrity Marketing</h2>
                        <br>
                        <p>
                            At datamysite, we offer businesses the chance to work with Bollywood stars and sports personalities through its Celebrity Marketing Dubai service. Celebrities use their powerful status to enhance brand visibility through multiple channels, which in turn generates credibility and stronger emotional bonds with their supporters. We develop strategies to emphasise your brand through every product launch event and promotional campaign.
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

                <div class="col-lg-5">
                    <iframe class="service-iframe inf-iframe" src="https://www.youtube.com/embed/re2nXszkJcI?si=9lATrbRekh8VvaCz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-7">
                    <h4>Key Benefits of Celebrity Marketing</h4>

                    <ul>
                        <li>Through Celebrity Marketing Dubai, you receive several primary advantages, such as maximum exposure through celebrity attention and broad brand visibility.</li>
                        <li>Consumers have faith in the brands that major celebrities endorse because these famous personalities have already built strong trust relationships with their fans.</li>
                        <li>You have the option of appealing to diverse audiences across multiple demographics and regions.</li>
                        <li>Consumer connection becomes stronger when brands get backed by celebrity endorsements.</li>
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

            <div class="col-lg-12">
                <h4>Why Choose Celebrity Marketing Dubai?</h4>
                <p>There are compelling reasons for businesses to choose Celebrity Marketing Dubai in the current marketing environment. Through the usage of well-known personalities, Celebrity Marketing Dubai enables brands to achieve market distinction. The right execution of celebrity collaboration between brands results in increased audience reach while it establishes deeper trust relationships and emotional bonding with consumers.</p>
            </div>
            <div class="row gy-4 first-row">
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose Bollywood Celebrity Endorsements Dubai</h4>
                    <p>
                        The branding technique involving Bollywood celebrities finds great use in Dubai to appeal most strongly to its large South Asian population. Their authority reaches beyond entertainment to affect what people wear as well as how they live and what they purchase.
                        At datamysite, we facilitate Bollywood Celebrity Endorsements Dubai through:
                    </p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-710">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-710" data-aria-expanded="true" data-aria-controls="faqCollapse-710">
                                        <span class="badge">&nbsp;</span>Brand Endorsements:
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-710" class="collapse " aria-labelledby="faqHeading-710" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Partner with Bollywood superstars for impactful TV ads and digital campaigns.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-711">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-711" data-aria-expanded="false" data-aria-controls="faqCollapse-711">
                                        <span class="badge">&nbsp;</span>Event Appearances
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-711" class="collapse" aria-labelledby="faqHeading-711" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Attract massive crowds and media attention with celebrity appearances.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-712">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-712" data-aria-expanded="false" data-aria-controls="faqCollapse-712">
                                        <span class="badge">&nbsp;</span>Social Media Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-712" class="collapse" aria-labelledby="faqHeading-712" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A social media marketing strategy enables Bollywood stars to use their social influence and reach millions of viewers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-713">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-713" data-aria-expanded="false" data-aria-controls="faqCollapse-713">
                                        <span class="badge">&nbsp;</span>Customised Collaborations
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-713" class="collapse" aria-labelledby="faqHeading-713" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Businesses can establish tailor-made brand alliances that match their company vision together with their core values.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image5.png')}}" class="side-image img-spacing" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>

      
        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>How We Collaborate with Sports Personalities</h4>
                    <p>Our Sports Personality Promotions GCC operation works through:</p>

                    <ul>
                        <li><strong>Corporate Engagements</strong>: Enhance your corporate events with guest appearances from sports legends.</li>
                        <li><strong>Motivational Campaigns</strong>: They enable you to share the success stories of athletes with your audience.</li>
                        <li><strong>Sports Campaigns</strong>: requires athletes to advertise health products and sports-based products along with fitness-oriented products.</li>
                    </ul>

                    <p>At datamysite, we deliver more than celebrity-brand matchmaking services. datamysite delivers complete marketing solutions that enable smooth implementation and deliver maximum results.</p>
                    
                    <h4>Sports Personality Marketing</h4>
                    <p>The sports-oriented culture of Dubai, along with other GCC countries, creates opportunities for effective athlete collaborations through Sports Personality Promotions GCC programs. When sports athletes join brand collaborations, they provide credibility, motivational elements, and desirable characteristics. All of this appeals to fitness enthusiasts and active consumers, along with younger audiences.</p>
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
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
                <div class="col-lg-8 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>How do I choose the right celebrity for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>At datamysite, our Celebrity Marketing Dubai services help brands and clients select appropriate talent by considering their industry sector audience demographics and marketing targets. We work as the mediator between clients to handle all discussions regarding negotiations for partnership agreements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>Are Bollywood Celebrity Endorsements Dubai suitable for all industries? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! Bollywood stars effectively improve brand acceptance in all major business areas, such as fashion and luxury and technology and retail.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>What expenses are involved when working with a celebrity for brand promotion?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Choosing a celebrity for your marketing campaign depends on their fame level combined with the width of your campaign and its period. Our team helps businesses find appropriate solutions regardless of their budget range.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">&nbsp;</span>How long does it take to plan and execute a celebrity campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The execution timeline extends between a few weeks and months while we maintain efficient completion procedures. Our real-time analytics, together with audience engagement metrics, enable performance tracking of campaign success.</p>
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