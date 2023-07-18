@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire statistique</a></li>
                    <li class="breadcrumb-item active">Cnou</li>
                </ol>
            </div>
            <h4 class="page-title">Tableau</h4>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Répartition du personnel du CNOU</h4>
                <!-- <p class="text-muted font-14">
                    Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                </p> -->

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <!-- <a href="#table-head-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Preview
                        </a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a href="#table-head-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                            Code
                        </a> -->
                    </li>
                </ul> <!-- end nav-->
                <div class="tab-content">
                    <div class="tab-pane show active" id="table-head-preview">
                        <div class="table-responsive-sm">
                            <table class="table table-centered mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Fonction</th>
                                        <th>T</th>
                                        <th>F</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Directeur</td>
                                        <td>23</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Directrice Adjointe</td>
                                        <td>45</td>
                                        <td>98</td>
                                    </tr>
                                    <tr>
                                        <td>Administrateur</td>
                                        <td>23</td>
                                        <td>34</td>
                                    </tr>
                                    <tr>
                                        <td>Agent Administratif</td>
                                        <td>34</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Autre Cadre</td>
                                        <td>45</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Autre Agent</td>
                                        <td>98</td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <td>Bibliothécaire</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Chauffeur</td>
                                        <td></td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Cuisinier</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Femme de Bureau</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Gardien</td>                                                                    
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Manœuvre</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Planton</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Plombier</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Secrétaire</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>34</td>
                                        <td>87</td>
                                    </tr>                                                                                                                        
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->                     
                    </div> <!-- end preview-->
                

                </div> <!-- end tab-content-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
    
</div> <!--end row -->

@endsection
