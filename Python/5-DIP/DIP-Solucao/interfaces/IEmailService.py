import abc

class IEmailService(metaclass=abc.ABCMeta):
    @classmethod
    def __subclasshook__(cls, subclass):
        return (hasattr(subclass, 'isValid') and 
                callable(subclass.isValid) and
                hasattr(subclass, 'enviar') and 
                callable(subclass.enviar) or 
                NotImplemented)
    
    @abc.abstractmethod
    def isValid(self, cpf: str):
        raise NotImplementedError
    
    @abc.abstractmethod
    def enviar(self, de: str, nome: str, para: str, assunto: str, mensagem: str):
        raise NotImplementedError
    