window.addEventListener("DOMContentLoaded", function() {
    var carouselImages = document.querySelectorAll(".carousel img");
    var currentIndex = 0;
    
    // Show the initial image
    carouselImages[currentIndex].style.display = "block";
    
    // Start the carousel
    setInterval(function() {
      // Hide the current image
      carouselImages[currentIndex].style.display = "none";
      
      // Move to the next image
      currentIndex = (currentIndex + 1) % carouselImages.length;
      
      // Show the next image
      carouselImages[currentIndex].style.display = "block";
    }, 4000); // Change image every 4 seconds
  });