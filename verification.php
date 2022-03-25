<?php
  if(isset($_POST["signup"])){
    header("Location: setup");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification | Sequelmark</title>
    <link rel="shortcut icon" href="assets/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/entry-page.css">
  </head>
  <body>
    <main class="main-content">
      <img src="assets/branding/sequelmark-logo.svg" alt="Sequelmark" class="branding-image" draggable="false">
      <form action="#" method="post" class="input-form">
        <ul class="form-ul">
          <li><h2>Verification</h2></li>
          <li>OTP is sent to email <b>sa***on@outlook.com</b> and phone number <b>87***41</b></li>
          <li><input type="text" class="form-input" spellcheck="false" placeholder="Email OTP" autocomplete="off" required></li>
          <li><input type="text" class="form-input" spellcheck="false" placeholder="Phone OTP" autocomplete="off" required></li>
          <li><button type="submit" name="verify" class="primary-button form-input">Continue</button></li>
          <li><a href="#">Resend</a></li>
        </ul>
      </form>
    </main>
    <footer class="footer-bottom">
      <ul class="footer-ul">
        <li><span>© 2022 Sequelmark</span></li>
        <li><a href="about">About Us</a></li>
        <li><a href="legal#privacy">Privacy Policy</a></li>
        <li><a href="legal#cookie">Cookie Policy</a></li>
        <li><a href="legal#agreement">User Agreement</a></li>
        <li><a href="legal#guidelines">Guidelines</a></li>
        <li><a href="careers">Careers</a></li>
        <li><a href="help">Help & Support</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="colleges">Colleges</a></li>
        <li><a href="examinations">Examinations</a></li>
      </ul>
    </footer>
  </body>
</html>
