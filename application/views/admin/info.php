<link rel="stylesheet" href="/assets/css/select2.min.css">
<style>
    .form_change_pass {
        width: 800px;
        margin: auto;
    }

    .error {
        font-size: 14px;
        color: red;
    }

    .label,
    .name_flex {
        width: 100%;
    }

    .flex_input {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .input_fl {
        width: 49%;
    }

    .box_flex {
        display: flex;
        justify-content: space-between;
    }

    .box_vip {
        padding: 10px;
        background: #e4e4e4;
    }

    .add_hv {
        color: #2758dd;
        cursor: pointer;
        font-weight: 600;
    }

    .name_gr {
        font-size: 18px;
        font-weight: 600;
    }

    .box_relative {
        position: relative;
        margin-bottom: 30px !important;
    }

    .nav_blog_skill {
        position: absolute;
        display: none;
        max-height: 200px;
        max-width: 320px;
        right: calc(50% - 160px);
        z-index: 1;
    }

    .sl_skill {
        display: none;
    }

    .box_add_skill {
        display: flex;
        justify-content: space-between;
        gap: 0 20px;
        flex-wrap: wrap;
    }

    .sweet-alert {
        box-shadow: 0px 12px 22px rgb(0 0 0 / 44%);
    }

    .list_show_skill {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px 16px;
    }

    .this_skill {
        display: flex;
        justify-content: space-between;
        position: relative;
        width: calc(50% - 8px);
        align-items: center;
        border: 1px solid #ccc;
        padding-left: 3px;
        flex-wrap: wrap;
        height: 42px;
    }

    .this_skill label {
        width: 100%;
    }

    .this_skill img {
        position: absolute;
        background: red;
        right: -7px;
        border-radius: 50%;
        top: -7px;
        cursor: pointer;
        width: 17px;
    }

    .this_skill p {
        margin: 0;
    }

    .nav_p_input {
        position: absolute;
        right: 5px;
        font-size: 16px;
        top: calc(50% - 11px);
    }

    .this_skill input {
        padding: 10px 35px 10px 10px;
        padding-right: 35px;
        font-size: 16px;
        height: auto;
        text-align: right;
    }

    .close {
        font-size: 14px;
        background: red;
        padding: 5px;
        color: #fff;
        font-weight: 600;
        opacity: 1;
        cursor: pointer;
        text-shadow: unset;
    }

    .this_hv,
    .this_kn {
        padding: 5px;
        border: 5px solid #fff;
        margin-bottom: 10px;
    }

    .select2-selection__choice {
        padding: 8px 5px !important;
        font-size: 12px !important;
    }

    @media only screen and (max-width: 1024px) {
        .form_change_pass {
            width: 100%;
        }
    }
</style>
<link rel="stylesheet" href="/assets/css/sweetalert.css">
<form id="form" class="form_change_pass">
    <input type="hidden" id="id_blog" name="id" hidden value="<?= (isset($id) && $id > 0) ? $id : '' ?>" />
    <div class="form-group mb-3" style="text-align: center;">
        <label for="image">
            <img src="/<?= (isset($admin) && $admin['image'] != '') ? $admin['image'] : 'images/avt.png' ?>" style="cursor:pointer;border-radius:50%" id="mainImage" width="300px" height="300px" alt=" ảnh sản phẩm">
        </label>
        <p>Ảnh đại diện</p>
        <input type="file" style="width: 0;" accept="image/png, image/jpeg" onchange="document.getElementById('mainImage').src = window.URL.createObjectURL(this.files[0])" id="image" name="image">
    </div>
    <div class="form-group mb-3">
        <label class="label" for="name">Tên đăng nhập</label>
        <input type="text" name="username" value="<?= (isset($admin)) ? $admin['username'] : ''; ?>" <?= (isset($admin)) ? ' onmousedown="return false;"' : '' ?> class="form-control" />
    </div>
    <div class="form-group mb-3">
        <label class="label" for="name">Họ và Tên</label>
        <input type="text" name="name" value="<?= (isset($admin)) ? $admin['name'] : ''; ?>" class="form-control" />
    </div>
    <div class="form-group mb-3">
        <label class="label" for="name">Đường dẫn thân thiện</label>
        <input type="text" name="alias" value="<?= (isset($admin)) ? $admin['alias'] : ''; ?>" id="alias" <?= (isset($admin)) ? ' onmousedown="return false;"' : '' ?> class="form-control">
    </div>
    <div class="form-group mb-3">
        <label class="label" for="name">Thông tin tác giả</label>
        <textarea name="content" id="editor"><?= (isset($admin) && $admin['content'] != '') ? $admin['content'] : '' ?></textarea>
    </div>
    <?php if (admin_vip()) { ?>
        <div class="form-group mb-3">
            <label class="label" for="name">Mật Khẩu</label>
            <input type="text" name="password" id="password" placeholder="Mật khẩu mới" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label class="label" for="name">Loại tài khoản</label>
            <select name="vip" id="vip" class="form-control">
                <option <?= (isset($admin) &&  $admin['vip'] == 0) ? 'selected' : '' ?> value="0">Biên tập</option>
                <option <?= (isset($admin) &&  $admin['vip'] == 1) ? 'selected' : '' ?> value="1">Quản lý</option>
            </select>
        </div>
    <?php } ?>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary submit px-3"><?= (isset($id)) ? 'Sửa' : 'Thêm mới' ?></button>
    </div>
</form>
<script src="/assets/js/jquery.validate.min.js"></script>
<script src="/assets/js/select2.min.js"></script>
<script src="/assets/js/sweetalert.min.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
<script defer type="text/javascript">
    CKEDITOR.replace('editor');
</script>
<script>
    $("#alias").keypress(function(evt) {
        var num = String.fromCharCode(evt.which);
        if (num == " ") {
            evt.preventDefault();
        }
    });

    function get_alias(str) {
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
        str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
        str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
        str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
        str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
        str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
        str = str.replace(/Đ/g, "D");
        str = str.replace(/[^0-9a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ\s]/gi, ' ');
        str = str.replace(/\s+/g, '-');
        str = str.toLowerCase();
        return str;
    }

    function show_alias(str) {
        var alias = get_alias(str);
        $("#alias").val(alias);
    }
    var check_avt = ($('#id_blog').val() > 0) ? false : true;
    $("#form").validate({
        onclick: false,
        rules: {
            "username": {
                required: true,
            },
            "name": {
                required: true,
            },
            "alias": {
                required: true,
            },
        },
        messages: {
            "username": {
                required: "Tên đăng nhập không được trống",
            },
            "name": {
                required: "Tên không được để trống",
            },
            "alias": {
                required: "Không để trống đường dẫn",
            },
        },
        submitHandler: function(form) {
            var data = new FormData($("#form")[0]);
            data.append("content", CKEDITOR.instances.editor.getData());
            $.ajax({
                url: '/admin/ajax_author',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                data: data,
                success: function(response) {
                    if (response.status == 1) {
                        swal({
                            title: "Thành Công",
                            type: "success",
                            text: "Cập nhật thành công"
                        }, function() {
                            window.location.reload();
                        });
                    } else if (response.status == 2) {
                        swal({
                            title: "Thất bại",
                            type: "error",
                            text: "URL tác giả bị trùng"
                        });
                    } else {
                        swal({
                            title: "Thất bại",
                            type: "error",
                            text: "Cập nhật thất bại"
                        });
                    }
                },
                error: function(xhr) {
                    alert('Thất bại');
                }
            });
            return false;
        }
    });
</script>