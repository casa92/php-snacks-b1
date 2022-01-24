<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3
caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
?>

<?php if (strlen($name) < 2 || strpos($mail, '@') === false || strpos($mail, '.') === false || is_numeric($age) === false) { ?>
    <div>Accesso negato</div>
<?php } else { ?>
    <div>Accesso riuscito</div>
<?php } ?>
