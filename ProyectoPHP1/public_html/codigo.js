//Validar si os campos no estan rellenos
function ValidacionLogin(){
	var user = document.getElementById('username').value;
	var pass = document.getElementById('password').value;
	if(user=='' && pass==''){
		document.getElementById('alerta').innerHTML = 'El campo usuario y contraseña son obligatorios';
                document.getElementById('username').style.border = '2px solid red';
                document.getElementById('password').style.border = '2px solid red';
		document.getElementById('alerta').style.display = 'block';
		return false;
	}else if(user == ''){
		document.getElementById('alerta').innerHTML = 'El campo usuario es obligatiorio';
                document.getElementById('username').style.border = '2px solid red';
		document.getElementById('alerta').style.display = 'block';
		return false;
	}else if(pass == ''){
		document.getElementById('alerta').innerHTML = 'El campo contraseña es obligatiorio';
                document.getElementById('password').style.border = '2px solid red';
		document.getElementById('alerta').style.display = 'block';
		return false;
	}else{
		return true;
	}
	
}

//Validacion de subida de imagenes
function ValidacionRegistro(){
	var foto = document.getElementById('foto').value;
	var titol = document.getElementById('titol').value;
	if(foto == '' && titol == ''){
		document.getElementById('alerta').innerHTML = 'Rellena los campos necesarios';
                document.getElementById('foto').style.border = '2px solid red';
                document.getElementById('titol').style.border = '2px solid red';
		document.getElementById('alerta').style.display = 'block';
		return false;
	}else if(foto == ''){
		document.getElementById('alerta').innerHTML = 'Selecciona la ruta de la imagen';
                document.getElementById('foto').style.border = '2px solid red';
		document.getElementById('alerta').style.display = 'block';
		return false;
	}else if(titol == ''){
		document.getElementById('alerta').innerHTML = 'Selecciona un título';
                document.getElementById('titol').style.border = '2px solid red';
		document.getElementById('alerta').style.display = 'block';
		return false;
	}else{
		return true;
	}
    }
