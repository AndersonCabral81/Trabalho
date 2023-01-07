<?php
/**
 * Projeto de aplicação CRUD utilizando PDO 
 *
 * 
 */
// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = filter_input(INPUT_POST, 'id');
    $marca = filter_input(INPUT_POST, 'marca');
    $modelo = filter_input(INPUT_POST, 'modelo');
    $cor = filter_input(INPUT_POST, 'cor');
    $preco = filter_input(INPUT_POST, 'preco');
    $datafab = filter_input(INPUT_POST, 'datafab');
    $datacad = filter_input(INPUT_POST, 'datacad');
    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $email = filter_input(INPUT_POST, 'email');
    $endereco = filter_input(INPUT_POST, 'endereco');
    $numero = filter_input(INPUT_POST, 'numero');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $bairro = filter_input(INPUT_POST, 'bairro');
    $estado = filter_input(INPUT_POST, 'estado');
    $cep = filter_input(INPUT_POST, 'cep');

} else if (!isset($id)) {
// Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
}

// Cria a conexão com o banco de dados
try {
    $conexao = new PDO("mysql:host=localhost:3306;dbname=geral", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "<p class=\"bg-danger\">Erro na conexão:" . $erro->getMessage() . "</p>";
}

// Bloco If que Salva os dados no Banco - atua como Create e Update
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $marca != "") {
    try {
        if ($id != "") {
            $stmt = $conexao->prepare("UPDATE produtos SET marca=?, modelo=?, cor=?, preco=?, datafab=?, datacad=?, 
            nome=?, telefone=?, email=?, endereco=?, numero=?, cidade=?, bairro=?, estado=?, cep=? WHERE id = ?");
            $stmt->bindParam(16, $id);
        } else {
            $stmt = $conexao->prepare("INSERT INTO produtos (marca, modelo, cor, preco, datafab, datacad, nome, telefone,
             email, endereco, numero, cidade, bairro, estado, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        }
        $stmt->bindParam(1, $marca);
        $stmt->bindParam(2, $modelo);
        $stmt->bindParam(3, $cor);
        $stmt->bindParam(4, $preco);
        $stmt->bindParam(5, $datafab);
        $stmt->bindParam(6, $datacad);
        $stmt->bindParam(7, $nome);
        $stmt->bindParam(8, $telefone);
        $stmt->bindParam(9, $email);
        $stmt->bindParam(10, $endereco);
        $stmt->bindParam(11, $numero);
        $stmt->bindParam(12, $cidade);
        $stmt->bindParam(13, $bairro);
        $stmt->bindParam(14, $estado);
        $stmt->bindParam(15, $cep);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "<p class=\"bg-success\">Dados cadastrados com sucesso!</p>";
                $id = null;
                $marca = null;
                $modelo = null;
                $cor = null;
                $preco = null;
                $datafab = null;
                $datacad = null;
                $nome = null;
                $telefone = null;
                $email = null;
                $endereco = null;
                $numero = null;
                $cidade = null;
                $bairro = null;
                $estado = null;
                $cep = null;
            } else {
                echo "<p class=\"bg-danger\">Erro ao tentar efetivar cadastro</p>";
            }
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}

// Bloco if que recupera as informações no formulário, etapa utilizada pelo Update
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {
    try {
        $stmt = $conexao->prepare("SELECT * FROM produtos WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id = $rs->id;
            $marca = $rs->marca;
            $modelo = $rs->modelo;
            $cor = $rs->cor;
            $preco = $rs->preco;
            $datafab = $rs->datafab;
            $datacad = $rs->datacad;
            $nome = $rs->nome;
            $telefone = $rs->telefone;
            $email = $rs->email;
            $endereco = $rs->endereco;
            $numero = $rs->numero;
            $cidade = $rs->cidade;
            $bairro = $rs->bairro;
            $estado = $rs->estado;
            $cep = $rs->cep;
            
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}

// Bloco if utilizado pela etapa Delete
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    try {
        $stmt = $conexao->prepare("DELETE FROM produtos WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "<p class=\"bg-success\">Registo foi excluído com êxito</p>";
            $id = null;
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</a>";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <title>Cadastro de Produtos</title>
        <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <script src="assets/js/bootstrap.js" type="text/javascript" ></script>
    </head>
    <body>
         <a href="index.php">Inicio</a>
        <div class="container">
            <header class="row">
                <br />
            </header>
            <article>
                <div class="row">
               
                    <form action="?act=save" method="POST" name="form1" class="form-horizontal" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="panel-title">Produtos</span>
                            </div>
                            <div class="panel-body">

                                <input type="hidden" name="id" value="<?php
                                // Preenche o id no campo id com um valor "value"
                                echo (isset($id) && ($id != null || $id != "")) ? $id : '';

                                ?>" />
                                <div class="form-group">
                                    <label for="marca" class="col-sm-1 control-label">Marca:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="marca" value="<?php
                                        // Preenche o nome no campo empresa com um valor "value"
                                        echo (isset( $marca) && ( $marca != null ||  $marca != "")) ?  $marca : '';

                                        ?>" class="form-control"/>
                                    </div>
                                    <label for="modelo" class="col-sm-1 control-label">Modelo:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="modelo" value="<?php
                                        // Preenche o servico no campo contato com um valor "value"
                                        echo (isset($modelo) && ($modelo != null || $modelo != "")) ? $modelo : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cor" class="col-sm-1 control-label">Cor:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cor" value="<?php
                                        // Preenche o email no campo contato com um valor "value"
                                        echo (isset($cor) && ($cor != null || $cor != "")) ? $cor : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="preco" class="col-sm-1 control-label">Preço:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="preco" value="<?php
                                        // Preenche o email no campo funcao com um valor "value"
                                        echo (isset($preco) && ($preco != null || $preco != "")) ? $preco : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="datafab" class="col-sm-1 control-label">Data de Fabricação:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="datafab" value="<?php
                                        // Preenche o email no campo contato com um valor "value"
                                        echo (isset($datafab) && ($datafab != null || $datafab != "")) ? $datafab : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="datacad" class="col-sm-1 control-label">Data de Cadastro:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="datacad" value="<?php
                                        // Preenche o email no campo funcao com um valor "value"
                                        echo (isset($datacad) && ($datacad != null || $datacad != "")) ? $datacad : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-1 control-label">Nome do Fornecedor:</label>
                                        <div class="col-md-4">
                                            <input type="text" name="nome" value="<?php
                                            // Preenche o celular no campo email com um valor "value"

                                            echo (isset($nome) && ($nome != null || $nome != "")) ? $nome : '';

                                            ?>" class="form-control" />
                                        </div>
                                        <label for="email" class="col-sm-1 control-label">E-mail:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="email" value="<?php
                                        // Preenche o celular no campo email com um valor "value"

                                        echo (isset($email) && ($email != null || $email != "")) ? $email : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <label for="telefone" class="col-sm-1 control-label">Telefone:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="telefone" value="<?php
                                        // Preenche o celular no campo telefone com um valor "value"
                                        echo (isset($telefone) && ($telefone != null || $telefone != "")) ? $telefone : '';

                                        ?>" class="form-control" />
                                    </div>
                                   
                                    <label for="endereco" class="col-sm-1 control-label">Endereço:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="endereco" value="<?php
                                        // Preenche o celular no campo ramal com um valor "value"
                                        echo (isset($endereco) && ($endereco != null || $endereco != "")) ? $endereco : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="numero" class="col-sm-1 control-label">Número:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="numero" <?php
                                        // Preenche o celular no campo celular 1 com um valor "value"
                                        echo (isset($numero) && ($numero != null || $numero != "")) ? $numero : '';

                                        ?> class="form-control" />
                                    </div>
                                    <label for="cidade" class="col-sm-1 control-label">Cidade:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cidade" value="<?php
                                        // Preenche o celular no campo celular 2 com um valor "value"
                                        echo (isset($cidade) && ($cidade != null || $cidade != "")) ? $cidade : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bairro" class="col-sm-1 control-label">Bairro:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="bairro" <?php
                                        // Preenche o celular no campo celular 1 com um valor "value"
                                        echo (isset($bairro) && ($bairro != null || $bairro != "")) ? $bairro : '';

                                        ?> class="form-control" />
                                    </div>
                                    <label for="estado" class="col-sm-1 control-label">Estado:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="estado" value="<?php
                                        // Preenche o celular no campo celular 2 com um valor "value"
                                        echo (isset($estado) && ($estado != null || $estado != "")) ? $estado : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cep" class="col-sm-1 control-label">Cep:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cep" <?php
                                        // Preenche o celular no campo celular 1 com um valor "value"
                                        echo (isset($cep) && ($cep != null || $cep != "")) ? $cep : '';

                                        ?> class="form-control" />
                                    </div>
                                </div>    
                            </div>
                            <div class="panel-footer">
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Cor</th>
                                    <th>Preço</th>
                                    <th>Data Fabricação</th>
                                    <th>Data Cadastro</th>
                                    <th>Nome Fornecedor</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Endereço</th>
                                    <th>Número</th>
                                    <th>Cidade</th>
                                    <th>Bairro</th>
                                    <th>Estado</th>
                                    <th>Cep</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                /**
                                 *  Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
                                 */
                                try {
                                    $stmt = $conexao->prepare("SELECT * FROM produtos");
                                    if ($stmt->execute()) {
                                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {

                                            ?><tr>
                                                <td><?php echo $rs->id; ?></td>
                                                <td><?php echo $rs->marca; ?></td>
                                                <td><?php echo $rs->modelo; ?></td>
                                                <td><?php echo $rs->cor; ?></td>
                                                <td><?php echo $rs->preco; ?></td>
                                                <td><?php echo $rs->datafab; ?></td>
                                                <td><?php echo $rs->datacad; ?></td>
                                                <td><?php echo $rs->nome; ?></td>
                                                <td><?php echo $rs->telefone; ?></td>
                                                <td><?php echo $rs->email; ?></td>
                                                <td><?php echo $rs->endereco; ?></td>
                                                <td><?php echo $rs->numero; ?></td>
                                                <td><?php echo $rs->cidade; ?></td>
                                                <td><?php echo $rs->bairro; ?></td>
                                                <td><?php echo $rs->estado; ?></td>
                                                <td><?php echo $rs->cep; ?></td>
                                                
                                                <td><center>
                                            <a href="?act=upd&id=<?php echo $rs->id; ?>" class="btn btn-default btn-xs">
                                            <span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                            <a href="?act=del&id=<?php echo $rs->id; ?>" class="btn btn-danger btn-xs" >
                                            <span class="glyphicon glyphicon-remove"></span> Excluir</a>
                                        </center>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "Erro: Não foi possível recuperar os dados do banco de dados";
                                }
                            } catch (PDOException $erro) {
                                echo "Erro: " . $erro->getMessage();
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </div>
    </body>
</html>
