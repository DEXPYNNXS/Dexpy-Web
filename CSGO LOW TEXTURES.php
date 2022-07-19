<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $pagina = $_SERVER['REQUEST_URI'];
    $datum = date("d-m-y / H:i:s");
    $invoegen =  $datum . " - " . $ip . " - " . $pagina . "<br>";
    $fopen = fopen("ip.html", "a");
    fwrite($fopen, $invoegen);
    fclose($fopen);
    ?>
