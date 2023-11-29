<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "./parts/head-content.php"?>
<link rel="stylesheet" type="text/css" href="./css/pages/currentTopics.css">
    <title>Form</title>
  </head>
  <body>
    <?php include "./parts/header.php" ?>
    <main class="container currentTopics">
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
    $matchingFiles = [];
    $topicWords = explode(" ", $Topic);
    foreach ($files as $item) {
        if (is_file("./submissions/" . $item)) {
            $content = file_get_contents("./submissions/" . $item);
            //Doesn't add the ones with matching $Name
            if (strpos($content, $Name) === false) {
                if (strpos($content, $Major) !== false) {
                    //Doesn't add the same person twice
                    if (!in_array($item, $matchingFiles)) {
                        array_push($matchingFiles, $item);
                    }
                }
                foreach ($topicWords as $word) {
                    if (stripos($content, $word) !== false) {
                        if (!in_array($item, $matchingFiles)) {
                            array_push($matchingFiles, $item);
                        }
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
            $flag = 0;
            echo("<h3>Connection #$i</h3>\n<ul class='submission'>\n");
            foreach ($lines as $line) {
                if (strpos($line, 'Submit') === false) {
                    if (strpos($line, ': on') !== false) {
                        if ($flag === 0) {
                            echo"<li class='skillTitle'>Skills:</li>\n";
                            $flag = 1;
                        }
                        echo "<li class='skill'>" . str_replace(": on", "", $line) . "</li>\n";
                    } else {
                        $words = explode(" ", $line);
                        $firstWord = $words[0];
                        echo "<li><b>$firstWord</b> " . implode(" ", array_slice($words, 1)) . "</li>";
                    }
                }
            }
            echo("</ul>\n");
            $i++;
        }
    }
    ?>
    </main>
    <?php include "./parts/footer.php" ?>
  </body>
</html>
