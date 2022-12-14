<?php
if (!empty($_POST['imie'])){
    echo "czest " . $_POST["imie"] . "! ";
}
else
echo "czesc nieznajomy";


if(!empty($_POST['wiek'])){
    echo "masz " . $_POST['wiek'] . " lat ";
}
else echo "nie wpisałes wieku";

if(!empty($_POST['plec'])){
    echo "jestes " . $_POST['plec'] . " ! ";
}
else echo "nie wybrałes płci";

if(!empty($_POST['color'])){
    echo "twoj ulubiony kolor  to " .  $_POST['color'] . "!";
}
else echo "nie wybrałes kolorou";

?>