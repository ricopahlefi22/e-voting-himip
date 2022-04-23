@extends('user.template.base')

@section('content')

    <section id="hero" class="d-flex align-items-center justify-content-center team">
        <div class="container" data-aos="fade-up">

            @if (Auth::user()->pilihan == null)
                <div class="section-title">
                    <h1 style="font-size: 40px; line-height: 50px;">Halo {{ request()->user()->nama }} ! <br> Tentukan
                        Pilihanmu</h1>
                </div>

                <div class="row">
                    @foreach ($list_kandidat as $kandidat)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mx-auto">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="{{ url('public') }}/{{ $kandidat->foto }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <button class="btn btn-dark">Lihat Detail</button>
                                        <br><br>
                                        <form action="{{ url('pilih', Auth::id()) }}" method="post" class="form-inline"
                                            onsubmit="return confirm('Yakin memilih Pasangan ini ?')">
                                            @csrf
                                            @method("PUT")
                                            <input type="hidden" value="{{ $kandidat->id }}" name="pilihan">
                                            <button class="btn btn-success"><i class="fa fa-trash"></i>Beri
                                                Suara</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $kandidat->nama_pasangan }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="section-title">
                    <h1 style="font-size: 40px; line-height: 50px;">Halo {{ request()->user()->nama }} ! <br> Terima Kasih telah memilih!</h1>
                </div>
            @endif
        </div>

    </section><!-- End Hero -->
@endsection
