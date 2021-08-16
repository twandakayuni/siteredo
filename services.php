<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con)
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiyule & FA Motors</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="   img/logo2.png    ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
    <style>
        .service-container{
            width:100%;
            height:auto;
            display:flex;
            flex-wrap:wrap;
            padding:75px;
        }
        .service-container .service-img{
            width:50%;
            height:350px;
            padding:50px;
        }
        .service-container .service-text{
            width:50%;
            height:auto;
            padding:50px;
            line-height: 30px;
        }
        .service-container .service-text h2{
            padding-bottom:30px;
            color:red;
            font-size:2em;
        }
        @media screen and (max-width:800px){
            .service-container .service-img,.service-text{
                width:100%;
            }
        }
        .service-container .service-img img{
            width:100%;
            height:100%;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <section class="HeaderLogoCon">
        <div class="starter">
            <div class="LogoIconContainer">
                <img src="   img/logo2.png    " alt="">
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
           <a href="Service.php"><button class="active">Services</button> </a>
           <a href="Team.php"><button>Our Team</button> </a>
           <a href="Gallery.php"><button>Gallery</button> </a>
           <a href="Recovery.php"><button>UNIQ Recovery</button> </a>
           <a href="Contact.php"><button>Contact Us</button></a> 
        </div>
        <div class="header-container-sub">
            <button id="more"> <img src="   ./img/burgerbtn.png    " alt="" id="more-btn" style="width:100px; height:50px;">  </button> 
            <a href="index.php"><button>Home</button></a>
            <a href="Service.php"><button class="active">Services</button></a>
            <a href="Team.php"><button>Our Team</button></a> 
            <a href="Gallery.php"><button>Gallery</button> </a>
            <a href="Recovery.php"><button>UNIQ Recovery</button> </a>
            <a href="Contact.php"><button>Contact Us</button></a> 
        </div>
    </section>
    <section class="ServicesContainer">
        <div class="service-container">
            <div class="service-img">
                <img src="   ./img/panelbeating.jpg    " alt="">
            </div>
            <div class="service-text">
                <h2>Panel Beating</h2>
                <p>Panel beaters are people who repair cars and other vehicles after a collision. 
                    The panel beating process involves removing, repairing and replacing damaged panels, chassis alignment, and refitting body parts.The tasks of paneling beating involves;<li>Removing, repairing, and replacing damaged panels</li>
                    <li>Repairing dents and scratches with fillers</li>
                    <li>Filing and sanding the bodywork to ensure a smooth finish</li>
                    <li>Replacing damaged parts with genuine parts from the vehicle manufacturer</li>
                    <li>Installing body parts such as door locks and sensors</li>
                    <li>Realigning the chassis and body frame.</li> </p>
            </div>
        </div>
        <div class="service-container">
            <div class="service-img">
                <img src="   ./img/spraypainting.jpg    " alt="">
            </div>
            <div class="service-text">
                <h2>Spray Painting</h2>
                <p>Spraypainters apply paint to vehicles and other surfaces, preparing and customising colours as requested from the customers.Spraypainting is done after the final panelbeating process of sanding the filler until a smooth finish appears.The spraypaiting process involves;
                    <li> Sanding rough vehicle panel surfaces with power sanders and by hand.</li>
                    <li>Protecting areas that shouldn’t be painted with masking tape and paper.</li>
                    <li>Applying primer before painting using a spray gun.</li>
                    <li>Mixing tints to create paint colour or selecting pre-mixed paint where available.</li>
                    <li>Applying finishing coats, sanding surfaces in-between coats and touching up paintwork.</li>
                    <li>Applying polish, rustproofing chemicals and protective seals.</li>
                    <li>Painting artwork and signs, and applying decals to panels.</li>
                </p>
            </div>
        </div>
        <div class="service-container">
            <div class="service-img">
                <img src="   ./img/mechanical.jpg    " alt="">
            </div>
            <div class="service-text">
                <h2>Mechanical Services</h2>
                <p>At Wiyule & FA Motors there are several mechanical services which are provided and these are;
                    <li><b>Engine Services</b></li>
                    <p>This involves changing the engine oil ,the oil filter,the air filter,the fuel filter,the a/c filter and replacing the spark plugs</p>
                    <li><b>Suspension Services</b></li>
                    <p>At Wiyule & FA Motors when working on the suspension of your vehicle,we change your shock absorbers,stabalizer links, brake pads,rackends and tierod ends. </p>
                    <li><b>Engine Overhauling</b></li>
                    <p>An engine overhaul is done when the vehicle sounds strange when accelerating or when the vehicle is being switched off in rumbles.In other instances when the vehicle is producing  excessive black smoke an engine overhaul is needed.An engine overhaul involves disassembling of the engine and having new engine components such as new pistons, piston rings, main bearings, valves and springs replaced. </p>
                </p>
            </div>
        </div>
        <div class="service-container">
            <div class="service-img">
                <img src="   ./img/eletronics.jpg    " alt="">
            </div>
            <div class="service-text">
                <h2>Motor Electrical Repair</h2>
                <p>Sometimes vehicles gets electrical problems like a window not going down or the air con not working,Wiyule & FA Motors has specialized motor electricians who can resolve the problem within minutes .Wiyule & FA Motors also has a vehicle diagnosis machine which is used to check the vehicle system and then outputs the errors of the vehicle.</p>
            </div>
        </div>
        <div class="service-container">
            <div class="service-img">
                <img src="   ./img/recovery.jpg    " alt="">
            </div>
            <div class="service-text">
                <h2>UNIQ Recovery Services</h2>
                <p>Wiyule & FA Motor also  deals with the recovery of vehicles which have been involved in collisions, with uprising mechanical faults or just a basic flat tyre. A client can either contact the motor insurance company they deal with then the isnurance company contacts Wiyule FA Motors for a quotation for the recovery or the client can personally contact Wiyule & FA Motors and get a quotation personally without dealing with the insurance company.</p>
            </div>
        </div>
    </section>
    <secttion class="FooterContainer">
        <div class="footer-home">
            <div class="footer-main">
                <div class="footer-main-sub">
                    <h3>Contact Us</h3>
                    <p style="color:black">Email: <a href="#">wiyulemotors3@gmail.com</a></p>
                    <p style="color:black">Phone <a href="#">+265 993575111</a></p>
                    <p style="color:black">Address : <a href="#">Nyambadwe 424</a></p>
                    <p style="color:black">Emergency Number : <a href="#">+265 99634038</a> </p>
                </div>
                <div class="footer-main-sub">
                    <h3>Our Services</h3>
                    <p><a href="Service.php">Panel Beating</a></p>
                    <p><a href="Service.php">Towing and Vehicle Recovery</a></p>
                    <p><a href="Service.php">Mechanics</a></p>
                    <p><a href="Service.php">Spray Painting</a></p>
                    <p><a href="Service.php">Motor Electrical Repair</a></p>
                    <p><a href="Service.php">Vehicle customization</a></p>
                </div>
                <div class="footer-main-sub">
                    <h3>Information</h3>
                    <p><a href="">Warranty Information</a></p>
                    <p><a href="">Excess Payment</a></p>
                    <p><a href="">Quotation Requests</a></p>
                   
            </div>
            <div class="footer-sub">
                <h3>Wiyule &amp; FA Motors &copy;  2021 All rights reserved</h3>
            </div>
        </div>
    </secttion>
  
  <script src="   js/script.js    "></script>  
</body>
</html>
 