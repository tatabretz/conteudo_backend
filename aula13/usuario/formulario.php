<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
    <div class="container">
    <h1>Cadastro de usuário</h1>
    <hr>

    <form action="<?php echo isset($usuario) ?
                            "atualizar.php" : 
                            "inserir.php"; ?>"
                            
method="post" enctype="multipart/form-data">

<input type="hidden" name="idusuario" value="<?php echo $usuario->isusuario ??"" ;?>"><br>               

        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo $usuario->nome ??"" ;?>"><br>

        <label>Login</label><br>
        <input type="text" name="login" value="<?php echo $usuario->login ??"" ;?>"><br>

        <label>Senha</label><br>
        <input type="password" name="senha"><br>

        <label>Senha</label><br>
        <input type="file" name="foto"><br>

        <button type="submit">Inserir</button>
        
    </form>

    </div>

    <?php require_once "../template/rodape.php"; ?>