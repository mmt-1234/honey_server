<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/login.css">
        <title>JLAB Login</title>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.1/socket.io.js"></script>
        <script defer src="js/login.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    </head>
    <body class="bg-dark">
        <div id="login-box">
            <div id="login-title-div">                      
                <h1 id="login-title">Login</h1>
                <div id="login-title-underline"></div>
            </div>
            <div id="login-form-div">
                <form action="/wamp/mariadb.php" id="login-form">                      
                    <div id="login-form-username-div">
                        <p id="login-form-username-text">Username</p>
                        <input type="text" id="login-form-username-input" name="funame" placeholder="Username" class="input-1">
                    </div>
                    <div id="login-form-password-div">
                        <p id="login-form-password-text">Password</p>
                        <input type="password" id="login-form-password-input" name="fpw" placeholder="Password" class="input-1">
                    </div>                                                                                                                                                                                                                                  
                    <div id="login-form-submit-div">
                        <button id="login-form-submit-button" onclick="userLogin()">Login</button><br>
                    </div>
                    </form>
                    <div id="login-form-signup-div">
                                                                                                                                  <p>New user?</p>
                        <button onclick="location.href='/signin.php'" id="login-form-signup-button">Signup</button>
                    </div>
        </div>
    </body>
</html>