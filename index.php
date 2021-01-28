<!-- Passare due argomenti allo script: Nome e Cognome.
Lo script dovrà salutare l’interlocutore -->

<?php
/* 
//$name = 'Angela Caterina';
//$lastName = 'Gallo';

$name = $argv[1];
$lastName = $argv[2];
echo 'Salve '.$name.' '.$lastName;
*/
$testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus esse nemo dolor possimus molestiae sequi aliquid ullam, omnis perferendis ratione eligendi tempore. Assumenda vitae modi quas iure repudiandae cum earum.';
$badwords = $_GET['badwords'];
?>

<!--  Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
    <p> <?php echo strlen($testo); ?> </p>
    <!-- str_replace(porzioneDaModificare, conCosa, stringa) -->
    <p> <?php echo str_replace($badwords,'***',$testo); ?> </p>

</body>
</html>
