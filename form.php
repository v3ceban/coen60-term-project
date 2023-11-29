<!doctype html>
<html lang="en">
  <head>
    <?php include "./parts/head-content.php"?>
    <script src="./js/form-validation.js" defer></script>
    <title>Form</title>
  </head>
  <body>
    <?php include "./parts/header.php" ?>
    <main class="form">
      <section class="description">
        <h2>Connections Form</h2>
        <p>
          Are you looking to connect with other students who are working on
          similar senior design projects? If so, this form is the perfect way to
          do so!
        </p>
        <p>
          By filling out this form, you will be able to find others who are
          working on the same topic as you. This will allow you to collaborate
          with others and learn from each other's experiences.
        </p>
        <p>
          This form will also make it easier to find potential mentors and
          advisors to help you complete your project.
        </p>
        <p>
          So don't delay, fill out the form today and start connecting with
          others!
        </p>
        <p>
          Submission of this form will also add you to our People page, so
          others can contact you!
        </p>
      </section>
      <form action="./currentTopics.php" method="post" novalidate onsubmit="return validateForm()">
        <section class="info">
          <h3>Your Information</h3>
          <label for="Name">First and Last Name</label>
          <input type="text" name="Name" id="Name"/>
          <label for="Email">Email</label>
          <input type="email" name="Email" id="Email"/>
          <label for="Topic">Topic Idea</label>
          <input type="text" name="Topic" id="Topic"/>
        </section>
        <section class="skills">
          <h3>Your Skills</h3>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Backend"
              id="Backend"
              title="e.g. C, Python, Java"
            />
            <label for="Backend" title="e.g. C, Python, Java">
              Backend Programming
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="CAD"
              id="CAD"
              title="e.g. AutoCAD, SolidWorks, CATIA"
            />
            <label for="CAD" title="e.g. AutoCAD, SolidWorks, CATIA">
              CAD Software
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="DataAnalysis"
              id="DataAnalysis"
              title="e.g. Excel, Python, R"
            />
            <label for="DataAnalysis" title="e.g. Excel, Python, R">
              Data Analysis
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Design"
              id="Design"
              title="e.g. Adobe Photoshop, Sketch, Illustrator"
            />
            <label for="Design" title="e.g. Adobe Photoshop, Sketch, Illustrator">
              Design
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Electronics"
              id="Electronics"
              title="e.g. PCB design, Circuit analysis, FPGA programming"
            />
            <label
              for="Electronics"
              title="e.g. PCB design, Circuit analysis, FPGA programming">
              Electronics
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Frontend"
              id="Frontend"
              title="e.g. HTML, CSS, JavaScript, React"
            />
            <label for="Frontend" title="e.g. HTML, CSS, JavaScript, React">
              Frontend Programming
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="MaterialScience"
              id="MaterialScience"
              title="e.g. Metallurgy, Polymer science, Nanotechnology"
            />
            <label
              for="MaterialScience"
              title="e.g. Metallurgy, Polymer science, Nanotechnology">
              Material Science
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Prototyping"
              id="Prototyping"
              title="e.g. 3D printing, CNC machining, Laser cutting"
            />
            <label
              for="Prototyping"
              title="e.g. 3D printing, CNC machining, Laser cutting">
              Prototyping
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Research"
              id="Research"
              title="e.g. Literature review, Data collection, Hypothesis testing"
            />
            <label
              for="Research"
              title="e.g. Literature review, Data collection, Hypothesis testing">
              Research
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Robotics"
              id="Robotics"
              title="e.g. ROS, Kinematics, Computer vision"
            />
            <label for="Robotics" title="e.g. ROS, Kinematics, Computer vision">
              Robotics
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="Simulation"
              id="Simulation"
              title="e.g. ANSYS, MATLAB, Simulink"
            />
            <label for="Simulation" title="e.g. ANSYS, MATLAB, Simulink">
              Simulation
            </label>
          </div>
          <div class="checkbox">
            <input
              type="checkbox"
              name="TWriting"
              id="TWriting"
              title="e.g. Technical reports, Documentation, Research papers"
            />
            <label
              for="TWriting"
              title="e.g. Technical reports, Documentation, Research papers">
              Technical Writing
            </label>
          </div>
        </section>
        <section class="major">
          <h3>Your Major</h3>
          <div class="radio">
            <input type="radio" name="Major" value="BIO" id="BIO"/>
            <label for="BIO">Bioengineering</label>
          </div>
          <div class="radio">
            <input type="radio" name="Major" value="CIV" id="CIV"/>
            <label for="CIV">Civil Engineering</label>
          </div>
          <div class="radio">
            <input type="radio" name="Major" value="CSEN" id="CSEN"/>
            <label for="CSEN">Computer Science and Engineering</label>
          </div>
          <div class="radio">
            <input type="radio" name="Major" value="ECEN" id="ECEN"/>
            <label for="ECEN">Electrical and Computer Engineering</label>
          </div>
          <div class="radio">
            <input type="radio" name="Major" value="ELEN" id="ELEN"/>
            <label for="ELEN">Electrical Engineering</label>
          </div>
          <div class="radio">
            <input type="radio" name="Major" value="GEN" id="GEN"/>
            <label for="GEN">General Engineering</label>
          </div>
          <div class="radio">
            <input type="radio" name="Major" value="MECH" id="MECH"/>
            <label for="MECH">Mechanical Engineering</label>
          </div>
          <div class="radio">
            <input type="radio" name="Major" value="WDEN" id="WDEN"/>
            <label for="WDEN">Web Design and Engineering</label>
          </div>
        </section>
        <input type="submit" name="Submit" value="Submit" id="Submit" />
      </form>
    </main>
    <?php include "./parts/footer.php" ?>
  </body>
</html>
