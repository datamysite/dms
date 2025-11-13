@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$mainservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Turn Everyday Commutes</h2>
                        <h4>into Captivating Brand Stories</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in creating visually stunning, high-impact wall advertising campaigns across Dubai Metro stations. Whether you want to boost brand awareness, promote a new product, or reinforce your brand identity, metro station wall ads give you a powerful and continuous presence in front of a diverse urban audience.
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
                                
                                <input type="hidden" name="service" value="{{$mainservice->name}}" required>
                                                                
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
                    <h4>What is Metro Station Wall Advertising?</h4>
                    <p>
                        Metro Station Wall Advertising refers to the branding of interior and exterior walls within metro stations with creative visuals, graphics, and marketing messages. These walls are located along key commuter pathways — such as corridors, platforms, and concourse areas — ensuring continuous exposure as people enter, wait, or exit the station.
                        <br><br>
                        In Dubai, where the metro network spans business districts, shopping hubs, and residential areas, wall advertising enables brands to connect with a wide range of audiences — from professionals and residents to international tourists. It’s one of the most visible and effective forms of outdoor advertising in the UAE.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

        

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-5 mt-0">
                    <h4>Why Choose Metro Station Wall Advertising in Dubai</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>High Visibility and Frequency
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Commuters pass through metro stations daily, spending several minutes within enclosed areas. This extended dwell time ensures repeated exposure to your message, increasing recall and recognition.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Large Format Impact
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Wall wraps provide a vast canvas for creativity. Whether it’s a bold product display or an artistic brand story, large wall graphics deliver a commanding presence that cannot be ignored.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Cost-Effective Brand Awareness
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Compared to traditional media like TV or digital ads, wall advertising offers continuous, long-term exposure at a fraction of the cost. It’s ideal for brands seeking consistent visibility in a busy urban environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Targeted Location Options
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Dubai Metro connects some of the most influential business and shopping districts. From Business Bay to Dubai Mall/Burj Khalifa and Deira City Centre, you can choose the perfect location based on your audience demographics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Perfect for Long-Term Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Unlike short-term digital ads, wall branding provides a long-lasting presence, making it ideal for corporate branding, public campaigns, or product awareness initiatives that run over several months.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 mt-0">
                    <h4>Types of Metro Station Wall Advertising in Dubai</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Full Wall Wraps
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A full wall wrap covers an entire station wall, transforming it into an eye-catching display of creativity. It’s ideal for brands looking to create an immersive, uninterrupted visual experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Partial Wall Graphics
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>These are designed to highlight specific areas of the station, such as escalator walls, ticketing zones, or corridor pathways, ensuring visibility at strategic commuter touchpoints.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>3D Wall Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>For brands seeking a standout experience, 3D or textured wall graphics add depth and realism, making your campaign more memorable and interactive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Digital Wall Displays (DOOH)
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Integrate static branding with digital LED screens for dynamic visuals. These hybrid wall setups combine the scale of printed advertising with the motion of video displays for maximum engagement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Custom Artistic Wall Installations
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        DataMySite can collaborate with artists and designers to create unique, artistic wall installations that merge branding with design, delivering a sophisticated appeal for premium brands.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>



    
        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Delivers Metro Wall Advertising Campaigns</h4>
                    <p>At DataMySite, we manage every step of your metro advertising journey — from concept development to final execution. Our proven process ensures seamless delivery and measurable results.</p>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Strategic Planning and Research</h4>
                            <p> 
                                We analyze commuter flow, demographics, and brand objectives to identify the most effective stations and wall placements.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Creative Concept Development</h4>
                            <p> 
                                Our creative team designs visually compelling graphics that align with your brand tone, ensuring the message is both attention-grabbing and memorable.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Coordination and Compliance</h4>
                            <p> 
                                We handle all permissions, approvals, and RTA coordination, ensuring your campaign follows all advertising guidelines in Dubai.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Campaign Monitoring and Reporting</h4>
                            <p> 
                                After installation, we monitor performance, foot traffic, and audience impressions to measure effectiveness and report results transparently.
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h4>High-Quality Production and Installation</h4>
                            <p> 
                                Using premium materials and advanced printing technology, we ensure your wall graphics remain vibrant, durable, and visually stunning throughout the campaign duration.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Metro Station Wall Advertising</h4>
                    <ul>
                        <li><strong>Constant Exposure</strong>: 24/7 visibility for thousands of daily commuters.</li>
                        <li><strong>Strategic Placement</strong>: High-impact positioning at eye level within major stations.</li>
                        <li><strong>Strong Recall Value</strong>: Extended dwell times lead to higher message retention.</li>
                        <li><strong>Flexible Design Options</strong>: Adaptable to any brand message or visual style.</li>
                        <li><strong>Long-Term Durability</strong>: Perfect for ongoing campaigns or brand presence.</li>
                        <li><strong>Social Media Amplification</strong>: Eye-catching designs often get shared online, boosting organic reach.</li>
                    </ul>
                    <br>
                    <h4>Ideal Brands for Metro Wall Advertising</h4>
                    <p>Metro wall branding is effective for nearly every industry but is particularly beneficial for:</p>
                    <ul>
                        <li>Real estate developers promoting new projects</li>
                        <li>Luxury brands showcasing fashion or accessories</li>
                        <li>Telecom companies advertising new plans</li>
                        <li>Automobile brands introducing new models</li>
                        <li>Banks and financial institutions promoting offers or credibility</li>
                        <li>Retail brands launching seasonal promotions</li>
                        <li>Government campaigns spreading awareness and public messages</li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>

                <div class="col-lg-8 vertical-center">
                    <h4>Key Locations for Metro Wall Advertising in Dubai</h4>
                    <p>
                        Dubai’s metro system includes several high-traffic stations, making it ideal for targeted advertising. Some of the most sought-after metro locations include:
                    </p>
                    <ul>
                        <li><strong>Burj Khalifa/Dubai Mall Station</strong>: Perfect for luxury, fashion, and lifestyle brands.</li>
                        <li><strong>Business Bay Station</strong>: Ideal for corporate, finance, and real estate companies.</li>
                        <li><strong>Mall of the Emirates Station</strong>: Great for retail promotions and product launches.</li>
                        <li><strong>Dubai Internet City Station</strong>: Suited for tech, innovation, and education brands.</li>
                        <li><strong>Union and BurJuman Stations</strong>: Highly diverse audience base with maximum daily traffic.</li>

                    </ul>
                    <p>These prime locations allow advertisers to connect directly with their ideal customers as they move through the heart of Dubai.</p>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Metro Wall Advertising in Dubai</h4>
                    <p>
                        DataMySite is one of the leading advertising companies in Dubai, offering a complete range of outdoor media solutions, including metro station advertising, billboards, transit media, and digital out-of-home campaigns.
                        <br>
                        Here’s why top brands trust us:
                    </p>
                    <ul>
                        <li>Deep understanding of Dubai’s advertising landscape</li>
                        <li>Expertise in RTA-approved metro advertising spaces</li>
                        <li>End-to-end service: design, production, approval, and execution</li>
                        <li>Proven track record of high-ROI campaigns</li>
                        <li>Professional project management and timely delivery</li>

                    </ul>
                    <p>When you choose DataMySite, you partner with a team that ensures your brand shines in one of Dubai’s most powerful advertising platforms.</p>
                    <br>
                    <h4>Build a Strong Visual Presence with DataMySite</h4>
                    <p>
                        Metro Station Wall Advertising is more than just branding — it’s about transforming public spaces into immersive storytelling experiences. With millions of passengers using the Dubai Metro each month, your brand gains continuous, high-impact visibility that drives awareness and engagement.
                        <br>
                        Let DataMySite help you design and execute a campaign that turns station walls into bold expressions of your brand identity.
                        <br><br>
                        Contact our team today to discuss your next Metro Wall Advertising campaign in Dubai and unlock the full potential of one of the UAE’s most influential media platforms.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section  striped-section  faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How long does a metro wall advertising campaign run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Typically, campaigns last from one month to six months, depending on your objectives and budget. Long-term campaigns often deliver better recall and ROI.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I advertise on walls in specific metro stations only?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can target specific stations that align with your audience profile, such as business hubs, residential zones, or tourist areas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How much does wall advertising in Dubai Metro cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pricing varies based on station location, wall size, and campaign duration. Contact DataMySite for a customized quotation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I combine wall advertising with other metro formats?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Absolutely. You can combine wall wraps with digital screens, pillars, or train interiors for a 360-degree metro campaign.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How do you ensure the campaign complies with Dubai’s regulations?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>All campaigns are coordinated with the Dubai Roads and Transport Authority (RTA). DataMySite handles every approval and ensures full compliance with metro advertising guidelines.</p>
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