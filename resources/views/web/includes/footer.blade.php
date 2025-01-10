<footer id="footer" class="footer light-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-2 col-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('services')}}">Services</a></li>
              <li><a href="{{route('contact')}}">Contact US</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Support</h4>
            <ul>
              <li><a href="{{route('faq')}}">FAQ</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-about">
            <a href="{{URL::to('/')}}" class="logo d-flex align-items-center">
              <img src="{{URL::to('/public/assets/img/mini-logo-white.png')}}">
            </a>
            <p>Smarter Marketing, Better Outcomes.<br><br>Boost your brand’s visibility, enhance campaign performance</p>
            <div class="social-links d-flex mt-4">
              <a href="https://www.linkedin.com/company/datamysite/"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.instagram.com/datamysite/"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start" style="padding: 30px 20px;">
            <h4>Subscribe Our Newsletter</h4>
            <p>Stay Ahead in the World of Marketing! <br>Sign up now and get the edge!</p>
            <form id="newsletterForm" action="{{route('newsletter.subscribe')}}">
              @csrf
              <div class="row footer-subscribe">
                <div class="col-lg-9">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" required>
                </div>
                <div class="col-lg-3">
                  <button class="btn btn-lg btn-primary subscribe-btn">SUBSCRIBE</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container copyright text-center">
      <p><span>Copyright ©</span> <strong class="px-1 sitename">DMS</strong> {{date('Y')}}. <span>All Rights Reserved.</span></p>
    </div>

  </footer>


  <!-- Preloader -->
  <div id="preloader"></div>