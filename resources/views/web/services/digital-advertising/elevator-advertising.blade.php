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
                <h2 class="post-title">About Elevator Advertising </h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <p>
                       Elevator advertising offers a unique opportunity to capture the attention of a highly engaged audience in one of the most personal spaces: the elevator. With Dubai's skyscrapers and high-rise buildings, elevator ads offer an innovative way to advertise directly to people during their short journey between floors.
                    </p>
                    <h4>Our Elevator Advertising Services:</h4>
                    <ul>
                        <li>
                            <strong>Digital Elevator Screens</strong>: These screens inside elevators offer dynamic advertising, allowing you to deliver real-time messages, video content, and promotional offers to captive audiences during their ride.
                        </li>
                        <li>
                            <strong>Poster Advertising</strong>: Strategically placed posters inside elevators ensure that your brand is visible to everyone who enters the elevator. This format works well for simple, impactful messaging.
                        </li>
                        <li>
                            <strong>Floor Graphics & Window Clings</strong>: Floor graphics and window clings inside elevators provide unique advertising space that often goes unnoticed in traditional advertising formats, offering an extra point of engagement.
                        </li>
                    </ul>
                    <br>
                    <h4>Why Choose DataMySite for Elevator Advertising in Dubai?</h4>
                    <ul>
                        <li>
                            <strong>High Engagement</strong>: Elevator rides may be brief, but they’re a perfect opportunity to engage with people who are in a captive, focused environment.
                        </li>
                        <li>
                            <strong>Creative Placement</strong>: We offer creative and unconventional ways to advertise using digital screens, posters, and graphics, ensuring your brand stands out.
                        </li>
                        <li>
                            <strong>Prime Locations</strong>: We place your ads in high-rise buildings and commercial complexes with heavy foot traffic, ensuring maximum exposure.
                        </li>
                    </ul>
                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How long do people typically spend in elevators?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>On average, people spend between 30 seconds to 2 minutes in elevators, making it a great opportunity for short, impactful messages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can I target specific buildings or offices for elevator advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we can target specific high-rise buildings, offices, and commercial complexes to reach the right audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>What types of businesses benefit most from elevator advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Elevator advertising is ideal for businesses looking to target professionals, real estate companies, or high-end brands, especially in commercial and residential skyscrapers.</p>
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