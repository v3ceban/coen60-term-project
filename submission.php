<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "./parts/head-content.php"?>
    <title>Form</title>
  </head>
  <body>
    <?php include "./parts/header.php" ?>
    <main class="submission">
      <h2>Your form was submitted</h2>
    <?php
    $files = glob("./submissions/*");
    $id = count($files) + 1;
    $file = fopen("./submissions/$id.txt", "w");
    foreach ($_POST as $key => $value) {
        ${$key} = $value;
        fwrite($file, "$key: $value\n");
    }
    fclose($file);
    $firstName = explode(" ", $Name)[0];
    $lastName = explode(" ", $Name)[1];
    echo "<p>Thank you ".ucwords($firstName).", your form has been submitted.</p>";
    ?>
      <h2>Who you can connect with</h2>
    <?php
    $files = scandir("./submissions/");
    $matchingFiles = [];
    foreach ($files as $file) {
        if (is_file("./submissions/" . $file)) {
            $content = file_get_contents("./submissions/" . $file);
            if (strpos($content, $Major) !== false) {
                array_push($matchingFiles, $file);
            }
        }
    }
    $randomFiles = array_rand($matchingFiles, 3);
    $i = 1;
    foreach ($randomFiles as $index) {
        $content = file_get_contents("./submissions/" . $matchingFiles[$index]);
        $lines = explode("\n", $content);
        echo("<h3>Connection #$i</h3>");
        foreach ($lines as $line) {
            if (strpos($line, "Name:") === 0 || strpos($line, "Email:") === 0) {
                echo nl2br($line."\n");
            }
        }
        $i++;
    }
    ?>
    </main>
    <?php include "./parts/footer.php" ?>
  </body>
</html>
