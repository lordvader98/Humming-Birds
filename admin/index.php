<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>College | Sequelmark Admin</title>
    <link rel="shortcut icon" href="../assets/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="resources/css/page-basics.css">
    <style media="screen">
      .input-form{
        margin-top:25px;
      }
      .input-table{
        width:100%;
        border-collapse:collapse;
        table-layout:fixed;
      }
      .input-table th,.input-table td{
        padding:10px;
        border:0.5px solid #DDD;
      }
      .input-table th{
        text-align:left;
      }
      .form-input{
        padding:6px 12px;
        width:100%;
      }
    </style>
  </head>
  <body>
    <div class="page-layout">
      <aside class="aside-left">
        <img src="../assets/branding/sequelmark-light-logo.svg" alt="Sequelmark" class="branding-image" draggable="false">
        <ul class="aside-ul">
          <li><a href="./">College</a></li>
          <li><a href="dashboard">Dashboard</a></li>
          <li><a href="requests">Requests</a></li>
          <li><a href="courses">Courses</a></li>
          <li><a href="messages">Messages</a></li>
          <li><a href="settings">Settings</a></li>
          <li><a href="logout">Log Out</a></li>
        </ul>
      </aside>
      <main class="main-content">
        <h1 class="page-header">College</h1>
        <form class="input-form" action="#" method="post">
          <table class="input-table">
            <tr>
              <th>College Name</th>
              <td><input type="text" class="form-input" spellcheck="false" placeholder="College name" value="Kalinga Institute of Industrial Technology"></td>
            </tr>
            <tr>
              <th>Logo Image</th>
              <td><input type="file" class="form-input"  accept="image/*"></td>
            </tr>
            <tr>
              <th>Type</th>
              <td>
                <select class="form-input">
                  <option>Government</option>
                  <option>Semi-Government</option>
                  <option selected>Private</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>Established</th>
              <td><input type="text" class="form-input" placeholder="Established year" value="1992" readonly></td>
            </tr>
            <tr>
              <th>Campus Address</th>
              <td><input type="text" class="form-input" spellcheck="false" placeholder="Complete address" value="KIIT Road, Patia, Bhubaneswar, Odisha 751024"></td>
            </tr>
            <tr>
              <th>Proof</th>
              <td><input type="file" class="form-input" accept="application/pdf" required></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="primary-button form-input">Save</button></td>
            </tr>
          </table>
        </form>
        <form class="input-form" action="#" method="post">
          <table class="input-table">
            <tr>
              <th>Header Image</th>
              <td><input type="file" class="form-input" accept="image/*"></td>
            </tr>
            <tr>
              <th>Description</th>
              <td><textarea name="name" class="form-input" spellcheck="false" placeholder="Description" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea></td>
            </tr>
            <tr>
              <th>Phone Number</th>
              <td><input type="tel" class="form-input" placeholder="Phone number (including country code)" value="+91 6742725113"></td>
            </tr>
            <tr>
              <th>Email Address</th>
              <td><input type="email" class="form-input" spellcheck="false" placeholder="Email address" value="kiit@kiit.ac.in"></td>
            </tr>
            <tr>
              <th>Website</th>
              <td><input type="text" class="form-input" spellcheck="false" placeholder="Website URL" value="kiit.ac.in"></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="primary-button form-input">Save</button></td>
            </tr>
          </table>
        </form>
      </main>
    </div>
  </body>
</html>
