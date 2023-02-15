<?php
require 'config.php';
include 'ophalen.php';

if (empty($_GET['mode'])) {
    $mode = "";
} else {
    $mode = $_GET['mode'];
}

if (empty($_GET['naam'])) {
    $naam = "";
} else {
    $naam = $_GET['naam'];
}

if (empty($_GET['id'])) {
    $id = "";
} else {
    $id = $_GET['id'];
}

switch ($mode) {
    case "getAll":
        allesOphalen();
        break;
    case "getSome":
        paarOphalen($naam);
        break;
    case "getOne":
        eenOphalen($id);
        break;
    default:
        echo "geef een mode op modes:(getAll, getSome";
        echo "geef een naam op als je getSome doet.";
}
