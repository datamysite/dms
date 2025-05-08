@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="about-section section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <h3>Driving Impactful Brand Visibility Since 2021</h3>
                <hr>
	          	<p>
                    Founded in 2021 and proudly based in <strong>Dubai, UAE, DataMySite</strong> is a full-service marketing and media agency that specializes in high-impact advertising solutions designed to cut through the noise. We are experts in <strong>brand storytelling, experiential marketing</strong>, and <strong>multi-channel media execution</strong> that ensures your brand doesn’t just participate in the conversation — it leads it.

                    <br><br>

                    From large-scale <strong>outdoor campaigns</strong> to cutting-edge <strong>digital innovations</strong>, and from <strong>influencer engagement</strong> to <strong>PR coverage in top-tier media</strong>, DataMySite is your strategic partner for growth in a fast-paced, attention-driven world.
                </p>
                <br>
                <div class="row">
                    <div class="col-lg-4 about-points about-line">
                        <img src="{{URL::to('/public/mission.png')}}" class="about-icon" alt="Our Mission">
                        <h3>Mission</h3>
                        <p>
                            To <strong>deliver measurable, innovative, and brand-aligned marketing solutions</strong> that elevate visibility, spark engagement, and drive results across physical and digital channels.
                        </p>
                    </div>
                    <div class="col-lg-4 about-points about-line">
                        <img src="{{URL::to('/public/vision.png')}}" class="about-icon" alt="Our Vision">
                        <h3>Vision</h3>
                        <p>
                            To become the most trusted and innovative <strong>marketing partner</strong> for brands across the UAE and beyond — providing creativity, strategy, and execution under one roof.
                        </p>
                    </div>
                    <div class="col-lg-4 about-points">
                        <img src="{{URL::to('/public/values.png')}}" class="about-icon" alt="Our Values">
                        <h3>Values</h3>
                        <p>
                            We value <strong>creativity, integrity, innovation,</strong> and <strong>results—empowering</strong> brands to connect, engage, and grow through bold ideas and strategic execution.
                        </p>
                    </div>
                </div>
	          </div><!-- End Card Item -->

	        </div>

	      </div>

	    </section>



        <section id="service-cards" class="about-section section section-striped about-service">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-center">Our Services</h3>
                <br>
                <div class="row">
                    <div class="col-lg-6 about-service-block">
                        <a href="{{URL::to('/outdoor-advertising')}}"><h3>- Outdoor Advertising</h3></a>
                        <p>
                            Our outdoor media strategies ensure your brand stays top-of-mind by dominating high-traffic locations across the UAE.
                        </p>
                        <h5>Services Include:</h5>
                        <ul>
                            <li>Billboard Advertising</li>
                            <li>Flyers Distribution</li>
                            <li>Human Billboards</li>
                            <li>Transit Media (Airline, Taxi, and Bus Advertising)</li>

                        </ul>
                        <p>
                            We provide strategic location planning, creative support, and full campaign management to maximize your return on visibility.
                        </p>
                    </div>
                    <div class="col-lg-6 about-service-block">
                        <a href="{{URL::to('/digital-advertising')}}"><h3>- Digital & DOOH Advertising</h3></a>
                        <p>
                            We take your digital presence to new heights with performance-driven campaigns across dynamic platforms and real-world digital screens.
                        </p>
                        <h5>Services Include:</h5>
                        <ul>
                            <li>OTT Advertising – Reach audiences on popular streaming platforms</li>
                            <li>DOOH (Digital Out-of-Home) – Eye-catching digital signage in public spaces</li>
                            <li>Hotel Digital Screens Advertising – Promote to premium guests at 4–5 star properties</li>
                            <li>Elevator Advertising – Captive messaging in residential and commercial towers</li>


                        </ul>
                        <p>
                            Our data-backed targeting ensures your digital ad spend reaches the right people, in the right place, at the right time.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 about-service-block">
                        <a href="{{URL::to('/public-relations-pr-coverage')}}"><h3>- Public Relations (PR Coverage)</h3></a>
                        <p>
                            We specialize in high-impact PR placements that enhance brand credibility and awareness across major regional and global media outlets.
                        </p>
                        <h5>Our PR partners include:</h5>
                        <ul>
                            <li>Gulf News</li>
                            <li>Forbes</li>
                            <li>Khaleej Times</li>
                            <li>Arabian Business</li>

                        </ul>
                        <p>
                            Whether it’s a product launch, leadership spotlight, or thought leadership article, we help shape a strong and authoritative voice for your brand.
                        </p>
                    </div>
                    <div class="col-lg-6 about-service-block">
                        <h3>- Celebrity & Influencer Marketing</h3>
                        <p>
                            Nothing builds trust like the right face promoting your brand. We specialize in aligning your product or service with powerful personalities that your audience already admires.
                        </p>
                        <div class="row">
                            <div class="col-lg-5">
                                <a href="{{URL::to('/celebrity-marketing')}}"><h5>Celebrity Marketing:</h5></a>
                                <ul>
                                    <li>Sports Personalities</li>
                                    <li>Bollywood Celebrities</li>
                                </ul>
                            </div>
                            <div class="col-lg-7">
                                <a href="{{URL::to('/influencer-marketing')}}"><h5>Influencer Marketing:</h5></a>
                                <ul>
                                    <li>Nano Influencers (1K–10K followers)</li>
                                    <li>Micro Influencers (10K–100K followers)</li>
                                    <li>Macro Influencers (100K–1M+ followers)</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            From negotiations to campaign execution, we handle every aspect of celebrity and influencer collaboration.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 about-service-block">
                        <a href="{{URL::to('/event-marketing')}}"><h3>- Event Marketing</h3></a>
                        <p>
                            Leave a lasting impression through unforgettable brand experiences. Whether it’s a private VIP launch or a large-scale corporate function, we bring your vision to life.
                        </p>
                        <h5>We Manage:</h5>
                        <ul>
                            <li>Corporate Events</li>
                            <li>Private Events</li>
                            <li>Experiential Activations</li>
                        </ul>
                        <p>
                            We integrate design, branding, and media into cohesive event strategies that drive attention and engagement.
                        </p>
                    </div>
                    <div class="col-lg-6 about-service-block">
                        <a href="{{URL::to('/transit-media')}}"><h3>- Transit Media Advertising</h3></a>
                        <p>
                            Your brand goes places with our powerful transit media solutions, ensuring mobile visibility across diverse audiences.
                        </p>
                        <h5>Transit Channels:</h5>
                        <ul>
                            <li>Airline Advertising</li>
                            <li>Taxi Wraps</li>
                            <li>Bus Branding</li>

                        </ul>
                        <p>
                            Be seen from city streets to airport lounges — every moment is a branding opportunity.
                        </p>
                    </div>
                </div>
              </div>

            </div>

          </div>

        </section>



        <section id="service-cards" class="about-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{URL::to('/public/about.jpg')}}" width="100%" alt="Why Brands Choose DMS">
                    </div>
                    <div class="col-lg-7">
                        <h3>Why Brands Choose DataMySite</h3>
                        <ul>
                            <li>Multi-channel expertise in both traditional and digital media</li>
                            <li>Access to premium media networks across the MENA region</li>
                            <li>Strategic, creative, and executional excellence under one roof</li>
                            <li>Proven results with clients across multiple sectors</li>
                        </ul>
                        <p>
                            We don’t just launch campaigns — we create memorable brand experiences that move audiences and generate measurable outcomes.
                        </p>

                    </div>
                </div>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>



        <section class="section" style="background-image:url('{{URL::to('public/assets/img/about-b.jpg')}}'); background-size: cover;">

          <div class="container working-container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center"> 
                    <span class="text-theme">HOW WE WORK</span>
                    <h3 class="text-bold">Our Working Proccess</h3>
                </div>
                <div class="hide-mobile" style="height: 50px;"></div>
                <div class="row text-center">
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-list-task" style="color: #cbcbcb;"></i>
                        <p class="working-title">Select Your Service</p>
                        <p>Helps us understand your needs and aligns our strategies with your business goals.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-calendar4-week" style="color: #cbcbcb;"></i>
                        <p class="working-title">Booking & Confirm</p>
                        <p>We’ll finalize the details and set a timeline to kick off your customized marketing strategy.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-credit-card" style="color: #cbcbcb;"></i>
                        <p class="working-title">Booking Payment</p>
                        <p>Ensures your service is reserved and allows us to start preparing for your campaign with full commitment.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-6">
                        <i class="bi bi-graph-up-arrow" style="color: #cbcbcb;"></i>
                        <p class="working-title">Launch & Monitor</p>
                        <p>We launch your campaign and continuously track its performance</p>
                    </div>
                </div>
                <div class="hide-mobile" style="height: 50px;"></div>
                <p class="text-center">For more information, please call <strong>(+971) 42 957 001</strong></p>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>


        <section class="section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100"> 
                <h3>Partner With Us</h3>
                <p>
                    At <strong>DataMySite</strong>, we're not just another agency — we’re your <strong>marketing growth partner</strong>. Whether you're looking to launch your brand, scale your reach, or dominate your market, we’re ready to help you make an impact.<br><br>
                    <strong>Let’s talk</strong> — and let’s bring your brand to life.
                </p>
                <br>
                <div class="row">
                    <div class="col-lg-7">
                        <span class="text-theme">MAKE APPOINTMENT</span>
                        <h3 class="text-bold">Get Our Service Easily</h3>
                        <div class="hide-mobile" style="height: 50px;"></div>

                        @include('web.includes.elements.contact')
                    </div>
                    <div class="col-lg-5">
                        <br>
                        @include('web.includes.elements.contact-form')
                    </div>
                </div>
              </div><!-- End Card Item -->

            </div>

          </div>

        </section>

	</main>


@endsection