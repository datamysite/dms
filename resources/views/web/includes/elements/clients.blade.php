
	    <!-- Testimonials Section -->
	    <section id="testimonials" class="testimonials section">
	      <div class="container" data-aos="fade-up" data-aos-delay="100">

	        <div class="swiper init-swiper">
	          <script type="application/json" class="swiper-config">
	            {
	              "loop": true,
	              "speed": 600,
	              "autoplay": {
	                "delay": 2000
	              },
	              "slidesPerView": 6,
	              "pagination": false,
	              "breakpoints": {
	                "320": {
	                  "slidesPerView": 2,
	                  "spaceBetween": 40
	                },
	                "1200": {
	                  "slidesPerView": 6,
	                  "spaceBetween": 1
	                }
	              }
	            }
	          </script>
	          <div class="swiper-wrapper">
	          	@for($i = 1; $i<=23; $i++)
		            <div class="swiper-slide">
		            	<img src="{{URL::to('/public/assets/img/clients/'.$i.'-min.png')}}" alt="Clients Logo {{$i}}">
		            </div><!-- End testimonial item -->
	            @endfor
	          </div>
	        </div>

	      </div>

	    </section><!-- /Testimonials Section -->