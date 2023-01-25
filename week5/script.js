let age = "20 years old";
const fullName = "Mc Joseph Agbanlog";

let isFullScholar = true;

let yearLevel = 2;
let numberOfYearsInCollege = 4;

let yearsLeftInCollege = numberOfYearsInCollege - yearLevel;

let seniorHighSchool = "South East Asia Institute of Trade and Technology";

let course = "Bachelor of Science in Information Technology";

let major = "Mobile and Internet Technology";

let hobbies = ["Playing COD:M", "Sleeping"];

let hobbiesList = "";
for(let i = 0; i < hobbies.length; i++){
    hobbiesList += "<li>" + hobbies[i] + "</li>";
};

let gradDate = new Date("May 2024");

document.getElementById("profilePicture").addEventListener("mouseover", function() { 
  if (isFullScholar) { 
    alert(`${fullName} is currently ${age} years old and is a full-scholar of SM Foundation`); 
  } else {
    alert(`${fullName} is currently ${age} years old`); 
  }
});

document.getElementById("name").innerHTML += fullName;
document.getElementById("age").innerHTML += age;
document.getElementById("seniorHighSchool").innerHTML += seniorHighSchool;
document.getElementById("course").innerHTML += course;
document.getElementById("major").innerHTML += major;
document.getElementById("yearLevel").innerHTML += yearLevel;
document.getElementById("numberOfYearsInCollege").innerHTML += numberOfYearsInCollege;
document.getElementById("yearsLeftInCollege").innerHTML += yearsLeftInCollege;
document.getElementById("hobbies").innerHTML += "<ul>" + hobbiesList + "</ul>";
document.getElementById("gradDate").innerHTML += gradDate;

if (isFullScholar) {
    document.getElementById("scholarship").innerHTML = "I am a full-scholar of SM Foundation";
  } else {
    document.getElementById("scholarship").innerHTML = "Not a full-scholar";
  };

var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname){
  for(tablink of tablinks){
    tablink.classList.remove("active-link");
  }
  for(tabcontent of tabcontents){
    tabcontent.classList.remove("active-tab");
  }
}

