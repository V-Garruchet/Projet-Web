document.getElementById("createdPassword").addEventListener("input", e => {
    const password = e.target.value; // Value of the password field
    let message;
    let messageColor;
    if (password.length >= 8 && /\d/.test(password)) {
        message = "Sécurité : forte";
        messageColor = "green"; // Long password => green;
    }
    else if (password.length >= 6) {
        message = "Sécurité : moyenne";
        messageColor = "orange"; // Long password => green;
    }

    else {
        message = "Sécurité : faible";
        messageColor = "red"; // Short password => red;
    }

    const passwordHelpElement = document.getElementById("passwordHelp");
    passwordHelpElement.textContent = message; // helper text
    passwordHelpElement.style.color = messageColor; // helper text color
  });

  function samePasswordVerification(password1, password2){
    const passwordIcon = document.getElementById("passwordIcon");
    let iconName;
    let iconText;
    if (password1 === password2) {
        iconName = "fa fa-check-circle float-right";
        iconText = "Les mots de passe correspondent"; 
    }
    else {
        iconName = "fa fa-exclamation-circle float-right";
        iconText = "Les mots de passe ne sont pas identiques"; 
    }
    passwordIcon.title = iconText;
    passwordIcon.className = iconName;
  };

  
  document.getElementById("createdPassword").addEventListener("input", e => {
    let password2 = document.getElementById("createdPassword2").value
    let password1 = e.target.value; // Value of the password field
    samePasswordVerification(password1, password2)
  });

document.getElementById("createdPassword2").addEventListener("input", e => {
    let password1 = document.getElementById("createdPassword").value
    let password2 = e.target.value; // Value of the password field
    samePasswordVerification(password1, password2)
  });

