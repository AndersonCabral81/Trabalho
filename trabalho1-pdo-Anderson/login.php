<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Controle de Acesso-Login</title>
</head>
<body>
    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-topo">
                <img src="img/user.png" alt="" class="imglogin">
                <h2 class="titulo2">Controle de Acesso</h2>
                <p>Faça Login</p>
            </div>
            <div  class="card-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div  class="card-group">
                <label>Senha</label>
                <input type="password" name="Senha" placeholder="Digite sua senha" required>
            </div>
            <div  class="card-group">
                <label> <a href="cadastro_user.php">Cadastre-se</a></label>
            </div>
            <div  class="card-group">
                <button type="submit">Acessar</button>
            </div>
        </div>
    </form>
</body>
</html>