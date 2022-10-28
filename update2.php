<?php
$db = new SQLite3("lista.db");
foreach ($_GET as $key => $value) {
  $db->exec("UPDATE lista SET " . $key . " = '" . $value . "' WHERE id =" . $_GET["id"]);
}
$db->close();
header("Location: /index.php");
