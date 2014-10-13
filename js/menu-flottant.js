$(function(){

//mes variables
	var menu = $("#header"),
		banniere = $("#banniere"),
		h_fenetre = $(window).innerHeight(),
		h_document = $(document).height(),
		h_banniere = h_fenetre - menu.height(),
		colors = ["#16a085","#27ae60","#2980b9","#8e44ad","#f1c40f"],
		bouton_menu = $("#header #switch_menu"),
		toggled_menu = false;



//effet fade In au chargement de la page
	//$("body").hide().delay(300).fadeIn(1000);

//la banniere fait la hauteur de la fenetre -(moins) la hauteur du menu
	$("#banniere").css("height", h_banniere);

//au redimentionnement de la fenetre on change la taille de la banniere...
	$( window ).resize(function() {
		var h = $(window).innerHeight() - menu.height();
		banniere.css( "height", h);
	});





// le menu suit le scroll
	$(window).on("scroll",function(){
		var depuis_le_haut = $(window).scrollTop();
		if (depuis_le_haut > h_fenetre && !menu.hasClass("menu-fix")){
			menu.addClass("menu-fix").hide().slideDown();
		} else
		if(depuis_le_haut < h_fenetre && menu.hasClass("menu-fix")){
			menu.removeClass("menu-fix");

		}
	});


	//afficher menu en mode mobile

	bouton_menu.on("click", function(){
		console.log(toggled_menu);
		var menu_portable = '<div id="menu_portable">'+ $("#menu ul").html() +"<div>";
		if(!toggled_menu){
			//$(this).attr("src","images/menu_ouvert.png");
			menu.append(menu_portable);
			$("#menu_portable").hide().fadeIn();
			toggled_menu = !toggled_menu;
			$("#switch_menu").rotate({ animateTo:90});
		}
		else {
			//$(this).attr("src","images/menu_ferme.png");
			$("#menu_portable").fadeOut(function(){
				$(this).detach();
			});
			toggled_menu = !toggled_menu;
			$("#switch_menu").rotate({ animateTo:0});
		}
	});



	
//couleur différente pour chaque truc
	$("#menu li a").each(function(i){
		$(this).css("color", colors[i]);
	})


// //hauteur banniere dynamique
// 	$(window).on("scroll", function(){
		
// 		if (banniere.height() > 0){
// 			console.log($(window).scrollTop());
// 			h = banniere.height() - ($(window).scrollTop()/20);
// 			if(h>=0){
// 				banniere.css( "height", h);
// 			}
// 			else{
// 				banniere.css( "height", 0);
// 			}
// 		}
// 	});




/*//effets mouse
	$("#menu").on("mouseenter", "a", function(){
		$(this).fadeOut('fast',function(){
			$(this).css({'background-color': "white"}).fadeIn();
		});
	});
	$("#menu").on("mouseleave", "a", function(){
		$(this).css({'background-color':'transparent'});
	});
	
*/



//Fin script...
});