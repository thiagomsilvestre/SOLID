import abc

class DebitoConta(metaclass=abc.ABCMeta):

    @classmethod
    def __subclasshook__(cls, subclass):
        return (hasattr(subclass, 'debitar') and 
                callable(subclass.debitar) or 
                NotImplemented)

    numeroTransação: int

    @abc.abstractmethod
    def debitar(self, valor: float, conta: str):
        raise NotImplementedError
    
    @staticmethod
    def formatarTransacao():
        return 'NumeroTransacao'