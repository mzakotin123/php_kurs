<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
   if ($_POST["sorte"] == "S")
   {
      $zahlung = $_POST["liter"] * 1.40;
      $text = "Super";
   }
   else
   {
      $zahlung = $_POST["liter"] * 1.35;
      $text = "Normal";
   }
   echo $_POST["liter"] . " Liter $text kosten $zahlung &euro;";'<br>';
   echo '<br>';
?>
</body></html>
