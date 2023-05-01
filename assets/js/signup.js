
const form = document.getElementById('form1');
const username =document.getElementById('username');
const password =document.getElementById('password');
const password2 =document.getElementById(' password2');
const Email =document.getElementById('email');
const addrees =document.getElementById('address');
const PhoneNumber =document.getElementById('phone number');
const DOB =document.getElementById('DOB');



form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	const DOB = DOB.value.trim();
	const addrees = addrees.value.trim();
	const PhoneNumber = PhoneNumber.value.trim();

	
	if(usernameValue == '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}
	
	if(emailValue == '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue == '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
	if(password2Value == '') {
		setErrorFor(password2, 'Password2 cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
	}
}

