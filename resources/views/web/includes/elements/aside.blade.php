<div class="aside-form aside-form2">
    <form action="{{route('enquiry.submit')}}" id="enquiry-form">
        @csrf
        <div class="form1-wrapper">
            <div class="form1-bg">
              <h2 class="form1-headline">Ready to Get <span>Results?</span></h2>
              <p class="form1-sub">Drop us your details — our experts respond within 60 minutes.</p>

              <div class="form1-field">
                <input type="text" placeholder="Your Full Name" name="name" required>
              </div>

              <div class="form1-field">
                  <input type="tel" class="form-control" name="mainphone" id="phone-field2" required="">
                  <input type="hidden" name="phone" id="fullphone-field2" required="">
              </div>

              <div class="form1-field">
                <input type="email" placeholder="Your Email Address" class="aside-email" name="email" required>
              </div>

              <div class="form1-field">
                <textarea class="form1-textarea" name="description" placeholder="Tell us what you need — the more detail, the better we can help." required></textarea>
              </div>

              <button class="form1-btn" type="submit">
                Get Free Consultation
                <span class="form1-btn-arrow">→</span>
              </button>

              <div class="form1-trust">
                <div class="form1-trust-item">
                  <svg viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                  No spam, ever
                </div>
                <div class="form1-trust-item">
                  <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                  Reply in 60 min
                </div>
                <div class="form1-trust-item">
                  <svg viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
                  100% Private
                </div>
              </div>
            </div>
        </div>
    </form>
    <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
</div>

<div class="aside-link">
    <h4>Our Services</h4>
    @foreach($header_services as $val)
        <a href="{{URL::to('/'.$val->slug)}}"><i class="{{$val->icon}}"></i>&nbsp; {{$val->name}}</a>
    @endforeach
</div>

@if(count($blog_categories) > 0)
<div class="aside-link">
    <h4>Blog Categories</h4>
    @foreach($blog_categories as $val)
        <a href="{{URL::to('/blogs/'.$val->slug)}}">
            {{$val->name}} <small>({{count($val->blogs)}})</small>
        </a>
    @endforeach
</div>
@endif
