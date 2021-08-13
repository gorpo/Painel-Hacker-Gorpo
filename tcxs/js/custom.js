$(document).ready(function() {
	console.log("%c Fuck You!!", "color: RED; font-weight: bold; font-size: 60px");

})



$.fn.animateRotate = function(angle, duration, easing, complete) {
	return this.each(function() {
		var $elem = $(this);

		$({
			deg: 0
		}).animate({
			deg: angle
		}, {
			duration: duration,
			easing: easing,
			step: function(now) {
				$elem.css({
					transform: 'rotate(' + now + 'deg)'
				});
			},
			complete: complete || $.noop
		})
	})
}


function captchayenile() {
	document.getElementById('captcha').src = 'captcha.php?s=' + Math.random();
	$('.yenile.fal.fa-sync').animateRotate(360);
}

function captchayenile2() {
	document.getElementById('captcha').src = 'captcha-2.php?s=' + Math.random();
	$('.yenile.fal.fa-sync').animateRotate(360);
}

function kaydir() {
	$('html, body').animate({
		scrollTop: 300
	}, 400);
}


function ticket(id) {
	$.ajax({
		type: 'GET',
		url: 'ticket.json',
		dataType: 'json',
		success: function(data) {
			$('#sekme3').addClass("active").css('display', 'block');
			$('#goruntule').removeClass("tab-pane").addClass("tab-pane active");
			$('#aktif').removeClass("tab-pane active").addClass("tab-pane");
			$('#pasif').removeClass("tab-pane active").addClass("tab-pane");
			$('#sekme1').removeClass("active");
			$('#sekme2').removeClass("active");
			$('#sekme4').removeClass("active");

			$('#iletiid').html(id);
			$('#konu').html(data.ticketid[id].konu);
			$('#mesaj').html(data.ticketid[id].mesaj);
			$('#tarih').html(data.ticketid[id].tarih);
			$('#durum').html(data.ticketid[id].durum);

			if (data.ticketid[id].cevap == '') {
				$('#cevapgrup').css('display', 'none');
			} else {
				$('#cevap').html(data.ticketid[id].cevap);
				$('#cevapgrup').css('display', 'block');
				$('#cizgi').css('display', 'block');
			}
			if (data.ticketid[id].cevaptarihi == '') {
				$('#cevaptarihigrup').css('display', 'none');
			} else {
				$('#cevaptarihi').html(data.ticketid[id].cevaptarihi);
				$('#cevaptarihigrup').css('display', 'block');
				$('#cizgi').css('display', 'block');
			}
		}
	})
}

function sifregoster() {
	if ('password' == $('#sifre').attr('type')) {
		$('#sifre').prop('type', 'text');
		$('#sifre1').prop('type', 'text');
		$('#sifre2').prop('type', 'text');
		$('.fal.fa-eye').removeClass('.fal fa-eye').addClass('.fal fa-eye-slash');
	} else {
		$('#sifre').prop('type', 'password');
		$('#sifre1').prop('type', 'password');
		$('#sifre2').prop('type', 'password');
		$('.fal.fa-eye-slash').removeClass('.fal fa-eye-slash').addClass('.fal fa-eye');
	}
}


function packetget(packet) {
	$.ajax({
		url: 'credit.json?' + packet,
		dataType: 'json',
		beforeSend: function() {
			$('#durum').css('display', 'block');
		},
		success: function(data) {
			$('#paketayrinti').css('display', 'block');
			$('#name').val(data.name);
			$('#credit').val(data.credit);
			$('#tl').val(data.tl);
			$('#tltousd').html(data.tl + ' TL > USD');
			$('#usd').val(data.usd);
			$('#usdtobtc').html(data.usd + ' USD > BTC');
			$('#btc').val(data.btc);
			$('#durum').css('display', 'none');
		}
	})
}




