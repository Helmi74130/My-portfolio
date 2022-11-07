<?php 


if ( !empty($_GET['language']) ) {
  $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'fr';
} else if ( empty($_COOKIE['language']) ) {
  $_COOKIE['language'] = 'fr';
}
setcookie('language', $_COOKIE['language']);

if ( $_COOKIE['language'] === "en") {
  include_once "language/language_en/languageen.php";
} else {
  include_once "language/language_fr/languagefr.php";
} 