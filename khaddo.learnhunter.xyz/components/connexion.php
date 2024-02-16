<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=les_delices;","root","");
} catch (\Throwable $th) {
    //throw $th;
    die($th);
}
