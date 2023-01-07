
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="estilo.css">
    <title>Loja de Celulares e Tabletes</title>
</head>

<body>

    <div class="titulo">
        <h1>Tudo para o seu celular</h1>
    </div>
    <h2>Resultado da Pesquisa</h2>
    <?php
            $consulta = $pdo->query("SELECT id, marca, preco, nome FROM produtos;");
            while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                
                $marca = $linha["marca"];
                $modelo = $linha["modelo"];
                $cor = $linha["cor"];
                $preco = $linha["preco"];
                $datafab = $linha["datafab"];
                $datacad = $linha["datacad"];
                $nome =$linha["nome"];
                $telefone = $linha["telefone"];
                $endereco =$linha["endereco"];
                $numero = $linha["numero"];
                $cidade = $linha["cidade"];
                $bairro = $linha["bairro"];
                $estado =$linha["estado"];
                $cep =$linha["cep"];
                
                echo "<strong>Marca:</strong>".@$marca;
                echo "<br>";
                echo "<strong>Modelo:</strong>".@$modelo;
                echo "<br>";
                echo "<strong>Cor:</strong>".@$cor;
                echo "<br>";
                echo "<strong>Preço:</strong>".@$preco;
                echo "<br>";
                echo "<strong>Data de Fabricação</strong>".@$datafab;
                echo "<br>";
                echo "<strong>Data de Cadastro:</strong>".@$datacad;
                echo "<br>";
                echo "<strong>Nome: do Fornecedor:</strong>".@$nome;
                echo "<br>";
                echo "<strong>Telefone:</strong>".@$telefone;
                echo "<br>";
                echo "<strong>E-mail:</strong>".@$email;
                echo "<br>";
                echo "<strong>Endereço:</strong>".@$endereco;
                echo "<br>";
                echo "<strong>Número:</strong>".@$numero;
                echo "<br>";
                echo "<strong>Cidade:</strong>".@$cidade;
                echo "<br>";
                echo "<strong>Bairro:</strong>".@$bairro;
                echo "<br>";
                echo "<strong>Estado:</strong>".@$estado;
                echo "<br>";
                echo "<strong>Cep:</strong>".@$cep;
                echo "<br>";

            }
            

    ?>
    
</body>

</html>