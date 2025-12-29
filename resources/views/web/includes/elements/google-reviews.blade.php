<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title pb-0">
                <h2 class="mb-3">What our customers say</h2>
            </div>
        </div>
        <div class="col-lg-3 text-center vertical-center">
            <div class="google-reviews">
              <div class="google-text">
                <span class="google-logo g-blue">G</span>
                <span class="google-logo o-red">o</span>
                <span class="google-logo o-yellow">o</span>
                <span class="google-logo g-blue">g</span>
                <span class="google-logo l-green">l</span>
                <span class="google-logo e-red">e</span>
                <span class="reviews">Reviews</span>
              </div>

              <div class="rating text-center">
                <span class="score">5.0</span>
                <div class="stars">
                  ★★★★★
                </div>
                <span class="count">(29 reviews)</span>
              </div>
            </div>
            <br>
            <div class="review-actions">
                <a href="https://www.google.com/maps/place/DMS+-+DataMySite+Marketing/@24.9978253,55.1727716,936m/data=!3m1!1e3!4m8!3m7!1s0x3e5f7347c3a1a1d1:0xad7a49fd99d3061!8m2!3d24.9978253!4d55.1727716!9m1!1b1!16s%2Fg%2F11ybf42kl_?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-theme" target="_blank">See All Reviews</a>
                <a href="{{ $googleWriteUrl }}" class="btn btn-secondary" target="_blank">Write a Review</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="swiper reviews-swiper" data-swiper='{
                  "slidesPerView": 1,
                  "spaceBetween": 0,
                  "loop": true,
                  "autoplay": {
                    "delay": 1500,
                    "disableOnInteraction": false
                  },
                  "breakpoints": {
                    "400": {
                      "slidesPerView": 1
                    },
                    "600": {
                      "slidesPerView": 2,
                      "spaceBetween": 0
                    },
                    "900": {
                      "slidesPerView": 2,
                      "spaceBetween": 16
                    },
                    "1200": {
                      "slidesPerView": 3,
                      "spaceBetween": 16
                    },
                    "1400": {
                      "slidesPerView": 3,
                      "spaceBetween": 24
                    }
                  }
                }'>
                <div class="swiper-wrapper">
                    @foreach($reviews['reviews'] as $review)
                        <div class="swiper-slide">
                            <div class="review-card">
                              <!-- Header -->
                              <div class="review-header">
                                <div class="avatar">{{$review['author'][0]}}</div>
                                <div class="user-info">
                                  <div class="name">{{ $review['author'] }}</div>
                                  <div class="date">{{ $review['time'] }}</div>
                                </div>
                              </div>

                              <!-- Stars -->
                              <div class="stars">
                                @for($i = 0; $i < $review['rating']; $i++)
                                    ★
                                @endfor
                              </div>

                              <!-- Review text -->
                              <div class="review-text three-line">
                                {{ $review['text'] }}
                              </div>

                              <a href="{{ $googleReviewsUrl }}" target="_blank" class="read-more">Read more</a>

                              <!-- Footer -->
                              <div class="review-footer">
                                <span class="posted-on">Posted on</span>
                                <span class="google-logo">
                                  <span class="g-blue">G</span>
                                  <span class="o-red">o</span>
                                  <span class="o-yellow">o</span>
                                  <span class="g-blue">g</span>
                                  <span class="l-green">l</span>
                                  <span class="e-red">e</span>
                                </span>
                              </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
<a href="javascript:void(0)" class="btn btn-secondary review-close"><strong>&times;</strong></a>