<html>

  <head>
    <style>

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;

    }
    body{
      margin: 0;
      padding: 0;

      height: 100vh;
      overflow: hidden;
    }
    .center{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-45%, -41.5%);
      width: 400px;
      background: white;
      border-radius: 10px;
      box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
      height:520px;
    }
    .center h1{
      text-align: center;
      padding: 20px 0;
      border-bottom: 1px solid silver;
    }
    .center form{
      padding: 0 40px;
      box-sizing: border-box;
    }
    form .txt_field{
      position: relative;
      border-bottom: 2px solid #adadad;
      margin: 30px 0;
    }
    .txt_field input{
      width: 100%;
      padding: 0 5px;
      height: 40px;
      font-size: 16px;
      border: none;
      background: none;
      outline: none;
    }
    .txt_field label{
      position: absolute;
      top: 50%;
      left: 5px;
      color: #adadad;
      transform: translateY(-50%);
      font-size: 16px;
      pointer-events: none;
      transition: .5s;
    }
    .txt_field span::before{
      content: '';
      position: absolute;
      top: 40px;
      left: 0;
      width: 0%;
      height: 2px;
      background:#21201e;
      transition: .5s;
    }
    .txt_field input:focus ~ label,
    .txt_field input:valid ~ label{
      top: -5px;
      color:#21201e;
    }
    .txt_field input:focus ~ span::before,
    .txt_field input:valid ~ span::before{
      width: 100%;
    }
    .pass{
      margin: -5px 0 20px 5px;
      color: #a6a6a6;
      cursor: pointer;
    }
    .pass:hover{
      text-decoration: underline;
    }
    input[type="submit"]{
      width: 100%;
      height: 50px;
      border:none;
      background: olive;
      border-radius: 25px;
      font-size: 18px;
      color:#21201e;

      font-family: "Lato",sans-serif;
      cursor: pointer;
      outline: none;
      font-family: "Lato", sans-serif;
      letter-spacing: 1px;
      font-weight: 700;
    }
    input[type="submit"]:hover{
background-color: olivedrab;
      transition: .5s;
      font-family: "Lato", sans-serif;
    }
    .signup_link{
      margin: 30px 0;
      text-align: center;
      font-size: 16px;
      color: green;
      font-family: "Lato", sans-serif;
      font-family: 600;
            transform: translateY(-80%);
    }
    .signup_link a{
      color: black;
      text-decoration: none;
      transform: translateY(-10%);
    }
    .signup_link a:hover{
      text-decoration: underline;
    }
body{
  background-color: whitesmoke;
}
h1{
  color:black;
  font-family: "Lato", sans-serif;
}
label{
  font-family: "Lato", sans-serif;
  font-weight: 500;
  letter-spacing: 1px
}
#logo1{
  position: absolute;
  stroke-dasharray:1000;
  stroke-dashoffset:1000;
  animation: line-ani 3s ease forwards;
top:12px;
left:10px;
padding-left:0px;
}

@keyframes line-ani{
from{
stroke-dashoffset:1000;
fill:transparent;
}
to{
stroke-dashoffset:0;
fill:#ffd302;

}
}

h1{
font-family: "Creato Display", sans-serif;
    font-size: 30px;
    color:#21201e;

}
ul{
  display:flex;
  float:none;
  padding-left:35%;
padding-bottom: 0.5%;
padding-top: 1.5%;
background-color: #21201e;
}
li{
  display:inline-flex;

  padding-right:25px;
  padding-left: 25px;
  align-items: center;
}
#item{
  font-size:25px;
  text-decoration: none;
font-family: 'Lato', sans-serif;
font-weight: 800;
  vertical-align: middle;
  text-align: center;
  color:white;

}

#item:hover{
  background-color: black;
}
#logo{
  position: absolute;
  stroke-dasharray:1000;
  stroke-dashoffset:1000;
  animation: line-an 3s ease forwards;
top:22px;
left:10px
}

@keyframes line-an{
from{
stroke-dashoffset:1000;
fill:transparent;
}
to{
stroke-dashoffset:0;
fill:#ffd302;
background-color: #21201e;
}
}
.nav img{
	width:62%;
	padding-left:6px;

}
#nav{
		background:#21201e;
}
ul{
vertical-align:middle;
}
#item{
  padding:10px 20px;
  font-weight: 500;
}

#item:hover{
  -moz-border-radius-topleft: 30px;
-moz-border-radius-topright: 30px;
-moz-border-radius-bottomright: 30px;
-moz-border-radius-bottomleft: 30px;
-webkit-border-radius: 30px 30px 30px 30px;
border-radius: 30px 30px 30px 30px;
background-color:#ffd302;
color:black;
}
h2{
  float:left;
  padding-left: 5%;
  font-size: 15px;
  font-weight: 350;
  font-family: "Creato display",sans-serif;
  padding-bottom: 4%;
  transform: translateY(-8%);
  letter-spacing: 1px;
}
#checkbox{
  transform: scale(1.5);
  float: left;
    padding-bottom: 2%;

}
    </style>

    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <link rel="shortcut icon" href="IMG/icon.png" />
  <link href="http://fonts.cdnfonts.com/css/creato-display" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <!--BOLD LATO FONT-->  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

  <body>
    <div id = "#content">

    <div class="center">
      <h1>Register</h1>
      <form action="authenication.php" method="POST">
        <div class="txt_field">
          <input type="text" required type = "email" id = "email" name = "email">
          <span></span>
          <label>Enter your email</label>
        </div>
        <div class="txt_field">
          <input type="text" required name = "username" id = "username">
          <span></span>
          <label>Create a Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name = "password" id = "password" required>
          <span></span>
          <label>Create a Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name = "cpassword" id = "cpassword" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
               

        <input type = "submit" id = "button"  value = "Register" onclick="return myFunc()">
        <div class="signup_link">
          Already a member? <a href="register.php">Login</a>
        </div>
      </form>
    </div>
    <script>
    function myFunc(){
    var password = document.getElementById("password").value;
          var confirmPassword = document.getElementById("cpassword").value;
          if (password != confirmPassword) {
              alert("Passwords do not match.");
              return false;
          }
          return true;
      }
      </script>
  </body>
</html>
