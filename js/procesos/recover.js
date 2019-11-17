function rescatar(){

    var correo = document.getElementById(reco).value;
    return correo;
}

function comprobar(){

    /* comprobar si existe o no el correo en el sistema */
    if(/*existe*/){
        return true;
    }else{
        return false;
    }
}

function recpass(correouser){

    /*if(comprobar(correouser)){   
       var link = correouser
                + "?cc=myCCaddress@example.com"
                + "&subject=" + escape("Recuperacion de cuenta - Sistema pago Cementerio")
                + "&body=" + escape( contraseña del usuario )
       ;
   
       window.location.href = link;
   }else{
      alert("Usuario y/o Correo no encontrado");
   }*/
 
 }

 $(document).ready(function(){ 
    //con esta parte del codigo detecta el ENTER en el espacio del correo como si presionasemos el boton
    var input = document.getElementById("email1");
    input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("recov").click();
      }
    });
    //---------------------------------------------------------------------------------------------- 
    $('#recov').click(function(){recpass(rescatar());});
    });
 