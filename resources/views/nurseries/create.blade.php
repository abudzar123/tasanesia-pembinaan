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
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                          <h5>Provinsi :</h5>
                            <select class="form-control form-control-lg" name="province_id" id="province">
                              <option hidden>Pilih Provinsi</option>
                              @foreach ($province as $data)
                              <option value="{{ $data->id }}">
                                  {{ $data->name }}
                              </option>
                              @endforeach
                            </select>
                    </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                          <h5>Kota :</h5>
                          <select class="form-control form-control-lg" name="city_id" id="cityCourse">
                          <option hidden>Pilih Kota</option>
                          </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-3 form-coloumn">
                          <h5>Kecamatan :</h5>
                          <select class="form-control form-control-lg" name="district_id" id="districtCourse">
                          <option hidden>Pilih Kecamatan</option>
                          </select>
                        </div>
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