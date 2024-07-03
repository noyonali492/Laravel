<?php

    $username = "Md. Noyon Ali";  // Golobal Variable Scope

    //echo $username;

    // local varible
    function getAddress(){
        $username = "Md. Noyon Ali";
        echo $username;
    }

    getAddress();
?>