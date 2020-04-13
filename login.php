<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Title Page -->  
    <title>Login</title>
 
    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
    <div id="container">
        <!-- Añade accion y cambia de POST/ GET -->
        <form action="t5.php" method="POST" name="form1">
            <!-- Username -->
            <label for="name">Username:</label>
            <input type="name" name="name"></br>
            <!-- Password -->
            <label for="username">Password:</label>
            <input type="password" name="pass"></br>
            <p><a href="#">Forgot your password?</a>
            
            <div id="lower">
                <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label></br>
                <!-- Submit Button -->
                <input type="submit" value="Login">
            </div>
        </form>       
    </div>
</body>
</html>
