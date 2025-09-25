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
                        <h2>The impact of PR coverage with Forbes</h2>
                        <br>
                        <p>Securement of Forbes magazine coverage transforms your business operations in today's competitive marketplace. A Forbes feature provides your brand with both credibility enhancement and demonstrates access to a wide influential audience through its global profile and its relations with industry leaders. At datamysite, your trusted Forbes PR agency Dubai, we ensure that your business gets the exposure that significantly increases when Forbes publishes content about your organisation.</p>
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

                <div class="col-lg-6 vertical-center">
                    <h4>Why Forbes?</h4>
                    <p>
                        The Forbes name stands for business mastery while promoting progressive enterprise practices along with entrepreneurship. A feature with us, your Forbes PR agency Dubai, not only enhances your brand's reputation but also positions it among the world's top-tier companies. The online platform Forbes provides exceptional business information and serves as the top destination for readers seeking corporate news and business trends.
                        <br><br>
                        Your brand benefits from linking with Forbes because it provides access to a well-known platform that features top industry leaders and forward-thinking enterprises throughout the world. The powerful business media presence of Forbes serves as an essential platform for companies that aim to increase their brand reputation. The coverage at Forbes with a prominent Forbes PR agency, Dubai, like ours, delivers exposure through visible public relations opportunities, which simultaneously allows businesses to reach their target audience.


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
                    <h4>What We Offer with Our Forbes PR Agency Dubai Services</h4>
                    <p>At datamysite, we help businesses like yours gain the prestigious visibility they deserve by leveraging the power of Forbes PR agency Dubai. Our company provides two main services to assist businesses in obtaining prominent PR exposure on the Forbes platform and additional media outlets.</p>
                </div>
                <div class="col-lg-7">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-51">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-51" data-aria-expanded="true" data-aria-controls="faqCollapse-51">
                                        <span class="badge">&nbsp;</span>Profile Features
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-51" class="collapse show" aria-labelledby="faqHeading-51" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The Forbes listings become available through our assistance in presenting your business accomplishments with your leadership narrative and market effect. You and our team work together to develop compelling content that Forbes editors know and that their worldwide audience responds to.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-52">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-52" data-aria-expanded="false" data-aria-controls="faqCollapse-52">
                                        <span class="badge">&nbsp;</span>Thought Leadership Articles
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-52" class="collapse" aria-labelledby="faqHeading-52" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Publish remarkable opinion articles with expert analysis to establish your position as an authority through Forbes magazine. Thinking articles serve as a direct communication channel that enables you to share both your industry insights and your specialised knowledge together with distinctive market perspectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-53">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-53" data-aria-expanded="false" data-aria-controls="faqCollapse-53">
                                        <span class="badge">&nbsp;</span>Product or Service Spotlights
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-53" class="collapse" aria-labelledby="faqHeading-53" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Place your products or services as main focal points in Forbes niche industry features and specific sections. Our content writing expertise allows you to develop purpose-built promotional texts that showcase your products or services alongside their market significance and effects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-54">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-54" data-aria-expanded="false" data-aria-controls="faqCollapse-54">
                                        <span class="badge">&nbsp;</span>Strategic Press Releases and Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-54" class="collapse" aria-labelledby="faqHeading-54" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The team at datamysite understands how to create press releases that interest Forbes, which ranks among the top publications. With Forbes press release campaigns, we ensure your brand message is communicated effectively to key audiences, driving awareness and engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-55">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-55" data-aria-expanded="false" data-aria-controls="faqCollapse-55">
                                        <span class="badge">&nbsp;</span>Corporate PR in Forbes Dubai
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-55" class="collapse" aria-labelledby="faqHeading-55" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your business must create distinctive qualities to succeed in the competitive Dubai market. Through our extensive connections with prominent PR agencies, we help your company achieve important coverage in Forbes, which establishes your position as a dominating force in UAE business operations. Corporate PR in Forbes Dubai is an essential part of our PR strategy, helping you gain recognition among decision-makers, influencers, and potential clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-56">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-56" data-aria-expanded="false" data-aria-controls="faqCollapse-56">
                                        <span class="badge">&nbsp;</span>Brand Promotions in Forbes UAE
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-56" class="collapse" aria-labelledby="faqHeading-56" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Datamysite functions as an industry-leading PR agency that provides Brand promotions in Forbes UAE services to its business clients. Brand Promotions in Forbes UAE provide exposure that showcases company growth alongside future direction toward high-profile audiences, enabling the elevation of your brand. Your brand positioning in Forbes UAE creates opportunities for business leader interactions as well as investor network access throughout the region.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>  
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-5">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7">
                    <h4>Benefits of Forbes Coverage</h4>
                    <ul>
                        <li>Your business gains expertise and credibility through Forbes media coverage, which helps establish it as a respected authority in your field. Your expert knowledge will reach audiences worldwide as you develop leadership within your industry through their recognition.</li>
                        <li>The prestigious platform of Forbes possesses worldwide recognition because of its global authority. The international recognition you get through your Forbes advertising services UAE enables your business to connect with worldwide clients and partners.</li>
                       <li> The audience of Forbes consists primarily of wealthy individuals from high-income groups, influential business leaders, and financial investors. A publication in Forbes captures the attention of prospective business partners and clients, along with investors whose expertise can help your enterprise reach new heights.</li>
                        <li>Your business gains better market exposure when Forbes publishes your feature because it stimulates website traffic and enhances brand awareness. The increased publicity creates possibilities that range from profitable business collaborations to widespread press attention, along with multiple other chances.</li>
                    </ul>

                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>How to Secure PR Coverage with Forbes</h4>
                    <ul>
                        <li><strong>Craft Compelling Pitches</strong>: Getting your business noticed by Forbes requires a strong pitch that demonstrates the significance of your narrative.</li>
                        <li><strong>Build Relationships with Journalists</strong>: Journalists and editors can be engaged by following their work while providing well-thought-out research.</li>
                        <li><strong>Be Consistent</strong>: Our client service recommends constant pitching of appropriate material to targeted media outlets.</li>
                    </ul>
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
                <div class="col-lg-7">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>Does Forbes magazine provide appropriate coverage for small business clients?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Through datamysite Forbes PR agency Dubai services, small businesses can obtain valuable Forbes media features that establish global platforms on which to display their innovation and unique products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>Can we suggest specific topics for coverage?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Our collaborative work process helps generate topics suitable for Forbes' editorial framework. Your business story receives enhancement from our Forbes PR agency Dubai team, which tailors the presentation to match what your target audience connects with.</p>
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