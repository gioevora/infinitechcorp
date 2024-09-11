<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @section('links')
        <meta name="title" content="Infinitech Advertising Corporation">
        <meta name="description"
            content="Discover expert web development and advertising solutions tailored to elevate your online presence. Transform your digital strategy with our innovative services.">
        <meta name="keywords" content="Advertising company, advertising in Makati, advertising near me, ">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="3 days">
        <meta name="author" content="Infinitech Advertising Corporation">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.infinitechphil.com">
        <meta property="og:title" content="Infinitech Advertising Corporation">
        <meta property="og:description" content="Discover expert web development and system development services tailored to elevate your digital presence.">
        <meta property="og:image" content="https://www.yourwebsite.com/images/og-image.jpg">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="https://www.infinitechphil.com">
        <meta name="twitter:title" content="Infinitech Advertising Corporation">
        <meta name="twitter:description" content="Discover expert web development and system development services tailored to elevate your digital presence.">
        <meta name="twitter:image" content="https://www.yourwebsite.com/images/twitter-card-image.jpg">

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        {{-- Style --}}
        <link rel="stylesheet" href="/assets/css/style.css">

        {{-- Fontawsome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    @show
</head>

<body>
    @include('Layout.Navigation')

    @section('main')
        @yield('content')
    @show

    @include('Layout.Footer')

    @section('scripts')
        {{-- JQUERY --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
       
        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        
        <script>
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll <= 0) {
                    $(".navigation").removeClass("sticky");
                } else {
                    $(".navigation").addClass("sticky");
                }
            });
        </script>
    @show

</body>

</html>
