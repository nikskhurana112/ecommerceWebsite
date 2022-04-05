<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  {{-- <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  --}}
<!-- Favicon -->
<link rel="shortcut icon" href="./images/favicon.png" type="image/png" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<!-- ======== Swiper Js ======= -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
  />

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>

<!--Custom CSS Main-->
<link rel="stylesheet" type="text/css" href="/css/style.css" />



</head>
<body>
  <div class="container">
    
    @include('inc.nav')
    @yield('content')
    @include('inc.footer')
  </div>
  
   <!--Swiper JS-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
   <!--Custom Scripts-->
   <script type="text/javascript" src="js/script.js"></script>
   <script type="text/javascript" src="js/slider.js"></script>
   {{-- <!--Bootstrap Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  --}}


</body>
</html>