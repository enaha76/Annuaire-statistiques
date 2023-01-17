@extends('layouts.app')

@section('content')
   <style>
    .overlay {
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
}

    </style>         
<div class="overlay" id="myOverlay">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Attention</h1>
          <button type="button" class="close" onclick="closeOverlay()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('insert')}}" method="POST">
                @csrf
<h3>les inscripition pour cette annee dans cette etablissement sont deja importee voulez vous les ecrase?</h3>
<input type="hidden" name="establishment" value="{{$request['establishment']}}">
<input type="hidden" name="year" value="{{$request['year']}}">
<textarea name="file" style="display: none" >{{$request['file']}}</textarea>
<a href="{{route('tables')}}" class="btn btn-danger">Annuler</a>
<input class="btn btn-success" type="submit" value="continue">

            </form>
        </div>
      </div>
    </div>
  </div>
<script>
    function closeOverlay() {
    location.href = "javascript:history.back()";
}
function myFunction(var1, var2,var3) {
    fetch( + var1 + '/' + var2+'/'+var3)
      
}
</script>  
@endsection