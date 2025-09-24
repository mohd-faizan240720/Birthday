<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $rating = htmlspecialchars($_POST['rating']);

    $to = "faizanwappconnect@gmail.com"; // <-- yahan apna email dalen
    $subject = "Birthday Page Reply from $name";
    $body = "Name: $name\nMessage: $message\nRating: $rating/5\n";
    $headers = "From: no-reply@birthdaypage.com";

    if(mail($to, $subject, $body, $headers)){
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
} else {
    echo json_encode(["status" => "invalid_request"]);
}
?>
