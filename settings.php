<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Sequelmark</title>
    <link rel="shortcut icon" href="assets/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/page-basics.css">
    <style media="screen">
      .settings-ul>li:not(:last-child){padding:20px 10px}.settings-ul>li:not(:first-child){border-top:1px solid #ddd}.form-ul{margin-top:20px;max-width:400px}.form-ul>li:not(:first-child){margin-top:15px}.form-ul>li:last-child{display:flex}.input-field{margin-top:5px;padding:6px 12px;width:100%;border-radius:5px}.form-button{padding:5px;border-radius:3px;flex-grow:1}.form-button.neutral-button{margin-right:15px}.sub-ul{margin-top:15px}.sub-ul>li:not(:first-child){margin-top:10px}.sub-ul span{margin-left:10px}.logout{display:block;padding:20px;width:100%;color:#000;text-decoration:none}@media only screen and (min-width:601px){.settings-icon{display:none}.settings-ul>li:last-child{display:none}}@media only screen and (max-width:600px){.page-header{display:flex;justify-content:space-between;align-items:center}.main-content{padding:0}}
    </style>
  </head>
  <body>
    <div class="page-layout">
      <aside class="aside-left">
        <a href="/Humming-Birds" class="branding-image"><img src="assets/branding/sequelmark-logo.svg" alt="Sequelmark" draggable="false"></a>
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
          <h2>Settings</h2>
          <a href="settings" class="settings-icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 16 16"><path d="M9.405 1.05a1.47 1.47 0 0 0-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1a1.47 1.47 0 0 0 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34a1.47 1.47 0 0 0 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1a1.47 1.47 0 0 0 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/></svg>
          </a>
        </header>
        <main class="main-content">
          <ul class="settings-ul">
            <li id="edit-nav">
              <h2>General</h2>
              <form action="#" method="post">
                <ul class="form-ul">
                  <li>
                    <label>
                      <span>Profile picture</span>
                      <input type="file" class="input-field" accept="image/*" required>
                    </label>
                  </li>
                  <li>
                    <label>
                      <span>Email address</span>
                      <input type="email" class="input-field" placeholder="Email address" value="samwalton@outlook.com" required>
                    </label>
                  </li>
                  <li>
                    <label>
                      <span>Phone number</span>
                      <input type="tel" class="input-field" placeholder="Phone number" value="7875754687" required>
                    </label>
                  </li>
                  <li><button type="reset" class="neutral-button form-button">Reset</button><button type="submit" class="primary-button form-button">Save</button></li>
                </ul>
              </form>
            </li>
            <li>
              <h2>Security</h2>
              <form action="#" method="post">
                <ul class="form-ul">
                  <li>
                    <label>
                      <span>Old password</span>
                      <input type="password" class="input-field" placeholder="Old password" required>
                    </label>
                  </li>
                  <li>
                    <label>
                      <span>New password</span>
                      <input type="password" class="input-field" placeholder="Create a password" required>
                    </label>
                  </li>
                  <li>
                    <label>
                      <span>Confirm password</span>
                      <input type="password" class="input-field" placeholder="Confirm password" required>
                    </label>
                  </li>
                  <li><button type="reset" class="neutral-button form-button">Reset</button><button type="submit" class="primary-button form-button">Save</button></li>
                </ul>
              </form>
            </li>
            <li>
              <h2>Notifications</h2>
              <ul class="sub-ul">
                <li><label><input type="checkbox"><span>Promotion and Newsletter</span></label></li>
                <li><label><input type="checkbox"><span>Colleges update</span></label></li>
                <li><label><input type="checkbox"><span>Messages</span></label></li>
                <li><label><input type="checkbox"><span>Push notifications</span></label></li>
              </ul>
            </li>
            <li>
              <h2>Delete Account</h2>
              <form action="#" method="post">
                <ul class="form-ul">
                  <li>
                    <label>
                      <span>Type <b>DELETE</b> below</span>
                      <input type="text" class="input-field" placeholder="DELETE" required>
                    </label>
                  </li>
                  <li>
                    <label>
                      <span>Password</span>
                      <input type="password" class="input-field" placeholder="Password" required>
                    </label>
                  </li>
                  <li><label><input type="checkbox">&emsp;<span>I confirm that once I delete my account. all the data will be erased and cannot be recovered.</span></label></li>
                  <li><button type="reset" class="neutral-button form-button">Reset</button><button type="submit" class="primary-button form-button">Delete</button></li>
                </ul>
              </form>
            </li>
            <li>
              <a href="#" class="logout">Log Out</a>
            </li>
          </ul>
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
