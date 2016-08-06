<?php 
$attention = $_SESSION["error_age"];
/*echo "<pre>";
var_dump($_SESSION);
echo "</pre>";*/

?>

  <div id="registration">
    
    <form method="POST" action="/auth/registration">
        <span>логин </span><input id="input" required type="text" name="login"><br><br>
        <span>имя </span><input id="input" type="text" name="surname"><br><br>
        <span>пол </span>
        <select id="selectStyle" name="sex"> 
          <option value="1">мужчина</option> 
          <option value="0">женщина</option> 
        </select><br><br>  
        <span style="color: red; font-size: 1em;"><?php echo $attention ?></span>
        <span>дата рождения </span><input type="text" id="input" name="age" placeholder="2001-01-31"><br><br>
        <span>почта </span><input type="email" id="input" name="email"><br><br>
        <span>страна </span><input type="text" id="input" name="country"><br><br>
        <span>населенный пункт </span><input type="text" id="input" name="city"><br><br>
        <span>пароль </span><input required  type="password" id="input" name="password"><br><br>
        <input  width="100" id="submit" type="submit" name="go" value="  регистрация  "><br><br>
    </form>
  </div>
