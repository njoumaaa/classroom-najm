<?php  
   mysql_connect("localhost","root","") or die("connection serveur impossible");
    mysql_select_db("projet__") or die("base de données introuvable");
    $email=$_POST["email"];
    $name=$_POST["name"];
    $tel=$_POST["tel"];
    $pass=$_POST["password"];
    $req=mysql_query("select * from information where email='$email';");
    if(mysql_num_rows($req)==0)
    {
        mysql_query("insert into information values('$name','$email','$tel','$pass');");
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
                    margin-left: 300px;
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
                <p> NOW LOGIN PLEASE.</p>
                <h3>REGISTER:</h3>
                <nav>
                    <a href='cnx.html'>INSCRIPTION</a>
                </nav>
            </main>
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
                    margin-left: 300px;
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
                <p> PLEASE TRY AGAIN.</p>
                <h3>REGISTER:</h3>
                <nav>
                    <a href='cnx.html'>INSCRIPTION</a>
                </nav>
            </main>
        </body>
        </html>");
    }
?>