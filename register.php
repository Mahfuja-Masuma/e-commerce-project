<?php 
  require_once 'config/dbconfig.php';

  // $sql = "INSERT INTO users (name, email, dob, number, student_id, address, blood_group, last_donate, age, password) VALUES ('John', 'john@example.com','05/04/1993','235234524524','uu007', 'uttara', 'o+', '5/5/2020', 22,'222222')";
      
  // if ($conn->query($sql) === TRUE) {
  //   echo "New record created successfully";
  // } else {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }
  if (!empty($_POST) && isset($_POST['submit'])) {
    $name         = $_POST['name'];
    $email        = $_POST['email'];
    $dob          = $_POST['dob'];
    $number       = $_POST['number'];
    $student_id   = $_POST['student_id'];
    $address      = $_POST['address'];
    $blood_group  = $_POST['blood_group'];
    $last_donate  = $_POST['last_donate'];
    $age          = $_POST['age'];
    $password     = $_POST['password'];

    if ($name == '') {
      echo '<script language="javascript">';
      echo 'alert("Name field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    if ($email == '') {
      echo '<script language="javascript">';
      echo 'alert("email field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    if ($dob == '') {
      echo '<script language="javascript">';
      echo 'alert("dob field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    if ($number == '') {
      echo '<script language="javascript">';
      echo 'alert("number field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    if ($student_id == '') {
      echo '<script language="javascript">';
      echo 'alert("student_id field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    if ($blood_group == '') {
      echo '<script language="javascript">';
      echo 'alert("blood_group field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    if ($last_donate == '') {
      echo '<script language="javascript">';
      echo 'alert("blood_group field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    if ($password == '') {
      echo '<script language="javascript">';
      echo 'alert("blood_group field is requeued ")';  //not showing an alert box.
      echo '</script>';
    }
    
    if ($name != '' && $student_id != '' && $address != '' && $blood_group != '' && $last_donate != '' && $password != '') {

      $sql = "INSERT INTO users (name, email, dob, number, student_id, address, blood_group, last_donate, age, password) VALUES ('$name', '$email ','$dob','$number','$student_id', '$address', '$blood_group', '$last_donate', '$age','$password')";
  
        
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- for date picker -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  
  <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
  <div class="container">
    <div class="row w-100 d-flex justify-content-center align-items-center main_div">
      <div class="col-12 col-lg-6 col-mid-8 col-xxl-5">
        <div class="card py-3 px-2">
          <p class="text-center my-3 text-capitalize"><span>connect with us</span></p>
         

             <div class="division">
               <div class="row">
                 <div class="col-6 mx-auto mb-4">
                   <span class="main-heading">Register form</span> 

                 </div>

               </div>

               <form action="" method="POST">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control"  placeholder="Full Name" name="name">
                      </div>
                      <div class="col">
                      <input id="dob" class="form-control" name="dob" placeholder="Date of Birth" width="100%" />

                        <!-- <input type="text" class="form-control" placeholder="Date of Birth" name="dob"> -->
                      </div>
                    </div>
                <div class="row">
 
                    <div class="col">
                        <input type="email" autocomplete="off" class="form-control" placeholder="Your Email" name="email">
                        
                      </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Phone Number" name="number">
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Student Id" name="student_id">
                    
                  </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Present Address" name="address">
                </div>

                <div class="row">
                  <div class="col">
                      <input type="text" class="form-control" placeholder="Blood Group" name="blood_group">
                  </div>
                  <div class="col">
                    <input id="last_donate" name="last_donate" placeholder="Last Donate Date" width="100%" />

                    <!-- <input type="text" class="form-control" placeholder="Last Donate Date" name="date"> -->
                  </div>
                </div>
                    
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Age" name="age">
                      </div>
                      <div class="col">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                      </div>
                </div>

    
            
                
                <div class="my-3">
                  <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg">Submit</button>

                </div>
               </form>

             </div>

          </div>
        </div>

      </div>

    </div>
    
  </div>
  <script>
                        $('#last_donate').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                        $('#dob').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script>

</body>
</html>
