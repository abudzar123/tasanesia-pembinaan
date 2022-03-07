@extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data projectlocation</h1>

<form action="/project_location/{{ $project_location->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Project id</label>
                    <input type="text" name="project_id" class="form-control" value="{{ $project_location->project_id}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Province id</label>
                    <input type="text" name="province_id" class="form-control"  value="{{ $project_location->province_id}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">City id</label>
                    <input type="text" name="city_id" class="form-control"  value="{{ $project_location->city_id }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">District id</label>
                    <input type="text" name="district_id" class="form-control" value="{{ $project_location->district_id }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Location</label>
                    <input type="text" name="location" class="form-control" value="{{ $project_location->location }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Notes</label>
                    <input type="text" name="notes" class="form-control" value="{{ $project_location->notes }}">
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


@endsection