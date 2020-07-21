<!DOCTYPE html>
<html>
<head>
    <title>Across Items Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <br>
      <div class="row justify-content-md-center">
          <div class="col-md-4 col-md-offset-4">
              <form action="<?php echo site_url('Login/auth'); ?>" method="POST"> 
                  <h2>Please sign in</h2>
                <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="username" class="form-control" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>
  </div> 
</body>
</html>