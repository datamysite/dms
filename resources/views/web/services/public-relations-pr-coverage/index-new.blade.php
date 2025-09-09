@extends('web.includes.master')
@section('metaAddition')
    <meta name="robots" content="noindex, follow">
@endsection
@section('addStyle')
    <style>
        .page-title{
            height: 100vh;
            text-align: left;
            display: flex;
            align-items: center;
        }
        .head-para-service {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-right: 80px;
        }
        .head-para-service h1 {
            font-size: 16px;
            color: #e04a43;
        }
        .head-para-service h2 {
            font-size: 56px;
            font-weight: 800;
            padding-right: 280px;
        }
        .head-para-service p {
            font-size: 18px;
            padding-right: 80px;
        }
        .head-container-service .aside-form h3 {
            text-align: left !important;
            text-transform: capitalize;
            color: #fff;
            margin-bottom: 14px !important;
        }
        .head-container-service .aside-form {
            background-color: #3f495973;
            border: 1px solid #ffffff61;
            padding: 24px;
            margin-top: 10px;
            text-align: center;
            border-radius: 16px;
        }
        .head-container-service .form-control{
            background-color: #ffffff40;
            border-color: #ffffff99;
            color: #fff;
        }
        .head-container-service .form-control::placeholder {
            color: #b3bbbb;
        }
        .head-container-service .aside-form .btn{
            width: auto;
        }
        .head-container-service .aside-form .btn:hover {
            background-color: #ffffff4a;
            color: #ffffff;
            font-weight: unset;
        }
        .pr-icon-section img {
            width: 80px;
            padding: 0px 0 16px 0px;
        }
        .pr-icon-section h5 {
            color: #e04a43;
        }
        .faq .card .card-body p{
            margin-bottom: 0px;
        }



        @keyframes slides {
          from {
            transform: translateX(0);
          }
          to {
            transform: translateX(-100%);
          }
        }

        .logos {
          overflow: hidden;
          padding: 30px 0px;
          white-space: nowrap;
          position: relative;
        }

        .logos:before, .logos:after {
          position: absolute;
          top: 0;
          content: '';
          width: 250px;
          height: 100%;
          z-index: 2;
        }

        .logos:before {
          left: 0;
          background: linear-gradient(to left, rgba(255,255,255,0), rgb(244 244 244));
        }

        .logos:after {
          right: 0;
          background: linear-gradient(to right, rgba(255,255,255,0), rgb(244 244 244));
        }

        .logo_items {
          display: inline-block;
          animation: 35s slides infinite linear;
        }

        .logos:hover .logo_items {
          animation-play-state: paused;
        }

        .logo_items img{
          height: 32px;
        }


        @keyframes slides2 {
          from {
            transform: translateX(-90%);
          }
          to {
            transform: translateX(0);
          }
        }

        .logos-2 {
          overflow: hidden;
          padding: 30px 0px;
          white-space: nowrap;
          position: relative;
        }

        .logos-2:before, .logos-2:after {
          position: absolute;
          top: 0;
          content: '';
          width: 250px;
          height: 100%;
          z-index: 2;
        }

        .logos-2:before {
          left: 0;
          background: linear-gradient(to left, rgba(255,255,255,0), rgb(244 244 244));
        }

        .logos-2:after {
          right: 0;
          background: linear-gradient(to right, rgba(255,255,255,0), rgb(244 244 244));
        }

        .logo_items-2 {
          display: inline-block;
          animation: 35s slides2 infinite linear;
        }

        .logos-2:hover .logo_items-2 {
          animation-play-state: paused;
        }

        .logo_items-2 img{
          height: 32px;
        }



        .case-studies-section h5 {
            font-size: 14px;
            padding: 8px 0;
            text-align: center;
            background-color: #f4f4f4;
        }
        .case-studies-section h5 span {
            color: #e04a43;
        }
        .case-studies-section .case-studies-img-even {
            margin-top: 45px;
        }

        .case-studies-section a:hover h5 {
            box-shadow: 0 0 18px rgb(0 0 0 / .2);
        }

        .pr-impact-section .col-lg-7 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .why-us-section .col-lg-9 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .faq-new-section .col-lg-4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug.'.png')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$service->name}}</h1>
                        <h2>The Impact of <br>Public Relations</h2>
                        <br>
                        <p>Effective Public Relations (PR Coverage) can be measured through media reach, audience sentiment, and overall brand recognition. Businesses that develop appropriate strategies obtain enhanced credibility alongside market leadership capacity.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            <h3>Want to know more?</h3>
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control" required>
                                
                                <input type="tel" name="mailphone" id="phone-field2" class="form-control" required>
                                <input type="hidden" name="phone" id="fullphone-field2" required="">
                                <br>
                                <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                                
                                <input type="hidden" name="service" value="{{$service->name}}" required>
                                                                
                                <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
                                
                                <button class="btn btn-theme">Submit Your Enquiry</button>
                                <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>
          </div><!-- End Page Title -->



        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Public Relations (PR) Coverage</h4>
                    <p>In today's digital world, securing Public Relations (PR Coverage) is crucial for businesses aiming to build credibility and authority. Your brand benefits from increased visibility, which solves customer trust issues and enables you to take leadership in your industry. At datamysite, we specialise in securing high-impact <strong>30 Media houses</strong>, PR coverage UAE that ensures your brand reaches the right audience through powerful storytelling and strategic media placements.</p>
                </div>
                <div class="col-lg-6">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/lCs7PpWb05k?si=VJfsZWD2cXKlaHxm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6">
                    <div class="faq " id="accordion">
                        @foreach($subservices as $key => $val)
                            @php $s = $key; @endphp
                            <div class="card">
                                <div class="card-header" id="faqHeading-{{$s}}">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$s}}" data-aria-expanded="true" data-aria-controls="faqCollapse-{{$s}}">
                                            <i class="bi bi-newspaper"></i> &nbsp; {{$val->name}}
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-{{$s}}" class="collapse {{$s == 0 ? 'show' : ''}}" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{{$val->description}}</p>
                                        <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>  
            </div>

          </div>

        </section>





        <section id="testimonials" class="testimonials striped-section section">
            <!-- Section Title -->
          <div class="container section-title" style="padding-bottom: 15px;">
            <h2 class="text-theme">Our Clients</h2>
            <p class="service-tp">
                At <strong>DataMySite</strong>, we are proud to partner with a diverse range of clients across various industries, from startups to established global brands.
            </p>
          </div><!-- End Section Title -->
          <div class="container">
            <div class="row client-logos-block">
                <div class="logos">
                    <div class="logo_items">
                        @for($i = 1; $i<=23; $i++)
                            <img src="{{URL::to('/public/assets/img/clients/'.$i.'-min.png')}}" class="" height="45px" alt="Clients Logo {{$i}}" loading="lazy">
                        @endfor
                    </div>
                    <div class="logo_items">
                        @for($i = 1; $i<=23; $i++)
                            <img src="{{URL::to('/public/assets/img/clients/'.$i.'-min.png')}}" class="" height="45px" alt="Clients Logo {{$i}}" loading="lazy">
                        @endfor
                    </div>
                </div>

                <div class="logos-2">
                    <div class="logo_items-2">
                        @for($i = 23; $i>=1; $i--)
                            <img src="{{URL::to('/public/assets/img/clients/'.$i.'-min.png')}}" class="" height="45px" alt="Clients Logo {{$i}}" loading="lazy">
                        @endfor
                    </div>
                    <div class="logo_items-2">
                        @for($i = 23; $i>=1; $i--)
                            <img src="{{URL::to('/public/assets/img/clients/'.$i.'-min.png')}}" class="" height="45px" alt="Clients Logo {{$i}}" loading="lazy">
                        @endfor
                    </div>
                </div>
            </div>
          </div>

        </section>



        <section id="testimonials" class="testimonials case-studies-section section">
            <!-- Section Title -->
          <div class="container section-title" style="padding-bottom: 15px;">
            <h2 class="text-theme">Case Studies</h2>
            <p class="service-tp">
                At <strong>DataMySite</strong>, we believe in transparency and trust. Sharing case studies allows us to demonstrate the tangible impact of our marketing and advertising solutions.
            </p>
          </div><!-- End Section Title -->
          <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="{{URL::to('/public/case-studies/dubai-duty-free.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/dubai-duty-free.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                        <h5><span>Dubai Duty Free</span> x <span>DMS</span> |  Case Study</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{URL::to('/public/case-studies/lenskart.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/lenskart.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                        <h5><span>Dubai Duty Free</span> x <span>DMS</span> |  Case Study</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{URL::to('/public/case-studies/danube.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/danube.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                        <h5><span>Dubai Duty Free</span> x <span>DMS</span> |  Case Study</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{URL::to('/public/case-studies/ksa.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/ksa.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                        <h5><span>Dubai Duty Free</span> x <span>DMS</span> |  Case Study</h5>
                    </a>
                </div>
            </div>
          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Public Relations (PR Coverage) Services</h4>
                    <p>Here's what we offer:</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{URL::to('/public/assets/img/pr-icon1.png')}}" alt="Pr Icon">
                    <h5>Media Relations</h5>
                    <p>
                        Our team maintains powerful connections with prominent journalists as well as editors and influential media establishments that operate across the UAE. We aid in establishing brand placements in distinguished newspapers, prominent magazines, and digital outlets to expand your brand exposure considerably. Our expertise extends to Gulf News advertising Dubai and Khaleej Times PR coverage UAE, helping businesses gain premium visibility.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{URL::to('/public/assets/img/pr-icon2.png')}}" alt="Pr Icon">
                    <h5>Press Release Writing & Distribution</h5>
                    <p>
                        We craft compelling press releases designed to capture media attention and generate extensive Public Relations (PR Coverage). Organisations receive enhanced brand awareness while boosting engagement when we transmit their press releases to specialised media institutions.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{URL::to('/public/assets/img/pr-icon3.png')}}" alt="Pr Icon">
                    <h5>Crisis Communication</h5>
                    <p>
                        Reputation management is key. We provide crisis management expertise to control public perception and decrease negative exposure when unforeseen situations occur. The team accepts responsibility for safeguarding both your brand's integrity and its credibility.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{URL::to('/public/assets/img/pr-icon4.png')}}" alt="Pr Icon">
                    <h5>Leadership & Executive Positioning</h5>
                    <p>
                        A quality PR initiative serves more than brand advertisement functions since it establishes executive leaders as industry influencers. Through interviews, opinion pieces, and guest articles in leading publications like Forbes PR campaigns GCC, we help establish authority in your industry.
                    </p>
                </div>  
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-5">
                    <img src="{{URL::to('/public/pr-coverage.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-7">
                    <h4>The Impact of Public Relations (PR Coverage)</h4>
                    <p>
                        Public Relations (PR Coverage) is the tangible outcome of a well-executed PR strategy. It includes:
                    </p>
                    <ul>
                        <li>News articles and blog mentions</li>
                        <li>Social media discussions and influencer endorsements</li>
                        <li>TV, radio, and podcast appearances</li>
                        <li>Featured interviews in top publications</li>
                    </ul>

                    <p>
                        Effective Public Relations (PR Coverage) can be measured through media reach, audience sentiment, and overall brand recognition. Businesses that develop appropriate strategies obtain enhanced credibility alongside market leadership capacity.
                    </p>
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose Datamysite for Public Relations (PR Coverage)?</h4>
                    <p>
                        Below are a few reasons that make us stand out:
                        <br>
                        Expertise in the Dubai Market: We have in-depth knowledge of the region's media landscape as a leading PR agency in Dubai. By having solid media house relationships, our branding receives maximum visibility in the market.
                    </p>
                    <ul>
                        <li><strong>Tailored Strategies</strong>: Our firm adjusts its PR strategies to meet the distinctive characteristics of each business. That's why we customise PR campaigns to align with your business objectives, whether you're looking for high-impact PR coverage UAE or niche audience targeting.</li>
                        <li><strong>Proven Track Record</strong>: Since 2021, datamysite has functioned continually as a leader in digital marketing and PR across the market. We've helped businesses across industries secure Public Relations (PR Coverage) in top-tier publications, enhancing their brand visibility and reputation.</li>
                        <li><strong>Data-Driven Approach</strong>: Data analytics powers our PR tracking system, which generates measurable performance results. The team watches media coverage alongside measuring audience relationships and branding feedback to optimise outcome-based strategies.</li>
                    </ul>

                    <p>
                        Datamysite combines regional insights and worldwide PR techniques to deliver strong outcomes for brands. Let's connect and discuss how we can drive Public Relations (PR Coverage) success for your business. Contact us today at (+971) 42 957 001.
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>How long does it take to see results from Public Relations (PR Coverage)?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>PR results vary depending on the campaign's scope. Media placements require between weeks and months to complete their publication process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>What types of businesses benefit from PR services?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>PR services deliver unquestionable value to launching startups just as much as they serve established small businesses. Any company, regardless of size, can multiply its value through PR by establishing trustworthiness, which generates business partnership opportunities and market growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Can you help with both traditional and digital PR?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our approach brings together traditional media outreach with digital PR. This helps increase your brand's visibility across different channels.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>How do you track the success of a PR campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Success measurement of PR campaigns relies on counting media appearances, tracking audience response and publication circulation, and examining positive or negative feedback. Our data-driven method guarantees powerful news coverage for your brand.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>


    </main>

@endsection

@section('addScript')

@endsection