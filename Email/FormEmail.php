<!DOCTYPE html>
<html>
<head>
    <title>Mail Form</title>
    <link rel="stylesheet" type="text/css" href="Estilo.css">
</head>
<body>
<form method="post">
    <input type="text" placeholder="name" name="name" required="">
    <input type="email" placeholder="email" name="email" required="">
    <input type="text" placeholder="asunto" name="asunto" required="">
    <textarea placeholder="mensaje" name="msg"></textarea>
    <input type="submit">
</form>
<?php
include("Email.php");
?>
</body>
</html>