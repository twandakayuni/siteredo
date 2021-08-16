
<?php 
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] ==  "POST")
{
    //WHEN SOMEONE HAS POSTED 
    $user_name = $_POST[ 'user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    { 
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";    
        $result= mysqli_query ($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows ($result) > 0)

        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
               header("Location : services.php");
               die;
            }
          } 
        }
        echo "Wrong unsername or password.Please Retry"; 
    }else
    {
        echo "Please enter some valid information"; 
    }
}
?>




<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="/.img/logo2.png ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<body>
</head>
<body>
    <style type ="text/css">
    #text{
        height:25px;
        border-radius:5px;
        padding:4px;
        border:solid thin #aaa;
        width: 100%;
 
   }
   #button{
       padding:10px;
       width:100px;
       color:white;
       background-color:lightblue;
       border;none;
   }
   #box{
         background-color:red;
         margin:auto;
         width:300ox;
         padding:20px;
   }
 </style>
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
           <a href="Gallery.php"><button>Gallery</button> </a>
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
 <div id="box">
<form action="" method="POST">
                <div style="font-size: 20px;margin: 10px; color:white;">Login Here</div><br><br>
                <input id="text" type="text" placeholder="Your name here :" name="user_name" ><br><br>
                <input id="text" type="text" placeholder=" Enter password " name="password"><br><br>
                <input id="button" type="submit" value = "Login"> <br><br>
                <a href="signup.php">Signup Here</a>
            </form>
            <secttion class="FooterContainer">
        <div class="footer-home">
            <div class="footer-main">
                <div class="footer-main-sub">
                    <h3>Contact Us</h3>
                    <p style="color:black">Email: <a href="#">wiyulemotors3@gmail.com</a></p>
                    <p style="color:black">Phone <a href="#">+265 993575111</a></p>
                    <p style="color:black">Address : <a href="#">Nyambadwe 424</a></p>
                    <p style="color:black">Emergency # : <a href="#">+265 996834038</a> </p>
                </div>
                <div class="footer-main-sub">
                    <h3>Our Services</h3>
                    <p><a href="Service.php">Panel Beating</a></p>
                    <p><a href="Service.php">Towing and Vehicle Recovery</a></p>
                    <p><a href="Service.php">Mechanics</a></p>
                    <p><a href="Service.php">spray Painting</a></p>
                    <p><a href="Service.php">Motor Electrical Repair</a></p>
                    <p><a href="Service.php">Vehicle customization</a></p>
                </div>
                <div class="footer-main-sub">
                    <h3>Information</h3>
                    <p><a href="">Warranty Information</a></p>
                    <p><a href="">Excess Payment</a></p>
                    <p><a href="">On-site Quotation Requests</a></p>

                </div>
            </div>
            <div class="footer-sub">
                <h3> Wiyule &amp; FA Motors &copy; 2021 All rights reserved</h3>
            </div>
        </div>
    </secttion>
    <script src="   js/script.js  "></script>  
</body>
    </html>
