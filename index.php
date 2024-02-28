<?php 


$keyboard_character = '!"#$%&()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[]^_`abcdefghijklmnopqrstuvwxyz{|}~';

$sent_pasw = !empty($_GET);


if($sent_pasw){


    $pasw_length = $_GET['password_length'];

    var_dump($pasw_length);
    
    $password = generate_password($pasw_length, $keyboard_character);
    
    var_dump($password);
}


function generate_password($pasw_length, $keyboard_character){
    
    $random_password = '';

    while(strlen($random_password) < $pasw_length){

        $random_password .= $keyboard_character[rand(0, strlen($keyboard_character))];

    };

    return $random_password;
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <h1>Geratore password</h1>


        <div class="">

        </div>


        <form action="" method="GET" class="row">
            <div class="col-10">
                <input type="number" class="form-control" name="password_length" autofocus>

            </div>
            <div class="col-2">
                <button class="btn btn-primary ">invia</button>
            </div>
        </form>


        <?php if($sent_pasw): ?>
        <div class="">
            <h2>
                passord = <?= $password ?>
            </h2>
        </div>
        <?php endif; ?>
    </div>
</body>

</html>