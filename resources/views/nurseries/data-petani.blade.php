<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sidebar.css" />
    <link rel="stylesheet" href="{{ asset('tasanesiaform.css') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>data petani</title>
  </head>
  <body>
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
    <section>
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
              <h1 style="margin-top: 0px">Data Petani</h1>
            </div>
            <div class="card-body">
              <div class="row" style="padding: 35px">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Nama :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->name}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Area:</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->area}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Kepala Perusahaan :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->head_of_company}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Omset Perbulan :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->monthly_omzet}}0</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Kecamatan :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->districts->name}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Jumlah karyawan tetap</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->permanent_emp}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Kota :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->cities->name}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Jumlah karyawan tidak tetap :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->non_permanent_emp}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Provinsi :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5 style="text-transform: capitalize">{{$nurseries->provinces->name}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>No handphone :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->phone}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Potensi :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->potency}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Email :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->email}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>ID Pembina :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>put coach id here</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Fax :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->fax}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Luas tanah yang ada</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->total_capacity}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Web :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->web}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Perkembangan tanah :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->developing_land}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Found ID :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>put found id here</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Keterangan :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->notes}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>No rekening bank :</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>{{$nurseries->bank_accountno}}</h5>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 mt-3 form-coloumn">
                  <h5>Is verified :</h5>
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
                <div class="row">
                  <div class="col-lg-12 offset-4 mt-4">
                    <form action="{{ route('nurseries.destroy', $nurseries->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Are you sure for delete this data?')">
                          HAPUS
                      </button>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-light mx-5 mt-3">
                          KIRIM
                      </button>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-success mt-3">
                          SIMPAN
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
