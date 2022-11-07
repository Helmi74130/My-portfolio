<?php

// Secure the form
if(isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['message'])){
  $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
  $firstname = htmlspecialchars(stripslashes(trim($_POST['firstname'])));
  $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
  $headers = htmlspecialchars(stripslashes(trim($_POST['email'])));
  $message = "Message de: ".$name."".$firstname."\r\n Tél: ".$phone."\r\n".$headers."\r\n"." Qui dit: ".htmlspecialchars(stripslashes(trim($_POST['message'])));

  if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
    $nameErr = 'Votre nom est invalide, il ne doit pas contenir un chiffre ou un caractère spéciaux';
  }else{
    $nameErr = null;
  }
  if(!preg_match("/^[A-Za-z .'-]+$/", $firstname)){
    $firstnameErr = 'Votre prénom est invalide, il ne doit pas contenir un chiffre ou un caractère spéciaux';
  }else{
    $firstnameErr = null;
  }
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $headers)){
    $mailErr = 'Votre adresse mail est invalide, veuillez entrer une adresse valide';
  }else{
    $mailErr = null;
  }
  if(strlen($message) === 0 || strlen($message) > 5000){
    $messageErr = 'Vous ne pouvez pas envoyer de message vide, veuillez renseigner le champ';
  }else{
    $messageErr = null;
  }
  if (!isset($nameErr) && !isset($firstnameErr) && !isset($mailErr) && !isset($messageErr)){
      $success = 'Votre message a été envoyé avec succés';
      $send = true;
      mail('helmielmaiel@gmail.com', 'Contact de mon Portfolio', $message, $headers);
  }else{
    $send = false;
      $success = 'Une erreur c\'est produite, <br/> vérifiez que vous avez rempli correctement le formulaire.<br/> 
      Ou contacter moi directement par e-mail en cliquant sur cette adresse e-mail <a href="mailto:helmielmaiel@gmail.com">helmielmaiel@gmail.com</a>';
  } 
}
