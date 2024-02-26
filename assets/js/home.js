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