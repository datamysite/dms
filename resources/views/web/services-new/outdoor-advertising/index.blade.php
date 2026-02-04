@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$service->name}}</h1>
                        <h2>Elevate Your Brand's Visibility</h2>
                        <h4>and Stand Out with Impactful Outdoor Advertising</h4>
                        <br>
                        <p>Your message belongs on Dubai's stunning advertising canvas. The strategic placement of outdoor advertising Dubai can benefit your brand. Premium billboard positions across major business districts give your brand consistent recognition. Innovative outdoor advertising solutions from our team at DataMySite can take your business to the next level.</p>
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
                    <h4>Why Choose Outdoor Advertising in Dubai?</h4>
                    <p>The strategic selection of outdoor advertising services UAE transforms your marketing investment into measurable results. From striking digital displays to premium static billboards, your brand gains recognition across key decision-making zones.
                    Our focus is on putting your brand in front of the right people at optimal times. We know that placing your message along these routes builds steady brand awareness. Here are the benefits of implementing outdoor ads –</p>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/Ny7v7w6dtq4?si=oAHAurPi9RcZjBPT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
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
                                <div id="faqCollapse-{{$s}}" class="collapse {{$s == 0 ? 'show' : ''}}" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
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



        <section id="testimonials" class="testimonials striped-section section">
          @include('web.includes.elements.clients')
        </section>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Outdoor Advertising Services</h4>
                    <p>Here's what we offer:</p>
                </div>
                <div class="col-lg-6">
                    <h5>Maximise Brand Awareness with Premium Locations</h5>
                    <p>
                        Placing your advertisement in significant locations will increase its engagement. Sheikh Zayed Road, Downtown Dubai, and Dubai Marina provide unmatched footfall and traffic. Your message will remain in front of the audience.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Customised Outdoor Media Campaigns Dubai</h5>
                    <p>
                       Your brand has a unique story. Outdoor media campaigns Dubai ensure that the story reaches the right people. Every format brings a fresh opportunity to connect with your audience, from static billboards to dynamic LED screens. Well-placed messaging builds consumer confidence and drives engagement.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Round-the-Clock Visibility and Consistent Branding</h5>
                    <p>
                        Unlike digital ads that can be skipped, outdoor advertising Dubai stays visible 24/7. Your brand maintains a constant presence, ensuring top-of-mind awareness among potential customers – whether day or night, your message continues working. Your message can appear on premium sites across Dubai's most influential commercial districts.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Excellent Outdoor Billboard Marketing UAE</h5>
                    <p>
                        A strong marketing campaign blends online as well as offline engagements. Outdoor advertisements direct traffic to your website, social media, and store. QR codes, hashtags, and interactive displays encourage consumers to take action instantly.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Seamless Integration with Digital Strategies</h5>
                    <p>
                        Unlike digital ads that can be skipped, outdoor advertising Dubai stays visible 24/7. Your brand maintains a constant presence, ensuring top-of-mind awareness among potential customers – whether day or night, your message continues working. Your message can appear on premium sites across Dubai's most influential commercial districts.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Converting High Traffic into Revenue</h5>
                    <p>
                        Research proves the impact of outdoor media campaigns Dubai on business growth. UAE residents notice outdoor advertisements during their daily commute. Your brand stays visible for over 18 hours every day. Digital displays allow you to refine your message based on real-time performance data.
                    </p>
                </div>  

                <div class="col-lg-6">
                    <h5>Best Outdoor Advertising Solutions GCC</h5>
                    <p>
                        Dubai's market extends beyond city limits. Best outdoor advertising solutions GCC ensure your brand reaches audiences across the Gulf region. Expanding your message beyond Dubai enhances credibility and market influence.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Outdoor Advertising that Delivers ROI</h5>
                    <p>
                        Every marketing investment must yield results. Outdoor advertising services UAE generate brand recall, customer engagement, and increased sales. Whether launching a new product or reinforcing brand positioning, well-placed ads drive measurable growth.
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

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Datamysite for Outdoor Advertising?</h4>
                    <br>
                    <ul>
                        <li>
                            <h5>Partner with DataMySite for Unmatched Visibility</h5>
                            <p>
                               With expertise in outdoor media campaigns Dubai, DataMySite helps businesses make an impact. From location selection to campaign execution, our approach maximises visibility and engagement. 
                            </p>
                            
                        </li>
                        <li>
                            <h5>Expert Location Selection for Maximum Reach</h5>
                            <p>
                               Choosing the right location is key to advertising success. DataMySite identifies prime areas in Dubai with high foot traffic and business activity. It ensures your brand captures the attention of customers to improve conversions.
                            </p>

                        </li>
                        <li>
                            <h5>Comprehensive Campaign Execution from Start to Finish</h5>
                            <p>
                               A well-planned campaign delivers results. DataMySite manages every aspect, from concept creation to final implementation. Our team will check the design and placement. We also monitor the performance to ensure your brand gets the exposure it deserves with a return on investment.
                            </p>
                            
                        </li>
                        <li>
                            <h5>Data-Driven Insights for Smarter Advertising</h5>
                            <p>
                               Success comes from informed decisions. DataMySite uses advanced analytics to monitor engagement and audience interaction. These insights allow us to refine strategies, optimise the placement, and maximise the effectiveness of your outdoor advertising efforts.
                                <br>
                                Your brand deserves recognition. Invest in outdoor advertising Dubai and reach your audience where they live and work. Contact DataMySite to secure your premium advertising space. Make your brand impossible to ignore.
                            </p>
                            
                        </li>
                    </ul>
                    
                    
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What is the minimum duration for an outdoor campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most outdoor placements require a minimum of 2 to 4 weeks, but we offer "Tactical Placements" for shorter events or product launches.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How do you ensure high visibility for my outdoor ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We select sites based on "Deceleration Zones"—areas where traffic slows down or pedestrians dwell—to ensure your ad is seen for more than just a split second.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are outdoor ads only for big brands with huge budgets?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Not at all. We offer hyper-local OOH options that allow smaller businesses to dominate a specific neighborhood or street at a fraction of the cost of a city-wide campaign.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What happens if my outdoor ad is vandalized or damaged?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We provide a maintenance guarantee. Any damage reported is addressed within 24–48 hours to ensure your brand image remains pristine.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Do you handle the government permits required for outdoor ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we manage the entire legal and permitting process with local authorities, so you don’t have to worry about compliance.</p>
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