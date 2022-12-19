<?php 
$dischi = file_get_contents('dischi.json');
header('Content-Type: appliction/json');
echo $dischi;