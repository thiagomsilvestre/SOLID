from Interfaces.INotification import INotification

class User:
    def __init__(self, _notification: INotification):
        self._notification = _notification

    def handle(self):
        self._notification.send()
