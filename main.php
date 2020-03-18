<?php
//glavni fajl sajta
if(isset($_GET['opcija'])){
    $fajl = $_GET['opcija'] .".php";
    if(file_exists($fajl)) {
        include_once($fajl);
    }
    else {
        ?>
        <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>GRESKA!</strong> Trazena stranica ne postoji <br>
        Molimo Vas vratite se na <a href="index.php" class="alert-link">pocetnu stranicu</a>
        </div>

        <?php
    }

}
else{
    ?>
    <div class="jumbotron">
    <h1>Pocetna stranica</h1>
    <p>Dobrodosli na zvanicnu stranicu grada Zvornik. Ovdje mozete pronaci sve potrebne informacije i obrasce vezane za nase sluzbe.
    Nadamo se da ca Vam ova stranica biti od koristi. Ukoliko ste pravno lice, koristite log in formu za pristup dozvoljenim informacijama...</p>
    </div>
    <div class="col-md-6">
        <h3>Odluke</h3>
        <a href="#">Nabavka goriva i maziva za vozila gradske uprave grada Zvornik</a><br><br>
        <a href="#">Analiticka i graficka obrada podataka za potrebe regulacije korita rijeke Sapne</a><br><br>
        <a href="#">Izrada WEB stranice i WEB hosting usluge gradu Zvorniku</a><br><br>
    </div>
    <div class="col-md-6">
        <h3>Tenderi</h3>
        <a href="#">Poziv za dostavljanje ponuda za javnu nabavku</a><br><br>
        <a href="#">Poziv-nabavka informativnih usluga</a>
    </div>

    <?php 
}