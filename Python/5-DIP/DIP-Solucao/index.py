from .Cliente import Cliente
from .ClienteService import ClienteService
from .ClienteRepository import ClienteRepository
from .EmailService import EmailService
from .CPFService import CPFService

if __name__ == "__main__":
    clienteRepository = ClienteRepository()
    emailService = EmailService()
    cpfService = CPFService()

    clienteService = ClienteService(emailService, clienteRepository)
    cliente = Cliente(cpfService, emailService)

    cliente.cpf = '22955451886'
    cliente.nome = 'Thiago'
    cliente.email = 'thiagomsilvestre@gmail.com'

    print()
    print(clienteService.adicionarCliente(cliente))