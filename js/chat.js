$(document).ready(function(){

	cargaMensajes();
	setInterval(cargaMensajes,1000);

	function cargaMensajes(){

		$.ajax({
	  	  	type: "GET",
	  	  	url: "../contenido/mostrarMensajes.proc.php",
	  	  	data: "chat="+chat,
	  	  	dataType: "json",
	  	  	error: function(){
	  	  	},
	  	  	success: function(data){


	  	  		var myhtml= "";
	  	  		for (i=0;i<data.length;i++){
	  	  			if(data[i].mail==usu2){
	  	  	  		myhtml += "<div class='contenido2' id='contenido'><div class='mensaje'>";
	  	  	  		myhtml += "<strong>" + data[i].usuario + "</strong>" + "</br>"+ data[i].mensaje + "</div></a>";
	  	  	  		myhtml += "</div><br>";
	  	  	  	}else{
	  	  	  		myhtml += "<div class='contenido' id='contenido2'><div>";
	  	  	  		myhtml += "<strong>" + data[i].usuario  + "</strong>" + "</br>"+ data[i].mensaje + "</div></a>";
	  	  	  		myhtml += "</div><br></div>";
	  	  	  	}
	  	  		}
	  	  		//alert(myhtml);
	  	  		$("#chat").html(myhtml);
	  	  	}
		})
	}




});

function insertarMensajes(e,texto){
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13){

  	document.getElementById("escritor").value="",

  		$.ajax({
	  	  	type: "GET",
	  	  	url: "../contenido/insertarMensajes.proc.php",
	  	  	data : "chat="+chat+"&textoIns="+texto+"&usu2="+usu2,
	  	  	error: function(){

	  	  	},
	  	  	success: function(){

	  	  	}
		})



  }





}
