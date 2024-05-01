<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Museum Admission" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Niko" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="./favf/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favf/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favf/favicon-16x16.png" />
    <link rel="manifest" href="./favf/site.webmanifest" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Museum Admission</title>
  </head>
  <body>
    <!-- references javascript file -->
    <script src="./js/script.js"></script>
    <?php echo "<h1>Museum Admission</h1>" ?>
    <img src="./images/slug.jpg" alt="slug" width="600" height="300" />
    <div id="backdrop">
      <?php echo "<h3>Enter your age and the day:</h3>" ?>
      <p>
        <!-- form to get user input for their age, as well as the day of the week through a dropdown menu, which will help determine whether they are elegible for a discount or free entry -->
        <form action="./results.php" method="post" target="results">
          <label for="age">Enter your Age:</label>
          <!-- input for age -->
          <input type="number" id="age" min="0" step="1" placeholder="age" name="age" /><br><br>
          <label for="day">Day of The Week:</label>
            <!-- dropdown menu with different days of the week as options -->
            <select name="day" id="day" name="day">
              <option id="option1" name="option1">-- Day of the Week --</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednseday">Wednseday</option>
              <option value="Thursday">Thursday</option>
              <option value="Friday">Friday</option>
              <option value="Saturday">Saturday</option>
              <option value="Sunday">Sunday</option>
            </select>
          <input type="submit" value="Check" />
        </form>
      </p>
    	<!-- iframe for the results to show on the web page -->
      <iframe id="results" name="results">			
  
      </iframe>
    </div>
    <br>
  </body>
</html>