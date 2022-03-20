<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="sidebar.css" />
    <link rel="stylesheet" href="tasanesiaform.css" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>List Pembina</title>
  </head>
  <body>
    <section>
      <div class="col-md-10 p-0" id ="uiNavbar">
        <div class="main-toolbar bg-custom-2 p-3">
          <i class="bi bi-justify fs-1 " style="color: #315343;" id="demo" onclick="closeNav()"></i>
          <img src="{{asset('img/permata desa indonesia logo horisontal.png')}}" class="brand-image" width="70%" alt="" srcset="">
          <div class="nav-right ms-auto">
            <div class="dropdown">
              <button class="btn dropdown-toggle" style=" color: #315343;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Pembina
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/logout">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
    <div class="text-center">
      <h1 style="color: #315343; font-weight: bold">List Pembina</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-2 col-sm-3 col-2" style="margin-bottom: 20px">
            <a href="{{ route('coach.create') }}"><button type="button" class="btn"  style="background-color: #315343;color:white;">Tambah</button></a>
        </div>
          <div class="col-lg-3 col-md-2 col-sm-3 col-2 mx-3" style="margin-bottom: 20px">
            <div class="btn-group">
            <button type="button" style="background-color: #315343;color:white; border-radius: 5px;" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Lokasi
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 offset-2 col-md-2 col-sm-3 col-2" style="margin-bottom: 20px">
          <button type="button" class="btn" style="background-color: #315343;color:white; border-radius: 5px;">Search<i class="fas fa-search mx-1"></i></button>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <table class="table table-bordered" style="border: 1px solid black">
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Pembina</th>
          <th scope="col">Nama Pembina</th>
          <th scope="col">Detail</th>
          <th scope="col">Edit</th>
        </tr>
        <tr>
          @foreach($data_coach as $data)
          <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td><a href="/coach/{{$data->id}}/detail">http\tasanesia.com\{{$data->name}}</a></td>
          <td>
            <form action="{{ route('coach.destroy', $data->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                  DELETE
              </button>
            </form>
          <form action="{{ route('coach.edit', $data->id) }}" method="POST">
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





