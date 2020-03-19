import sys
from .interfaces.ICPFService import ICPFService 
from .interfaces.IEmailService import IEmailService 

class Cliente:
    def __init__(self, _cpfService: ICPFService, _emailService: IEmailService):
        self._cpfService = _cpfService
        self._emailService = _emailService

    clienteId: int
    nome: str
    email: str
    cpf: str
    dataCadastro: str

    def isValid(self):
        return self._emailService.isValid(self.email) and self._cpfService.isValid(self.cpf)
        