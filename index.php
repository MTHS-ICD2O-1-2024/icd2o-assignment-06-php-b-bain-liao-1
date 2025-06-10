<!DOCTYPE html>
<!-- ICS2O-Assignment-06-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Random Excuse API, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Bain Liao" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Random Excuse API, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Random Excuse API, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/excuse.png" alt="Excuse" />
      </div>
      <div class="page-content">Refresh the web page to get a random excuse:</div>
      </br>
      <?php
      // Excuse API URL
      $apiUrl = "https://excuser-three.vercel.app/v1/excuse";

      // Fetch the excuse data
      $resultJSON = file_get_contents($apiUrl);

      if ($resultJSON === FALSE) {
        echo "<div class='page-content'>Sorry, an error has occurred. Please try again later.</div>";
        return;
      }

      $jsonData = json_decode($resultJSON, true);

      // Get the excuse and category
      $excuse = $jsonData[0]['excuse'];
      $category = $jsonData[0]['category'];

      // Output
      echo "<div class='page-content'>";
      echo "<p>Excuse: " . $excuse . "<br>Category: " . $category . "</p>";
      echo "</div>";
      ?>
    </main>
  </div>
</body>

</html>
