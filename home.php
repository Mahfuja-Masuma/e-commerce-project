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
   
     
    <style>
      /* Make the image fully responsive */
      .carousel-inner img {
        width: 100%;
        height: 100%;
      }
      </style>

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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img\img.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
                <div class="mt-5">
              <h3 class="text-primary">UU BloodDonation System </h3>
              <p class="text-danger"><b> Donate blood, Save Lives </b></p>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <img src="img\kkk.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3  class="text-primary">Search The Donors</h3>
              <p class="text-success"><b>Donate the blood to help the others</b></p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="img\mm.jpg" alt="blood" width="1100" height="500">
            <div class="carousel-caption">
              <h3 class="text-primary">Safe blood saves lives</h3>
              <p class="text-success"><b>One donation can save as many as three lives</b></p>
            </div>   
          </div>
   
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
        </div>
        </div>
      
    
         <!--about us-->
      <section>
        <div class="container-fluid">
          <h1 class="text-center text-capitalise  pt-5">About us</h1>
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
            
             <!--about us end-->
          <!--Services part-->
             
      <section>
        <div class="container">
          <h1 class="text-center text-capitalise  pt-5">Services</h1>
          <hr class="w-25 mx-auto pt-5">
           <div class="row text-center mb-5">
             <div class=" col-lg-4 col-md-4 col-12"> 
              <div class="card">
                <img class="card-img-top" src="img/blood donation.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Blood Donation</h4>
                   <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 

             </div>

             <div class=" col-lg-4 col-md-4 col-12"> 
              <div class="card">
                <img class="card-img-top" src="img/bbb3.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Social Services</h4>
              
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 

             </div>
              
             <div class=" col-lg-4 col-md-4 col-12"> 
              <div class="card">
                <img class="card-img-top" src="img/nnn.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Achievement</h4>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 

             </div>

                 </div>
                </section>
                <!--Services end-->
                <!-- Contact demo-->
          <section class="bg-primary">
           <article class="py-5 text-center text-white">
             <div>
               <h3 class="display-4"> +880-182467092</h3>
               <p> If You Want Best Services Call Us</p>
               <button class="btn btn-warning">Contact</button>
             </div>
           </article>
            </section>
            <!--Contact demo end-->
   
           <!--Gallery-->
           <section>
            <div class="container">
              <h1 class="text-center text-capitalise  pt-5">Gallery</h1>
              <hr class="w-25 mx-auto pt-5">

              <div class="row">
                <div class="col-lg-4 col-md-2 col-1">
                  <img src="img/kkk.jpg" class="img-fluid">

                </div>
                <div class="col-lg-4 col-md-2 col-1">
                  <img src="img/img.jpg" class="img-fluid">

                </div>

                <div class="col-lg-4 col-md-2 col-1">
                  <img src="img/mm.jpg" class="img-fluid">

                </div>
                 
                <div class="col-lg-4 col-md-2 col-1">
                  <img src="img/bbb.jpg" class="img-fluid">

                </div>

                <div class="col-lg-4 col-md-2 col-1">
                  <img src="img/blood.jpg" class="img-fluid">

                </div>

                <div class="col-lg-4 col-md-2 col-1">
                  <img src="img/nnn2.jpg" class="img-fluid">

                </div>
               </div>
               </div>
               </section>

               <!--Gallery end-->
               <!-- Register form-->

               <section class="bg-primary mt-5">
                <article class="py-5">
                  <div class="text-center text-white">
                    <h3 class="display-4"> Want to Join</h3>
                    <p> If You Want Best Services Call Us</p>
                    <button class="btn btn-warning" data-toggle="modal" data-target=
                    "#myModal">Join Now</button>
                  </div>
                    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign-Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
            <div class="form-group">
    
              <input type="email" class="form-control" placeholder="Enter email" id="email" autocomplete="off">
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</article>
 </section>
  <!-- Register end -->

  <!-- Contact us -->

  <section>
    <div class="container">
      <h1 class="text-center text-capitalise  pt-5">Contact Us</h1>
      <hr class="w-25 mx-auto pt-5">
    <div class="w-50 mx-auto">
      <form action="/action_page.php">

        <div class="row">
          <div class="col">
              <input type="text" class="form-control"  placeholder="Full Name" name="Full Name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Date of Birth" name="Date of Birth">
            </div>
          </div>

          <div class="row mt-2">
 
            <div class="col">
                <input type="text" class="form-control" placeholder="Your Email" name="Email">
                
              </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Phone Number" name="Phone Number">
          </div>
        </div>
        <div class="form-group mt-2">
          <input type="text" class="form-control" placeholder="Student Id" name="id">
          
        </div>

      <div class="form-group mt-2 ">
          <input type="text" class="form-control" placeholder="Present Address" name="address">
          
        </div>

      <div class="row mt-2">
       <div class="col">
          <input type="text" class="form-control" placeholder="Blood Group" name="Blood">
       </div>
      <div class="col">
          <input type="text" class="form-control" placeholder="Last Donate Date" name="date">
            </div>
          </div>
          
          <div class="row mt-2">
              <div class="col">
                   <input type="text" class="form-control" placeholder="Age" name="Age">
                   
                 </div>
                 <div class="col">
                   <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                 </div>
           </div>

           <div class="form-group">
             <textarea class="form-control mt-2" placeholder="any massege"></textarea>

           </div>
        <button type="send" class="btn btn-primary mt-2">Send</button>
      </form>
    </div>
  </section>

  <footer class=" mt-5">
    <p class="text-center bg-dark text-white ">uu.edu.com</p>
  </footer>
      
      
    
</body>
</html>