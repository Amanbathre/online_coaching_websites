<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coaching Website</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="css/index.css
  ">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/statics.css">
  <link rel="stylesheet" href="css/someAbout.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/statics.css">
  <script src="js/statics.js"></script>

  <link rel="stylesheet" href="css/learners.css">
  <!-- <script src="js/learners.js"></script> -->
</head>

<body>

  <!-- Navbar -->

  <?php include 'header.php' ?>

  <!-- Image Slider -->
  <div id="carouselExampleControls mycarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner h-100">
      <div class="carousel-item active">
        <img src="images/b18d5ba4-6565-4f0b-820b-e113313a9b7b.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/b6eaee0f-e6cf-463b-b076-0fe20ad28874.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/c63035d5-6f6b-457a-b362-b00e42cb050a.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Live Courses Section -->
  <section class="live-courses mt-5">
    <div class="container">
      <h2 class="text-center mb-4">Offline Courses</h2>
      <div class="course-slider">
        <div class="course-wrapper">
          <!-- First Set of Items -->
          <div class="course-item">
            <div class="card">
              <img src="images/f87dcd59-d326-4540-bfc2-f91aba82ac4e.png" class="card-img-top" alt="Course 1">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 11th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>

            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/de2de8f8-2e7b-4ba2-8e2f-22d2d49fa628.jpg" class="card-img-top" alt="Course 2">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 12th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/f87dcd59-d326-4540-bfc2-f91aba82ac4e.png" class="card-img-top" alt="Course 3">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 10th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/de2de8f8-2e7b-4ba2-8e2f-22d2d49fa628.jpg" class="card-img-top" alt="Course 4">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 9th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/de2de8f8-2e7b-4ba2-8e2f-22d2d49fa628.jpg" class="card-img-top" alt="Course 5">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 11th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Duplicate Set of Items -->
          <div class="course-item">
            <div class="card">
              <img src="images/f87dcd59-d326-4540-bfc2-f91aba82ac4e.png" class="card-img-top" alt="Course 1">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 11th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>

            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/de2de8f8-2e7b-4ba2-8e2f-22d2d49fa628.jpg" class="card-img-top" alt="Course 2">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 12th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/f87dcd59-d326-4540-bfc2-f91aba82ac4e.png" class="card-img-top" alt="Course 3">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 10th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/de2de8f8-2e7b-4ba2-8e2f-22d2d49fa628.jpg" class="card-img-top" alt="Course 4">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 9th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="course-item">
            <div class="card">
              <img src="images/de2de8f8-2e7b-4ba2-8e2f-22d2d49fa628.jpg" class="card-img-top" alt="Course 5">
              <div class="card-body p-4 shadow-sm rounded">
                <h5 class="card-title text-center pcolor text-white p-2 rounded">Class 11th</h5>

                <div class="pricing-info mb-3 mt-3">
                  <p class="card-text mb-2">
                    <span class="badge bg-danger text-white">Limited Offer</span> <br>
                    <strong class="text-muted"> Price till 7th Oct: </strong>
                    <span class="text-success">₹11,000</span>
                  </p>
                  <p class="card-text mb-2">
                    <strong class="text-muted">Price after 7th Oct: </strong>
                    <span class="text-danger">₹12,000</span>
                  </p>
                </div>

                <div class="course-details mb-3">
                  <p class="card-text">
                    <strong class="text-muted">Start Date: </strong>
                    <span class="text-primary">10th Oct</span>
                  </p>
                  <p class="card-text">
                    <strong class="text-muted">Time: </strong>
                    <span class="text-primary">6 PM</span>
                  </p>
                </div>

                <div class="text-center submitcolor  mt-4">
                  <a href="#" class="btn rounded-pill text-white w-100">Enroll Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- something about us -->
    <section class="gamma-section">
    <div class="left float-left" data-aos="fade-right">
      <h3>Welcome to Gamma Academy: Top Coaching Institute for 9th, 10th, 11th, and 12th in Bankhedi</h3>
      <h4 class="text-muted">
        "Change does not roll on the wheels of inevitability, but comes through continuous struggle."
      </h4>
      <p class="text-muted">
        Gamma Academy, located in Bankhedi, Narmadapuram, is a renowned educational institution committed to delivering high-quality education and fostering academic excellence. With a proud history of teaching over 10,000 students, we have consistently achieved remarkable success in shaping the future of our learners. Our focus on student satisfaction is reflected in our impressive satisfaction rate of 99%, a testament to our dedication to meeting the diverse needs of our students.
        <br><br>
        At Gamma Academy, we believe in a holistic approach to education, combining innovative teaching methods with personalized support to ensure that each student reaches their full potential. Our experienced faculty is dedicated to creating a nurturing and stimulating learning environment where students can thrive.
        <br>
    </div>
  
    <div class="right float-right" data-aos="fade-left">
      <img src="images/cup-man-achievement-success-honor (1).jpg" alt="" class="achieveI">
    </div>
  </section>

 <!-- Stats Section -->
 <section class="stats-section h-50" id="stats">
    <div class="container">
      <div class="row">
        <!-- Satisfaction Rate -->
        <div class="col-lg-3 col-md-6 stats-item">
          <h2><span id="satisfaction-rate">0</span>%</h2>
          <p>Satisfaction Rate</p>
        </div>
        <!-- Learners -->
        <div class="col-lg-3 col-md-6 stats-item">
          <h2><span id="learners">0</span> K +</h2>
          <p>Learners</p>
        </div>
        <!-- Batches Delivered -->
        <div class="col-lg-3 col-md-6 stats-item">
          <h2><span id="batches-delivered">0</span> +</h2>
          <p>Batches Delivered</p>
        </div>
        <!-- Years of Experience -->
        <div class="col-lg-3 col-md-6 stats-item">
          <h2><span id="years-experience">0</span> +</h2>
          <p>Years of Experience</p>
        </div>
      </div>
    </div>
  </section>

  <section class="story container mt-4">
  <!-- Student Cards -->
  <div class="studentCard active" data-aos="fade-right">
    <img src="images/rankers/daksayani_chandra_cbse_12th_result_2023_topper_vasant_valley_school-one_one.jpg" alt="Student Image" class="student-img">
    <div class="student-details">
      <h2>Learner Story</h2>
      <p><strong>⭐⭐⭐⭐⭐</strong><br>"Gamma Academy is truly exceptional! The teachers are not only highly knowledgeable but also extremely supportive. I saw a significant improvement in my grades after joining their coaching for class 12th. Highly recommend it!"<br><strong>— Vaishali Bathare</strong> Class 12th Student</p>
    </div>
  </div>

  <div class="studentCard active" data-aos="fade-left">
    <img src="images\rankers\Screenshot_1-1 (1).jpg" alt="Student Image" class="student-img">
    <div class="student-details">
      <h2>Learner Story</h2>
      <p><strong>⭐⭐⭐⭐⭐</strong><br>"I owe my success in the Class 12th board exams to Gamma Academy. The structured lessons and regular assessments made a huge difference. The teachers are always available for any doubts, and the positive learning environment keeps you motivated throughout!"<br><strong>— Rohit Verma,</strong> Class 12th Student</p>
    </div>

  </div>

  <div class="studentCard active" data-aos="fade-right">
    <img src="images\rankers\prize.jpg" alt="Student Image" class="student-img">
    <div class="student-details">
      <h2>Learner Story</h2>
      <p><strong>⭐⭐⭐⭐⭐</strong><br>"Gamma Academy is exceptional in every aspect. The personalized attention given to each student helped me to excel in areas I struggled with before. The mentorship and guidance provided here are beyond anything I expected from a coaching institute."<br><strong>— Abhay Singh</strong> Class 10th Student</p>
    </div>
  </div>

  <div class="studentCard active"  data-aos="fade-left">
    <img src="images\rankers\jee-advanced-topper-093916165-16x9_0.jpg" alt="Student Image" class="student-img">
    <div class="student-details">
      <h2>Learner Story</h2>
      <p><strong>⭐⭐⭐⭐⭐</strong><br>"I enrolled in Gamma Academy for the Class 12th JEE preparation, and it was the best decision I made. The teachers’ approach is practical and focused, which helped me boost my performance. My overall academic skills improved, and I highly recommend it to serious aspirants!"<br><strong>— Jatin Yadav</strong> Class 12th Student</p>
    </div>
  </div>

  <div class="studentCard active" data-aos="fade-right">
    <img src="images\rankers\63980564.jpg" alt="Student Image" class="student-img">
    <div class="student-details">
      <h2>Learner Story</h2>
      <p><strong>⭐⭐⭐⭐⭐</strong><br>"Gamma Academy is hands down one of the best coaching centers out there. The way the teachers break down complex concepts and make them easy to understand is fantastic. I saw tremendous improvement in my performance, and their constant support pushed me to achieve great results!" <br><strong>-Saksham Sodhi
      </strong></strong> Class 9th Student</p>
    </div>
  </div>

</section>



  <?php include 'footer.php' ?>


      <!-- our aos data -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>
</body>

</html>