<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Formulaire envoyé</h1>
  


  <?php

require 'vendor/autoload.php'; 

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("helmielmaiel@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("tounsi74130@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";

}

  $sendmail = $_POST['email'];
  $name = $_POST['name'];
  $firstnamename = $_POST['firstname'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $headers = "Content-Type: text/plain; charset=utf-8\r\n";
  $headers .= "From: tounsi74130@gmail.com\r\n";

    $retour = mail('tounsi74130@gmail.com', 'Envoi depuis la page Contact', $message, "");
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>