@extends('web.includes.master')

@section('content')

	<main class="main">

	    <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('/public/storage/blogs/'.$data->banner)}}');">
            <div class="container">
              <h1>{{$data->heading}}</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('blogs')}}">Blogs</a></li>
                  <li class="current">{{$data->heading}}</li>
                </ol>
              </nav>
            </div>
          </div><!-- End Page Title -->

	    <section id="service-cards" class="blog-section section">

	      <div class="container">

	        <div class="row gy-4 first-row">

	          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">
                <h2 class="post-title">{{$data->heading}}</h2>
                <div class="post-footer">
                    <p ><i class="bi bi-person"></i> {{$data->author->name}} </p>
                    <p class="date">Published On - {{date('F d, Y', strtotime($data->created_at))}}</p>
                </div>
                <div class="detail-post-image">
                    <img src="{{URL::to('public/storage/blogs/'.$data->banner)}}" alt="{{$data->banner_alt}}">
                </div>
                <br>
	          	<div class="post-container">
                    {!! $data->description !!}
                </div>  
	        </div>

            <div class="col-lg-3 aside-block" data-aos="fade-up" data-aos-delay="100">
            </div>

	      </div>

	    </section>
        <br>
        <section id="service-cards" class="blog-section section">

          <div class="container">
            <h2>Related Articles</h2>
            <div class="post-container">
                <div class="row gy-4 first-row">
                    @foreach($related as $val)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                          <div class="post row">
                            <div class="col-lg-12">
                                <div class="post-image">
                                    <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br>
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
                        </div>  
                  @endforeach
                </div>
            </div>

        </section>

	</main>


@endsection