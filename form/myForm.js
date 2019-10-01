function showForm(){
document.getElementById('form').style.display = 'block';
document.getElementById('in').style.display = 'none';
}


function showSpouse(){
document.getElementById('spouse').style.display = 'block';
}

function hideSpouse(){
document.getElementById('spouse').style.display = 'none';
}

function AddField() {
        var inp = document.createElement("input");
        var b = document.createElement("br");
        inp.setAttribute("class","child");
        inp.setAttribute("name","children[]")
        document.getElementById("child").appendChild(inp);
        document.getElementById("child").appendChild(b);
}  

function RemoveField(){
        var inpt = document.getElementById("child");
        inpt.removeChild(inpt.childNodes[3]);
}

var correct_password = false;
var correct_username = false;
var correct_email = false;
var checkbox_checked = 0;

function check_form() {
  if (correct_username == false) {
    alert("Username must be changed. It have been used already by other user.");
    return false;
  } else if (correct_password == false) {
    alert("Password must contain 8 characters with at least a capital letter, small letter, number, and symbol.");
    return false;
  } else if (correct_email == false) {
    alert("Email must be changed. It have been used already by other user.");
    return false;
  }
  var fav = ["1","2","3","4","5"];
  for (var i=0;i<5;++i) {
    if (document.getElementById(fav[i]).checked == true) {
      ++checkbox_checked;
    }
  }
  if (checkbox_checked <= 0 && correct_username==true && correct_password == true && correct_email==true) {
      alert("Please check at least one favorite!");
      return false;
  }
  return true;
}


function check_password(password) {

  var check_password = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

  if (check_password.test(password) == false) {
    document.getElementById("notify_password").style.color = "red";
    document.getElementById("notify_password").innerHTML = "Password is weak.";
    correct_password = false;
  } else {
    document.getElementById("notify_password").style.color = "green";
    document.getElementById("notify_password").innerHTML = "Valid Password";

    correct_password = true;
  }

}

function check_email(email){
    var xhr = new XMLHttpRequest();
    var email = document.getElementById('email').value;
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200 ){
        if (xhr.responseText == "") {
          document.getElementById('email').style.background = "white";
          document.getElementById('notify_email').innerHTML = xhr.responseText;
          correct_email = true;
        } else {
          document.getElementById('email').style.background = "red";
          document.getElementById("notify_email").style.color = "red";
          document.getElementById('notify_email').innerHTML = xhr.responseText;
          correct_email = false;
        }
      }
    }
    xhr.open("REQUEST","email.php?email="+email,true);
    xhr.send();
  }

  function check_username(username){
    var xhr = new XMLHttpRequest();
    var username = document.getElementById('username').value;
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200 ){
        if (xhr.responseText == "") {
          document.getElementById('username').style.background = "white";
          document.getElementById('notify_username').innerHTML = xhr.responseText;
          correct_username = true;
        } else {
          document.getElementById('username').style.background = "red";
          document.getElementById("notify_username").style.color = "red";
          document.getElementById('notify_username').innerHTML = xhr.responseText;
          correct_username = false;
        }
      }
    }
    xhr.open("GET","username.php?username="+username,true);
    xhr.send();
  }