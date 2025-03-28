
	    <!-- Testimonials Section -->
	    <section id="testimonials" class="testimonials section">
	    	<!-- Section Title -->
	      <div class="container section-title">
	        <h2 class="text-theme">Our Clients</h2>
	        <p class="service-tp">
	        	At <strong>DataMySite</strong>, we are proud to partner with a diverse range of clients across various industries, from startups to established global brands. Our tailored advertising and marketing solutions have helped businesses enhance their visibility, engage their target audience, and achieve measurable growth. Whether it’s through outdoor advertising, digital campaigns, influencer collaborations, or PR coverage, we craft strategies that drive real results. Our commitment to excellence and innovation has earned the trust of leading brands, and we look forward to helping more businesses achieve their marketing goals. Join our growing list of successful clients today!
	        </p>
	      </div><!-- End Section Title -->
	      <div class="container">

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