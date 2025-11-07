@extends('web.includes.master')
@section('addStyle')
    <style>
        .case-studies-new h5 {
            font-size: 14px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
@endsection
@section('content')

    <main class="main">

        @include('web.includes.subheader')

        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

              <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <div class="post-container case-studies-container">
                    <h4>Why Does DataMySite Share Case Studies?</h4>
                    <p>At DataMySite, we believe in transparency and trust. Sharing case studies allows us to demonstrate the tangible impact of our marketing and advertising solutions. They provide a clear, evidence-based view of how we address specific business challenges and deliver measurable results.
                        <br>
                    By showcasing real-world success stories, we aim to:</p>
                    <ul>
                        <li><strong>Inspire Confidence</strong>: Highlight our expertise and proven track record in transforming brands.</li>
                        <li><strong>Demonstrate Value</strong>: Show how our customized strategies create meaningful outcomes, from increased visibility to higher ROI.</li>
                        <li><strong>Educate and Empower</strong>: Help potential clients understand the scope of our services and how we can address their unique challenges.</li>
                        <li><strong>Build Trust</strong>: Reinforce our commitment to results-driven marketing and advertising by presenting real examples of success.</li>
                    </ul>
                    <p>Each case study is a testament to our dedication, creativity, and expertise, offering a glimpse into the innovative solutions we craft to help businesses thrive in Dubai's competitive market.</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/ays.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/ays.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                                <h5><span>AYS Developers</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/jetour.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/jetour.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                                <h5><span>Jetour</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/tranquil.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/tranquil.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                                <h5><span>Tranquil Developers</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/ilg.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/ilg.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                                <h5><span>ILG Luxury Group</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/dubai-duty-free.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/dubai-duty-free.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                                <h5><span>Dubai Duty Free</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/lenskart.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/uae.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                                <h5><span>Lenskart</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/danube.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/danube.jpg')}}" class="case-studies-img" width="100%" alt="Case Studies">
                                <h5><span>Danube</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 case-studies-new">
                            <a href="{{URL::to('/public/case-studies/ksa.pdf')}}" target="_blank" class="open-case-study">
                                <img src="{{URL::to('/public/case-studies/cover/ksa.jpg')}}" class="case-studies-img-even" width="100%" alt="Case Studies">
                                <h5><span>KSA Influencers</span> x <span>DMS</span> |  Case Study</h5>
                            </a>
                        </div>
                    </div>
                    <h4>Transforming Brands Through Comprehensive Marketing Solutions</h4>
                    <p>At DataMySite, we offer a full suite of marketing and advertising services designed to drive measurable results. From digital advertising to outdoor campaigns, public relations to influencer marketing, we help brands stand out in a competitive market. Below, we highlight the before-and-after transformations our clients experienced through our tailored marketing solutions in Dubai, UAE.</p>
                    <h4>Why Choose DataMySite?</h4>
                    <p>Through our comprehensive marketing and advertising services, we help businesses in Dubai achieve remarkable results. Whether you're looking to enhance your online presence with digital advertising, build brand recognition through outdoor ads, or generate qualified leads through event marketing, DataMySite has the expertise to drive success.</p>
                </div>
            </div>  

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

          </div>

        </section>

    </main>


@endsection
@section('addScript')
  <script src="{{URL::to('/public')}}/assets/js/aside.js"></script>
@endsection