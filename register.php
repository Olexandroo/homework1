<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="css/style_admin.css" rel="stylesheet">
</head>

<body>
<?php
echo $_POST['login'];
?>

<div>
    <h1>Register</h1>
    <form method="POST" action="">
        <input type="text" name="login" placeholder="login" required="required"/>
        <input type="password" name="password" placeholder="password" required="required"/>
        <button type="submit" name="submit_btn" class="btn">Login</button>
    </form>
</div>

</body>
</html>