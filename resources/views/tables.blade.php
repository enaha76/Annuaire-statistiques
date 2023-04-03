@extends('layouts.app')

@section('content')

<!-- start page title -->
<div class="container-fluid">
@if (session('success'))
<div >
    <div  id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content modal-filled bg-success">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-checkmark h1"></i>
                        <h4 class="mt-2">Importé avec succès</h4>
                        <p class="mt-3">les Etudiants ont été enregistrer </p>
                        <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
@endif

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire Statistique</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Getion</a></li>
                    <li class="breadcrumb-item "><a href="javascript: void(0);">import</a></li>
                    <li class="breadcrumb-item active">Etudiants</a></li>

                </ol>
            </div>
            <h4 class="page-title">Etudiants</h4>
        </div>
    </div>
</div>

<!-- end page title -->
<div class="row mb-2">
    <div class="col-sm-4">
    <h5>Année scolaire <span id="selected" class="badge rounded-pill p-1 px-2 badge-success-lighten" >{{ date('Y')-1 }}-{{ date('Y') }}</span></h5>
    </div>
    <div class="col-sm-8">
        <div class="text-sm-end">
            <div class="dropdown"  aria-placeholder="Change it">
                <button type="button" class="btn btn-info mb-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
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
                    <p><input type="radio" class="form-check-input   m-1" id="year" name="filter"  value="2018-2019" data-id="div 4" value="2022-2023">
                    <label class="form-check-label" for="dropdownCheck">
                    2018-2019
                    </label></p>
                    
            
                </div>
            </div>
        </div>
    </div><!-- end col-->
</div> 

{{-- select option --}}
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">upload ur student file here</h4>
    
                <div class="tab-content">
                    <div class="tab-pane show active" id="select2-preview">
                        <div class="row">
                            <div class="col-lg-9">
                                    <p class="mb-1 fw-bold text-muted"></p>
                                    <select class="form-control select2" id="mySelect" data-toggle="select2">
                                    <option value="0"><b> Choisir l'institution ...</b></option>
                                        @foreach($List3 as $e)
                                        <option value="{{ $e->id }}"><b> {{ $e->abrev }} </b>  ({{ $e->nom }})</option>
                                        @endforeach
                                    </select>
                            </div> <!-- end col -->
                            
                            <div class="">
                                <br>
                                <form action="">
                                <div class="fallback"></div>    
                                <br>
                                <div class='file-input ' id='cache_file'>
                                    <input type='file' id="fileInput">
                                    <span class=' btn btn-primary'> <i class="mdi mdi-file-import"></i></span>
                                    <span class='label' data-js-label>Aucun fichier sélectionné</label>
                                </div>
                                </form>
                            </div> <!-- end col -->
                        </div> <!-- end row -->                                           
                    </div> <!-- end preview-->             
                </div> <!-- end tab-content-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<form action="{{ route('test') }}" method="POST" id="formId">
    @csrf
      <div id="su"> </div>
</form>

