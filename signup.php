<?php 
session_start();      
	include("connect.php");			
        
    if (!isset($_SESSION["Username"])){
    ?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="cropped-group-5-1-2.png" type="image/icon type">

<head>
    <title>Registration</title>
    <style>
        nav {
            background-color: rgba(246, 145, 145, 0.5) !important;
        }
        #submitform{
            display:none;
        }
        #phase2 {
            display: none;
        }

        .title1 {
            font-style: normal !important;
            font-weight: bold !important;
            font-size: 1.5em !important;
            line-height: 1.5;
            text-overflow: ellipsis !important;
            white-space: nowrap !important;
            background: -webkit-linear-gradient(rgba(194, 24, 91, 0.3),
                    rgba(194, 24, 91, 0.5),
                    rgba(194, 24, 91, 0.9),
                    rgba(194, 24, 91, 0.5),
                    rgba(194, 24, 91, 0.3));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .navBut {
            color: white !important;
            font-family: "Quicksand", sans-serif !important;
            font-size: 20px !important;
            background: #e58181 !important;
            border-radius: 15px !important;
            box-shadow: 3px 3px #f8c8c8;
        }

        input#search {
            background: url(search--v2.png) no-repeat scroll 5px 5px;
            background-size: 30px;
            border-radius: 50px;
            border: rgba(208, 208, 208, 0.92) solid;
            border-width: 1px;
            font-size: 16px;
            padding-left: 40px;
            box-shadow: none;
            -webkit-transition-duration: 0.2s;
            transition-duration: 0.1s;
            background-color: white;
        }

        .nextbut {
            text-rendering: unset;
        }
    </style>
</head>

<body>

    <nav class="navbar  navbar-expand-lg navbar-light">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight align-self-center mt-3"><img src="cropped-group-5-1-2.png" width="45px"></div>
            <div class="p-2 bd-highlight align-self-center mt-3">
                <h2>Tamaraidees.com</h2>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <button class="btn text-white my-2 my-sm-0 m-1 navBut"
                            type="submit">Article</button></a>
                </li>
                <li class="nav-item">

                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
                </form>
                <a class="nav-link" href="signin.php"> <button class="btn navBut my-2 my-sm-0 m-1" type="submit">Login</button></a>
                <a class="nav-link" href="#"> <button class="btn navBut my-2 my-sm-0 m-1" type="submit">Sign Up</button></a>
            
        </div>
    </nav>

    <div class="container mt-5 p-5" id="phase1">
        <div class="card">
            <div class="card-body text-start ml-5 mr-5">
                <h1>Sign Up</h1><br>
                <form method="POST" action="regis.php">
                    <div class="row mt-3">
                        <div class="col">
                            <label for="firstName">First Name</label>
                            <input type="text" name="Firstname" class="form-control" placeholder="MR.XXXX" id="firstName">
                        </div>
                        <div class="col">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="Lastname" class="form-control" placeholder="XXXX" id="lastName">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="tel">Telephone Number</label>
                            <input type="text" name="Tel" class="form-control" placeholder="0123456789" id="tel">
                        </div>
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="text" name="Email" class="form-control" placeholder="email@mail.com" id="email">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="username">Username</label>
                            <input type="text" name="Username" class="form-control" id="username">
                        </div>
                        <div class="col">
                            <label for="password">Password</label>
                            <input type="password" name="Password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <input style="width:100px" class="btn nextbut navBut" onclick="nextPage()" value="Next">
                    </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col text-center">
                        <a href="#"><img src="Facebook_Logo_(2019).png" width="50px"></a>
                    </div>
                    <div class="col text-center">
                        <a href="#"><img src="google-logo-icon-PNG-Transparent-Background-300x300.png" width="50px"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-5" id="phase2">
        <div class="card">
            <div class="card-body text-start ml-5 mr-5">
                <h1>Credit Information</h1><br>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="Name">Name</label>
                            <input type="text" name="CardName" class="form-control" placeholder="MR.XXXX XXXX" id="Name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="cardNo">Card No.</label>
                            <input type="text" name="CardNo" class="form-control" placeholder="XXXXXXXXXXXXX" id="cardNo">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="expired">Credit Card Expiry Date</label>
                            <input type="text" name="Expired"class="form-control" id="expired" placeholder="00/00">
                        </div>
                        <div class="col">
                            <label for="cvv">Credit Card PIN (CVV)</label>
                            <input type="text" name="Pin" class="form-control" id="cvv">
                        </div>
                    </div>
                    <div class="row mt-3 ml-4">
                        <input class="form-check-input" type="checkbox" value="false" id="agree">
                        <label class="form-check-label" for="agree">
                            I agree with term and condition
                        </label>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <input style="width:100px" onclick="backPage()" class="nextbut btn navBut mr-2" value="Back">
                        <input style="width:100px" class="nextbut btn navBut" onclick="sent()" value="Sign up">
                        <button type="submit" id="submitform" class="btn navBut ml-2">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function sent(){
            if(
            document.getElementById("firstName").value !== "" &&
            document.getElementById("lastName").value !== "" &&
            document.getElementById("tel").value !== "" &&
            document.getElementById("email").value !== "" &&
            document.getElementById("username").value !== "" &&
            document.getElementById("password").value !== "" &&
            document.getElementById("Name").value !== "" &&
            document.getElementById("cardNo").value !== "" &&
            document.getElementById("expired").value !== "" &&
            document.getElementById("cvv").value !== "" &&
            document.getElementById("agree").checked
            ){
                document.getElementById("submitform").click();
            }
        }
        function backPage() {
            document.getElementById("phase2").style.display = "none";
            document.getElementById("phase1").style.display = "block";

        }
        function nextPage() {
            document.getElementById("phase1").style.display = "none";
            document.getElementById("phase2").style.display = "block";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
<?php }else{
        
        Header("Location: index.php"); 
        }?>