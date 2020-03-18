<ul class="nav nav-tabs">
<li role="presentation"
  <?php  if(!isset($_GET['opcija'])){
      echo "class='active'";
  }

  ?>
>
<a href="index.php">Pocetna</a>
</li>
<li role="presentation"
<?php
if(isset($_GET['opcija']) and $_GET['opcija']=="info"){

    echo "class='active'";
}

?>
>
<a href="index.php?opcija=info">Info</a>
</li>
<li role="presentation"
<?php
if(isset($_GET['opcija']) and $_GET['opcija']=="sluzbe"){

    echo "class='active'";
}

?>
>
<a href="index.php?opcija=sluzbe">Sluzbe</a>
</li>
<li role="presentation"
<?php
if(isset($_GET['opcija']) and $_GET['opcija']=="kontakt"){

    echo "class='active'";
}

?>
>
<a href="index.php?opcija=kontakt">Kontakt</a>
</li>

</ul>