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
        <div class="container">
            <div class="row">
              <div
                class="card"
                style="background-color: white; margin-top: 85px; border: none"
              >
                <div
                  class="card-body text-center"
                  style="background-color: #315343"
                >
                  <h1 style="margin-top: 0px">Data Pembina</h1>
                </div>
                <div class="card-body">
                  <div class="row" style="padding: 35px">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>ID institusi :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->name}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Posisi organisasi:</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->position_in_org}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Nama :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->name}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Nama Projek :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->project_name}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Gelar :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->degree}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Posisi Projek :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->position_in_project}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Sekolah :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->school}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Skill :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->skill}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Fakultas :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->faculty}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Catatan :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->notes}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Jurusan :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->major}}</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>is verified :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                          checked
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                          No
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>Organisasi :</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                      <h5>{{$coach->organization}}</h5>
                    </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="text-align: end;">
                              <button
                                class="text-center"
                                style="
                                  width: 150px;
                                  margin-top: 200px;
                                  margin-left: auto;
                                  margin-right: auto;
                                  border-radius: 10px;
                                  background-color: #315343 ;
                                  color: white;
                                  font-weight: bolder;
                                  text-align: end;
                                "
                              >
                                Edit
                              </button>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <button
                                  class="text-center"
                                  style="
                                    width: 150px;
                                    margin-top: 200px;
                                    margin-left: auto;
                                    margin-right: 20px;
                                    border-radius: 10px;
                                    background-color: white;
                                    color: #315343;
                                    font-weight: bolder;
                                  "
                                >
                                  Kembali
                                </button>
                                </div>
    
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
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