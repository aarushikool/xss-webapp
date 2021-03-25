<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Contact Form</title>
</head>
<body>
<link type="text/css" rel="stylesheet" href="style.css">
    <header class="main">
        
    </header>
    <section class="main">
    <form method="get"> 
    <h1>Contact Form</h1>
       <label>Your Name:</label>
       <input name="name">
       <label>Your Email:</label>
       <input name="email" type="email">
       <label>Your Message:</label>
       <textarea name="message"></textarea>
       <input id="submit" name="submit" type="submit" value="SUBMIT">  
</form> 

<?php
if ($_GET)
{
echo "<br>";
echo 'Your Input:';
echo "<br>";
echo $_GET["name"];
echo "<br>";
echo $_GET["email"];
echo "<br>";
echo $_GET["message"];
}
?>

    </section>
</body>
</html> 


