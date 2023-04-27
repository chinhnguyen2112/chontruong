<form style="margin: 100px;" action="/Home/test" method="post" enctype="multipart/form-data">
    <input style="width:100%" type="url" name="url_blog" id="url_blog">
    <button type="submit" class="btn_sub">Submit</button>
</form>
<script>
    $('.btn_sub').click(function() {
        $(this).text('loading....');
    })
</script>