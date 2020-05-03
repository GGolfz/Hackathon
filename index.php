<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamaraidee.com Login Page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
            <div class="navBlock">
                <ul>
                    <li id="listLeft">Tamaraidees.com</li>
                    <li id="listRight">
                        <button>Sign up</button>
                    </li>
                    <li id="listRight">
                        <button>Login</button>
                    </li>
                    <li id="listRight">
                        <input type="text" placeholder="Search">
                    </li>
                </ul> 
            </div>
        </div>
    <form method="POST" action="login.php">
<div class="content">
        <div class="box">
            <div class="title2">
                Tumaraidee.com
            </div>
            <div>
                <img width="126px" src="logo.svg">
            </div>
            <div style="margin-bottom: 5%;">
                <label class="text2">Username</label><br>
                <input class="text" name="Username" type="text">
            </div>
            <div style="margin-bottom: 5%;">
                <label class="text2">Password</label><br>
                <input class="text" name="Password" type="password">
            </div>
            <div style="margin-bottom: 5%;">
                <input id="button1" type="submit" value="Login">
            </div>
        </div>  
    </div>
</form>
</body>
</html>
