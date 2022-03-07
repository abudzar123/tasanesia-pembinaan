@extends('layouts.default')

@section('title', 'ProjectLocation')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('project_location.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Project id</label>
                <div class="col-sm">
                    <input type="text" name="project_id" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Province id</label>
                <div class="col-sm">
                    <input type="text" name="province_id" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">City id</label>
                <div class="col-sm">
                    <input type="text" name="city_id" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">District id</label>
                <div class="col-sm">
                    <input type="text" name="district_id" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm">
                    <input type="text" name="location" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Notes</label>
                <div class="col-sm">
                    <input type="text" name="notes" class="form-control">
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