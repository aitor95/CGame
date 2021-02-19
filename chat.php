<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/chat.css" rel="stylesheet">
    <script src="../js/chat.js"></script>
    <script>
        <?php
        if(isset($_REQUEST['usu_emailC'])){
        ?>
        var chat=<?php echo "'$_REQUEST[idChat]'";?>;
    	var usu1=<?php echo "'$_REQUEST[usu_emailC]'";?>;
    	var usu2=<?php echo "'$_SESSION[mail]'";?>;
        <?php
    }else{
         ?>
        var chat=<?php echo "'$_REQUEST[idChat]'";?>;
        var usu1=<?php echo "'$_REQUEST[usu_emailP]'";?>;
        var usu2=<?php echo "'$_SESSION[mail]'";?>;
        <?php

    }
    ?>

    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">

	<div class="chat" id="chat">

	</div>
	</br>
	<input type="text" class="escritor" name="escritor" id="escritor" onkeypress="insertarMensajes(event,document.getElementById('escritor').value)">


</body>
</html>
