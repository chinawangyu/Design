<?php
    require './Lesson.php';
    require './English.php';
    require './Math.php';

    $lesson = new Lesson(3,new English);
    echo $lesson->getClass().PHP_EOL;
    echo $lesson->cost().PHP_EOL;

    $lesson = new Lesson(1,new Math);
    echo $lesson->getClass().PHP_EOL;
    echo $lesson->cost().PHP_EOL;