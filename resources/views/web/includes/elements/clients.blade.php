
	    <!-- Testimonials Section -->
	    <section id="testimonials" class="testimonials section">
	    	<!-- Section Title -->
	      <div class="container section-title" style="padding-bottom: 15px;">
	        <h2 class="text-theme">Our Clients</h2>
	        <p class="service-tp">
	        	At <strong>DataMySite</strong>, we are proud to partner with a diverse range of clients across various industries, from startups to established global brands.
	        </p>
	      </div><!-- End Section Title -->
	      <div class="container">
	      	<div class="row client-logos-block">
	      		@for($i = 1; $i<=23; $i++)
		            <div class="col-lg-1 col-sm-6 client-logos">
		            	<img src="{{URL::to('/public/assets/img/clients/'.$i.'.png')}}" class="" height="45px" alt="Clients Logo {{$i}}" loading="lazy">
		            </div><!-- End testimonial item -->
	            @endfor
	      	</div>
	      </div>

	    </section><!-- /Testimonials Section -->