$(document).ready(function() {
	$('input[name="eposta"]').keyup(function() {
		if (this.value.match(/[^A-Za-z0-9-_.@]/g)) {
			this.value = this.value.replace(/[^A-Za-z0-9-_.@]/g, '');
		}
	});
	$('input[name="sifre"]').keyup(function() {
		if (this.value.match(/[^A-Za-z0-9]/g)) {
			this.value = this.value.replace(/[^A-Za-z0-9]/g, '');
		}
	});
	$('input[name="sifre1"]').keyup(function() {
		if (this.value.match(/[^A-Za-z0-9]/g)) {
			this.value = this.value.replace(/[^A-Za-z0-9]/g, '');
		}
	});
	$('input[name="sifre2"]').keyup(function() {
		if (this.value.match(/[^A-Za-z0-9]/g)) {
			this.value = this.value.replace(/[^A-Za-z0-9]/g, '');
		}
	});
	$('input[name="icqno"]').keyup(function() {
		if (this.value.match(/[^A-Za-z0-9-_.@]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});
	$('input[name="guvenlikkodu"]').keyup(function() {
		if (this.value.match(/[^0-9]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});
	$('input[name="guvenlikkodu2"]').keyup(function() {
		if (this.value.match(/[^0-9]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});
})


$(document).ready(function() {
	$('#passwordsend').click(function() {
		var sifre = $('#sifre').val();
		var sifre1 = $('#sifre1').val();
		var sifre2 = $('#sifre2').val();
		var guvenlikkodu = $('#guvenlikkodu').val();
		var token = $('#token').val();
		if (sifre == '' || sifre1 == '' || sifre2 == '' || guvenlikkodu == '' || token == '') {
			$('#sonuc').html('<font color="red">Do not leave free space..</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else if (guvenlikkodu.length != 6) {
			$('#sonuc').html('<font color="red">Security code incorrect.</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else if (sifre.length < 8 || sifre1.length < 8 || sifre2.length < 8 || sifre.length > 16 || sifre1.length > 16 || sifre2.length > 16) {
			$('#sonuc').html('<font color="red">Password incorrect. <br />8 character (A-Z, a-z, 0-9)(Latin)</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else if (sifre1 !== sifre2) {
			$('#sonuc').html('<font color="red">New passwords are not the same.</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else {
			$.ajax({
				type: 'POST',
				url: 'ajax.php',
				dataType: 'json',
				data: "auth=3&sifre=" + sifre + "&sifre1=" + sifre1 + "&sifre2=" + sifre2 + "&guvenlikkodu=" + guvenlikkodu + "&token=" + token,
				beforeSend: function() {
					$('#sonuc').html('<i class="fal fa-spinner fa-spin"></i> Password changing...');
				},
				success: function(data) {
					switch (data.kod) {
						case 2:
							$('#sonuc').html(data.sonuc);
							$('#guvenlikkodu').val('');
							captchayenile();
							kaydir();
							break;;
						case 1:
							$('#sonuc').html(data.sonuc);
							$('#guvenlikkodu').val('');
							captchayenile();
							kaydir();
							break;;
						case 0:
							$('#sonuc').html(data.sonuc);
							$('#guvenlikkodu').val('');
							captchayenile();
							kaydir();
							break;;
					}
				}
			})
		}
	})
})

$(document).ready(function() {
	$('#ticketsend').click(function() {
		var konu = $('#konuinput').val();
		var mesaj = $('#mesajinput').val();
		var guvenlikkodu = $('#guvenlikkodu').val();
		var token = $('#token').val();
		if (konu == '' || mesaj == '' || guvenlikkodu == '' || token == '') {
			$('#sonuc').html('<font color="red">Do not leave free space.</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else if (guvenlikkodu.length != 6) {
			$('#sonuc').html('<font color="red">Security code incorrect.</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else {
			$.ajax({
				type: 'POST',
				url: 'ajax.php',
				dataType: 'json',
				data: "auth=2&konu=" + konu + "&mesaj=" + mesaj + "&guvenlikkodu=" + guvenlikkodu + "&token=" + token,
				beforeSend: function() {
					$('#sonuc').html('<i class="fal fa-spinner fa-spin"></i> Ticket submiting...');
				},
				success: function(data) {
					switch (data.kod) {
						case 1:
							$('#sonuc').html(data.sonuc);
							$('#guvenlikkodu').val('');
							captchayenile();
							kaydir();
							break;;
						case 0:
							$('#sonuc').html(data.sonuc).css('display', 'block');
							kaydir();
							break;;
					}
				}
			})
		}
	})
})


$(document).ready(function() {
	$('#kayittamamla').click(function() {
		var eposta = $('#eposta').val();
		var sifre = $('#sifre').val();
		var sifre2 = $('#sifre2').val();
		var icqno = $('#icqno').val();
		var guvenlikkodu = $('#guvenlikkodu').val();
		var token = $('#token').val();

		if (eposta == '' || sifre == '' || sifre2 == '' || icqno == '' || guvenlikkodu == '') {
			$('#hatali').html('<font color="red">Do not leave free space.</font>');
			$('#guvenlikkodu').val('');
			kaydir();
			return false;
		} else if (sifre.length < 8 || sifre2.length < 8 || sifre.length > 16 || sifre2.length > 16) {
			$('#hatali').html('<font color="red">Password incorrect. <br />8-16 characters (A-Z, a-z, 0-9)(Latin)</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else if (sifre != sifre2) {
			$('#hatali').html('<font color="red">Passwords are not the same.</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else if (guvenlikkodu.length != 6) {
			$('#hatali').html('<font color="red">Security code incorrect.</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else {
			$.ajax({
				type: 'POST',
				url: 'ajax.php',
				dataType: 'json',
				data: "auth=0&eposta=" + eposta + "&sifre=" + sifre + "&sifre2=" + sifre2 + "&icqno=" + icqno + "&guvenlikkodu=" + guvenlikkodu + "&token=" + token,
				beforeSend: function() {
					$('#hatali').html('<i class="fal fa-spinner fa-spin"></i> Registering...');
				},
				success: function(data) {
					switch (data.kod) {

						case 1:
							$('#hatali').html(data.sonuc);
							$('#guvenlikkodu').val('');
							captchayenile();
							kaydir();
							break;;

						case 0:
							$('#giris').css('display', 'none');
							$('#basarili').html(data.sonuc).css('display', 'block');
							kaydir();
							break;;
					}
				}
			})
		}
	})
})


$(document).ready(function() {
	$('#giristamamla').click(function() {
		var eposta = $('#eposta').val();
		var sifre = $('#sifre').val();
		var guvenlikkodu = $('#guvenlikkodu').val();
		var token = $('#token').val();

		if (eposta == '' || sifre == '' || guvenlikkodu == '') {
			$('#hatali').html('<font color="red">Do not leave free space.</font>');
			$('#guvenlikkodu').val('');
			kaydir();
			return false;
		} else if (sifre.length < 8 || sifre.length > 16) {
			$('#hatali').html('<font color="red">Password incorrect.<br />8-16 characters (A-Z, a-z, 0-9)(Latin)</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else if (guvenlikkodu.length != 6) {
			$('#hatali').html('<font color="red">Security code incorrect.</font>');
			$('#guvenlikkodu').val('');
			captchayenile();
			kaydir();
			return false;
		} else {

			$.ajax({
				type: 'POST',
				url: 'ajax.php',
				dataType: 'json',
				data: "auth=1&eposta=" + eposta + "&sifre=" + sifre + "&guvenlikkodu=" + guvenlikkodu + "&token=" + token,
				beforeSend: function() {
					$('#hatali').html('<i class="fal fa-spinner fa-spin"></i> Logging in...');
				},
				success: function(data) {
					switch (data.kod) {

						case 1:
							$('#hatali').html(data.sonuc);
							$('#guvenlikkodu').val('');
							captchayenile();
							kaydir();
							break;;

						case 0:
							$('#giris').css('display', 'none');
							$('#basarili').html(data.sonuc).css('display', 'block');
							kaydir();
							break;;
					}
				}
			})
		}
	})
})
