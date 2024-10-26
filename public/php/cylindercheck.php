<?php

require_once "../../core/cylinder.php";
$val = $_POST['vals'];
$cylinder = new cylinder();

$r = $val[0];
$h = $val[1];

$cylinder->radius($r);
$cylinder->height($h);

$volume = $cylinder->volume();
echo "Cylinder volume is : " . $volume;
