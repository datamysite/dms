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
                        <h2>Maximise the Impact of Your Brand</h2>
                        <h4>with Event Marketing in Dubai</h4>
                        <br>
                        <p>
                            Visibility is important in the competitive market of Dubai. Event marketing in Dubai goes beyond hosting gatherings; it creates memorable experiences. From corporate events to product launches, effective campaigns drive engagement and enhance brand identity.
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
                    <h4>Why Invest in Event Marketing in Dubai?</h4>
                    <p>
                        Dubai is a bustling business epicentre of innovation as well as connection. Corporate gatherings provide exceptional opportunities to network with influential professionals. Our strategic event planning transforms standard meetings into powerful marketing instruments.
                    </p>
                </div>
                <div class="col-lg-5">
                    <iframe class="service-iframe event-iframe" src="https://www.youtube.com/embed/AsFfeWdyqHg?si=CcxQxksrRT5dh4wp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-7">
                    <p>Meticulously crafted corporate event marketing in Dubai delivers remarkable outcomes:</p>
                    <ul>
                        <li><strong>Brand Awareness</strong> – Create compelling experiences that resonate with attendees and spark conversations.</li>
                        <li><strong>Lead Generation</strong> – Attract key decision-makers and potential investors through targeted networking platforms.</li>
                        <li><strong>Customer Engagement</strong> – Design interactive sessions fostering meaningful business relationships and trust.</li>
                        <li><strong>Return on Investment</strong> – Develop precise marketing approaches that convert connections into sustainable partnerships.</li>
                    </ul>
                    <p>At Data My Site, we design impactful event strategies tailored to your audience. Our expertise makes sure your event captures attention as well as achieves measurable results.</p>
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
                <div class="col-lg-12 mt-0">
                    
                    <p>
                        We believe that successful corporate events transcend traditional networking. They represent strategic platforms for establishing market presence, building credibility, and expanding professional horizons in Dubai's dynamic business landscape.
                        
                    </p>
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
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image8.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8 vertical-center">
                    <h4>Our Comprehensive Event Marketing in Dubai Services</h4>
                    <p>
                        At Data My Site, we take care of everything—from planning to promotion and post-event engagement. Our goal is to ensure your event isn’t just attended but remembered.
                    </p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-710">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-710" data-aria-expanded="true" data-aria-controls="faqCollapse-710">
                                        <span class="badge">&nbsp;</span>Event Strategy & Planning
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-710" class="collapse " aria-labelledby="faqHeading-710" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A successful event marketing in Dubai starts with a solid plan. We align your event goals with a tailored marketing strategy to ensure maximum impact. This includes:
                                        <ul>
                                            <li>Identifying your target audience</li>
                                            <li>Crafting a compelling event message</li>
                                            <li>Choosing an effective marketing channel</li>
                                        </ul>
                                        Our team ensures your event is positioned for success. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-711">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-711" data-aria-expanded="false" data-aria-controls="faqCollapse-711">
                                        <span class="badge">&nbsp;</span>Event Promotion Services in Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-711" class="collapse" aria-labelledby="faqHeading-711" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A great event means nothing if no one knows about it. That’s where our event promotion services in Dubai come in. We use multiple marketing channels like:
                                        <ul>
                                            <li><strong>Social Media Campaigns</strong> – Engage your audience through interactive.</li>
                                            <li><strong>Email Marketing</strong> – Reach important stakeholders with exclusive event details.</li>
                                            <li><strong>Digital Advertising</strong> – Utilise targeted ads to drive registrations.</li>
                                            <li><strong>PR & Media Outreach</strong> – Our strategic media approach amplifies your event's visibility across targeted channels. We craft compelling narratives that capture journalists' attention.</li>
                                        </ul>
                                        Your message will resonate with precision, attracting significant media interest and establishing a powerful public presence. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-712">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-712" data-aria-expanded="false" data-aria-controls="faqCollapse-712">
                                        <span class="badge">&nbsp;</span>Event Branding in Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-712" class="collapse" aria-labelledby="faqHeading-712" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        A strong brand presence makes all the difference. Our event branding in Dubai services focuses on creating a seamless, recognisable identity across all event materials. We handle:
                                        <ul>
                                            <li>Custom event logos, banners, and signage</li>
                                            <li>Branded giveaways and promotional materials</li>
                                            <li>Unique event design to enhance attendee experience</li>
                                        </ul>
                                        Your brand will leave an unforgettable mark from the entrance to the final handshake.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-713">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-713" data-aria-expanded="false" data-aria-controls="faqCollapse-713">
                                        <span class="badge">&nbsp;</span>Post-Event Marketing & Engagement
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-713" class="collapse" aria-labelledby="faqHeading-713" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        An event doesn’t end when the last guest leaves. We help maintain momentum with post-event strategies like:
                                        <ul>
                                            <li><strong>Follow-up Campaigns</strong> – Keep attendees engaged through emails, surveys, and exclusive offers.</li>
                                            <li><strong>Social Media Highlights</strong> – Recap key moments to sustain online buzz.</li>
                                            <li><strong>Lead Nurturing</strong> – Convert event-generated leads into long-term business relationships.</li>
                                        </ul>
                                        By continuing the conversation, we ensure that your event’s success extends far beyond a single day.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>

      
        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Data My Site?</h4>
                    <p>Dubai's event landscape demands a sophisticated marketing partner with exceptional local insights. Our approach to event marketing in Dubai sets us apart in the competitive market.</p>

                    <ul>
                        <li><strong>Tailored Strategies</strong> – We craft bespoke campaigns that meticulously align with your unique brand objectives and vision.</li>
                        <li><strong>Extensive Local Knowledge</strong> – Understanding Dubai's intricate corporate culture enables precise audience targeting and meaningful connections.</li>
                        <li><strong>Data-Driven Results</strong> – Comprehensive performance tracking transforms marketing investments into measurable business growth and strategic opportunities.</li>

                    </ul>

                    <p>Our Dubai event marketing expertise delivers more than standard promotional services. We provide strategic partnerships that elevate your corporate presence and create powerful networking platforms.<br><br>
                    Businesses seeking a results-focused partner will discover a dedicated team at Data My Site committed to driving exceptional outcomes in Dubai's dynamic market. If you’re looking for a Dubai event marketing agency that prioritises results, contact us today.</p>
                    
                    
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
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>What Types of Events Do You Specialise In?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We organise innovative product launches as well as dynamic trade shows. You can also count on us for strategic networking sessions and comprehensive industry expos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>How Do You Measure the Success of the Event Marketing Campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We implement analytical frameworks to assess the effectiveness of a campaign. Our comprehensive assessment examines critical performance metrics.</p>
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