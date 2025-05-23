<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include 'header.php' ?>
    <div class="pic_colom">
        <div>
            <h1>Academic Services</h1>
            
        </div>
        <div class="horizontal-line"></div>
    </div>
    
    <div class="card_div">
        <div class="container-happy_clients">
            <!-- 2 Year Program --> 
            <div class="card_program">
                <h2>4 Year Program</h2>
                <h3>For 9th Moving</h3>
                <p>1. 450+ Mock + Practice Tests</p>
                <p>2. 1 Lakh+ Questions Practice</p>
                <p>3. 2600+ Hours Classroom Session</p>
                <p>4. 2500+ Self Study & Discussion</p>
                <p>5. Recorded Lectures Available</p>
                <a href="#" class="know-more">KNOW MORE</a>
            </div>
           
    
            <!-- 2 Year Program --> 
            <div class="card_program">
                <h2>3 Year Program</h2>
                <h3>For 10th Moving</h3>
                <p>1. 450+ Mock + Practice Tests</p>
                <p>2. 1 Lakh+ Questions Practice</p>
                <p>3. 2600+ Hours Classroom Session</p>
                <p>4. 2500+ Self Study & Discussion</p>
                <p>5. Recorded Lectures Available</p>
                <a href="#" class="know-more">KNOW MORE</a>
            </div>
    
            <!-- 3 Year Program -->
            <div class="card_program">
                <h2>2 Year Program</h2>
                <h3>For 11th Moving</h3>
                <p>650+ Mock + Practice Tests</p>
                <p>1.5 Lakh+ Questions Practice</p>
                <p>3800+ Hours Classroom Session</p>
                <p>4200+ Self Study & Discussion</p>
                <p>Recorded Lectures Available</p>
                <a href="#" class="know-more">KNOW MORE</a>
            </div>
    
            <!-- 4 Year Program -->
            <div class="card_program">
                <h2>1 Year Program</h2>
                <h3>For 12th Moving</h3>
                <p>850+ Mock + Practice Tests</p>
                <p>2 Lakh+ Questions Practice</p>
                <p>5000+ Hours Classroom Session</p>
                <p>5500+ Self Study & Discussion</p>
                <p>Recorded Lectures Available</p>
                <a href="#" class="know-more">KNOW MORE</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="Current_batchs"><h2>Current <span style="color: brown;"> Batchs</span></h2></div>
   
        <div class="horizontal-line"></div>

    <div class="slider-container">
        <div class="slider">
            
            <div class="slide">
                <img src="./images/physics.jpg" alt="MP ESB" class="logo">
                <h3> Complete Online Course physics</h3>
                <p>Terms and Conditions apply</p>
                <button class="details-btn">Get Details</button>
            </div>
            <div class="slide">
                <img src="./images/chemistry.jpg" alt="MP ESB" class="logo">
                <h3>Complete Online Course Charset</h3>
                <p>Terms and Conditions apply</p>
                <button class="details-btn">Get Details</button>
            </div>
            <div class="slide">
                <img src="./images/math.jpg" alt="MP ESB" class="logo">
                <h3>Complete Online Course Mathematics</h3>
                <p>Terms and Conditions apply</p>
                <button class="details-btn">Get Details</button>
            </div>
            <div class="slide">
                <img src="./images/bio.webp" alt="MP ESB" class="logo">
                <h3>Complete Online Course Biology</h3>
                <p>Terms and Conditions apply</p>
                <button class="details-btn">Get Details</button>
            </div>
        </div>
    </div>

    <div class="hero-sectioin">
        <div class="div-d1">
           
        </div>
        <div class="div-d2">
            
        </div>
    </div>
    <div class="over-crear">
        <div class="mission-vision">
            <div class="mission">
                <h2>Our Mission</h2>
                <p>As a dedicated educator, my mission is to inspire and guide students to achieve academic excellence, especially in 10th, 12th, and competitive exams like JEE and NEET. I aim to provide quality education that not only helps students succeed in exams but also nurtures their overall intellectual growth, ensuring they are well-prepared for their future academic and career endeavors.</p>
            </div>
        </div>
        <div class="center-icon">
             <img src="./images/arrows.png" alt="Arrow Icon">
        </div>
        
        <div class="mission-vision">
            <div class="vision">
                 <h2>Our Vision</h2>
                 <p>Our vision is to empower students by providing them with quality education, comprehensive resources, and personalized mentorship to excel in their 10th, 12th, JEE, and NEET examinations. We strive to cultivate curiosity, critical thinking, and academic excellence, ensuring every student reaches their highest potential and confidently pursues their future aspirations.</p>
            </div>
        </div>
            
    </div>  <br><br>
    <?php include 'footer.php' ?>


    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        let currentIndex = 0;
        
        // Clone first and last slide for infinite effect
        const firstClone = slides[0].cloneNode(true);
        const lastClone = slides[totalSlides - 1].cloneNode(true);
        
        slider.appendChild(firstClone); // Append the first slide at the end
        slider.insertBefore(lastClone, slides[0]); // Prepend the last slide at the beginning
        
        const slideWidth = slides[0].clientWidth;
        let slideTransition = true;
    
        // Set initial position to show the first slide correctly
        slider.style.transform = `translateX(-${slideWidth}px)`;
    
        function slideNext() {
            if (slideTransition) {
                slideTransition = false;
                currentIndex++;
    
                // Slide to the next position
                slider.style.transition = 'transform 0.5s ease-in-out';
                slider.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}px)`;
    
                // Reset position if we're at the cloned last slide
                slider.addEventListener('transitionend', () => {
                    if (currentIndex >= totalSlides) {
                        slider.style.transition = 'none';
                        currentIndex = 0;
                        slider.style.transform = `translateX(-${slideWidth}px)`;
                    }
                    slideTransition = true;
                });
            }
        }
    
        function slidePrev() {
            if (slideTransition) {
                slideTransition = false;
                currentIndex--;
    
                // Slide to the previous position
                slider.style.transition = 'transform 0.5s ease-in-out';
                slider.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}px)`;
    
                // Reset position if we're at the cloned first slide
                slider.addEventListener('transitionend', () => {
                    if (currentIndex < 0) {
                        slider.style.transition = 'none';
                        currentIndex = totalSlides - 1;
                        slider.style.transform = `translateX(-${totalSlides * slideWidth}px)`;
                    }
                    slideTransition = true;
                });
            }
        }
    
        // Automatic sliding
        setInterval(slideNext, 3000); // Slide every 3 seconds
    </script>
    
    
</body>
</html>