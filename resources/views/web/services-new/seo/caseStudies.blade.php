@extends('web.includes.master')

@section('content')

    <main class="main seo-main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service/'.$service->slug).'.png'}}');">
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
              <div class="col-lg-7" style="margin-top:0px;">
                <div class="post-container">
                    <h2 class="web-heading2">Proven SEO Results That Drive Real Business Growth</h2>
                    <p>
                        At <strong>DataMySite</strong>, we believe results speak louder than words. From global e-commerce brands to local legal service providers, we’ve helped businesses across multiple industries improve their online visibility, generate high-converting traffic, and dominate the search results.
                        <br><br>
                        Explore a selection of our SEO success stories below — each tailored with strategy, precision, and a results-first mindset.

                    </p>
                </div> 
              </div>
              <div class="col-lg-1"></div>
              <div class="col-lg-4">
                <div class="aside-form">
                  <h3>Want to know more?</h3>
                  <h4>Ask us anything</h4>
                  <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                      @csrf
                      <input type="text" name="name" placeholder="Name" class="form-control" required>
                      
                      <input type="tel" name="mailphone" id="phone-field2" class="form-control" required>
                      <input type="hidden" name="phone" id="fullphone-field2" required="">
                      <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                      
                      <input type="hidden" name="service" value="SEO Services">
                      
                      <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
                      
                      <button class="btn btn-theme">Submit Your Enquiry</button>
                      <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                  </form>
              </div>
              </div>
            </div>
          </div>

        </section>


        <section id="service-cards" class="blog-section section  section-striped">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-6">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case1.jpg')}}" width="100%">
                        <h3><strong>Blunt Umbrella</strong> – E-commerce  <a href="https://bluntumbrellas.com" target="_blank">Visit Site</a></h3>
                        <h6>Engagement Duration: <strong>3 Years</strong></h6>
                        <p>Blunt Umbrella, a premium global brand renowned for high-performance umbrellas, approached us with technical SEO issues and low organic conversions. Our work included a full technical audit, optimization of key product/category pages, and schema implementation.</p>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“windproof umbrella”</td>
                                <td class="text-right"><span>2</span></td>
                            </tr>
                            <tr>
                                <td>“designer umbrella NZ”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                            <tr>
                                <td>“high quality umbrellas”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">175%</font> increase in organic traffic</li>
                            <li><font style="color:green; font-weight: bold;">3x</font> improvement in conversion rate</li>
                            <li><font style="color:green; font-weight: bold;">40+</font> commercial-intent keywords ranking on Google’s first page</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{URL::to('/public/case-studies.png')}}" alt="SEO Case Studies" width="100%">
                </div>
                <div class="col-lg-6">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case2.jpg')}}" width="100%">
                        <h3><strong>Injury Specialists Direct</strong> – Lead Gen.  <a href="https://injury-specialists-direct.com" target="_blank">Visit Site</a></h3>
                        <h6>Engagement Duration: <strong>2 Years</strong></h6>
                        <p>This UK-based legal firm partnered with us from scratch to build a fully functional, SEO-optimized website targeting high-value legal leads. Our approach included keyword mapping, content strategy, local SEO, and technical enhancements.</p>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“injury claim specialists UK”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                            <tr>
                                <td>“no win no fee solicitors”</td>
                                <td class="text-right"><span>5</span></td>
                            </tr>
                            <tr>
                                <td>“personal injury compensation claims”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">320%</font> growth in organic traffic</li>
                            <li>Steady lead generation via SEO forms</li>
                            <li>Top 5 rankings for 20+ legal terms</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case3.jpg')}}" width="100%">
                        <h3><strong>TechHive Solutions</strong> – B2B / SaaS  <a href="https://www.techhivesolutions.com" target="_blank">Visit Site</a></h3>
                        <h6>Engagement Duration: <strong>1 Year</strong></h6>
                        <p>TechHive Solutions needed to increase qualified leads for its IT services. We focused on targeted content around managed IT and SaaS solutions, improved internal linking, and built backlinks from high-authority tech sites.</p>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“managed IT services USA”</td>
                                <td class="text-right"><span>4</span></td>
                            </tr>
                            <tr>
                                <td>“SaaS development company”</td>
                                <td class="text-right"><span>6</span></td>
                            </tr>
                            <tr>
                                <td>“custom CRM software provider”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">85%</font> increase in monthly organic traffic</li>
                            <li><font style="color:green; font-weight: bold;">50+</font> backlinks from authoritative tech domains</li>
                            <li>Surge in demo inquiries through SEO-optimized landing pages</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case4.jpg')}}" width="100%">
                        <h3><strong>Housing Disrepair</strong> – Legal Services  <a href="https://housing-disrepair.org" target="_blank">Visit Site</a></h3>
                        <h6>Engagement Duration: <strong>1.5 Years</strong></h6>
                        <p>We helped this UK-based legal service provider break into a competitive, regulated space. Our SEO strategy included local landing pages, topical authority clusters, and a heavy focus on high-converting legal keywords.</p>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“housing disrepair solicitors UK”</td>
                                <td class="text-right"><span>2</span></td>
                            </tr>
                            <tr>
                                <td>“claim compensation for housing disrepair”</td>
                                <td class="text-right"><span>3</span></td>
                            </tr>
                            <tr>
                                <td>“tenant rights housing UK”</td>
                                <td class="text-right"><span>4</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li><font style="color:green; font-weight: bold;">280%</font> growth in organic leads</li>
                            <li><font style="color:green; font-weight: bold;">30+</font> legal keywords ranking on page 1</li>
                            <li>High-converting pages with lead form integration</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-studies-item">
                        <img src="{{URL::to('/public/case5.jpg')}}" width="100%">
                        <h3><strong>MoneySavingExpert</strong> – Finance <a href="https://www.moneysavingexpert.com" target="_blank">Visit Site</a></h3>
                        <h6>Engagement Duration: <strong>Ongoing (Consulting)</strong></h6>
                        <p>As one of the UK’s largest consumer finance websites, MoneySavingExpert required expert-level SEO support to fine-tune content structure, enhance E-E-A-T, and increase visibility in featured snippets.</p>
                        <h5>Top Ranking Keywords:</h5>
                        <table class="table">
                            <tr>
                                <td>“best credit card deals UK”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                            <tr>
                                <td>“how to save money on bills”</td>
                                <td class="text-right"><span>2</span></td>
                            </tr>
                            <tr>
                                <td>“PPI claims UK”</td>
                                <td class="text-right"><span>1</span></td>
                            </tr>
                        </table>
                        <h5>Key Results:</h5>
                        <ul>
                            <li>Improved SERP performance via schema and FAQ markup</li>
                            <li>Enhanced on-page SEO and content authority</li>
                            <li>Boosted CTR across several high-volume pages</li>
                        </ul>

                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h3>Ready to Be Our Next Success Story?</h3>
                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>At DataMySite, we don’t follow cookie-cutter SEO plans — we design personalized strategies that solve your business challenges and deliver measurable results. Whether you're in e-commerce, SaaS, legal, or local service-based industries, our SEO solutions are built to scale with your business.</p>

                            <p><strong>Your journey starts with free consultation.</strong></p>

                            @include('web.includes.elements.contact')
                        </div>

                        <div class="col-lg-5">

                            <div class="web-form-div">
                                <h4>Results You Can Expect:</h4>
                                <ul>
                                    <li>Faster indexing & ranking</li>
                                    <li>Improved website loading speed</li>
                                    <li>Better Google Core Web Vitals scores</li>
                                    <li>Higher visibility in search results</li>
                                    <li>Improved mobile and desktop performance</li>

                                </ul>

                                <h5>Want a website that actually drives business? <br><a href="javascript:void(0)" class="scroll-up">Let’s Talk</a>!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>
    </main>


@endsection