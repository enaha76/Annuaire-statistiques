@extends('layouts.app')

@section('content')



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

                                {{-- <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-bell noti-icon"></i>
                                        <span class="noti-icon-badge"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="m-0">
                                                <span class="float-end">
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <small>Clear All</small>
                                                    </a>
                                                </span>Notification
                                            </h5>
                                        </div>

                                        <div style="max-height: 230px;" data-simplebar="">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                                <p class="notify-details">Caleb Flakelar commented on Admin
                                                    <small class="text-muted">1 min ago</small>
                                                </p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                                <p class="notify-details">New user registered.
                                                    <small class="text-muted">5 hours ago</small>
                                                </p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt=""> </div>
                                                <p class="notify-details">Cristina Pride</p>
                                                <p class="text-muted mb-0 user-msg">
                                                    <small>Hi, How are you? What about our next meeting</small>
                                                </p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                                <p class="notify-details">Caleb Flakelar commented on Admin
                                                    <small class="text-muted">4 days ago</small>
                                                </p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt=""> </div>
                                                <p class="notify-details">Karen Robinson</p>
                                                <p class="text-muted mb-0 user-msg">
                                                    <small>Wow ! this admin looks good and awesome design</small>
                                                </p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-heart"></i>
                                                </div>
                                                <p class="notify-details">Carlos Crouch liked
                                                    <b>Admin</b>
                                                    <small class="text-muted">13 days ago</small>
                                                </p>
                                            </a>
                                        </div>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li> --}}

                                {{-- <li class="dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-view-apps noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                        <div class="p-2">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/slack.png" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/github.png" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                        <span>G Suite</span>
                                                    </a>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>

                                    </div>
                                </li> --}}

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
                                            <span class="account-user-name">{{ Auth::user()->name }}</span>
                                            <span class="account-position">Admin</span>
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
                                            <span>{{ Auth::user()->name }}</span>
                                        </a>

                                        <!-- item-->
                                        {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                        </a> --}}

                                        <!-- item-->
                                        <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="mdi mdi-logout me-1"></i>
                                            <span>Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
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
                                        <span>How can I help you?</span>
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

                        <!-- Start Content-->
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire statistique</a></li>
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
                                                    // print_r($nbr_etudient);
                                                    $nbr=0;
                                                    foreach ($nbr_etudient as  $value) {

                                                    $nbr=$value->nbr;
                                                    
                                                    }
                                                    @endphp
                                                    <h3 class="mt-3 mb-3 ">{{  $nbr }}</h3>

                                                    <p class="mb-0 ">
                                                        {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>--}}
                                                        {{-- <span class="text-nowrap">Since last month</span>    --}}
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

                                            <h4 class="header-title mb-3">Effectifs des étudiants par établissement public</h4>
                                            <div  data-simplebar="" style="max-height: 200px;"  >


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


                                                //    print_r($array_eteblissment);


                                                @endphp

                                                               <h4 class="header-title mb-3"></h4>
                                                               <div class="table-responsive">
                                                                   <table class="table mb-0 overflow-visible">
                                                                       <thead >
                                                                       <tr>
                                                                           <th>Les etablisment</th>

                                                                           <th>Total</th>
                                                                       </tr>
                                                                       </thead>
                                                                       <tbody id="tab">
                                                                           @foreach ( $List as $list=>$one )
                                                                           @if ($one->abrev!="UNA" && $one->abrev!="AN" && $one->abrev!="ENS" && $one->abrev!="ESP" && $one->abrev!="USIA")


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
                                                                           @endif
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
                            {{-- <button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#fill-warning-modal">Warning Filled</button> --}}

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
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
                                            <h4 class="header-title mb-4">Répartition des étudiants par établissement</h4>

                                            <div dir="ltr">
                                                <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                                            </div>
                                            {{-- <h4 class="header-title">Repartution des etudiants par etablissement</h4>

                                            <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div> --}}


                                            <div class="chart-widget-list">
                                                {{-- <p>
                                                    <i class="mdi mdi-square text-primary"></i>
                                                    <span class="float-end"></span>
                                                </p> --}}
                                                {{-- <p>
                                                    <i class="mdi mdi-square text-danger"></i>
                                                    <span class="float-end"></span>
                                                </p> --}}
                                                {{-- <p>
                                                    <i class="mdi mdi-square text-success"></i>
                                                    <span class="float-end"></span>
                                                </p> --}}
                                                {{-- <p class="mb-0">
                                                    <i class="mdi mdi-square text-warning"></i>
                                                    <span class="float-end"></span>
                                                </p> --}}
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->


                            {{-- location place     --}}


                                <div class="col-lg-12">
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
                                            {{-- <h4 class="header-title">Revenue By Location</h4>
                                            <div class="mb-4 mt-4">
                                                <div id="world-map-markers" style="height: 224px"></div>
                                            </div> --}}
                                            <h4 class="header-title">Etablissements</h4>
                                            {{-- "Université","Instit","Ecole","Academie","Faculté" --}}



                                            <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#292b2c,#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>
                                            <div class="chart-widget-list">

                                                <p>  <i class="mdi mdi-square text-black"></i> Université
                                                    <i class="mdi mdi-square text-primary"></i> Institut</p>
                                                  <p>  <i class="mdi mdi-square text-danger"></i> Academie
                                                    <i class="mdi mdi-square text-success"></i> Ecole
                                                    <i class="mdi mdi-square text-warning"></i> Faculté
                                                </p>

                                            </div>








                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

{{-- hun --}}



                            </div>
                            <!-- end row -->
    <script>
      let  list_et=@json($List);
      let  j = @json($List4);
        window.j=j;
      let list_g=@json($array_eteblissment)
        // console.log(list_et);
    </script>


                            <script>
                                const box = document.getElementById('tab');

                                  const allChildren = box.getElementsByTagName('*').length;
                                  // console.log(allChildren);

                                  const directChildren = box.children.length;
                                  // console.log("ha4e hwe r9m",directChildren);
                                  document.getElementById("etab").innerHTML = directChildren;
                              </script>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card-->
                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->

                        </div>
                        <!-- container -->

                        {{-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> --}}


@endsection
