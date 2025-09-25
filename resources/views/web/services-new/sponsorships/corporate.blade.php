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
                        <h2>The Impact of Corporate Sponsorships</h2>
                        <br>
                        <p>
                            Entrepreneurial companies within Dubai collaborate with events and organisations through Corporate Sponsorships Dubai to increase their brand exposure while achieving market recognition. Organisations that assist events provide money in addition to providing tangible help for marketing benefits that include public exposure and both public address chances and attendee listing data.
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

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    
                </div>
                <div class="col-lg-6">
                    <h4>Why Choose Corporate Sponsorships UAE?</h4>
                    <p>
                        Any company that selects corporate sponsorships UAE gains access to a specific business audience within this growing market sector. The position of Dubai as a worldwide trade centre and entertainment complex with technological prowess enables sponsors to improve brand credibility as they gain substantial investment returns. Datamysite excels at finding perfect sponsorship opportunities that match specific business targets for their clients. Sponsorship deals enable companies to fortify their market position along with creating enduring business partnerships. At Datamysite, we offer such services and much more.
                    </p>

                    <iframe class="service-iframe cop-iframe" src="https://www.youtube.com/embed/re2nXszkJcI?si=9lATrbRekh8VvaCz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="faq " id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-71">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-71" data-aria-expanded="true" data-aria-controls="faqCollapse-71">
                                            <span class="badge">&nbsp;</span> Types of Corporate Sponsorships Dubai
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-71" class="collapse show" aria-labelledby="faqHeading-71" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            Here are the common types of business sponsorships UAE and Dubai you can avail of.
                                            <ul>
                                                <li><strong>Financial Sponsorship</strong>: This requires businesses to provide monetary funds which enables them to gain benefits such as VIP access and promotional promotion.</li>
                                                <li><strong>In-Kind Sponsorship</strong>: Instead of financial contributions, businesses present items or operational solutions as forms of sponsorship. Hotel businesses give event accommodations for brand promotions of their establishment.</li>
                                                <li><strong>Media Sponsorship</strong>: Corporations enable event promotion by providing no-cost and reduced-cost media advertising services.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-72">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-72" data-aria-expanded="true" data-aria-controls="faqCollapse-72">
                                            <span class="badge">&nbsp;</span> Our Brand Sponsorships Dubai Services
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-72" class="collapse" aria-labelledby="faqHeading-72" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            Through our brand sponsorships, Dubai Solutions Datamysite assists businesses in achieving the maximum return on their sponsorship funds. Our services include:
                                            <ul>
                                                <li>Conference Sponsorships: The act of sponsoring major conferences delivers industry acknowledgement to brands.</li>
                                               <li> Event Sponsorships: Align your brand with high-profile events.</li>
                                                <li>CSR Sponsorships: Enhance corporate social responsibility initiatives.</li>
                                                <li>Trade Show Sponsorships: Local trade shows, when sponsored, allow businesses to boost their brand visibility in specific industrial markets.</li>
                                                <li>Sports and Community Sponsorships: The strategy of Sports and Community Sponsorships allows businesses to connect with audience members through programs that support sports teams along with local events.</li>
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

            <div class="row gy-4 first-row">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>Benefits of Business Sponsorships UAE</h4>
                    <p>Business sponsorships in UAE will help organisations achieve:</p>
                    <ul>
                        <li><strong>Brand Awareness</strong>: Business Sponsorships UAE helps builders become more visible through events and media platforms.</li>
                        <li><strong>Lead Generation</strong>: The sponsor can reach specific target groups, which helps advance their business operations.</li>
                        <li><strong>Industry Credibility</strong>: Establish your company as an industry leader.</li>
                        <li><strong>Customer Loyalty</strong>: Build trust and goodwill among potential clients.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>How to Apply for Event Corporate Sponsorship Dubai?</h4>
                    <p>These directions explain how to attain maximum sponsorship value:</p>
                    <ul>
                        <li>Set specific goals.</li>
                        <li>Search for sponsorship opportunities which share your company values by conducting market research.</li>
                        <li>Collaborate with the event organisers to create personalised sponsorship possibilities.</li>
                    </ul>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Datamysite for Corporate Partnership UAE?</h4>
                    <p>
                       Datamysite launched its operations in Dubai in 2021 to become the leading marketing agency that delivers digital and outdoor (OOH) media strategies to its clients. Using knowledge-based data, we help our clients obtain the best corporate partnership UAE opportunities through focused market insights. Our expertise includes:
                    </p>
                        <ul>
                            <li><strong>Digital Media Buying</strong>: Optimising ad placements for maximum impact.</li>
                            <li><strong>OOH Media Buying</strong>: Enhancing brand visibility across premium outdoor locations.</li>
                            <li><strong>Media and PR</strong>: Media Relations, along with Public Relations, develops intriguing stories for securing exposure across elite media networks.</li>
                        </ul>
                    <p>
                        <a href="{{route('contact')}}"><strong>Contact</strong></a> us today to find the best sponsorship opportunities for your brand.
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
                                        <span class="badge">&nbsp;</span>How does datamysite find the right sponsorships for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team uses your established goals, audience understanding and brand principles for discovering sponsorship options that best match your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What form of return on investment (ROI) should I expect to receive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>When evaluating ROI from sponsorships, one must consider the specific event and strategy at work because it creates opportunities for enhanced brand exposure and client participation alongside new customer acquisition.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are there sponsorship opportunities that small businesses could achieve?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our company offers various sponsorship packages for businesses at different budget levels and target objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Do you handle sponsorship activation?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The company handles complete sponsorship activation that includes branding services together with audience engagement protocols.</p>
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