<?php
session_start();
session_destroy();
header("Location: http://localhost/Gym_Managament_ateu-main/frontend/login.html");
exit();
?>
