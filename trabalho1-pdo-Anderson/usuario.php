
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Controle de Cadastro-Usuario</title>
</head>
<body>
	 <a href="index.php">Inicio</a>

	
    <form class="form" action="user_resposta.php" method="POST">
        <div class="card">
        	<label><h3><strong>Efetue seu Cadastro</strong></h3></label>
           <div  class="card-group">
                <label>Email</label>
                <input type="email" name="email"  required>
            </div> 
            <div  class="card-group">
                <label>Senha</label>
                <input type="password" name="senha"  required>
            </div>
			<div  class="card-group">
                <label>Nome</label>
                <input type="text" name="nome"  required>
            </div>
            <div  class="card-group">
                <label>Adm</label>
                <input type="text" name="adm"  required>
            </div><br> 
            <div  class="card-group">
                <input type="submit" value="cadastrar">
            </div>  
        </div>
    </form>
    <?php
		
		require "conexao.php";

		if(isset($_POST['cadastrar'])):

			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$nome = $_POST['nome'];
			$adm = $_POST['adm'];

			$sql = $pdo->prepare("INSERT INTO usuarios(email, senha, nome, adm) value('$email', '$senha', '$nome', '$adm')");
			$sql->execute();

			if($sql):
				echo "Cadastro realizado com Sucesso!";
			endif;
		endif;		
?>

</body>
</html>
