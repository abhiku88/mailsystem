<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&family=Montserrat:wght@300;400&family=Oswald:wght@200&family=Sora:wght@200&display=swap" rel="stylesheet"></head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" width="50%" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php"><strong>HOME</strong></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./about.html"><strong>ABOUT US</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link" data-hover="dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-hover="dropdown">
                        <strong>SERVICES<span style="margin-left: 5px;"><i class="fa fa-plus" aria-hidden="true"></i></span></strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./bcpType.html">Business Clean Program</a></li>
                        <li><a class="dropdown-item" href="./hcpType.html">Home Clean Program</a></li>
                        <li><a class="dropdown-item" href="./cgpType.html">Car Groom Program</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="./gallery.html" class="nav-link"><strong>GALLERY</strong></a>
                        </li>
                    <li class="nav-item">
                    <a href="./contactUs.html" class="nav-link"><strong>CONTACT US  </strong></a>
                    </li>
                </ul>
            </div>
            <button class="btn-trans"><strong><a href="./bookService.html" class="text-light" style="text-decoration: none;">Book Now</a></strong></button>
        </div>
    </nav>
<?php

 if(isset($_POST["email"])) {
    //echo "<script type='text/javascript'>alert('mail method run.');</script>";  
	$Body = "Name: ".$_POST["name"]
    ."<br/><br/>"."City: ".$_POST["city"]
    ."<br/><br/>"."Address: ".$_POST["address"]
    ."<br/><br/>"."Contact Number: ".$_POST["contact"]
    ."<br/><br/>"."Email: ".$_POST["email"]
    ."<br/><br/>"."Subject: ".$_POST["subject"]
    ."<br/><br/>"."Message: ".$_POST["message"]
    ;
    
    $to="works@blitzblank.biz";
    $subject="Contact form submitted ".$_POST["name"];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
if(!mail($to,$subject,$Body,$headers)){
        echo "<script type='text/javascript'> alert('Some error occoured');</script>";
}else{
        echo "<script type='text/javascript'>alert('Thankyou for contacting us , we will reachout soon!');</script>";
    };
    
 }else{
     echo "<script type='text/javascript'>alert('other case ran');</script>";
 }

?>
     <div class="success-form">
        <div class="container">
            <p>Thank you for connecting us.</p>
        </div>
     </div>
    <footer>
        <div class="container">
          <div class="footer-full foot-underline">
            <div class="footer-content foot">
                <div class="footer">
                    <h2 class="footer-head">Quick Links</h2>
                    <a href="./index.html"><p>Home</p></a>
                    <a href="./about.html"><p>About Us</p></a>
                </div>
    
                <div>
                    <h2 class="footer-head foot-service">Blitzblank Enterprises</h2>
                    <div class="footer-company">
                        <p style="line-height: 19px;"><strong>Works :</strong> Plot BR-05, Sector 116,<br/> Noida, Uttar Pradesh 201301</p>
                        <p style="line-height: 19px;"><strong>Reg office :</strong> 6354, F-6, Sector-50 Noida, Uttar Pradesh-201301</p>
                        <div>
                            <p><span><i class="fa fa-whatsapp wats" aria-hidden="true"></i></span> +91 9258686943</p>
                            <p><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> works@blitzblank.biz</p>
                            <p><span><i class="fa fa-globe" aria-hidden="true"></i></span> www.blitzblank.biz</p>
                        </div>
                        
                    </div>
                </div>

                
            </div>
            <div class="footer-content2 foot foot-underline">
                <h2 class="footer-head">Services</h2>
                <a href="./bcpType.html"><p>Business Clean Program</p></a>
                <a href="./hcpType.html"><p>Home Clean Program</p></a>
                <a href="./cgpType.html"><p>Car Groom Program</p></a>
                <div class="social-height">
                    <div>
                        <h2>Follow Us</h2>
                        <div class="social-media-icon">
                            <i class="fa fa-facebook-square ico" aria-hidden="true"></i>
                            <i class="fa fa-instagram ico" aria-hidden="true"></i>
                            <i class="fa fa-twitter ico" aria-hidden="true"></i>
                            <i class="fa fa-linkedin ico" aria-hidden="true"></i>
                            <i class="fa fa-youtube-play ico" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="footer-content3 foot foot-underline">
                <h2 class="footer-head">Gallery</h2>
                <a href="./img/Blitzblank Corporate Brochure.pdf" download=""><p>Brochures</p></a>
                <p>Flyers</p>
                <p>Photos</p>
                <a href="videos.html"><p>Videos</p></a>
                <p>Blogs</p>
            </div>
            <div class="barcode-foot">
                <img width="80%" src="img/barcod.png" alt="">
            </div>
          </div>
         <span style="color: #000; font-size: 9px; font-weight: 600;">@2023. All rights reserved - Blitzblank Enterprises.</span>
        </div>

        <div class="discrimer" style="padding: 7px 0px;">
           <div class="container">
              <p style="color: #fff!important; font-size: 18px!important; font-weight: 700;">Disclaimer</p>
              <p style="color: #fff!important; font-size: 9px!important;">The information contained in this website is for general information purposes only. The information is provided by Blitzblank Enterprises and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related pictures, statistics and graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk. In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website. Through this website you are able to link to other websites which are not under the control of Blitzblank Enterprises . We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them. Every effort is made to keep the website up and running smoothly. However, Blitzblank Enterprises  takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
           </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.book-service').click(function(){
                $('.form-contact-msg').toggle();
                $('.overlay').toggle();
            });
            $('.fa-times-circle').click(function(){
                $('.form-contact-msg').hide();
                $('.overlay').hide();
            });
        })
    </script>

    <script>
        let book = document.querySelector('.book-service');
        let navbarr = document.querySelector('.navbar');
        let faCircle = document.querySelector('.fa-times-circle');
        console.log(navbarr);
        book.addEventListener('click', ()=>{
            navbarr.style.position = "fixed";
        })
        faCircle.addEventListener('click', () => {
            navbarr.style.position = "sticky"; 
        })
    </script>
    <script> 
    var wow = new WOW({
            offset:100,        // distance to the element when triggering the animation (default is 0)
            mobile:false       // trigger animations on mobile devices (default is true)
          });
        wow.init();
    </script>
</body>
</html>