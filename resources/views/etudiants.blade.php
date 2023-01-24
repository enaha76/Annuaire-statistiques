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
  <div class="row mb-2">
    <div class="col-sm-4">
    <h5>Année scolaire <span class="badge rounded-pill p-1 px-2 badge-success-lighten">{{$year}}</span></h5>
    </div>
    <div class="col-sm-8">
        <div class="text-sm-end">
            <div class="dropdown" id="year-select" aria-placeholder="Change it">
                <button type="button" class="btn btn-info mb-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <i class="uil-calender"></i>changer  l'année 
                </button>
              
                <div class="dropdown-menu dropdown-menu-end">
                    @foreach ($years as $y )
                    <a class="dropdown-item " href="#" value={{$y}}>{{$y}}</a>
                    @endforeach
                </div>
          
            </div>
        </div>
    </div><!-- end col-->
</div> 
<div class="container-fluid">
             
    
  
                  <script>
                    
                    document.getElementById("year-select").addEventListener("change", function() {
  let selectedYear = this.value;
  // Update the route with the selected year as the optional variable
  window.location.href = `/etudiants/${selectedYear}`;
});

                  </script>
              
              
                  
<div class="dropdown m-4" >
    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class=" uil-graph-bar m-1"></i>Les repartitions
    </button>
    <div class="dropdown-menu  ">
    
            <div class="m-3 ">
                {{-- <div class="form-check border-bottom  m-2 p-2">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="filter" data-id="">
                    <label class="form-check-label" for="dropdownCheck">
                         par établissement du public
                    </label>
                </div> --}}
                <div class="form-check border-bottom  m-2 p-2">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="filter" data-id="div 2">
                    <label class="form-check-label" for="dropdownCheck">
                         par institution et par genre, mauritaniens et étrangers
                    </label>
                </div>
                <div class="form-check border-bottom  m-2 p-2">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="filter" data-id="div 3">
                    <label class="form-check-label" for="dropdownCheck">
                        par institution et par genre
                    </label>
                </div>
                <div class="form-check border-bottom  m-2 p-2">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="filter" data-id="div 4">
                    <label class="form-check-label" for="dropdownCheck">
                        Universités: effectifs des étudiants mauritaniens par institution, par genre et par niveau
                    </label>
                </div>
                <div class="form-check border-bottom  m-2 p-2">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="filter" data-id="div 5">
                    <label class="form-check-label" for="dropdownCheck">
                        Effectifs des étudiants par institution, par âge et par genre
                    </label>
                </div>
            </div>
       
        
       
    </div>
</div>
                <div class="row" >
                    
                        <div class="card">
                            <div class="card-body">

                                <h4>  Effectifs des étudiants par établissement du public</h4>
                               
                                
                                <div class="row tab-content">
                                    <div class="col-md-5 table-responsive table-responsive" id="buttons-table-preview 1">
                                                                                  
                                    </div> <!-- end preview-->
                                   <br>
                                   <br>
                                   <div class="col-sm-1"></div>
                                            <div  class="col-md-6 " id="ltr">
                                            <h4 class="header-title"> Repartution des étudiants par établissement du public</h4>

                                                <div id="myChart 1" ></div>
                                            </div>
                                        
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                   
                </div>
                
                <div class="row" id="div 2">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4> Effectifs par institution et par genre, mauritaniens et étrangers</h4>
                               
                                
                                <div class="tab-content">
                                    <div class="table-responsive" id="buttons-table-preview 2">
                                                                                  
                                    </div> <!-- end preview-->                                            
                                        
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
               
                <div class="row" id="div 3">
                  
                    <div class="card">
                        <div class="card-body">

                                <h4> Effectifs par institution et par genre </h4>
                               
                                
                                <div class="row tab-content">
                                    <div class="col-md-5 table-responsive" id="buttons-table-preview 3">
                                                                                  
                                    </div> <!-- end preview-->
                                   <br>
                                    <br>
                                    <div class="col-sm-1"></div>
                                            <div class="col-md-6 "  dir="ltr">
                                   <h4 class="header-title"> Repartution des étudiants par institution et par genre </h4>

                                                <div id="myChart 3" ></div>
                                            </div>
                                        
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                   
                </div>
                <div class="row" id="div 4">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4> 

                                     Universités : effectifs des étudiants mauritaniens par institution, par genre et par niveau
                                    </h4>
                               
                                
                                <div class="tab-content">
                                    <div class="table-responsive" id="buttons-table-preview 4">
                                                                                  
                                    </div> <!-- end preview-->
                                   
                                            
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <div class="row" id="div 5">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4> 

                                    Effectifs des étudiants par institution, par âge et par genre
                                                                    </h4>
                               
                                
                                <div class="tab-content">
                                    <div class="table-responsive" id="buttons-table-preview 5">
                                                                                  
                                    </div> <!-- end preview-->
                                   
                                            
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
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
 <script src={{asset('cdn/Chart.min.js')}}></script>

<script defer>
    let data = @json($enrollments);
    let etats =  @json($Etablissements);
   
    $(document).ready(function(){
        fill(data,etats);
        
});

    
    $('input[name="filter"]').on('change',function(){
        var divId = $(this).attr('data-id');
        if($(this).is(':checked')) {
            $('div[id="'+divId+'"]').show();
        } else {
            $('div[id="'+divId+'"]').hide();
        }
    });


</script>
       @endsection