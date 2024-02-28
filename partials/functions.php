<?php 



function generate_password($length, $character){
    
    $random_password = '';

    while(strlen($random_password) < $length){

        $random_password .= $character[rand(0, strlen($character))];

    };

    return $random_password;
}



?>