// *********************** Al iniciar la pagina se cargara el slider y jegos index  ***********************//

notificacionesChats();
	setInterval(notificacionesChats,5000);
function notificacionesChats(){

    $.ajax({
	    type: "POST",
	    url: "./contenido/notif_chats.proc.php",
	    dataType:"html",
	    success: function(a) {
	    	if(a==0){
	    		$('#notif').empty();
				$('.notif').hide();
	    	}else{
            $('#notif').html(a);
			$('.notif').show();
	    }}
       });

};


juegosindex();
function juegosindex(){
	$('#carga_contenido').hide();
	$('#carga_juegos').empty();
	$('#carga_juegos').show();
	$.ajax({
	    type: "POST",
	    url: "./contenido/juegosindex.php",
	    success: function(a) {
            $('#carga_juegos').html(a);
	    }
       });
}

// *********************** Al clicar en el Logo o en icono de Home, cargara el slider y juegosindex ***********************//
$('#carga_index').click(function(){
	$('#carga_contenido').hide();
	$('#carga_juegos').empty();
	$('#carga_juegos').show();

      $.ajax({
	    type: "POST",
	    url: "./contenido/juegosindex.php",
	    success: function(a) {
	    	$('#main-slider').show('slow');
            $('#carga_juegos').html(a);
	    }
       });
   });

// *********************** Al clicar en un apartado del menu, carga el contenido y esconde el slider ***********************//

$('#menu_li').click(function(){
	$('#menu').toggle();
  });

  // $(document).click(function(){
  //  $('#menu').hide();
  // }



function cargaPlataforma(id){

	$('#carga_juegos').empty();
	$('#carga_juegos').hide();
	$('#carga_contenido').show();
  $.ajax({
      type: "POST",
      data: "idPlat="+id,
      url: "./contenido/plataforma.php",
      success: function(a) {
        $('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
      }
       });

}

  function filtroGenero(gen,plat){
  	$('#carga_juegos').empty();
	$('#carga_juegos').hide();
	$('#carga_contenido').show();
  var gen = gen;
  var plat = plat;

  $.ajax({
      type: "GET",
      data: "idGen="+gen+"&idPlat="+plat,
      url: "./contenido/plataforma.proc.php",
      dataType: "json",
          error: function(){
              alert("Error al cargar juegos");
          },
      success: function(data) {
        var myhtml= "";
            for (i=0;i<data.length;i++){


                myhtml += "<div class='col-md-5 portfolio-item'> <div class='item-inner'> <div class='portfolio-image'>";
                if (data[i].foto!=""){
                  myhtml += "<img src='images/juegos/thumb/"+data[i].foto+"' alt=''>";
                }else{
                  myhtml += "<img src='images/juegos/thumb/juego.png' alt=''>";
                }
                myhtml += " <div class='overlay'> <a class='preview btn btn-danger' onclick='juegos("+data[i].id_juego+");'><i class='unhide icon'></i></a> </div> </div>";
                myhtml += " <strong>Propietario: </strong>" + data[i].usuario + "</br>";
				myhtml += "<strong> Nombre del Juego: </strong>" + data[i].juego + "</div></div>";
            }
            //alert(myhtml);
            $("#juePlat").html(myhtml);
      }
       })
}







   $('#carga_verperfil').click(function(){

   	$('#carga_juegos').empty();
	$('#carga_juegos').hide();
	$('#carga_contenido').show();
         $.ajax({
   	    type: "POST",
   	    url: "./contenido/perfil.php",
   	    success: function(a) {
   	    	$('#main-slider').hide('slow');
               $('#carga_contenido').html(a);
   	    }
          });
      });

$('#carga_juego').click(function(){
		$('#carga_juegos').empty();
		$('#carga_juegos').hide();
		$('#carga_contenido').show();

      $.ajax({
	    type: "POST",
	    url: "./contenido/formJuegos.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#carga_contenido').html(a);
	    }
       });
   });












