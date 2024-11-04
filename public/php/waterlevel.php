<?php
require_once '../../core/cylinder.php';
$vals = $_POST['val'];

$class = new cylinder();
$class->radius($vals[0]);
$class->height($vals[1]);

$waterlevelvolume = $class->waterVolume($vals[2]);

echo "Water level volume is : " . $waterlevelvolume;
