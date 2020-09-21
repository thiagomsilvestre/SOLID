import abc

class INotification(metaclass=abc.ABCMeta):
    @classmethod
    def __subclasshook__(cls, subclass):
        return (hasattr(subclass, 'send') and
                callable(subclass.send) or 
                NotImplemented)
    
    @abc.abstractmethod
    def send(self):
        raise NotImplementedError