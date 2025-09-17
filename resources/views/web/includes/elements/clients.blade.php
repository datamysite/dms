
	    <!-- Testimonials Section -->
	    <section id="testimonials" class="testimonials section">
	    	<!-- Section Title -->
	      <div class="container section-title" style="padding-bottom: 15px;">
	        <h2 class="text-theme">Our Clients</h2>
	        <p class="service-tp">
	        	Every great brand has a story. At <strong>DataMySite</strong>, we help you write the next chapter with powerful campaigns across billboards, DOOH, influencer marketing, PR coverage, lead generation, event marketing, and sponsorships. Your success story starts here. 
	        </p>
	      </div><!-- End Section Title -->
	      <div class="container">
            <div class="row client-logos-block">
                <div class="slider">
                    @for($i = 1; $i<=11; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients/'.$i.'.png')}}"></a></div>
                    @endfor
                    @for($i = 1; $i<=11; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients/'.$i.'.png')}}"></a></div>
                    @endfor
                </div>
                <div class="slider">
                    @for($i = 12; $i<=23; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients/'.$i.'.png')}}"></a></div>
                    @endfor
                    @for($i = 12; $i<=23; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients/'.$i.'.png')}}"></a></div>
                    @endfor
                </div>
            </div>
          </div>

	    </section><!-- /Testimonials Section -->