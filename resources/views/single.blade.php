@extends('layouts.app')

@section('content')

@php
$names = array(
    "Faculté" => "un Faculté",
    "Institut" => "un Institut",
    "Université" => "une Université ",
    "Ecole" => "une Ecole",
    "Academie" => "une Academie"
);
$p =['public','prive']

@endphp
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Les Etablissements</a></li>
                    <li class="breadcrumb-item active">{{$etablissement->abrev}}</li>
                </ol>
            </div>
            <h4 class="page-title">{{$etablissement->nom}}</h4>
        </div>
    </div>
</div>   
<div class="row"   >
    <div class="col-12">
        <div class="card">
            <div class="card-body">

<p> {{$etablissement->nom}}  est {{ $names[$etablissement->type]}} c'est tuteller par {{$etablissement->tutelle}}.  </p>
<br>
@if (isset($subEtablissementNames))
  <p>  c'est {{ $names[$etablissement->type]}} qui est composee de {{ sizeof($subEtablissementNames) }} etablissments qui sont </p> <br>
    @foreach ($subEtablissementNames as $one)
       <b> `{{ $one }}`</b> 
    @endforeach 
@endif
  @if (isset($nom))
  <p>  c'est {{ $names[$etablissement->type]}} qui appartient a <b> ` {{ $nom }} `</b> </p> <br>
  @endif 
  @if (isset($its))
  <p>  c'est {{ $names[$etablissement->type]}}  <b> ` autonome `</b> </p> <br>   
  @endif            
                
                <div class="tab-content">
                    <div class="table-responsive" id="buttons-table-preview 1">
                        <table class="table-light">
                            </table>                                          
                    </div> 
                   
                            <h4 class="header-title"> </h4>
                            <div dir="ltr">
                                <div id="myChart 3" ></div>
                            </div>
                        
                   
                </div> <!-- end tab-content-->
               
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<script src={{asset('assets/js/vendor/dropzone.min.js')}}></script>
<!-- init js -->
<script src={{asset('assets/js/ui/component.fileupload.js')}}></script>



<script src={{asset('assets/js/vendor.min.js')}}></script>
<script src={{asset('assets/js/app.min.js')}}></script>

<!-- third party js -->
<script src={{asset('assets/js/vendor/jquery.dataTables.min.js')}}></script>
<script src={{asset('assets/js/vendor/dataTables.bootstrap5.js')}}></script>
<script src={{asset('assets/js/vendor/dataTables.responsive.min.js')}}></script>
<script src={{asset('assets/js/vendor/responsive.bootstrap5.min.js')}}></script>
<script src={{asset('assets/js/vendor/dataTables.buttons.min.js')}}></script>
<script src={{asset('assets/js/vendor/buttons.bootstrap5.min.js')}}></script>
<script src={{asset('assets/js/vendor/buttons.html5.min.js')}}></script>
<script src={{asset('assets/js/vendor/buttons.flash.min.js')}}></script>
<script src={{asset('assets/js/vendor/buttons.print.min.js')}}></script>
<script src={{asset('assets/js/vendor/dataTables.keyTable.min.js')}}></script>
<script src={{asset('assets/js/vendor/dataTables.select.min.js')}}></script>
<!-- third party js ends -->

<!-- demo app -->

<script src={{asset('assets/js/vendor.min.js')}}></script>
<script src={{asset('assets/js/app.min.js')}}></script>

<!-- third party:js -->
<script src={{asset('assets/js/vendor/apexcharts.min.js')}}></script>
<!-- third party end -->

<!-- demo:js -->
<script src={{asset('assets/js/pages/demo.apex-pie.js')}}></script>
<!-- demo end -->
<!-- demo:js -->
<script src={{asset('assets/js/pages/demo.apex-bar.js')}}></script>
<!-- demo end -->
<!-- demo:js -->
<script src={{asset('assets/js/pages/demo.apex-column.js')}}></script>
<!-- demo end -->
<script src={{asset('cdn/Chart.min.js')}}></script>
<script>
    var data = @json($data);

  
        
        
        var allCombinations = getAllCombinations({
            
            GENRE: ['EFFECTIFS','F']
        });
        thead = createhead(allCombinations);
        thead.style.textAlign = "center";
        var table = document.createElement("table");
        table.id="datatable-buttons "+j
        table.className="table table-striped dt-responsive nowrap w-100"
        table.appendChild(thead);
        var tbody = document.createElement("tbody");
        tbody.style.textAlign = "center";
        var Totale = document.createElement("tr");
        t_cell = document.createElement("td");
        t_cell.innerHTML="TOTAL";
        t_cell.setAttribute("colspan", 2);
        t_cell.style = "background-color : lightblue";
        Totale.appendChild(t_cell)
        var t={};
        let uniqueYears = new Set();

for (let i = 0; i < data.length; i++) {
    uniqueYears.add(data[i].année_scolaire);
}

let uniqueYearsArray = [...uniqueYears];
for (var i = 0; i < uniqueYearsArray.length; i++) {
    students=data.filter(e => e.année_scolaire==uniqueYearsArray[i])
    
    count = countByCombination(allCombinations, students)
    var row = document.createElement("tr");
    cell = document.createElement("td");
            cell.innerHTML = uniqueYearsArray[i];
            
                cell.setAttribute("colspan", 2);
                row.appendChild(cell);
            
            
           
            
    Object.keys(count).forEach(key => {
        cell = document.createElement("td");
            cell.innerHTML = count[key];
            
            if (t[key]) {
                t[key]+=count[key]
            }else{
                t[key]=count[key]
            }
            row.appendChild(cell);
    });
        
         
        
    
    tbody.appendChild(row);
}
        Object.keys(t).forEach((key) => {
            cell = document.createElement("td");
            cell.innerHTML=t[key];
            cell.style = "background-color : lightblue";
            Totale.appendChild(cell)
        })
        sortTbody(tbody);
        mergetbody(tbody);
        tbody.appendChild(Totale)
        table.appendChild(tbody);
        
       
        document.getElementById("myChart 1").appendChild(chrt(table))
    document.getElementById("buttons-table-preview 1").appendChild(table);
      

</script>
@endsection