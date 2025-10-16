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
                        <h2>Create Unforgettable Business Experiences</h2>
                        <h4>with Our Corporate Event Planning in Dubai</h4>
                        <br>
                        <p>
                            This is not about hosting another corporate event. It is about creating something people will remember. Let us talk if you want corporate event planning in Dubai that goes beyond logistics.
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
                    <h4>Corporate Event Marketing in Dubai: Making Each Moment Count</h4>
                    <p>
                        A great event does not happen by accident. It is planned and positioned for impact. We help you:
                    </p>
                    <ul>
                        <li><strong>Build Anticipation </strong>– We can develop anticipation through smart promotion and targeted outreach.</li>
                        <li><strong>Engage Your Audience </strong>– We engage your audience with powerful branding and immersive experiences.</li>
                        <li><strong>Extend the Conversation</strong> – This is because the best events do not end when the doors close.</li>
                    </ul>
                    <p>We help you turn a one-time event into a lasting business opportunity in this manner.</p>
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
                <div class="col-lg-4">
                    <h4>Why Corporate Event Planning in Dubai is Important? </h4>
                    <p>A conference room can’t replace real connections. Deals are built on trust. A good event is not about logistics; it is about impact for us. Here is why corporate event management in the UAE is important. </p>

                    <ul>
                        <li><strong>Your Brand Stands Out</strong> – Show the world who you are and what you stand for.</li>
                        <li><strong>Your Relationships Grow </strong>– Clients, partners, employees—bring them closer.</li>
                        <li><strong>Your Team Feels Valued</strong> – People don’t just work for a company. They belong to one.</li>
                        <li><strong>Your Business Moves Forward</strong> – Leads, sales, partnerships—events make things happen.</li>

                    </ul>

                    <p>That’s what great corporate event planning in Dubai is all about. Not just ticking boxes. Corporate event promotions in the UAE are about making real connections.</p>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image11.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-4">
                    <h4>The ROI of an Unforgettable Event</h4>
                    <p>A great event is not an expense. It is an investment. Here is how we make sure yours delivers:</p>

                    <ul>
                        <li><strong>We focus on strategy</strong> – Every event has a purpose. We make sure it delivers.</li>
                        <li><strong>We create real engagement</strong> – This is because if people don’t care, it doesn’t matter.</li>
                        <li><strong>We measure impact</strong> – From attendee feedback to real business results, we track what works.</li>
                        <li><strong>We make it seamless</strong> – We ensure you can focus on what matters: building connections.</li>
                    </ul>
                    <p>From corporate event marketing in Dubai to large-scale summits, we make sure your investment isn’t just seen. It’s felt.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>What We Do: Events That Feel Different</h4>
                    <p>Dubai is a city that doesn’t do “average.” Neither do we. We offer the following types of corporate event planning in Dubai. </p>

                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-710">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-710" data-aria-expanded="true" data-aria-controls="faqCollapse-710">
                                        <span class="badge">&nbsp;</span>Product Launches That Get People Talking
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-710" class="collapse show" aria-labelledby="faqHeading-710" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        You do not want people to see it when you are introducing something new. You want them to feel it. We design launches that create excitement, anticipation, and real engagement. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-711">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-711" data-aria-expanded="false" data-aria-controls="faqCollapse-711">
                                        <span class="badge">&nbsp;</span>Conferences & Seminars That People Actually Enjoy
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-711" class="collapse" aria-labelledby="faqHeading-711" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        No one remembers a boring conference. We make sure your corporate event is packed with energy and moments that hold attention.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-712">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-712" data-aria-expanded="false" data-aria-controls="faqCollapse-712">
                                        <span class="badge">&nbsp;</span>Team-Building Retreats to Bring People Together
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-712" class="collapse" aria-labelledby="faqHeading-712" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Teams are not built-in meetings. They’re built through shared experiences. We create retreats that inspire, challenge, and strengthen bonds in a way no email ever could.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-713">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-713" data-aria-expanded="false" data-aria-controls="faqCollapse-713">
                                        <span class="badge">&nbsp;</span>Award Ceremonies That Mean Something
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-713" class="collapse" aria-labelledby="faqHeading-713" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Recognition matters during business event marketing in Dubai. It is a message when done right. We create special award nights for your brand.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-714">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-714" data-aria-expanded="false" data-aria-controls="faqCollapse-714">
                                        <span class="badge">&nbsp;</span>Client Engagement Events That Deepen Trust
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-714" class="collapse" aria-labelledby="faqHeading-714" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Your clients aren’t just numbers. They’re relationships. We design elegant, meaningful experiences that show them just how much they matter. That’s the power of corporate event management in the UAE. Every detail is handled, every moment feels intentional, and every guest leaves feeling something real.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

          <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image12.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8 vertical-center">
                    <h4>Let Us Make Something Incredible</h4>
                    <p>
                        Some events come and go. Others? They stay with you. They spark conversations. They build relationships. They shape reputations. That’s what we do.
                        <br>
                        We do not plan corporate events—we create experiences that mean something. Events that feel effortless but leave a lasting mark. We make sure the event matters, whether it is a product launch or a retreat that brings teams closer.
                        This is because, in business, moments matter. Let us make yours count. Contact us today for corporate event planning in Dubai.
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
                                        <span class="badge">&nbsp;</span>How Do You Make Sure Our Event Reflects Our Brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We work closely with you to make sure every detail—tone, visuals, experience—aligns with who you are.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>Do You Handle Virtual and Hybrid Events?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We create experiences that feel just as engaging no matter where attendees are. Our team handles virtual as well as hybrid events. </p>
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