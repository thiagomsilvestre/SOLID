<?php
require_once('Interfaces/ICadastroProduto.php');

class CadastroProduto implements ICadastroProduto
{
    public function validarDados()
    {
        // Validar valor
        echo "\n validar dados";
    }

    public function salvarBanco()
    {
        // Insert tabela Produto
        echo "\n salvar banco";
    }
}
