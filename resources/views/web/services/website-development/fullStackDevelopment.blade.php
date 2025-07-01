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
              <div class="col-lg-8" style="margin-top:0px;">
                <div class="post-container">
                    <h2 class="web-heading2">Custom, Scalable, and Performance-Driven Web Solutions</h2>
                    <p>
                        At <strong>DataMySite</strong>, we provide end-to-end full-stack web development services in Dubai tailored to meet your unique business needs. Whether you're a startup, an e-commerce brand, or an enterprise looking to scale, our expert developers are ready to build fast, secure, and future-ready websites and applications.
                        <br><br>
                        We combine front-end brilliance with back-end power — delivering seamless, dynamic web solutions that don’t just look great but also perform exceptionally across all devices. 
                        <br>
                        From intuitive user interfaces to robust functionality, our websites are built to engage users, load fast, and adapt flawlessly across <strong>desktops</strong>, <strong>tablets</strong>, and <strong>smartphones</strong>. Whether you're launching a new platform or revamping an existing one, we ensure every element works in perfect harmony to support your goals.

                    </p>
                </div> 
              </div>
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

                <div class="col-lg-12">
                    <div class="row services gy-4">
                        <div class="col-lg-6">
                            <h3>What is Full-Stack Development?</h3>
                            <p>
                                <strong>Full-stack development</strong> refers to building both the <strong>front-end (user interface)</strong> and <strong>back-end (server-side)</strong> of a website or application. Our developers use the latest frameworks, libraries, and technologies to ensure every component of your project is optimized for performance, security, and scalability.
                            </p>
                            <ul>
                                <li>
                                    <strong>Front-End</strong>: Crafting responsive, user-friendly interfaces using HTML, CSS, JavaScript, and modern frameworks like React or Vue.js.
                                </li>
                                <li>
                                    <strong>Back-End</strong>: Building powerful server-side logic, APIs, and databases with technologies like Node.js, PHP, Python, or Laravel.
                                </li>
                                <li>
                                    <strong>End-to-End Integration</strong>: Ensuring seamless communication between front-end and back-end for a smooth, high-performance user experience.
                                </li>
                            </ul>
                            <br>

                            <h5>Book Your Free Consultation — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <img src="{{URL::to('/public/full-stack1.png')}}" alt="What is Full-Stack Development?" width="100%">
                        </div>
                    </div>

                </div>
            </div>

          </div>

        </section>

        

         <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Our Full-Stack Development Capabilities</h3>
                    <p>We build complete web and mobile apps, handling both front-end and back-end using the latest technologies for speed, security, and scalability.</p>
                    <br>

                    <div class="row services seo-block gy-4">
                        <div class="col-lg-6">
                          <h4><i class="bi bi-braces"></i> Front-End Development</h4>
                          <p>We create modern, responsive, and engaging user interfaces that keep users hooked.</p>
                          <ul>
                            <li>HTML5, CSS3, JavaScript</li>
                            <li>React.js, Vue.js, Angular</li>
                            <li>Tailwind, Bootstrap, SASS</li>
                            <li>Pixel-perfect UI/UX conversion (Figma/Adobe to Code)</li>
                            <li>Cross-browser & device compatibility</li>

                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <h4><i class="bi bi-code-slash"></i> Back-End Development</h4>
                          <p>We build powerful and secure server-side logic to ensure your website runs smoothly and scales with your growth.</p>
                          <ul>
                            <li>Node.js, PHP, Laravel, Python, Ruby on Rails</li>
                            <li>RESTful & GraphQL APIs</li>
                            <li>Secure user authentication systems</li>
                            <li>Server/database optimization (SQL, MongoDB, Firebase)</li>
                            <li>Integration with CRMs, ERPs, payment gateways, and more</li>

                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <h4><i class="bi bi-braces-asterisk"></i> CMS & E-commerce Development</h4>
                          <p>We offer full-stack support for content-driven and product-based platforms.</p>
                          <ul>
                            <li>WordPress full-stack customization</li>
                            <li>Shopify, Magento, WooCommerce development</li>
                            <li>Custom CMS builds</li>
                            <li>Headless CMS setup (Strapi, Contentful)</li>

                          </ul>
                        </div>
                        <div class="col-lg-6">
                          <h4><i class="bi bi-shield-lock"></i> Security & Optimization</h4>
                          <p>Every full-stack website we build includes:</p>
                          <ul>
                            <li>SSL integration and HTTPS migration</li>
                            <li>Speed optimization (Core Web Vitals, lazy loading)</li>
                            <li>Code and database security best practices</li>
                            <li>Ongoing performance monitoring</li>

                          </ul>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>


         <section id="service-cards" class="blog-section section-striped section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <h3>Technologies We Work With</h3>
                    <p>We work with a wide range of modern technologies, frameworks, and tools to deliver high-quality, future-ready solutions tailored to your business needs.</p>
                    <br>

                    <div class="row services dev-block gy-4">
                        <div class="col-lg-5">
                          <div class="row">
                              <div class="col-lg-4"><p class="tech-item">JavaScript</p></div>
                              <div class="col-lg-4"><p class="tech-item">TypeScript</p></div>
                              <div class="col-lg-4"><p class="tech-item">PHP</p></div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                            <hr>
                            <h4>Languages</h4>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                              <div class="col-lg-4"><p class="tech-item">Python</p></div>
                              <div class="col-lg-4"><p class="tech-item">HTML</p></div>
                              <div class="col-lg-4"><p class="tech-item">CSS</p></div>
                          </div>
                        </div>
                    </div>

                    <div class="row services dev-block gy-4">
                        <div class="col-lg-5">
                          <div class="row">
                              <div class="col-lg-4"><p class="tech-item">React</p></div>
                              <div class="col-lg-4"><p class="tech-item">Angular</p></div>
                              <div class="col-lg-4"><p class="tech-item">Vue</p></div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                            <hr>
                            <h4>Frameworks</h4>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                              <div class="col-lg-4"><p class="tech-item">Next.js</p></div>
                              <div class="col-lg-4"><p class="tech-item">Node.js</p></div>
                              <div class="col-lg-4"><p class="tech-item">Laravel</p></div>
                          </div>
                        </div>
                    </div>

                    <div class="row services dev-block gy-4">
                        <div class="col-lg-5">
                          <div class="row">
                              <div class="col-lg-6"><p class="tech-item">MySQL</p></div>
                              <div class="col-lg-6"><p class="tech-item">PostgreSQL</p></div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                            <hr>
                            <h4>Databases</h4>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                              <div class="col-lg-6"><p class="tech-item">MongoDB</p></div>
                              <div class="col-lg-6"><p class="tech-item">Firebase</p></div>
                          </div>
                        </div>
                    </div>

                    <div class="row services dev-block gy-4">
                        <div class="col-lg-5">
                          <div class="row">
                              <div class="col-lg-6"><p class="tech-item">Git</p></div>
                              <div class="col-lg-6"><p class="tech-item">Docker</p></div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                            <hr>
                            <h4>Tools</h4>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                              <div class="col-lg-6"><p class="tech-item">Webpack</p></div>
                              <div class="col-lg-6"><p class="tech-item">Vite</p></div>
                          </div>
                        </div>
                    </div>

                    <div class="row services dev-block gy-4">
                        <div class="col-lg-5">
                          <div class="row">
                              <div class="col-lg-6"><p class="tech-item">WordPress</p></div>
                              <div class="col-lg-6"><p class="tech-item">WooCommerce</p></div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                            <hr>
                            <h4>CMS</h4>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                              <div class="col-lg-6"><p class="tech-item">Shopify</p></div>
                              <div class="col-lg-6"><p class="tech-item">Magento</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>

        
        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <h3>Why Choose DataMySite for Full-Stack Web Development in Dubai?</h3>
                    <br>

                    <ul>
                      <li>
                        <strong>In-House Experts</strong><br>
                         Our full-stack developers are highly skilled in both front-end and back-end technologies.
                      </li>
                      <li>
                        <strong>Custom Solutions</strong><br>
                         No templates. We build websites and web apps tailored to your business goals.
                      </li>
                      <li>
                        <strong>SEO-Optimized Builds</strong><br>
                         All websites are built with on-page SEO and Core Web Vitals in mind.
                      </li>
                      <li>
                        <strong>Local Market Focus</strong><br>
                         We understand Dubai’s competitive online landscape.
                      </li>
                      <li>
                        <strong>Transparent Communication</strong><br>
                         Real-time updates, milestone tracking, and support.
                      </li>                    
                    </ul>
                    
                    <br>
                    <p>We don’t just claim to be the best — we back it up with data and results.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <img src="{{URL::to('/public/local-seo2.jpg')}}" alt="Why Choose DataMySite as Your Local SEO Agency in Dubai?" width="100%">
                </div>
                <div class="col-lg-12">
                  
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>What does full-stack mean in web development?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Full-stack covers both the front-end (what users see) and back-end (what powers your website). It's a complete development approach from UI to server/database.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>How long does it take to build a full-stack website?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Depending on complexity, it can range from 3–12 weeks. We provide a project timeline after scoping your requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Can you integrate payment systems and third-party tools?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We specialize in integrating CRMs, payment gateways, analytics, inventory systems, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span>Will my website be SEO-friendly and mobile-responsive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Every full-stack project is built with SEO best practices and full mobile responsiveness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>Do you offer ongoing maintenance?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We provide website maintenance, updates, and support post-launch as part of our extended services.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h3>Ready to Build Something Powerful?</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>Whether you're launching a startup, revamping an old website, or scaling your e-commerce store — <strong>DataMySite</strong> is your trusted partner for <strong>full-stack web development in Dubai</strong>.</p>

                            <p><strong>Your journey starts with free consultation.</strong></p>

                            @include('web.includes.elements.contact')
                        </div>

                        <div class="col-lg-5">

                            <div class="web-form-div">
                                <h4>Use Cases We Excel At:</h4>
                                <ul>
                                    <li>Business websites & corporate portals</li>
                                    <li>E-commerce platforms & marketplaces</li>
                                    <li>SaaS & web-based applications</li>
                                    <li>Membership & booking systems</li>
                                    <li>Custom dashboards and admin panels</li>
                                    <li>API integrations and cross-platform apps</li>

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

    <div id="particles-js"></div>

@endsection
@section('addStyle')
    <link rel="stylesheet" media="screen" href="{{URL::to('/public/assets/particles.js-master')}}/css/style.css">
@endsection
@section('addScript')
    <!-- scripts -->
    <script src="{{URL::to('/public/assets/particles.js-master')}}/particles.js"></script>
    <script src="{{URL::to('/public/assets/particles.js-master')}}/js/app.js"></script>

    <!-- stats.js -->
    <script src="{{URL::to('/public/assets/particles.js-master')}}/js/lib/stats.js"></script>
    <script>
      var count_particles, stats, update;
      stats = new Stats;
      stats.setMode(0);
      stats.domElement.style.position = 'absolute';
      stats.domElement.style.left = '0px';
      stats.domElement.style.top = '0px';
      document.body.appendChild(stats.domElement);
      count_particles = document.querySelector('.js-count-particles');
      update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
          count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>
@endsection