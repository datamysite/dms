<form action="{{route('enquiry.submit')}}" id="enquiry-form" data-aos="fade-up" data-aos-delay="500">
  @csrf
  <div class="row gy-4">

    <div class="col-md-6">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
    </div>

    <div class="col-md-6 ">
      <input type="email" class="form-control aside-email" name="email" placeholder="Your Email" required="">
    </div>

    <div class="col-md-6">
      <input type="tel" class="form-control" name="mainphone" id="phone-field" required="">
      <input type="hidden" name="phone" id="fullphone-field" required="">
    </div>

    <div class="col-md-6">
      <select class="form-control" name="service" >
          <option value="">Select Service</option>
          @foreach($header_services as $val)
              <option value="{{$val->name}}" {{!empty($web_drop) && $val->name == 'Website Development' ? 'selected' : ''}}>{{$val->name}}</option>
          @endforeach
          <option value="Others">Others</option>
      </select>
    </div>

    <div class="col-md-12">
      <textarea class="form-control" name="description" rows="6" placeholder="Describe your requirement" required=""></textarea>
    </div>

    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-theme">Submit Your Enquiry</button>

      <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
    </div>

  </div>
</form>