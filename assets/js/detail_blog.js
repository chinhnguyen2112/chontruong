$(document).ready(function () {
	$("#list_mucluc").toc({
		content: "div.content_blog",
		headings: "h2,h3,h4",
		indexingFormats: {
			h2: "number",
			h3: "number",
			h4: "number",
		},
	});
});
var check_click = 0;
$(".box_title_ml").click(function () {
	if (check_click % 2 == 0) {
		$(".list_mucluc").hide(200);
		$(".img_show_ml").css("rotate", "unset");
	} else {
		$(".list_mucluc").show(200);
		$(".img_show_ml").css("rotate", "90deg");
	}
	++check_click;
});