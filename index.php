<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sajt grada</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-12" style="margin-bottom: 10px">
    <img src="slika.jpg" class="img-responsive">
    <?php
    include_once("menu.php");

    ?>
    </div>
</div>
<div class="row">
<div class="col-md-9">
<?php
    include_once("main.php");

    ?>
    </div>
    <div class="col-md-3">
    <div class="well">
    <?php
    include_once("forma.php");

    ?>
    </div>
    <div class="list-group">
  <a href="#" class="list-group-item disabled">
    Pravna lica
  </a>
  <a href="gradonacelnik.php" class="list-group-item">Gradonacelnik</a>
  <a href="skupstina_grada.php" class="list-group-item">Skupstina grada</a>
  <a href="Gradska_uprava.php" class="list-group-item">Gradska uprava</a>
  <a href="jpn.php" class="list-group-item">Javni pozivi, konkursi, nabavke</a>
  <a href="JU.php" class="list-group-item">Javne ustanove</a>
  <a href="GIK.php" class="list-group-item">Gradska izborna komisija</a>
</div>
    </div>

</div>


</div>

</body>

</html>