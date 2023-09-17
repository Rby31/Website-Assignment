<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Login Form with validation Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style1.css">

</head>
<body>

<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" action=select.php method="post">
    <p>
    <input type="email" id="email" name="email" placeholder="Email " required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="register.php">Create Account</a><p>
  </div>
</div>

  
</body>
</html>
