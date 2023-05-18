@extends('layouts.app')

@section('content')


    <div class="content">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topbar-menu float-end mb-0">
                <li class="dropdown notification-list d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..."
                                aria-label="Recipient's username">
                        </form>
                    </div>
                </li>
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                        <span class="align-middle d-none d-sm-inline-block">English</span> <i
                            class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span
                                class="align-middle">Russian</span>
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
                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="assets/images/users/ahm.jpg" alt="user-image" class="rounded-circle">
                        </span>
                        <span>
                            <span class="account-user-name">{{ Auth::user()->name }}</span>
                            <span class="account-position">Admin</span>
                        </span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
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
                        <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                            onclick="event.preventDefault();
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
                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg"
                                    alt="Generic placeholder image" height="32">
                                <div class="w-100">
                                    <h5 class="m-0 font-14">Erwin Brown</h5>
                                    <span class="font-12 mb-0">UI Designer</span>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="d-flex">
                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg"
                                    alt="Generic placeholder image" height="32">
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
                        <h4 class="page-title">Archives</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <select id="my-select" class="select2 form-control select2-multiple"
                                        data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                        <optgroup label="Candidats">
                                            <option value="ef_e_w">Effectifs des candidats au bac par wilaya</option>
                                            <option value="tr_s_g">Taux de réussite par genre et par série</option>
                                            <!-- <option value="HI">Taux de réussite par genre et par série</option> -->
                                            <option value="tr_s_c">Taux de réussite par session et par type de
                                                candidature</option>
                                            <option value="r_e_p_p">Répartition des orientés à l’étranger par pays et
                                                par filière</option>
                                        </optgroup>
                                        <optgroup label="Etudiuants">

                                            <option value="CA">Effectifs par établissement et par genre, mauritaniens
                                                et
                                                étrangers</option>
                                            <option value="ef_m_i_lmd">Effectifs des étudiants mauritaniens par
                                                institution, par niveau et par genre (LMD)</option>
                                            <option value="NV4">Effectifs des étudiants mauritaniens par institution,
                                                par niveau et par genre (FM)</option>
                                            <option value="NV5">Effectifs des étudiants mauritaniens par institution,
                                                par niveau et par genre (ESP & AN)</option>
                                            <option value="NV6">Effectifs des étudiants mauritaniens par institution,
                                                par niveau et par genre (ENS)</option>
                                            <option value="NV7">Effectifs des étudiants mauritaniens par institution,
                                                par domaine d'étude par niveau et par genre (FM)</option>
                                            <option value="NV8">Effectifs des étudiants par domaine d'étude et par genre
                                            </option>
                                        </optgroup>
                                        <optgroup label="Bources">
                                            <option value="AZ">Répartition des Boursiers et Bénéficiaires d'aides par
                                                Institution</option>
                                            <option value="CO8">Montants de Bourse (MRU)</option>
                                        </optgroup>
                                        <optgroup label="Sortants">
                                            <option value="AZ7" id="sortants_option">Sortants <span></span>
                                                <p></p> par diplôme, par institution et par genre
                                            </option>
                                            <option value="CO">Sortants <span id="sort_yeahr"></span> par domaine
                                                d'étude spécialisé (CITE 2013)</option>
                                        </optgroup>
                                        <optgroup label="Les gens bourciers">
                                            <option value="A76Z">Etudiants mauritaniens boursiers à l'étranger par
                                                niveau, par genre et par pays d'accueil</option>
                                            <option value="CO12">Etudiants mauritaniens boursiers à l'étranger par cycle
                                                et par pays d'accueil </option>
                                        </optgroup>

                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <div class="btn-group">
                                        <button type="button" id="year_select2"
                                            class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            2021-2022
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- <div class="card"> -->
                                            <div class="card-body">
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio2" name="customRadio2"
                                                        value="2019-2020" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio2"><b>2019-2020</b>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio2" name="customRadio2"
                                                        value="2020-2021" class="form-check-input">
                                                    <label class="form-check-label"
                                                        for="customRadio2"><b>2020-2021</b></label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="customRadio2" name="customRadio2"
                                                        value="2021-2022" class="form-check-input" checked>
                                                    <label class="form-check-label"
                                                        for="customRadio2"><b>2021-2022</b></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#right-modal" on="click()">Import</button>
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#right-modal">Rightbar Modal</button> -->
                                </div>
                                        <h4>here u r ganna choose ur file</h4> <br><br>

                                        <div class="row">
                                            <!-- end uplod -->


                                            <div class="col-lg-12">
                                                <form action="{{ route('up') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="btn-group">
                                                        <button type="button" id="year_select"
                                                            class="btn btn-primary   dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Year
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- <div class="card"> -->
                                                            <div class="card-body">

                                                                <div class="form-check">
                                                                    <input type="radio" id="customRadio1"
                                                                        name="customRadio" value="2018-2019"
                                                                        class="form-check-input">
                                                                    <label class="form-check-label"
                                                                        for="customRadio1"><b>2018-2019</b>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" id="customRadio1"
                                                                        name="customRadio" value="2019-2020"
                                                                        class="form-check-input">
                                                                    <label class="form-check-label"
                                                                        for="customRadio1"><b>2019-2020</b></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" id="customRadio1"
                                                                        name="customRadio" value="2020-2021"
                                                                        class="form-check-input">
                                                                    <label class="form-check-label"
                                                                        for="customRadio1"><b>2020-2021</b></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input name="file" id="fileInput" type="file">
                                                    <button type="submit"
                                                        class="btn btn-xs btn-success">Importer</button>
                                                    <div id="storage"></div>
                                                </form>
                                            </div>
                                        </div>
                                    
                               
                                        <div class="card">
                                            <div class="card-body">
                                              <i class="uil-signal-alt-3"></i>
                                              
                                              <ul class="nav nav-tabs nav-bordered mb-3" id="tabs-list" style="overflow-x: auto; white-space: nowrap; display: block ruby; ">
                                                <li class="nav-item" style="display: inline">
                                                  <a href="#icon-bre-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Tableau
                                                  </a>
                                                </li>
                                                <li class="nav-item"style="display: inline">
                                                  <a href="#icon-bre-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Graphe
                                                  </a>
                                                </li>
                                                <!-- Add more list items here as needed -->
                                              </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="icon-bre-preview">
                                                <div class="col-md-5 table-responsive" id="buttons-table-preview 3">

                                                </div> <!-- end preview-->
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="icon-bre-code">
                                                <pre class="mb-0">
                                                    <div class="col-md-6 "  dir="ltr">
                                                        <h4 class="header-title"> Repartution des étudiants par institution et par genre </h4>
                            
                                                                     <div id="myChart 3" ></div>
                                                                 </div>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->


                                <!-- /.modal -->
                                <div id="right-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-right w-25">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>here u r ganna choose ur file</h4> <br><br>

                                                <div class="row">
                                                    <!-- end uplod -->


                                                    <div class="col-lg-12">
                                                        <form action="{{ route('up') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="btn-group">
                                                                <button type="button" id="year_select"
                                                                    class="btn btn-primary   dropdown-toggle"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Year
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <!-- <div class="card"> -->
                                                                    <div class="card-body">

                                                                        <div class="form-check">
                                                                            <input type="radio" id="customRadio1"
                                                                                name="customRadio" value="2018-2019"
                                                                                class="form-check-input">
                                                                            <label class="form-check-label"
                                                                                for="customRadio1"><b>2018-2019</b>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input type="radio" id="customRadio1"
                                                                                name="customRadio" value="2019-2020"
                                                                                class="form-check-input">
                                                                            <label class="form-check-label"
                                                                                for="customRadio1"><b>2019-2020</b></label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input type="radio" id="customRadio1"
                                                                                name="customRadio" value="2020-2021"
                                                                                class="form-check-input">
                                                                            <label class="form-check-label"
                                                                                for="customRadio1"><b>2020-2021</b></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input name="file" id="fileInput" type="file">
                                                            <button type="submit"
                                                                class="btn btn-xs btn-success">Importer</button>
                                                            <div id="storage"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Eff_can_wilaya"></div>
                                            <div id="tr_s_g"></div>
                                            <div id="tr_s_c"></div>
                                            <div id="r_e_p_p"></div>
                                            <div id="eff_m_i_lmd"></div>

                                            <br>

                                        </div>
                                    </div><!-- /.modal-content -->

                                </div><!-- /.modal-dialog -->
                                <div id="output">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script></script>

        <script>
            // const box = document.getElementById('tab');

            //   const allChildren = box.getElementsByTagName('*').length;
            //   // console.log(allChildren);

            //   const directChildren = box.children.length;
            //   // console.log("ha4e hwe r9m",directChildren);
            //   document.getElementById("etab").innerHTML = directChildren;
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
    {{-- <script>
                            var etudiat_data = JSON.parse('{{ etudiat_data_json|escapejs }}');

                            // You can now access the etudiat_data object in your JavaScript code


                            $("#my-select").on("change", function () {

                                const selectedOptions = $(this).val();

                                window.ahm = selectedOptions;
                                ah();

                            });



                            const radioButto = document.getElementsByName("customRadio2");
                            const myD = document.getElementById("year_select2");
                            window.aff_year=radioButto.value;
                            radioButto.forEach((radio) => {
                                radio.addEventListener("change", (event) => {
                                    const aff_year = document.querySelector('input[name="customRadio2"]:checked').value;

                                    window.aff_year=aff_year;
                                    myD.innerHTML = aff_year;
                                    ah();

                                });
                            });


                                const radioButton = document.getElementsByName("customRadio");
                                const myDi = document.getElementById("year_select");

                                radioButton.forEach((radio) => {
                                    radio.addEventListener("change", (event) => {
                                        const selectedOptio = document.querySelector('input[name="customRadio"]:checked').value;
                                        console.log(selectedOptio);
                                        myDi.innerHTML = selectedOptio;

                                    });
                                });
                          </script> --}}

    <script src="{{ asset('assets/js/pages/tbl.js') }}"></script>
    {{-- <script src="assets/js/pages/tbl.js"></script>  --}}
    <script type="text/javascript" src="{{ asset('js/xlsx.full.min.js') }}"></script>
    <script src="https://unpkg.com/read-excel-file@5.x/bundle/read-excel-file.min.js"></script>

    <script>
        var catagory = [{
                cand1: [1, 0]
            },
            {
                cand2: [1, 2]
            },
            {
                cand3: [1, 2]
            },
            {
                cand4: [1, 0]
            },
            {
                etu1: [2, 1]
            },
            {
                etu2: [2, 1]
            },
            {
                etu4: [3, 1]
            },
            {
                etu5: [4, 0]
            },
            {
                etu6: [2, 0]
            },
            {
                etu7: [1, 0]
            },
            {
                etu8: [1, 0]
            },
            {
                etu9: [1, 0]
            },
            {
                sort1: [2, 1]
            },
            {
                sort2: [1, 0]
            },
            {
                bour1: [1, 1]
            },
            {
                bour2: [2, 0]
            },
            {
                bour3: [2, 0]
            },
            {
                bour4: [2, 0]
            },
            {
                ensg1: [1, 1]
            },
            {
                ensg2: [1, 0]
            },
            {
                ensg3: [2, 0]
            },
            {
                ensg4: [2, 0]
            },

            {
                ensg5: [1, 0]
            },
            {
                ensg6: [1, 1]
            },
            {
                cnou: [1, 0]
            },

        ];
        document.getElementById('fileInput').addEventListener("change", (function() {
            //clear the console
            console.clear();
            var raw_data = {};
           

            var file = this.files[0];
            var reader = new FileReader();
            var tabslist = document.getElementById("tabs-list");
            


            
            
            reader.onload = function(event) {

                excel = event.target.result;


                var workbook = XLSX.read(excel, {
                    type: 'binary'
                });

                index = 0;
                workbook.SheetNames.forEach(function(sheetName) {
                    if (sheetName == "Feuil1") {
                        return;
                    }
                    var sheet = workbook.Sheets[sheetName];
                    console.log(sheet);
                    cat = catagory[index];
                    var key = Object.keys(cat)[0];
                    var value = cat[key];
                    var row = value[0];
                    var col = value[1];
                    var rows = [];
                    // tables.innerHTML += JSON.stringify(tableToJson(htmlToElement(
                    //     createHtmlFromSheet(sheet, key, row, col))));


                    raw_data[key] = tableToJson(htmlToElement(createHtmlFromSheet(sheet, key, row,col)));
                    var link =`<li class="nav-item">
                                                <a href="#${key}" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    ${sheetName}
                                                </a>
                                            </li>`;
                    tab=` <div class="tab-pane table-reponsive" id="${key}">
                                                ${createHtmlFromSheet(sheet)}
                                            </div>`
                    link = htmlToElement(link);
                    link.style.display = "inline";
                    tabslist.appendChild(link);
                    document.querySelector('div.tab-content').appendChild(htmlToElement(tab));
 

                    index++;
                });


                


                const checkbox = document.getElementById("customRadio1");
                const v = checkbox.checked ? checkbox.value : null;
                console.log(v);

                year = `<input type="hidden" name="year" value="${v}">`
                console.log(year);
                data =
                    `<textarea name="data" id="data" cols="40" rows="30" hidden>${JSON.stringify(raw_data)}</textarea>`
                inp = document.querySelector("div[id='storage']");
                inp.innerHTML = '';
                inp.innerHTML = data + year;

                console.log(raw_data);
            };
            reader.readAsBinaryString(file);



        }));



        // function that turn a headerless html table to array of arrays with the empty td replace with 0
        function tableToJson(table) {
            var data = [];
            var rows = table.querySelectorAll("tr");
            for (var i = 0; i < rows.length - 1; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll("td");
                for (var j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);
                data.push(row);
            }
            return data;
        }



        // turn html table from string to element
        function htmlToElement(html) {
            var template = document.createElement('template');
            html = html.trim();
            template.innerHTML = html;
            return template.content.firstChild;
        }
        // function that create an html from each sheet of the excel file
        function createHtmlFromSheet(sheet, key = null, row = null, col = null) {
            var html = "<table class=\"table table-centered mb-0 \" border=\" 1px solid black\" style =\"width: --webkit-fill-available;\">";
            var range = XLSX.utils.decode_range(sheet['!ref']);
            if (key != null) {

                for (var i = range.s.r + row; i <= range.e.r; i++) {

                    html += "<tr>";
                    for (var j = range.s.c + col; j <= range.e.c; j++) {
                        var cell = sheet[XLSX.utils.encode_cell({
                            r: i,
                            c: j
                        })];
                        if (cell && cell.v) {
                            html += "<td>" + cell.v + "</td>";
                        } else {
                            var previous = sheet[XLSX.utils.encode_cell({
                                r: i,
                                c: j - 1
                            })];
                            var above = sheet[XLSX.utils.encode_cell({
                                r: i - 1,
                                c: j
                            })];
                            if (j == range.s.c + col) {
                                //check if the previous cell is empty if so check if the cell above is empty if above isn't empty then add the value of the cell above to the current cell else add nan if previous cell isn't empty then add it to the current cell

                                if (previous === undefined && above !== undefined) {
                                    continue;

                                } else if (previous === undefined && above === undefined) {
                                    html += "<th></th>";

                                } else if (previous === undefined) {
                                    html += "<th>nan</th>";
                                } else {
                                    html += "<td>" + previous.v + "</td>";
                                }


                                // html += "<th>nan</th>";
                            } else if (previous === undefined && above !== undefined) {
                                html += "<td>" + above.v + "</td>";
                            }
                        }
                    }
                    html += "</tr>";
                }
            } else {
                for (var i = range.s.r; i <= range.e.r; i++) {
                    html += "<tr>";
                    for (var j = range.s.c; j <= range.e.c; j++) {
                        var cell = sheet[XLSX.utils.encode_cell({
                            r: i,
                            c: j
                        })];
                        if (cell && cell.v) {
                            html += "<td>" + cell.v + "</td>";
                        } else if(j>range.s.c +col && i>range.s.r+row) {
                            html += "<td>0</td>";
                        }else{
                            html += "<th></th>";
                        }
                    }
                }

            }
            html += "</table>";
            return html;
        }



        // function that read the excel file and return the sheet




        function call_insert_api(data) {

            let csrfToken = document.querySelector('input[name="_token"]').getAttribute('value');
            const loadingCircle = document.getElementById('loading-circle');
            fetch('/up', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        "data": data,
                        "year": "2019-2020"
                    })
                })
                .then(response => {
                    if (response.ok) {
                        // handle success
                        console.log('Data inserted successfully!');
                        loadingCircle.style.display = 'none';
                    } else {
                        // handle error
                        console.error('Error inserting data:', response.statusText);
                        loadingCircle.style.display = 'none';

                    }
                })
                .catch(error => {
                    loadingCircle.style.display = 'none';
                    console.error('Error inserting data:', error);
                });


            loadingCircle.style.display = 'block';
        }
    </script>





    {{-- <script>
        let v = [];
        window.onload = function () {
          // Add an event listener to the file input
          document
            .getElementById("fileInput")
            .addEventListener("change", function (event) {
              var file = fileInput.files[0];
              var reader = new FileReader();
              reader.onload = function (e) {
                var data = new Uint8Array(reader.result);
                var workbook = XLSX.read(data, { type: "array" });
                console.log(workbook); // Loop through each sheet in the workbook
                workbook.SheetNames.forEach(function (sheetName) {
                  var sheet = workbook.Sheets[sheetName];
                  var dataJSON = XLSX.utils.sheet_to_json(sheet); // Print the data to the output element
                  var output = document.getElementById("output");
                  output.innerHTML += "<h3>" + sheetName + "</h3>";
                  output.innerHTML += JSON.stringify(dataJSON) + "<br>";
                  v.push(dataJSON);
                });
              };
              reader.readAsArrayBuffer(file);
            });
        };
      </script> --}}
@endsection
