var validaFormulario=function(){
  var devolver = true;

///////////////// EMAIL /////////////////
  var email = document.getElementById("correo").value;

  //si es nulo
  if(email == null || email.length == 0){
      $("#error_correo_vacio").show();
      $("#error_correo_vacio").html("Debe introducir un email");
      devolver = false;
    //sino si cumplen la expresion regular
}else if(!/^\w+.+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email)){
      $("#error_correo_vacio").hide();
      $("#error_correo_formato").show();
      $("#error_correo_formato").html("El formato de correo es incorrecto");
      devolver = false;
  }else{
      $("#error_correo_vacio").hide();
      $("#error_correo_formato").hide();
  }

  ///////////////// DIRECCION /////////////////
  var direccion = document.getElementById("direccion").value;
  if (direccion == null || direccion.length == 0 || /^\s+$/.test(direccion)) {
      $("#error_confirmar_pass_incorrecto").hide();
      $("#error_direccion").show();
      $("#error_direccion").html("Debe introducir una direccion");
      devolver = false;
  } else {
      $("#error_direccion").hide();
  }
  ///////////////// NICKNAME /////////////////
  var nickname = document.getElementById("nickname").value;
  if (nickname == null || nickname.length == 0 || /^\s+$/.test(nickname)) {
      $("#error_confirmar_pass_incorrecto").hide();
      $("#error_nickname").show();
      $("#error_nickname").html("Debe introducir un nickname");
      devolver = false;
  } else {
      $("#error_nickname").hide();
  }


  ///////////////// NOMBRE /////////////////
  var valor = document.getElementById("nombre").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    $("#error_nombre").show();
    $("#error_nombre").html("Debe introducir un nombre");
    devolver = false;
  }else{
      $("#error_nombre").hide();
  }

  ///////////////// APELLIDO /////////////////
  var valor = document.getElementById("apellido").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      $("#error_apellido").show();
      $("#error_apellido").html("Debe introducir un apellido");
      devolver = false;
  }else{
      $("#error_apellido").hide();
  }

  /////////////// CONTRASEÑA ///////////////
  var pass = document.getElementById("pass").value;
  if(pass == null || pass.length == 0){
      $("#error_pass_vacio").show();
      $("#error_pass_vacio").html("Debe introducir una contraseña");
    devolver = false;
  }else{
     $("#error_pass_vacio").hide();

  }
  ////////// CONFIRMAR CONTRASEÑA //////////
  var pass = document.getElementById("pass").value;
  var confirmar_pass = document.getElementById("confirmar_pass").value;
  if(confirmar_pass == null || confirmar_pass.length == 0) {
      $("#error_confirmar_pass_vacio").show();
      $("#error_confirmar_pass_vacio").html("Debe verificar la contraseña");
      devolver = false;
  } else if(pass!=confirmar_pass){
      $("#error_confirmar_pass_vacio").hide();
      $("#error_confirmar_pass_incorrecto").show();
      $("#error_confirmar_pass_incorrecto").html("Las contraseñas no coinciden");
      devolver = false;
  }else{
      $("#error_confirmar_pass_incorrecto").hide();
  }
  return devolver;

}