{{-- houn --}}
<div class="col-xl-12 col-lg-10">
    <div class="card">
        <div class="card-body">
            <a href="" class="p-0 float-end"><i class="mdi mdi-download ms-1"></i></a>
            <h4 class="header-title mt-1 mb-3">historic</h4>

            <div class="table-responsive">
                <table class="table table-sm table-centered mb-0 font-14">
                    <thead class="table-light">
                        <tr>
                            <th>Name of file</th>
                            
                            <th>Name of Etablisment</th>
                            <th>Number of student</th>
                            <th>Etat</th>
                            <th>Date</th>
                            <th style="width: 30%;">Treatment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td>SUPNUM.xlsx</td>
                            <td>SUPNUM</td>
                            <td>250</td>
                            <td ><span> uploaded </span></td>
                            <td>12/02/2023</td>
                            <td>
                                <div class="progress" style="height: 10px;">
                                    {{-- <div class="progress"> --}}
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                    </div>
                                    {{-- <div class="progress-bar" role="progressbar" style="width: 100%; height: 20px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div> --}}
                                {{-- </div> --}}
                            </td>
                            <td><a href="javascript: void(0);" class="icon-link"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                <a href="javascript: void(0);" class="icon-link"><i class="mdi mdi-book-edit-outline"></i></a>
                            </td>
                        </tr> 
                    </tbody>
                </table>
            </div> <!-- end table-responsive-->
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div> <!-- end col-->
 {{-- end houn --}}

<!-- Preview -->
<div class="dropzone-previews mt-3" id="file-previews"></div>
      
<div id="sub2"></div>




<!-- Danger Header Modal -->
<div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-danger">
                <h4 class="modal-title" id="danger-header-modalLabel">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="mt-0">Fichier non-valide ??</h5>
                <p>  Ce fichier ne correspond au format valide</p>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Etablissement ??</h4>
                    <p class="mt-3">vous n'avez pas selectionner l'etablissement correspondante</p>
                    <button type="button"  id="etblsmn_chose" class="btn btn-warning my-2" data-bs-dismiss="modal">Continue</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1"></i>
                    <h4 class="mt-2">Fichier non-valide ??</h4>
                    <p class="mt-3">Ce fichier ne correspond au format valide</p>
                    <button type="button" id="jj" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="info-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info">
                <h4 class="modal-title" id="info-header-modalLabel">Information dupliquer</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="mt-0">Info</h5>
                <p>Les Etudiants de ce Etablissement sont deja enregistrer</p>
            
            </div>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                             
  
{{-- new modal --}}
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Traitement du fichier avant l'import</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- col-xl-3 col-lg-6 order-lg-1 -->
            <div class="modal-body">
                <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <div class="card-body">
                        
                            <h4 class="header-title"> sur la colone genre</h4>
                
                            {{-- <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c"></div> --}}
                            <div id="average-sales1" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>

                            
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            
                <div class="col-lg-6">
                    <br><br><br>
                <table class="table table-hover table-centered mb-0">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Nomber</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><i class="mdi mdi-circle text-danger"></i> Non renseigné</th>
                            <td id="nor"></td>
                        
                        </tr>
                        <tr>
                            <th><i class="mdi mdi-circle text-info"></i> Mal renseigné</th>
                            <td id="mar"></td>
                        
                        </tr>
                        <tr>
                            <th><i class="mdi mdi-circle text-success"></i> Correcte</th>
                            <td id="cor"></td>
                        
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td id="tot"></td>
                        
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('test') }}" method="POST" id="formId">
                    @csrf
                    <div id="sub"> </div>
                </form>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
{{-- end new modal --}}




<div id="fill-warning-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-warning-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-filled bg-warning">
            <div class="modal-header">
                <h4 class="modal-title text-dark" id="fill-warning-modalLabel">Warning</h4>
                <br>
                
                <!-- <h1 id="ahmedou"></h1> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-dark">Dans ce fichier vous avez <span class="text-light" id="ahmedou"></span> Etudiants  deja inscrit en <span id="anne"></span> </h4>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> -->
                <button type="button" id="exist_student" class="btn btn-outline-light" data-bs-dismiss="modal">OK</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

                    
</div>
<script type="text/javascript" src="{{ asset('js/xlsx.full.min.js')}}"></script>
<script>
chek_list=@json($chek);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.1/xlsx.core.min.js"></script>
<!-- end demo js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script >
    $('#search').keyup(function(){
    var value= $(this).val().toLowerCase();
    $('#list li').each(function(){
        var search = $(this).text().toLowerCase();
        if(search.indexOf(value)> -1){
            $(this).show();
        }
        else{
        $(this).hide();
        }
    })
    });
</script>
<script src="assets/js/vendor/dropzone.min.js"></script>
<!-- init js -->
<script src="assets/js/ui/component.fileupload.js"></script>
<script>
const spinnerah=document.querySelector('.spinner-wrapper')
window.addEventListener('load',() => {
    spinnerah.style.opacity='0';
    setTimeout(()=>{
spinnerah.style.display='none';
    })
});
</script>
<script>
    jsonData = @json($data);
    window.jsonData=jsonData;
    // console.log(jsonData);
    $(document).ready(function(){
    setTimeout(function(){
        $("#success-alert-modal").modal("show");
    }, 100);
});




</script>
<script src="assets/js/pages/rens.js">


// apexcharts.min.js:14 Uncaught (in promise) Error: Element not found

</script>
<script>
var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
  customInput(inputs[i])
}

function customInput (el) {
  const fileInput = el.querySelector('[type="file"]')
  const label = el.querySelector('[data-js-label]')
  
  fileInput.onchange =
  fileInput.onmouseout = function () {
    if (!fileInput.value) return
    
    var value = fileInput.value.replace(/^.*[\\\/]/, '')
    el.className += ' -chosen'
    label.innerText = value
  }
}
</script>

<script>


    
</script>

@endsection
