<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Golden Light</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="styleForContact.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="script.js" defer></script>
</head>
<body>
    <div class="sub-header container-fluid">
        <div class="first-row w-100 py-3">
            <div class="mx-auto col-9">
                <div class="d-flex justify-content-between">
                        <a href="index.html"><img src="Images/Logo1.png" width="100px" height="60px"></a>
                        <ul class="d-inline-flex my-auto justify-content-between">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="AboutUs.html">ABOUT US</a></li>
                            <li><a href="Gallery.html">GALLERY</a></li>
                            <li><a href="portfolio3.html">SERVICES</a></li>
                            <li><a href="contact.php">CONTACTS</a></li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="col-12 my-auto" style="padding: 4% 0 4% 0">
            <h1>CONTACT US</h1>
        </div>
    </div>
    
<!-----contact----->
<div class="contact-cover">
    <div class="contactUs">
        <div class="title">
            <h2>Get in Touch</h2>
        </div>
        <div class="box">
        <!-----Form----->
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action='dbconnect.php' method="POST">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" name="fName" id="fName" autocomplete="off" placeholder="Enter your first name" required>
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" name="lName" id="lName" autocomplete="off" placeholder="Enter your last name" required>
                            </div>
                        </div>
                    
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email Address</span>
                                <input type="email" name="email" id="email" autocomplete="off" placeholder="Enter your email address" required>
                            </div>
                            <div class="inputBox">
                                <span>Mobile Number</span>
                                <input type="text" name="mnum" id="mnum" autocomplete="off" placeholder="Enter your mobile number" required>
                            </div>
                        </div>
                
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="message" id="message" placeholder="Enter your inquiry"></textarea>
                            </div>
                        </div>
                    
                    <div class="row100">
                            <div class="inputBox">
                                <input type="submit" name="submit" id="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-----Info----->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>UNIT 2A, FLC Center, 888 Hernan Cortes St., Kasambagan, Mandaue City, Cebu, PH</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:goldenlightmodels@gmail.com">goldenlightmodels@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel:+63 0961-133-5861">+63 0961-133-5861</a>
                    </div>
                    <ul class="sci">
                            <li><a href="https://www.facebook.com/glmodelsofficial"><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    </ul>
                </div>
            </div>
            
            <!-----Map----->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.175357682455!2d123.91905067586544!3d10.327847467305926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999037d4c24e5%3A0x116c69c654f0f51!2sFLC%20Center%201!5e0!3m2!1sen!2sph!4v1711115309149!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-----Footer----->
     <footer>
        <div class="row-footer">
            <div class="col-footer">
                <img src="Images/Logo1.png" class="logo">
                <p>Golden Light Model & Artist Management was founded in 2019 with the dual goals of offering top-notch educational services and supporting community involvement via projects like the C.U.R.E. Foundation. Golden Light Model & Artist Management was born out of a deep combination of my interests and life experiences.</p>
            </div>
            <div class="col-footer">
            <h3>Office <div class="underline-office"><span></span></div></h3>
            <p>UNIT 2A, FLC Center</p>
            <p>888 Hernan Cortes Street</p>
            <p>Kasambagan, Mandaue City</p>
            <p>Cebu, Philippines, 6014</p>
            <p class="email-id">goldenlightmodels@gmail.com</p>
            <h4>+63 0961-133-5861</h4>
            </div>
            <div class="col-footer">
            <h3>Links <div class="underline-links"><span></span></div></h3>
                <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Contacts</a></li>
                </ul>
            </div>
        <div class="col-footer">
            <h3>Newsletter <div class="underline-news"><span></span></div></h3>
            <form>
                <i class="fa fa-envelope"></i>
                <input type="email" id="email" name="email" autocomplete="email" placeholder="Enter your email address" required>
                <button type="submit"><i class="fa fa-arrow-right"></i></button>
            </form>
                <div class="icons">
                <a href= "https://www.facebook.com/glmodelsofficial" target="_blank" class="fa fa-facebook"></a>
                <i class="fa fa-twitter"></i>
                <a href="https://www.instagram.com/gl_models_official/" target="_blank" class="fa fa-instagram"></a>
                <i class="fa fa-linkedin"></i>
            </div>
         </div>
        </div>
        <hr>
        <p class="copyright">Golden Light Models & Artist Management @ 2024 - All Rights Reserved</p>
    </footer>  
    
<!-----Toggle Menu----->  
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>
