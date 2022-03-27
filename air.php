<html>
    <style>
        button{
            float:left;
            color:black;
            background: whitesmoke;
            border-radius: 10px;
            font-size: 30px;
            font-family: 'Poppins',sans-serif;
        }
        h1{
            font-family: 'Nunito Sans',sans-serif;
            font-size: 60px;
            text-align: center;
            transform: translateY(-15%);
        }
        p{
            font-family: 'Poppins',sans-serif;
            font-size: 20px;
            text-align: center;
            transform: translate(5%,-178%);

        }
        hR{
            transform: translateY(-3000%);
        }
        .center{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(75%, -40.5%);
      width: 388px;
      background: white;
      border-radius: 10px;
      box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
      height: 400px;
    }
    .center h1{
      text-align: center;
      padding: 20px 0;
      border-bottom: 1px solid silver;
      font-family: "Poppins",sans-serif;
      font-size: 40px;
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
    .txt_field textarea{
      width: 100%;
      padding: 0 5px;
      height: 100px;
      font-size: 16px;
      border: 0.2px solid block;
      background: none;

    }
textarea::placeholder{
color:#4f666a;
transform: translateY(190%);
opacity: 0.5;
font-family: "Lato",sans-serif;
letter-spacing: 1px;
text-align: center;
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
      background: greenyellow;
      border-radius: 25px;
      font-size: 18px;
      color:black;

      font-family: "Lato",sans-serif;
      cursor: pointer;
      outline: none;
      font-family: "Lato", sans-serif;
      letter-spacing: 1px;
      font-weight: 700;
    }
    input[type="submit"]:hover{
background-color: green;
      transition: .5s;
      font-family: "Lato", sans-serif;
    }
    .signup_link{
      margin: 30px 0;
      text-align: center;
      font-size: 16px;
      color:green;
      font-family: "Lato", sans-serif;
      font-family: 600;
    }
    .signup_link a{
      color: #000000;
      text-decoration: none;
    }
    .signup_link a:hover{
      text-decoration: underline;
    }
body{
  background-color: whitesmoke;
}

label{
  font-family: "Lato", sans-serif;
  font-weight: 500;
  letter-spacing: 1px
}
h3{
    font-family: 'Nunito Sans',sans-serif;
    color:steelblue;
    font-size: 35px;

}
.control{
    font-size: 25px;
    font-family: 'Poppins',sans-serif;
    color:black;
}


        </style>
         <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&family=Poppins:wght@600&display=swap" rel="stylesheet">

<h1>Air Pollution</h1>
<p>All earthers gather around! Let's talk about Air Pollution!</p>
<hr>
<div class = "control">
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "data_SIGHT";
  $connect = mysqli_connect("$servername","$username","$password","$db_name");
  if(!$connect){
  	die("Error" . mysqli_error());

  }
  if($connect){

  }
  $query = "SELECT * FROM feedback";

  $result = $connect->query($query);
  while($row = $result->fetch_assoc()) {

  	if ($row["id"] ==29) {
          echo "<h3>";
          echo $row["name"];
          echo "</h3>";
          echo "<p>";
          echo $row["message"];
          echo "</p>";
  		echo "<hr>";
      }

        	if ($row["id"] ==30) {
                echo "<h3>";
                echo $row["name"];
                echo "</h3>";
                echo "<p>";
                echo $row["message"];
                echo "</p>";
        		echo "<hr>";
            }

              	if ($row["id"] ==31) {
                      echo "<h3>";
                      echo $row["name"];
                      echo "</h3>";
                      echo "<p>";
                      echo $row["message"];
                      echo "</p>";
              		echo "<hr>";
                  }

                    	if ($row["id"] ==32) {
                            echo "<h3>";
                            echo $row["name"];
                            echo "</h3>";
                            echo "<p>";
                            echo $row["message"];
                            echo "</p>";
                    		echo "<hr>";
                        }

                          	if ($row["id"] ==33) {
                                  echo "<h3>";
                                  echo $row["name"];
                                  echo "</h3>";
                                  echo "<p>";
                                  echo $row["message"];
                                  echo "</p>";
                          		echo "<hr>";
                              }
                              if ($row["id"] ==34) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }

                            if ($row["id"] ==35) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      
                            if ($row["id"] ==36) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      
                            if ($row["id"] ==37) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      
                            if ($row["id"] ==38) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      
                            if ($row["id"] ==39) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      
                            if ($row["id"] ==40) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      
                            if ($row["id"] ==41) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      
                            if ($row["id"] ==42) {
                                echo "<h3>";
                                echo $row["name"];
                                echo "</h3>";
                                echo "<p>";
                                echo $row["message"];
                                echo "</p>";
                                echo "<hr>";
                            }
                      

                            }
             ?>         
             </div>        
                      <html>        

<div class="center">
            <h1>Message</h1>
            <form action="message.php" method="POST">
              
              <div class="txt_field">
                <input type="text" required name = "username" id = "username" type = "text">
                <span></span>
                <label>Name</label>
              </div>
              <div class="txt_field">
                <textarea type="text"name = "message" id = "message" required placeholder="Your Message"></textarea>
                <span></span>
      
              </div>
      <div id = "sub">
              <input type = "submit" id = "button"  value = "Send">
      </div>
            </form>
          </div>
                            </body>
</html>
                    