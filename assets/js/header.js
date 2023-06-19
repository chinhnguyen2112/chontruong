// function show_menu(e, type) {
// 	if (type == 1) {
// 		$(".none_pc").show();
// 		$(e).attr("onclick", "show_menu(this,2)");
// 	} else {
// 		$(".none_pc").hide();
// 		$(e).attr("onclick", "show_menu(this,1)");
// 	}
// }

function show_menu(e, type) {
	if (type == 1) {
		$(".sub_menu").show(200);
		$(e).attr("onclick", "show_menu(this,2)");
		document.getElementById("close_menu").style.display = 'block';
		document.getElementById("open_menu").style.display = 'none';
	} else {
		$(".header_menu").hide(200);
		$(e).attr("onclick", "show_menu(this,1)");
		document.getElementById("open_menu").style.display = 'block';
		document.getElementById("close_menu").style.display = 'none';
	}
}




function show_submenu(e, type) {
	if (type == 1) {
		$(".menu_con").show(200);
		$(e).attr("onclick", "show_submenu(this,2)");
	} else {
		$(".menu_con").hide(200);
		$(e).attr("onclick", "show_submenu(this,1)");
	}
} 

function show_search(e, type) {
	if (type == 1) {
		$(".search").show(200);
		$(e).attr("onclick", "show_search(this,2)");
		document.getElementById("cancel").style.display = 'block';
		document.getElementById("open").style.display = 'none';
	} else {
		$(".search").hide(200);
		$(e).attr("onclick", "show_search(this,1)");
		document.getElementById("cancel").style.display = 'none';
		document.getElementById("open").style.display = 'block';

	}
}

function big_item_menu(e, type) {
if (type == 1) {
	$(e).next().show(300);

	$(e).attr("onclick", "big_item_menu(this,2)");
} else {
	$(e).next().hide(300);

	$(e).attr("onclick", "big_item_menu(this,1)");
}
}
  
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("nav").style.padding = "0px";
    document.getElementById("logo").style.display = "none";
    // document.getElementById("logo_scroll").style.display = "block";
    document.getElementById("search_div").style.top = "6px";
  } else {
    document.getElementById("nav").style.padding = "15px 0px 0px 0px";
    document.getElementById("logo").style.display = "block";
    // document.getElementById("logo_scroll").style.display = "none";
    document.getElementById("search_div").style.top = "65px";
  }
}
// var acc = document.getElementsByClassName("item_menu");
// var i;
// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var menu_con = this.nextElementSibling;
//     if (menu_con.style.display === "block") {
// 		menu_con.style.display = "none";
//     } else {
// 		menu_con.style.display = "block";
//     }
//   });
// }
// function show_menu1(e) {
// 	$(".box_menu").show();
// }
// if ($(window).width() <= 1024) {
// 	$(document).click(function (event) {
// 		$target = $(event.target);
// 		if (
// 			!$target.closest(".box_menu").length &&
// 			$(".box_menu").is(":visible") &&
// 			!$target.closest(".img_show_2").length
// 		) {
// 			$(".box_menu").hide(100);
// 		}
// 	});
// }
