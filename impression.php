<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impression | Sequelmark</title>
    <link rel="shortcut icon" href="assets/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/page-basics.css">
    <style media="screen">
      .examination-form{max-width:400px}.form-ul{margin-top:15px}.form-ul>li:not(:first-child){margin-top:20px}.form-input{padding:8px 10px;width:100%}.input-field{margin-top:5px}@media only screen and (min-width:601px){.settings-icon{display:none}}@media only screen and (max-width:600px){.page-header{display:flex;justify-content:space-between;align-items:center}.examination-form{margin:20px 0;max-width:100%}}
    </style>
  </head>
  <body>
    <div class="page-layout">
      <aside class="aside-left">
        <a href="/sequelmark" class="branding-image"><img src="assets/branding/sequelmark-logo.svg" alt="Sequelmark" draggable="false"></a>
        <ul class="aside-ul">
          <li>
            <input type="text" id="aside-search" spellcheck="false" placeholder="Search...">
            <ul id="aside-autocomplete" class="autocomplete-ul">
            </ul>
          </li>
          <li><a href="accepted">Home</a></li>
          <li><a href="search">Search</a></li>
          <li><a href="messages">Messages</a></li>
          <li><a href="notifications">Notifications</a></li>
          <li>
            <a href="profile" class="active">Account</a>
            <ul id="account-ul">
              <li><a href="profile">Profile</a></li>
              <li><a href="settings">Settings</a></li>
              <li><a href="logout">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </aside>
      <div class="page-content">
        <header class="page-header">
          <h2>Add Impression</h2>
          <a href="settings" class="settings-icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="#333" viewBox="0 0 16 16"><path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0zm4.042-6.657c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/></svg>
          </a>
        </header>
        <main class="main-content">
          <form action="#" method="post" class="examination-form">
            <h2>Impression registration</h2>
            <ul class="form-ul">
              <li>
                <label>
                  <span>Examination (Leave as default if the examination is not present in the list)</span>
                  <select class="form-input input-field">
                    <option>--Select--</option>
                    <option>Joint Entrance Examination (Main)</option>
                    <option>Joint Entrance Examination (Advanced)</option>
                    <option>Birla Institute of Technology and Science Admission Test</option>
                    <option>Vellore Institute of Technology Engineering Entrance Exam</option>
                  </select>
                </label>
              </li>
              <li>
                <label>
                  <span>Year of attempt</span>
                  <select class="form-input input-field">
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                    <option>2018</option>
                  </select>
                </label>
              </li>
              <li>
                <label>
                  <span>Upload your result (PDF)</span>
                  <input type="file" class="form-input input-field" accept="application/pdf" required>
                </label>
              <li>
                <label><input type="checkbox" required>&nbsp;<span>I agree to <a href="legal">Privacy</a> and <a href="legal">User Agreement</a>.</span></label>
              </li>
              <li>
                <button type="submit" class="primary-button form-input">Submit</button>
              </li>
            </ul>
          </form>
        </main>
      </div>
    </div>
    <nav class="nav-bottom">
      <ul class="nav-ul">
        <li><a href="accepted"><svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#333" viewBox="0 0 16 16"><path d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/><path d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg></a></li>
        <li><a href="search"><svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#333" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></a></li>
        <li><a href="messages"><svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#333" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/></svg></a></li>
        <li><a href="notifications"><svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#333" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/></svg></a></li>
        <li><a href="profile"><svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg></a></li>
      </ul>
    </nav>
  </body>
  <script type="text/javascript" src="cdn/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="resources/js/page-basics.js"></script>
</html>
