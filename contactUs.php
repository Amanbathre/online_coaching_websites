<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contectUs.css">
    <style>
        
    </style>
</head>
<body>
<?php include 'header.php' ?>
    <div class="career_section">
        
        <section class="contact-section">
            <div class="container_contact">
                <h2>Contact Us</h2>
                <p>Get in touch and let us know how we can help.</p>
    
                <div class="contact-cards">
                    <div class="card">
                        <div class="icon">
                            <img src="https://img.icons8.com/material-outlined/24/000000/marker.png" alt="Location Icon">
                        </div>
                        <div class="info">
                            <h3>Address</h3>
                            <p>The GAMMA Institute, Station Rode , Bankhedi, Madhya Pradesh 461990</p>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="icon">
                            <img src="https://img.icons8.com/material-outlined/24/000000/phone--v1.png" alt="Phone Icon">
                        </div>
                        <div class="info">
                            <h3>Contact</h3>
                            <p>+91 9009335533</p>
                            <a href="tel:+919009335533">Call</a>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="icon">
                            <img src="https://img.icons8.com/material-outlined/24/000000/new-post.png" alt="Email Icon">
                        </div>
                        <div class="info">
                            <h3>Email</h3>
                            <p>xyz@231gmail.com</p>
                            <a href="#">Visit Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="overlap">

        <section class="form-section">
            <div class="container">
                <h2>Contact <span style="color: brown;">Us Form</span></h2>
    
                <form class="contact-form">
                    <div class="form-group">
                        <div class="form-field">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" placeholder="First Name" required>
                        </div>
                        <div class="form-field">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" placeholder="Last Name" required>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="form-field">
                            <label for="email">Email *</label>
                            <input type="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-field">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
    
                    <div class="form-field">
                        <label for="enquiry">Enquiry For *</label>
                        <input type="text" id="enquiry" placeholder="Enquiry For" required>
                    </div>
    
                    <div class="form-field">
                        <label for="message">Message *</label>
                        <textarea id="message" placeholder="Message" required></textarea>
                    </div>
    
                    <div class="submit-btn">
                        <button type="submit">
                            Submit
                            <span class="arrow"> →</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </div>
   <!-- Map Section -->
   <div class="main-map-container">
        <div class="map-container">
            <div class="text-content">
                <div class="text-card">
                    <h1><span style="color: #30336b;">Contact</span> <span style="color: brown;"> Us</span></h1>
                    <h2 style="padding-top: 15px; color: rgb(46, 44, 44);">We will definitely help you!</h2>
                    <p>To reach us by phone, tap below</p>
                    <div class="div-contact-us">
                        <a href="tel:+919009335533"><img src="images/phoneCall.png" alt="#"></a>
                        <h3 class="text-call-us">Call Us!</h3>
                        <h3 class="text-mob"> 0055-466-8877, +91 8888999999</h3>
                    </div>
                    <div class="div-social-icon">
                        <a href="#"><img src="images/instagram.png" alt="#"></a> 
                        <a href="#"><img src="images/facebook.png" alt="#"></a>
                        <a href="#"><img src="images/youtube.png" alt="#"></a>
                        <a href="#"><img src="images/whatsapp.png" alt="#"></a>
                    </div>
                </div> 
            </div>
            <div class="map-content">
                <div class="map-card">
                    <iframe frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.775194656255!2d78.52988287385689!3d22.773722625571626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397e4fbcc78ab269%3A0x55793819695f1e3a!2sGamma%20Academy!5e0!3m2!1sen!2sin!4v1727246475366!5m2!1sen!2sin"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>