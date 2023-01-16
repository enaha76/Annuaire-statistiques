@extends('layouts.app')

@section('content')
  <!-- start page title -->


  <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                 <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Annuaire Statistique</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Getion</a></li>
                    <li class="breadcrumb-item "><a href="javascript: void(0);">import</a></li>
                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Etudiants</a></li>

                </ol>
            </div>
            <h4 class="page-title">Etudiants</h4>
        </div>
    </div>
</div>
<!-- end page title -->
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
                <div data-simplebar="" style="max-height: 535px;">
                    <div class="p-2">
                        <div class="row " >
                            <div class="col bt-3 ">
                                <ul  class="list-unstyled " id="list">
                                    <li class="border-bottom m-2 p-2"><input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input ml-2  " checked value="1" > SupNum</li>
                                    <li class="border-bottom m-2 p-2"><input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input ml-2 " checked>FM</li>
                                    <li class="border-bottom m-2 p-2"><input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input ml-2 " checked>FST</li>
                                    <li class="border-bottom m-2 p-2"><input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input ml-2 " checked>FSH</li>
                                    <li class="border-bottom m-2 p-2"><input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input ml-2 " checked>ISCAE</li>
                                    <li class="border-bottom m-2 p-2"><input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input ml-2 " checked>AN</li>
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
<input type="file"  id="fileInput"/>
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
            <a href="javascript:void(0);" class="dropdown-item"></a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item"></a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item"></a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item"></a>
        </div>
    </div>
    <h4 class="header-title">Traitement du fichier avant l'import</h4>
    <div id="tableContainer"></div>
    <div id="average-sales1" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>


    <div class="chart-widget-list " id="labelse">
    </div>
    <div id="aler" ></div>
    <form action="{{ route('test') }}" method="POST">
    @csrf
        <div id="sub">

    </div>
</form>
</div>


</section>

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

</script>
<script src="assets/js/pages/rens.js">

</script>
       @endsection
