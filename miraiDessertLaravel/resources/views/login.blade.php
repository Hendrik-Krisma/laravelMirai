<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <title>Mirai Login Page</title>
  </head>
  <body>
    <form action ="sv_login.php" method="post">
    <div class="input">
      <h1>Login Admin Mirai</h1>
      <div class="box-input">
        <i class="fas fa-user"></i>
        <input type="text" name="username" id="username" placeholder="Username" />
      </div>
      <div class="box-input">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" />
      </div>
      <button type="submit" name="login" class="btn-input">Login</button>
      <!--<div class="button">
        <p>Belum memiliki akun? <a href="register.php">Register disini</a></p>
      </div> -->
    </div>
</form>
  </body>
</html>