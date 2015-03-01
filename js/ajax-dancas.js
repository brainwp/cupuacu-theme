(function($) {
	$(document).on( 'click', '#menu-menu-dancas a', function( event ) {
		event.preventDefault();
		id = $(this).attr('rel');
		li=$(this).parent();
		
			$.ajax({
				url: ajaxdancas.ajaxurl,
				type: 'post',
				data: {
					action: 'ajax_dancas',
					id:     id
				},
				beforeSend: function() {
						$('.ativo').removeClass('ativo');
						$('#conteudo-dancas').empty();
						$('#conteudo-dancas').append( '<img id="loading" src="'+templateDir+'/imagens/loading-dancas.gif">' );
					},
				success: function( html ) {
					// $('#conteudo-dancas').empty();
					$('#conteudo-dancas').empty();
					$('#conteudo-dancas').append( html );
					$(li).addClass('ativo');
				}
			})
	})
})(jQuery);