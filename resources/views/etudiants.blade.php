@extends('layouts.app')

@section('content')
            <style>
                #div{
                    display: none
                }
            </style>
<script src={{asset('js/filter.js')}} defer>
  </script>          

            <div class="container-fluid" >
<h3>L'Annee scolaire Actuel est : {{$year}}</h3>
                <select id="year-select" aria-placeholder="Change it">
                    
                   @foreach ($years as $y )
                   <option value={{$y}}>{{$y}}</option>
                   @endforeach
                  </select>
                  <script>
                    
                    document.getElementById("year-select").addEventListener("change", function() {
  let selectedYear = this.value;
  // Update the route with the selected year as the optional variable
  window.location.href = `/etudiants/${selectedYear}`;
});

                  </script>
                <div class="row" >
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
                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class=" uil-filter m-1"></i>Fitre</a>

                <div class="row"   >
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h2>  Effectifs des étudiants par établissement du public</h2>
                               
                                
                                <div class="tab-content">
                                    <div class="table-responsive table-responsive" id="buttons-table-preview 1">
                                                                                  
                                    </div> <!-- end preview-->
                                   
                                            <h4 class="header-title"> Repartution des étudiants par établissement du public</h4>
                                            <div dir="ltr">
                                                <div id="myChart 1" ></div>
                                            </div>
                                        
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                
                <div class="row" id="div 2">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h2> Effectifs par institution et par genre, mauritaniens et étrangers</h2>
                               
                                
                                <div class="tab-content">
                                    <div class="table-responsive" id="buttons-table-preview 2">
                                                                                  
                                    </div> <!-- end preview-->                                            
                                        
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
               
                <div class="row" id="div 3">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h2> Effectifs par institution et par genre </h2>
                               
                                
                                <div class="tab-content">
                                    <div class="table-responsive" id="buttons-table-preview 3">
                                                                                  
                                    </div> <!-- end preview-->
                                   
                                            <h4 class="header-title"> Repartution des étudiants par institution et par genre </h4>
                                            <div dir="ltr">
                                                <div id="myChart 3" ></div>
                                            </div>
                                        
                                   
                                </div> <!-- end tab-content-->
                               
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <div class="row" id="div 4">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h2> 

                                     Universités : effectifs des étudiants mauritaniens par institution, par genre et par niveau
                                    </h2>
                               
                                
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

                                <h2> 

                                    Effectifs des étudiants par institution, par âge et par genre
                                                                    </h2>
                               
                                
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
 <script src="cdn/Chart.min.js"></script>

<script defer>
    let data = @json($enrollments);
    let etats =  @json($Etablissements);
   
    $(document).ready(function(){
        fill(data,etats);
        
});

    $(document).ready(function(){
    $('input[name="filter"]').change(function(){
        var divId = $(this).attr('data-id');
        if($(this).is(':checked')) {
            $('#' + divId).show();
        } else {
            $('#' + divId).hide();
        }
    });
}); 

</script>
       @endsection