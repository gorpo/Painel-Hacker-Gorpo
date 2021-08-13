function getRandomDigit(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function isNumber(n) {
	return !isNaN(parseFloat(n)) && isFinite(n)
}

/*
function processValidation(validateFunction) {
	if(validateFunction() == true) {
		$("#failGif").css({'display' : 'none'});
		$("#successGif").css({'display' : 'block'});
		
	} else{
		$("#failGif").css({'display' : 'block'});
		$("#successGif").css({'display' : 'none'});
		
	}		
}
*/

function processValidation(validateFunction) {
	if(validateFunction() == true) {
		$("#sonuc").html('<font color="green"><i class="fal fa-check"></font>');
	} else{
		$("#sonuc").html('<font color="red"><i class="fal fa-exclamation-triangle"></font>');
	}		
}


function generateTcNo(targetDiv) {
	$("#" + targetDiv).html(null);
	var miktar = $("#quantity").val();
	for(sayi = 1; sayi <= miktar; sayi++) {
	var digits = [];
	var tcNo = "";
	digits[0] = getRandomDigit(1,9);
	for(i = 1; i < 9; i++) {
		digits[i] = getRandomDigit(0,9);
	}
	digits[9] = ((digits[0] + digits[2] + digits[4] + digits[6] + digits[8]) * 7 - 
					(digits[1] + digits[3] + digits[5] + digits[7])) % 10;
	digits[10] = (digits[0] + digits[1] + digits[2] + digits[3] + digits[4] + digits[5] + 
				digits[6] + digits[7] + digits[8] + digits[9]) % 10;
				
	tcNo = digits[0].toString() + digits[1].toString() + digits[2].toString() + digits[3].toString() + 
			digits[4].toString() + digits[5].toString() + digits[6].toString() + digits[7].toString() + 
			digits[8].toString() + digits[9].toString() + digits[10].toString();
			
	$("#" + targetDiv).append(tcNo+'\r');
	//$("#" + targetDiv).val(tcNo);
	}
}

function validateTcNo() {
	var tcNo = $("#tcNoValidationInput").val();
	var digits = ("" + tcNo).split("").map(Number);
	if (digits.length != 11)
		return false;
	for(i = 0; i < digits.length - 1; i++) {
		if(!isNumber(digits[i]))
			return false;
	}
	var digit10 = ((digits[0] + digits[2] + digits[4] + digits[6] + digits[8]) * 7 - (digits[1] + digits[3] + digits[5] + digits[7])) % 10;
	var digit11 = (digits[0] + digits[1] + digits[2] + digits[3] + digits[4] + digits[5] + digits[6] + digits[7] + digits[8] + digit10) % 10
	
	if(digits[9] == digit10 && digits[10] == digit11) return true;
	
	return false;
}

function generateVergiNo(targetDiv) {
	$("#" + targetDiv).html(null);
	var miktar = $("#quantity").val();
	for(sayi = 1; sayi <= miktar; sayi++) {
	var digits = [];
	var vergiNo = "";
	var sum = 0;
	
	for(i =0; i < 9; i++) {
		digits[i] = getRandomDigit(0,9);
	}
	
	for(i = 0; i < 9; i++) {
		var tmp = (digits[i] + 10 - ( i + 1 ) ) % 10;
		sum = (tmp == 9 ? sum + tmp : sum + ((tmp * (Math.pow(2, 10 - ( i + 1 ))) ) % 9));	
	}
	digits[9] = (10 - (sum % 10)) % 10
				
	vergiNo = digits[0].toString() + digits[1].toString() + digits[2].toString() + digits[3].toString() + 
			digits[4].toString() + digits[5].toString() + digits[6].toString() + digits[7].toString() + 
			digits[8].toString() + digits[9].toString();
			
	$("#" + targetDiv).append(vergiNo+'\r');
	}
}

function validateVergiNo() {
	var vergiNo = $("#vergiNoValidationInput").val();
	var digits = ("" + vergiNo).split("").map(Number);
	var sum = 0;
	var tmp = 0;
	if (digits.length < 8 || digits.length > 10)
		return false;
	for(i = 0; i < digits.length - 1; i++) {
		if(!isNumber(digits[i]))
			return false;
		
		tmp = (digits[i] + 10 - ( i + 1 ) ) % 10;
		sum = (tmp == 9 ? sum + tmp : sum + ((tmp * (Math.pow(2, 10 - ( i + 1 ))) ) % 9));	
	}
	if (digits[digits.length -1] == (10 - (sum % 10)) % 10)
		return true;
		
	return false;
}