function show_menu(e, type) {
	if (type == 1) {
		$('.header_bot').css('transform', 'translate(0)');
		$('.img_show_menu').css('transform', 'scale(0)');
		$('.img_cancel_menu').css('transform', 'scale(1)');
	} else {
		$('.header_bot').css('transform', 'translate(-100%)');
		$('.img_show_menu').css('transform', 'scale(1)');
		$('.img_cancel_menu').css('transform', 'scale(0)');
	}
}

function show_search(e, type) {
	if (type == 1) {
		$('.dialog_search').css('transform', 'scale(1)');
		$('.menu_search').css('transform', 'scale(0)');
	} else {
		$('.dialog_search').css('transform', 'scale(0)');
		$('.menu_search').css('transform', 'scale(1)');
	}
} 
var menu_bot = document.getElementById('header_bot');
var dialog = document.getElementById('dialog');
window.onclick = function(event) {
	if (event.target == dialog) {
		dialog.style.transform = "scale(0)";
		$('.menu_search').css('transform', 'scale(1)');
	}
	if (event.target == menu_bot) {
		console.log('1');
		menu_bot.style.transform = "translate(-100%)";
		$('.img_cancel_menu').css('transform', 'scale(0)' );
		$('.img_show_menu').css('transform', 'scale(1)' );
	}
  }

  function show_submenu(e, type) {
	if (type == 1) {
		$('.nav_menu').css('transform', 'translateX(-100%)');
		$(e).next('.menu_con').css('transform', 'translateX(100%)');
	} else {
		$('.nav_menu').css('transform', 'translateX(0)');
		$(e).next('.menu_con').css('transform', 'translateX(-150%)');
		$('.menu_con').css('transform', 'translateX(-150%)');
	}
  }
