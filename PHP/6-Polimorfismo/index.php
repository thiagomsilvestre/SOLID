<?php
    require_once "PersonalityObject.php";
    require_once "PessimisticObject.php";
    require_once "OptimisticObject.php";
    require_once "ExtrovertedObject.php";
    
    $personalityObject = new PersonalityObject();
    $pessimisticObject = new PessimisticObject();
    $optimisticObject = new OptimisticObject();
    $extrovertedObject = new ExtrovertedObject();


    echo "\n1 \n";
    makeSpeak1($personalityObject);
    makeSpeak2($pessimisticObject);
    makeSpeak3($optimisticObject);
    makeSpeak4($extrovertedObject);

    function makeSpeak1 (PersonalityObject $personalityObject) {
        echo $personalityObject->speak();
    }
    function makeSpeak2 (PessimisticObject $pessimisticObject) {
        echo $pessimisticObject->speak();
    }
    function makeSpeak3 (OptimisticObject $optimisticObject) {
        echo $optimisticObject->speak();
    }
    function makeSpeak4 (ExtrovertedObject $extrovertedObject) {
        echo $extrovertedObject->speak();
    }


    echo "\n2 \n";
    makeSpeak($personalityObject);
    makeSpeak($pessimisticObject);
    makeSpeak($optimisticObject);
    makeSpeak($extrovertedObject);
    
    function makeSpeak (PersonalityObject $personalityObject) {
        echo $personalityObject->speak();
    }

    echo "\n3 \n";
    $personalities = array();
    array_push($personalities, $personalityObject);
    array_push($personalities, $pessimisticObject);
    array_push($personalities, $optimisticObject);
    array_push($personalities, $extrovertedObject);

    foreach ($personalities as $personality) {
        makeSpeak($personality);
    }


