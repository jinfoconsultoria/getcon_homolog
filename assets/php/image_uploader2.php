<?php
session_start();
if ($_REQUEST['imgBase64']) {
    $img       = !empty($_REQUEST['imgBase64']) ? $_REQUEST['imgBase64'] : die("No image was posted");
    $imgName   = $_REQUEST['imgName'];
    $img       = str_replace('data:image/jpeg;base64,', '', $img);
    $img       = str_replace(' ', '+', $img);
    $fileData  = base64_decode($img);
    //saving
    file_put_contents('../uploads/imagens/usuario/' . $imgName, $fileData);

} else if ($_FILES['file']) {
    if (0 < $_FILES['file']['error']) {
        exit();

    } else {
        $temp = explode(".", $_FILES["file"]["name"]);
        $max_width  = 1280;
        $max_height = 720;
        $img = new Imagick();
        $img->readImage($_FILES["file"]['tmp_name']);
        $img->setImageCompression(Imagick::COMPRESSION_JPEG);
        $img->setImageCompressionQuality(75);
        $img->resizeImage(
            min($img->getImageWidth(),  $max_width),
            min($img->getImageHeight(), $max_height),
            imagick::FILTER_CATROM,
            1,
            true
        );
        $img->stripImage();
        $img->writeImage($_FILES["file"]['tmp_name']);
        $img->clear();
        $timestamp = round(microtime(true));
        $newfilename = $timestamp . '.' . end($temp);
        $_SESSION['imagemUp_adc'] = $newfilename;
        move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/imagens/". $_REQUEST['pasta'] ."/" . $newfilename);
        die($timestamp . '.' . explode('.', $_FILES['file']['name'])[1]);
    }
}
