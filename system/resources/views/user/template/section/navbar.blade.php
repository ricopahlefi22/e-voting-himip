<?php
function checkLoginRoute($route){
  if(Route::current()->uri == 'masuk') {
    ?>
<a href="{{ url('pendaftaran') }}" class="get-started-btn scrollto">Mendaftar</a>
<?php return;
  } else if(Route::current()->uri == 'pendaftaran'){
    ?>
<a href="{{ url('masuk') }}" class="get-started-btn scrollto">Mulai Memilih</a>
<?php return;
  } else {
    ?>
<a href="{{ url('masuk') }}" class="get-started-btn scrollto">Keluar</a>
<?php return;
  }
}
?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="{{ url('/') }}">HIMIP<span>.</span></a></h1>

        {{ checkLoginRoute('login') }}

    </div>
</header><!-- End Header -->
