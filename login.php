<?php  
   mysql_connect("localhost","root","") or die("connection serveur impossible");
    mysql_select_db("projet__") or die("base de données introuvable");
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $req=mysql_query("select * from information where email='$email';");
    if(mysql_num_rows($req)>0){
        echo("<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Classroom Platform</title>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f0f0f0;
                    color: #333;
                }
                header {
                    background-color: #4CAF50;
                    color: #fff;
                    text-align: center;
                    padding: 20px 0;
                }
                main {
                    max-width: 800px;
                    margin: 20px auto;
                    margin-top: 100px;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }
                h1, h2, h3 {
                    color: #4CAF50;
                    text-align: center;
                }
                h1{
                    color: #fcfcfc;
                    text-align: center;
                }
                p {
                    color: #666;
                    line-height: 1.6;
                }
                nav {
                    display: flex;
                    justify-content: center;
                    margin-top: 20px;
                }
                a {
                    text-decoration: none;
                    color: #4CAF50;
                    background-color: #fff;
                    padding: 10px 20px;
                    margin: 0 10px;
                    border: 2px solid #4CAF50;
                    border-radius: 5px;
                    transition: background-color 0.3s, color 0.3s;
                }
                a:hover {
                    background-color: #4CAF50;
                    color: #fff;
                }
                .dot {
                    height: 70px;
                    width: 70px;
                    background-color: #4caf50;
                    border-radius: 50%;
                    display: inline-block;
                    margin-top: -95px;
                    float: right;
                    margin-right: 80px;
                  }
                  button{
                    height: 70px;
                    width: 70px;
                    border-radius: 50%;
                    opacity: 0;
                }
                      .dropbtn {
                        background-color: #3498db;
                        color: white;
                        padding: 16px;
                        font-size: 16px;
                        border: none;
                        cursor: pointer;
                      }
                
                      .dropbtn:hover,
                      .dropbtn:focus {
                        background-color: white;
                      }
                
                      .dropdown {
                        position: relative;
                        display: inline-block;
                        margin-top: -95px;
                        float: right;
                        margin-right: 80px;
                      }
                
                      .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f1f1f1;
                        min-width: 150px;
                        overflow: auto;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 1;
                      }
                
                      .dropdown-content a {
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                      }
                
                      .dropdown a:hover {
                        background-color: #ddd;
                      }
                
                      .show {
                        display: block;
                      }
            </style>
        </head>
        <body>
            <header>
                <h1>Classroom Platform</h1>
            </header>
            <img src='OIP.jfif' alt=''class='dot'>
            <div class='dropdown'>
            <button onclick='myFunction()' class='dropbtn' ></button>
      
            <div id='myDropdown' class='dropdown-content'>
              <a href='profile.html'>PROFILE</a>
              <a href='#about'>SETTINGS</a>
              <a href='cnx.html'>LOG OUT</a>
            </div>
          </div>
            <main>
                <h2>Welcome to the Classroom Platform</h2>
                <p>This platform provides a space for students and teachers to interact, share resources, and collaborate on learning activities.</p>
                <h3>Features:</h3>
                <nav>
                    <a href='Announcements.html'>Announcements</a>
                    <a href='Assignments.html'>Assignments</a>
                    <a href='Discussion.html'>Discussion Forums</a>
                    <a href='Resources.html'>Resources</a>
                </nav>
            </main>
            <script>
            /* When the user clicks on the button, 
              toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById('myDropdown').classList.toggle('show');
            }
      
            // Close the dropdown if the user clicks outside of it
            window.onclick = function (event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            };
          </script>
        </body>
        </html>");
    }
    else{
        echo("<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Classroom Platform</title>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f0f0f0;
                    color: #333;
                }
                header {
                    background-color: #4CAF50;
                    color: #fff;
                    text-align: center;
                    padding: 20px 0;
                }
                main {
                    max-width: 800px;
                    margin: 20px auto;
                    margin-top: 100px;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }
                h1, h2, h3 {
                    color: #4CAF50;
                    text-align: center;
                }
                h1{
                    color: #fcfcfc;
                    text-align: center;
                }
                p {
                    color: #666;
                    line-height: 1.6;
                    margin-left: 180px;
                }
                nav {
                    display: flex;
                    justify-content: center;
                    margin-top: 20px;
                }
                a {
                    text-decoration: none;
                    color: #4CAF50;
                    background-color: #fff;
                    padding: 10px 20px;
                    margin: 0 10px;
                    border: 2px solid #4CAF50;
                    border-radius: 5px;
                    transition: background-color 0.3s, color 0.3s;
                }
                a:hover {
                    background-color: #4CAF50;
                    color: #fff;
                }
            </style>
        </head>
        <body>
            <header>
                <h1>Classroom Platform</h1>
            </header>
            <main>
                <h2>Welcome to the Classroom Platform</h2>
                <p> YOU DON'T HAVE AN ACCOUNT , PLEASE SIGN UP FIRST.</p>
                <h3>REGISTER:</h3>
                <nav>
                    <a href='cnx.html'>INSCRIPTION</a>
                </nav>
            </main>
        </body>
        </html>");
    }
    

?>