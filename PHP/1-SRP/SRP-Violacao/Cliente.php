<?php
class Cliente
{
    public $id;
    public $nome;
    public $email;
    public $cpf;

    public function adicionarCliente()
    {
        if (!strpos($this->email, '@')) {
            return "Cliente com e-mail inválido";
        }

        if (strlen($this->cpf) != 11) {
            return "Cliente com CPF inválido";
        }

        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
        $sql  = "INSERT INTO CLIENTE (nome, email, cpf) VALUES (:nome, :email, :cpf)";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $stmt->execute();

        $Email = new Email($config);
        $Email->destinatario($this->nome, $this->email);
        $Email->assunto('Bem Vindo.');
        $Email->mensagem('Parabéns! Você está cadastrado.');
        $Email->enviar();

        return "Cliente cadastrado com sucesso!";
    }
}
