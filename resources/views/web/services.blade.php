@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    @include('web.includes.elements.services')


	    <!-- Call To Action Section -->
	    <section id="call-to-action" class="call-to-action clientele-section section dark-background">

	      <img src="{{URL::to('/public')}}/assets/img/clientele.jpg" alt="">

	      <div class="hero-spacing"></div>
	      <div class="container">
	      	<div class="sub-section">
		        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
		          <div class="col-xl-10">
		            <div class="text-center">
		              <h3>Clientele</h3>
		              <hr>
		              <p>We’ve helped these brands achieve their goals and see how we can do the same for you.</p>
		            </div>
		          </div>
		        </div>
		    </div>
	      </div>

	    </section><!-- /Call To Action Section -->

	    @include('web.includes.elements.clients')

	</main>


@endsection