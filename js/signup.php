
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template � Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
 <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" >
    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
	
	<div class="form-floating">
      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
    </div>
    
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="Floatingpassword" placeholder="Password" >
      <label for="floatingPassword password1">Password</label>
    </div>
    
        <button class="w-45 btn btn-lg btn-primary" type="submit" name="register" value="Create account">Sign up</button>
        <button class="w-45 btn btn-lg btn-primary" type="submit" name="cancel" value="Create account">Cancel</button>
  </form>
</main>


    
  </body>
</html>

<?php
try {
    session_start();
    include 'dbConnection.php';
   
    if(isset($_POST['register']))
    {
        $username=$_POST['name'];
        $password=$_POST['password'];
        $email = $_POST['email'];
        $sql = "INSERT INTO user (username, password, email, role) VALUES ('$username', '$password','$email', 'user')";
        $db1->exec($sql);
        echo "<div> New product is inserted successfully</div>";
       header("location: login.php");
    }
    if(isset($_POST['cancel']))
    {
        header("location: index.php");
    }
            
} 

catch (PDOException $e) {
    echo $e->getMessage();
}

?>


