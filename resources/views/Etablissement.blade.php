@extends('layouts.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire statistique</a></li>
                        <li class="breadcrumb-item active">Etablissements</li>
                    </ol>
                </div>
                <h4 class="page-title">Etablissements</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- start projects-->
                <div class="col-xxl-3 col-lg-4">
                    <div class="pe-xl-3">
                        <h5 class="mt-0 mb-3"></h5>
                        <!-- start search box -->
                        {{-- <div class="app-search">
                            <form>
                                <div class="mb-2 position-relative">
                                    <input type="text" class="form-control" placeholder="search by name...">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                </div>
                            </form>
                        </div> --}}
                        <!-- end search box -->

                        <div class="row">
                            <div class="col">
                                <div data-simplebar="" >
                        
                                    <form class="needs-validation" form action="{{ route('etablissements.store') }}" method="POST" novalidate>
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Nom</label>
                                            <input type="text" class="form-control" id="validationCustom01" name="nom">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Abreviation</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="abrev">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Type</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="type">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Tutelle</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="tutelle">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Cotutelle</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="cotutelle">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Identifiant</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="identifiant">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Cycle</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="id_cycle">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                                    </form>
                                    {{-- <a href="javascript:void(0);" class="text-body">
                                        <div class="d-flex mt-2 p-2">
                                            <div class="avatar-sm d-table">
                                                <span class="avatar-title bg-success-lighten rounded-circle text-success">
                                                    <i class='uil uil-moonset font-24'></i>
                                                </span>
                                            </div>
                                            <div class="ms-2">
                                                <h5 class="mt-0 mb-0">
                                                    Lunar
                                                    <span class="badge badge-success-lighten ms-1">On Track</span>
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    ID: proj101
                                                </p>
                                            </div>
                                        </div>
                                    </a> --}}

                                    {{-- <a href="javascript:void(0);" class="text-body">
                                        <div class="d-flex bg-light p-2">
                                            <div class="avatar-sm d-table">
                                                <span class="avatar-title bg-success-lighten rounded-circle text-success">
                                                    <i class='uil uil-moon-eclipse font-24'></i>
                                                </span>
                                            </div>
                                            <div class="ms-2">
                                                <h5 class="mt-0 mb-0">
                                                    Dark Moon
                                                    <span class="badge badge-success-lighten ms-1">On
                                                        Track</span>
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    ID: proj102
                                                </p>
                                            </div>
                                        </div>
                                    </a> --}}

                                    {{-- <a href="javascript:void(0);" class="text-body">
                                        <div class="d-flex mt-1 px-2 py-2">
                                            <div class="avatar-sm d-table">
                                                <span class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                    <i class='uil uil-mountains font-24'></i>
                                                </span>
                                            </div>
                                            <div class="ms-2">
                                                <h5 class="mt-0 mb-0">
                                                    Aurora
                                                    <span class="badge badge-warning-lighten ms-1">Locked</span>
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    ID: proj103
                                                </p>
                                            </div>
                                        </div>
                                    </a> --}}

                                    {{-- <a href="javascript:void(0);" class="text-body">
                                        <div class="d-flex mt-1 px-2 py-2">
                                            <div class="avatar-sm d-table">
                                                <span class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                    <i class='uil uil-moon font-24'></i>
                                                </span>
                                            </div>
                                            <div class="ms-2">
                                                <h5 class="mt-0 mb-0">
                                                    Blue Moon
                                                    <span class="badge badge-warning-lighten ms-1">Locked</span>
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    ID: proj104
                                                </p>
                                            </div>
                                        </div>
                                    </a> --}}

                                    {{-- <a href="javascript:void(0);" class="text-body">
                                        <div class="d-flex mt-1 px-2 py-2">
                                            <div class="avatar-sm d-table">
                                                <span class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                    <i class='uil uil-ship font-24'></i>
                                                </span>
                                            </div>
                                            <div class="ms-2">
                                                <h5 class="mt-0 mb-0">
                                                    Casanova
                                                    <span class="badge badge-danger-lighten ms-1">Delayed</span>
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    ID: proj106
                                                </p>
                                            </div>
                                        </div>
                                    </a> --}}

                                    {{-- <a href="javascript:void(0);" class="text-body">
                                        <div class="d-flex mt-1 px-2 py-2">
                                            <div class="avatar-sm d-table">
                                                <span class="avatar-title bg-success-lighten rounded-circle text-success">
                                                    <i class='uil uil-subway-alt font-24'></i>
                                                </span>
                                            </div>
                                            <div class="ms-2">
                                                <h5 class="mt-0 mb-0">
                                                    Darwin
                                                    <span class="badge badge-success-lighten ms-1">On
                                                        Track</span>
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    ID: proj107
                                                </p>
                                            </div>
                                        </div>
                                    </a> --}}

                                    {{-- <a href="javascript:void(0);" class="text-body">
                                        <div class="d-flex mt-1 px-2 py-2">
                                            <div class="avatar-sm d-table">
                                                <span class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                    <i class='uil uil-gold font-24'></i>
                                                </span>
                                            </div>
                                            <div class="ms-2">
                                                <h5 class="mt-0 mb-0">
                                                    Eagle
                                                    <span class="badge badge-danger-lighten ms-1">Delayed</span>
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    ID: proj108
                                                </p>
                                            </div>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end projects -->

                <!-- gantt view -->
                {{-- <div class="col-xxl-9 mt-4 mt-xl-0 col-lg-8">
                    <div class="ps-xl-3"> --}}
                        {{-- <div class="row"> --}}
                            {{-- <div class="col-auto">
                                <a href="javascript: void(0);" class="btn btn-success btn-sm mb-2">Add New Task</a>
                            </div> --}}
                            {{-- <div class="col text-sm-end"> --}}
                                {{-- <div class="btn-group btn-group-sm mb-2" data-bs-toggle="buttons" id="modes-filter">
                                    <label class="btn btn-primary d-none d-sm-inline-block">
                                        <input class="btn-check" type="radio" name="modes" id="qday" value="Quarter Day"> Quarter Day
                                    </label>
                                    <label class="btn btn-primary">
                                        <input class="btn-check" type="radio" name="modes" id="hday" value="Half Day"> Half Day
                                    </label>
                                    <label class="btn btn-primary">
                                        <input class="btn-check" type="radio" name="modes" id="day" value="Day"> Day
                                    </label>
                                    <label class="btn btn-primary active">
                                        <input class="btn-check" type="radio" name="modes" id="week" value="Week" checked=""> Week
                                    </label>
                                    <label class="btn btn-primary">
                                        <input class="btn-check" type="radio" name="modes" id="month" value="Month"> Month
                                    </label> --}}
                                {{-- </div> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- @if ($Etablissements)
                        <div class="row">
                            <div class="col mt-3">
                                <table id="alternative-page-datatable" class="table dt-responsive nowrap">
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
                        </div>
                        @endif --}}
                    {{-- </div>
                </div> --}}
                <!-- end gantt view -->
            </div>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->
{{-- <div class="container">  
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
                        <th class="text-center">tutelle</th>
                        <th class="text-center">cotutelle</th>
                        <th class="text-center">Type</th>
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
                        @if ($establishment->tutelle)
                        <td class="text-dark">{{ $establishment->tutelle }}</td>
                        @else
                        <td class="text-dark">non-tutele</td>
                        @endif
                        @if ($establishment->cotutelle)
                        <td class="text-dark">{{ $establishment->cotutelle }}</td>
                        @else
                        <td class="text-dark">non-cotutelle</td>
                        @endif
                        <td class="text-dark">{{ $establishment->type }}</td>
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


</div> --}}
@endsection
