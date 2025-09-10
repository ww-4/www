<?php
session_start();
$mysqli_catalog = false;

function connectCatalogDB() {
    global $mysqli_catalog;
    $mysqli_catalog = new mysqli("localhost", "root", "", "catalog");
    $mysqli_catalog->query("SET NAMES utf8");
}


function closeCatalogDB() {
    global $mysqli_catalog;
    $mysqli_catalog->close();
}


function getCatalog($limit) {
    global $mysqli_catalog;
    connectCatalogDB();
    $result = $mysqli_catalog->query("SELECT * FROM catalog ORDER BY id DESC LIMIT $limit");
    closeCatalogDB();
    return resultToArray($result);
}

function getCatalog1($limit) {
    global $mysqli_catalog;
    connectCatalogDB();
    $result = $mysqli_catalog->query("SELECT * FROM catalog1 ORDER BY id DESC LIMIT $limit");
    closeCatalogDB();
    return resultToArray($result);
}
function getCatalog2($limit) {
    global $mysqli_catalog;
    connectCatalogDB();
    $result = $mysqli_catalog->query("SELECT * FROM catalog2 ORDER BY id DESC LIMIT $limit");
    closeCatalogDB();
    return resultToArray($result);
}
function getCatalog4($limit) {
    global $mysqli_catalog;
    connectCatalogDB();
    $result = $mysqli_catalog->query("SELECT * FROM catalog4 ORDER BY id DESC LIMIT $limit");
    closeCatalogDB();
    return resultToArray($result);
}


function resultToArray($result) {
    $array = array();
    while ($row = $result->fetch_assoc())
        $array[] = $row;
    return $array;
}
?>