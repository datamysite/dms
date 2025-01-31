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
      <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
    </div>

    <div class="col-md-6">
      <select class="form-control" name="service" >
          <option value="">Select Service</option>
          <option value="Google Ads">Google Ads</option>
          <option value="SEO Services">SEO Services</option>
          <option value="Email Marketing">Email Marketing</option>
          <option value="Social Media Marketing">Social Media Marketing</option>
          <option value="SMS Marketing">SMS Marketing</option>
          <option value="Website Development">Website Development</option>
          <option value="Whatsapp Marketing">Whatsapp Marketing</option>
          <option value="Facebook Ads">Facebook Ads</option>
          <option value="Instagram Ads">Instagram Ads</option>
          <option value="Youtube Ads">Youtube Ads</option>
          <option value="Linkedin Ads">Linkedin Ads</option>
          <option value="Snapchat Ads">Snapchat Ads</option>
          <option value="Tiktok Ads">Tiktok Ads</option>
          <option value="Radio Ads">Radio Ads</option>
          <option value="Newspaper Ads">Newspaper Ads</option>
          <option value="Pay Per Lead">Pay Per Lead</option>
          <option value="Flyers Distribution">Flyers Distribution</option>
          <option value="Outdoor Ads">Outdoor Ads</option>
          <option value="Metro Ads">Metro Ads</option>
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