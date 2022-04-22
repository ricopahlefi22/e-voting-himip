@extends('user.template.base')

@section('content')
  <section id="hero" class="d-flex align-items-center justify-content-center team">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h1>Tentukan Pilihanmu</h1>
              </div>
      
              <div class="row">
                @foreach($list_kandidat as $kandidat)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mx-auto">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                      <img src="{{url('public')}}/{{$kandidat->foto}}" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i>Lihat Detail</a>
                        <a href=""><i class="bi bi-facebook"></i>Beri Suara</a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>{{$kandidat->nama_pasangan}}</h4>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
      
            </div>

  </section><!-- End Hero -->

@endsection