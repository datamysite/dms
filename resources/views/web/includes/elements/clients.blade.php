        <div class="section">
          <div class="container section-title" style="padding-bottom: 15px;">
            <h2 class="text-theme">Our Clients</h2>
            <p class="service-tp">
                At <strong>DataMySite</strong>, we are proud to partner with a diverse range of clients across various industries, from startups to established global brands.
            </p>
          </div><!-- End Section Title -->
          <div class="container">
            <div class="row client-logos-block">
                <br><br>
                <div class="slider mts2">
                    @for($i = 1; $i<=11; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients-final/'.$i.'.png')}}" loading="lazy" alt="Client Logo"></a></div>
                    @endfor
                    @for($i = 1; $i<=11; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients-final/'.$i.'.png')}}" loading="lazy" alt="Client Logo"></a></div>
                    @endfor
                </div>
                <div class="slider mts">
                    @for($i = 12; $i<=23; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients-final/'.$i.'.png')}}" loading="lazy" alt="Client Logo"></a></div>
                    @endfor
                    @for($i = 12; $i<=23; $i++)
                        <div class="item"><a href=""><img alt="logo" src="{{URL::to('/public/assets/img/clients-final/'.$i.'.png')}}" loading="lazy" alt="Client Logo"></a></div>
                    @endfor
                </div>
            </div>
          </div>
      </div>
