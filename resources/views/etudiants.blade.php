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
    <h5>Année scolaire <span id="selected" class="badge rounded-pill p-1 px-2 badge-danger-lighten" >{{ date('Y')-1 }}-{{ date('Y') }}</span></h5>
    </div>
    <div class="col-sm-8">
        <div class="text-sm-end">
            <div class="dropdown"  aria-placeholder="Change it">
                <button type="button" class="btn btn-primary mb-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <i class="uil-calender"></i>changer  l'année 
                </button>
              
                <div class="dropdown-menu dropdown-menu-end">
                    
                    <p><input type="radio" class="form-check-input  m-1" id="year" name="filter" data-id="div 2" value="2021-2022">
                    <label class="form-check-label " for="dropdownCheck">
                    2021-2022
                    </label></p>
                    <p><input type="radio" class="form-check-input    m-1" id="year" name="filter" value="2020-2021" data-id="div 3" value="2022-2023">
                    <label class="form-check-label" for="dropdownCheck">
                    2020-2021
                    </label></p>
                    <p><input type="radio" class="form-check-input    m-1" id="year" name="filter" value="2019-2020"data-id="div 4" value="2022-2023">
                    <label class="form-check-label" for="dropdownCheck">
                    2019-2020
                    </label></p>
                    <p><input type="radio" class="form-check-input   m-1" id="year" name="filter" value="2018-2019" data-id="div 4" value="2022-2023">
                    <label class="form-check-label" for="dropdownCheck">
                    2018-2019
                    </label></p>
                    
               
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

   <div class="row mb-2">
    <div class="col-sm-8">       

            </div> 
            {{-- Repartitions Personalisé --}}
        <div class="col-xl-12">  
            <div class="card">
                <div class="card-body">
                    <div class="dropdown btn-group dropend">
                        <button class="btn btn-info dropdown-toggle  m-2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class=" uil-graph-bar m-1"></i>Repartitions Personalisé
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Genre
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Formation
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Niveau
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Redoublant
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Transfere
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Tronc/Filiere
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Nationalité
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Langue formation
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Boursier
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <p class="text-muted font-14  header-title">
                        Vous devez choisir les criteres dont vous vouliez repartir les etudiants
                    
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#simple-bre-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Tableau
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#simple-bre-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Graphe
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="simple-bre-preview">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                                
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                                
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div> <!-- end preview-->
                    
                        <div class="tab-pane" id="simple-bre-code">
                            <pre class="mb-0">
                            
                                <span class="html escape">
                                heyy
                                </span>
                            </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
      {{-- fin   Repartitions Personalisé --}}
      {{-- Repartitions non-personnalisé --}}
      <div class="col-xl-12">  
        <div class="card">
            <div class="card-body">
                <div class="dropdown m-4" >
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class=" uil-graph-bar m-1"></i>Repartitions non-personnalisé
                    </button>
                    <div class="dropdown-menu dropdown-menu-animated  ">
                    
                            <div class="m-3 ">
                              
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
                                <div class="form-check border-bottom m-2 p-2">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="filter" data-id="div 5">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Effectifs des étudiants par institution, par âge et par genre
                                    </label>
                                </div>
                             
                            </div>
                          
                
                                
                                </div>
                
                            </div>
                            <p class="text-muted font-14 header-title">
                                Ces repartitions ont été mentionner dans l'annuaire statistique 
                                            Please read the official <a target="_blank" href="../../docs/4.0/components/breadcrumb/index.htm">annuaire statistique </a> documentation for more options.
                            
                            </p>
        
                            <ul class="nav nav-tabs nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#simple-bre-preview2" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Tableau
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#simple-bre-code2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                        Graphe
                                    </a>
                                </li>
                            </ul> <!-- end nav-->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="simple-bre-preview2">
                                    <h4 class="header-title">  Effectifs des étudiants par établissement du public</h4>
                                    <div class="col-md-5 table-responsive table-responsive" id="buttons-table-preview 1">
                                                                                  
                                    </div> <!-- end preview-->
                                </div> <!-- end preview-->
                            
                                <div class="tab-pane" id="simple-bre-code2">
                                    <pre class="mb-0">
                                    
                                            <h4 class="header-title"> Repartution des étudiants par établissement du public</h4>
                                            <div class="col-md-6 "  dir="ltr">
                                            <div id="myChart 1" ></div>
                                            </div>
                                    </pre> <!-- end highlight-->
                                </div> <!-- end preview code-->
                            </div> <!-- end tab-content-->
        
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->

  <div class="col-xl-12" id="div 2">  
    <div class="card">
        <div class="card-body">
           
            <i class="  uil-signal-alt-3"></i>
          
            <p class="text-muted font-14 header-title">
                Effectifs par institution et par genre, mauritaniens et étrangers        </p>

            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item">
                    <a href="#icon-bre-preview3" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        Tableau
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#icon-bre-code3" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        Graphe
                    </a>
                </li>
            </ul> <!-- end nav-->
            <div class="tab-content">
                <div class="tab-pane show active" id="icon-bre-preview3">
                    <div class="table-responsive" id="buttons-table-preview 2">
                                                                                  
                    </div> <!-- end preview-->     
                </div> <!-- end preview-->
            
                <div class="tab-pane" id="icon-bre-code3">
                    <pre class="mb-0">
                       graphee
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->
            </div> <!-- end tab-content-->

        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->

  <div class="col-xl-12" id="div 3">  
    <div class="card">
        <div class="card-body">
            <i class="  uil-signal-alt-3"></i>
            <p class="text-muted font-14 header-title">
                Effectifs par institution et par genre 
            </p>

            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item">
                    <a href="#icon-bre-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        Tableau
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#icon-bre-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        Graphe
                    </a>
                </li>
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
</div> <!-- end col -->
  <div class="col-xl-12 " id="div 4">  
    <div class="card">
        <div class="card-body">
            <i class="  uil-signal-alt-3"></i>
            <p class="text-muted font-14 header-title">
                Universités : effectifs des étudiants mauritaniens par institution, par genre et par niveau
            </p>

            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item">
                    <a href="#icon-bre-preview4" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        Tableau
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#icon-bre-code4" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        Graphe
                    </a>
                </li>
            </ul> <!-- end nav-->
            <div class="tab-content">
                <h4 class="header-title">LMD</h4>
                <div class="tab-pane show active" id="icon-bre-preview4">
                    <div class="tab-content">
                        <div class="table-responsive" id="buttons-table-preview 4">
                                                                      
                        </div> <!-- end preview-->
                       
                                
                       
                    </div> <!-- end tab-content-->
                    <div class="tab-content">
                        <div class="table-responsive" id="buttons-table-preview 4">
                                                                      
                        </div> <!-- end preview-->
                       
                                
                       
                    </div> <!-- end tab-content-->
                </div> <!-- end preview-->
            
                <div class="tab-pane" id="icon-bre-code4">
                    <pre class="mb-0">
                        <span class="html escape">
                            &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                &lt;ol class=&quot;breadcrumb bg-light-lighten p-2&quot;&gt;
                                    &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;&lt;i class=&quot;uil-home-alt me-1&quot;&gt;&lt;/i&gt; Home&lt;/li&gt;
                                &lt;/ol&gt;
                            &lt;/nav&gt;
                                
                            &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                &lt;ol class=&quot;breadcrumb bg-light-lighten p-2&quot;&gt;
                                    &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;uil-home-alt&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
                                &lt;/ol&gt;
                            &lt;/nav&gt;
                                
                            &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                &lt;ol class=&quot;breadcrumb bg-light-lighten p-2 mb-0&quot;&gt;
                                    &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;uil-home-alt&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
                                &lt;/ol&gt;
                            &lt;/nav&gt;
                        </span>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->
            </div> <!-- end tab-content-->

        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->
 


