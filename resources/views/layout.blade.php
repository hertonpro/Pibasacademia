<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{{-- entete de page  --}}
  @include('head')
{{-- fin entete de page  --}}
</head>

<body>
@include('menuinclude')
<!-- Main Content -->
<div class="hk-pg-wrapper">

@yield('content')
@include('footerinclude')
<!-- /Container -->

            
</div>
</body>
</html>