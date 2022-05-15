<?php

isset($_POST["submit"]);
{

    $mail=$_POST["mail"];
    $sifre=$_POST["pass"];
    
    if (($mail=="b211210100@sakarya.edu.tr"||$mail=="B211210100@sakarya.edu.tr")&&($sifre=="b211210100"||$sifre=="B211210100")) {
        echo "Giriş Başarılı";

        header("Refresh:3;  giriş.html");
    }
    else{
        echo "Giriş Başarısız";
       
        header("Refresh:3;  login.html");
    }

}


?>