import abc
import sys
from os import path
sys.path.append(path.join(path.dirname(__file__), '..'))
from ..Cliente import Cliente

class IClienteService(metaclass=abc.ABCMeta):
    @classmethod
    def __subclasshook__(cls, subclass):
        return (hasattr(subclass, 'adicionarCliente') and 
                callable(subclass.adicionarCliente) or 
                NotImplemented)
    
    @abc.abstractmethod
    def adicionarCliente(self, cliente: Cliente):
        raise NotImplementedError
    