<?php
require 'tevyne.php';
require 'vaikine.php';

$start = 1;
$end = 110; // naujas komentaras

$collatzskaic = new Histog($start, $end);
$intervalats = $collatzskaic->collatz_interval();

foreach ($intervalats as $index => $result) {
    print("Collatz seka skaiciui {$start}: ");
    print_r($result['seka']);
    print("<br>");
    print("Iteraciju skaicius: " . $result['iterations'] . "\n");
    print("<br>");
    print("Didziausia iteracija: " . $result['maxSize'] . "\n\n");
    print("<br>");
    print("Maziausia iteracija: " . $result['minSize'] . "\n\n");
    print("<br>");
    print("<br>");
    $start++;
}

$collatzskaic->histo_sk();



?>
