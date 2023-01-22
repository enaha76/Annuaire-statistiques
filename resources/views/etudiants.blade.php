@extends('layouts.app')

@section('content')
            
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire statistique</a></li>
                    <li class="breadcrumb-item active">Etudiants</li>
                </ol>
            </div>
            <h4 class="page-title">Tableau</h4>
        </div>
    </div>
</div>    

<script src={{asset('js/filter.js')}} defer>
  </script>          

<div class="container-fluid">
             
    <div class="dropdown" id="year-select" aria-placeholder="Change it">
      <button type="button" class="btn btn-light mb-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <i class="uil-calender"></i>Change the year
      </button>
    
      <div class="dropdown-menu dropdown-menu-end">
          @foreach ($years as $y )
          <a class="dropdown-item " href="#" value={{$y}}>{{$y}}</a>
          @endforeach
      </div>

  </div>
  <h5>Année scolaire <span class="badge rounded-pill p-1 px-2 badge-secondary-lighten">{{$year}}</span></h5>
                  <script>
                    
                    document.getElementById("year-select").addEventListener("change", function() {
  let selectedYear = this.value;
  // Update the route with the selected year as the optional variable
  window.location.href = `/etudiants/${selectedYear}`;
});

                  </script>
                <!-- start page title -->
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                 <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire Statistique</a></li>
                                    <li class="breadcrumb-item active">Etudiants</a></li>
                               
                                </ol> 
                            </div>
                            <h4 class="page-title">Etudiants</h4>
                        </div>
                    </div>
                </div>      --}}
                <!-- end page title --> 
{{-- 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <a href="javascript:void(0);" class="btn btn-danger mb-2"><span class="material-icons-sharp">
                                            filter_alt
                                            </span>Fitre</a>
                                    </div> --}}
                                    {{-- <div class="col-sm-8">
                                        <div class="text-sm-end">
                                            <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                                            <button type="button" class="btn btn-light mb-2">Import</button>
                                            <button type="button" class="btn btn-light mb-2">Export</button>
                                        </div>
                                    </div><!-- end col--> --}}
                                {{-- </div>
        
                                <div class="table-responsive">
                                    <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="all" style="width: 20px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th class="all">Product</th>
                                                <th>Category</th>
                                                <th>Added Date</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th style="width: 85px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img src="assets/images/products/product-1.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                                    <p class="m-0 d-inline-block align-middle font-16">
                                                        <a href="apps-ecommerce-products-details.html" class="text-body">Amazing Modern Chair</a>
                                                        <br>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                        <span class="text-warning mdi mdi-star"></span>
                                                    </p>
                                                </td>
                                                <td>
                                                    Aeron Chairs
                                                </td>
                                                <td>
                                                    09/12/2018
                                                </td>
                                                <td>
                                                    $148.66
                                                </td>
            
                                                <td>
                                                    254
                                                </td>
                                                <td>
                                                    <span class="badge bg-success">Active</span>
                                                </td>
            
                                                <td class="table-action">
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->         --}}
                 

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-danger mb-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="  uil-chart-bar m-1"></i>Les repartititions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Effectifs des étudiants par établissement du public</a>
                                        <a class="dropdown-item" href="#">Effectifs par institution et par genre, mauritaniens et étrangers</a>
                                        <a class="dropdown-item" href="#">Universités : effectifs des étudiants mauritaniens par institution, par genre et par niveau</a>
                                        <a class="dropdown-item" href="#">Effectifs des étudiants par domaine d'étude et par genre</a>
                                        <a class="dropdown-item" href="#">Répartition des Boursiers et Bénéficiaires d'aides par Institution</a>

                                    </div>
                                </div>
                                {{-- <a href="javascript:void(0);" class=""></a> --}}
                                <h5>  Effectifs des étudiants par établissement du public</h5>
                                {{-- <p class="text-muted font-14">
                                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                                    that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                </p> --}}

                                {{-- <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#buttons-table-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a href="#buttons-table-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li> --}}
                                {{-- </ul> <!-- end nav--> --}}
                                
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="buttons-table-preview 1">
                                                                                  
                                    </div> <!-- end preview-->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title"> Repartution des étudiants par établissement du public</h4>
                                            <div dir="ltr">
                                                <div id="myChart 1" ></div>
                                            </div>
                                        </div>
                                        <!-- end card body-->
                                    </div>
                                   
                                </div> <!-- end tab-content-->
                                <h2>  Effectifs par institution et par genre, mauritaniens et étrangers </h2>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="buttons-table-preview 2">
                                                                                  
                                    </div> <!-- end preview-->
                                   
                                        <!-- end card body-->
                                    </div>
                                   
                                </div> <!-- end tab-content-->
                                
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-4">Les Graphes</h4>
                    </div> <!-- end col -->
                </div>

                <!-- end row -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"> Effectifs des étudiants par établissement du public</h4>
                                <div dir="ltr">
                                    <div id="myCha" ></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div> 
                    <!-- end col-->
                   
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"> Effectifs des étudiants par domaine d'étude et par genre</h4>
                                <div dir="ltr">
                                    <div id="basic-column" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->
              
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Répartition des Boursiers et Bénéficiaires d'aides par Institution</h4>
                                <div dir="ltr">
                                    <div id="simple-pie" class="apex-charts" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#e3eaef"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                   
                    <!-- end col-->
                </div>
                <!-- end row-->
        
            </div> <!-- container -->

        <script src="assets/js/vendor/dropzone.min.js"></script>
        <!-- init js -->
        <script src="assets/js/ui/component.fileupload.js"></script>
        


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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        {{-- <script src="assets/js/pages/demo.datatable-init.js"></script> --}}
        <!-- end demo js-->
         <!-- bundle -->
 <script src="assets/js/vendor.min.js"></script>
 <script src="assets/js/app.min.js"></script>

 <!-- third party:js -->
 <script src="assets/js/vendor/apexcharts.min.js"></script>
 <!-- third party end -->

 <!-- demo:js -->
 <script src="assets/js/pages/demo.apex-pie.js"></script>
 <!-- demo end -->
<!-- demo:js -->
<script src="assets/js/pages/demo.apex-bar.js"></script>
<!-- demo end -->
 <!-- demo:js -->
 <script src="assets/js/pages/demo.apex-column.js"></script>
 <!-- demo end -->
 <script src="cdn/Chart.min.js"></script>

<script>
    let data = @json($enrollments);
    let etats =  @json($Etablissements);
</script>
       @endsection