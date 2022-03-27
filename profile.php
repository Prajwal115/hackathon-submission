<?php
session_start();
if(!isset($_SESSION["username"])){
header("location:register.php");
}
?>
<html>
    <style>
        h1{
            font-size: 40px;
        text-align: center;
        color:black;
        font-family: 'Nunito Sans',sans-serif;   
        }
        p{
            font-size: 20px;
            text-align: center;
            font-family: 'Poppins',sans-serif;
            transform: translateY(-25%);
        }
        .navigation{
    float:right;
transform: translateY(35%);
}
.navigation a{
    padding-left: 20px;
    padding-right: 20px;
    padding-top:7px;
    padding-bottom: 7px;
    text-decoration: none;
    background-color: hsl(0, 25%, 53%);
    color:white;
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    border-radius: 25px;
}
#logo{
    width:15%;
    transform: translateY(-20%);
}
.navigation a:hover{
    background-color: hsl(172, 25%, 53%);
    transition: 0.5s ease-in-out ;
}
#one{
    height:250px;
    width:250px;
    font-size: 30px;
    font-family: 'Nunito sans',sans-serif;
    background-color: #4bb468;
    border:none;
    border-radius: 10px;
    color:white;
    margin-right: 10px;
    margin-left: 10px;
}
#two{
    height:250px;
    width:250px;
    font-size: 30px;
    font-family: 'Nunito sans',sans-serif;
    background-color: steelblue;
    border:none;
    border-radius: 10px;
    color:white;
    margin-right: 10px;
    margin-left: 10px;
}
#three{
    height:250px;
    width:250px;
    font-size: 30px;
    font-family: 'Nunito sans',sans-serif;
    background-color: yellowgreen;
    border:none;
    border-radius: 10px;
    color:black;
    margin-right: 10px;
    margin-left: 10px;
}
#four{
    height:250px;
    width:250px;
    font-size: 30px;
    font-family: 'Nunito sans',sans-serif;
    background-color: burlywood;
    border:none;
    border-radius: 10px;
    color:black;
    margin-right: 5x;
    margin-left: 10px;
}

#one:hover{
    background-color: #6c7193;
        transition: 1s ease-in;
}
#two:hover{
    background-color: #6c7193;
        transition: 1s ease-in;
}
#three:hover{
    background-color: #6c7193;
        transition: 1s ease-in;
}
#four:hover{
    background-color: #6c7193;
        transition: 1s ease-in;
}
#five:hover{
    background-color: #6c7193;
        transition: 1s ease-in;
}




    </style>
     <!-- Fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&family=Poppins:wght@600&display=swap" rel="stylesheet">
<div class = "content">
    <!--Navigation Bar over here-->
    <a href = "index.php">
    <img id = "logo" src = "IMG/LOGO.png" alt = "LOGO">
</a>
    <div class="navigation">

    
    <a href = "index.php">Home</a>
        <a href = "test.html">Problem</a>
        <a href = "idea.html">Idea</a>
    <a href = "signup.php">Signup</a>
    <a href = "contact.html">Contact</a>
</div> 
<h1>Join different groups here!</h1>
<p>As of now, the options are limited - we are planning to add more soon ;)</p>
<a href = "climate.php">
<button id = 'one' >Climate Change</button>
</a>
<a href = "water.php">
<button id = 'two' >Water Pollution</button>
</a>
<a href = "air.php">
<button id = 'three' >Air Pollution</button>
</a>
<a href = "def.php">
<button id = 'four' >Deforestation</button>
</a>


</html>