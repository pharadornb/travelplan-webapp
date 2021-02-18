<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelPlaning</title>
    <link rel="stylesheet" href="css/StyleLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>
<body>

    <form action="login_sus.php" class="card" method="post" target="iframe_target" >
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
    <h2>Sign in</h2> 
    <i id="logo" class="far fa-user-circle"></i>
    <br /> <br /> 
    <input class="textbox" type="text" placeholder="Username" name = "username">
    <input class="textbox" type="password" placeholder="Password" name = "password">
    <input class="btn-submit" type="submit" value="Login">

    <p>Don't have account?<a href="signup.php">Sign up</a></p>
    </form>
</body>
</html>