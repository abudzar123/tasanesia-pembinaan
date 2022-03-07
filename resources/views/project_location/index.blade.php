@extends('layouts.default')

@section('title', 'ProjectLocation')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session ('sukses')}}
            </div>
            @endif
              <div class="row justify-content-between">
                  <div class="col-3">
                       <h1 style="color:green">Data Project Location</h1>
                  </div>
                  <div class="col-4">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('project_location.create') }}">Tambah Project Location</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Project id</th>
                    <th>Province id</th>
                    <th>City id</th>
                    <th>District id</th>
                    <th>Location</th>
                    <th>Notes</th>
                  </tr>
                  @foreach($data_project_location as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->project_id }}</td>
                    <td>{{ $data->province_id }}</td>
                    <td>{{ $data->city_id }}</td>
                    <td>{{ $data->district_id }}</td>
                    <td>{{ $data->location }} </td>
                    <td>{{ $data->notes }}</td>
                    <td>
                      <form action="{{ route('project_location.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                            DELETE
                        </button>
                    </form>
                      <form action="{{ route('project_location.edit', $data->id) }}" method="POST">
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
          </div>
        </div>
    </div>
</div>

@endsection