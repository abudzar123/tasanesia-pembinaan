
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">

  <title>Form Pembina</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="sidebar.css">
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
    <form action="{{ route('coach.store') }}" method="POST">
        @csrf
          <div class="container">
            <div class="card" style="background-color: white; padding: 0px; border: 1px solid black;" >
                <div class="card-header text-center" style="background-color: #315343; padding: 10px 0 10px 0;">
                  <h1 style="margin-top: 0px;">Form Pembina</h1>
                </div>
                <div class="container" style="padding: 20px;">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Nama :</h5>
                          <input class="form-control form-control-lg" name="name" type="text" placeholder="Nama" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Organisasi :</h5>
                          <input class="form-control form-control-lg" name="organization" type="text" placeholder="Organisasi" aria-label=".form-control-lg example">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>ID Institusi :</h5>
                      <div class="">
                        <select class="form-control" name="role" id="role" style="height:44px;">
                            <option><a href="#" class="btn dropdown-toggle">Pilih</a></option>
                            <option value="Infak">Infak</option>
                            <option value="Mukhlas">Mukhlas</option>
                            <option value="Sedekah">Sedekah</option>
                        </select>
                      </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>ID Institusi :</h5>
                        <select name="institution_id" id="" class="col-md form-select" style="height: 45px">
                        @foreach ($instantion as $data)
                        <option value="{{ $data->id }}"> 
                            {{ $data->name }}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Sekolah :</h5>
                          <input class="form-control form-control-lg" name="school" type="text" placeholder="Sekolah" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Fakultas :</h5>
                          <input class="form-control form-control-lg" name="faculty" type="text" placeholder="Fakultas" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Jurusan :</h5>
                          <input class="form-control form-control-lg" name="major" type="text" placeholder="Jurusan" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Posisi Dalam Organisasi :</h5>
                          <input class="form-control form-control-lg" name="position_in_org" type="text" placeholder="Posisi dalam organisasi" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Nama projek (yang pernah diikuti):</h5>
                        <input class="form-control form-control-lg" name="project_name" type="text" placeholder="Nama projek" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Posisi Projek (yang pernah diikuti):</h5>
                          <input class="form-control form-control-lg" name="position_in_project" type="text" placeholder="Posisi projek" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Gelar :</h5>
                        <input class="form-control form-control-lg" name="degree" type="text" placeholder="Gelar" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Skill :</h5>
                          <input class="form-control form-control-lg" name="skill" type="text" placeholder="Skill" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                        <h5>Catatan :</h5>
                          <input class="form-control form-control-lg" name="notes" type="text" placeholder="Catatan" aria-label=".form-control-lg example">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 mt-3">
                        <button class="button center" type="submit">
                            kirim
                        </button>
                    </div>
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
