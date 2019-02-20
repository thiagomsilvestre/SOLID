<?php

require_once('CadastroCliente.php');
require_once('CadastroProduto.php');

echo "\n\n";
echo "CadastroCliente";
$cadastroCliente = new CadastroCliente();
$cadastroCliente->validarDados();
$cadastroCliente->salvarBanco();
$cadastroCliente->enviarEmail();

echo "\n\n";
echo "CadastroProduto";
$cadastroProduto = new CadastroProduto();
$cadastroProduto->validarDados();
$cadastroProduto->salvarBanco();
$cadastroProduto->enviarEmail();
