function showNavMobile(){
	$('.menuMobile').css('display','none');
	$('.cancelMenuMobile').css('display','block');
	$('.contNavMobile').css('display','block');
}

function hideNavMobile(){
	$('.menuMobile').css('display','block');
	$('.cancelMenuMobile').css('display','none');
	$('.contNavMobile').css('display','none');
}


function sacaCartel(){

	$('#nombre').val("Nombre");
	$('#email').val("Email");
	$('textarea#mensajeContacto').val("Mensaje...");
	$( "body" ).css("overflow", "auto");
	$('.mensajeEnviado').css('display','none');
}

function envioConsulta(){
	$( "body" ).css("overflow", "hidden");
	$('.mensajeEnviado').css('display','block');
	setTimeout(sacaCartel, 3000);
}
