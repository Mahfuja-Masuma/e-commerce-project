<!DOCTYPE html>
 <html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blood Donation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
   
     

  </head>
<body>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-danger " href="#">UU BloodDonation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
        </li>
    
        
        <li class="nav-item active">
            <a class="nav-link" href="about.html">About  <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="register form/index.html">Donar Registration  <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="login form/index.html">Login <span class="sr-only">(current)</span></a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">

      <div class="form-group center-aligned">
        <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
          
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>

        </select>
      </div>
      <div class="form-group center-aligned">
        <button type="submit" class="btn btn-lg btn-danger">Search</button>
      </div>
    </form>
    
    </div>
  </nav>
  <!-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>About Us Section</h1>
  
    </div>
  </div> -->
  <section>
    <div class="container-fluid">
      
      <hr class="w-25 mx-auto pt-5">

      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="img/logo.jpg" class="img-fluid">
          

        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h1>About Us  </h1>
          <hr>
          <p> Our project is blood bank and donor management system. It will help the UU  all students 
            to collect blood from the donor and store blood in blood bank.
            The help of this site. Admin is the main authority who can donation deletion, and modification 
            if required .The project has been planned to be having the view of distributed architecture,
             with centralized storage of the database. The application for the storage of the data has 
             been planned. Sing the constructs of server and all the user interfaces have been designed
              using the ate technologies.  </p>
   
        </div>
       </div>
           </div>
        </section>
        <footer class="mt-5">
            <p class="text-center bg-dark text-white ">uu.edu.com</p>
          </footer>
              
</body>
 </html>