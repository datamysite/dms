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
                <h2 class="post-title">About Sponsorships</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        Sponsorships are a powerful way to enhance brand visibility, build credibility, and connect with your target audience. At DataMySite, we offer sponsorship opportunities that align with your brand’s vision and objectives. Whether it’s partnering with events, influencers, or community initiatives, we ensure your brand gets the attention it deserves.
                    </p>
                    <h4>Our Sponsorship Services</h4>
                    <ul>
                        <li>
                            <strong>Event Sponsorships</strong>: Partnering with high-profile events to increase brand exposure.
                        </li>
                        <li>
                            <strong>Media Sponsorships</strong>: Collaborating with media platforms to showcase your brand.
                        </li>
                        <li>
                            <strong>Community Sponsorships</strong>: Supporting local initiatives to build goodwill and brand loyalty.
                        </li>
                        <li>
                            <strong>Influencer Sponsorships</strong>: Leveraging the reach of key influencers in your industry.
                        </li>
                        <li>
                            <strong>Corporate Sponsorships</strong>: Aligning your brand with other reputable businesses to reach broader audiences.
                        </li>
                    </ul>
                    <br>
                    <h4>Why Choose DataMySite for Sponsorships?</h4>
                    <ul>
                        <li>
                            <strong>Strategic Partnerships</strong>: We identify opportunities that align with your brand’s goals.
                        </li>
                        <li>
                            <strong>Increased Visibility</strong>: Sponsorships boost your brand’s visibility in target markets.
                        </li>
                        <li>
                            <strong>Tailored Approaches</strong>: Each sponsorship strategy is customized to maximize ROI.
                        </li>
                        <li>
                            <strong>Trusted Networks</strong>: We have connections with leading event organizers, influencers, and media outlets.
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
                                        <span class="badge">1</span>How do I know which sponsorship opportunity is right for my business?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our team analyzes your brand’s goals and target audience to recommend the most suitable sponsorship opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>What types of events do you partner with for sponsorships?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We collaborate with a wide range of events, including trade shows, conferences, cultural events, and sports tournaments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Can sponsorships help small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Sponsorships can provide small businesses with a platform to gain visibility and establish credibility in their industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>What is the ROI of sponsorships?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The ROI varies depending on the type of sponsorship and the strategy involved. We focus on creating measurable outcomes to track your success.</p>
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