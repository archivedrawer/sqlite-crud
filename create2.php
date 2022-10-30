<?php
$db = new SQLite3("./lista.db");
$keys = implode(",", array_keys($_GET));
$values = implode("','", array_values($_GET));
$db->exec("INSERT INTO lista (" . $keys . ") VALUES ('" . $values . "')");
$db->close();
header("Location: /index.php");
