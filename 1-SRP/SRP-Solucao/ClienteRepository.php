<?php
class ClienteRepository
{
    public function adicionarCliente($cliente)
    {
        // $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
        // $sql  = "INSERT INTO CLIENTE (nome, email, cpf) VALUES (:nome, :email, :cpf)";
        // $stmt = $DB->prepare($sql);
        // $stmt->bindParam(':nome', $cliente->nome, PDO::PARAM_STR);
        // $stmt->bindParam(':email', $cliente->email, PDO::PARAM_STR);
        // $stmt->bindParam(':cpf', $cliente->cpf, PDO::PARAM_STR);
        // $stmt->execute();  
        echo "ClienteRepository: Cliente adicionado. \n";
    }
}
