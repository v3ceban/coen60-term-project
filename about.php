<!doctype html>
<html lang="en">
  <head>
    <?php include "./parts/head-content.php"?>
    <title>About Us</title>
  </head>
  <body>
    <?php include "./parts/header.php" ?>
    <main class="about">
      <div class="content">
        
        <div class="img-container">
          <h2 class="imgTxt">Team Member Introduction</h2>
          <img src="photos/aboutPic.jpg" alt="head illustration" class="headImg">
        </div>

        <!--menber section-->
        <ul class="list">
          <li>
            <img src="photos/Ellie.jpg" alt="Ellie's photo" width="180" />
            <p id="Ellie">
              <b>
                Ellie Hong is a Freshman WDE major.
                <br />
                <br />
                She created the About and the "Find Teammate" section of this website.
              </b>
              <br />
              Ellie has joined the CSSA club and is exploring more campus activities.
              Aspiring to be a web <br />designer, she's keen on finding clubs
              and opportunities that align with her professional interests <br />and
              personal growth.
            </p>
          </li>

          <li>
            <img src="photos/Holly.jpg" alt="Holly's photo" width="180" />
            <p id="Holly">
              <b>
                Holly Duan is a freshman WDE major.
                <br />
                <br />
                She created the home and the "Find Teammate" section of this website.
              </b>
              <br>
              <!--holly's self describtion-->
              Holly is originally from Taiwan and has studied in the United States for a while. She likes to <br>sleep and play video games.
            </p>
          </li>

          <li>
            <img src="photos/Mia.jpg" width="180" alt="Mia's photo" />
            <p id="Mia">
              <b>
                Mia Lassiter is a junior WDE major.
                <br />
                <br />
                She created the Archives section of this website.
              </b>
              <br />
              On campus, Mia works as a CF (resident assistant) in Casa Italiana
              and a web designer for
              <br />
              SCU’s Faculty Development program and the Markkula Center for
              Applied Ethics.
            </p>
          </li>

          <li>
            <img src="photos/vlad.jpg" alt="Vlad's photo" width="180" />
            <p id="Vlad">
              <b>
                Vladimir Ceban is a transfer Web Design major.
                <br />
                <br />
                He created the form section of this website.
              </b>
              <br />
              He was born in Moldova, speaks Russian, and works part time as a Social Media Intern with <br>the Exclusive Excellence Department at SCU.
              <!--Vlad's self describtion-->
            </p>
          </li>
        </ul>

        <section>
          <h2>Project Description</h2>
          <h3>Design</h3>
          <p>
            We used Santa Clara University's brand colors and style guide to highlight the identity and affiliation with the university.<br> 
            The site was deliberately made simple to make it as easy as possible to use and navigate.
          </p>
          <h3>Technologies</h3>
          <p>
            We used HTML and CSS for the basic layout, however, our HTML is embedded in PHP files to make the development experience easier and modular.<br>
            We also used JavaScript to validate the form on the front end and add some interactive elements to the Archives page.<br>
            On the back end, we used PHP to process the form, scrap all data from submissions, store them in text files, and return back as HTML elements.          </p>
        </section>
      </div>
    </main>
    <!--footer-->
    <?php include "./parts/footer.php" ?>
  </body>
</html>
