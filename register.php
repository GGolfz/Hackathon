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
    <div class="block">
    <div class="container">
            <div class="navBlock">
                <ul>
                    <li id="listLeft">
                        <img src="logo.svg" height="100%" style="margin-right:4%">
                        <label class="title1" style="margin-right:4%">Tamaraidees.com</label>
                        <input id="button2" type="submit" value="Article">
                    </li>
                    <li id="listRight">
                        <input type="text" placeholder="Search" style="margin-right:4%">
                        <input id="button2" type="submit" value="Log In"style="margin-right:1%">
                        <input id="button2" type="submit" value="Sign Up"style="margin-right:1%">
                    </li>
                </ul> 
            </div>
        </div>
    <form method="POST" action="regis.php">
        <div class="content">
        <div class="box">
            <div id="page1">
            <div class="title2">
                Sign Up
            </div>
            <div style="margin-bottom: 5%;">
                <label class="text2">Name</label><br>
                <input class="text" name="Name" type="text">
            </div>
            <div style="margin-bottom: 5%;">
                <label class="text2">Telephone Number</label><br>
                <input class="text" name="Tel" type="text">
            </div>
            <div style="margin-bottom: 5%;">
                <label class="text2">Email</label><br>
                <input class="text" name="Email" type="text">
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
                <input id="button1" type="button" onclick="next()" value="Next">
            </div>
            </div>
            <div id="page2">
                <div class="title2">
                    Page2
                </div>
                <div style="margin-bottom: 5%;">
                    <label class="text2">Name</label><br>
                    <input class="text" name="CardName" type="text">
                </div>
                <div style="margin-bottom: 5%;">
                    <label class="text2">Card No.</label><br>
                    <input class="text" name="CardNo" type="text">
                </div>
                <div style="margin-bottom: 5%;">
                    <label class="text2">Credit Card Expiry</label><br>
                    <input class="text" name="Expired" type="text">
                </div>
                <div style="margin-bottom: 5%;">
                    <label class="text2">Credit Card PIN</label><br>
                    <input class="text" name="Pin" type="text">
                </div>
                <div style="margin-bottom: 5%;">
                    <input id="button1" type="button" onclick="back()" value="Back">
                </div>
                <div style="margin-bottom: 5%;">
                    <input id="check1" type="checkbox"> Hi
                </div>
                <div style="margin-bottom: 5%;">
                    <input id="sentform" type="submit" style="display:none" value="Sign Up">
                    <input id="button1" type="button" onclick="sent()" value="Sign Up">
                </div>
            </div>
        </div>  
    </div>

</form>
</div>
</body>
</html>
<script>
const next = ()=>{
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "block";
}
const back = ()=>{
    document.getElementById("page1").style.display = "block";
    document.getElementById("page2").style.display = "none";
}
const sent =()=>{
    if(document.getElementById("check1").values){
        console.log("true");
        document.getElementById("sentform").click();
    }
}
</script>