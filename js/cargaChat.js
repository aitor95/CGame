function usuChat(mail,id){

	$('#'+id).empty();
	$('#'+id+'n').hide();
	//$('#carga_juegos').empty();
	//$('#carga_juegos').hide();
	//$('#carga_contenido').show();
	var usuM = mail;
	$.ajax({
	    type: "POST",
	    data: 'usuM='+usuM,
	    url: "seleccionaChat.proc.php",
	    success: function(a) {
	    	$('#main-slider').hide('slow');
            $('#ChatOP').html(a);
	    }
       });
}

function borrarChat(chat){
		  var idChat = chat;
		  $.ajax({
		      type: "POST",
		      data: 'idChat='+idChat,
		      url: "borrarChat.proc.php",
		      success: function(a) {
		            $.ajax({
		            type: "POST",
		            url: "listaChats.php",
		              success: function(a) {
		              $('#main-slider').hide('slow');
		              $('#carga_contenido').html(a);
		               }
		            });
		      }
		      });
		}
