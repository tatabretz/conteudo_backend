<?php
    require_once "consultar_todos.php";
    require_once "../template/cabecalho.php";
?>
    <div class="container">
    <h1>Clientes</h1>
    <hr>

    <div class="text-end">
      <a href="formulario.php" class="btn btn-success">
        Inserir Novo
      </a>
    </div>

    <table class="table" id="tabela_dados">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Telefone</th>
          <th scope="col">Endereço</th>
          <th scope="col">Ações</th>
    </tr>
         </thead>
  <tbody>
    <?php foreach($clientes as $cliente): ?> 
    <tr>
        <td><?= $cliente->nome ?></td>
        <td><?= $cliente->cpf ?></td>
        <td><?= $cliente->telefone ?></td>
        <td><?= $cliente->endereco ?></td>
        <td class="text-end" width="25%">
        <a href="formulario.php?id=<?= $cliente->idcliente ?>" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i>
            Atualizar
          </a>
          <a href ="excluir.php?id=<?= $cliente->idcliente ?>" class="btn btn-danger">
          <i class="fa-regular fa-trash-can"></i>
            Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?> 

  </tbody>
    </table>
    </div>
    
    <?php require_once "../template/rodape.php"; ?>