// Slider for the Live Courses Section
let courseIndex = 0;
let courseItems = document.querySelectorAll(".course-item");
let totalCourses = courseItems.length;

function showCourses() {
  for (let i = 0; i < totalCourses; i++) {
    courseItems[i].style.transform = `translateX(-${courseIndex * 100}%)`;
  }
}

setInterval(() => {
  courseIndex = (courseIndex + 1) % totalCourses;
  showCourses();
}, 3000); // Change courses every 3 seconds
