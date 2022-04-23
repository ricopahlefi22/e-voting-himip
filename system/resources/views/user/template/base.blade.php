<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Electronic Voting HIMIP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{'public'}}/assets/img/logo-himip.png" rel="icon">
  <link href="{{'public'}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{'public'}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{'public'}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{'public'}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{'public'}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{'public'}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{'public'}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{'public'}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{'public'}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  @include('user.template.section.navbar')
  
  @yield('content')

  @include('user.template.section.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{'public'}}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{'public'}}/assets/vendor/aos/aos.js"></script>
  <script src="{{'public'}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{'public'}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{'public'}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{'public'}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{'public'}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{'public'}}/assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>