// *********************** Al clicar en un apartado del menu, carga el contenido y esconde el slider ***********************//

	function validaFormularioJuego(){
		$('#carga_juegos').empty();
		$('#carga_juegos').hide();
		$('#carga_contenido').show();
	  var juego = document.getElementById("juego").value;
	  if(juego == null || juego.length == 0){

    	document.getElementById("error_juego_vacio").style.display = "block";
    	document.getElementById("error_juego_vacio").innerHTML="<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'></span> Introduce el nombre del juego</div>";
    	return false;
    }else{
    	document.getElementById("error_juego_vacio").style.display = "none";
    	var fd = new FormData(document.getElementById("form_Juego"));

    	$.ajax({
	    type: "POST",
	    url: "./contenido/anadirJuegos.proc.php",
	    data: fd,
	    cache: false,
    	contentType: false,
    	processData: false,
	    success: function(data) {
	    	$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
	    }
       });
    }

	}

	function juegos(elemento){
		$('#carga_juegos').empty();
		$('#carga_juegos').hide();
		$('#carga_contenido').show();
		$.ajax({
   	    type: "POST",
		async: true,
		data: "id_juego="+elemento,
   	    url: "./contenido/perfiljuego.php",
   	    success: function(a) {
   	    	$('#main-slider').hide('slow');
               $('#carga_contenido').html(a);
   	    }
          });
	}



		// *********************** Al clicar en el propietario, te carga el perfil de ese usuario (perfilUser.php) ***********************//


		function perfil(elem){
			$('#carga_juegos').empty();
			$('#carga_juegos').hide();
			$('#carga_contenido').show();
			$.ajax({
	   	    type: "POST",
			async: true,
			data: "usu_emailP="+elem,
	   	    url: "./contenido/perfilUser.php",
	   	    success: function(a) {
	   	    	$('#main-slider').hide('slow');
	               $('#carga_contenido').html(a);
	   	    }
	          });
		}

			// *********************** Al clicar en perfil, te carga el perfil del usuario de la session ***********************//

		$('#carga_verperfilpropio').click(function(){
			$('#carga_juegos').empty();
			$('#carga_juegos').hide();
			$('#carga_contenido').show();
	      $.ajax({
		    type: "POST",
		    url: "./contenido/verperfilpropio.php",
		    success: function(a) {
		    	$('#main-slider').hide('slow');
	            $('#carga_contenido').html(a);
		    }
	       });
	   });

				// *********************** Al clicar en modificar perfil, te carga la pagina de modificar perfil ***********************//


		function modificar(elem2){
			$('#carga_juegos').empty();
			$('#carga_juegos').hide();
			$('#carga_contenido').show();
			$.ajax({
	   	    type: "POST",
			async: true,
			data: "usu_email="+elem2,
	   	    url: "./contenido/modificarPerfil.php",
	   	    success: function(a) {
	   	    	$('#main-slider').hide('slow');
	               $('#carga_contenido').html(a);
	   	    }
	          });
		}


		function borrarChat(chat){
		  var idChat = chat;
		  $.ajax({
		      type: "POST",
		      data: 'idChat='+idChat,
		      url: "./contenido/borrarChat.proc.php",
		      success: function(a) {
		            $.ajax({
		            type: "POST",
		            url: "./contenido/listaChats.php",
		              success: function(a) {
		              $('#main-slider').hide('slow');
		              $('#carga_contenido').html(a);
		               }
		            });
		      }
		      });
		}


		function busqueda(e,filtra){

		    tecla = (document.all) ? e.keyCode : e.which;
		    if (tecla==13){
		    	$('#carga_juegos').empty();
				$('#carga_juegos').hide();
				$('#carga_contenido').empty();
				$('#carga_contenido').show();
				document.getElementById("barraBusqueda").value="";
				$.ajax({
				type: "POST",
				data: "filtro="+filtra,
				dataType: "html",
				url: "./contenido/busqueda.proc.php",
				error: function(){
					alert("Error al cargar juegos");
				},
				success: function(data) {

						$('#carga_contenido').html(data);

				}
				});
		    }
		}

		      // *********************** Al clicar en el borrar juego, te borra el juego seleccionado ***********************//


		    function borrarjuego(borrar){
		    	$.ajax({
					type: "POST",
					async: true,
					data: "id_juegos="+borrar,
					url: "./contenido/borrarJuego.proc.php",
					success: function(a) {
						$.ajax({
					    type: "POST",
					    url: "./contenido/verperfilpropio.php",
					    success: function(a) {
				            $('#carga_contenido').html(a);
					    }
				       });
					}
				});
		    }
