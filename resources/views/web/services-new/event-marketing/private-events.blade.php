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
                        <h2>Get the Best Private Event Marketing</h2>
                        <h4>in the UAE from DataMySite</h4>
                        <br>
                        <p>
                            Some moments change everything. A handshake at the right dinner. A conversation in the right room. A shared experience that turns a lead into a loyal partner. That’s the power of private event marketing in the UAE.
                            Business relationships don’t happen over cold emails. They occur at exclusive gatherings where high-level decision-makers meet, talk, and build trust in ways that no online campaign ever could. For the best private event advertising in Dubai, get in touch with us today.
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

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Private Party Planning in the UAE: Mixing Business with Unforgettable Experiences</h4>
                    <p>Not all business happens in boardrooms. Some of the most powerful deals are made at private gatherings designed to feel like an exclusive escape. That is the magic of our private party planning in the UAE.<br>
                    Think about it: Would you rather sit through another corporate meeting or make connections at a luxury dinner under the stars? This is about turning business into an experience people genuinely want to be part of. We specialise in organising the following private events. </p>

                    <ul>
                        <li><strong>Luxury Product Launches</strong> – Make a statement with a setting that elevates your brand.</li>
                        <li><strong>High-End Networking Dinners</strong> – This is where conversations flow as smoothly as the wine.</li>
                        <li><strong>Exclusive Appreciation Events</strong> – Reward top clients and partners with an experience they won’t forget.</li>
                        <li><strong>VIP Retreats & Getaways</strong> – It is business disguised as leisure. This is the best kind of networking.</li>
                    </ul>
                </div>
                <div class="col-lg-5 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/AsFfeWdyqHg?si=CcxQxksrRT5dh4wp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            <div class="row gy-4 first-row">
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image9.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8 vertical-center">
                    <h4>Private Event Advertising in Dubai: Making Sure the Right People Show Up</h4>
                    <p>An exclusive event only works if the right people are in the room. That is where private event advertising in Dubai comes in. It is not about blasting invites to everyone. It is about carefully curating an audience that brings real value. Here are the ways we get the right eyes on your event.</p>

                    <ul>
                        <li><strong>Handpicked Invitations</strong> – Not all guests are created equal. Your event is designed for high-value individuals. We ensure they receive an invite that speaks to their status.</li>
                        <li><strong>Strategic Collaborations</strong> – Partnering with luxury brands, media platforms, and high-profile influencers boosts credibility and extends your reach.</li>
                        <li><strong>Precision Targeting</strong> – Forget broad, generic promotions. We use elite-level digital strategies to ensure your invitation reaches the people you want in the room.</li>
                        <li><strong>Subtle Hype, Big Impact</strong> – The best private events are not over-advertised. They are talked about. Our private event management in Dubai involves creating a sense of exclusivity that makes the right people eager to attend.</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Private Event Marketing in the UAE Works?</h4>
                    <p>Dubai is built on exclusivity. The way you present your brand and the connections you have matters. Private event advertising in Dubai ensures you're not just another company sending emails and running ads—you’re the brand that gets people talking. Here is what happens when you do it right. </p>

                    <ul>
                        <li><strong>You Attract the Right People</strong> – You will not attract any crowd. You will attract the decision-makers who matter. The ones who can change the course of your business.</li>
                        <li><strong>You Create Emotional Connections</strong> – People remember how you make them feel. A luxury setting and a carefully curated guest list create an emotional bond with your brand.</li>
                        <li><strong>You Cut through the Noise</strong> – In a city where everyone is trying to be heard, private events give you an intimate stage where your message is not received—it is felt.</li>
                        <li><strong>You Build Trust That Converts</strong> – A conversation over dinner does more for your sales pipeline than months of advertising. People buy from you when they trust you. </li>

                    </ul>
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

          <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image10.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8 vertical-center">
                    <h4>Connect with Us Today</h4>
                    <p>
                        Private event marketing in the UAE is not an option—it is necessary if your brand is serious about influence and conversions. This is because the right event is not another night on the calendar. It is a moment that changes everything. Let our team make it happen.
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

        <section id="service-cards" class="blog-section section  striped-section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>What Types of Businesses Benefit from Private Event Marketing in the UAE?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Any business looking to engage high-net-worth individuals, executives, or investors can benefit from our private event marketing in the UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>How Do I Ensure My Event Stands Out?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Personalisation and attention to detail can help you make your event stand out. Each element should reflect your brand’s identity and make attendees feel like VIPs.</p>
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