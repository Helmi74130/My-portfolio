<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/form.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Helmi El Maïel Développeur contact</title>
</head>
    <?php 
        require_once "checkForm.php";
        $img = '<img class="img-erreur" src="../img/erreur.png" alt="" srcset="">';
    ?>
<body>
  <h1><?php echo $success ?></h1>

    <div>
    <p><?php echo $nameErr ?></p>
    <p><?php echo $firstnameErr ?></p>
    <p><?php echo $mailErr ?></p>
    <p><?php echo $messageErr ?></p>
    </div>
  
  <div class="back">
    <a href="../index.php"><button class="button-tabs">Retourner sur le site</button></a>
  </div>

  <div class="img-content">
    <?php if($send === false){echo $img;}?>
  </div>

  
  
</body>
</html>