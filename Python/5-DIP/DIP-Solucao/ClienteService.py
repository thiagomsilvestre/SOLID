from .Cliente import Cliente
from .interfaces.IClienteService import IClienteService
from .interfaces.IClienteRepository import IClienteRepository
from .interfaces.IEmailService import IEmailService

class ClienteService(IClienteService):
    def __init__(self, _emailService: IEmailService, _clienteRepository:IClienteRepository):
        self._emailService = _emailService
        self._clienteRepository = _clienteRepository

    def adicionarCliente(self, cliente: Cliente):
        if not cliente.isValid():
            return 'Dados inválidos'
        
        self._clienteRepository.adicionarCliente(cliente)
        self._emailService.enviar('empresa@empresa.com', cliente.nome, cliente.email, 'Bem Vindo', 'Parabéns está Cadastrado')
        
        return 'Cliente cadastrado com sucesso.'
