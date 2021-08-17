<?php
$str = '7561035810';
$maskNumber = substr_replace($str,'******',2,6);
echo $maskNumber;

