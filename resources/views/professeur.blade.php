@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire statistique</a></li>
                    <li class="breadcrumb-item active">Enseignants</li>
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

                    <h4 class="header-title">Répartition des enseignants par établissement</h4>
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
                                        <th>Etablissement</th>
                                        <th>Institution</th>
                                        <th>Frequence</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="5">UNA</td>
                                            <td>FLSH</td>
                                            <td>137</td>
                                        </tr>
                                        <tr>
                                            <td>FM</td>
                                            <td>95</td>

                                        </tr>
                                        <tr>
                                            <td>FSJE</td>
                                            <td>109</td>
                                        </tr>
                                        <tr>
                                            <td>FST</td>
                                            <td>140</td>
                                        </tr>
                                        <tr>
                                            <td>IUP</td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">USIA</td>
                                            <td>FLASH</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td>FOE</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>FSI</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">ESP</td>
                                            <td>ESP-cycle ingénieurs</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>IPGEI</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>IS2M</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISMBTU</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ENS</td>
                                            <td></td>
                                            <td>69</td>
                                        </tr>
                                        <tr>
                                            <td>ISCAE</td>
                                            <td></td>
                                            <td>35</td>
                                        </tr>
                                        <tr>
                                            <td>ISERI</td>
                                            <td></td>
                                            <td>59</td>
                                        </tr>
                                        <tr>
                                            <td>ISET</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISPLTI</td>
                                            <td></td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>AN</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Total général</td>
                                            <td></td>
                                            <td>764</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>




    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title"> Enseignants permanents par tranche d’âge</h4>
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
                                        <th>Tranche d'age</th>
                                        <th>Effectif</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>25 à 29 ans</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>30 à 34 ans</td>
                                            <td>14</td>

                                        </tr>
                                        <tr>
                                            <td>35 à 39 ans</td>
                                            <td>49</td>
                                        </tr>
                                        <tr>
                                            <td>40 à 44 ans</td>
                                            <td>87</td>
                                        </tr>
                                        <tr>
                                            <td>45 à 49 ans</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <td>50 à 54 ans</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td>55 à 59 ans</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>60 à 64 ans</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>65 ans</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td>21</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>764</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>



    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title"> Répartition des enseignants par grade et par établissement</h4>
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
                                                <th rowspan="2">Etablissement</th>
                                                <th colspan="7"><center>Grade</center></th>
                                                <th rowspan="2">Total</th>
                                           </tr>
                                           <tr>
                                                <th>MA (A1)</th>
                                                <th>MC (A2)</th>
                                                <th>PH (A3)</th>
                                                <th>PU (A4)</th>
                                                <th>MT</th>
                                                <th>T</th>
                                                <th>NR</th>
                                           </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UNA</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>USIA</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ENS</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ESP</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISCAE</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISERI</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISET</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISPLTI</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>AN</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Total général</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Enseignants permanents par diplôme, par genre et par établissement</h4>
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
                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th rowspan="2">Etablissement</th>
                                            <th colspan="2">Thése d'Etat </th>
                                            <th colspan="2">HDR</th>
                                            <th colspan="2">Doctorat Unique-PHD</th>
                                            <th colspan="2"> Doc 3éme cycle/Magister</th>
                                            <th colspan="2"> DEA/DESS </th>
                                            <th colspan="2">Master/Ingénieur</th>
                                            <th colspan="2">CES </th>
                                            <th colspan="2">Agrégation</th>
                                            <th colspan="2">Autres</th>
                                            <th colspan="2">NR </th>
                                            <th colspan="2">Total Général</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>T</th>
                                            <th>F</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ENS</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ESP</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISCAE</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISERI</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISET</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ISPLTI</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>UNA</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>USIA</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>AN</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Total général</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Répartition des enseignants mauritaniens permanents par domaine d'étude</h4>
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
                                            <td>Domaine</td>
                                            <td>Fréquance</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lettres (à l’exception des langues)</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Santé</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Langues</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences physiques</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Droit</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences biologiques et apparentées</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Technologies de l’information et de la communication (TIC)</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Commerce et administration</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ingénierie et techniques apparentées</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Industries de transformation et de production</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Agriculture</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Éducation</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Journalisme et information</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences vétérinaires</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Architecture et bâtiment</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Environnement</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Services de transport</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Total général</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>



    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title"> Enseignants permanents, par institution, par domaine d'étude, par diplôme</h4>
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
                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Column1</th>
                                            <th>Column2</th>
                                            <th>Column3</th>
                                            <th>Thése d'Etat</th>
                                            <th>HDR</th>
                                            <th>Doctorat Unique-PHD</th>
                                            <th>Doc 3éme</th>
                                            <th>DEA/</th>
                                            <th>Master/</th>
                                            <th>CES</th>
                                            <th>Agregation</th>
                                            <th>autres</th>
                                            <th>NR</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="26">UNA</td>
                                            <td rowspan="4">FLSH</td>
                                            <td>Langues</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lettres (à l’exception des langues)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="6">FSJE</td>
                                            <td>Commerce et administration</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Droit</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td>Technologies de l’information et de la communication (TIC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="6">FST</td>
                                            <td>Environnement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences biologiques et apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences physiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Technologies de l’information et de la communication (TIC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">FM</td>
                                            <td>Santé</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences biologiques et apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="8">IUP</td>
                                            <td>Commerce et administration</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ingénierie et techniques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Services de transport</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Technologies de l’information et de la communication (TIC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">AN</td>
                                            <td rowspan="1">AN</td>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">ENS</td>
                                            <td rowspan="1">ENS</td>
                                            <td>Education</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="10">ISCAE</td>
                                            <td rowspan="10">ISCAE</td>
                                            <td>Ingénierie et techniques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Langues</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lettres (à l’exception des langues)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences biologiques et apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences physiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Commerce et administration</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="6">ISERI</td>
                                            <td rowspan="6">ISERI</td>
                                            <td>Droit</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Environnement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Technologies de l’information et de la communication (TIC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Langues</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">ISET</td>
                                            <td rowspan="4">ISET</td>
                                            <td>Lettres (à l’exception des langues)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Agriculture</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="20">ESP</td>
                                            <td rowspan="12">ESP-cycle Ingénieurs</td>
                                            <td>Architecture et bâtiment</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Industries de transformation et de production</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Langues</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences biologiques et apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences physiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences vétérinaires</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Technologies de l’information et de la communication (TIC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Commerce et administration</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Industries de transformation et de production</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Ingénierie et techniques   apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">IS2M</td>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">ISMBTU</td>
                                            <td>Ingénierie et techniques apparentées</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences physiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Technologies de l’information et de la communication (TIC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">IPGEI</td>
                                            <td>Langues</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mathématiques et statistiques</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="11">USIA</td>
                                            <td rowspan="5">FLASH</td>
                                            <td>Journalisme et information</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Langues</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lettres (à l’exception des langues)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">FOE</td>
                                            <td>Lettres (à l’exception des langues)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">FSI</td>
                                            <td>Journalisme et information</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lettres (à l’exception des langues)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sciences sociales et du comportement</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NR</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">ISPLTI</td>
                                            <td rowspan="5">ISPLTI</td>
                                            <td>Langues</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Total général</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


@endsection
