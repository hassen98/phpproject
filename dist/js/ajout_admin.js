

const form = document.getElementById('form');
const nom = document.getElementById('nom');
const email = document.getElementById('email');


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
	
});

function checkInputs() {
	// trim to remove the whitespaces
	const nomValue = nom.value.trim();
	const emailValue = email.value.trim();
	
	
	if(nomValue === '') {
		setErrorFor(nom, 'Le nom ne peut pas etre vide');
		
	} else {
		setSuccessFor(nom);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email ne peut pas etre vide');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, ' email invalide');
	} else {
		setSuccessFor(email);
	}
	
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
