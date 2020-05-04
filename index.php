<?php 
session_start();      
	include("connect.php");			
        
    if (isset($_SESSION["Username"])){
    ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="cropped-group-5-1-2.png" type="image/icon type">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
        .content{
    display:flex;
    align-items: center;
    justify-content: center;
    height: 85vh;
}
.box1{
    width:380px;
    height: auto;
    border-radius: 15px;
    max-width: 450px;
    background: #FFD8D8;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#page1{
    display: block;
}
#page2{
    display:none;
}
.title1{
    font-style: normal !important;
  font-weight: bold !important;
  font-size: 1.5em !important;
  line-height: 1.5;
  text-overflow: ellipsis !important;
  white-space: nowrap !important;
  background: -webkit-linear-gradient(
    rgba(194, 24, 91, 0.3),
    rgba(194, 24, 91, 0.5),
    rgba(194, 24, 91, 0.9),
    rgba(194, 24, 91, 0.5),
    rgba(194, 24, 91, 0.3)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.text2{
    font-size:16px;
    font-weight: bold;
}
.text{
    border-radius: 15px;
    border: rgba(208, 208, 208, 0.92) solid;
    border-width: 1px;
    width:250px;
    height: 30px;
    font-size:16px;
    box-shadow: none;
    -webkit-transition-duration: 0.2s; 
    transition-duration: 0.1s;
    margin-top:5px;
    padding-left:12px;
}
#button1{
  color: white !important;
  font-family: "Quicksand", sans-serif !important;
  font-size: 24px !important;
  padding:5% 20%;
  background: #e58181 !important;
  border-radius: 15px !important;
  box-shadow: 3px 3px #f8c8c8;
}
#button2{
  color: white !important;
  font-family: "Quicksand", sans-serif !important;
  font-size: 24px !important;
  background: #e58181 !important;
  border-radius: 15px !important;
  box-shadow: 3px 3px #f8c8c8;
}
.title2 {
    font-style: normal !important;
    font-weight: bold !important;
    font-size: 2.6em !important;
    line-height: 2;
    overflow: hidden !important;
    overflow-x: hidden !important;
    overflow-y: hidden !important;
    text-overflow: ellipsis !important;
    white-space: nowrap !important;
    color: #8D5F5F;
  }
body, html{
  font-family: "Quicksand", sans-serif !important;
  width: 100%;
  height: 100%;
  margin:0;
  padding: 0;
}

.container {
    margin: 0;
    width: 100%;
    background-color: #FFD8D8;
}

.navBlock {
    margin: 0;
    line-height: 1.5;
    overflow: hidden;
    overflow-y: hidden;
    overflow-x: hidden;
    background-color: #FFD8D8;
}


ul {
    list-style-type: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:0;
}

li#listLeft {
    text-decoration: none;
    float: left;
    margin: 0 2%;
    padding: 0% 1.5% ;
    font-size: 1.5em;
    display:flex;
    align-items: center;
}


li#listRight {
    text-decoration: none;
    margin: 0 2%;
    padding: 0% 1.5%;
    display:flex;
    justify-items: end;
    align-items: center;
}

#title {
    font-size: 1.2em;
    color: red;
}

button {
    font-size: 1.2em;
}

        nav {
            background-color: rgba(246, 145, 145, 0.5) !important;
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
        #button3{
            padding: 1% 2%;
            background: transparent;
            border: solid white 3px;
            color: white;
            width: 300px;
            text-align: center;
            font-size:24px;
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

        #nextbut {
            text-rendering: unset;
        }
        .banner{
            background: url("banner.png") ;
            height:596px !important;
            color:white;
            padding-top:100px;
        }
        .newcontent{
            display:flex;
            flex-direction:column;
            justify-content:space-evenly;
        }
        .row1{
            display:flex;
            align-items:center;
            margin:5% 15%;
        }
    </style>
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
                <a class="nav-link" href="#"> <button class="btn navBut my-2 my-sm-0 m-1" type="submit">me</button></a>
                <a class="nav-link" href="logout.php"> <button class="btn navBut my-2 my-sm-0 m-1" type="submit">logout</button></a>
        </div>
    </nav>
    <div class="banner" width="1440px">
        <div style="margin-left:137px">
        <div style="font-size:50px; font-weight:bold;">
        Do you bored during Quarantine?
    </div>
    <div style="margin:20px 0px;font-size:40px; font-weight:bold;">
        Learning on your life-skill, anytime. <br>
        7-Days Free trial.

    </div>
    <a href="signup.php"><div id="button3">JOIN FOR FREE</div></a>
    </div>

    </div>
    <div class="newcontent">
        <div class="row1">
            <div class="col1">
            TOP Quality<br>
            Learning From Skilled Lecturer<br>
with Real Experience<br>
Adaptation Knowledge

    </div>
            <div class="col1">
                <img src="pic2.png">
    </div>
    </div>
    <div class="row1">
    <div class="col1">
        <img src="pic3.png">
    </div>
            <div class="col1">
            ACCESSIBLE<br>
            24 Hour access<br>
            Offline learning<br>
    </div>
    </div>
    <div class="row1">
    <div class="col1">
    Discussion board<br>
    Getting Struck with your problems<br>
    Find your course friends

    </div>
            <div class="col1">
                <img src="pic1.png">
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</html>
    <?php }else{
        
	Header("Location: signin.php"); 
    }
    ?>