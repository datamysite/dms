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
                <h2 class="post-title">About Gulf News PR Coverage</h2>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/assets/img/service/'.$subservice->slug.'.png')}}" alt="{{$subservice->slug}}">
                </div>
                <br>
                <div class="post-container">
                    <h4>Why Gulf News?</h4>
                    <p>
                       Gulf News is a leading English-language newspaper in the UAE, reaching a broad audience of professionals, expats, and locals. A feature in Gulf News not only boosts your brand's credibility but also provides unparalleled visibility in one of the most trusted media outlets in the region.
                    </p>
                    <h4>What We Offer:</h4>
                    <ul>
                        <li>
                            <strong>Press Release Writing and Distribution</strong>: We craft compelling press releases tailored to Gulf News’ editorial standards and ensure they reach the right desk for publication.
                        </li>
                        <li>
                            <strong>Feature Story Placement</strong>: We pitch feature ideas that highlight your brand's story, achievements, and vision to Gulf News journalists.
                        </li>
                        <li>
                            <strong>Event Coverage</strong>: Whether it’s a product launch, corporate event, or conference, we secure Gulf News coverage to amplify your event’s reach.
                        </li>
                    </ul>
                    <br>
                    <h4>Benefits:</h4>
                    <ul>
                        <li>
                            Target a broad audience of expatriates and UAE residents.
                        </li>
                        <li>
                            Enhance brand credibility with a reputable publication.
                        </li>
                        <li>
                            Boost brand visibility among key decision-makers.
                        </li>
                    </ul>
                    <br><br>
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What type of stories does Gulf News publish?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Gulf News covers a wide array of topics, including business, lifestyle, technology, and events. We ensure your story is aligned with their editorial focus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How long does it take to get featured?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The timeline depends on the editorial calendar and approval process, but we strive to expedite submissions.</p>
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