from .interfaces.ICPFService import ICPFService

class CPFService(ICPFService):
    def isValid(self, cpf: str):
        return len(cpf) != 11
