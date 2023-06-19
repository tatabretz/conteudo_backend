<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
    <div class="container">
    <h1>Cadastro de cliente</h1>
    <hr>

    <form action="<?php echo isset($cliente) ?
                            "atualizar.php" : 
                            "inserir.php"; ?>"
                            
method="post">

<input type="hidden" name="idcliente" value="<?php echo $cliente->idcliente ?? "" ;?>"><br>               

        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" value="<?php echo $cliente->nome ?? "" ;?>"><br>

        <label class="form-label">CPF</label><br>
        <input class="form-control" type="text" name="cpf" value="<?php echo $cliente->cpf ?? "" ;?>"><br>

        <label class="form-label">Telefone</label><br>
        <input class="form-control" type="text" name="telefone" value="<?php echo $cliente->telefone ?? "" ;?>"><br>

        <label class="form-label">Endereço</label><br>
        <input class="form-control" type="text" name="endereco" value="<?php echo $cliente->endereco ?? "" ;?>"><br>

        <button type="submit" class="btn btn-success">Inserir</button>
        
    </form>

    </div>

    <?php require_once "../template/rodape.php"; ?>