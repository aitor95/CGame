<?php
    session_start();
    include ("../conexion/conexion.php");

?>


<div class="container">
  <div class="box">
      <div class="center gap">
          <h2>Juegos</h2>
      </div><!--/.center-->
      <div id ="listadoJ"class="row">
          <ul class="portfolio-items col-4">
            <script>
			var contador=5;
            $(document).ready(function() {
              
                $.ajax({
                      type: "POST",
                      url: "./contenido/estaticos_juegos.php",
                      datatype:"html",

                      success: function(data) {

                             $('#listadoJ').append(data);

                      }
                        });

            	$(window).scroll(function() {

              	if($(window).scrollTop() + $(window).height() == $(document).height()) {  //si el usuario a echo scroll hasta el final de la pagina

                      $.ajax({
                      type: "POST",
                      url: "./contenido/autocarga_juegos.php",
                      data: "contador="+contador,
                      datatype:"html",

                      success: function(data) {

                             $('#listadoJ').append(data);
                      }
                        });


                   contador=contador+5;
            		}
            	});


});
            </script>
          <li class="portfolio-item apps">


           </li><!--/.portfolio-item-->

      </ul>


</div></div></div>

