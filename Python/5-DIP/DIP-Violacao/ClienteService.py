from EmailService import EmailService
from ClienteRepository import ClienteRepository
from Cliente import Cliente

class ClienteService:
    
    def adicionarCliente(self, cliente: Cliente):
        if not cliente.isValid():
            print('Dados inválidos')

        repo = ClienteRepository()
        repo.adicionarCliente(cliente)

        emailService = EmailService()
        emailService.enviar('empresa@empresa.com', cliente.nome, cliente.email, 'Bem Vindo', 'Parabéns está Cadastrado')

        return 'Cliente cadastrado com sucesso.'
