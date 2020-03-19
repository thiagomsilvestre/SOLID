import abc

class ICPFService(metaclass=abc.ABCMeta):
    @classmethod
    def __subclasshook__(cls, subclass):
        return (hasattr(subclass, 'isValid') and 
                callable(subclass.isValid) or 
                NotImplemented)
    
    @abc.abstractmethod
    def isValid(self, cpf: str):
        raise NotImplementedError
    