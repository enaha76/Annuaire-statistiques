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
                                </li>
     --}}
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

                        <!-- Start Content-->
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <form class="d-flex">
                                                <div class="input-group">
                                                    {{-- <input type="text" class="form-control form-control-light" id="dash-daterange"> --}}
                                                    {{-- <span class="input-group-text bg-primary border-primary text-white"> --}}
                                                        {{-- <i class="mdi mdi-calendar-range font-13"></i> --}}
                                                    {{-- </span> --}}
                                                </div>
                                                {{-- <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                    <i class="mdi mdi-autorenew"></i>
                                                </a>
                                                <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                                    <i class="mdi mdi-filter-variant"></i>
                                                </a> --}}
                                            </form>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
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
                                                        {{-- <i class="mdi mdi-account-multiple widget-icon"></i> --}}
                                                    </div>
                                                    <h5 class=" fw-normal mt-0 badge bg-primary text-wrap" style="width: 6rem; heiht:14rem" title="Number of Customers">Etudiants</h5>
<<<<<<< HEAD
                                                    <h3 class="mt-3 mb-3"></h3>
=======
                                                    <h3 class="mt-3 mb-3"></h3>
>>>>>>> 9160e10c3a52d738e53b5263f92ada480ae23569
                                                    <p class="mb-0 text-muted">
                                                        {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                        <span class="text-nowrap">Since last month</span>   --}}
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->

                                        <div class="col-lg-6">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-end">
                                                        <i class="mdi mdi-cart-plus widget-icon"></i>
                                                    </div>
                                                    <h5 class=" fw-normal mt-0 badge bg-primary text-wrap" style="width: 6rem; heiht:6rem" title="Number of Orders">Professeur</h5>
                                                    <h3 class="mt-3 mb-3">585</h3>
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
                                                        <i class="mdi mdi-currency-usd widget-icon"></i>
                                                    </div>
                                                    <h5 class=" fw-normal mt-0 badge bg-primary text-wrap" style="width: 6rem; heiht:6rem" title="Average Revenue">Candidats admis</h5>
                                                    <h3 class="mt-3 mb-3">7254</h3>
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
                                                        <i class="mdi mdi-pulse widget-icon"></i>
                                                    </div>
                                                    <h5 class=" fw-normal mt-0 badge bg-primary text-wrap" style="width: 6rem; heiht:6rem" title="Growth">Candidats </h5>
                                                    <h3 class="mt-3 mb-3">0</h3>
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
                                            {{-- <div class="dropdown float-end"> --}}
                                                {{-- <div class="dropdown float-end"> --}}
                                                {{-- <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a> --}}
                                                {{-- <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div> --}}
                                            {{-- </div> --}}
                                            <div  data-simplebar="" style="max-height: 300px;">
                                            <h4 class="header-title mb-3">Effectifs des étudiants par établissement du public</h4>

                                            {{-- <div dir="ltr"> --}}
                                                {{-- <div class="row"> --}}
                                                    {{-- <div class="col-lg-8"> --}}
                                                        {{-- <div class="card"> --}}
                                                            {{-- <div class="card-body"> --}}
                                                                <h4 class="header-title mb-3"></h4>
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0">
                                                                        <thead >
                                                                        <tr>
                                                                            <th>Les etablisment</th>
                                                                            {{-- <th>Quantity</th> --}}
                                                                            {{-- <th>Price</th> --}}
                                                                            <th>Total</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            {{-- @foreach ( $lists as $list=>$one ) --}}
                                                                            <tr>
                                                                                {{-- <td>{{ $one['etat'] }}</td> --}}
                                                                                {{-- <td>{{ $one['Filles'] }}</td>
                                                                                {{-- <td>{{ $one['total'] - $one['Filles'] }}</td>
                                                                                <td>{{ $one['total']}}</td>
{{-- <<<<<<< HEAD --}}

                                                                            </tr>

{{-- ======= --}}                                                            <tr>
                                                                               
                                                                            </tr> 
                                                                            
{{-- >>>>>>> 9160e10c3a52d738e53b5263f92ada480ae23569 --}}
                                                                            {{-- @endforeach --}}
                                                                        </tbody>
                                                                    </table>
                                                                {{-- </div> --}}
                                                                <!-- end table-responsive -->

                                                            </div>
                                                        {{-- </div> --}}
                                                    {{-- </div> <!-- end col --> --}}
                                                </div>
                                                {{-- <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#e3eaef"></div> --}}
                                            {{-- </div> --}}

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
                                            {{-- <div class="dropdown float-end">
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
                                            <h4 class="header-title mb-3">Revenue</h4>

                                            <div class="chart-content-bg">
                                                <div class="row text-center">
                                                    <div class="col-md-6">
                                                        <p class="text-muted mb-0 mt-3">Current Week</p>
                                                        <h2 class="fw-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-primary align-middle me-1"></small>
                                                            <span>$58,254</span>
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="text-muted mb-0 mt-3">Previous Week</p>
                                                        <h2 class="fw-normal mb-3">
                                                            <small class="mdi mdi-checkbox-blank-circle text-success align-middle me-1"></small>
                                                            <span>$69,524</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dash-item-overlay d-none d-md-block" dir="ltr">
                                                <h5>Today's Earning: $2,562.30</h5>
                                                <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                                    Etiam rhoncus...</p>
                                                <a href="javascript: void(0);" class="btn btn-outline-primary">View Statements
                                                    <i class="mdi mdi-arrow-right ms-2"></i>
                                                </a>
                                            </div>
                                            <div dir="ltr">
                                                <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                                            </div> --}}



                                        </div> <!-- end card-body-->
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

                                            <h5 class="mb-1 mt-0 fw-normal"></h5>
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

{{--
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="" class="btn btn-sm btn-link float-end">Export
                                                <i class="mdi mdi-download ms-1"></i>
                                            </a>
                                            <h4 class="header-title mt-2 mb-3">Top Selling Products</h4>

                                            <div class="table-responsive">
                                                <table class="table table-centered table-nowrap table-hover mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">ASOS Ridley High Waist</h5>
                                                                <span class="text-muted font-13">07 April 2018</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$79.49</h5>
                                                                <span class="text-muted font-13">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">82</h5>
                                                                <span class="text-muted font-13">Quantity</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$6,518.18</h5>
                                                                <span class="text-muted font-13">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">Marco Lightweight Shirt</h5>
                                                                <span class="text-muted font-13">25 March 2018</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$128.50</h5>
                                                                <span class="text-muted font-13">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">37</h5>
                                                                <span class="text-muted font-13">Quantity</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$4,754.50</h5>
                                                                <span class="text-muted font-13">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">Half Sleeve Shirt</h5>
                                                                <span class="text-muted font-13">17 March 2018</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$39.99</h5>
                                                                <span class="text-muted font-13">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">64</h5>
                                                                <span class="text-muted font-13">Quantity</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$2,559.36</h5>
                                                                <span class="text-muted font-13">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">Lightweight Jacket</h5>
                                                                <span class="text-muted font-13">12 March 2018</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$20.00</h5>
                                                                <span class="text-muted font-13">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">184</h5>
                                                                <span class="text-muted font-13">Quantity</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$3,680.00</h5>
                                                                <span class="text-muted font-13">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">Marco Shoes</h5>
                                                                <span class="text-muted font-13">05 March 2018</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$28.49</h5>
                                                                <span class="text-muted font-13">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">69</h5>
                                                                <span class="text-muted font-13">Quantity</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-14 my-1 fw-normal">$1,965.81</h5>
                                                                <span class="text-muted font-13">Amount</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive-->
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col--> --}}

                                {{-- <div class="col-xl-3 col-lg-6 order-lg-1">
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
                                            <h4 class="header-title">Total Sales</h4>

                                            {{-- <div id="myBarChart" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div> --}}

{{--
                                            <div class="chart-widget-list">
                                                <p>
                                                    <i class="mdi mdi-square text-primary"></i> Direct
                                                    <span class="float-end">$300.56</span>
                                                </p>
                                                <p>
                                                    <i class="mdi mdi-square text-danger"></i> Affilliate
                                                    <span class="float-end">$135.18</span>
                                                </p>
                                                <p>
                                                    <i class="mdi mdi-square text-success"></i> Sponsored
                                                    <span class="float-end">$48.96</span>
                                                </p>
                                                <p class="mb-0">
                                                    <i class="mdi mdi-square text-warning"></i> E-mail
                                                    <span class="float-end">$154.02</span>
                                                </p>
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col--> --}}
{{--
                                <div class="col-xl-3 col-lg-6 order-lg-1">
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
                                            <h4 class="header-title mb-2">Recent Activity</h4> --}}

                                            {{-- <div data-simplebar="" style="max-height: 419px;">
                                                <div class="timeline-alt pb-0">
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                                            <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">5 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                            <small>Dave Gamache added
                                                                <span class="fw-bold">Admin Dashboard</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">30 minutes ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                                            <small>Send you message
                                                                <span class="fw-bold">"Are you there?"</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">2 hours ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>
                                                            <small>Uploaded a photo
                                                                <span class="fw-bold">"Error.jpg"</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">14 hours ago</small>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                                            <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">16 hours ago</small>
                                                            </p>
                                                        </div>
                                                    </div> --}}

                                                    {{-- <div class="timeline-item">
                                                        <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                            <small>Dave Gamache added
                                                                <span class="fw-bold">Admin Dashboard</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">22 hours ago</small>
                                                            </p>
                                                        </div>
                                                    </div> --}}
{{--
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                                            <small>Send you message
                                                                <span class="fw-bold">"Are you there ?"</span>
                                                            </small>
                                                            <p class="mb-0 pb-2">
                                                                <small class="text-muted">2 days ago</small>
                                                            </p>
                                                        </div>
                                                    </div> --}}
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
                            //var stat = @json($lists)
                        </script> --}}
@endsection
