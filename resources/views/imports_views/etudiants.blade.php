@extends('layouts.app')

@section('content')
            
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('ESP.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control">
            <br>
            <button class="btn btn-primary">Import User Data</button>
        </form>
    </div>
</div>
<div class="row">

<table class="table table-bordered mt-3">
    <tr>
        <th colspan="3">
            List Of Users
            <a class="btn btn-danger float-end" href="{{ route('ESP.export') }}">Export User Data</a>
        </th>
    </tr>
</div>
</div>

@endsection