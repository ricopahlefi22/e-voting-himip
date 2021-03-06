@extends('user.template.base')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
           <h2> Silahkan Mendaftar</h2>
            <p class="mt-2">"Gunakan hak pilih anda untuk masa depan HIMIP lebih baik."</p>
          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{url('pendaftaran')}}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="number" name="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" minlength="10" maxlength="10" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Handphone" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mt-3">
              <select name="kelas" id="kelas" class="form-control">
                <option value="" disabled selected hidden>Kelas</option>
                <option value="Teknik Informatika 2A">Teknik Informatika 2A</option>
                <option value="Teknik Informatika 2B">Teknik Informatika 2B</option>
                <option value="Teknik Informatika 4A">Teknik Informatika 4A</option>
                <option value="Teknik Informatika 4B">Teknik Informatika 4B</option>
                <option value="Teknik Informatika 6A">Teknik Informatika 6A</option>
                <option value="Teknik Informatika 6B">Teknik Informatika 6B</option>
            </select>
            </div>
            <div class="text-center mt-5"><button type="submit">Mendaftar</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Hero -->
@endsection