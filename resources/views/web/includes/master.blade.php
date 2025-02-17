<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{@$metaTags->title}}{{empty($metaTags->title) ? env('APP_NAME') : ''}}</title>
  <meta name="description" content="{{@$metaTags->description}}">
  <meta name="keywords" content="{{@$metaTags->keywords}}">

  <!-- Basic OG Tags -->
  <meta property="og:title" content="{{@$metaTags->title}}{{empty($metaTags->title) ? env('APP_NAME') : ''}}" />
  <meta property="og:description" content="{{@$metaTags->description}}" />
  <meta property="og:url" content="{{@URL::current()}}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="DataMySite" />

  <!-- Image OG Tag -->
  <meta property="og:image" content="{{empty($og_img) ? URL::to('/public/og-logo.jpeg') : $og_img}}" />
  <meta property="og:image:alt" content="DataMySite Logo and Services" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="620" />
  <meta property="og:image:height" content="340" />

  <!-- Additional Tags for Social Platforms -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{@$metaTags->title}}{{empty($metaTags->title) ? env('APP_NAME') : ''}}" />
  <meta name="twitter:description" content="{{@$metaTags->description}}" />
  <meta name="twitter:image" content="{{empty($og_img) ? URL::to('/public/og-logo.jpeg') : $og_img}}" />
  <meta name="twitter:site" content="@DataMySite" />

  <meta property="fb:app_id" content="1234567890" />
  
  <link rel="canonical" href="{{@URL::current()}}" />

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

  <a href="https://api.whatsapp.com/send/?phone=971525287259" aria-label="Whatsapp Chat" id="whatsapp-chat" class="whatsapp-chat" target="_blank">
    <img src="{{URL::to('/public/whatsapp3.gif')}}" alt="Whatsapp Chat">
  </a>

  @foreach($bodySnippet as $val)

    <!-- {{$val->name}} // Start -->
      {!! $val->snippet_code !!}
    <!-- {{$val->name}} // End -->

  @endforeach
  
  @include('web.includes.scripts')

</body>

</html>