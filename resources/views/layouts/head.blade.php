@section('head')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title') | {{ config('app.name') }}</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="description" content="yield('description')" />
<meta name="keywords" content="yield('keywords')">
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@haiki_share" />
<meta property="og:url" content="{{ config('app.url') }}" />
<meta property="og:title" content="haiki_share" />
<meta property="og:description" content="yield('description')" />
<meta property="og:image" content="" />
<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
<link rel="apple-touch-icon-precomposed" href="">
<script src="https://kit.fontawesome.com/7f19bc1ee0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

 <!-- Styles -->
 <link href="{{ asset('css/style.css') }}" rel="stylesheet">

   <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection