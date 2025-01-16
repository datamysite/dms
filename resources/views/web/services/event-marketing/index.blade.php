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
                <h2 class="post-title">About Event Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->slug}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        Events are a powerful way to engage with your audience in person, build brand loyalty, and generate buzz around your products or services. At DataMySite, we offer end-to-end event marketing services to ensure your event makes a lasting impact, whether it's a product launch, a corporate event, or a trade show, all within the UAE’s vibrant event landscape.
                    </p>
                    <h4>Our Event Marketing Services:</h4>
                    <ul>
                        <li>
                            <strong>Event Strategy & Planning</strong>: We help you develop a clear strategy and plan for your event. This includes defining your target audience, objectives, and key messaging, ensuring that your event aligns with your overall marketing strategy.
                        </li>
                        <li>
                            <strong>Event Promotion</strong>: We utilize a combination of digital, social media, and traditional marketing to promote your event to the right audience. Our marketing campaigns are designed to build awareness, drive attendance, and create anticipation.
                        </li>
                        <li>
                            <strong>Post-Event Marketing</strong>: After the event, we continue the momentum with post-event marketing strategies, including follow-up emails, media coverage, and social media engagement, ensuring that the impact of your event extends beyond the day it takes place.
                        </li>
                    </ul>
                    <br>
                    <h4>Why Choose DataMySite for Event Marketing in Dubai?</h4>
                    <ul>
                        <li>
                            <strong>Tailored Approach</strong>: We customize every event marketing strategy to meet your specific goals, ensuring your event delivers measurable results.
                        </li>
                        <li>
                            <strong>Comprehensive Services</strong>: From strategy and promotion to execution and post-event follow-up, we provide complete event marketing services.
                        </li>
                        <li>
                            <strong>Expertise in the UAE Market</strong>: Our knowledge of the local market and event scene ensures that your event is planned and executed to the highest standards.
                        </li>
                    </ul>
                    <br>
                    <div class="row services gy-4">
                        @foreach($subservices as $val)
                          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
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
                                        <span class="badge">1</span>What types of events can you handle?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p> We specialize in corporate events, product launches, conferences, trade shows, and community events. No matter the event type, we ensure it’s tailored to your brand’s needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How do you measure the success of an event?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We measure success through attendance rates, media coverage, post-event engagement, and lead generation. We also collect feedback from attendees to continuously improve future events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Do you handle international events as well?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can help plan and execute events outside the UAE, leveraging our global network and local expertise to ensure a seamless experience.</p>
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