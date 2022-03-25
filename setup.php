<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Setup | Sequelmark</title>
    <link rel="shortcut icon" href="assets/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/entry-page.css">
    <style media="screen">
      label>input{margin-top:5px}
    </style>
  </head>
  <body>
    <main class="main-content">
      <img src="assets/branding/sequelmark-logo.svg" alt="Sequelmark" class="branding-image" draggable="false">
      <form action="#" method="post" class="input-form">
        <ul class="form-ul">
          <li><h1>Profile setup</h1></li>
          <li><input type="text" class="form-input" spellcheck="false" placeholder="Create an ID" autocomplete="off" required autofocus></li>
          <li>
            <label>
              <span>Date of Birth</span>
              <input type="date" class="form-input" placeholder="Date of birth" required>
            </label>
          </li>
          <li>
            <label>
              <span>Birth certificate</span>
              <input type="file" class="form-input" required>
            </label>
          </li>
          <li>
            <select class="form-input">
              <option disabled selected>--Select Domicile--</option>
              <option>All India</option>
              <option>West Bengal</option>
              <option>Delhi</option>
              <option>Punjab</option>
            </select>
          </li>
          <li>
            <label>
              <span>Domicile certificate</span>
              <input type="file" class="form-input">
            </label>
          </li>
          <li>
            <select class="form-input">
              <option disabled selected>--Select Category--</option>
              <option>General</option>
              <option>OBC</option>
              <option>SC</option>
              <option>ST</option>
            </select>
          </li>
          <li>
            <label>
              <span>Category certificate</span>
              <input type="file" class="form-input">
            </label>
          </li>
          <li><button type="submit" class="primary-button form-input">Continue</button></li>
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
