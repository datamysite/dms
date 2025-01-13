@extends('web.includes.master')

@section('content')

	<main class="main">

	    @include('web.includes.subheader')

	    <section id="service-cards" class="blog-section section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
	          	<div class="post-container">
                    @foreach($data as $val)
                      <div class="post row">
                        <div class="col-lg-4">
                            <div class="post-image">
                                <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <h1>{{$val->heading}}</h1>
                            <p class="date">Published On - {{date('F d, Y', strtotime($val->created_at))}}</p>
                            <div class="post-content">
                              <p>{{$val->short_description}}</p> 

                            </div>
                            <div class="post-footer">
                                <p ><i class="bi bi-person"></i> {{$val->author->name}} </p>
                                <a href="{{route('blogs.detail', [$val->slug])}}" target="_blank">► Read More</a>
                            </div>
                        </div>
                      </div>
                      <hr />
                  @endforeach

                  {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>  
	        </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
                @include('web.includes.elements.aside')
            </div>

	      </div>

	    </section>

	</main>


@endsection