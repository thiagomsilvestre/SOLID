from Notification import Notification
from User import User

if __name__ == "__main__":
    notification = Notification()
    command = User(notification)
    command.handle()