<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <style>
    body {
      margin: unset;
    }

    main {
      height: 100vh;
      display: grid;
      place-items: center;
    }

    table,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <main>
    <form method="get">
      <table>
        <tr>
          <td>id</td>
          <td>nome</td>
          <td>descricao</td>
          <td>preco</td>
          <!-- <td><button formaction="./create.php">create</button></td> -->
        </tr>
        <?php
        $db = new SQLite3("lista.db");
        $db->exec("PRAGMA foreign_keys = ON");
        $results = $db->query("PRAGMA table_info(lista)");
        echo "<tr>";
        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
          echo "<td><input type='text' name='" . $row["name"] . "'></td>";
        }
        echo "<td>";
        echo "<button formaction='./create2.php'>create</button>";
        echo "</td>";
        echo "</tr>";
        $db->close();
        ?>
      </table>
    </form>
  </main>
</body>

</html>