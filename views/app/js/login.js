function goLogin(){
  //Variables que se reciben desde el formulario login
  var connect, form, response, result, user, pass, sesion;

  // Instancia del objeto ajax connect que para hacer la conexion con php
  connect = window.XMLHttpRequest ? new XMLHttpRequest () : new ActiveXObject('Microsoft.XMLHTTP');

  connect.onreadystatechange = function(){
  }
  //Abrimos una conexion con el hacia el fichero ajax.php que la enviamos con metodo POST
  connect.open('POST','ajax.php?mode=login', true);
  connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
}


function runScriptLogin(e){
  if (e.keycode == 13) {
    goLogin();
  }
}
