class Cliente:
    def __init__(self, id, nome, email, cpf):
        self.id = id
        self.nome = nome
        self.email = email
        self.cpf = cpf

    def adicionarCliente(self):
        if ('@' not in self.email):
            return 'Cliente com e-mail inválido'

        if (len(self.cpf) != 11): 
            return "Cliente com CPF inválido"

        PDO = PDO('mysql:host=' +  MYSQL_HOST + ';dbname=' + MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD)
        sql  = "INSERT INTO CLIENTE (nome, email, cpf) VALUES (:nome, :email, :cpf)"

        stmt = DB().prepare(sql)
        stmt.bindParam(':nome', self.nome, PDO.PARAM_STR)
        stmt.bindParam(':email', self.email, PDO.PARAM_STR)
        stmt.bindParam(':cpf', self.cpf, PDO.PARAM_STR)
        stmt.execute()

        Email = Email(config)
        Email.destinatario(self.nome, self.email)
        Email.assunto('Bem Vindo.')
        Email.mensagem('Parabéns! Você está cadastrado.')
        Email.enviar()

        return "Cliente cadastrado com sucesso!"
    
        