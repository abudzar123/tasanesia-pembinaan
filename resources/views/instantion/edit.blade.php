{{-- @extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data Instansi</h1>

<form action="/instantion/{{ $instantion->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $instantion->name}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Kepala Perusahaan</label>
                    <input type="text" name="head_of_company" class="form-control"  value="{{ $instantion->head_of_company}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">No Handphone</label>
                    <input type="text" name="phone" class="form-control"  value="{{ $instantion->phone }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $instantion->email }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $instantion->address }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Plafond</label>
                    <input type="text" name="plafond" class="form-control" value="{{ $instantion->plafond }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Source</label>
                    <input type="text" name="source" class="form-control" value="{{ $instantion->source }}">
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

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">

  <title>Form Institusi</title>

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

    <!-- Page Content Holder -->
    <form action="/instantion/{{ $instantion->id }}/update" method="POST">
        @csrf
          <div class="container">
            <div class="row">
              <div class="card" style="background-color: white; padding: 0px; border: 1px solid black;" >
                <div class="card-header text-center" style="background-color: #315343; padding: 10px 0 10px 0;">
                  <h1 style="margin-top: 0px;">Form Institusi</h1>
                </div>
        
                <div class="container" style="padding: 20px;">
                  <div class="row apa1">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Name :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Nama" name="name" aria-label=".form-control-lg example" value="{{ $instantion->name}}">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kecamatan :</h5>
                      <form>
                        <input class="form-control form-control-lg"  type="text" placeholder="Kecamatan" aria-label=".form-control-lg example">
                      </form>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kepala Institusi :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Kepala Institusi" name="head_of_company" aria-label=".form-control-lg example" value="{{ $instantion->head_of_company}}">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kota :</h5>
                      <form>
                        <input class="form-control form-control-lg" type="text" placeholder="Kota" aria-label=".form-control-lg example">
                      </form>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>No. Handphone :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="No. Handphone" name="phone" aria-label=".form-control-lg example" value="{{ $instantion->phone }}">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Provinsi :</h5>
                      <form>
                        <input class="form-control form-control-lg" type="text" placeholder="Provinsi" aria-label=".form-control-lg example">
                      </form>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Email :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Email" name="email" aria-label=".form-control-lg example" value="{{ $instantion->email }}">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Plafond :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Plafond" name="plafond" aria-label=".form-control-lg example" value="{{ $instantion->plafond }}">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Alamat :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Alamat" name="address" aria-label=".form-control-lg example" value="{{ $instantion->address }}">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Source :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Source" name="source" aria-label=".form-control-lg example" value="{{ $instantion->source }}">
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
