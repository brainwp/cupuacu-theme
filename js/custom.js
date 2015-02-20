$(document).ready(function(){
						   $("#menu-grupo-home, #menu-dancas-home, #menu-bumba-home, #menu-grupo, #menu-dancas, #menu-bumba, #blog-link, #mail, #mail-home, #lancamento, #home-link, #link-blog").fadeTo("slow", 0.3); // This sets the opacity of the thumbs to fade down to 70% when the page loads
						   $("#menu-grupo-home, #menu-dancas-home, #menu-bumba-home, #menu-grupo, #menu-dancas, #menu-bumba, #blog-link, #mail, #mail-home, #lancamento, #home-link, #link-blog").hover(function(){
						   $(this).fadeTo("slow", 1.0); // This should set the opacity to 100% on hover
						   },function(){
						   $(this).fadeTo("slow", 0.3); // This should set the opacity back to 70% on mouseout
							   	});
						   });// JavaScript Document