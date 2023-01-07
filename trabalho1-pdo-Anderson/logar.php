<?php
     	require 'conexao.php';
     
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
       	
       
        require 'Usuario.class.php';

    	$u = new Usuario();

        $login = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        //echo "to aqui";

    }else{
    	header("location: index.php");
        //echo "Não to logado";
    }
?>