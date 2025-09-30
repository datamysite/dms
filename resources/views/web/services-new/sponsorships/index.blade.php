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
                        <h2>The Impact of Sponsorships</h2>
                        <br>
                        <p>
                            Brand visibility, together with credibility enhancement, along with targeted audience engagement, are all three traits that sponsorships can efficiently deliver. Datamysite provides sponsorship opportunities Dubai, which fulfil your brand's vision and strategic goals.
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Sponsorship Opportunities Dubai for Businesses</h4>
                    <p>
                        The business centre of Dubai provides multiple opportunities to sponsors who wish to expand their market reach. Sponsorship programs provide organisations with a simple approach to reach potential customers and build their brand visibility in various settings, from exhibitions to social initiatives and corporate events.
                        <br>
                        Our team takes care of your brand visibility by connecting you to events as well as influencers and community projects to achieve maximum exposure.
                    </p>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe spons-iframe" src="https://www.youtube.com/embed/re2nXszkJcI?si=9lATrbRekh8VvaCz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                                <div id="faqCollapse-{{$s}}" class="collapse show" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
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

            <div class="row gy-4 first-row">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image15.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>Our Sponsorship Services</h4>
                    <p>As a company we offer multiple sponsorship programs designed for every marketing requirement.</p>
                    <ul>
                        <li><strong>Event Sponsorships</strong>: Businesses gain greater brand visibility by linking up with prestigious events.</li>
                        <li><strong>Media Sponsorships</strong>: Collaborating with media platforms to showcase your brand.</li>
                        <li><strong>Community Sponsorships</strong>: This involves backing neighbourhood programs which develop good relations and brand appreciation among residents.</li>
                       <li> <strong>Influencer Sponsorships</strong>: Leveraging the reach of key influencers in your industry.</li>
                       <li> <strong>Corporate Sponsorships</strong>: Your business can expand its reach through Corporate Sponsorships by matching up with respected companies.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>TYPES OF SPONSORSHIPS</h4>
                    <p>Here’s what we offer:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Corporate Sponsorships UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse show" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Through corporate sponsorships, UAE organisations enable businesses to link up with respected organisations while boosting their brand reliability factor. Through these strategic alliances, businesses achieve exposure across expert industry-based conferences, meetings, and networking functions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Event Sponsorships Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The sponsorship of events in Dubai presents organisations with dedicated opportunities to connect directly with their desired market sector. Businesses can capitalise on their unique sponsorship potential through trade shows mixed with sports tournaments and music festivals, which deliver marketing tools ranging from interactive site exhibits to digital communication and face-to-face audience engagement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-213">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-213" data-aria-expanded="false" data-aria-controls="faqCollapse-213">
                                        <span class="badge">&nbsp;</span>Brand Sponsorships UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-213" class="collapse" aria-labelledby="faqHeading-213" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Brand sponsorships UAE facilitates partnerships between companies and appropriate entities to build matching brand images. Companies should use their resources to support influencers while also backing media outlets and major industry conferences which work to increase brand presence among customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-214">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-214" data-aria-expanded="false" data-aria-controls="faqCollapse-214">
                                        <span class="badge">&nbsp;</span>Sponsorship Activation Services
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-214" class="collapse" aria-labelledby="faqHeading-214" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The Sponsorship Activation Services Dubai allows businesses to achieve maximum return from their sponsorship investments. Strategic placements of the brand and digital engagement solutions with experiential marketing help build interactive moments that stick with target audiences..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-215">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-215" data-aria-expanded="false" data-aria-controls="faqCollapse-215">
                                        <span class="badge">&nbsp;</span>Sponsorship Marketing UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-215" class="collapse" aria-labelledby="faqHeading-215" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The sponsorship marketing model UAE allows companies to implement sponsorships within their unified marketing approaches. Businesses expand their brand visibility along with increasing audience interaction when they use sponsorships across digital advertising, social media platforms, and PR activities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image16.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section striped-section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image17.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>Benefits of Sponsorship Opportunities Dubai</h4>
                    <ul>
                        <li><strong>Brand Exposure</strong>: Sponsorships enable your brand to appear frequently in the media,, so you achieve broader audience visibility.</li>
                        <li><strong>Authentic Connections</strong>: Recognisable affiliations allow businesses to form genuine associations with consumers who share their brand principles.</li>
                        <li><strong>Competitive Edge</strong>: A well-placed sponsorship grants businesses superior market positioning when they work with important industry players.</li>
                        <li><strong>Community Engagement</strong>: The support of community events, along with fundamental initiatives, allows brands to improve their public reputation and develop strong connections with their community.</li>
                        <li><strong>Increased Sales</strong>: Your brand recognition from sponsorships leads to enhanced sales performance through increased customer acquisition numbers.</li>
                    </ul>
                    

                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Datamysite for Sponsorships?</h4>
                    <p>
                       Our team finds the sponsorship possibilities that serve your business goals in the sponsorship opportunities Dubai sector. Sponsorship activities help businesses gain better visibility within their choice markets. The company designs individual strategies for every sponsorship plan to maximise its effectiveness. We work with the most respected event creators alongside influential people and prominent media venues.
                    
                        <br><br>
                    
                        Are you ready to explore sponsorship opportunities Dubai for your brand?
                        <br>
                        Contact us today! Call us at <a href="tel:971525287259"><strong>+971 525 287 259</strong></a> or drop an email at <a href="mailto:contact@datamysite.com"><strong>contact@datamysite.com</strong></a>.
                    </p>
                    
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
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>When choosing the proper business sponsorship, which selection criteria should I follow?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The analysis of your target market allows our experts to recommend sponsorship opportunities Dubai which will best fulfil your business aims.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What type of events does Datamysite partner with?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We partner with trade shows, business conferences, sports events, cultural festivals, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can small businesses obtain benefits through sponsorship engagements?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Small businesses can effectively raise their visibility along with building credibility through sponsorships.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What are the anticipated financial returns on sponsorships?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The return on investment depends on what type of sponsorship has been chosen together with the chosen activation strategy. We concentrate on achieving quantifiable results while monitoring our accomplishments successfully.</p>
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