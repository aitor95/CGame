<?php
    session_start();
    include ("../conexion/conexion.php");

    $contador= $_REQUEST['contador'];

    $sql="SELECT id_juegos, jue_nombre, jue_foto FROM tbl_juego ORDER BY id_juegos ASC LIMIT $contador, 5";
    $datos=mysqli_query($con,$sql);


    while($resultado=mysqli_fetch_array($datos)){ //fetch values
	?>
		<div class="col-md-3 portfolio-item">
			<?php
			if ($resultado['jue_foto']==""){
				?>
			<img class="img-responsive" src="./images/juegos/thumb/juego.png" alt="">
			<?php
		}else{
			?>
			<img class="img-responsive" src="./images/juegos/thumb/<?php echo $resultado['jue_foto'];?>" alt="">
			<?php
		}
		?>
			<div class="item-inner">
				<div class="overlay">
 					<a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" onclick="juegos(<?php echo $resultado['id_juegos'];?>);"><i class="unhide icon"></i></a>
 				</div>
				<h5><?php echo utf8_encode($resultado['jue_nombre']); ?></h5>
			</div>
		</div>
		<?php
	}
    
?>