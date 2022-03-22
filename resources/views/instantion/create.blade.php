<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css" />

    <title>Institusi</title>
    
  </head>
  <body>
    <div class="row m-0 vh-100">
      <div class="col-md-2 col-6 bg-custom-1 p-0" id="navbarToggleExternalContent">
        <header class="p-3 ps-4" style="background-color: #315343 ;">
          
        </header>
        <ul class="nav flex-column ">
			<li class="nav-item"><a href="index.html" class="nav-link"><i class="fa-solid fa-table-columns"></i> <span class="mx-3">Dashboard</span></a></li>
			@can('halaman_petani') 
			<li class="nav-item"><a href="/nurseries" class="nav-link"><i class="fa-solid fa-seedling"></i><span class="mx-3">Manajemen petani</span></a></li>
      <li class="nav-item"><a href="/nurseries-profile" class="nav-link"><i class="fa-solid fa-gear"></i><span class="mx-3">Pengaturan profile</span></a></li>
			@endcan
			@can('halaman_pembina')
			<li class="nav-item"><a href="/coach" class="nav-link"><i class="fa-solid fa-chalkboard-user"></i><span  class="mx-3">Manajemen pembina</span></a></li>
      <li class="nav-item"><a href="/coach-profile" class="nav-link"><i class="fa-solid fa-gear"></i><span class="mx-3">Pengaturan profile</span></a></li>
			@endcan
			@can('halaman_institusi')
			<li class="nav-item"><a href="/instantion" class="nav-link"><i class="fa-solid fa-school"></i> <span  class="mx-3">Manajemen institusi</span></a></li>
      <li class="nav-item"><a href="/instantion-profile" class="nav-link"><i class="fa-solid fa-gear"></i><span class="mx-3">Pengaturan profile</span></a></li>	
			@endcan				
			<li class="nav-item"><a href="/product" class="nav-link"><i class="fa-solid fa-box"></i> <span  class="mx-3">Manajemen produk</span></a></li>
			
        </ul>
      </div>
      <div class="col-md-10 p-0" id ="uiNavbar">
        <div class="main-toolbar bg-custom-2 p-3">
          <i class="bi bi-justify fs-1 " style="color: #315343;" id="demo" onclick="closeNav()"></i>
          <img src="{{asset('img/permata desa indonesia logo horisontal.png')}}" class="brand-image" width="70%" alt="" srcset="">
          <div class="nav-right ms-auto">
            <div class="dropdown">
              <button class="btn dropdown-toggle" style=" color: #315343;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/logout">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
       <!-- Page Content Holder -->
    <form action="{{ route('instantion.store') }}" method="POST">
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
                        <input class="form-control form-control-lg" type="text" placeholder="Nama" name="name" aria-label=".form-control-lg example">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kecamatan :</h5>
                      <form>
                        <input class="form-control form-control-lg"  type="text" placeholder="Kecamatan" aria-label=".form-control-lg example">
                      </form>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kepala Institusi :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Kepala Institusi" name="head_of_company" aria-label=".form-control-lg example">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Kota :</h5>
                      <form>
                        <input class="form-control form-control-lg" type="text" placeholder="Kota" aria-label=".form-control-lg example">
                      </form>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>No. Handphone :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="No. Handphone" name="phone" aria-label=".form-control-lg example">
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Provinsi :</h5>
                      <form>
                        <input class="form-control form-control-lg" type="text" placeholder="Provinsi" aria-label=".form-control-lg example">
                      </form>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Email :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Email" name="email" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Plafond :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Plafond" name="plafond" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Alamat :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Alamat" name="address" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                      <h5>Source :</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Source" name="source" aria-label=".form-control-lg example">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script>
      function openNav() {
            
            var myNav = document.getElementById("navbarToggleExternalContent");
            
            myNav.style.display = myNav.style.display === 'none' ? '' : 'none';
            
            document.getElementById("demo").onclick = closeNav;
      
            var element = document.getElementById("uiNavbar");
      
            var x = window.matchMedia("(max-width: 700px)");
      
            if (x.matches) {
      
                  element.classList.remove("col-12");
      
                  element.classList.remove("col-md-12");
      
                  element.classList.add("col-6");
      
                  element.classList.add("col-6");
      
      
            } else{
      
                  element.classList.remove("col-md-12");
                 
                  element.classList.remove("col-12");
      
                  element.classList.add("col-md-10");
                  
                  element.classList.add("col-6");
      
      
            }
      
      }
      
      function closeNav() {
      
            document.getElementById("navbarToggleExternalContent").style.display = "none";
            
            document.getElementById("demo").onclick = openNav;
      
            var element = document.getElementById("uiNavbar");
      
            var x = window.matchMedia("(max-width: 700px)");
      
            if (x.matches) {
      
                  element.classList.remove("col-md-10");
      
                  element.classList.remove("col-6");
      
                  element.classList.add("col-12");
      
                  element.classList.add("col-md-12");
      
      
            } else{
      
                  element.classList.remove("col-sm-10");
      
                  element.classList.remove("col-md-10");
      
                  element.classList.add("col-md-12");
                  
                  element.classList.add("col-12");
      
            }
      
          
      }
      
    </script>
  </body>
</html>