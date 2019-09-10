<?php
include ("Circle.php");
include ("CircleComparator.php");

$circle1 = new Circle('hinhso1',5);
$circle2 = new Circle('hinhso2',15);

$circlecomparator = new CircleComparator();

var_dump($circlecomparator->compare($circle1,$circle2));