<?php 
include('./connect.php');

if (isset($_POST['submit'])) {
  # code...

  //data preparation for insertion 
  $first_name = $_POST['first_name'];
  $last_nam = $_POST['last_name'];
  $email = $_POST['email'];
  // $password = $_POST['password'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $phone = $_POST['phone'];
  $created_at = date('Y-m-d H:i:s');

    // $user = "SELECT * FROM users WHERE email = '$email'";
    // $result= mysqli_query($conn, $user);
    // if(mysqli_num_rows($result) >0) {
    //     echo 'This Account Exist';
    // }

    //prepare your querry statement
 $immaculate_querry = "INSERT INTO users(first_name, last_name, email, password,phone, created_at) 
 VALUES ('$first_name', '$last_nam', '$email', '$password', '$phone', '$created_at')";


//perform your querry
 if (! mysqli_query($conn, $immaculate_querry)) {
  # code...
  echo 'there was an error  please try again,';
  echo mysqli_error($conn);
 }
 else {
  header('location:./users.php');
 }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
 <link rel="stylesheet" href="styles.css">
    <title>shetech || Sign Up</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Shetech</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">User List</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
     <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4 col-sm-6 p-4 bg-light rounded shadow">
        <h4 class="text-center mb-3">Sign Up</h4>
        <form action="register.php" method="POST" >
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div data-mdb-input-init class="form-outline">
            <input type="text" id="form3Example1" class="form-control" name="first_name" />
            <label class="form-label" for="form3Example1">First name</label>
          </div>
        </div>
        <div class="col">
          <div data-mdb-input-init class="form-outline">
            <input type="text" id="form3Example2" class="form-control" name="last_name" />
            <label class="form-label" for="form3Example2">Last name</label>
          </div>
        </div>
      </div>

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control" name="email" />
        <label class="form-label" for="form3Example3">Email address</label>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form3Example4" class="form-control" name="password" />
        <label class="form-label" for="form3Example4">Password</label>
      </div>

      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="form3Example4" class="form-control" name="phone" />
        <label class="form-label" for="form3Example4">Phone Number</label>
      </div>

      <!-- Submit button -->
      <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Having an Account?</p>
        <a href="login.php">Login</a>
      </div>
    </form>
      </div>
      </div>
    </main>

    <!-- Bootstrap 5 JS (Make sure this is included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
