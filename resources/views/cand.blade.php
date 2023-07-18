@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire statistique</a></li>
                    <li class="breadcrumb-item active">Candidats</li>
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

                <h4 class="header-title">Effectifs des candidats au bac par wilaya</h4>
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
                                        <th>Wilaya</th>
                                        <th>Effectif des candidats</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>NKTT</td>
                                        <td>24000</td>
                                    </tr>
                                    <tr>
                                        <td>NEMA</td>
                                        <td>2000</td>
                                    </tr>
                                    <tr>
                                        <td>ATAR</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>TRARZA</td>
                                        <td>12000</td>
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

                <h4 class="header-title">Taux de réussite par genre et par série</h4>
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
                                        <th ></th>
                                        <th>genre</th>
                                        <th>LM</th>
                                        <th>LO</th>
                                        <th>M</th>
                                        <th>SN</th>
                                        <th>TMGM</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                    <tr>
                                       <th rowspan="3">Présents</th>
                                       <th>T</th>
                                       <th>11100</th>
                                       <th>8209</th>
                                       <th>19341</th>
                                       <th>4444</th>
                                       <th>1999</th>
                                       <th>40000</th>
                                    </tr>
                                    <tr>

                                        <th>F</th>
                                        <th>5212</th>
                                        <th>4171</th>
                                        <th>675</th>
                                        <th>12173</th>
                                        <th>12222</th>
                                        <th>222229</th>
                                     </tr>
                                     <tr>

                                        <th>G</th>
                                        <th>6000</th>
                                        <th>5444</th>
                                        <th>10000</th>
                                        <th>2566</th>
                                        <th>988</th>
                                        <th>35900</th>
                                     </tr>
                                     <tr>
                                        <th rowspan="3">Admis première <br> et <br> deuxième session</th>
                                        <th>T</th>
                                        <th>11100</th>
                                        <th>8209</th>
                                        <th>19341</th>
                                        <th>4444</th>
                                        <th>1999</th>
                                        <th>40000</th>
                                     </tr>
                                     <tr>

                                         <th>F</th>
                                         <th>5212</th>
                                         <th>4171</th>
                                         <th>675</th>
                                         <th>12173</th>
                                         <th>12222</th>
                                         <th>222229</th>
                                      </tr>
                                      <tr>

                                         <th>G</th>
                                         <th>6000</th>
                                         <th>5444</th>
                                         <th>10000</th>
                                         <th>2566</th>
                                         <th>988</th>
                                         <th>35900</th>
                                      </tr>
                                      <tr>
                                        <th rowspan="3">% Admis</th>
                                        <th>T</th>
                                        <th>11100</th>
                                        <th>8209</th>
                                        <th>19341</th>
                                        <th>4444</th>
                                        <th>1999</th>
                                        <th>40000</th>
                                     </tr>
                                     <tr>

                                         <th>F</th>
                                         <th>5212</th>
                                         <th>4171</th>
                                         <th>675</th>
                                         <th>12173</th>
                                         <th>12222</th>
                                         <th>222229</th>
                                      </tr>
                                      <tr>

                                         <th>G</th>
                                         <th>6000</th>
                                         <th>5444</th>
                                         <th>10000</th>
                                         <th>2566</th>
                                         <th>988</th>
                                         <th>35900</th>
                                      </tr>
                                      <tr>
                                         <th rowspan="3">Admis première <br> et <br> deuxième session</th>
                                         <th>T</th>
                                         <th>11100</th>
                                         <th>8209</th>
                                         <th>19341</th>
                                         <th>4444</th>
                                         <th>1999</th>
                                         <th>40000</th>
                                      </tr>
                                      <tr>

                                          <th>F</th>
                                          <th>5212</th>
                                          <th>4171</th>
                                          <th>675</th>
                                          <th>12173</th>
                                          <th>12222</th>
                                          <th>222229</th>
                                       </tr>
                                       <tr>

                                          <th>G</th>
                                          <th>6000</th>
                                          <th>5444</th>
                                          <th>10000</th>
                                          <th>2566</th>
                                          <th>988</th>
                                          <th>35900</th>
                                       </tr>
                                <tbody>

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

                <h4 class="header-title">Taux de réussite par session et par type de candidature</h4>
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
                                        <tr>

                                            <th colspan="5"><center> Candidats </center></th>
                                            <th colspan="5"><center>Admis</center></th>
                                            <th colspan="5"><center>Taux de réussite</center></th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>Serie</td>
                                    <td>Libres</td>
                                    <td>Privés</td>
                                    <td>Officiels</td>
                                    <td>Total</td>
                                    <td>Libres</td>
                                    <td>Privés</td>
                                    <td>Officiels</td>
                                    <td>Total</td>
                                    <td>Libres</td>
                                    <td>Privés</td>
                                    <td>Officiels</td>
                                    <td>Total</td>
                                </tr>
                                <tr>
                                    <td>LM</td>
                                    <td>3797</td>
                                    <td>1326</td>
                                    <td>4921</td>
                                    <td>10044</td>
                                    <td>329</td>
                                    <td>197</td>
                                    <td>602</td>
                                    <td>1128</td>
                                    <td>9%</td>
                                    <td>15%</td>
                                    <td>12%</td>
                                </tr>
                                <tr>
                                    <td>LO</td>
                                    <td>1733</td>
                                    <td>5019</td>
                                    <td>1457</td>
                                    <td>8209</td>
                                    <td>137</td>
                                    <td>901</td>
                                    <td>258</td>
                                    <td>1296</td>
                                    <td>8%</td>
                                    <td>18%</td>
                                    <td>18%</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td>190</td>
                                    <td>821</td>
                                    <td>930</td>
                                    <td>1941</td>
                                    <td>8</td>
                                    <td>320</td>
                                    <td>242</td>
                                    <td>570</td>
                                    <td>4%</td>
                                    <td>39%</td>
                                    <td>26%</td>
                                </tr>
                                <tr>
                                    <td>SN</td>
                                    <td>4154</td>
                                    <td>11596</td>
                                    <td>8571</td>
                                    <td>24321</td>
                                    <td>248</td>
                                    <td>2741</td>
                                    <td>1055</td>
                                    <td>4044</td>
                                    <td>6%</td>
                                    <td>24%</td>
                                    <td>12%</td>
                                </tr>
                                <tr>
                                    <td>TMGM</td>
                                    <td>39</td>
                                    <td></td>
                                    <td>163</td>
                                    <td>202</td>
                                    <td>7</td>
                                    <td></td>
                                    <td>49</td>
                                    <td>56</td>
                                    <td>18%</td>
                                    <td></td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>9913</td>
                                    <td>18762</td>
                                    <td>16042</td>
                                    <td>44717</td>
                                    <td>729</td>
                                    <td>4159</td>
                                    <td>2206</td>
                                    <td>7094</td>
                                    <td>7%</td>
                                    <td>22%</td>
                                    <td>14%</td>
                                </tr>
                                <tbody>

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

                <h4 class="header-title">Répartition des orientés à l’étranger par pays et par filière</h4>
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
                                            <th>Filière</th>
                                            <th>algerie</th>
                                            <th>Egypte</th>
                                            <th>Maroc</th>
                                            <th>Senegal</th>
                                            <th>Tunisie</th>
                                            <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Biotechnologie</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>6</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>CPGEI</td>
                                        <td></td>
                                        <td></td>
                                        <td>15</td>
                                        <td></td>
                                        <td>2</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>Ecole Supéreure de Technologies</td>
                                        <td></td>
                                        <td></td>
                                        <td>16</td>
                                        <td></td>
                                        <td></td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td>ENCG</td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                        <td></td>
                                        <td></td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>Ingénieur</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Ingénieur agromome</td>
                                        <td></td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Ingénieur en Industrie</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Ingénieur en Mécanique</td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Laboratoires</td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Médecine Dentaire</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Médecine Générale</td>
                                        <td></td>
                                        <td></td>
                                        <td>10</td>
                                        <td>16</td>
                                        <td>11</td>
                                        <td>37</td>
                                    </tr>
                                    <tr>
                                        <td>Médecine vétérinaire</td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Pharmacie</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Science de la mer</td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>SCIENCES APP ET DE TECHNOLOGIE</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Sciences appliquées et de technologie</td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td></td>
                                        <td>8</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Sciences de l&#39;agriculture</td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Sciences et techniques de la santé</td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td></td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Sciences et technologie de l&#39;environnement</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Total général</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>70</td>
                                        <td>19</td>
                                        <td>40</td>
                                        <td>140</td>
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
