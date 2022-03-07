
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sidebar.css" />
    <link rel="stylesheet" href="tasanesiaform.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>List Petani</title>
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
    <div class="text-center">
      <h1 style="color: #315343; font-weight: bold">List Petani</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2" style="margin-bottom: 20px">
          <a href="{{ route('nurseries.create') }}"><button type="button" class="btn btn-success">Tambah</button></a>
        </div>
        <div class="col-lg-2 btn-group">
          <button type="button" class="btn btn-success">Lokasi</button>
          <button
            type="button"
            class="btn btn-success dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table table-bordered" style="border: 1px solid black">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Petani</th>
          <th scope="col">ID Petani</th>
          <th scope="col">Detail</th>
          <th scope="col">Action</th>
        </tr>
        @foreach($data_nurseries as $data)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->id}}</td>
        <td><a href="/nurseries/{{$data->id}}/detail">http\pembinaan.tasanesia.com\{{$data->name}}</a></td>
        <td>
          <form action="{{ route('nurseries.destroy', $data->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                DELETE
            </button>
        </form>
        <form action="{{ route('nurseries.edit', $data->id) }}" method="POST">
            @csrf
            @method('GET')
            <button type="submit" class="btn btn-sm btn-success mt-2">
                UPDATE
            </button>
        </form>
          </td> 
        </tr>
        @endforeach
      </table>
    </div>

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
