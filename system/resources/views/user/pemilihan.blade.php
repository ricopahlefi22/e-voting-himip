@extends('user.template.base')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    {{-- <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h2><span>Selamat Datang di</span></h2>
          <h1>ELectronic Voting HIMIP</h1>
        </div>
      </div>
      <a href="{{url('pendaftaran')}}" class="get-started-btn scrollto mt-5">Mendaftar</a>
    </div> --}}
        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Team</h2>
                <p>Check our Team</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                      <img src="{{'public'}}/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                      <img src="{{'public'}}/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                      <img src="{{'public'}}/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                      <img src="{{'public'}}/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Team Section -->

  </section><!-- End Hero -->

  <main id="main">

    @include('user.template.section.count')

  </main><!-- End #main -->
@endsection