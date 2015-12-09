var emailOk = false;
var nameOK = false;
var textOk = false;

function checkSubmit(){
	if(emailOk && nameOK && textOk){
		document.getElementById('submit').disabled = false;
	} else {
		document.getElementById('submit').disabled = true;
	}
}

function checkName(elem){
	var email = document.getElementById(elem.id).value;
	if(email.length<=0){
		document.getElementById(elem.id).style.borderStyle = "solid";
		document.getElementById(elem.id).style.borderColor = "red";
		nameOK = false;
		return;
	}else{
		nameOK = true;
		checkSubmit();
		return;
	}
}

function checkText(elem){
	var email = document.getElementById(elem.id).value;
	if(email.length<=0){
		document.getElementById(elem.id).style.borderStyle = "solid";
		document.getElementById(elem.id).style.borderColor = "red";
		textOk = false;
		return;
	}else{
		textOk = true;
		checkSubmit();
		return;
	}
}


function window_onload() {
  window.addEventListener("scroll",navbar_reset_top,false);
}

var navbar_top=75;

function navbar_reset_top() {
  var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
  if(scrollTop>navbar_top && menu.className==="navbar_absolute") {
    document.getElementById("menu").className="navbar_fixed";
  }
  else if(scrollTop<navbar_top && menu.className==="navbar_fixed") {
    document.getElementById("menu").className="navbar_absolute";
  }
}


function checkEmail(elem){
	var email = document.getElementById(elem.id).value;
	if(email.length==0){
		document.getElementById(elem.id).style.borderStyle = "solid";
		document.getElementById(elem.id).style.borderColor = "red";
		emailOk = false;
		return;
	}else{
		caracNoValidos = "_ / : , ;";
		for(i = 0; i < caracNoValidos.length; i++){
			caracMal = caracNoValidos.charAt(i);
			if(email.indexOf(caracMal,0) > -1){
				document.getElementById(elem.id).style.borderStyle = "solid";
				document.getElementById(elem.id).style.borderColor = "red";
				emailOk = false;
				return;
			}
		}

		posArroba = email.indexOf("@",1);
		if(posArroba==-1){
			document.getElementById(elem.id).style.borderStyle = "solid";
			document.getElementById(elem.id).style.borderColor = "red";
			emailOk = false;
			return;
		}else{
			if(email.indexOf("@",posArroba+1) != -1){
				document.getElementById(elem.id).style.borderStyle = "solid";
				document.getElementById(elem.id).style.borderColor = "red";
				emailOk = false;
				return;
			}else{
				posPunto = email.indexOf(".",posArroba);
				if(posPunto == -1){
					document.getElementById(elem.id).style.borderStyle = "solid";
					document.getElementById(elem.id).style.borderColor = "red";
					emailOk = false;
					return;
				}else{
					if(posPunto+3 > email.length){
						document.getElementById(elem.id).style.borderStyle = "solid";
						document.getElementById(elem.id).style.borderColor = "red";
						emailOk = false;
						return;
					}

					document.getElementById(elem.id).style.borderStyle = "";
					document.getElementById(elem.id).style.borderColor = "";
					emailOk = true;
					checkSubmit();
					return;
				}
			}
		}
	}
}