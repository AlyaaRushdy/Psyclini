var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
var today_rev = new Date;
const min_today_classes = document.querySelectorAll('.min_today')
const dob_max_year_classes = document.querySelectorAll('.dob_max')

if(dd<10){
    dd='0'+dd
} 
if(mm<10){
    mm='0'+mm
} 

today = dd+'-'+mm+'-'+yyyy;
today_rev = yyyy+'-'+mm+'-'+dd;

min_today_classes.forEach((min_today) => {
    min_today.setAttribute("min", today_rev);
});

dob_max_year_classes.forEach((dob_max) => {
    dob_max.setAttribute('max', yyyy - 20 +'-'+mm+'-'+dd);
});

document.getElementById('date').innerText = today;