@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')


        <section class="section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100"> 
                    <span class="text-theme">CONTACT US</span>
                    <h3 class="text-bold">Let's Get In Touch</h3>
                <div class="row">
                    <div class="col-lg-7">
                        <p>We’d love to hear from you! Whether you have a question, need a quote, or want to discuss how we can help your business, feel free to reach out. Contact us today and let’s start a conversation.</p>
                        <div class="hide-mobile" style="height: 50px;"></div>
                        @include('web.includes.elements.contact')
                    </div>
                </div>
              </div><!-- End Card Item -->

            </div>

          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.086584815546!2d55.17229152794556!3d24.997173672037658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f734a5c744f37%3A0x6e047855710d82a6!2sBayan%20Building!5e0!3m2!1sen!2sae!4v1736174170875!5m2!1sen!2sae" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>

	</main>


@endsection