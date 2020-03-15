from Notification import Notification

class User:
    def __init__(self, _notification):
        self._notification = _notification

    def handle(self):
        return self._notification.send()  