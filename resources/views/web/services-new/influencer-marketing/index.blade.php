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
                        <h2>About Influencer Marketing</h2>
                        <br>
                        <p>
                            Due to the digital world of advertising, brands need more than just traditional advertising to secure their required presence today.
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
                    <h4>Influencer Marketing Dubai</h4>
                    <p>
                        Influencer marketing in Dubai has rocked the boat by creating grounds for credibility and brand awareness and conversions altogether. Done correctly, Dubai social media influencers can help businesses blast their ideas into a large targeted audience.
                        <br>
                        DataMySite operates with one goal: to build, launch and execute high-impact influencer campaigns that are effective and measurable. Be it influencers in Dubai for your product launch, brand awareness, or direct conversions; we take a data-driven approach to maximise your ROI.
                    </p>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe inf-iframe" src="https://www.youtube.com/embed/6VvmZY1IGoM?si=VClP2fwz2ZVf-LEQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                                <div id="faqCollapse-{{$s}}" class="collapse  {{$s == 0 ? 'show' : ''}}" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
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

        <section id="service-cards" class="blog-section striped-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>DataMySite Influencer Marketing Services</h4>
                    <p>At DataMySite, we provide complete influencer marketing solutions tailored to suit your brand's objectives. Whether you are a luxury brand, a technology startup, or a lifestyle business, we can find you influencers in Dubai who meet your niche.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-211">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-211" data-aria-expanded="false" data-aria-controls="faqCollapse-211">
                                        <span class="badge">&nbsp;</span>Identify Influencers That Are the Right Fit for Your Brand
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-211" class="collapse show" aria-labelledby="faqHeading-211" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The relevance and choice of influencers are crucial in deciding a digital campaign's favourable outcome. We closely evaluate:
                                    </p>
                                        <ul>
                                            <li>Audience demographics and relevance with the brand;</li>
                                            <li>Engagement rates and authenticity of the followers;</li>
                                            <li>Style of content and brand affinity.</li>
                                        </ul>
                                    <p>
                                        From luxury influencers to micro-creators, we optimise for you to connect with the most compelling Dubai social media influencers to build brand credibility and reach.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-212">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-212" data-aria-expanded="false" data-aria-controls="faqCollapse-212">
                                        <span class="badge">&nbsp;</span>Influencer Management: Seamless Execution for Maximum Impact
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-212" class="collapse" aria-labelledby="faqHeading-212" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Managing influencer partnerships can be time-consuming. As the best influencer marketing agency Dubai, we handle everything, including:
                                    </p>
                                        <ul>
                                            <li>Negotiating contracts and ensuring cost-effective partnerships</li>
                                            <li>Coordinating campaign execution and brand messaging consistency</li>
                                            <li>Maintaining long-term relationships with influencers for future collaborations</li>
                                        </ul>
                                    <p>
                                        Our team ensures that when you hire influencers in Dubai, you get maximum brand visibility and ROI.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-213">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-213" data-aria-expanded="false" data-aria-controls="faqCollapse-213">
                                        <span class="badge">&nbsp;</span>Performance Tracking & Reporting: Data-Driven Campaign Success
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-213" class="collapse" aria-labelledby="faqHeading-213" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Tracking results is essential to optimise our approaches toward influencer marketing efforts. The following tracking is active:
                                    </p>
                                        <ul>
                                            <li>Engagement ranging from likes, shares to comments</li>
                                            <li>Website traffic generated by influencer campaigns and the lead-generation process</li>
                                            <li>Sales conversions engineered by influencers' partnerships</li>
                                        </ul>
                                    <p>
                                        Through in-depth reports, we revise strategies to ensure that every campaign yields high ROI. Dubai influencer marketing is where we thrive in executing performance-based campaigns that align with business growth objectives.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-214">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-214" data-aria-expanded="false" data-aria-controls="faqCollapse-214">
                                        <span class="badge">&nbsp;</span>Campaign Strategy: Maximising ROI with Targeted Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-214" class="collapse" aria-labelledby="faqHeading-214" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        An influencer marketing campaign should do more than just gain visibility—it should drive tangible business results. Our team crafts:
                                    </p>
                                        <ul>
                                            <li>Data-backed campaign strategies tailored to your audience</li>
                                            <li>Creative influencer content that enhances brand storytelling</li>
                                            <li>Engaging formats like product reviews, giveaways, and brand collaborations</li>
                                        </ul>
                                    <p>
                                        By leveraging influencer marketing Dubai, we ensure your campaigns are optimised for engagement, reach, and high conversion rates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image31.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>

         <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image32.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7 vertical-center">
                    <h4>Impact of “Influencer Marketing Dubai </h4>
                    <p>Now, Dubai is a melting pot of luxury, innovation, and business growth, which makes it an effortless place for influencer-driven campaigns. Thus, it is no wonder that consumers trust recommendations from influencers over traditional paid ads. Thus, some of the distinct advantages that brands get to enjoy while working with social media influencers in Dubai are as follows:</p>
                    <ul>
                        <li>Higher engagement and brand credibility;</li>
                        <li>Increased web traffic, combined with lead generation;</li>
                        <li>Enhanced customer trust and loyalty;</li>
                        <li>Increased sales and conversions through targeted influencer strategies.</li>
                    </ul>
                    <p>Your brand can effortlessly gain authentic connections with a premium audience through the best influencer marketing agency Dubai.</p>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section striped-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Why DataMySite is the Ideal Influencer Marketing Agency in Dubai</h4>
                            <br>
                            <div class="faq " id="accordion">
                                <div class="card">
                                    <div class="card-header" id="faqHeading-311">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-311" data-aria-expanded="false" data-aria-controls="faqCollapse-311">
                                                <span class="badge">&nbsp;</span>Local Market Expertise
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-311" class="collapse show" aria-labelledby="faqHeading-311" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                The consumer market in Dubai is unique, necessitating a very localised approach. Pulling from our wide experience, we curate a list of explorable Dubai social media influencers who are very much aligned with your brand's luxury, lifestyle, or corporate appeal. We know exactly what works and what doesn't with the local population, thereby retaining the reputation of true brand storytelling.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-312">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-312" data-aria-expanded="false" data-aria-controls="faqCollapse-312">
                                                <span class="badge">&nbsp;</span>Genuine Influencer Partnerships
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-312" class="collapse" aria-labelledby="faqHeading-312" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                We concentrate on long-term, genuine partnerships. Our influencer strategy fosters authentic brand advocacy, setting your brand apart in influencer marketing Dubai.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-313">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-313" data-aria-expanded="false" data-aria-controls="faqCollapse-313">
                                                <span class="badge">&nbsp;</span>ROI-Driven Campaigns for Maximum Impact
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-313" class="collapse" aria-labelledby="faqHeading-313" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                Every campaign is built on data analytics and performance tracking. We guarantee your marketing dollars drive real engagement, lead generation, and revenue for all collaborating influencers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-314">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-314" data-aria-expanded="false" data-aria-controls="faqCollapse-314">
                                                <span class="badge">&nbsp;</span>End-to-end management of the Campaign
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-314" class="collapse" aria-labelledby="faqHeading-314" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                We make it easy to find the right Dubai social media influencers for your brand by taking care of everything from sourcing to execution and reporting. A dedicated account manager provides excellent service at all points, relating to the entire collaboration cycle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 vertical-center mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" class="side-image" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image22.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>How to Contact Influencers in Dubai with DataMySite?</h4>
                    <p>Just because finding the right Dubai social media influencers for your brand has to be an arduous task doesn't mean it has to be like that; we keep it seamless:</p>
                    <ul>
                        <li>Consultation-room and strategy-building: an analysis of your goals, a review of your key audience, and outcomes of the campaign.</li>
                        <li>You know them by heart by now: These are your influencers to shortlist according to their level of engagement, audience fit, and quality of content.</li>
                        <li>Campaign execution: Creating content, obtaining approvals, and scheduling ensure maximum impact.</li>
                        <li>Performance evaluation: You'll receive detailed reports with insights to improve the next campaign.</li>
                    </ul>
                    <p>DataMySite makes it easy for businesses to hire influencers in Dubai, ready to produce a measurable profit.</p>

                </div>
                <div class="col-lg-12">
                    <h4>Get Started with DataMySite - The Best Influencer Marketing Agency Dubai</h4>
                    <p>
                        Whether you're launching a new product, building brand awareness, or driving sales, influencer marketing Dubai will take your brand to new heights. DataMySite includes all your strategies, including collaboration with influencers assured of your measurable success.
                        <br><br>
                        Eager to engage with influencers in Dubai to up your digital marketing strategy? Contact DataMySite today to bring tailored influencer solutions focused on high-impact brand growth.
                    </p>

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
                                        <span class="badge">&nbsp;</span>How to choose the right influencers for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We rate influencers based on audience demographics, engagement rates, and how they fit your brand values. We aim to connect you with Dubai-based social media influencers who will truly resonate with your target audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can this work for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely! Influencer Marketing in Dubai is scalable and can be done on any budget. Micro-influencers often bring in high engagement and trust, which is the best option a small business can have.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What metrics or key performance indicators measure influencer marketing success?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We generate detailed reports against key metrics tracking reach, engagement rates, website traffic, and conversions. By optimising based on data-driven insights, we ensure a great overall return on investment from all campaigns.</p>
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