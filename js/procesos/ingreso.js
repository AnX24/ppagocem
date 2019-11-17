import { iniciarcookie } from "./cookie.js";

function entrar(idu,idp){


   var primera = document.getElementById(idu).value;
   var segunda = document.getElementById(idp).value;
   var path = window.location.pathname;
   
    //var datetime = new Date().toLocaleString();
    
              window.alert(primera);
              window.alert(segunda);
    //          alert(datetime);
  
    iniciarcookie(primera,segunda); //inicializacion de la cookie

  }

function recpass(correouser, user){

   /*if(combinacion existe){   
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
   //con esta parte del codigo detecta el ENTER en el espacio de la clave como si presionasemos el boton
   var input = document.getElementById("pass");
   input.addEventListener("keyup", function(event) {
     if (event.keyCode === 13) {
       event.preventDefault();
       document.getElementById("continuarUS").click();
     }
   });
   //---------------------------------------------------------------------------------------------- 
   $('#continuarUS').click(function(){
      var path = window.location.pathname;
      var page = path.split("/").pop();

      if(page.localeCompare('intranet-usuario.php') == 0){
         entrar('user','pass');
      }else if(page.localeCompare('pago-online.php') == 0){
         entrar('rutcl','pass');
      }
      
      });
   });
