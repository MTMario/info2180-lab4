<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Superheroes</title>
    <link rel="stylesheet" href="styles.css" media="screen" />
    <script src="app.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Avengers Character Search</h1>
      <h4>Serach by Full Name or Alias<h4>
      <input type="text" name="name" value="">
      <button type="button" id="search" class="btn">Search</button>
      <h2>Result</h2>
      <?php include ('superheroes.php'); ?>
    </div>
     
  </body>
</html