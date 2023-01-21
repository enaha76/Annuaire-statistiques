@extends('layouts.app')

@section('content')

           
                 {{-- ----start page title-- --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire Statistique</a></li>
                                       
                                
                                    </ol> 
                                </div>
                                <h4 class="page-title">Accueil</h4>
                            </div>
                        </div>
                    </div>     
             <!-- end page title -->

                            <div class="row">
                                <div class="col-xl-5 col-lg-6">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <i class=" dripicons-graph-pie widget-icon"></i>
                                                    </div>
                                                    <h5 class="bold mt-0  text-primary " title="Number of Customers"> <i class="uil-users-alt m-1"></i> Etudiants</h5>
                                                    @php
                                                        
                                                        $s=0;
                                                    foreach ( $List as $list=>$one ){
                                                     
                                                       $s = $s + intval($one->total) ;
                                                    }
                                                    
                                                    @endphp
                                                    <h3 class="mt-3 mb-3 ">{{ $s }}</h3>

                                                    <p class="mb-0 ">
                                                        {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>--}}
                                                        <span class="text-nowrap">Since last month</span>   
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->

                                        <div class="col-lg-6">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <i class=" dripicons-graph-bar widget-icon"></i>
                                                    </div>
                                                    <h5 class=" bold mt-0  text-primary  " title="Number of Orders"><i class="mdi mdi-teach m-1"></i>Professeurs</h5>
                                                    <h3 class="mt-3 mb-3">0</h3>
                                                    <p class="mb-0 text-muted">
                                                        {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 1.08%</span>
                                                        <span class="text-nowrap">Since last month</span> --}}
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <i class=" dripicons-graph-line widget-icon"></i>
                                                    </div>
                                                    <h5 class=" bold mt-0  text-primary " title="Average Revenue"><i class="mdi mdi-school-outline m-1  "></i>Candidats Bac</h5>
                                                    <h3 class="mt-3 mb-3">0</h3>
                                                    <p class="mb-0 text-muted">
                                                        {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 7.00%</span>
                                                        <span class="text-nowrap">Since last month</span> --}}
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->

                                        <div class="col-lg-6">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <i class="mdi mdi-chart-scatter-plot widget-icon"></i>
                                                    </div>
                                                    <h5 class=" bold mt-0  text-primary " title="Growth"><i class="mdi mdi-domain m-1 rounded-circle"></i>Etablissements</h5>
                                                    <h3 class="mt-3 mb-3" id="etab"> </h3>
                                                    <p class="mb-0 text-muted">
                                                        {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                        <span class="text-nowrap">Since last month</span> --}}
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->

                                </div> <!-- end col -->

                                <div class="col-xl-7 col-lg-6">
                                    <div class="card card-h-100">
                                        <div class="card-body">
                                           
                                            <div  data-simplebar="" style="max-height: 300px;">
                                            <h4 class="header-title mb-3">Effectifs des étudiants par établissement du public</h4>

                                                 @php

                                                 $array_eteblissment=[];                       
                                                       foreach ($List2 as $one) {
                                                        $v=$one->abrev;
                                                        $m=[];
                                                        foreach (collect($List3)->where('identifiant', $one->id) as $value) {                                                           
                                                            $m[]=$value->abrev;                                                           
                                                        };
                                                        if(!$m){
                                                            if ($one->type=='institut') {                                         
                                                            }
                                                        $m[]=$v;
                                                        }
                                                         $array_eteblissment[$v]=$m;  
                                                    }                                                  
                                                 @endphp
                                         
                                                                <h4 class="header-title mb-3"></h4>
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0">
                                                                        <thead >
                                                                        <tr>
                                                                            <th>Les etablisment</th>
                
                                                                            <th>Total</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="tab">
                                                                            @foreach ( $List2 as $list=>$one )
                                                                               <tr>
                                                                                <td >
                                                                                    {{ $one->abrev }}
                                                                                </td>
                                                                                <td >
                                                                                    {{ $one->total}}
                                                                                </td>
                                                                                {{-- <td>{{ $one['total']}}</td> --}}
                                                                                {{-- <td>{{ $one['Filles'] }}</td>--}}
                                                                                {{-- <td>{{ $one['total'] - $one['Filles'] }}</td>
                                                                                <td>{{ $one['total']}}</td>--}}
                                                                            </tr>

                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                               
                                                            </div>
                                                      </div>
                                                </div> <!-- end card-body-->
                                           </div> <!-- end card-->
                                      </div> <!-- end col -->
                                 </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        {{-- <div class="card-body"> --}}
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"></a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"></a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"></a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"></a>
                                                    </div>
                                                </div>
                                                <h4 class="header-title">Repartution des etudiants par etablissement</h4>

                                                <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>


                                                <div class="chart-widget-list">
                                                    <p>
                                                        <i class="mdi mdi-square text-primary"></i> SUPNUM
                                                        <span class="float-end"></span>
                                                    </p>
                                                    <p>
                                                        <i class="mdi mdi-square text-danger"></i>ISCAE
                                                        <span class="float-end"></span>
                                                    </p>
                                                    <p>
                                                        <i class="mdi mdi-square text-success"></i> ESP
                                                        <span class="float-end"></span>
                                                    </p>
                                                    <p class="mb-0">
                                                        <i class="mdi mdi-square text-warning"></i> FST
                                                        <span class="float-end"></span>
                                                    </p>
                                                </div>
                                            </div>
                                           
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                 <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown float-end">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                            <h4 class="header-title">Revenue By Location</h4>
                                            <div class="mb-4 mt-4">
                                                <div id="world-map-markers" style="height: 224px"></div>
                                            </div>

                                            <h5 class="mb-1 mt-0 fw-normal"></h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value fw-bold"></span>
                                                {{-- <div class="progress progress-sm">
                                                    <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> --}}
                                             </div>

                                            <h5 class="mb-1 mt-0 fw-normal"></h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value fw-bold"> </span>
                                                 {{-- <div class="progress progress-sm">
                                                 <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                                 </div> --}}
                                             </div>

                                            <h5 class="mb-1 mt-0 fw-normal">
                                                {{-- @php
                                                    foreach ($etablissements) {
                                                             
                                                      echo $key;
                                                    }
                                                    echo i
                                                @endphp --}}
                                            </h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value fw-bold"></span>
                                                {{-- <div class="progress progress-sm">
                                                    <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>  --}}
                                            </div>

                                            <h5 class="mb-1 mt-0 fw-normal"></h5>
                                            <div class="progress-w-percent mb-0">
                                                <span class="progress-value fw-bold"></span>
                                                {{-- <div class="progress progress-sm">
                                                    <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> --}}
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                            <!-- end row -->


                                                </div>
                                                <!-- end timeline -->
                                            </div> <!-- end slimscroll -->
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->

                        </div>
                        <!-- container -->

                        {{-- <script>
                            console.log(dataJSON);
                        </script> --}}
                        <script>
                          const box = document.getElementById('tab');

                            const allChildren = box.getElementsByTagName('*').length;
                            // console.log(allChildren); 

                            const directChildren = box.children.length;
                            // console.log("ha4e hwe r9m",directChildren); 
                            document.getElementById("etab").innerHTML = directChildren;
                        </script>
                <!-- bundle -->
         <script src="assets/js/vendor.min.js"></script>
         <script src="assets/js/app.min.js"></script>
 
         <!-- third party js -->
         <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
         <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
         <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
         <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>
         <script src="assets/js/vendor/dataTables.buttons.min.js"></script>
         <script src="assets/js/vendor/buttons.bootstrap5.min.js"></script>
         <script src="assets/js/vendor/buttons.html5.min.js"></script>
         <script src="assets/js/vendor/buttons.flash.min.js"></script>
         <script src="assets/js/vendor/buttons.print.min.js"></script>
         <script src="assets/js/vendor/dataTables.keyTable.min.js"></script>
         <script src="assets/js/vendor/dataTables.select.min.js"></script>
         <!-- third party js ends -->
 
         <!-- demo app -->
         <script src="assets/js/pages/demo.datatable-init.js"></script>
         <!-- end demo js-->       
@endsection
