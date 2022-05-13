<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">
  </head>
  <body>
    <div class="container mt-4" id="regis" style=" max-width: 950px; background-color: rgba(230, 230, 230); padding: 30px; position: fixed; top: 45%;left: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
      <div class="row">
        <div class="col">
          <h1>Sign up</h1>
          <form  action="validation-form/check.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
            <button class="btn btn-success"  type="submit">SIGN UP</button>
          </form>
        </div>
        <div class="col">
          <h1>Sign in</h1>
          <form  action="validation-form\auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
            <button class="btn btn-success"  type="submit">SIGN IN</button>
          </form>
        </div>
      </div>

    </div>


  </body>
</html>
