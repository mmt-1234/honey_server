<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link href="https://fonts.google.com/specimen/Archivo">
        <link rel="stylesheet" href="/css/style.css">
        <title></title>
    </head>
    <body class="background">
        <?php
            function logout(){
                session_start();
                session_destroy();
                echo "<script>
                    sessionStorage.clear();
                </script>";
                header('location:/login.php');
            }
        ?>
        <div class="container-fluid">
            <div class="row h-100">
                <div class="col-1">
                    <button style="margin-top: 10px;"onclick="openPopup();"><img src="img/settings.png" width="100vw" height="100vw"> </button>
                </div>
                <div class="col-5 d-flex justify-content-center bg-secondary" id="give_d">
                    <button class="but align-self-center" onclick="location.href='give_data.php">Give Data</button>
                </div>
                <div class="col-5 d-flex justify-content-center bg-light" id="get_d">
                    <button class="but align-self-center bg-secondary text-light" onclick="'get_data.php">Get Data</button>
                </div>
            </div>
        </div>
        <div id="popup">
            <div class="popup_body">
            <div class="set_title">
                <span id="tit">Settings</span>
                <button id="close" onclick="closePopup();">X</button>
            </div><br>
            <div>
                <span>user address:</span><span id="add"></span>
            </div><br>
            <button onclick="<?php  echo logout();?>">Logout</button>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>