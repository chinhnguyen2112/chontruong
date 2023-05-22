var page = 2;
$(".load_more").click(function () {
	var show_more = $(this);
	var form_data = new FormData();
	form_data.append("page", page);
	$.ajax({
		url: "/load_more",
		type: "POST",
		processData: false,
		contentType: false,
		dataType: "json",
		data: form_data,
		success: function (data) {
			++page;
			if (data.status == 0) {
				$(".load_more").remove();
			} else if (data.status == 1) {
				// $(".list_blog_home").append(data.html);
				show_more.before(data.html);
				if (data.next == 0) {
					$(".load_more").remove();
				}
			}
		},
		error: function () {
			alert("error");
		},
	});
});

$(".slick_banner").slick({
	slidesToShow: 1,
	arrows: false,
	slidesToScroll: 1,
	adaptiveHeight: true,
	autoplay: true,
	infinite: true,
	autoplaySpeed: 2000,
});
$(".name_top").hover(function () {
	var id = $(this).data("id");
	var active = $(".active").data("id");
	if (id != active) {
		$(".active").removeClass("active");
		$(this).addClass("active");
		if (id == 1) {
			$(".box_top").show();
			$(".box_hay").hide();
			$(".box_hot").hide();
		}
		if (id == 2) {
			$(".box_top").hide();
			$(".box_hay").show();
			$(".box_hot").hide();
		}
		if (id == 3) {
			$(".box_top").hide();
			$(".box_hay").hide();
			$(".box_hot").show();
		}
	}
});
