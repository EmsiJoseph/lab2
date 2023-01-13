var profile = {
    "name": "Mc Joseph",
    "age": "20 years old",
    "shs": "South East Asia Institute of Trade and Technology",
    "course": "Bachelor of Science in Information Technology",
    "major": "Majoring in Mobile and Internet Technology",
    "scholarship": "I am a full-scholar of SM Foundation",
    "hobbies": "Playing COD:M",
    "experience": "I have little experience in basic programming in Java and Python. I love playing mobile games, and I can say that I am quite good at playing Call of Duty Mobile.",
    "questions": [
        {
            "q": "What are your goals in life?",
            "answer": "To have a high-paying job either self-employed or working in an IT company."
        },
        {
            "q": "What do you expect to learn from this course (Web Programming)?",
            "answer": "I am expecting to learn more about the different programming languages."
        },
        {
            "q": "What do you want to learn to help you in your chosen Major?",
            "answer": "Learning about Java or C# which are great languages in App development."
        },
        {
            "q": "Any other interesting aspects of your life that you would like to share:",
            "answer": "There’s nothing interesting about me. I think being part of multiple school organizations is interesting enough."
        }
    ]
};

document.getElementById("name").innerHTML = profile.name;
document.getElementById("age").innerHTML = profile.age;
document.getElementById("shs").innerHTML = profile.shs;
document.getElementById("course").innerHTML = profile.course;
document.getElementById("major").innerHTML = profile.major;
document.getElementById("scholarship").innerHTML = profile.scholarship;
document.getElementById("hobbies").innerHTML = profile.hobbies;
document.getElementById("experience").innerHTML = profile.experience;

var questionList = "";
for (var i = 0; i < profile.questions.length; i++) {
    questionList += "<li>" + profile.questions[i].q + " ---- "
    + profile.questions[i].answer + "</li>";
}
document.getElementById("questions").innerHTML = questionList;

var questionList = document.getElementById("questions");
var questionQs = questionList.getElementsByTagName("a");

for (var i = 0; i < questionQs.length; i++) {
    questionQs[i].classList.add("bold-questions");
}


