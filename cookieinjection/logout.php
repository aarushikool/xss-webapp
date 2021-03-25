<html>
<head>
<title>Cookie injection - logout</title>
</head>
<body>
<h1>Cookie injection - logout</h1>
<?php
unset($_COOKIE[ 'userrole' ]);
setcookie('userrole','', time() - 3600);
header ("Location: cookie.php");
?>
</body>
</html>
