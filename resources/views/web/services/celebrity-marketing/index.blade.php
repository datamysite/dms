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
                <h2 class="post-title">About Celebrity Marketing</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}" alt="{{$service->slug}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                        At DataMySite, we specialize in Celebrity Marketing, offering businesses in Dubai and across the UAE the unique opportunity to collaborate with Bollywood celebrities and renowned sports personalities. With their vast influence and widespread appeal, celebrities can elevate your brand, create trust, and foster deeper connections with your target audience. Whether it’s a product launch, brand endorsement, or event promotion, our tailored strategies ensure your brand shines alongside the stars.
                    </p>
                    <h3>Why Celebrity Marketing?</h3>
                    <p>
                        In today’s competitive market, standing out requires more than traditional marketing tactics. Celebrity endorsements provide a unique edge by leveraging the fame, credibility, and relatability of public figures.
                    </p>
                    <h4>Key Benefits of Celebrity Marketing:</h4>
                    <ul>
                        <li>
                            <strong>Increased Brand Visibility</strong>: A celebrity’s presence instantly captures attention, increasing your brand’s reach and recall.
                        </li>
                        <li>
                            <strong>Enhanced Credibility</strong>: Association with a trusted figure builds consumer confidence and trust.
                        </li>
                        <li>
                            <strong>Wider Audience Appeal</strong>: Celebrities attract diverse audiences, ensuring your message resonates with various demographics.
                        </li>
                        <li>
                            <strong>Emotional Connection</strong>: Fans often feel a personal connection to celebrities, translating to a stronger affinity for your brand.
                        </li>
                    </ul>
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
                    <br>
                    <h3>Bollywood Celebrity Marketing</h3>
                    <p>
                        Bollywood stars hold unparalleled sway over audiences in the UAE, particularly among South Asian communities. Their influence extends beyond entertainment, shaping trends in fashion, lifestyle, and culture.
                    </p>
                    <h4>How We Collaborate with Bollywood Celebrities:</h4>
                    <ul>
                        <li>
                            <strong>Brand Endorsements</strong>: From TV commercials to social media campaigns, we connect your brand with Bollywood icons for impactful promotions.
                        </li>
                        <li>
                            <strong>Event Appearances</strong>: Drive footfall and media coverage by having a Bollywood celebrity grace your events.
                        </li>
                        <li>
                            <strong>Social Media Campaigns</strong>: Leverage the star’s massive online following to amplify your message.
                        </li>
                        <li>
                            <strong>Customized Collaborations</strong>: Tailored partnerships that align with your brand values and objectives.
                        </li>
                    </ul>
                    <br>
                    <h3>Sports Personality Marketing</h3>
                    <p>
                        Dubai’s thriving sports culture makes collaborations with sports personalities a natural fit for brands targeting active and health-conscious audiences. Athletes bring inspiration, determination, and a winning attitude to your brand message.
                    </p>
                    <h4>How We Collaborate with Sports Personalities:</h4>
                    <ul>
                        <li>
                            <strong>Endorsements</strong>: Boost your brand’s image with trusted names from cricket, football, tennis, and more.
                        </li>
                        <li>
                            <strong>Corporate Events</strong>: Sports stars can attract audiences and add credibility to product launches or corporate gatherings.
                        </li>
                        <li>
                            <strong>Motivational Campaigns</strong>: Use athletes to inspire and connect with your audience through relatable success stories.
                        </li>
                        <li>
                            <strong>Sports Campaigns</strong>: Partner with athletes to promote fitness and sports-related products or services.
                        </li>
                    </ul>
                    <br>
                    <p>
                        With DataMySite’s Celebrity Marketing, your brand gets the star treatment it deserves. Connect with us today to collaborate with Bollywood’s finest or iconic sports personalities, and make your next campaign truly unforgettable.
                    </p>
                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How do I choose the right celebrity for my brand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We help you select a celebrity based on your target audience, industry, and brand values to ensure a perfect fit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Are Bollywood celebrities suitable for all types of brands? 
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, Bollywood stars have diverse appeal and can be matched with brands across industries, from fashion to technology.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>What’s the cost of collaborating with a celebrity?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary depending on the celebrity’s popularity, project scope, and campaign duration. We work with various budgets to find the best fit for your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>How long does it take to plan and execute a celebrity campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Depending on the campaign’s complexity, it can take anywhere from a few weeks to a few months. Our team ensures timely and efficient execution.</p>
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