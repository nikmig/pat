<?php
unset($_SESSION["id"]);
session_destroy();
display([], "main/tmp_default.php");
exit();
