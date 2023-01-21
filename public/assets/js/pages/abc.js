var array=window.jsonData;
var ab=[];
 console.log(dataJSON[0].etablissement_de_provenance);
 for (let index = 0; index < array.length; index++) {

    const element = array[index];
    if(ab.indexOf(element.abrev) === -1){
       ab.push(element.abrev)
    }
 }
 let bool=false;
 console.log(ab);
 if(ab.indexOf(dataJSON[0].etablissement_de_provenance) !== -1){
    $("#warning-alert-modal").modal("show");
    $("#kk").click(function(){
    window.location.href = '/tables';
    });
}
 
 console.log(bool)