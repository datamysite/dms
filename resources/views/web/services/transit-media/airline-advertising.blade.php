@extends('web.includes.master')

@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}');">
            <div class="container">
              <h1>{{$subservice->name}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li><a href="{{URL::to('/'.$service->slug)}}">{{$service->name}}</a></li>
                  <li class="current">{{$subservice->name}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <h2 class="post-title">About Airline Advertising</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                       Airline advertising is a unique and impactful way to target business travelers, tourists, and a wide-reaching audience in the skies. At DataMySite, we offer strategic airline advertising solutions that connect your brand with passengers traveling to, from, and within Dubai.
                    </p>
                    <h4>Our Airline Advertising Services:</h4>
                    <ul>
                        <li>
                            <strong>In-Flight Media</strong> – We provide a range of in-flight advertising options, including digital displays on aircraft screens, in-flight magazines, and seatback ads, giving your brand a captive audience during flights.
                        </li>
                        <li>
                            <strong>Airport Advertising</strong> – With the UAE being a major hub for international travel, airports offer a prime location for advertisements. We provide opportunities to advertise in high-traffic areas, such as arrival halls, baggage claim areas, and duty-free shops.
                        </li>
                        <li>
                            <strong>Brand Activation at Airports</strong> – Engage travelers through experiential marketing campaigns in airports, where your brand can create memorable experiences that resonate with passengers before they board their flights.
                        </li>
                    </ul>
                    <h4>Why Choose DataMySite for Airline Advertising in Dubai?</h4>
                    <ul>
                        <li>
                            <strong>Global Reach</strong>: With Dubai being a global aviation hub, airline advertising gives your brand access to a broad international audience.
                        </li>
                        <li>
                            <strong>Captive Audience</strong>: Airline advertising places your brand in front of passengers who are often more receptive to advertising during flights or waiting at airports.
                        </li>
                        <li>
                            <strong>Strategic Placement</strong>: We ensure that your ad reaches the right audience at the right time, whether it's through in-flight media or high-traffic airport locations.
                        </li>
                    </ul>
                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How effective is in-flight advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>In-flight advertising provides a captive audience with limited distractions, making it a highly effective way to reach business travelers and tourists alike.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can I target specific airlines or flights?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can target specific airlines, flights, and routes based on your audience’s demographics, ensuring that your ads reach the most relevant travelers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>What is the cost of airline advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary depending on the type of ad, duration, and airline. We work with you to find the most cost-effective solution that aligns with your goals.</p>
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