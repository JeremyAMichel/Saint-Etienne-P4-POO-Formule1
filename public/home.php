<?php

include_once '../utils/autoloader.php';

$formule1 = new Formule1();
echo $formule1->drive();

$formule1->shiftGear(50);
echo $formule1->drive();

$formule1->shiftGear(50);
echo $formule1->drive();