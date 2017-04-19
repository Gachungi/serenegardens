<!DOCTYPE html>
<html>
  <head>
    <title>lodging</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/script.js"></script>
    
  </head>
  <body>
    <!-- new nav -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Brand</a> -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="row">
            <div class="col-sm-8">
              <ul class="nav navbar-nav">
                
                <li class="active"><a href="index.html"><img id="img-header" src="images/serene.png" style="width:100px;height:50px"><span class="sr-only">(current)</span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="about.php">About </a></li>
                <!--  services dropdown -->
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
                  <ul class="dropdown-content">
                    <li><a href="services.php">Services</a></li>
                    <li><button type="button" class="btn btn-link btn-md">Feedback</button></li>
                    <li><button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#myModal">Schedule a Visit</button></li>
                  </ul>
                </li>
                <!--  dropdown for services -->
                
                <li><a href="faq.php">FAQs</a></li>
                <li><a href="whyus.php">Why Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
              </div>
              <div class="col-sm-4">
                <div class="sign" id="signup">
                  <ul class="nav navbar-nav navbar-right" >
                    <li><button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#mySign">Sign Up</button></li>
                    <li><button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#myLogin"><a href="file:///C:/Users/Rahee/Documents/project/index.html#"><span class="glyphicon glyphicon-user"></span></a>Login</button></li>
                  </ul>
                </div>
                </div><!--  end of col-sm-4 -->
              </ul>
            </div>
          </div>
        </nav>
        <!-- End of nav-tabs --><br><br>
        <!-- start carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <p> <div class="item active">
              <img src="images/garden1.jpg" alt="" style="width:100%; height:450px">
              <div class="carousel-caption"><br>
                <h4>Experience the serenity and comfort </h4>
              </div>
            </div></p>
            <p> <div class="item">
              <img src="images/garden2.jpg" alt="" style="width:100%; height:450px">
              <div class="carousel-caption"><br>
                <h4>Breath taking gardens</h4>
              </div>
            </div></p>
            <p><div class="item">
              <img src="images/garden3.jpg" alt="" style="width:100%; height:450px">
              <div class="carousel-caption"><br>
                <h4>Putting a smile</h4>
              </div>
            </div></p>
            <p><div class="item">
              <img src="images/garden4.jpg" alt="" style="width:100%; height:450px">
              <div class="carousel-caption"><br>
                <h4>Putting a smile</h4>
              </div>
            </div>
          </p>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- end of carousel-->
      <div class="jumbotron">
        <div class="container-fluid" style="background-color: purple; color: gold">
          <div class="row">
            <div class="col-sm-6">
              <img src="images/garden5.jpg" style="width: 90%; height: 400px; padding: 10px">
            </div>
            <div class="col-sm-6">
              <p>We are located in the posh Karen Estate, the venue has an amazing view with lots of space to hold a large crowd. You’ll get to experience leisure and luxury at Mazuri Gardens as the beauty of the grounds certainly delivers value for money.</p>
              <p>If you are the kind of person who loves nature then you’ll definitely fall in love with the Mazuri Gardens. Our grounds are amazing and you can tell that they have been perfectly taken care of. We even have a guest house where you can spend the night before jetting off for your honeymoon.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="jumbotron" style="background-color: brown; color: white">
        <div class="row">
          <div class="col-sm-4">
            <h4>Contacts</h4>
            <h5>We are situated in Karen.</h5>
            <h5>Tel: +254 738555205</h5>
            <h5>Email: rwambui89@gmail.com</h5>
          </div>
          <div class="col-sm-4">
            <h4>Social Media </h4>
            <!-- font awesome -->
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
            <i class="fa fa-pinterest-square" aria-hidden="true"></i>
            <!--  end of font awesome -->
            <h6 style="color: blue">&#8482; &#174; &#169; 2017 Mazuri Gardens</h6>
          </div>
          <div class="col-sm-4">
            <h4>Policies</h4>
            <h5>Terms and conditions apply</h5>
          </div>
        </div>
      </div>
      
      
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Schedule a Visit</h4>
            </div>
            <div class="modal-body">
              <p>Personal Information.</p>
              
              <div id="form">
                <form action="/action_page.php">
                  <label for="fname">Your Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name.."><br><br>
                  <label for="country">Gender</label>
                  <input type="radio" name="gender" value="male" checked> Male
                  <input type="radio" name="gender" value="female"> Female
                  <input type="radio" name="gender" value="other" checked> Other<br><br>
                  <label for="lname">ID No</label>
                  <input type="number" id="lname" name="lastname" placeholder="Your ID No">
                  <label for="lname">Tell No</label>
                  <input type="number" id="lname" name="lastname" placeholder="Your Tell No"><br><br>
                  <label for="reason">Please indicate a brief reason for the visit</label>
                  <input type="text" id="reason" name="reason" placeholder="Your reason"><br><br>
                  <input type="submit" value="Submit">
                </form>
              </div>
              <!--  svvbn -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
        </div> <!-- End of modal -->
        <!-- Modal for login -->
        
        <div class="modal fade" id="myLogin" role="dialog">
          <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Login</h4>
              </div>
              <div class="modal-body">
                <p>Insert your Username and Password.</p>
                
                <div id="form">
                  <form action="/action_page.php">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username"><br><br>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"><br><br>
                    
                    <input type="submit" value="Submit">
                  </form>
                </div>
                <!--  svvbn -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        <!-- End for login -->
        <!--Sign Up Modal -->
        <div class="modal fade" id="mySign" role="dialog">
          <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sign Up</h4>
              </div>
              <div class="modal-body">
                <p>Personal Information.</p>
                
                <div id="form">
                  <form action="/action_page.php">
                    <label for="fname">Your Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name"><br><br>
                    <label for="email">Your Email</label>
                    <input type="text" id="email" name="firstname" placeholder="Your email"><br><br>
                    <label for="country">Gender</label>
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other" checked> Other<br><br>
                    <label for="lname">Password</label>
                    <input type="password" id="lname" name="lastname" placeholder="password">
                    <label for="password">Confirm Password</label>
                    <input type="password" id="password" name="password" placeholder="confirm password">
                    <input type="submit" value="Submit">
                  </form>
                </div>
                <!--  svvbn -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
          </div> <!-- End of modal -->
        </body>
      </html>