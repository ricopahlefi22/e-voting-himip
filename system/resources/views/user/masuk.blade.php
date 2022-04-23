@extends('user.template.base')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-12">
                    <div class="info">
                        <h2> Silahkan Login</h2>
                        <p class="mt-2">"Gunakan hak pilih anda untuk masa depan HIMIP lebih baik."</p>
                    </div>
                </div>
                <div class="col-lg-8 mx-auto">
                    @include('administrator.utils.notif')
                    <form action="{{ url('masuk') }}" method="post" class="php-email-form">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="password" id="password" placeholder="Kode Akses" required>
                        </div>
                        <div class="text-center mt-5"><button type="submit">Masuk</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Hero -->
@endsection
