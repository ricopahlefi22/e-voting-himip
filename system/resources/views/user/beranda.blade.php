@extends('user.template.base')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h2><span>Selamat Datang di</span></h2>
          <h1>ELectronic Voting HIMIP</h1>
        </div>
      </div>
      <a href="{{url('pendaftaran')}}" class="get-started-btn scrollto mt-5">Mendaftar</a>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    @include('user.template.section.count')

  </main><!-- End #main -->
@endsection