<h3>Create a dynamic table using a form.</h3>

<form action="#" method="post">
  <div>
    <label for="rows">Number of rows: </label>
    <input type="number" id="rows" name="rows" value="<?= $_POST['rows'] ?? 5 ?>" >
  </div>
  <div>
    <label for="cols">Number of columns: </label>
    <input type="number" id="cols" name="cols" value="<?= $_POST['cols'] ?? 5 ?>">
  </div>

  <button type="submit">Send</button>
</form>


<table>
  <tbody>
    <?php
    if ($_POST) {
      $content_t1 = 1;
      $content_t2 = 1;

      $r = intval($_POST['rows']);
      $c = intval($_POST['cols']);

      for ($lines = 0; $lines < $r; $lines++) {
        $style = $lines % 2 === 1 ? "style=\"background-color: lightblue;\"" : '';

        echo "<tr $style>";

        for ($cols = 0; $cols < $c; $cols++) {
          echo "<td>$content_t1</td>";
          $content_t1++;
        }
        echo "</tr>";
      }
    }
    ?>
  </tbody>
</table>

<style>
  table {
    border: 1px solid #444;
    margin: 20px 0;
    border-collapse: collapse;
  }

  table tr {
    border: 1px solid #444;
  }

  table td {
    padding: 10px 20px;
    text-align: center;
    border: 1px solid #444;
  }
</style>