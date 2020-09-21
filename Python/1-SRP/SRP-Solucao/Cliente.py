from EmailService import EmailService
from CPFService import CPFService

class Cliente:
    def __init__(self, id, nome, email, cpf):
        self.id = id
        self.nome = nome 
        self.email = email
        self.cpf = cpf
    
    def isValid(self):
        return EmailService().isValid(self.email) and CPFService().isValid(self.cpf)
