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

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});

$("document").ready(function($){
    var nav = $('#menu');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 125) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
});

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