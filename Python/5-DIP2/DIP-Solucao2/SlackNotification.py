from Interfaces.INotification import INotification

class SlackNotification(INotification):
    def send(self):
        print('Slack - Injection Notification')