
<?php
    session_start();
    if(isset($_SESSION['mail'])){
        include ("../conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CGame</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/chat.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/cargaChat.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <section id="carga_contenido" class="margen">



<div class="container">

            <div class="box first">
                <div class="return_web">
                    <a href="../index.php">Volver a la Web</a>
                </div>
                <div class="chat">
                    <div class="lista_chats">
                    <?php
                         $sqlChat="SELECT usu_emailP, usu_emailC, id_chat FROM tbl_chat WHERE tbl_chat.usu_emailP='$_SESSION[mail]' OR tbl_chat.usu_emailC='$_SESSION[mail]' ";
                         $Tchats = mysqli_query($con, $sqlChat);
                            if (mysqli_num_rows($Tchats)>0){
                            while($chat=mysqli_fetch_array($Tchats)) {
                            ?>

                            <?php
                                if ($chat['usu_emailP']==$_SESSION['mail']){
                                    $sqlUsu= "SELECT id_usuario,usu_nick,usu_email FROM tbl_usuario WHERE usu_email='$chat[usu_emailC]'";
                                    //echo $sqlUsu;
                                    $Tusu = mysqli_query($con, $sqlUsu);
                                ?>
                                    <ul class="portfolio-filter">
                                <?php

                                    while($usu=mysqli_fetch_array($Tusu)) {
                                        ?>


                                        <?php
                                            $sql = "SELECT COUNT(id_mensaje) AS total, id_chat FROM tbl_mensajes WHERE visto=0 AND usu_email='$chat[usu_emailC]' AND id_chat='$chat[id_chat]'";
                                            $datos = mysqli_query($con, $sql);
                                            while ($contador = mysqli_fetch_array($datos)) {

                                        ?>

                                        <div class="estructuraLista" id='idUsuChat' onclick="usuChat(<?php echo "'$usu[usu_email]'";?>,<?php echo "$chat[id_chat]";?>);">
                                            <?php
                                            if($contador['total']!=0){
                                            echo "<span id='$chat[id_chat]n' class='notif_chat'><div class='notif2' id='$chat[id_chat]'>$contador[total]</div></span>";
                                            }
                                            ?>
                                        <div class="borrarchat">
                                             <a id='borrarChat' onclick="borrarChat(<?php echo "'$chat[id_chat]'";?>);">X</a>
                                        </div>
                                            <div class='nick_izquierda'>
                                                        <?php
                                                        if(!empty($usu['usu_foto'])){
                                                        $fichero="../images/media/$usu[usu_foto]";
                                                        echo"<img  class='fotoUserChat' src='$fichero'>";
                                                        }else{
                                                        $fichero2="../images/media/avatar.jpg";
                                                        echo"<img class='fotoUserChat' src='$fichero2'>";
                                                        }
                                                    ?>


                                            </div>
                                            <div class="nick_derecha">
                                                <a> <?php echo $usu['usu_nick'];?></a>
                                            </div>
                                        </div>

                                        </ul><!--/#portfolio-filter-->
                                        <?php
                                    }
                                }
                                }else{
                                    $sqlUsu= "SELECT id_usuario,usu_nick,usu_email FROM tbl_usuario WHERE usu_email='$chat[usu_emailP]'";
                                    $Tusu = mysqli_query($con, $sqlUsu);
                                    while($usu=mysqli_fetch_array($Tusu)) {
                                        ?>

                                             <?php
                                            $sql = "SELECT COUNT(id_mensaje) AS total, id_chat FROM tbl_mensajes WHERE visto=0 AND usu_email='$chat[usu_emailP]' AND id_chat='$chat[id_chat]'";
                                            $datos = mysqli_query($con, $sql);
                                            while ($contador = mysqli_fetch_array($datos)) {


                                        ?>
                                         <div class="borrarchat">
                                             <a id='borrarChat' onclick="borrarChat(<?php echo "'$chat[id_chat]'";?>);">X</a>
                                        </div>
                                        <div class="estructuraLista" id='idUsuChat' onclick="usuChat(<?php echo "'$usu[usu_email]'";?>,<?php echo "$chat[id_chat]";?>);">
                                            <?php
                                            if($contador['total']!=0){
                                            echo "<span id='$chat[id_chat]n'class='notif2'><div class='notif_chat' id='$chat[id_chat]'>$contador[total]</div></span>";
                                            }
                                            ?>
                                            <div class="borrarchat">
                                                 <a id='borrarChat' onclick="borrarChat(<?php echo "'$chat[id_chat]'";?>);">X</a>
                                            </div>
                                            <div class='nick_izquierda'>
                                                <?php
                                                if(!empty($usu['usu_foto'])){
                                                $fichero="../images/media/$usu[usu_foto]";
                                                echo"<img  class='fotoUserChat' src='$fichero'>";
                                                }else{
                                                $fichero2="../images/media/avatar.jpg";
                                                echo"<img class='fotoUserChat' src='$fichero2'>";
                                                }
                                                ?>


                                            </div>
                                            <div class="nick_derecha">
                                                <a> <?php echo $usu['usu_nick'];?></a>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                        }

                                }
                            }
                        }else{

                        echo "No tienes ningún chat";
                        }
                            ?>
                        </div>

                    <div class="conversacion">
                        <div id="ChatOP" class="ChatOP">
                            <!--Contenido del chat -->
                        </div>

                    </div>
                </div>
            </div><!--/.box-->
        </div><!--/.container-->


    </section><!--/#carga_contenido-->





</body>
</html>
<?php
    }else{
        header("Location: login.php");
        die();
    }
?>
