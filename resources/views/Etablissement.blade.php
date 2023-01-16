@extends('layouts.app')

@section('content')
<div class="container">  
    <style>
        .shadow {
   box-shadow: 0px 0px 40px 5px rgba(0, 0, 0, 0.75);
}
        </style> 
        
        

        @if ($Etablissements)
        <div id="Etablissements-section">
            <table class="table shadow" style="margin: 20px">
                <thead class="bg-primary text-light">
                    <tr>
                        <th class="text-center">id</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Abreviation</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">tutelle</th>
                        <th class="text-center">cotutelle</th>
                        <th class="text-center">origine</th>
                        <th class="text-center">id_cycle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Etablissements as $establishment)
                    <tr>
                        <td class="text-dark">{{ $establishment->id }}</td>
                        <td class="text-dark">{{ $establishment->nom }}</td>
                        <td class="text-dark">{{ $establishment->abrev }}</td>
                        <td class="text-dark">{{ $establishment->type }}</td>
                        <td class="text-dark">{{ $establishment->tutelle }}</td>
                        @if ($establishment->cotutelle)
                        <td class="text-dark">{{ $establishment->cotutelle }}</td>            
                        @else
                        <td class="text-dark">non-cotutle</td>   
                        @endif
                        @if ($establishment->identifiant)
                        <td class="text-dark">{{$establishment->identifiant }}</td>            
                        @else
                        <td class="text-dark">autonome</td>   
                        @endif
                        <td class="text-dark">{{ $establishment->id_cycle }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        </div>
        @endif

<form action="{{ route('etablissements.store') }}" method="POST">
    @csrf
   <div class="form-group row">
        <label for="nom" class="col-sm-1 col-form-label">Nom:</label>
    <div class="col-sm-6">

        <input class="form-control w-50 mx-auto m-2" type="text" name="nom" id="nom">
    </div></div>
    <div class="form-group row">
        <label for="abrev"class="col-sm-1 col-form-label">Abreviation:</label>
    <div class="col-sm-6">

        <input class="form-control w-50 mx-auto m-2" type="text" name="abrev" id="abrev">
    </div></div> 
    <div class="form-group row">
        <label for="abrev"class="col-sm-1 col-form-label">Type:</label>
    <div class="col-sm-6">

        <input class="form-control w-50 mx-auto m-2" type="text" name="type" id="type">
    </div></div>
   <div class="form-group row">
        <label for="tutelle" class="col-sm-1 col-form-label">Tutelle:</label>
    <div class="col-sm-6">

        <input class="form-control w-50 mx-auto m-2" type="text" name="tutelle" id="tutelle">
    </div></div>
   <div class="form-group row">
        <label for="cotutelle" class="col-sm-1 col-form-label">Cotutelle:</label>
    <div class="col-sm-6">

        <input class="form-control w-50 mx-auto m-2" type="text" name="cotutelle" id="cotutelle">
    </div></div>
   <div class="form-group row">
        <label for="identifiant" class="col-sm-1 col-form-label">Identifiant:</label>
    <div class="col-sm-6">

        <input class="form-control w-50 mx-auto m-2" type="text" name="identifiant" id="identifiant">
    </div></div>
   <div class="form-group row">
        <label for="id_cycle" class="col-sm-1 col-form-label">Id Cycle:</label>
    <div class="col-sm-6">

        <input class="form-control w-50 mx-auto m-2" type="text" name="id_cycle" id="id_cycle">
    </div></div>
    <input class="btn btn-primary" type="submit" value="Save">
</form>

@if (session('success'))
<div class="alert alert-success" role="alert">
  <div style="display: flex; align-items: center;">
    <i class="fas fa-check-circle"></i>
    <span class="ml-2">{{ session('success') }}</span>
  </div>
</div>
@endif


</div>
@endsection