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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoMart-a online shopping controller</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style>
              .fit-member-container {
  border: 1px solid #d3d3d3;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  overflow: hidden;
}
.gdlr-core-column-20 {
  float: left;
  width: 22rem;
}
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
    background-color:#3a413b;
    text-align: center;
}
     .fit-mem-header h5 {
  margin-bottom: 0;
  font-weight: 400;
  color: #fff;
  font-size: 22px;
}

.fit-mem-header {
  background-color: #262626;
  height: 4rem;
}
.fit-mem-header {
  overflow: hidden;
  padding: 17px 0;
}
.fit-mem-content {
  font-family: "Source Sans Pro", sans-serif;
}
#div1,
#div2,
#div3 {
  overflow: hidden;
  padding: 55px 0;
  text-align: center;
  box-shadow: none;
}
.fit-mem-top {
  margin-bottom: 25px;
  height: fit-content;
}
#container {
  width: 75%;
  margin: auto;
}

.fitMenBot h5,
h6 {
  font-family: "Bitter", serif;
  font-size: 29px;
}
h5,
h6 {
  margin: 0;
  font-weight: normal;
}
#div1 a,
#div2 a {
  text-decoration: none;
  font-size: 15px;
  font-weight: bolder;
  padding: 10px 32px;
  background-color: #312e2e;
  color: #ffffff;
  border-radius: 25px;
  transition: all 0.2s;
}

#div1 a:hover,
#div2 a:hover {
  background-color: #666666;
}

#div3 ul{
  list-style: none;
}

#div3ul a{
  border-radius: 5px;
  text-decoration: none;
  padding: 22px 10px;
    font-size: 15px;
    color: #383838;
    font-weight: 700;
    text-transform: uppercase;
    font-family: 'Source Sans Pro', sans-serif;
    display: block;
    border: 1px solid #d3d3d3;
    box-shadow: 0px 0px 5px 3px rgba(0, 0, 0, 0.1);
    transition: all .3s;
}
#div3ul a:hover{

  color: rgb(192, 21, 21);
}

#lastA{
  font-size: 15px;
    padding: 10px 32px;
    background-color: #312e2e;
    text-decoration: none;
    color: #ffffff;
    border-radius: 25px;
    font-weight: 600;
}
#lastA:hover{
  background-color: #4e4c4c;
}

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
  </head>
  
  <body>

<!-- This is the header part -->

<header>



    <nav  class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"
              >About <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
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
    <div
      class="ftgm-banner"
      style="
        background-color:#3a413b;
        color: black;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      "
    >
      <div
        class="gdlr-core-pbf-wrapper-container gdlr-core-container"
        style="margin-left: 38rem; color: white; font-size:20px;"
      >
        <h1><strong>Contact Us</strong> </h1>
        <h4 style="margin-left: 1.5rem">
          Get In Touch
        </h4>
      </div>
    </div>

    <div id="container" style="display: flex; justify-content: space-around">
      <div id="div1">
        <div class="gdlr-core-column-20 gdlr-core-item-pdlr">
          <div class="fit-member-container" style="height: 700px">
            <div class="fit-mem-header">
                
              <h5><i class="fas fa-envelope"></i> Email</h5>
            </div>
            <div class="fit-mem-content">
              <div class="fit-mem-top" style="font-size: 20px; padding:2rem;line-height: 2.5rem;color:black;">
              <p  style="font-size: 24px; padding:.5rem;color:black;font-weight:500;">Send us a message with your contact details and one of our team will get back to you as quickly as possible.;</p>
              </div>
              <br /><br />
              <div
                class="fit-mem-bot"
                style="height: 141px; margin-top: -31px;"
              >
                <h5 style="font-size: 27px; opacity: .7;line-height: 1.5rem;">Sales Team :</h5>
                <h6 style="font-size: 22px; opacity: .7;line-height: 1.5rem;">maisonlineltd@gmail.com</h6><br><br>
                <h5 style="font-size: 27px; opacity: .7;line-height: 1.5rem;">Billing Team :</h5>
                <h6 style="font-size: 22px; opacity: .7;line-height: 1.5rem;">admin@gmail.com</h6><br /><br />
                <p>
                  <a
                    class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                    href="#"
                    ><span class="gdlr-core-content"
                      >Mail Now</span
                    ></a
                  >
                </p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="div2">
        <div class="gdlr-core-column-20 gdlr-core-item-pdlr">
          <div class="fit-member-container" style="height: 700px">
            <div class="fit-mem-header">
              <h5><i class="fas fa-map-marker-alt"></i> Location</h5>
            </div>
            <div class="fit-mem-content">
            <div class="fit-mem-top" style="font-size: 20px; padding:2rem;line-height: 2.5rem;">
              <p style="font-size: 24px; padding:.5rem;color:black;font-weight:500;">Plot No. 182, Beside Vishal Mega Mart Aadarsh Abhyasika, Bhande Plot Square Nandanwan Road, Nagpur, Maharashtra 440024, India</p>
              </div>
              <div class="fitMenBot" style="height: 141px;">
                <h5 style="margin: 0px; opacity: .7;" >View On Map</h5><br/>
                <p>
                  <a style="opacity: 1;"
                    class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                    href="https://goo.gl/maps/TLhLHCUzGpCy6xvz7"
                    ><span class="gdlr-core-content"
                      >Map</span
                    ></a
                  >
                </p>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="div3">
        <div class="gdlr-core-column-20 gdlr-core-item-pdlr">
          <div class="fit-member-container" style="height: 700px">
          <div class="fit-mem-header">
              <h5><i class="fas fa-phone"></i> Call Us</h5>
            </div>
            <div class="fit-mem-content">
            <div class="fit-mem-top" style="font-size: 20px; padding:2rem;line-height: 2.5rem;">
              <p style="font-size: 24px; padding:.5rem;color:black;font-weight:500;">01878507129</p>
              <p style="font-size: 24px; padding:.5rem;color:black;font-weight:500;">01943566017</p>
              <p style="font-size: 24px; padding:.5rem;color:black;font-weight:500;">Feel free to give us a call and one of our friendly fitness professionals will assist with your query.</p>
              </div>
              <div class="fitMenBot" style="height: 141px;">
                <h5 style="margin: 0px; opacity: .7; " >Call Now</h5><br/>
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
                <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.661440737311!2d90.3994515753373!3d23.795067478640004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74caf9b9bc7%3A0xd018e8da8ed98745!2sLets%20Go%20Mart!5e0!3m2!1sen!2sbd!4v1692349057191!5m2!1sen!2sbd" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </iframe>
                        </div>
                  
                

                <div class="col-lg-6" >
                    <!-- form fields -->
                    <form method="post" action="send-email.php" style="width: 400px;margin-left:10rem;">
                        
                        <input type="email" name="email"class="form-control mt-3" placeholder="Email">
                        <input type="text"name="text" class="form-control mt-3" placeholder="Subject">
                        <input type="text" name="message" class="form-control mt-3" placeholder="Message">
                        <button type="submit" name="send"class="btn btn-success mt-3"style="margin-left:10rem;">Contact Me</button>
                    </form>
                    
                </div>
                </div>
  </body>
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
</header>
  </body>
</html>