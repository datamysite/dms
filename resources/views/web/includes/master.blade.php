<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{@$metaTags->title}}{{empty($metaTags->title) ? env('APP_NAME') : ''}}</title>
  <meta name="description" content="{{@$metaTags->description}}">
  <meta name="keywords" content="{{@$metaTags->keywords}}">

  <meta name="home_url" content="{{@URL::to('/')}}">

  @include('web.includes.style')

  @foreach($headSnippet as $val)

    <!-- {{$val->name}} // Start -->
        {!! $val->snippet_code !!}
    <!-- {{$val->name}} // End -->

  @endforeach
</head>

<body class="index-page">

  @include('web.includes.header')

  @yield('content')

  @include('web.includes.footer')


  @foreach($bodySnippet as $val)

    <!-- {{$val->name}} // Start -->
      {!! $val->snippet_code !!}
    <!-- {{$val->name}} // End -->

  @endforeach
  
  @include('web.includes.scripts')

</body>

</html>