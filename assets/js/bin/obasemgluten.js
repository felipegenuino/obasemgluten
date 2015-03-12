//se carregar o jquery
if ( undefined !== window.jQuery ) {

  jQuery(document).ready(function($) {
		(function($) {

	//carrega o botão offcanvas
    $(".button-collapse").sideNav();

 	
    $('.modal-trigger').leanModal();



// $(".screen-reader-response").each(function(){
// 			if($(this).val() == "") {
// 				 var mensagemToast = $(".screen-reader-response").text("Preencha o formulário para entrar em contato conosco");
//     		 	 toast($mensagemToast, 3000);
//              }
//              if($(this).val() == "Ocorreram erros de validação. Por favor confira os dados e envie novamente.") {
// 				 var mensagemToast = $(".screen-reader-response").text();
//     		 	 toast($mensagemToast, 3000);
//              }
//              else{
// 	 			 var mensagemToast = $(".screen-reader-response").text();
// 	    		 toast($mensagemToast, 3000);
// 			 }
// 		});
 






		})(jQuery);
	})


	//carrega o preloader
	$(window).load(function() { // makes sure the whole site is loaded
		$('#status').fadeOut(); // will first fade out the loading animation
		$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		//$('body').delay(350).css({'overflow':'visible'});
	})



}




