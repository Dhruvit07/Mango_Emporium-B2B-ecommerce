<?php
require 'C:/xampp/htdocs/project-1/includes/path-config.inc.php';
define('require', true);
require $phpPath . "src/classes/auth.class.php";
$object = new auth();
$businessTypeHTML = "";
$result = $object->getBusinessType();
while ($row = $result->fetch_assoc()) {
    $businessTypeHTML .= ' <option value="' . $row['id'] . '">' . $row['name'] . '</option>';
}