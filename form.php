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
  <?php var_dump($_POST) ?>

  <?php
  $sendmail = $_POST['email'];
  $name = $_POST['name'];
  $firstnamename = $_POST['firstname'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $headers = "tounsi74130@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

    $retour = mail($sendmail, 'Envoi depuis la page Contact', $message, 'From: tounsi74130@gmail.com');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>