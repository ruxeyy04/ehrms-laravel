let hrs = document.getElementById("hrs");
let min = document.getElementById("min");
let sec = document.getElementById("sec");
let ampm = document.getElementById("ampm");

setInterval(() => {
  let currentTime = new Date();

  let hours = currentTime.getHours();
  let period = "AM";
  
  if (hours >= 12) {
    period = "PM";
    if (hours > 12) {
      hours -= 12;
    }
  }
  
  hrs.innerHTML = hours < 10 ? "0" + hours : hours;
  min.innerHTML = currentTime.getMinutes() < 10 ? "0" + currentTime.getMinutes() : currentTime.getMinutes();
  sec.innerHTML = currentTime.getSeconds() < 10 ? "0" + currentTime.getSeconds() : currentTime.getSeconds();
  ampm.innerHTML = period;

  let monthName = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];
  let dayName = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];
  document.getElementById("dateee").innerHTML =
    dayName[currentTime.getDay()] +
    " " +
    monthName[currentTime.getMonth()] +
    " " +
    currentTime.getDate() +
    ", " +
    currentTime.getFullYear();
}, 1000);

// MINI CLOCK DESIGN
var startTime = new Date(),
    // get the starting positions of each hand (in seconds)
    startS = startTime.getSeconds(),
    startM = startTime.getMinutes() * 60 + startS,
    startH = startTime.getHours() % 12 * 3600 + startM;

refreshClock();

// compute the rotation amount relative to the starting time
function refreshClock() {
  var now = new Date(),
      diff = timeDifference(startTime, now),
      degS = (startS + diff) / 60 * 360,
      degM = (startM + diff) / 3600 * 360,
      degH = (startH + diff) / 43200 * 360;
  
  $('.hour').css(rotate(degH));
  $('.minute').css(rotate(degM));
  $('.second').css(rotate(degS));
  
  setTimeout(refreshClock, 1000);
}

// compute the time difference between two date objects (in seconds)
function timeDifference(date1, date2) {
  return Math.round(Math.abs(date2.getTime() - date1.getTime()) / 1000);
}

// returns the cross-browser css rotation properties
function rotate(deg) {
  return {
    '-webkit-transform': 'rotate(' + deg + 'deg)',
    '-moz-transform': 'rotate(' + deg + 'deg)',
    '-ms-transform': 'rotate(' + deg + 'deg)',
    '-o-transform': 'rotate(' + deg + 'deg)',
    'transform': 'rotate(' + deg + 'deg)'
  };
}