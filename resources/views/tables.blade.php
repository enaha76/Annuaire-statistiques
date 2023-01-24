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
                    <p><input type="radio" class="form-check-input   m-1" id="year" name="filter" value="2018-2019" data-id="div 4" value="2022-2023">
                    <label class="form-check-label" for="dropdownCheck">
                    2018-2019
                    </label></p>
                    
               
                </div>
          
            </div>
        </div>
    </div><!-- end col-->
</div> 
<script>
   
</script>
<section class="d-flex">

<div class="col-xxl-3 col-lg-4 p-2">
    <div class="pe-xl-3">
        <!-- start search box -->
        <div class="app-search">
            <form>
                <div class="mb-1 position-relative">
                    <input type="search" class="form-control m-1 " id="search" placeholder="Choisir l'institution ...">
                    <span class="mdi mdi-magnify search-icon p-1 "></span>
                </div>
            </form>
        </div>
        <!-- end search box -->

        <div class="row">
            <div class="col">
                <div data-simplebar="" style="max-height: 350px;">
                    <div class="p-2">
                        <div class="row " >
                            <div class="col bt-3 ">
                                <ul  class="list-unstyled " id="list">
                                    @foreach($List3 as $e)
                                     <li class="border-bottom m-2 p-2"><input type="radio" id="customRadiocolor1" name="myCheckboxes" value="{{ $e->id }}" class="form-check-input ml-2  "  > {{ $e->abrev  }}</li> 
                                    @endforeach
                                </ul>

                            </div>


                        </div> <!-- end row-->
 </div>
 </div>

                  </div>

<!-- end projects -->
<form action="">
<div class="fallback">
    {{-- <input name="file" type="file" id="fileInput" multiple /> --}}
{{-- <input type="file"  id="fileInput"/> --}}

</div>
{{-- </form> --}}
<br>
<div class='file-input ' id='cache_file'>
    <input type='file' id="fileInput">
  <span class=' btn btn-primary'> <i class="mdi mdi-file-import"></i></span>
    <span class='label' data-js-label>Aucun fichier sélectionné</label>
</div>
</form>
{{-- <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
data-upload-preview-template="#uploadPreviewTemplate"> --}}
{{-- <div class="fallback"> --}}
    {{-- <input name="file" type="file" id="fileInput" multiple /> --}}
    {{-- <input type="file" id="fileInput"/> --}}
{{-- </div> --}}

{{-- <div class="dz-message needsclick">
    <i class="h1 text-muted dripicons-cloud-upload"></i>
    <h3 class="text-muted font-13">Déposez les fichiers ici ou cliquez pour télécharger.</h3> --}}
    {{-- <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
        <strong>not</strong> actually uploaded.)</span> --}}
{{-- </div> --}}
{{-- </form> --}}

<!-- Preview -->
<div class="dropzone-previews mt-3" id="file-previews"></div>

<!-- file preview template -->
<div class="d-none" id="uploadPreviewTemplate">
<div class="card mt-1 mb-0 shadow-none border">
    <div class="p-2">
        <div class="row align-items-center">
            <div class="col-auto">
                <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
            </div>
            <div class="col ps-0">
                <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                <p class="mb-0" data-dz-size></p>
            </div>
            <div class="col-auto">
                <!-- Button -->
                <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                    <i class="dripicons-cross"></i>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    </div>
</div>
<div class="card-body">
    <div class="dropdown float-end">
        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-dots-vertical"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item">Export</a>
            <!-- item-->
            {{-- <a href="javascript:void(0);" class="dropdown-item"></a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item"></a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item"></a> --}}
        </div>
    </div>
    <h4 class="header-title m-3">Traitement du fichier avant l'import</h4>
    <div id="tableContainer"></div>
    <div id="average-sales1" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>


    <div class="chart-widget-list " id="labelse">
    </div>
    <div id="aler" ></div>
    <form action="{{ route('test') }}" method="POST" id="formId">
      @csrf
        <div id="sub">
    </div>
</form>
<div id="sub2">
</div>
</div>


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
                {{-- <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p> --}}
                <p>  Ce fichier ne correspond au format valide</p>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Save changes</button>
            </div> --}}
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
                    <button type="button"  id="kk" class="btn btn-warning my-2" data-bs-dismiss="modal">Continue</button>
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
                {{-- <p>Seul </p> --}}
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
            </div> --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                             
{{-- <div class="spinner-wrapper">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
  </div>                                         --}}
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

</section>                     
  </div>
<script type="text/javascript" src="{{ asset('js/xlsx.full.min.js')}}"></script>
<script>
   chek_list=@json($chek);

// if(Number(k[0].nomber)>1){
//         $("#fill-warning-modal").modal("show");
//         setTimeout(function(){
//             window.location.href = '/';
//       },3000)
        
     
//        }
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
  const spinner=document.querySelector('.spinner-wrapper')
window.addEventListener('load',() => {
    spinner.style.opacity='0';
    setTimeout(()=>{
spinner.style.display='none';
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

       @endsection
