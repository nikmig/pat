
<html>
<head>
    <meta>
    <title>  PM Pat'sMate  </title>
    <link href="/static/style.css" type="text/css" rel="stylesheet">   
</head>
<body>
    <div id="header"> 
        <span id="header_logo"> Pat'sMate </span>
        <?php 
        if(isAuth()) {
            echo "<a href='/auth/exit/' id='header_registration'>выйти</a>";
        } elseif (METHOD == "default" ||  METHOD == "exit" || METHOD =="authorization") {
            echo "<a href='/auth/registration/' id='header_registration'>регистрация</a>";
        } else {
            echo "<a href='/main/default/' id='header_registration'>авторизация</a>";
        }
        ?>
        
    </div>
