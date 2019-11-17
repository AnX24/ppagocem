//inicializar cookie
export function iniciarcookie(inrut, inpass) {
   /* var x=inrut;
    var y=inpass;
    document.cookie=x+"="+y+";max-age="+(3600*24); //cookie que expira en un dia*/
 }//---------------------------------------------------------------------------------------------- 

   //eliminar la cookie
export function eraseCookie(name) {
    createCookie(name,"",-1);
}//---------------------------------------------------------------------------------------------- 
