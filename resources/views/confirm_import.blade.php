@extends('layouts.app')

@section('content')
   <style>
    /* .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  
  display: flex;
  align-items: center;
  justify-content: center;
}

.overlay:target {
  visibility: visible;
  opacity: 1;
}

.modal-content {
  background-color: white;
  border-radius: 5px;
  padding: 20px;
} */

    </style>         

         
          
            
           {{-- <div class="modal-body"> --}}
             {{-- <form action="{{route('insert')}}" method="POST">
                @csrf
              <h3>les inscripition pour cette annee dans cette etablissement sont deja importee voulez vous les ecrase ?</h3>
              <input type="hidden" name="establishment" value="{{$request['establishment']}}">
              <input type="hidden" name="year" value="{{$request['year']}}">
              <textarea name="file" style="display: none" >{{$request['file']}}</textarea>
              <a href="{{route('tables')}}" class="btn btn-danger">Annuler</a>
           <input class="btn btn-success" type="submit" value="continue">

            </form> --}}
        {{-- </div> --}}
        <div class="row">
          <div class="col-12">
              <div class="page-title-box">
                  <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                          {{-- <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li> --}}
                          {{-- <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li> --}}
                          <li class="breadcrumb-item active"></li>
                      </ol>
                  </div>
                  <h4 class="page-title"></h4>
              </div>
          </div>
      </div>
      <br> <br>  
                                <div class="card text-white bg-dark">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                          <h1 class="modal-title" id="exampleModalLabel">Attention</h1>
                                          {{-- <button type="button" class="close" onclick="closeOverlay()">

                                          <span aria-hidden="true">&times;</span> --}}
                                          {{-- </button> --}}
                                          <br> <br>  <br> 
                                          <form action="{{route('insert')}}" method="POST">
                                            @csrf
                                            <h4>les inscripition pour cette annee dans cette etablissement sont deja importee voulez vous les ecrase ?</h4>
                                            <input type="hidden" name="establishment" value="{{$request['establishment']}}">
                                            <input type="hidden" name="year" value="{{$request['year']}}">
                                            <textarea name="file" style="display: none" >{{$request['file']}}</textarea>
                                            <a href="{{route('tables')}}" class="btn btn-danger">Annuler</a>
                                            <input class="btn btn-primary" type="submit" value="continue">
                                            {{-- <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer> --}}
                                          </form>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        
      
{{-- <script>
    function closeOverlay() {
    location.href = "javascript:history.back()";
}
function myFunction(var1, var2,var3) {
    fetch( + var1 + '/' + var2+'/'+var3)
      
}
</script>   --}}
@endsection