var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

//setting minimum date to be the current day
if (dd < 10) {
  dd = '0' + dd;
}

if (mm < 10) {
  mm = '0' + mm;
} 

today = yyyy + '-' + mm + '-' + dd;
document.getElementById("appointment_date").setAttribute("min", today);