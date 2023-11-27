<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "./parts/head-content.php"?>
    <title>Form</title>
  </head>
  <body>
    <?php include "./parts/header.php" ?>
    <?php
    $form_data = $_POST;

    $email = $form_data['Email'];
    $domain = explode('@', $email)[1];

    if ($domain !== 'scu.edu') {
        echo "Email must be from scu.edu domain";
    }
    ?>
    <main class="submission">
      <h2>Your Data</h2>
      <?php foreach ($form_data as $key => $value) {
          echo "<p>$key: $value</p>";
      } ?>
    </main>
    <?php include "./parts/footer.php" ?>
  </body>
</html>