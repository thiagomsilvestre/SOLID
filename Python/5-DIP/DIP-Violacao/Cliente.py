from CPFService import CPFService
from EmailService import EmailService

class Cliente:
    def __init__(self, id: int, nome: str, email: str, cpf: str):
        self.id = id
        self.nome = nome
        self.email = email
        self.cpf = cpf
    
    def isValid(self):
        return EmailService().isValid(self.email) and CPFService().isValid(self.cpf)