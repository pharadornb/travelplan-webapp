<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0"> <!-- корректное отображение на мобильных устройствах, отмена масштабирования -->
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    
    <title>TravelPlaning</title>


    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom css -->
    
    <link rel="stylesheet" href="css/StyleSignup.css">
  </head>

  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
        
            <form action="signup_sus.php" class="register" method="POST">
              <h1>Sign Up</h1>
              <div class="error" id="mail-error">
              <i id="logo" class="far fa-user-circle"></i>
                Incorrect Username
              </div>
              <div class="form-row">
                <input type="text" class="form-control"  id="fullname" name="fullname" placeholder="FullName" required>
              </div>
              <div class="form-row">
                <input type="text" class="form-control" id="username" name="username" placeholder="UserName" required>
              </div>
            
              <div class="form-row">
                <input type="password" class="form-control" id="password"  name="password"placeholder="Password" required>
              </div>
              <div class="form-row">
                <input type="email" class="form-control" id="email"  name="email"placeholder="Email" required>
              </div>
            

              <br />
              <button type="submit" class="btn btn-primary">SIGN UP</button>
              <a href="login.php">Back</a>
     
            </form>

           
          </div>
      </div>
    </div>
    

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="js/index.js"></script>
  </body>
</html>