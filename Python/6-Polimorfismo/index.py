from PersonalityObject import PersonalityObject
from OptimisticObject import OptimisticObject
from PessimisticObject import PessimisticObject
from ExtrovertedObject import ExtrovertedObject

def makeSpeak(personalityObject: PersonalityObject):
    print(personalityObject.speak())

def makeSpeak1(personalityObject: PersonalityObject):
    print(personalityObject.speak())

def makeSpeak2(optimisticObject: OptimisticObject):
    print(optimisticObject.speak())

def makeSpeak3(pessimisticObject: PessimisticObject):
    print(pessimistObject.speak())

def makeSpeak4(extrovertedObject: ExtrovertedObject):
    print(extrovertedObject.speak())


if __name__ == "__main__":
    personalityObject = PersonalityObject()
    optimisticObject = OptimisticObject()
    pessimistObject = PessimisticObject()
    extrovertedObject = ExtrovertedObject()

    print('\n1')
    makeSpeak1(personalityObject)
    makeSpeak2(optimisticObject)
    makeSpeak3(pessimistObject)
    makeSpeak4(extrovertedObject)

    print('\n2')
    makeSpeak(personalityObject)
    makeSpeak(optimisticObject)
    makeSpeak(pessimistObject)
    makeSpeak(extrovertedObject)

    print('\n3')
    personalities = [personalityObject, optimisticObject, pessimistObject, extrovertedObject]

    for personality in personalities:
        makeSpeak(personality)
