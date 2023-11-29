<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "./parts/head-content.php"?>
    <title>Form</title>
  </head>
  <body>
    <?php include "./parts/header.php" ?>
    <main class="submission">
      <h2>Your Data</h2>
    <?php
    $files = glob("./submissions/*");
    $id = (int) pathinfo(end($files), PATHINFO_FILENAME);
    $newId = $id + 1;
    $file = fopen("./submissions/$newId.txt", "w");
    foreach ($_POST as $key => $value) {
        ${$key} = $value;
        fwrite($file, "$key: $value\n");
    }
    fclose($file);
    $firstName = explode(" ", $Name)[0];
    $lastName = explode(" ", $Name)[1];
    echo "<p>Thank you ".ucwords($firstName).", your form has been submitted.</p>";
    ?>
    </main>
    <?php include "./parts/footer.php" ?>
  </body>
</html>
