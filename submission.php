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
    $files = scandir("./submissions/");
    $id = count(glob("./submissions/*")) + 1;
    $newFile = fopen("./submissions/$id.txt", "w");
    foreach ($_POST as $key => $value) {
        ${$key} = $value;
        fwrite($newFile, "$key: $value\n");
    }
    fclose($newFile);
    $firstName = explode(" ", $Name)[0];
    echo "<p>Thank you ".ucwords($firstName).", your form has been submitted.</p>\n";
    ?>
      <h2>Who you can connect with</h2>
    <?php
    //Looks throught all files and adds the ones with matching $Major
    //Also adds the ones with similar topics
    //Doesn't add the ones with matching $Name
    $matchingFiles = [];
    $topicWords = explode(" ", $Topic);
    foreach ($files as $item) {
        if (is_file("./submissions/" . $item)) {
            $content = file_get_contents("./submissions/" . $item);
            if (strpos($content, $Name) === false) {
                if (strpos($content, $Major) !== false) {
                    array_push($matchingFiles, $item);
                }
                foreach ($topicWords as $word) {
                    if (stripos($content, $word) !== false) {
                        array_push($matchingFiles, $item);
                    }
                }
            }
        }
    }
    //Checks if there's a match
    if (count($matchingFiles) === 0) {
        echo "Sorry, we weren't able to find a match for you. Please try again later!";
    } else {
        //Choses up to 3 random connections to print out
        $randomFiles = array_rand($matchingFiles, min(5, count($matchingFiles)));
        $i = 1;
        if (!is_array($randomFiles)) {
            $randomFiles = array($randomFiles);
        }
        foreach ($randomFiles as $index) {
            $content = file_get_contents("./submissions/" . $matchingFiles[$index]);
            $lines = explode("\n", $content);
            echo("<h3>Connection #$i</h3>\n<ul>\n");
            foreach ($lines as $line) {
                if (strpos($line, "Name:") === 0 ||
                    strpos($line, "Email:") === 0 ||
                    strpos($line, "Topic:") === 0) {
                    echo("<li>$line</li>\n");
                }
            }
            echo"<li><h4>Skills:</h4></li>\n<ul>\n";
            foreach ($lines as $line) {
                if (strpos($line, ': on') !== false) {
                    echo "<li>".str_replace(": on", "", $line)."</li>\n";
                }
            }
            echo("</ul>\n</ul>\n");
            $i++;
        }
    }
    ?>
    </main>
    <?php include "./parts/footer.php" ?>
  </body>
</html>
