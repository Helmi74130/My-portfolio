<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Développeur web Full Stack et passionné par l'informatique. Dans mon portfolio je vous présente mes projets et mes compétences">
  <link rel="icon" type="image/png" href="img/helmi.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Helmi El Maïel Développeur Full-Stack</title> 
</head>
<body>
  <?php
    require_once "php/load_language.php";
   ?>
  <div class="scrollbar"></div>
  <div class="clickScrollbar"></div>
  <!-- HEADER MODAL -->
  <div id="modalHeader" class="modal-header-container none">
    <div class="modal-header-content">
      <div>
        <p><?= DISCOVER ?></p>
        <nav>
          <a class="effect-shine" href="#project"><?= PROJECT?></a>
          <a class="effect-shine" href="#contact">Contact</a>
          <a class="effect-shine" href="#about"><?= ABOUT ?></a>
          <a class="effect-shine" href="#competence"><?= COMPETENCE ?></a>
        </nav>
      </div>
    </div>
  </div>
  <!-- HEADER -->
  <div id="top" class="container-top">
    <header>
      <div class="logo">
        <a class="link-logo-header" href="#top">
          <img height="52px" width="52px" src="img/helmi.png" alt="logo du site">
        </a>
        <div class="language">
          <img id="flag" height="32px" width="32px" src=<?= $_COOKIE['language'] === "fr" ? "icon/france.png" : "icon/royaume-uni.png";?> alt="drapeau de la france">
          <div id="textLanguage" class="text-language display">
            <a href="index.php?language=fr"><?= FRENCH ?></a>
            <a href="index.php?language=en"><?= ENGLISH ?></a>
          </div>
        </div>
      </div>
      <div id="buttonMenu" class="menu-icon">
        <input class="menu-icon__cheeckbox" type="checkbox" />
        <div>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="menu-social">
        <a target="_blank" href="https://github.com/Helmi74130">
          <img height="52px" width="52px" src="img/github1.png" alt="logo github">
        </a>
        <a target="_blank" href="https://www.linkedin.com/in/helmi-el-maiel-developpeur-front-end-back-end-full-stack-css-html-javascript-php-react-symfony/">
          <img height="52px" width="52px" src="img/linkedin.png" alt="logo linkedin">
        </a>
      </div>
    </header>
  </div>
  <main>
    <!-- PRESENTATION -->
    <div class="personal">
      <div class="personal-info">
        <h1><?= NAME_TEXT ?><span id="textWritter"></span></h1>
        <p class="text-top"><?= INTERET_TEXT?></p>
        <p class="text-bottom"><?= PASSIONNED_TEXT ?></p>
        <button class="glow-on-hover"><a href="#contact"><?= CONTACT_TEXT ?></a></button>
        <p class="project"><?= PROJECT_TEXT ?></p>
      </div>
      <!-- DIV SMARTPHONE -->
      <div id="smartphoneDiv" class="personal-info-right" >
        <!-- SMARTPHONE START -->
        <div id="smartphone" class='smartphone zoom-1 notification on content-personal-info-right shake' data-aos="fade-left" data-aos-anchor-placement="center-center" data-aos-duration="1000" data-aos-once="true">
          <span class='btn btn-up-down'></span>
          <span class='btn btn-power'></span>
          <section class='header-phone'>
            <span class='badge'></span>
            <span class='cam'></span>
            <button class="phone-button" id="phoneButton">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-app" viewBox="0 0 16 16">
                <path d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z"/>
              </svg>
            </button>
          </section>
          <!-- WHATS APP SCREEN START -->
          <div id="screen" class='screen-phone none'>
            <div class="">
              <div class="phone-header">
                <p class="time"></p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-battery-charging" viewBox="0 0 16 16">
                  <path d="M9.585 2.568a.5.5 0 0 1 .226.58L8.677 6.832h1.99a.5.5 0 0 1 .364.843l-5.334 5.667a.5.5 0 0 1-.842-.49L5.99 9.167H4a.5.5 0 0 1-.364-.843l5.333-5.667a.5.5 0 0 1 .616-.09z"/>
                  <path d="M2 4h4.332l-.94 1H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h2.38l-.308 1H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>
                  <path d="M2 6h2.45L2.908 7.639A1.5 1.5 0 0 0 3.313 10H2V6zm8.595-2-.308 1H12a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9.276l-.942 1H12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.405z"/>
                  <path d="M12 10h-1.783l1.542-1.639c.097-.103.178-.218.241-.34V10zm0-3.354V6h-.646a1.5 1.5 0 0 1 .646.646zM16 8a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                  <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                </svg>
              </div>
              <div class="subphone-header">
                <div class="left-content-subphone-header">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                  </svg>
                  <img src="/img/dev.jpg" height="30" alt="avatar d'un developpeur">
                  <div>
                    <p>Helmi</p>
                    <p><?= ONLINE_TEXT ?></p>
                  </div>
                </div>
                <div class="right-content-subphone-header">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                    <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                  </svg>
                </div>
              </div>
              <div class="absent-call">
                <div class="absent-call-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  <p><?= CALL_TEXT ?><span class="time"></span></p>
                </div>
              </div>
              <div class="phone-content right">
                <div class="phone-text first-right-message right-message">
                  <p id="helloText"></p>
                  <div class="phone-seen">
                    <p class="time"></p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                      <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                    </svg>
                  </div>
                </div>
                <div class="phone-text right-message">
                  <p id="longText"></p>
                  <div class="phone-seen">
                    <p class="time"></p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                      <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                    </svg>
                  </div>
                </div>
              </div>
              <div id="phoneMessage" class="phone-content left">
              </div>
              <div id="phoneMessageOfMe" class="phone-content right">
              </div>
              <div class="footer-phone">
                <div class="phone-placeholder">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-keyboard" viewBox="0 0 16 16">
                      <path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h12zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2z"/>
                      <path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75v-.5zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-.5zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75v-.5zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75v-.5zm-2 0A.25.25 0 0 1 2.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75v-.5zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75v-.5zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75v-.5zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75v-.5zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75v-.5zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25v-.5z"/>
                    </svg>
                  </div>
                  <div>
                    <input id="phoneInput" type="text" placeholder="Message">
                  </div>
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                      <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                    </svg>
                  </div>
                </div>
                <div class="phone-send">
                  <button id="sendMessageButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.19em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 384"><path fill="currentColor" d="M0 384V235l320-43L0 149V0l448 192z"/></svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- SCREEN HOME START -->
          <div id="homePhone" class="home-phone">
            <div class="filter">
              <div class="header-call">
                <img src="/img/helmi.png" height="60px" alt="logo de mon site">
                <p>Helmi</p>
                <p><?= CALL_APP_TEXT ?></p>
              </div>
              <div class="main-call">
                <div class="icon-call">
                  <img src="/icon/phone.png" height="21px" alt="icon d'un téléphone racroché">
                </div>
                <button id="acceptBtn" class="icon-call-reception">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                </button>
                <div class="icon-call">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                  </svg>
                </div>
              </div>
              <div class="footer-call">
                <p><?= RESPOND_TEXT ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mouse-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"  fill="currentColor"  class="bi bi-mouse" viewBox="0 0 16 16">
        <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8a4 4 0 0 1-8 0V5a4 4 0 1 1 8 0v6zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
      </svg>
      <div class="chevron-arrow">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  class="bi bi-caret-down" viewBox="0 0 16 16">
          <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
        </svg>
      </div>
    </div>
  </main>
  <!-- SECTION LEFT UP-->
  <div class="section">
    <div class="section-left">
      <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"><span class="design"><?= CONCEV_TEXT ?></span> <?= UNIQUE_TEXT ?> <br class="ligne"> <?= ELEGANTE_TEXT ?> <br class="ligne"> <?= ACCROCHE_TEXT ?> <img src="https://uploads-ssl.webflow.com/5f986747c748aa746b35ee7d/5f9cd8c2788d35c33317e409_geex-emoji%20-%2003.png" loading="lazy" alt="Icone d'une fusée" class="emoji-second"></h2>
      <p data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="bottom-bottom"><?= STRATEGY_TEXT ?> <br class="ligne"> <?= ACTION_TEXT ?> <br class="ligne"> <?= REFER_TEXT ?></p>
    </div>
    <div class="section-right">
    </div>
  </div>
  <!-- SECTION LEFT DOWN-->
  <div class="section">
    <div class="section-left">
      <h2 data-aos="fade-up" class="color" data-aos-anchor-placement="bottom-bottom"><span class="design"><?= IMAGINE_TEXT ?></span> <?= ENSEMBLE_TEXT ?> <br class="ligne"> <?= EMBOITE_TEXT ?> <br class="ligne"> <?= FORME_TEXT ?><span class="design"><?= YOU_TEXT ?></span> <?= WEBSITE_TEXT ?> <img src="img/screen.png" loading="lazy" alt="icone d'un site web" class="emoji-third"></h2>
      <p data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="bottom-bottom"><?= ESTHETIQUE_TEXT ?></p>
    </div>
    <div class="section-right">
    </div>
  </div>
  <!-- PANEL PROJECT FULL SCREEN-->
    <section id="project" class="panel project-panel in-top">
      <div class="project-left " data-aos="fade-up" data-aos-anchor-placement="top-center">
        <h4 class="title-project"><?= DISCOVER_TEXT ?><br class="ligne"> <?= MY_PROJECT_TEXT ?></h4>
        <div class="controls-screen">
          <button class="button-tabs" id="previous"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
          </svg></button>
          <button class="button-tabs" id="next"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
          </svg></button>
        </div>
        <p><?= GO_TEXT ?><br><?= MORE_TEXT ?><a class="design" href=""> <?= CONTACT_ME_TEXT ?></a></p>
      </div>
      <div class="project-right" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <a id="linkForWebSite" target="_blank" href="https://illustre-restaurant.herokuapp.com/">
          <div class='ipad'>
            <video class="" id="videoTablette" autoplay muted loop  src="video/illustre.mp4" type="video/mp4"></video>
          </div>  
        </a>
      </div>
    </section>
  <!-- PANEL PROJECT-->
    <section class="project-panel-responsive">
      <h4 class="project"><?= DISCOVER_TEXT.' '.MY_PROJECT_TEXT ?></h4>
      <div class="container-panel-responsive">
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" target="_blank" href="https://illustre-restaurant.herokuapp.com/"><img src="/img/illustreimg.png" alt="image de mon site web l'illustre"/></a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" target="_blank"  href="https://richards-immobilier.herokuapp.com/"><img src="/img/richardsimg.png" alt="image de mon site web richard immobillier"/></a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" target="_blank"  href="https://earth-and-sea.herokuapp.com/"><img src="/img/earthimg.png" alt="image de mon site web earth & sea"/></a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" target="_blank"  href="https://meteo-france-apps.herokuapp.com/"><img src="/img/meteoimg.png" alt="image de mon site web meteo france"/></a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" target="_blank"  href="https://whispering-falls-36328.herokuapp.com/"><img src="/img/orangeimg.png" alt="image de mon site web orange bleu my admin"/></a>
        <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" target="_blank"  href="https://dicerollthegame.herokuapp.com/"><img src="/img/diceimg.png" alt="image de mon site web dice roll"/></a>
      </div>
    </section>
    <!-- PANEL COMPETENCE -->
    <section id="competence" class="panel competence a">
      <div class="panel-left">
        <h5><?= COMPETENCE_TEXT ?></h5>
        <div class="subcontent">
          <div>
            <h6><?= PROJECT_TITLE ?></h6>
            <p><?= PROJECT_TITLE_TEXT ?></p>
          </div>
          <div>
            <h6><?= CONCEPT_TITLE ?></h6>
            <p><?= CONCEPT_TITLE_TEXT ?></p>
          </div>
          <div>
            <h6><?= DEV_TITLE ?></h6>
            <p><?= DEV_TITLE_TEXT ?></p>
          </div>
          <div>
            <h6><?= DEP_TITLE ?></h6>
            <p><?= DEP_TITLE_TEXT ?></p>
          </div>
        </div>
      </div>
      <div class="panel-right">
        <div class="icon-panel">
          <img src="icon/html.png" height="100px"  alt="icone html">
        </div>
        <div class="icon-panel">
          <img src="icon/css.png" height="100px"  alt="icone css">
        </div>
        <div class="icon-panel">
          <img  src="icon/js.png" height="100px"  alt="icone javascript">
        </div>
        <div class="icon-panel">
          <img  src="icon/bootstrap.png" height="150px"  alt="icone bootstrap">
        </div>
        <div class="icon-panel">
          <img  src="icon/react.png" height="100px"  alt="icone react.js">
        </div>
        <div class="icon-panel">
          <img  src="icon/firebase.png" height="100px"  alt="icone firebase">
        </div>
        <div class="icon-panel">
          <img  src="icon/nodejs.png" height="100px"  alt="icone nodejs">
        </div>
        <div class="icon-panel">
          <img  src="icon/directus.png" height="120px" alt="icone directus">
        </div>
        <div class="icon-panel">
          <img src="icon/sass.png" height="100px"  alt="icone sass">
        </div>
        <div class="icon-panel">
          <img class="teste" src="icon/query.png" height="100px"  alt="icone jquery">
        </div>
        <div class="icon-panel">
          <img class="mt" src="icon/php.png" height="100px"  alt="icone php">
        </div>
        <div class="icon-panel">
          <img class="mt" src="icon/git.png" height="100px"  alt="icone github">
        </div>
        <div class="icon-panel">
          <img class="mt" src="icon/sql.png" height="100px"  alt="icone sql">
        </div>
        <div class="icon-panel">
          <img class="mt" src="icon/wordpress.png" height="100px"  alt="icone wordpress">
        </div>
        <div class="icon-panel ">
          <img class="mt" src="icon/symfony.png" height="100px"  alt="icone symfony">
        </div>
      </div>
    </section>
    <!-- PANEL ABOUT -->
    <section id="about" class="panel about">
      <div class="about-content">
        <h2><?= ABOUT_TITLE ?></h2>
        <div class="text-about">
          <p><span class="design">Helmi EL Maiel,</span><?= ABOUT_TEXT ?></p><br>
          <p><?= SUB_ABOUT_TEXT ?></p><br>
          <p><?= PRINCIPAL_TEXT ?> <span class="design"><?= SERVE_TEXT ?></span></p>
        </div>
        <div class="find-me">
          <p><?= KNOW_TEXT ?></p>
          <a target="_blank" href="https://github.com/Helmi74130">GitHub</a>
          <a  target="_blank" href="https://www.linkedin.com/in/helmi-el-maiel-developpeur-front-end-back-end-full-stack-css-html-javascript-php-react-symfony/">Linkedin</a>
        </div>
      </div>
      <div class="content-circle-left">
        <div style="height:90px; width:90px" class="circle layer" data-speed="10"></div>
        <div style="height:150px; width:150px" class="circle layer" data-speed="-1"></div>
        <div class="circle layer" data-speed="6"></div>
        <div style="height:30px; width:30px; margin-left: 400px;" class="circle layer" data-speed="10"></div>
      </div>
      <div class="content-circle-right">
        <div class="circle layer" data-speed="-4"></div>
        <div style="margin-top: 150px; margin-left: 170px;" class="grad layer" data-speed="2"></div>
        <div style="height:200px; width:200px; margin-left: 400px;" class="circle layer" data-speed="6"></div>
        <div style="height:30px; width:30px; margin-left: 200px;" class="circle layer" data-speed="-2"></div>
      </div>
    </section>
    <!-- PANEL CONTACT -->
    <section id="contact" class="panel contact">
      <div class="contact-left">
        <div class="title-contact">
          <h3>Contact</h3>
          <p><?= RESPOND_FAST_TEXT ?></p>
        </div>
        <div class="content-contact">
          <div class="join">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg><a href="mailto:helmielmaiel@gmail.com">helmielmaiel@gmail.com</a>
          </div>
          <div class="join">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg><p>Haute-Savoie - France</p>
          </div>
        </div>
        <div class="social-nav">
          <a target="_blank" href="https://github.com/Helmi74130">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
          </a>
          <a target="_blank" href="https://www.linkedin.com/in/helmi-el-maiel-developpeur-front-end-back-end-full-stack-css-html-javascript-php-react-symfony/">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
          </a>
        </div>
        <div class="circle-contact"></div>
      </div>
      <div class="contact-right">
        <form id="formContact" method="POST" action="php/form.php" >
          <div class="form-content">
              <div>
                <input name="name" id="name" type="text" required placeholder="<?= NAME ?> *">
                <p id="textName"></p>
              </div>
              <div>
                <input name="firstname" id="firstname" type="text" required placeholder="<?= FIRSTNAME_TEXT ?> *">
                <p id="textFirstname"></p>
              </div>
          </div>
          <div class="form-content">
            <div>
              <input name="email" id="mail" type="mail" required placeholder="E-mail *">
              <p id="textEmail"></p>
            </div>
            <div>
              <input name="phone" id="phone" type="number" placeholder="<?= PHONE_TEXT ?>">
              <p id="textPhone"></p>
            </div>
          </div>
            <textarea required name="message" id="message" cols="30" rows="12" placeholder="<?= MESSAGE_TEXT ?>"></textarea>
            <button id="submit" class="button-tabs">Envoyer</button>
        </form>
      </div>
    </section>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script type="module" src="js/script.js"></script>
<script src="js/phonelanguage.js"></script>
<script src="js/changeVideoSrc.js"></script>
<script src="js/contactsecurity.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
</html>