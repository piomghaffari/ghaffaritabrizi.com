<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
date_default_timezone_set('America/Detroit');
?>

<!doctype html>
<html lang="en-US">
  <!-- generated by uswds@2.7.0 -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USWDS Fractal example document</title>
    <link rel="stylesheet" href="assets/uswds/css/uswds.min.css">
    <link rel="stylesheet" href="assets/css/omid.css">
  </head>
  <body>

    <?php
      include("assets/includes/banner.inc");
      include("assets/includes/header-others.inc");
      include("assets/includes/main-lfc.inc");
      include("assets/includes/footer.inc");
      include("assets/includes/scripts.inc");
    ?>
  </body>
</html>