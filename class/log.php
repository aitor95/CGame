<?php
class Persona {
    private $usu;  // Objetos en nuestro carrito de compras
    private $pass;
    // Agregar $num artículos de $artnr al carrito
    public function getUsu()
    {
    	return $this->usu;
    }

     public function getPass()
    {
    	return $this->pass;
    }

     public function setUsu($usu)
    {
    	$this->usu=$usu;
    }

     public function setPass($pass)
    {
    	$this->pass=$pass;
    }

    function logarse($usu, $pass) {
	        session_start();
			$pass = md5($pass);
			//Incluimos la conexion a BBDD
			include ("../conexion/conexion.php");
			//Recuperacion de variables pasadas con el formulario.
			
			//Lanzamiento de la consulta
			$sql = "SELECT usu_email, usu_contra FROM tbl_usuario WHERE usu_email='$usu' AND usu_contra='$pass'";
			echo $sql. "<br>";
			$datos = mysqli_query($con, $sql);


			if(mysqli_num_rows($datos) > 0){
				echo "encuentra usu";
				while($send = mysqli_fetch_array($datos)){
                    $_SESSION['mail']= $send['usu_email'];
					$_SESSION['pass']= $send['usu_contra'];
					echo $_SESSION['mail']. "<br>";
				}

				mysqli_close($con);
                return 0;				
			}else{
                mysqli_close($con);
                return 1;
            }
        }

    public function redirigir($valor){
        if ($valor==0){
            header("Location: ../index.php");
        }else{
			$_SESSION['validarse'] = 'Email o contraseña incorrectos';
			header("Location: ../login.php");
			die();
		}
	}
}      
?>
