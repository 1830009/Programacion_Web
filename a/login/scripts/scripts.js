document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);


firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.

    document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none";

    var user = firebase.auth().currentUser;

    if(user != null){

      var email_id = user.email;
      document.getElementById("user_para").innerHTML = "Bienvenido a MarketVic : " + email_id;

    }

  } else {
    // No user is signed in.

    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";
    // alert("jelou perros");

  }
});

function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });

}

function logout(){
  // alert("si jalo");
  firebase.auth().signOut();
  window.location.replace("../inicio.html");
}

function register(){

  let correo = document.getElementById("email-register").value;
  let contrasena = document.getElementById("password-register").value;
  let contrasenaconf = document.getElementById("confirm-pass").value;
  // alert("Este es tu correo: "+correo);
  if (contrasena===contrasenaconf) {
    firebase.auth().createUserWithEmailAndPassword(correo, contrasena).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message; 
      alert(errorCode);
      alert(errorMessage);
      // ...
    });
    
  }else{
    alert("Revise la contraseña");
  }
  
}

function updatepass(){

  var auth = firebase.auth();
  var emailAddress = document.getElementById("email_change").value;

  auth.sendPasswordResetEmail(emailAddress).then(function() {
    alert("REVISA TU CORREO");
    window.location.href="./index.html";
    // Email sent.
  }).catch(function(error) {
    // An error happened.
  });
}

