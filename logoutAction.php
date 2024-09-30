<?php require_once ('cabecalho.php');  ?>
    <?php 
        unset($_SESSION['logado']);
        header("location:index.php");
    ?>