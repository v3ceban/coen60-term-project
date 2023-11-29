<!DOCTYPE HTML>
<html>
<head>
<title>Find Teammates</title>
<?php include "./parts/head-content.php"?>
<link rel="stylesheet" type="text/css" href="./css/pages/currentTopics.css">
</head>
<body>
	<!--header-->
	<?php include "./parts/header.php" ?>

	<!--submission-->
		<main class="container currentTopics">
		<h2>Current Student Ideas</h2>
    <?php
      // Display submissions
    $files = scandir("./submissions/");
if (count($files) !== 0) {
    echo "<div class='history'>\n";
    foreach ($files as $file) {
        if (is_file("./submissions/" . $file)) {
            echo "<ul class='submission'>\n";
            $lines = file("./submissions/" . $file);
            $flag = 0;
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
            echo "</ul>\n";
        }
    }
    echo "</div>\n";
} else {
    echo "No submissions found.\n";
}
?>
	</main>

	<!--footer-->
  <?php include "./parts/footer.php" ?>



</body>
</html>
