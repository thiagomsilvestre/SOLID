from Interfaces.INotification import INotification

class Notification(INotification):
    def send(self):
        print('Injection Notification')