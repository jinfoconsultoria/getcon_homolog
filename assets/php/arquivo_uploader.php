<?php
session_start();
if ( isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
    if (0 < $_FILES['file']['error']) {
        exit();

    } else {
        $temp = explode(".", $_FILES["file"]["name"]);

        $timestamp = round(microtime(true));

        $newfilename = $timestamp . '.' . end($temp);

        $_SESSION['arquivoAtestado'] = $newfilename;

        move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/arquivos/". $_REQUEST['pasta'] ."/" . $newfilename);
        die($timestamp . '.' . explode('.', $_FILES['file']['name'])[1]);
    }
}