<div class="col-xl-12" id="div 5">  
    <div class="card">
        <div class="card-body">
            <i class="  uil-signal-alt-3"></i>
            <p class="text-muted font-14 header-title">
                Effectifs des étudiants par institution, par âge et par genre
            </p>

            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item">
                    <a href="#icon-bre-preview5" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        Tableau
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#icon-bre-code5" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        Graphe
                    </a>
                </li>
            </ul> <!-- end nav-->
            <div class="tab-content">
                <div class="tab-pane show active" id="icon-bre-preview5">
                    <div class="tab-content">
                        <div class="table-responsive" id="buttons-table-preview 5">
                                                                      
                        </div> <!-- end preview-->
                
                    </div> <!-- end tab-content-->
                </div> <!-- end preview-->
            
                <div class="tab-pane" id="icon-bre-code5">
                    <pre class="mb-0">
                        <span class="html escape">
                            &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                &lt;ol class=&quot;breadcrumb bg-light-lighten p-2&quot;&gt;
                                    &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;&lt;i class=&quot;uil-home-alt me-1&quot;&gt;&lt;/i&gt; Home&lt;/li&gt;
                                &lt;/ol&gt;
                            &lt;/nav&gt;
                                
                            &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                &lt;ol class=&quot;breadcrumb bg-light-lighten p-2&quot;&gt;
                                    &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;uil-home-alt&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
                                &lt;/ol&gt;
                            &lt;/nav&gt;
                                
                            &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                &lt;ol class=&quot;breadcrumb bg-light-lighten p-2 mb-0&quot;&gt;
                                    &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;uil-home-alt&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
                                &lt;/ol&gt;
                            &lt;/nav&gt;
                        </span>
                    </pre> <!-- end highlight-->
                </div> <!-- end preview code-->
            </div> <!-- end tab-content-->

        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->
 {{-- fin Repartitions non-personnalisé --}}
            

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
<script>
//    
    $("input#year").on("click", function() {
    console.log("Anchor clicked!");
    let selectedYear = $(this).val();
    console.log("Selected year: " + selectedYear);
    $("#selected").text(selectedYear);
  });



</script>
       @endsection