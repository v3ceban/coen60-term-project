// eslint-disable-next-line
function validateForm() {
  var name = document.getElementById("Name").value;
  var email = document.getElementById("Email").value;
  var major = document.querySelectorAll("input[type='radio']");
  var isSelected = false;

  var nameRegex = /^[a-zA-Z]+\s[a-zA-Z]+$/;
  if (!nameRegex.test(name)) {
    alert("Name must contain exactly two words and only latin letters");
    return false;
  }

  var emailRegex = /^[a-zA-Z0-9._%+-]+@scu\.edu$/;
  if (!emailRegex.test(email)) {
    alert("Email must have @scu.edu domain.");
    return false;
  }

  for (let i = 0; i < major.length; i++) {
    if (major[i].checked) {
      isSelected = true;
      break;
    }
  }

  if (isSelected == false) {
    alert("You have to chose a major.");
    return false;
  }

  return true;
}
