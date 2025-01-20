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
                <h2 class="post-title">About PR Coverage with Forbes</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->img_alt}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>Why Forbes?</h4>
                    <p>
                       Forbes is synonymous with business excellence, innovation, and entrepreneurship. A feature in Forbes elevates your brand’s reputation and associates it with industry leaders and top-tier companies globally.
                    </p>
                    <h4>What We Offer:</h4>
                    <ul>
                        <li>
                            <strong>Profile Features</strong>: We help you get profiled in Forbes by showcasing your business achievements, leadership story, and market impact.
                        </li>
                        <li>
                            <strong>Thought Leadership Articles</strong>: Position yourself as an expert by publishing insightful opinion pieces or analyses in Forbes.
                        </li>
                        <li>
                            <strong>Product or Service Spotlights</strong>: Highlight your offerings in Forbes’ special sections or industry-specific features.
                        </li>
                    </ul>
                    <br>
                    <h4>Benefits:</h4>
                    <ul>
                        <li>
                            Establish your brand as a thought leader in your industry.
                        </li>
                        <li>
                            Gain global recognition and prestige.
                        </li>
                        <li>
                            Attract high-profile clients and investors.
                        </li>
                    </ul>
                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>Is Forbes coverage suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, Forbes frequently highlights innovative startups and small businesses that have a unique story or groundbreaking product.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Can we suggest specific topics for coverage?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely, we collaborate with you to develop topics that align with Forbes’ editorial themes.</p>
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