<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qneiform Form</title>
    <link rel="stylesheet" type="text/css" href="form_styles.css">
</head>
<body>
    <header>
        <nav class="navbar-desktop">
            <div class="logo-container">
                <a href="../index.html"><img src="../media/SVG/qneiform_logo_final_Logo-Typo-White.svg" alt="Logo"></a>
            </div>
        </nav>
   </header>

    <div  class="container" id="container">

        <h2>Join waiting list</h2>
        
        <form  action="email.php" name="contactFormEmail" method="post">
                 
                <input type="text" id="name" name="name" required placeholder="Name"> 

                <input type="email" id="email" name="email" required placeholder="E-mail address">

                <input id="submit" type="submit" name="send" value="Submit">

        </form>

        <a href="../index.html">
            <h3><- Back to Home page</h3>
        </a>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $name = $_POST["name"];
            $email = $_POST["email"];
        
            // Compose email
            $to = "bebeqkacqkac@gmail.com.com";
            $subject = "New Form Submission";
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "Content-type: text/html\r\n";
        
            $body = "<p><strong>Name:</strong> $name</p>";
            $body .= "<p><strong>Email:</strong> $email</p>";
        
            // Send email
            $mailSuccess = mail($to, $subject, $body, $headers);
        
            // Check if the email was sent successfully
            if ($mailSuccess) {
                echo "Thank you for your submission!";
            } else {
                echo "Error sending the email. Please try again later.";
            }
        }
        ?>

        <style>
            /* Variables */
:root {
  --blue-color: #0071F5;
  --white-color: #F5F5F5;
  --grey-color:  #b6b4b4;
  --light-blue: #cfd8e2;
  --light-blue-gradient: #8faccc;
  --dark-blue-color: #004AA0;
  --background-color: #030C1D;

  --navbar-height: 8vh;
  --navbar-height-mobile: 60px;
}

/* Header Styles */

header{
  background-color: var(--background-color);
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.22), 0 10px 10px rgba(0, 0, 0, 0.22);
  height: var(--navbar-height);
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 3;
  padding: 0;
}

a{
    text-decoration: none;  
}

nav {    
  display: flex;
  justify-content: center;
  align-items: center;
  height: var(--navbar-height);

}

.logo-container {
  position: absolute;
  left: 0%;
}

.logo-container img{
  padding: 0;
  margin: 0;
  height: var(--navbar-height);
}



@media screen and (max-width: 768px) {


  nav {
      height: var(--navbar-height-mobile);
  }
  
  .logo-container img{
      height: var(--navbar-height-mobile);
  }

  body {
      margin-top: var(--navbar-height-mobile);
  }
  
  header{
      height: var(--navbar-height-mobile);    
  }

  #menu-desktop a {
      display: none;}





}




body {
    background-color: var(--background-color);
    background-image: url(../media/background_shapes_zoomed.png);
    background-size: cover;
    /*background: radial-gradient(ellipse at bottom, #07111d 0%, #020307 100%);*/
    overflow-x: hidden;
    min-height: 100vh;
    overflow-y: hidden;
    color: rgb(255, 255, 255);
    font-family: 'Urbanist', sans-serif;
    margin: 0;
}

h2{
  font-size: 1.8vw;
  color: var(--white-color);
  text-align: center;
  padding: 0;
  margin: 1vw;
  margin-top: 0;
}

h3{
  font-size: 0.8vw;
  color: var(--blue-color);
  text-align: left;
  padding: 0;
  margin: 1vw;
  margin-top: 0;
}

h3:hover{
  color: var(--dark-blue-color);

}
  

.input-row{
  display: flex;
  justify-content: baseline;
  align-items: center;
}


.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 25vw;
    padding: 2vw;
    border-radius: 1vw;
    background-color: #030c1da9;
    z-index: 2;
}

img{
    display: block;
    margin: 0 auto; 
    max-width: 100%;
    height: auto;
    width: 16vw;
    padding: 1.5vw;
}


form {

    display: flex;
    flex-direction: column;
    padding: 1vw;
}


input {
    width: 100%;
    padding: 0.8vw;
    margin-bottom: 1vw;
    box-sizing: border-box;
    border: 1px solid #868686a9;
    background-color: #0a1c38e5;
    border-radius: 0.5vw;
    color: white;
}

#submit{
  background-color: #024eac;
}

#submit:hover{
  background-color: #1b61b8;
}

button {
    background-color: #024eac;
    color:  rgb(173, 173, 173);
    padding: 0.8vw;

    border: none;
    border-radius: 0.5vw;
    cursor: pointer;
    font-size: 0.7vw;
}

button:hover {
    background-color: #1b61b8;
}

#result {
    font-size: 0.9vw;
    padding: 0.4vw;
    color: #b31919;
    font-weight: 400;
}

.hidden {
    display: none;
}

@media (max-width: 767px) {
    .container {
        width: 90vw;
        border-radius: 2vw;
    }

    img{
        width: 70vw;
    }

    button {
        border-radius: 2vw;
        font-size: 3vw;
        padding: 3vw;
    }
    input {
        padding: 2vw;
        margin-bottom: 2vw;
        border-radius: 2vw;
    }
    #result {
      font-size: 3vw;
      padding: 0.4vw;
      color: #b31919;
      font-weight: 600;
  }
}


        </style>

    
</body>
</html>
