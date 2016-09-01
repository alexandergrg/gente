function goLogin(){
  //Variables que se reciben desde el formulario login
  var connect, form, response, result, user, pass, sesion;
  user = __('user_login').value;
  pass = __('pass_login').value;
  form = 'user=' + user + '&pass=' + pass;
  // Instancia del objeto ajax connect que para hacer la conexion con php
  connect = window.XMLHttpRequest ? new XMLHttpRequest () : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function(){
    if (connect.readyState == 4 && connect.status == 200) {
      if (connect.responseText ==1) {
        result = '<div class="alert alert-success alert-dismissible fade in " role="alert">';
        result += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span';
        result += 'aria-hidden="true">×</span>';
        result += '</button>';
        result += '<h6>Completado</h6>';
        result += '<strong>Conectado...!</strong> Estamos redireccionadote.';
        result += '</div>';
        __('_AJAX_LOGIN_').innerHTML = result;
        location.href='localhost/sistema/admin';


      }else{
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
    }else if (connect.readyState != 4) {
      result = '<div class="alert alert-warning alert-dismissible fade in " role="alert">';
      result += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span';
      result += 'aria-hidden="true">×</span>';
      result += '</button>';
      result += '<strong>Procesando...!</strong> Estamos intentando logearte';
      result += '</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=login', true);
  //Los valores son ecnriptados en el métod post, gracias a 'application/x-www-form-urlencoded
  // que se envia por el método post.
  connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  connect.send(form);
}

function runScriptLogin(e){
  if (e.keycode == 13) {
    goLogin();
  }
}
