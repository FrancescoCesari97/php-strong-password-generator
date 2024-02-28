<?php 

require_once __DIR__ . '/functions.php';


$keyboard_character = '!#$%&()0123456789:;=?@ABCDEFGHIJKLMNOPQRSTUVWXYZ^_abcdefghijklmnopqrstuvwxyz';

$sent_pasw = !empty($_GET);


if($sent_pasw){


    $pasw_length = $_GET['password_length'];

    var_dump($pasw_length);
    
    $password = generate_password($pasw_length, $keyboard_character);

    if($password){

        
        session_start();
        
        //* setto le variabili da condividere nella pagina 
        $_SESSION['password'] = $password ;
        
        header('location: ./passwordpage.php');


    //* interrompo l'esecuzione     
        exit;
    }
    
    var_dump($password);
}