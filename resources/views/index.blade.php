@extends('layouts.app')

@section('content')

                {{-- <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Accueil</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Accueil</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Etudiants Customers : </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('etudiants') }}">voir les details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Professeur : 304</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">voir les details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Candidats admis : 7890 </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">voir les details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Candidats ajournées : 7890 </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">voir les details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                {{-- <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div> --}}
                            {{-- </div>

                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            liste des etablisement
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Les etablisment</th>
                                            <th>Total</th>
                                            <th>Filles</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $lists as $list=>$one )
                                        <tr>
                                            <td>{{ $one['etat'] }} </td>
                                            <td>{{ $one['total']}}</td>
                                            <td>{{ $one['Filles'] }}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                {{-- </main> --}}
                

                    <div class="content">
                        <!-- Topbar Start -->
                        <div class="navbar-custom">
                            <ul class="list-unstyled topbar-menu float-end mb-0">
                                <li class="dropdown notification-list d-lg-none">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-search noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                        <form class="p-3">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        </form>
                                    </div>
                                </li>
                                <li class="dropdown notification-list topbar-dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                                        <span class="align-middle d-none d-sm-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                        </a>

                                    </div>
                                </li>


                                <li class="notification-list">
                                    <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                        <i class="dripicons-gear noti-icon"></i>
                                    </a>
                                </li>

                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <span class="account-user-avatar">
                                            <img src="assets/images/users/ahm.jpg" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                            <span class="account-user-name">Ahmedou Enaha</span>
                                            <span class="account-position">Founder</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                        <!-- item-->
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Welcome !</h6>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-circle me-1"></i>
                                            <span>My Account</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-edit me-1"></i>
                                            <span>Settings</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lifebuoy me-1"></i>
                                            <span>Support</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lock-outline me-1"></i>
                                            <span>Lock Screen</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-logout me-1"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </li>

                            </ul>
                            <button class="button-menu-mobile open-left">
                                <i class="mdi mdi-menu"></i>
                            </button>
                            <div class="app-search dropdown d-none d-lg-block">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                        <button class="input-group-text btn-primary" type="submit">Search</button>
                                    </div>
                                </form>

                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-notes font-16 me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-life-ring font-16 me-1"></i>
                                        <span>How can I help you ?</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-cog font-16 me-1"></i>
                                        <span>User profile settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Erwin Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Topbar -->

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
<<<<<<< HEAD
                                                                <div class="tab-content">
                                                                    <div class="tab-pane show active" id="state-saving-preview">
                                                                        <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Etablissements</th>
                                                                                    <th>Total</th>
                                                                                    <!-- <th>Office</th> -->
                                                                                  
                                                                                </tr>
                                                                            </thead>
                                                                        
                                                                            <tbody>
                                                                                @foreach ( $List as $list=>$one )
                                                                                <tr>
                                                                                    <td> {{ $one->abrev }}</td>
                                                                                    <td> {{ $one->total}}</td>
                                                                            
                                                                                    
                                                                                </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>                                          
                                                                    </div> <!-- end preview-->
                                                                
                                                                    {{-- <div class="tab-pane" id="state-saving-code">
                                                                        <pre class="mb-0">
                                                                            
                                                                        </pre> <!-- end highlight-->
                                                                    </div> <!-- end preview code--> --}}
                                                                </div>
=======
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
>>>>>>> 64c173be34d0bc0d56327bf1a841b7c9fadda640
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
