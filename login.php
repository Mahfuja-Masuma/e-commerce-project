<?php 
  require_once 'config/dbconfig.php';

  // $sql = "INSERT INTO users (name, email, dob, number, student_id, address, blood_group, last_donate, age, password) VALUES ('John', 'john@example.com','05/04/1993','235234524524','uu007', 'uttara', 'o+', '5/5/2020', 22,'222222')";
      
  // if ($conn->query($sql) === TRUE) {
  //   echo "New record created successfully";
  // } else {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }
  if (!empty($_POST) && isset($_POST['login'])) {
    $email        = $_POST['email'];
    $password     = $_POST['password'];

    if ($email == '') {
      echo '<script language="javascript">';
      echo 'alert("email field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    
    if ($password == '') {
      echo '<script language="javascript">';
      echo 'alert("blood_group field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    
    if ( $email != '' && $password != '') {

      $sql = "SELECT * FROM `users` WHERE email='$email' && password='$password' LIMIT 1";
        
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '<script language="javascript">';
          echo 'alert("You are login successfully  ")';  //not showing an alert box.
          echo '</script>';
          if ($row != '') {
            # code...
            header('location:index.php');
          }
        }
      } else {
        echo '<script language="javascript">';
          echo 'alert("password dose not match  ")';  //not showing an alert box.
          echo '</script>';
      }



      $conn->close();
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container">
    <div class="row w-100 d-flex justify-content-center align-items-center main_div">
      <div class="col-12 col-lg-6 col-mid-8 col-xxl-5">
        <div class="card py-3 px-2">
          <p class="text-center my-3 text-capitalize"><span>connect with us</span></p>
          <i class="fa fa-facebook-official" style="font-size:36px"></i>
          <!-- <div class="row mx-auto">
            <div class="col-4">
              <i class='fab fa-facebook-square'></i>

            </div> 
              <div class="col-4">
              <a href="" target="_nitu"><i class="fab fa-twitter"></i></a>


             </div>
             <div class="col-4">
              <a href="" target="_nitu"><i class="fa fa-twitter"></i></a>


             </div> --> 

             <div class="division">
               <div class="row">
                 <div class="col-6 mx-auto mb-4">
                  
             <p class="text-center my-3 text-capitalize"><span>Login Form</span></p>

                 </div>

               </div>

               <form class="myform" action="" method="POST">
                 <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="email">
                 

                 </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" placeholder="password">
                  </div>

                 <div class="row">

                  <div class="Register">
                    
                    <a href="register.php" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Register Form</a>
                  </div>
                  
                  <script>
                  $(document).ready(function(){
                    $('[data-toggle="popover"]').popover();   
                  });
                  </script>
               </div>
                
                <div class="my-3">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg">Login</button>

                </div>
               </form>

             </div>

          </div>
        </div>

      </div>

    </div>
    
  </div>
</body>
</html>
