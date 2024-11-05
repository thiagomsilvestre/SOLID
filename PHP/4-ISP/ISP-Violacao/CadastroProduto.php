<?php
require_once 'ICadastro.php';
    
class CadastroProduto implements ICadastro
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

    public function enviarEmail()
    {
        // Produto não tem e-mail, o que eu faço agora???
        echo "\n";
        throw new NotImplementedException("Esse metodo não serve pra nada");
    }
}
