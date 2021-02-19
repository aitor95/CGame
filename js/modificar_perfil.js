var validaperfil=function(){
  var devolver = true;


  ///////////////// NICKNAME /////////////////
  var nickname = document.getElementById("nick").value;
  if (nickname == null || nickname.length == 0 || /^\s+$/.test(nickname)) {
      $("#error_nickname").show();
      $("#error_nickname").html("<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe Introducir un nick</div>");
      devolver = false;
  } else {
      $("#error_nickname").hide();
  }

  ///////////////// NOMBRE /////////////////
  var valor = document.getElementById("nombre").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    $("#error_nombre").show();
    $("#error_nombre").html("<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe introducir un nombre</div>");
    devolver = false;
  }else{
      $("#error_nombre").hide();
  }

  ///////////////// APELLIDO /////////////////
  var valor = document.getElementById("apellido").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      $("#error_apellido").show();
      $("#error_apellido").html("<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe introducir un apellido</div>");
      devolver = false;
  }else{
      $("#error_apellido").hide();
  }

    /////////////// CONTRASEÑA ///////////////
    var pass = document.getElementById("pass").value;
    if(pass == null || pass.length == 0){
        $("#error_pass_vacio").show();
        $("#error_pass_vacio").html("<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span>Debe introducir una contraseña</div>");
      devolver = false;
    }else{
       $("#error_pass_vacio").hide();

    }
    ////////// CONFIRMAR CONTRASEÑA //////////
    var pass = document.getElementById("pass").value;
    var confirmar_pass = document.getElementById("confirmar_pass").value;
    if(confirmar_pass == null || confirmar_pass.length == 0) {
        $("#error_confirmar_pass_vacio").show();
        $("#error_confirmar_pass_vacio").html("<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Debe verificar la contraseña</div>");
        devolver = false;
    } else if(pass!=confirmar_pass){
        $("#error_confirmar_pass_vacio").hide();
        $("#error_confirmar_pass_incorrecto").show();
        $("#error_confirmar_pass_incorrecto").html("<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Las contraseñas no coinciden</div>");
        devolver = false;
    }else{
        $("#error_confirmar_pass_incorrecto").hide();
    }

  return devolver;
}
