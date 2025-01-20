@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}');">
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
                <h2 class="post-title">Outdoor Advertising in Dubai with DataMySite</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        At DataMySite, we specialize in providing innovative outdoor advertising solutions designed to increase brand visibility and engagement across Dubai and the UAE. With the city's vibrant urban landscape and high-traffic areas, outdoor advertising remains one of the most effective ways to reach a broad audience. From billboards to large-format displays, we have the expertise to create dynamic and impactful campaigns that capture attention and leave a lasting impression.
                    </p>
                    <h4>Why Choose DataMySite for Outdoor Advertising in Dubai?</h4>
                    <ul>
                        <li>
                            <strong>Strategic Locations</strong>: We understand the importance of placement. Our outdoor advertising options are located in high-traffic areas throughout Dubai, ensuring maximum exposure to your brand.
                        </li>
                        <li>
                            <strong>Creative Flexibility</strong>: Whether you need large-scale billboards or creative transit media, we work with you to bring your vision to life. Our creative team ensures your message is engaging and impactful.
                        </li>
                        <li>
                            <strong>Comprehensive Campaigns</strong>: From planning and designing to placement and monitoring, we provide end-to-end services for all your outdoor advertising needs.
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
                                        <span class="badge">1</span>What is the best location for outdoor advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The best locations depend on your target audience. Key areas include Sheikh Zayed Road, Downtown Dubai, Dubai Marina, and other high-traffic districts. We help you choose the right locations based on your campaign goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How long does it take to set up outdoor advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Setup times vary based on the size and type of the advertisement. Typically, outdoor campaigns can be launched within a week, though larger-scale projects may require additional time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Can outdoor ads be changed or updated frequently?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, especially with digital outdoor advertising. You can update your message or creative content in real-time, ensuring your ads stay fresh and relevant.</p>
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