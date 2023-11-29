<!DOCTYPE HTML>
<html>
<head>
<title>Find Teammates</title>
<?php include "./parts/head-content.php"?>
<link rel="stylesheet" type="text/css" href="css/pages/currentTopics.css">
</head>
<body>
	<!--header-->
	<?php include "./parts/header.php" ?>

	<!--submission-->
		<main class="container">
		        <h2>Current Student Ideas</h2>
	<?php
    $file = 'submissions.txt'; // File to store submissions

    // Function to delete a submission
        function deleteSubmission($index) {
            global $file;
            $submissions = unserialize(file_get_contents($file));
            unset($submissions[$index]);
            file_put_contents($file, serialize($submissions));
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $currentData = [
                'Name' => $_POST['Name'],
                'Email' => $_POST['Email'],
                'Topic' => $_POST['Topic'],
                'Skills' => array_intersect_key($_POST, array_flip(['Backend', 'CAD', 'DataAnalysis', 'Design', 'Electronics', 'Frontend', 'MaterialScience', 'Prototyping', 'Research', 'Robotics', 'Simulation', 'TWriting'])),
                'Major' => $_POST['Major'] ?? ''
            ];

            if (!file_exists($file)) {
                $submissions = [];
            } else {
                $submissions = unserialize(file_get_contents($file));
            }

            array_push($submissions, $currentData);
            file_put_contents($file, serialize($submissions));
        }

        // Handle delete request
        if (isset($_GET['delete'])) {
            deleteSubmission($_GET['delete']);
        }

        // Display submissions
        if (file_exists($file)) {
            $submissions = unserialize(file_get_contents($file));
            echo "<div class='history'>";
            foreach ($submissions as $index => $submission) {
                echo "<div class='submission'>";
                echo "<p><strong>Name:</strong> " . htmlspecialchars($submission['Name']) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($submission['Email']) . "</p>";
                echo "<p><strong>Topic:</strong> " . htmlspecialchars($submission['Topic']) . "</p>";
                echo "<p><strong>Skills:</strong> " . implode(", ", array_keys($submission['Skills'])) . "</p>";
                echo "<p><strong>Major:</strong> " . htmlspecialchars($submission['Major']) . "</p>";
                echo "<a href='submission.php?delete=$index' class='delete-button'>Delete</a>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>

	</main>

	<!--footer-->
  <?php include "./parts/footer.php" ?>



</body>
</html>