@extends('layouts.app')

@section('content')
          




                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Import</h1>
                        {{-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Accueil</a></li>
                            <li class="breadcrumb-item active">Import</li>
                        </ol> --}}
                        
                        <div class="row">
                        <form action="{{ route('ESP.import') }}" method="POST" enctype="multipart/form-data">
                           
                            @csrf
                            <input type="file" name="file" class="form-control" required>
                            <br>
                            
                            <button class="btn btn-primary" type="submit">Importer les Etudiants</button>
<select class="p-2 text-light bg-success " name="annee" id="annee" required> 
    <option value="" selected disabled>Specifie l'annee scolaire</option>
    <option value="2020-2021">2020-2021</option>
    <option value="2019-2020">2019-2020</option>
    <option value="2018-2019">2018-2019</option>
    <option value="2017-2018">2017-2018</option> 
</select>
                            <select name="etat" id="etat" class="p-2 text-light bg-success " required>
                                <option value="" selected disabled>Specifie l'etablisment</option>
                            @foreach ($etats as $etat=>$one )
                                <option value="{{ $one->abrev}}">{{$one->abrev}}</option>
                            @endforeach
                            </select>
                        </form>
            
                        <table class="table table-bordered mt-3">
                            
                            @if(Session::has('data'))
                            
                       
                               <tr>
                                    <th>N°_inscription</th>
                                    <th>NNI</th>
                                    <th>N°_de_BAC</th>
                                    <th>Nom_et_prenom</th>
                                </tr>
                               
                               
                                @foreach(Session('data') as $at)
                                <tr>
                                    <td>{{ $at->N°_inscription }}</td>
                                    <td>{{ $at->NNI }}</td>
                                    <td>{{ $at->N°_de_BAC }}</td>
                                    <td>{{ $at->Nom_et_prenom }}</td>
                                </tr>
                                @endforeach
                                @endif

                   </table>

                </main>
       @endsection   