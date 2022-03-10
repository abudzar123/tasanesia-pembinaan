{{-- @extends('layouts.default')

@section('title', 'Nurseries')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('nurseries.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Kepala perusahaan</label>
                <div class="col-sm">
                    <input type="text" name="head_of_company" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm">
                    <input type="text" name="address" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">No handphone</label>
                <div class="col-sm">
                    <input type="text" name="phone" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm">
                    <input type="text" name="email" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Fax</label>
                <div class="col-sm">
                    <input type="text" name="fax" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Web</label>
                <div class="col-sm">
                    <input type="text" name="web" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">No Rekening Bank</label>
                <div class="col-sm">
                    <input type="text" name="bank_accountno" class="form-control">
                </div>
            </div>
            
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Area</label>
                <div class="col-sm">
                    <input type="text" name="area" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Omset Perbulan</label>
                <div class="col-sm">
                    <input type="text" name="monthly_omzet" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Total Kapasitas</label>
                <div class="col-sm">
                    <input type="text" name="total_capacity" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Jumlah Karyawan Tetap</label>
                <div class="col-sm">
                    <input type="text" name="permanent_emp" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Jumlah Karyawan Tidak Tetap</label>
                <div class="col-sm">
                    <input type="text" name="non_permanent_emp" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Potensi</label>
                <div class="col-sm">
                    <input type="text" name="potency" class="form-control">
                </div>
            </div>
            
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Luas Tanah Yang Ada</label>
                <div class="col-sm">
                    <input type="text" name="is_verified" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Perkembangan</label>
                <div class="col-sm">
                    <input type="text" name="existing_land" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm">
                    <input type="text" name="developing_land" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Is verified</label>
                <div class="col-sm">
                    <input type="text" name="notes" class="form-control">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit">
                SUBMIT
            </button>
        </div>
    </div>
</form>

@endsection --}}
@extends('layouts.default')

@section('title', 'Nurseries')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">

  <title>Form Petani</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="/sidebar.css">
  <link rel="stylesheet" href="/tasanesiaform.css">
  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css" />

</head>

<body>
  <style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
     body {
       font-family: 'Poppins', sans-serif;
       background: #C4C4C4;
     }
     
     p {
       font-family: 'Poppins', sans-serif;
       font-size: 1.1em;
       font-weight: 300;
       line-height: 1.7em;
       color: #999;
     }
    
 </style>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-image" href="#"
          ><img
            src="{{ asset('img/gambar.jpeg') }}"
            alt=""
            style="width: 150px; margin-left: 10px"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Dashboard</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Manajemen Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Manajemen Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Manajemen order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Manajemen Berita</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

    <form action="{{ route('nurseries.store') }}" method="POST">
        @csrf
        <div class="container" >
            <div class="row">
              <div class="card" style="background-color: white; padding: 0px; border: 1px solid black;">
                <div class="card-header text-center" style="background-color: #315343; padding: 10px 0 10px 0;">
                  <h1 style="margin-top: 0px;">Form Petani</h1>
                </div>  
                <div class="container" style="padding: 20px;">
                  <div class="row apa1">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Nama :</h5>
                        <input class="form-control form-control-lg" name="name" type="text" placeholder="Nama" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kepala Perusahaan :</h5>
                        <input class="form-control form-control-lg" name="head_of_company" type="text" placeholder="Kepala Perusahaan" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Alamat :</h5>
                        <input class="form-control form-control-lg" name="address" type="text" placeholder="Alamat" aria-label=".form-control-lg example">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kecamatan :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Kecamatan" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kota :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Kota" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Provinsi :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Provinsi" aria-label=".form-control-lg example">
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Email :</h5>
                        <input class="form-control form-control-lg" name="email" type="text" placeholder="Email" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>No. Handphone :</h5>
                        <input class="form-control form-control-lg" name="phone" type="text" placeholder="No. Handphone" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Fax :</h5>
                        <input class="form-control form-control-lg" name="fax" type="text" placeholder="Fax" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Web :</h5>
                        <input class="form-control form-control-lg" name="web" type="text" placeholder="Web" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>No. rekening bank :</h5>
                          <input class="form-control form-control-lg" name="bank_accountno" type="text" placeholder="No. Rekening Bank" aria-label=".form-control-lg example">
                      </div>
                      {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>ID bank :</h5>
                          <input class="form-control form-control-lg" type="text" placeholder="ID Bank" aria-label=".form-control-lg example">
                      </div> --}}
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Area :</h5>
                          <input class="form-control form-control-lg" name="area" type="text" placeholder="Area" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Omset perusahaan :</h5>
                          <input class="form-control form-control-lg" name="monthly_omzet" type="text" placeholder="Omset Perbulan" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Total Kapasitas :</h5>
                          <input class="form-control form-control-lg" name="total_capacity" type="text" placeholder="Omset Perbulan" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Jumlah karyawan tetap :</h5>
                          <input class="form-control form-control-lg" name="permanent_emp" type="text" placeholder="Jumlah karyawan tetap" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Jumlah karyawan tidak tetap :</h5>
                          <input class="form-control form-control-lg" name="non_permanent_emp" type="text" placeholder="Jumlah karyawan tidak tetap" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Potensi :</h5>
                          <input class="form-control form-control-lg" name="potency" type="text" placeholder="potensi" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Is verified :</h5>
                          <input class="form-control form-control-lg" name="is_verified" type="text" placeholder="potensi" aria-label=".form-control-lg example">
                      </div>
                      {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>ID pembina :</h5>
                          <input class="form-control form-control-lg" type="text" placeholder="ID Pembina" aria-label=".form-control-lg example">
                      </div> --}}
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Luas tanah yang ada :</h5>
                          <input class="form-control form-control-lg" name="existing_land" type="text" placeholder="Luas tanah yang ada" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Perkembangan tanah :</h5>
                          <input class="form-control form-control-lg" name="developing_land" type="text" placeholder="Perkembangan tanah" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Keterangan :</h5>
                          <input class="form-control form-control-lg" name="notes" type="text" placeholder="Keterangan" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 mt-3">
                        <button class="button" type="submit">
                            kirim
                        </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    
        <div class="footer">
          @2022 Tasanesia. All Rights Reserved
        </div>
    </form>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

BlobEvent
      $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>
</body>

</html>
