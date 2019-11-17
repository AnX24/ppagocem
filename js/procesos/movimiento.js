function comprobar(){

    //if//hay que comprobar que la clase sesion no exista
    //else//por defecto por ahora
    var newUrl = "index.php";  
    location.assign("index.php");
  
    }

//---------------------------------------------------------------------------------------------- 

function cerrarSesion(){

    // se libera el espacio asignado a la clase sesion esto se haria con un clase = null;
  
    //eraseCookie(/*nombre ingresado en la cookie*/);
  
    var newUrl = "index.php";  
    location.assign("index.php");
  
  }
  //---------------------------------------------------------------------------------------------- 
  
  //eliminar la cookie
  function eraseCookie(name) {
      createCookie(name,"",-1);
  }
  //---------------------------------------------------------------------------------------------- 
  