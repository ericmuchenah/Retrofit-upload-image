<?php

$name = $_POST["name"];

$image = $_POST["image"];

$decodedImage = base64_decode("$image");

$return = file_put_contents("images/" . $name . ".jpg", $decodedImage);

$response = array();
if ($return !== false) {
    $response['success'] = 1;
    $response['message'] = "Your image has ploaded successfully with Retrofit";
} else {
    $response['success'] = 0;
    $response['message'] = "Image failed to pload";
}

echo json_encode($response);
