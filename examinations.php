<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examinations | Sequelmark</title>
    <link rel="shortcut icon" href="assets/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/style.css">
    <style media="screen">
      .branding-image{
        margin:25px auto;
        width:250px;
      }
      .search-form{
        display:flex;
        margin:auto;
        max-width:400px;
        border:1px solid #DDD;
      }
      .search-form:focus-within{
        border-color:#1565C0;
      }
      .search-input{
        padding:8px 12px;
        border:none;
        flex-grow:1;
      }
      .search-button{
        padding:0 10px;
        background:white;
      }
      .table-container{
        margin-top:50px;
        overflow-x:auto;
      }

      @media only screen and (min-width:601px){
      }

      @media only screen and (max-width:600px){
        .branding-image{
          width:200px;
        }
      }
    </style>
  </head>
  <body>
    <main class="main-content">
      <a href="/sequelmark" class="branding-image"><img src="assets/branding/sequelmark-logo.svg" alt="Sequelmark" draggable="false"></a>
      <form action="#" method="get" class="search-form">
        <input type="text" name="q" class="search-input" spellcheck="false" placeholder="Search..." required>
        <button type="submit" class="search-button"><svg xmlns="http://www.w3.org/2000/svg" height="15" fill="#555" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></button>
      </form>
      <div class="table-container">
        <table class="x-table">
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Developer</th>
            <th>Year</th>
            <th>Knowledge</th>
            <th>Website</th>
          </tr>
          <tr>
            <td>1</td>
            <td>JEE Mains</td>
            <td>National Testing Agency</td>
            <td>2021</td>
            <td>Physics, Chemistry, Maths</td>
            <td><a href="#" target="_blank"></a></td>
          </tr>
        </table>
      </div>
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
