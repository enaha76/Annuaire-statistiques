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

                                                    <option value="CA">Effectifs par établissement et par genre, mauritaniens et
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
                                                <button type="button"  id="year_select2" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    2021-2022
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- <div class="card"> -->
                                                    <div class="card-body">
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio2" value="2019-2020" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2"><b>2019-2020</b> </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio2" value="2020-2021" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2"><b>2020-2021</b></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="customRadio2" name="customRadio2" value="2021-2022" class="form-check-input" checked>
                                                        <label class="form-check-label" for="customRadio2"><b>2021-2022</b></label>
                                                    </div>
                                                    </div></div>
                                                </div>
                                        </div>

                                        <div class="col-lg-1">
                                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#right-modal">Import</button>
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#right-modal">Rightbar Modal</button> -->

                                            <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-right w-25">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-0">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <h4>here u r ganna choose ur  file</h4>  <br><br>

                                                                                <div class="row">
                                                                                     <!-- end uplod -->
                                                                                     <div class="col-6">
                                                                                <div class="btn-group">
                                                                                    <button type="button" id="year_select" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        Year
                                                                                    </button>
                                                                                    <div class="dropdown-menu">
                                                                                        <!-- <div class="card"> -->
                                                                                        <div class="card-body">
                                                                                        <div class="form-check">
                                                                                            <input type="radio" id="customRadio1" name="customRadio" value="2018" class="form-check-input">
                                                                                            <label class="form-check-label" for="customRadio1"><b>2018</b> </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input type="radio" id="customRadio1" name="customRadio" value="2019" class="form-check-input">
                                                                                            <label class="form-check-label" for="customRadio1"><b>2019</b></label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input type="radio" id="customRadio1" name="customRadio" value="2020" class="form-check-input" >
                                                                                            <label class="form-check-label" for="customRadio1"><b>2020</b></label>
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br> <br>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                        <form action="/up" method="post"  enctype="multipart/form-data">
                                                                                          @csrf

                                                                                            <div class="fallback">
                                                                                                <input name="file" id="fileInput" type="file"  onchange="insert_all_catag(this.files[0])"/>
                                                                                                <input type="hidden" name="year" value="2021-2022">
                                                                                            </div>


                                                                                            <div class="d-grid">
                                                                                                <br><br>

                                                                                                <button type="submit" class="btn btn-xs btn-success">Importer</button>
                                                                                            </div>

                                                                                        </form>

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
                                            </div><!-- /.modal -->
                                        </div>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
    <script>

    </script>


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

                        <script src="{% static 'assets/js/pages/tbl.js' %}"></script>
                        {% comment %} <script src="assets/js/pages/tbl.js" ></script> {% endcomment %}
                        <script type="text/javascript" src="{{ asset('js/xlsx.full.min.js')}}"></script>

<script>
   
var catagory = [
    {cand1:[1,0]},
    {cand2:[1,2]},
    {cand3:[1,1]},
    {cand4:[1,0]},
    {etu1:[2,1]},
    {etu2:[2,1]},
    {etu3:[2,0]},
    {etu3:[2,0]},
    {etu4:[3,1]},
    {etu5:[4,0]},
    {etu6:[2,0]},
    {etu7:[1,0]},
    {etu8:[1,0]},
    {etu9:[1,0]},
    {sort1:[2,1]},
    {sort2:[1,0]},
    {bour1:[1,0]},
    {bour2:[2,0]},
    {bour3:[2,0]},
    {bour4:[2,0]},
    {ensg1:[1,1]},
    {ensg2:[1,0]},
    {ensg3:[2,0]},
    {ensg4:[2,0]},
    {ensg5:[1,0]},
    {ensg6:[1,1]},
    {cnou:[1,0]},
    
];

function insert_all_catag(file) {

raw_data=[];

    var reader = new FileReader();
  reader.onload = function(event) {
    var excel = event.target.result;
    var workbook = XLSX.read(excel, {type: 'binary'});
   
        index =1;
    catagory.forEach((cat) => {
        var key = Object.keys(cat)[0];
        var value = cat[key];
       
        var row = value[0];
        var col = value[1];
        

        var sheetName =Object.keys(workbook.Sheets)[index];
      var sheet = workbook.Sheets[sheetName];
if (sheet){
      var rows = [];
      var range = XLSX.utils.decode_range(sheet['!ref']);
      for (var i = range.s.r+row; i <= range.e.r; i++) {
        var row = {};
        for (var j = range.s.c+col; j <= range.e.c; j++) {
          var cell = sheet[XLSX.utils.encode_cell({r: i, c: j})];
          if (cell && cell.v) {
            row[j] = cell.v;
          }
        }
        rows.push(row);
      }
      
    raw_data.push({[key]:rows});
        index++;
    }
    });

};
  reader.readAsBinaryString(file);
//   call_insert_api(raw_data);
}



   function readExcelFile({code:[row,col],index}) {
    console.log(workbook.Sheets);

    var sheetName =object.keys(workbook.Sheets)[index];
      var sheet = workbook.Sheets[sheetName];
       if (sheet['!ref']) {
        var rows = [];
        var range = XLSX.utils.decode_range(sheet['!ref']);
        for (var i = range.s.r+row; i <= range.e.r; i++) {
            var row = {};
            for (var j = range.s.c+col; j <= range.e.c; j++) {
            var cell = sheet[XLSX.utils.encode_cell({r: i, c: j})];
            if (cell && cell.v) {
                row[j] = cell.v;
            }
            }
            rows.push(row);
        }
        console.log('Sheet:', sheetName);
        console.log('Rows:', {code:rows});
       }        
    

}

function call_insert_api(data){

    const loadingCircle = document.getElementById('loading-circle');
    fetch('/up', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(data)
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
@endsection
