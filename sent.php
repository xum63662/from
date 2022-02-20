<?php
echo '嗨 ' . htmlspecialchars($_POST["user_name"]) . '<br />'.'您的密碼'.  htmlspecialchars($_POST["user_password"]);
?>