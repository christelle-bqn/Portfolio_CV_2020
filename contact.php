<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Veuillez renseigner le champs 'Nom/Prénom'";
} else {
    $name = $_POST["name"];
}
 
if (empty($_POST["email"])) {
    $errorMSG .= "Veuillez renseigner le champs 'Email'";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["subject"])) {
    $errorMSG .= "Veuillez renseigner le champs 'Sujet'";
} else {
    $subject = $_POST["subject"];
}

if (empty($_POST["comments"])) {
    $errorMSG .= "Veuillez renseigner le champs 'Message'";
} else {
    $message = $_POST["comments"];
}
 
$emailTo = "contact@christelleboquillion.com";

$body = "Nom: ";
$body .= $name;
$body .= "\n\n";
 
$body .= $message;
$body .= "\n";
 
$headers =  'From: '. $email . "\r\n" .
        'X-Mailer: PHP/' .phpversion();

$success = mail($emailTo, $subject, $body, $headers);
$success_cop = mail($email, $subject, $body, $headers);
 

if ($success && $success_cop && $errorMSG == "") {
   echo "Message envoyé";
} else {
    if($errorMSG == ""){
        echo "Erreur: message non envoyé";
    } else {
        echo $errorMSG;
    }
}
 