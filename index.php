<?php 
  $paragraph = "“The dark is generous, and it is patient, and it always wins — but in the heart of its strength lies its weakness: One lone candle is enough to hold it back. Love is more than a candle. Love can ignite the stars.” — Narrator";
  $censure = $_GET["word"];
  $filtered_paragraph = str_replace($censure, "***", $paragraph);
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
    <header>
      <form action="index.php" method="GET">
        <label for="censure">Parola da Censurare</label>
        <input name="word" id="censure" type="text" placeholder="Inserisci parola">
        <button type="submit">Invia</button>
      </form>
    </header>
    <hr>
    <main>
      <h3> <?php echo $paragraph; ?> </h3>
      <p>Lunghezza: <?php echo strlen($paragraph); ?> </p>
      <hr>
      <p> La parola da filtrare è <?php echo $censure; ?> </p>
      <h3> <?php echo $filtered_paragraph; ?> </h3>
      <p>Lunghezza: <?php echo strlen($filtered_paragraph); ?> </p>
    </main>
  </body>
</html>