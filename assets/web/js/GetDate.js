
  // Get current date
  var currentDate = new Date();

  var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  var monthName = ["January, February, March, April, May, June, July, August, September, October, November, December"]

  // Format the date as desired
  var day = currentDate.getDate();
  // var month = currentDate.getMonth() + 1; // January is 0
  var month = monthName[currentDate.getMonth()];
  var year = currentDate.getFullYear();
  var dayName = daysOfWeek[currentDate.getDay()]; // Get the day name

  // Display the date in the specified element
  document.getElementById("currentdate").innerHTML =  dayName + ", " + day + "/" + month + "/" + year;
