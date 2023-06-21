function generateTime() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    
    var timeString = hours + ":" + minutes + ":" + seconds;
    
    document.getElementById("current-time").innerHTML = "Current Time: " + timeString;
  }
  
  // Automatically generate time on page load
  generateTime();
  