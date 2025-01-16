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
                <h2 class="post-title">About Transit Media</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->slug}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        Transit media offers an innovative way to target commuters, tourists, and a wide variety of audiences across Dubai and the UAE. DataMySite provides dynamic transit media solutions that place your brand in front of a captive audience.
                    </p>
                    <h4>Our Transit Media Services:</h4>
                    <ul>
                        <li>
                            <strong>Taxi Advertising</strong>: Taxis are a highly visible and mobile form of advertising. Whether through wraps or taxi-top ads, your brand gets the attention of both passengers and people on the streets.
                        </li>
                        <li>
                            <strong>Bus Advertising</strong>: We place ads on bus stations, ensuring your brand gets noticed by commuters who are waiting for their ride. This provides ample opportunity for your message to resonate with an audience who may have a few moments to engage.
                        </li>
                    </ul>
                    <br>
                    <h4>Why Choose DataMySite for Transit Media in Dubai?</h4>
                    <ul>
                        <li>
                            <strong>High Visibility</strong>: Transit advertising allows your brand to reach a diverse and engaged audience while they’re on the move, ensuring your message is seen by many.
                        </li>
                        <li>
                            <strong>Strategic Placement</strong>: We carefully select the most strategic locations and transit routes to maximize the impact of your ad campaign.
                        </li>
                        <li>
                            <strong>Creative Options</strong>: Whether you prefer digital or traditional formats, we offer creative solutions that make your brand stand out.
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
                                        <span class="badge">1</span>How do you choose the right transit media for my campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We analyze your target audience and select the most effective transit media platforms based on their routes, passenger traffic, and proximity to key locations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can I target specific areas in Dubai with transit media?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we help you target specific neighborhoods, high-traffic areas, and key business districts by strategically placing your ads on buses, metro lines, and taxis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>What is the duration of a transit media campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Transit media campaigns can range from a few weeks to several months, depending on your objectives and budget.</p>
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