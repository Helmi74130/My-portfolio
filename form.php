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
  $sendmail = $_POST['email'];
  $name = $_POST['name'];
  $firstnamename = $_POST['firstname'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $headers = 'tounsi74130@gmail.com' . "\r\n" .
    'Reply-To: tounsi74130@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $retour = mail($sendmail, 'Envoi depuis la page Contact', $message, $headers);
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
    <?php var_dump($headers) ?>
</body>
</html>