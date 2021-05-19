function login(){
    window.location="login.html";
}
function signup(){
    window.location="signup.html";
}
function login_signup(){
    window.location="login_signup.html";
}
function patient_biography(){
    window.location="patient_biography.php";
}
function create_questions(){
    window.location="create_questions.html";
}
function show_scores(){
    window.location="show_scores.php";
}
function home(){
    window.location="index.html";
}


function replace_item_1(y){
var gender_id = document.getElementById("gender_btn");
gender_id.innerHTML = y
}
function replace_item_2(x){
var race_id = document.getElementById("race_btn");
race_id.innerHTML = x;
}
function replace_item_3(z){
var prev_diag_id = document.getElementById("prev_diag");
prev_diag_id.innerHTML = z;
}

function my(y){
var x = document.getElementById("gender_btn");
var x1 = document.getElementById("gender_btn1");
x.setAttribute("value",y);
x1.innerText = x.getAttribute("value");
x1.innerHTML = x.getAttribute("value");
}

function mx(x){
var y = document.getElementById("race_btn");
var y1 = document.getElementById("race_btn1");
y.setAttribute("value",x);
y1.innerText = y.getAttribute("value");
y1.innerHTML = y.getAttribute("value");
}

function mz(s){
var z = document.getElementById("prev_diag");
var z1 = document.getElementById("prev_diag1");
z.setAttribute("value",s);
z1.innerText = z.getAttribute("value");
z1.innerHTML = z.getAttribute("value");
}
