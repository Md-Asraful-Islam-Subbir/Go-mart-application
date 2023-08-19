<!-- connection -->
<?php
  include 'php/connection.php';
  include 'php/users.php';
  session_start();
  if(isset($_SESSION['success_message'])){
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    unset($_SESSION['success_message']); // Clear the session variable
  }
    
  if(isset($_SESSION['acctype']) && $_SESSION['acctype'] == 'seller'){
    header("Location: seller.php");
    exit();
  }

  
  if(isset($_SESSION['acctype']) && $_SESSION['acctype'] == 'admin'){
    header("Location: admin.php");
    exit();
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/toggle.js" defer></script>
    <style>
        .social-icons {
    font-size: 36px;
    cursor: pointer;
}
.fa-facebook:hover,.fa-instagram:hover,.fa-twitter:hover,.fa-linkedin:hover, .fa-twitch:hover {
    color: #008000;
}
.fab {
    color: #000000;
}
/* footer styling */
#footer {
    background-color: #3a413b;
    text-align: center;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.meet-the-team {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.team-member {
    width: 300px;
    margin: 20px;
    padding: 15px;
    background-color: #f4f4f4;
    text-align: center;
    border-radius: 5px;
}

.team-member img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 10px;
}
    </style>
</head>
<body>
<nav  class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"
              >About <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAqs</a>
          </li>
        </ul>
      </div>
      <a id="widthActive" href="">kaka</a>
      <a href="#LoginButton"
        ><button class="btn btn-outline-success my-2 my-sm-0">
          My Profile
        </button></a
      >
    </nav>
<section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center">Portfolio</h1>
            <body>
    <section class="meet-the-team">
        <div class="team-member">
            <img src="images/sabbir.png" alt="Team Member 1">
            <h2>Sabbir</h2>
            <p style="color: #000000;">Front-end Designer</p>
            <div class="share">
         <a href="https://www.facebook.com/Asrafulislamsabbir1902003/" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
      </div>
        </div>
        <div class="team-member">
            <img src="images/ratin.jpg" alt="Team Member 2">
            <h2>Ratin</h2>
            <p style="color: #000000;">Back-end Developer</p>
            <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
      </div>
        </div>
        <div class="team-member">
            <img src="images/blank.png" alt="Team Member 3">
            <h2>Mehedi</h2>
            <p style="color: #000000;">Full stack Developer</p>
            <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
      </div>
        </div>
        <div class="team-member">
            <img src="images/minmoy.jpg" alt="Team Member 1">
            <h2>Mrinmoy</h2>
            <p style="color: #000000;">Web Designer</p>
            <div class="share">
         <a href="" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
      </div>
        </div>
        <div class="team-member">
            <img src="images/saurav.png" alt="Team Member 2">
            <h2>Saurav</h2>
            <p style="color: #000000;">Web Designer</p>
            <div class="share">
         <a href="" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
      </div>
        </div>
        <div class="team-member">
            <img src="images/blank.png" alt="Team Member 3">
            <h2>Rudro</h2>
            <p style="color: #000000;">Web Designer</p>
            <div class="share">
         <a href="" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
      </div>
        </div>
    </section>
</body>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="images/5.jpg" alt="Card image" style="width:100%;height:219px;">
                        <div class="card-body">
                            <h4 class="card-title">YouTube Clone</h4>
                            <p class="card-text" style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/1.jpg" alt="Card image" style="width:100%;height:219px;">
                        <div class="card-body">
                            <h4 class="card-title">Quiz App</h4>
                            <p class="card-text"style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/6.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product Landing Page</h4>
                            <p class="card-text"style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/2.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Messaging Service</h4>
                            <p class="card-text"style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/3.png" alt="Card image" style="width:100%;height:215px;object-fit:contain;">
                        <div class="card-body">
                            <h4 class="card-title">Twitter Clone</h4>
                            <p class="card-text"style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/4.jpg" alt="Card image" style="width:355px;">
                        <div class="card-body">
                            <h4 class="card-title">Blog App</h4>
                            <p class="card-text"style="color:black;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="footer"style="background-color: rgb(58, 65, 59);text-align:center;margin-top:2rem;height: 6rem;">
  <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.twitch.tv/" target="_blank"><i class="fab fa-twitch"></i></a>
            </div>
        </div>
    </footer>
<div class="credit">&copy; all rights are reserved by <span>sabbir</span></div>

</section>
</body>
</html>