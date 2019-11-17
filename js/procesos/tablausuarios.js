$(document).ready(function() {    
    $('#example').DataTable({
    
    });     
});



function llenarinfo(arrUser){

    var user = arrUser.Usuario;
    var mail = arrUser.Correo;
    var id   = arrUser.ID;

    document.getElementById("lUser").innerHTML= user;
    document.getElementById("lCorreo").innerHTML= mail;
    document.getElementById("lId").innerHTML= id;
}