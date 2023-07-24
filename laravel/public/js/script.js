var eye = document.querySelector ('.fa-eye');
var eyeoff = document.querySelector ('.fa-eye-slash');
var passwordField = document.querySelector ('input[type=password]');

eye.addEventListener('click', ()=>{
	eye.style.display = "none";
	eyeoff.style.display = "block";
	passwordField.type = "text";
});

eyeoff.addEventListener('click', ()=>{
	eyeoff.style.display = "none";
	eye.style.display = "block";
	passwordField.type = "password";
});