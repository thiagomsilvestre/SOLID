from Notification import Notification
from SlackNotification import SlackNotification
from User import User

if __name__ == "__main__":
    notification = Notification()
    command = User(notification)
    command.handle()

    print()

    notification = SlackNotification()
    command = User(notification)
    command.handle()