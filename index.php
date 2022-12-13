<?php 
  $paragraph = "“The dark is generous, and it is patient, and it always wins — but in the heart of its strength lies its weakness: One lone candle is enough to hold it back. Love is more than a candle. Love can ignite the stars.” — Narrator";
  $filtered_paragraph = str_replace($_GET["word"], "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
  </head>
  <body>
    <h3> <?php echo $paragraph ?> </h3>
    <p> <?php echo strlen($paragraph)?> </p>
    <hr>
    <p> La parola da filtrare è <?php echo $_GET["word"] ?> </p>
    <h3> <?php echo $filtered_paragraph?> </h3>
    <p> <?php echo strlen($filtered_paragraph)?> </p>
  </body>
</html>