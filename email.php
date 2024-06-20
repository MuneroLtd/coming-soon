<?php

$file = '../emails.csv'; // Path to the file

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $person = $_POST['email'] . "\n"; // String to append
    $out = file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
}

header('Location: index.php?s=1');