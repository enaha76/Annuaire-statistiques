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
        <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-task-modal" class="btn btn-success btn-sm ms-3"><i class=" dripicons-plus"> </i></a>
            <!--  Add new task modal -->
            <div class="modal fade task-modal-content" id="add-new-task-modal" tabindex="-1" role="dialog" aria-labelledby="NewTaskModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="NewTaskModalLabel">Ajouter un Etablissement</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <form class="p-2" action="{{ route('store') }}" method="post">
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
                                            <input type="text" class="form-control form-control-light" id="task-title" name="id_cycle">
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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="task-title" class="form-label">Identifiant</label>
                                            <input type="text" class="form-control form-control-light" id="task-title" name="identifiant">
    
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

@endsection
