<?php 
session_start();

include("connection.php");

$query = "select * from users" $connection;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiyule & FA Motors</title>
    <link rel="stylesheet" href=" ./css/style.css ">
    <link rel="stylesheet" href=" ./css/gallery.css ">
    <link rel="icon" href=" img/logo2.png ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
</head>
<body>
    <section class="HeaderLogoCon">
        <div class="starter">
            <div class="LogoIconContainer">
                <img src=" img/logo2.png " alt="">
            </div>
            <div class="Contact-Info">
                <div class="Contact-section">
                    <h5>Call us 24/7</h5>
                    <p>+265 993575111</p>
                    <p>+265 883575111</p>
                    <p>+265 996834038</p>
                </div>
                <div class="Contact-section">
                    <h5>Operational Hours</h5>
                    <p>Mon-Fri 9am-5pm</p>
                    <p>Sat 9am - 12pm</p>
                </div>
            </div>
        </div>
    </section>
    <section class="HeaderContainer">
        <div class="header-container">
           <a href="index.php" ><button>Home</button> </a>
           <a href="services.php"><button>Services</button> </a>
           <a href="Team.php"><button>Our Team</button> </a>
           <a href="Gallery.php"><button  class="active">Gallery</button> </a>
           <a href="Recovery.php"><button>UNIQ Recovery</button> </a>
           <a href="contactus.php"><button>Contact Us</button></a> 
        </div>
        <div class="header-container-sub">
            <button id="more"> <img src=" ./img/burgerbtn.png " alt="" id="more-btn" style="width:100px; height:50px;">  </button> 
            <a href="index.php"><button>Home</button></a>
            <a href="services.php"><button>Services</button></a>
            <a href="Team.php"><button>Our Team</button></a> 
            <a href="Gallery.php"><button  class="active">Gallery</button> </a>
            <a href="Recovery.php"><button>UNIQ Recovery</button> </a>
            <a href="contactus.php"><button>Contact Us</button></a> 
        </div>
    </section>
    <section>
    <span>Name:</span> <?php echo $row1['user_name']; ?>
<span>Date logged in<span> <?php echo $row1['date']; ?>
    </section>
    <secttion class="FooterContainer">
        <div class="footer-home">
            <div class="footer-main">
                <div class="footer-main-sub">
                    <h3>Contact Us</h3>
                   
                    <p style="color:black">Email: <a href="#"> wiyulemotors@gmail.com</a></p>
                    <p style="color:black">Phone <a href="#">+265 996834038</a></p>
                    <p style="color:black">Address : <a href="#">Nyambadwe 424</a></p>
                    <p style="color:black">Emergency Number : <a href="#">+265 993575111</a> </p>
                </div>
                <div class="footer-main-sub">
                    <h3>Our servicess</h3>
                    <p><a href="services .php">Panel Beating</a></p>
                    <p><a href="services .php">Towing and Vehicle Recovery</a></p>
                    <p><a href="services .php">Mechanics</a></p>
                    <p><a href="services .php">Spray Painting</a></p>
                    <p><a href="services .php">Motor Electrical Repair</a></p>
                    <p><a href="services .php">Vehicle Customization</a></p>
                </div>
                <div class="footer-main-sub">
                    <h3>Information</h3>
                    <p><a href="">Warranty Information</a></p>
                    <p><a href="">Excess Payment</a></p>
                    <p><a href="">Quotation Requests</a></p>
        

                </div>
            </div>
            <div class="footer-sub">
                <h3>&copy; Wiyule &amp; FA Motors 2021 All rights reserved</h3>
            </div>
        </div>
    </secttion>
    
  <script src=" js/script.js "></script>  
</body>
</html>