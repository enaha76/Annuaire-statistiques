@extends('layouts.app')

@section('content')
{{-- <script type="text/javascript" src="{{ asset('js/xlsx.full.min.js')}}"></script>
    <style>
    table{
      
        width: -webkit-fill-available;
    }
        table tr th,
        table tr td {
        
           border:2px solid Black;
            text-align: center;

        }

        .model {
            border-color: #2b6ec4;
            display: none;
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 170px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

            font-size: 1.4em;
        }
    </style>

    <main>

        <div class="container-fluid px-4">
            <h1 class="mt-4">Export</h1>
            <ol class="breadcrumb mb-4">

            </ol>
           


               
                <select class="p-2 text-light bg-success float-center" name="annee" id="annee">
                    <option value="" selected disabled>Specifie l'annee scolaire</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2019-2020">2019-2020</option>
                    <option value="2018-2019">2018-2019</option>
                    <option value="2017-2018">2017-2018</option>
                </select>
                <select name="etat" id="etat" class="p-2 text-light bg-success ">
                    <option value="" selected disabled>Specifie l'etablisment</option>
                    @foreach ($etats as $etat => $one)
                        <option value="{{ $one->abrev }}">{{ $one->abrev }}</option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-primary center-block p-2"
                    onclick="document.getElementById('Modal').style.display = 'block';">Filtrer vos exports</button>
                <div class="model" style="display: none" id="Modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Filtrer le Fichier Exporter</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    onclick="document.getElementById('Modal').style.display = 'none';">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form onsubmit="onSubmit(event)">

                                <div class="modal-body">

                                    <div class="sb-sidenav-menu-heading">Etudiants</div>

                                    <input type="checkbox" name="etudiant[]" value="Redoublant">
                                    Redoublant
                                    <input type="checkbox" name="etudiant[]" value="Niveau">
                                    Niveau <input type="checkbox" name="etudiant[]" value="GENRE">
                                    genre



                                    <br>
                                    <br>
                                    <div class="sb-sidenav-menu-heading">Etablisment</div>
                                    <input type="checkbox" name="Etablissement[]" id="" value="privee">
                                    privee
                                    <input type="checkbox" name="Etablissement[]" id="" value="public">
                                    public
                                    <input type="checkbox" name="Etablissement[]" id="" value="co-tutle">
                                    co-tutle
                                </div>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-primary" class="save"
                                        onclick="document.getElementById('Modal').style.display = 'none';
                                        document.getElementById('exp').style.display='block'">Save
                                        changes</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>






          
            <div class="card-body">
                <table id="datatables">
                    
                    <thead id="datatables-head">
                    </thead>
                    <tbody id="datatables-body">

                    </tbody>
                </table>
            </div>
          
            <button class="btn btn-danger float-end p-2" type="submit" id="exp" onclick="ExportToExcel('xlsx')" style="display: none">Exporter les Etudiants</button>

  </div>
  <table id="datatables">
                    
    <thead id="datatables-head">
    </thead>
    <tbody id="datatables-body">

    </tbody>
</table>
        </div>
    </main>

    <script>
        // window.onclick = function(event) {
        //   if (event.target == modal) {
        //     modal.style.display = "none";
        //   }
        // }
    </script>
    
    <script>
      var ins = @json($alldata);
      var etats =@json($ins);
      const iterate = (obj) => {
     var result = Object.keys(obj)[0];

            if (result[0] == 0) {

                numbers.push(Object.keys(obj).length)
            } else {
                Object.keys(obj).forEach(key => {
                    try {
                        if (typeof obj[key] === 'object' && obj[key] !== null) throw "exit";
                    } 
                    catch (e) {
                        headeres.push(key)
                        iterate(obj[key])
                      }}) }}

        
  lists = {}


        function onSubmit(event) {

            t = document.getElementById('datatables')

            var body = document.createElement('tbody');
            var head = document.createElement('thead');
            body.setAttribute('id', 'datatables-body');
            head.setAttribute('id', 'datatables-head');

            theader = document.getElementById('datatables-head')
            tbody = document.getElementById('datatables-body');
            t.replaceChild(body, tbody);
            t.replaceChild(head, theader)
         
            
            event.preventDefault();
            var groups = new FormData(event.target).getAll("etudiant[]");
            headeres = []
            Object.keys(ins).forEach(key => {
              var tr = document.createElement('tr');
                var th = document.createElement('th');
                console.log(key);
                th.innerHTML = key
                th.style.background='lightblue'
                tr.appendChild(th)
              grouped=filter(ins[key],groups)

                numbers = []
                iterate(grouped)
                lists[key] = numbers

                console.log(lists);
              
                lists[key] .forEach(num => {
                   
                         t = document.createElement('td')
                    t.innerHTML = num
                    tr.appendChild(t)
               
                   
                })
                body.appendChild(tr)
            })
            a = grouped
            first = true
            groups.forEach(cat => {
                f = hedd(first, cat, a)
                //  console.log(" f est ",f);
                a = f[1]
                first = f[2]
                // console.log(a);
                head.appendChild(f[0])
            })
            li(head, groups)
        }


        function hedd(first, cat, a) {
            ret = []
            trh = document.createElement('tr')
            var th = document.createElement('th');
            th.innerHTML = cat
            th.style.background='yellow'
            trh.appendChild(th)

            if (first) {

                Object.keys(a).forEach(key => {

                    var th = document.createElement('th');
                    th.innerHTML = key
  
                    trh.appendChild(th)
                    ret.push(a[key])
                })
                first = false

                return [trh, ret, first]
            }

            a.forEach(key => {
                var result = Object.keys(a)[0];


                if (result[0] !== 0) {

                    Object.keys(key).forEach(h => {


                        var th = document.createElement('th');
                        th.innerHTML = h


                        trh.appendChild(th)
                        ret.push(key[h])

                    })
                }
            })

            return [trh, ret, first]

        }


        function li(head, groups) {
            trs = head.querySelectorAll('tr')
            var l = []
            trs.forEach(tr => {
                l.push(tr.cells.length - 1)
            })

            i = l.sort(function(a, b) {
                return b - a
            })[0];

            trs.forEach(tr => {

                ths = tr.querySelectorAll('th')

                ths.forEach(th => {
                    if (!groups.includes(th.innerHTML)) {


                        th.colSpan = (i / (tr.cells.length - 1))
                         th.style.background='lightblue'
                    }

                });

            });




        };




function filter(ins ,groups ) {
  var grouped = {}

  ins.forEach(function(a) {
                    groups
                        .reduce(function(o, g, i) {
                            // take existing object,
                            o[a[g]] = o[a[g]] || (i + 1 === groups.length ? [] :
                            {}); // or generate new obj, or
                            return o[a[g]]; // at last, then an array
                        }, grouped)
                        .push(a);
                });
                return grouped;
}




        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('datatables');
            var wb = XLSX.utils.table_to_book(elt, {
                sheet: "sheet1"
            });
            return dl ?
                XLSX.write(wb, {
                    bookType: type,
                    bookSST: true,
                    type: 'base64'
                }) :
                XLSX.writeFile(wb, fn || ('one.' + (type || 'xlsx')));
        }
    </script> --}}


    {{-- <div class="content-page"> --}}
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
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a> --}}
        
                            <!-- item-->
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a> --}}

                            <!-- item-->
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a> --}}

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        {{-- <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a> --}}
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            {{-- <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="javascript: void(0);" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div> --}}

                            <div style="max-height: 230px;" data-simplebar="">
                                <!-- item-->
                                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a> --}}

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
                
                <!-- start page email-title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item active"></li>
                                </ol>
                            </div>
                            <h4 class="page-title"></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page email-title --> 

                <div class="row">

                    <!-- Right Sidebar -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Left sidebar -->
                                <div class="page-aside-left">

                                    <div class="d-grid">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#compose-modal">Les parametres d'export</button>
                                    </div>

                                    <div class="email-menu-list mt-3">
                                        {{-- <a href="javascript: void(0);" class="text-danger fw-bold"><i class="dripicons-inbox me-2"></i>Inbox<span class="badge badge-danger-lighten float-end ms-2">7</span></a> --}}
                                        <a href="javascript: void(0);"><input type="checkbox"> Redoublant </a>
                                        <a href="javascript: void(0);"><input type="checkbox"> Niveau</a>
                                        <a href="javascript: void(0);"><input type="checkbox"> Genre</a>
                                        {{-- <a href="javascript: void(0);"><i class="dripicons-clock me-2"></i>Snoozed</a>
                                        <a href="javascript: void(0);"><i class="dripicons-document me-2"></i>Draft<span class="badge badge-info-lighten float-end ms-2">32</span></a>
                                        <a href="javascript: void(0);"><i class="dripicons-exit me-2"></i>Sent Mail</a>
                                        <a href="javascript: void(0);"><i class="dripicons-trash me-2"></i>Trash</a>
                                        <a href="javascript: void(0);"><i class="dripicons-tag me-2"></i>Important</a>
                                        <a href="javascript: void(0);"><i class="dripicons-warning me-2"></i>Spam</a> --}}
                                    </div>

                                    {{-- <div class="mt-4">
                                        <h6 class="text-uppercase">Labels</h6>
                                        <div class="email-menu-list labels-list mt-2">
                                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-info me-2"></i>Updates</a>
                                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-warning me-2"></i>Friends</a>
                                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-success me-2"></i>Family</a>
                                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-primary me-2"></i>Social</a>
                                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-danger me-2"></i>Important</a>
                                            <a href="javascript: void(0);"><i class="mdi mdi-circle font-13 text-secondary me-2"></i>Promotions</a>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mt-5">
                                        <h4><span class="badge rounded-pill p-1 px-2 badge-secondary-lighten">FREE</span></h4>
                                        <h6 class="text-uppercase mt-3">Storage</h6>
                                        <div class="progress my-2 progress-sm">
                                            <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-muted font-13 mb-0">7.02 GB (46%) of 15 GB used</p>
                                    </div> --}}

                                </div>
                                <!-- End Left sidebar -->

                                <div class="page-aside-right">

                                    {{-- <div class="btn-group">
                                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-archive font-16"></i></button>
                                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-alert-octagon font-16"></i></button>
                                        <button type="button" class="btn btn-secondary"><i class="mdi mdi-delete-variant font-16"></i></button>
                                    </div> --}}
                                    {{-- <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-folder font-16"></i>
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-header">Move to:</span>
                                            <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-label font-16"></i>
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-header">Label as:</span>
                                            <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-16"></i> More
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-header">More Options :</span>
                                            <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mt-3">
                                        <h5 class="font-18">Your elite author Graphic Optimization reward is ready!</h5>

                                        <hr>

                                        <div class="d-flex mb-3 mt-1">
                                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="placeholder image" height="32">
                                            <div class="w-100 overflow-hidden">
                                                <small class="float-end">Dec 14, 2017, 5:17 AM</small>
                                                <h6 class="m-0 font-14">Steven Smith</h6>
                                                <small class="text-muted">From: jonathan@domain.com</small>
                                            </div>
                                        </div>

                                        <p>Hi Coderthemes!</p>
                                        <p>Clicking ‘Order Service’ on the right-hand side of the above page will present you with an order page. This service has the following Briefing Guidelines that will need to be filled before placing your order:</p>
                                        <ol>
                                            <li>Your design preferences (Color, style, shapes, Fonts, others) </li>
                                            <li>Tell me, why is your item different? </li>
                                            <li>Do you want to bring up a specific feature of your item? If yes, please tell me </li>
                                            <li>Do you have any preference or specific thing you would like to change or improve on your item page? </li>
                                            <li>Do you want to include your item's or your provider's logo on the page? if yes, please send it to me in vector format (Ai or EPS) </li>
                                            <li>Please provide me with the copy or text to display</li>
                                        </ol>

                                        <p>Filling in this form with the above information will ensure that they will be able to start work quickly.</p>
                                        <p>You can complete your order by putting your coupon code into the Promotional code box and clicking ‘Apply Coupon’.</p>
                                        <p><b>Best,</b> <br> Graphic Studio</p>
                                        <hr>

                                        <h5 class="mb-3">Attachments</h5>

                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="card mb-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title bg-primary-lighten text-primary rounded">
                                                                        .ZIP
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);" class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                                                <p class="mb-0">2.3 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                                    <i class="dripicons-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-xl-4">
                                                <div class="card mb-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <img src="assets/images/projects/project-1.jpg" class="avatar-sm rounded" alt="file-image">
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                                                <p class="mb-0">3.25 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                                    <i class="dripicons-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-xl-4">
                                                <div class="card mb-0 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title bg-secondary text-light rounded">
                                                                        .MP4
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                                                <p class="mb-0">7.05 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                                    <i class="dripicons-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
                                        
                                        <div class="mt-5">
                                            <a href="" class="btn btn-secondary me-2"><i class="mdi mdi-reply me-1"></i> Reply</a>
                                            <a href="" class="btn btn-light">Forward <i class="mdi mdi-forward ms-1"></i></a>
                                        </div>

                                    </div> --}}
                                    <!-- end .mt-4 -->

                                </div> 
                                <!-- end inbox-rightbar-->
                            </div>

                            <div class="clearfix"></div>
                        </div> <!-- end card-box -->

                    </div> <!-- end Col -->
                </div><!-- End row -->
                
            </div> <!-- container -->

        </div> <!-- content -->
@endsection
