<?php
//vetores 
  $produto1 = [
                "nome" => "Câmera",
                "marca" => "LG",
                "preco" => 2500
  ];
  $produto2 = [
                "nome" => "Notebook",
                "marca" => "Dell",
                "preco" => 7500
  ];
  $produto3 = [
                "nome" => "Smartphone",
                "marca" => "Samsung",
                "preco" => 3500
  ]; 

  //matriz
  $produtos = [
                $produto1,
                $produto2,
                $produto3
  ]; 

  echo json_encode($produtos); //js obhect notation
  ?>