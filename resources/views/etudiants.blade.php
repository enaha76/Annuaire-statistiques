@extends('layouts.app')

@section('content')
            
                <main>
                    {{-- <div class="container-fluid px-4">
                        <h1 class="mt-4">Totat des Etudiants par etablissement</h1> --}}
                        {{-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Accueil</a></li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol> --}}
                        {{-- <div class="card mb-4">
                            <div class="card-body">
                                Chart.js is a third party plugin that is used to generate the charts in this template. The charts below have been customized - for further customization options, please visit the official
                                <a target="_blank" href="https://www.chartjs.org/docs/latest/">Chart.js documentation</a>
                                .
                            </div>
                        </div> --}}
                        {{-- <div class="card mb-4"> --}}
                            
                            {{-- <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                                
                            </div> --}}
{{--                             
                            <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Les etablisment</th>
                                    <th>Filles</th>
                                    <th>Garcon</th>
                                    <th>Total</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $lists as $list=>$one )
                                <tr>
                                    <td>{{ $one['etat'] }}</td>
                                    <td>{{ $one['Filles'] }}</td>
                                    <td>{{ $one['total'] - $one['Filles'] }}</td>
                                    <td>{{ $one['total']}}</td>
                                   
                                </tr>  
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Effectifs des etudiants par etablissement
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted">Modifier hier à 11:59 PM</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Repartution des etudiants par etablissement 
                                    </div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted">Modifier hier à 11:59 PM</div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div> --}}
                    {{-- </div> --}}


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
    
                                <li class="dropdown notification-list">
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
                                </li>
    
                                <li class="dropdown notification-list d-none d-sm-inline-block">
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
                                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li> --}}
                                                {{-- <li class="breadcrumb-item active">Order Details</li> --}}
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Order Details</h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 
    
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10 col-sm-11">
            
                                    {{-- <div class="horizontal-steps mt-4 mb-4 pb-5" id="tooltip-container"> --}}
                                        {{-- <div class="horizontal-steps-content"> --}}
                                            {{-- <div class="step-item">
                                                <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="20/08/2018 07:24 PM">Order Placed</span>
                                            </div>
                                            <div class="step-item current">
                                                <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="21/08/2018 11:32 AM">Packed</span>
                                            </div>
                                            <div class="step-item">
                                                <span>Shipped</span>
                                            </div>
                                            <div class="step-item">
                                                <span>Delivered</span>
                                            </div> --}}
                                        {{-- </div> --}}
            
                                        {{-- <div class="process-line" style="width: 33%;"></div> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <!-- end row -->    
                            
                            
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-3"></h4>
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>Les etablisment</th>
                                                        {{-- <th>Quantity</th> --}}
                                                        {{-- <th>Price</th> --}}
                                                        <th>Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ( $lists as $list=>$one )
                                                        <tr>
                                                            <td>{{ $one['etat'] }}</td>
                                                            {{-- <td>{{ $one['Filles'] }}</td> --}}
                                                            {{-- <td>{{ $one['total'] - $one['Filles'] }}</td> --}}
                                                            <td>{{ $one['total']}}</td>
                                                           
                                                        </tr>  
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                
                                        </div>
                                    </div>
                                </div> <!-- end col -->
{{--             
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-3">Order Summary</h4>
                
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Grand Total :</td>
                                                        <td>$1641</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping Charge :</td>
                                                        <td>$23</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estimated Tax : </td>
                                                        <td>$19.22</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total :</th>
                                                        <th>$1683.22</th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> --}}
                            <!-- end row -->
            
            
                            <div class="row">
                                {{-- <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-3">Shipping Information</h4>
    
                                            <h5>Stanley Jones</h5>
                                            
                                            <address class="mb-0 font-14 address-lg">
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                                                <abbr title="Mobile">M:</abbr> (+01) 12345 67890
                                            </address>
                
                                        </div>
                                    </div>
                                </div> <!-- end col --> --}}
{{--             
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-3">Billing Information</h4>
    
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <p class="mb-2"><span class="fw-bold me-2">Payment Type:</span> Credit Card</p>
                                                    <p class="mb-2"><span class="fw-bold me-2">Provider:</span> Visa ending in 2851</p>
                                                    <p class="mb-2"><span class="fw-bold me-2">Valid Date:</span> 02/2020</p>
                                                    <p class="mb-0"><span class="fw-bold me-2">CVV:</span> xxx</p>
                                                </li>
                                            </ul>
                
                                        </div>
                                    </div> --}}
                                {{-- </div> <!-- end col --> --}}
            
                                {{-- <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-3">Delivery Info</h4>
                
                                            <div class="text-center">
                                                <i class="mdi mdi-truck-fast h2 text-muted"></i>
                                                <h5><b>UPS Delivery</b></h5>
                                                <p class="mb-1"><b>Order ID :</b> xxxx235</p>
                                                <p class="mb-0"><b>Payment Mode :</b> COD</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col --> --}}
                            </div>
                            <!-- end row -->
            
                            
                        </div> <!-- container -->
    
                  
                </main>
              <script>var stat = @json($lists) 
              </script>
       @endsection