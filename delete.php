<?php
$db = new SQLite3("lista.db");
$db->exec("DELETE FROM lista WHERE id = " . $_GET["id"]);
// echo $db->changes() . " excluído com sucesso!";
$db->close();
header("Location: /index.php");
