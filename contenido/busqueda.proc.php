<?php
	include ("../conexion/conexion.php");
	$sql = "SELECT * FROM tbl_juego INNER JOIN tbl_usuario ON tbl_juego.usu_emailP=tbl_usuario.usu_email WHERE UPPER(jue_nombre) LIKE  UPPER('%$_REQUEST[filtro]%') ORDER BY id_juegos ASC";



	$datos = mysqli_query($con, $sql);
	if(mysqli_num_rows($datos)>0){
	?>
	<div class="container">
		<div class="box">
			<div class="center gap">
				<h2>Resultados :</h2>
			</div><!--/.center-->
			<div class="row">
				<ul class="portfolio-items col-4">
				<?php
					while ($jue = mysqli_fetch_array($datos)) {
					?>
					<div class="col-md-3 portfolio-item">
						<?php
						if ($jue['jue_foto']!=""){
							echo "<img src='images/juegos/thumb/".$jue['jue_foto']."' alt=''>";
						}else{
							echo "<img src='images/juegos/thumb/juego.png' alt=''>";
						}
						?>
						<div class="item-inner">
							<div class="overlay">
								<a class="preview btn btn-danger" onclick="juegos(<?php echo $jue['id_juegos']?>);"><i class="unhide icon"></i></a>
							</div>
							<h5><?php echo utf8_encode($jue['jue_nombre']); ?></h5>
						</div>
					</div>
					<?php
					}
					?>
			</div>
		</div>
	</div>
	<?php
	}else{
		?>
		<div class="container">
		<div class="box">
			<div class="center gap">
				<h4>No hay resultados a mostrar</h4>
			</div><!--/.center-->
			
			</div>
		</div>
		<?php
	}
	?>
