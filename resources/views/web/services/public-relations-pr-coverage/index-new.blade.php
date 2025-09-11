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

        .service-iframe{
            width: 100%;
            height: 400px;
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


        .pub-item {
            display: flex;
            flex-direction: column;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            margin-bottom: 26px;
            border-radius: 6px;
            overflow: hidden;
        }
        .pub-item .pub-item-img {
            width: 100%;   /* square size */
             height: 120px;
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
              background-color: #fff;
        }
        .pub-item .pub-item-img img{
          width: 65%;
          height: 65%;
          object-fit: contain;
        }
        .pub-item a {
            text-align: center;
            background-color: #f4f4f4;
        }
        .pub-item a h5 {
            font-size: 12px;
            padding: 14px 0px;
            margin: 0;
        }
        .publications-logos {
            height: 360px;
            overflow: hidden;
        }
        .pub-see-more {
            text-align: center;
            padding: 70px 0 35px 0;
            margin-top: -103px;
            position: relative;
            background-image: linear-gradient(#ffffff21, #ffffffd1, #fffffff7, #ffffff);
        }
        .pub-see-more button, .see-all-btn {
            border: none;
            background-color: #e04a43;
            color: #fff !important;
            padding: 4px 18px;
            border-radius: 5px;
        }

        .blog-portrait-card .popular-card {
            border-bottom: 1px solid rgb(0 0 0 / 20%);
            padding-bottom: 8px;
            margin-top: 16px;
            display: flex;
            flex-direction: column;
        }
        .blog-portrait-card .popular-card .card-image {
            height: 200px;
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-right: 8px;
        }
        .blog-portrait-card .popular-card img {
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 200px;
        }
        .blog-card-body .popular-card .popular-text {
            flex-basis: 90%;
        }
        .blog-portrait-card .popular-card .popular-text h6 {
            font-weight: 600;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .blog-portrait-card .popular-card .popular-text p {
            font-size: 11px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            margin-bottom: 2px;
        }
        .blog-portrait-card .popular-card .popular-text small {
            font-size: 9px;
        }
        .blog-portrait-card a {
            color: #6F8BA4;
            text-align: left;
        }
        .pr-blog-sub {
            font-size: 44px;
            margin: -24px 0px 0 0px;
            font-weight: 500;
        }

        .dark-background {
            --background-color: #000000d1;
        }


        @media (max-width: 430px) {

            .head-para-service h2 {
                font-size: 28px;
                font-weight: 600;
                padding-right: 0px;
            }
            .head-para-service h2 br {
                display: none;
            }
            .head-para-service p {
                font-size: 14px;
                padding-right: 0;
            }
            .head-para-service{
                padding-right: 14px;
            }
            .service-iframe{
                width: 100%;
                height: 280px;
            }
            .case-studies-section h5{
                font-size: 10px;
            }
            .mob-not-visible{
                display: none;
            }
            .m-footer-bg{
                background-image: linear-gradient(#00000000, #00000045, #000000c2);
            }
            section, .section{
                    padding: 26px 0;
            }
            .logos-2:before, .logos-2:after{
                width: 70px;
            }
            .logos:before, .logos:after{
                width: 70px;
            }
            .pr-icon-section .col-lg-6 {
                text-align: center;
            }
            .pr-blog-sub {
                font-size: 18px;
                margin: -12px 0px -10px 0px;
            }
            .faq .card .card-header .faq-title {
                line-height: 22px;
                font-size: 16px;
            }
            .faq .card .card-body{
                line-height:    17px;
            }
            .faq .card .card-header .faq-title{
                padding:    0 10px;
            }

            .col-sm-4 {
                width: 33.3%;
            }
            .pub-item .pub-item-img{
                height:     70px;
            }
            .mob-not-visible{
                display: none;
            }
        }

        @media (max-width: 380px) {
            body p, body ul li {
                font-size: 12px;
            }
            .service-tp{
                font-size:  12px !important;
            }
            .head-para-service h1 {
                font-size: 10px;
                color: #e04a43;
            }
            
            .head-para-service h2 {
                font-size: 18px;
                font-weight: 600;
                padding-right: 0px;
            }
            .head-para-service h2 br {
                display: none;
            }
            .head-container-service .aside-form h3{
                font-size: 16px;
            }
            .head-container-service .aside-form .btn {
                font-size: 11px;
            }
            .head-container-service .col-lg-4 {
                padding: 0 50px;
            }
            .head-container-service .form-control{
                font-size: 12px;
            }
            .head-container-service .aside-form{
                padding:    12px;
            }
            .head-para-service p {
                font-size: 11px;
                padding-right: 0;
                margin-top: -24px;
                text-align: center;
            }
            .head-para-service{
                padding-right: 14px;
                align-items: center;
            }
            .service-iframe{
                width: 100%;
                height: 280px;
            }
            .case-studies-section h5{
                font-size: 10px;
            }
            .m-footer-bg{
                background-image: linear-gradient(#00000000, #00000045, #000000c2);
            }
            section, .section{
                    padding: 26px 0;
            }
            .logos-2:before, .logos-2:after{
                width: 70px;
            }
            .logos:before, .logos:after{
                width: 70px;
            }
            .pr-icon-section .col-lg-6 {
                text-align: center;
            }
            .pr-blog-sub {
                font-size: 18px;
                margin: -12px 0px -10px 0px;
            }
            .faq .card .card-header .faq-title{
                line-height:    17px;
                font-size:  12px;
            }
            .faq .card .card-body{
                line-height:    17px;
            }
            .faq .card .card-header .faq-title{
                padding:    0 10px;
            }
            .col-xs-6 {
                width: 50%;
            }
        }
    </style>
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
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
                    <p>In today's digital world, securing Public Relations (PR Coverage) is crucial for businesses aiming to build credibility and authority. Your brand benefits from increased visibility, which solves customer trust issues and enables you to take leadership in your industry. At datamysite, we specialise in securing high-impact <strong>30+ Media houses</strong>, PR coverage UAE that ensures your brand reaches the right audience through powerful storytelling and strategic media placements.</p>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/WR2HoD0FpyM?si=Ba7ZxHCiRwpc1Hyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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





        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
          <div class="container section-title" style="padding-bottom: 15px;">
            <h2 class="text-theme">Available Publications</h2>
          </div><!-- End Section Title -->
          <div class="container">
            <div class="row publications-logos">
                @foreach($publications as $val)
                    <div class="col-lg-2 col-sm-4 col-xs-6">
                        <div class="pub-item">
                            <a href="{{$val->link}}" target="_blank" rel="nofollow">
                                <div class="pub-item-img">
                                    <img src="{{URL::to('/public/publications/'.$val->image)}}" alt="{{$val->name}} Logo">
                                </div>
                            </a>
                            <a href="{{$val->link}}" target="_blank" rel="nofollow">
                                <h5>{{$val->name}}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pub-see-more">
                <button>See More</button>
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
                <div class="col-lg-3 col-sm-6">
                    <a href="{{URL::to('/public/case-studies/dubai-duty-free.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/dubai-duty-free.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                        <h5><span>Dubai Duty Free</span> x <span>DMS</span> |  Case Study</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{URL::to('/public/case-studies/lenskart.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/lenskart.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                        <h5><span>Lenskart</span> x <span>DMS</span> |  Case Study</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{URL::to('/public/case-studies/danube.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/danube.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                        <h5><span>Danube</span> x <span>DMS</span> |  Case Study</h5>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{URL::to('/public/case-studies/ksa.pdf')}}" target="_blank" class="open-case-study">
                        <img src="{{URL::to('/public/case-studies/ksa.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                        <h5><span>KSA Influencers</span> x <span>DMS</span> |  Case Study</h5>
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
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section pr-blogs-section">

          <div class="container section-title">
            <h2 class="text-theme">Blogs</h2>
            <p class="pr-blog-sub">What’s Going On in the Industry?</p>
            <div class="row gy-4 blog-portrait-card first-row">
                @foreach($blogs as $val)
                    <div class="col-lg-4">
                        <a href="{{route('blogs.detail', [$val->slug])}}">
                          <div class="popular-card blog-card-2 flex-grow-1" bis_skin_checked="1">
                            <div class="card-image" bis_skin_checked="1">
                              <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                            </div>
                            <div class="popular-text" bis_skin_checked="1">
                              <h6 class="mt-2" title="{{$val->heading}}">{{$val->heading}}</h6>
                              <p class="line-break-3">{{$val->short_description}}</p>
                              <small>by <font class="text-theme2">{{$val->author->name}}</font> - <font class="text-bold">{{date('F d, Y', strtotime($val->created_at))}}</font></small>
                            </div>
                          </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <a href="{{URL::to('/blogs/pr-and-media-relations')}}" class="see-all-btn" target="_blank">See All Blogs</a>
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
                                        <span class="badge">&nbsp;</span>How long does it take to see results from Public Relations (PR Coverage)?
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
                                        <span class="badge">&nbsp;</span>What types of businesses benefit from PR services?
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
                                        <span class="badge">&nbsp;</span>Can you help with both traditional and digital PR?
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
                                        <span class="badge">&nbsp;</span>How do you track the success of a PR campaign?
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