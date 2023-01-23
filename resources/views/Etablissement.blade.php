@extends('layouts.app')

@section('content')

@php
                                        $n= ['LMD','PCME','ANNEE'];
                                        
                                        $prive=['prive','public'];         

                                        @endphp

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
        
        <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-task-modal" class="btn btn-success btn-sm ms-3 m-2"><i class=" dripicons-plus">Ajouter un Etablissement </i></a>
            <!--  Add new task modal -->
            <div class="modal fade task-modal-content" id="add-new-task-modal" tabindex="-1" role="dialog" aria-labelledby="NewTaskModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="NewTaskModalLabel">Ajouter un Etablissement</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <form class="p-2" action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="task-title" class="form-label">Nom</label>
                                            <input type="text" class="form-control form-control-light" id="task-title" name="nom" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="task-priority2" class="form-label">Cycle</label>
                                            <select name="id_cycle" class="form-control form-control-light" id="task-title">
                                                @foreach ($cycles as $one )
                                                    <option value={{$one->id}}>{{$one->nom}}</option>
                                                @endforeach
                                             
                                               
                                            </select>
                                           
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="task-title" class="form-label">Type</label>
                                            <input type="text" class="form-control form-control-light" id="task-title" name="type" >
                                        </div>
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="task-priority2" class="form-label">Tutuelle</label>
                                            <input type="text" class="form-control form-control-light" id="task-title"  name="tutelle">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="task-title" class="form-label">Cotutelle</label>
                                            <input type="text" class="form-control form-control-light" id="task-title" name="cotutelle">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="task-priority2" class="form-label">Abreviation</label>
                                            <input type="text" class="form-control form-control-light" id="task-title" name="abrev">
                                        </div>
                                    </div>
                                    
                                </div>
    
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="task-title" class="form-label">Origin</label>
                                            <select name="identifiant" class="form-control form-control-light" id="task-title">
                                                <option value="" selected>Autonome</option>
                                                @foreach ($origin as $one )
                                                    <option value={{$one->id }}>{{$one->abrev}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="task-priority2" class="form-label">Enseignment</label>
                                            <select name="privee" class="form-control form-control-light" id="task-title">
                                                <option value="0">Public</option>
                                                <option value="1">Privé</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-end">
                                    {{-- <input type="submit" class="btn btn-light"  value="Annuler" data-dismiss="modal"> --}}
                                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br> <br>
            @if ($Etablissements)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="tab-content">
                                <div class="tab-pane show active" id="buttons-table-preview 1">
                                    <table class="table table-striped dt-responsive nowrap w-100" >
                                        
                                        <thead>
                                            <tr style="font-weight:bold">
                                            {{-- <td>id</td> --}}
                                            <td colspan="2">NOM</td>
                                            <td>TUTELLE</td>
                                            <td>COTUTELLE</td>
                                            <td>ETAT</td>
                                            <td>ORIGIN</td>
                                            <td>CYCLE</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($Etablissements as $eta) 
                                        
                                        <tr>

                                        {{-- <td>  {{$eta->id }} </td> --}}
                                       <td><a href="{{url('etablissements/'.$eta->id)}}"> {{$eta->abrev }} </a></td> 
                                       <td><a href="{{url('etablissements/'.$eta->id)}}"> {{$eta->nom }} </a></td>
                                        <td>  {{$eta->tutelle }} </td>
                                        <td>  {{$eta['co-tutelle'] }} </td>
                                        <td>  {{$prive[$eta->privee]}} </td>
                                        <td> 
                                         @foreach($Etablissements as $institution)
                                            @if($institution['id'] == $eta->id)
                                                {{ $institution['nom'] }}
                                                @break
                                            @endif
                                        @endforeach 
                                        </td>
                                        <td>  {{$n[$eta->id_cycle-1]}} </td>
                                    </tr>
                                        
                                
                                        @endforeach
                                        </tbody>
                                    </table>

                                    

                                </div> <!-- end preview-->
                             
                               
                            </div> <!-- end tab-content-->
                            
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
                
            @endif
</div>

@endsection
