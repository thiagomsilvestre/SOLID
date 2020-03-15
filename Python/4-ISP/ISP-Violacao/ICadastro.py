import abc

class ICadastro(metaclass=abc.ABCMeta):
    @classmethod
    def __subclasshook__(cls, subclass):
        return (hasattr(subclass, 'validarDados') and 
                callable(subclass.validarDados) and 
                hasattr(subclass, 'salvarBanco') and 
                callable(subclass.salvarBanco) and
                hasattr(subclass, 'enviarEmail') and 
                callable(subclass.enviarEmail) or 
                NotImplemented)
    
    @abc.abstractmethod
    def validarDados(self):
        raise NotImplementedError
   
    @abc.abstractmethod
    def salvarBanco(self):
        raise NotImplementedError
   
    @abc.abstractmethod
    def enviarEmail(self):
        raise NotImplementedError

