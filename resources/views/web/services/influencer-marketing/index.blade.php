@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug).'.png'}}');">
            <div class="container">
              <h1>{{$service->name}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li class="current">{{$service->name}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <h2 class="post-title">About Influencer Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->slug}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        In today’s digital age, influencer marketing has become a powerful tool for businesses looking to amplify their brand and connect with a highly engaged audience. At DataMySite, we specialize in leveraging influencer marketing strategies to help your brand reach the right audience, increase credibility, and boost sales across Dubai and the UAE.
                    </p>
                    <h4>Our Influencer Marketing Services:</h4>
                    <ul>
                        <li>
                            <strong>Influencer Identification</strong>: We identify the most relevant influencers in your industry, based on their audience demographics, engagement rates, and content style. Whether you're targeting local celebrities, micro-influencers, or niche experts, we ensure that the influencer aligns perfectly with your brand values and goals.
                        </li>
                        <li>
                            <strong>Campaign Strategy</strong>: We work closely with you to develop a comprehensive influencer marketing strategy that meets your campaign objectives. From product reviews and sponsored content to giveaways and event collaborations, we craft tailored campaigns that resonate with your target audience.
                        </li>
                        <li>
                            <strong>Influencer Management</strong>: From negotiation and contract management to campaign execution and reporting, we handle all aspects of influencer partnerships. We ensure that your brand gets the best value out of its collaborations while maintaining positive relationships with influencers.
                        </li>
                        <li>
                            <strong>Performance Tracking & Reporting</strong>: We track and analyze the performance of each influencer campaign, measuring key metrics like engagement rates, website traffic, and conversions. With this data, we can refine strategies and ensure maximum ROI.
                        </li>
                    </ul>
                    <br>
                    <h4>Why Choose DataMySite for Influencer Marketing in Dubai?</h4>
                    <ul>
                        <li>
                            <strong>Expertise in the UAE Market</strong>: We understand the nuances of the Dubai and UAE market and know how to choose influencers whose audience aligns with your brand's objectives.
                        </li>
                        <li>
                            <strong>Authentic Partnerships</strong>: We focus on building authentic and long-term relationships between brands and influencers, ensuring genuine content that resonates with audiences.
                        </li>
                        <li>
                            <strong>Comprehensive Campaign Management</strong>: From strategy development to execution and performance tracking, we offer end-to-end influencer marketing services to ensure your campaigns are successful.
                        </li>
                    </ul>
                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="{{$val->icon}}" style="color: #f44d46;"></i></div>
                            <div>
                              <h4 class="title">{{$val->name}}</h4>
                              <p class="description">{{$val->description}}</p>
                              <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                          <!-- End Service Item -->
                        @endforeach
                    </div>

                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How do you choose the right influencers for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p> We evaluate influencers based on their audience demographics, engagement rates, relevance to your industry, and content style. Our goal is to match your brand with influencers who will resonate with their followers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can influencer marketing work for small businesses? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, influencer marketing is scalable and can benefit businesses of all sizes. We offer tailored packages for small businesses that maximize budget efficiency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>How do I measure the success of my influencer marketing campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We provide detailed reports tracking key metrics such as engagement rates, reach, conversions, and return on investment, ensuring you can gauge campaign effectiveness.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection