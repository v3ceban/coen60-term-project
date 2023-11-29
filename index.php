<!doctype html>

<html lang="en">
  <head>
    <?php include "./parts/head-content.php" ?>
    <link rel="stylesheet" href="home_test.css" />

    <title>Home</title>
  </head>

  <body>
    <?php include "./parts/header.php" ?>
    <main class="home">
      <div class="image-container">
        <img src="background1_c.jpg" alt="Background Image" />
        <h1 class="image-text">Explore Ideas & Find Your Teammates</h1>
      </div>
      <div class="intro">
        <p class="para1">
          Every senior in the School of Engineering will team up and create a
          year-long capstone project to showcase their learning by solving
          real-life problems.
        </p>
        <br/>
        <p>
          Coming up with ideas and forming a team might be challenging. This website will allow you to get inspiration from previous designs by viewing the archives. You may also connect with peers by sharing your design ideas and contact information.
        </p>
      </div>
      <div class="buttons">
        <a href="./archive.php"><button type="button" class="ideas">See Archives</button></a>
        <a href="./form.php"><button type="button" class="teamates">Find Teammates</button></a>
        <a href="./about.php"><button type="button" class="information">About Us</button></a>
      </div>
    </main>
    <?php include "./parts/footer.php" ?>
  </body>
</html>
