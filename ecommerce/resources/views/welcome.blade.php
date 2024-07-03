<?php
  /*
    $username = "Md. Noyon Ali";  // Golobal Variable Scope

    //echo $username;

    // local varible
    function getAddress(){
        $username = "Md. Noyon Ali";
        echo $username;
    }

    getAddress();
    */
  //function er modde golobal variable use kore.
    // $cell ="ali";
    // function getAddress(){
    //    global $cell;
    //     echo $cell;
    // }
    // getAddress();

    function getStatic(){
      static $qty=1;
      echo $qty. "</br>";
        $qty+=5;

    }
    getStatic();
    getStatic();
    getStatic();
    getStatic();

 echo "noyon";
?>