<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style1.css">

</head>
<body>

<div id="login-form-wrap">
  <h2>Register</h2>
  <form id="login-form" action=insert.php method="post">
    <p>
    <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Submit">
    </p>
  </form>
  <div id="create-account-wrap">
  </div>
</div>

  
</body>
</html>
