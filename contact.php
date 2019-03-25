<?php
if($_POST["message"]) {
    mail("tyler.billings00@gmail.com", "Form to email message", $_POST["name"], $_POST["email"], $_POST["message"] "From: tbillings13@gmail.com");
}
?>