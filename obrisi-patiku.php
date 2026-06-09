<?php

include "baza.php";

$id = $_GET["id"];

$db->exec("DELETE FROM `patike` WHERE `id` = '$id'");

header("Location: ./admin.php");