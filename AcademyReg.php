<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Login Page</title>
</head>

<body>

  <div class="loginform">

  <h4 class="text-center">Academy Registration</h4>

    <div class="container">
      <form action="AcademyPDO.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name</label>
          <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
          <label for="dob" class="form-label">Founded In</label>
          <input type="date" class="form-control" id="exampleInputdob" aria-describedby="emailHelp" name="foundedIn">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword2" class="form-label">Repeat Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
        <div class="mb-3 form-check">
          <a href="Registration.php"> Ceate Account </a>    
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>

    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>