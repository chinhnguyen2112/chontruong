// function show_menu(e, type) {
// 	if (type == 1) {
// 		$(".none_pc").show();
// 		$(e).attr("onclick", "show_menu(this,2)");
// 	} else {
// 		$(".none_pc").hide();
// 		$(e).attr("onclick", "show_menu(this,1)");
// 	}
// }


$(document).click(function (event) {
	$target = $(event.target);
	if (
		!$target.closest(".img_show_menu").length &&
		$(".img_show_menu").is(":visible") &&
		!$target.closest(".list_menu").length
	) {
		$(".img_show_menu").hide(200);
	}
});

function show_menu(e) {
	if (e == 1) {
		$(".img_show_menu").show(200);
	} else {
		$(".img_show_menu").hide(200);
	}
}

$("#img_search").click(function () {
  var toggleWidth = $("#search_input").width() == 190 ? "0px" : "190px";
	$("#search_input").animate(
		{
			width: toggleWidth,
		},
		300
	);
});



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
