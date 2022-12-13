<?php 

    $paragrafoC20 = 
    "Fui catapultato in un mondo completamente nullo, privo di terra, alberi o montagne.
Una dimensione inesistente dove potevo scorgere solo uno sfondo bianco, null’altro.
Fui costretto ad agitare le ali per non essere vittima della gravità,
ma sapevo bene che ad un certo punto avrei finito le energie e sarei crollato…
“Che diavolo di posto è? Che cosa devo fare? Qui non c’è assolutamente niente…”";

    $parolaCensurata = $_GET['parolaCensurata']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDD - PHP</title>
</head>
<body>
    <header>
        <h1>YDD</h1>
    </header>

    <div class="contenitore">

        <pre><?php echo str_replace($parolaCensurata, '***', $paragrafoC20)?></pre>

        <div>Caratteri: <?php echo strlen($paragrafoC20)?></div>
    </div>


    <hr>

    <form action="" method="GET" class="contenitore">
        <input type="text" name="parolaCensurata">
        <button type="submit">Censura</button>
    </form>
</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    *
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        color: inherit;
        text-decoration: none;
        list-style-type: none;
        transition-duration: 200ms;
        font-family: 'Montserrat', sans-serif;
    }

    body
    {
        background-color: #e3be89;
    }

    hr
    {
        margin: 30px 0;
    }

    header
    {
        background-color: #a48559;
        padding: 20px;
        margin-bottom: 50px;
        box-shadow: 0 0 50px black;
        color: #be9e71;
    }

    .contenitore
    {
        margin: 0 auto;
        width: 70%;
    }

    .contenitore pre
    {
        font-size: 1.4rem;
        margin-bottom: 30px;
        line-height: 30px;
    }

    .contenitore div
    {
        font-size: 1.2rem;
    }

    .contenitore input,
    .contenitore button
    {
        padding: 10px;
    }


</style>