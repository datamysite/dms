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
                        <h2>Connect with the UAE Audience</h2>
                        <h4>through Premium Local OTT and Broadcast Campaigns</h4>
                        <br>
                        <p>
                            For businesses looking to reach viewers across the Emirates, GCC, and Arabic-speaking markets, advertising on Abu Dhabi TV offers both scale and prestige. Whether through traditional TV spots or digital streaming on ADTV’s OTT platform, your brand can engage millions of viewers with high-impact visuals and storytelling.
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
                    <h4>About Abu Dhabi TV</h4>
                    <br>
                    <p class="mb-2">
                        Launched under the Abu Dhabi Media Network, Abu Dhabi TV has grown into one of the UAE’s leading broadcasters, offering a blend of news, entertainment, drama, sports, and cultural programming. With a strong reputation for professionalism and local relevance, it attracts a loyal audience base across the UAE, Saudi Arabia, Oman, Bahrain, and Egypt.
                        <br><br>
                        In addition to its satellite channel, Abu Dhabi TV operates a digital OTT platform that allows viewers to stream live and on-demand content anytime, anywhere. This dual-channel presence makes it ideal for hybrid advertising strategies that combine the power of television with the precision of digital targeting.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

        

    
        <section id="service-cards" class="blog-section striped-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image107.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose Abu Dhabi TV Advertising</h4>
                    <br>
                    <p>
                        Advertising on Abu Dhabi TV offers brands a chance to associate with trusted media, high-quality content, and strong Emirati identity. Here’s why it’s a preferred choice among UAE marketers:
                    </p>
                    <ul>
                        <li><strong>Unmatched Local Reach</strong><br> – Connect with Arabic-speaking audiences across the Emirates and GCC.</li>
                        <li><strong>Credibility & Authority</strong><br> – Partner with a media house backed by the Abu Dhabi government, ensuring reliability and brand safety.</li>
                        <li><strong>Multichannel Exposure</strong><br> – Combine traditional broadcast ads with OTT streaming and digital banner placements.</li>
                        <li><strong>Flexible Ad Solutions</strong><br> – Choose from TV commercials, digital videos, sponsored segments, or branded storytelling.</li>
                        <li><strong>High Engagement Rates</strong><br> – Abu Dhabi TV’s diverse content lineup ensures high viewer retention and brand recall.</li>
                    </ul>
                    <p>For advertisers seeking to build long-term awareness and trust among UAE residents, Abu Dhabi TV provides the perfect platform for local and regional impact.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-5 vertical-center">
                    <h4>Ad Formats on Abu Dhabi TV</h4>
                    <ul>
                        <li>
                            <strong>Television Commercials (TVCs)</strong><br>
                            Broadcast on prime-time shows, news hours, and popular dramas, TVCs remain a powerful way to showcase your brand message to mass audiences. With production-quality storytelling, these ads deliver emotional impact and broad awareness.
                        </li>
                        <li>
                            <strong>OTT Video Ads</strong><br>
                            Abu Dhabi TV’s OTT platform allows you to run pre-roll, mid-roll, and post-roll ads on streaming content. This enables precise targeting based on viewer data such as location, age, interests, and viewing habits.
                        </li>
                        <li>
                            <strong>Sponsored Content & Program Integration</strong><br>
                            Brands can partner with Abu Dhabi TV to sponsor shows, segments, or special reports. These integrations enhance brand credibility and allow deeper audience connection through contextual storytelling.
                        </li>
                        <li>
                            <strong>Banner & Display Ads</strong><br>
                            For digital exposure, banner placements within the ADTV website or app drive traffic and reinforce brand identity while users browse or stream content.
                        </li>
                        <li>
                            <strong>Event & Campaign Collaborations</strong><br>
                            Abu Dhabi TV frequently covers major cultural, sporting, and national events. Partnering during these occasions allows your brand to reach highly engaged local audiences in real time.
                        </li>


                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-5 vertical-center">
                    <h4>Industries that Benefit from Abu Dhabi TV Advertising</h4>
                    <p>Because of its broad demographic reach, Abu Dhabi TV serves as an effective platform for a wide range of industries:</p>
                    <ul>
                        <li><strong>Real Estate Developers</strong>: Showcase premium residential or commercial projects to affluent local buyers.</li>


                        <li><strong>Tourism & Hospitality</strong>: Promote travel experiences, hotels, and cultural destinations across UAE and GCC.</li>


                        <li><strong>Government & Public Sector</strong>: Communicate public awareness campaigns and national initiatives.</li>


                        <li><strong>Automotive Brands</strong>: Launch new models or highlight dealership offers with high-quality TV spots.</li>


                        <li><strong>Education & Training Institutes</strong>: Attract parents and students through regional exposure.</li>


                        <li><strong>Retail & E-commerce</strong>: Drive awareness for promotions, seasonal sales, and online shopping campaigns.</li>
                    </ul>
                    <p>With its mix of credibility and wide audience base, Abu Dhabi TV Advertising is ideal for both corporate branding and product marketing.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image164.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Abu Dhabi TV Advertising is a Strategic Choice for Brands</h4>
                    <ul>
                        <li>
                            <strong>Cultural Relevance:</strong>
                             Abu Dhabi TV aligns with the UAE’s values, traditions, and vision — helping your brand build emotional connections through culturally resonant messages.
                         </li>

                        <li>
                            <strong>Trusted Platform:</strong>
                             Viewers perceive ads on Abu Dhabi TV as more credible compared to online-only platforms, enhancing brand trust.
                         </li>

                        <li>
                            <strong>Targeted Reach:</strong>
                             Through its OTT streaming service, advertisers can select specific audience segments — blending mass reach with digital precision.
                         </li>

                        <li>
                            <strong>Cross-Platform Visibility:</strong>
                             Brands can synchronize TV campaigns with digital ads for maximum reach and engagement across devices.
                         </li>

                        <li>
                            <strong>High Production Standards:</strong>
                             Abu Dhabi TV’s in-house production teams and advertising partners ensure that every campaign meets premium media standards.
                         </li>


                    </ul>
                    <br>
                    <h4>The Future of OTT and TV Advertising in the UAE</h4>
                    <p>
                        As more viewers shift from cable to digital streaming, the future of advertising in the UAE lies in hybrid media strategies. Platforms like Abu Dhabi TV, which bridge the gap between traditional broadcasting and digital OTT streaming, are leading this transformation.
                        <br><br>
                        For advertisers, this means more control, measurable results, and flexible spending options. Whether you’re a local business in Dubai or a global brand expanding into the Middle East, Abu Dhabi TV advertising ensures your brand story reaches the right audience — with the right impact.
                    </p>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Advertising with DataMySite – Your Partner in OTT & TV Marketing</h4>
                    <p>
                        At DataMySite, we specialize in helping brands navigate and leverage the power of OTT and broadcast media in the UAE. Our marketing experts handle everything — from concept creation, media planning, audience targeting, and campaign optimization — ensuring your message stands out in a competitive advertising space.
                        <br>
                        We understand that every business has unique goals, whether it’s building brand awareness, increasing leads, or driving foot traffic. That’s why we customize your Abu Dhabi TV campaign to align perfectly with your objectives and budget.
                        <br>
                        <strong>Our services include:</strong>

                    </p>
                    <ul>
                        <li>Media planning and channel selection</li>


                        <li>Scriptwriting and ad production</li>


                        <li>Campaign scheduling and placement</li>


                        <li>Real-time performance tracking and reporting</li>


                        <li>Cross-platform retargeting across digital and social media</li>

                    </ul>
                    <p>With our expertise, your brand can make a lasting impression on both traditional viewers and OTT audiences through one integrated campaign.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section   faq-new-section">

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
                                        <span class="badge">&nbsp;</span>What is Abu Dhabi TV Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s the promotion of your brand through commercials or digital ads on Abu Dhabi TV’s broadcast and OTT streaming platforms, reaching audiences across the UAE and GCC.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I target specific audiences on Abu Dhabi TV’s digital platform?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. The OTT platform allows demographic, geographic, and behavioral targeting to ensure your ads reach the most relevant viewers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What types of ads can I run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can run TV commercials, sponsored content, display banners, or video ads on the OTT platform, depending on your campaign goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How much does Abu Dhabi TV Advertising cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Pricing depends on factors like ad length, time slot, and campaign duration. DataMySite offers flexible packages for businesses of all sizes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Why choose DataMySite for Abu Dhabi TV Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We manage your entire campaign — from creative production to placement and reporting — ensuring maximum visibility, compliance, and ROI.</p>
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