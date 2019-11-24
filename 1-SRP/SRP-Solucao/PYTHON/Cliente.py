class ClienteService:
    def __init__(self, id, nome, email, cpf):
        self.id = id
        self.nome = nome
        self.email = emails
        self.cpf = cpf

    def checkInfo(self):
        if '@' not in self.email:
            return 'Cliente com e-mail inválido'

        if len(self.cpf) != 11:
            return 'Cliente com CPF inválido'
    
    def adicionarCliente():
        self.checkInfo()
        ClienteRepository.insert()
        EmailService.send({
            'nome' : self.nome,
            'email': self.email,
            'assunto': 'Bem Vindo.',
            'mensagem': 'Parabéns! Você está cadastrado.'
        })
        return 'Cliente cadastrado com sucesso!'

class ClientRepository(dbConnection):
    def __init__(self, nome, email, cpf):
        db = dbConnection.__init__()
        self.nome = nome
        self.email = email
        self.cpf = cpf

    def insert():
        sql  = "INSERT INTO CLIENTE (nome, email, cpf) VALUES (:nome, :email, :cpf)"
        stmt = DB.prepare(sql)
        stmt.bindParam(':nome', self.nome, PDO.PARAM_STR)
        stmt.bindParam(':email', self.email, PDO.PARAM_STR)
        stmt.bindParam(':cpf', self.cpf, PDO.PARAM_STR)
        stmt.execute()

class EmailService:
    def __init__(self, config, data):
        self.config = config
        self.data = data
    
    def send(self):
        BrokerService.send(self.config, data=self.data)

class dbConnection:
    def __init__(self):
        self.PDO = PDO( 'mysql:host=' . MYSQL_HOST . 'dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD )

