<html>

<head>
<title>Cookie Injection</title>
</head>

<body>
<h1>Cookie Injection</h1>

<?php

if (isset($_COOKIE['userrole']))
{
    echo 'LOGGED IN as: '. $_COOKIE['userrole'] . '<br><br>';
    if ($_COOKIE['userrole'] == 'admin')
    {
        echo '<h3> You have special administrative privileges <h3><br><br>';
    }
    echo '<a href="logout.php">LOGOUT!</a>';
}
else
{
    echo '<!-- Login Form -->';
    echo '<form action="cookie.php" method="get">';
    echo 'Username: <input type="text" name="username"><br>';
    echo 'Password: <input type="password" name="password"><br>';
    echo '<input type="submit">';
    echo '</form>';
    
    $result = 'NOT LOGGED IN';
    if(isset($_GET["username"]))
    if (strlen($_GET['username']) > 0 && strlen($_GET['password']) > 0)
    {
        $credsFile = fopen('credentials.conf','r');
        if ($credsFile)
        {
         while (( $line = fgets($credsFile))!== false)
         $word = explode(' ', $line);
            if ((trim($word[0]) == trim($_GET['username'])) && (trim($word[1]) == trim($_GET['password'])))
            {
                $result = "LOGIN SUCCESSFUL";
                
                if($_GET['username'] == 'admin')
                {
                    setcookie('userrole', 'admin');
                }
                else if ($_GET['username'] == 'user')
                {
                    setcookie('userrole', 'user');
                }
                else if ($_GET['username'] == 'abc')
                {
                    setcookie('userrole', 'user');

                }
                
                header('Refresh: 0');
               
            }
        else
        {
         $result = 'LOGIN FAILED';
        }
        }
        fclose($credsFile);
    }
    echo '<br><br>Result: ' . $result;
}
?>
</body>
</html>