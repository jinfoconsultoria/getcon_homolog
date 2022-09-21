<?php

$img       = !empty($_REQUEST['imgBase64']) ? $_REQUEST['imgBase64'] : die("No image was posted");
$imgName   = $_REQUEST['imgName'];
$img       = str_replace('data:image/jpeg;base64,', '', $img);
$img       = str_replace(' ', '+', $img);
$fileData  = base64_decode($img);
//saving
file_put_contents('uploads/' . $imgName, $fileData);