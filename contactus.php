<?php 

 try{

    $db=new mysqli("localhost","root","","contact_us");

 }catch(Exception $exc){
     echo $exc->getTraceAsString();
 }
 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    $is_insert = $db->query("Insert into messages ( name,email,message) values ('$name','$email','$message')");
    if($is_insert == TRUE){
        echo "<h2> Thank,your request has been submitted.</h2> <a href='index.php'>To go back to the homepage</a>";
        exit();
    }


}


?>



<!DOCTYPE html>
<head>
    <title>Contact US</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="/.img/logo2.png ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
</head>
<body>
    
 <section class="HeaderLogoCon">
        <div class="starter">
            <div class="LogoIconContainer">
                <img src="    img/logo2.png " alt="">
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
        <div class="header-container" style="overflow-y:hidden;">
           <a href="index.php" ><button>Home</button> </a>
           <a href="services.php"><button>Services</button> </a>
           <a href="Team.php"><button >Our Team</button> </a>
           <a href="Gallery.php"><button>Gallery</button> </a>
           <a href="Recovery.php"><button>UNIQ Recovery</button> </a>
           <a href="contactus.php"><button class="active">Contact Us</button></a> 
        </div>
        <div class="header-container-sub">
            <button id="more"> <img src="    ./img/burgerbtn.png  " alt="" id="more-btn" style="width:100px; height:50px;">  </button> 
            <a href="index.php"><button>Home</button></a>
            <a href="services.php"><button>Services</button></a>
            <a href="Team.php"><button">Our Team</button></a> 
            <a href="Gallery.php"><button>Gallery</button> </a>
            <a href="Recovery.php"><button>UNIQ Recovery</button> </a>
            <a href="Contact.php"><button  class="active">Contact Us</button></a> 
        </div>
    </section>
 <div id="box">

<form action="" method="POST" style="margin-top: 50px;">
                <div style="font-size: 20px;margin: 10px; color:white;">Contact US</div><br><br>
                <input id="text" type="text" placeholder="Your name here :" name="name" style="height:50px;" ><br><br>
                <input type="text" placeholder="Your email" name="email" id="text" style="height:50px;"><br><br>
                <textarea name="message" id="text" cols="30" rows="20" placeholder="Your message here :" style="height:150px;"></textarea><br><br>
                <input id="button" type="submit" value = "Submit"> <br><br>
            </form>
            <secttion class="FooterContainer">
        <div class="footer-home">
            <div class="footer-main">
                <div class="footer-main-sub">
                    <h3>Contact Us</h3>
                    <p style="color:black">Email: <a href="#"> wiyulemotors@gmail.com
                        
                    </a></p>
                    <p style="color:black">Phone <a href="#">+265 996834038</a></p>
                    <p style="color:black">Address : <a href="#">Nyambandwe 424</a></p>
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
                <h3> Wiyule &amp; FA Motors &copy; 2021 All rights reserved</h3>
            </div>
        </div>
 </secttion>
            <script src=" js/script.js "></script>  
</body>
</html>