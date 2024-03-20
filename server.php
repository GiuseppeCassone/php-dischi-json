<?php

$diskContent = file_get_contents('./dischi.json');
$disksList = json_decode($diskContent);

header("Content-Type: application/json");

echo json_encode($disksList);

?>