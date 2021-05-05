<?php

include __DIR__ . "/database.php";  

header('Content-Type: application/json');

echo json_encode($dischi);

?>

<!-- http://localhost/php-ajax-dischi/partials/api.php -->