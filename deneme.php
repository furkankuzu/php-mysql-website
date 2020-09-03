<?php
include("Yonetim/config.php");
$db = getDB();

$cek = $db->query("SELECT * FROM ayarlar")->fetch(PDO::FETCH_ASSOC);

echo $cek["slogan1"];


?>