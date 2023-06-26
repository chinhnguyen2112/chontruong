<link rel="stylesheet" href="/assets/css/css_sidebar.css">
<div class="sidebar_content">
    <div class="mail_box">
        <div class="form_mail">
            <div class="content_mail">
                <div class="mail_top">
                    <div class="logo_mail_box">
                        <img src="/images/logo_2.png" alt="logo">
                    </div>
                    <div class="content_mail_box">
                        <div class="item_cont">
                            <img src="/images/icon_01.png" alt="cẩm nang chọn trường">
                            <p class="text_item_mail">Cẩm Nang Chọn Trường A-Z</p>
                        </div>
                        <div class="item_cont">
                            <img src="/images/icon_02.png" alt="mã ưu đãi">
                            <p class="text_item_mail">100+ Mã Ưu Đãi Độc Quyền</p>
                        </div>
                        <div class="item_cont">
                            <img src="/images/icon_03.png" alt="xu hướng chọn trường">
                            <p class="text_item_mail">Xu Hướng Chọn Trường 2023</p>
                        </div>
                    </div>
                    <div class="content_mail_nonpc">
                        <p>Tư vấn chọn trường và định hướng ngành nghề giúp bạn có quyết định sáng suốt nhất.</p>
                    </div>
                </div>
                <div class="mail_bot">
                    <input class="input_mail" name="input_mail" id="input_mail" type="email"
                        placeholder="Nhập Email của bạn" />
                    <button class="submit_mail">Đăng Ký Ngay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_box">
        <div class="box_heading">
            <a href="#">Liên Kết Hữu Ích</a>
        </div>
        <div class="box_content_sidebar">
            <ul>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30 (1).png" alt="icon star" />
                    Tư Vấn Chọn
                    <strong>
                        <a href="/truong-dai-hoc/">Trường Đại Học</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30 (1).png" alt="icon star" />
                    Tư Vấn Chọn
                    <strong>
                        <a href="/truong-cao-dang/">Trường Cao Đẳng</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30 (1).png" alt="icon star" />
                    Cẩm Nang
                    <strong>
                        <a href="/phat-trien-ban-than/">Phát Triển</a>
                    </strong>
                    Bản Thân
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30 (1).png" alt="icon star" />
                    Cẩm Nang
                    <strong>
                        <a href="/phat-trien-su-nghiep/">Phát Triển</a>
                    </strong>
                    Sự Nghiệp
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30 (1).png" alt="icon star" />
                    Ngoại Ngữ
                    <strong>
                        <a href="/hoc-tieng-phap/">Tiếng Pháp</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30 (1).png" alt="icon star" />
                    Ngoại Ngữ
                    <strong>
                        <a href="/hoc-tieng-nga/">Tiếng Nga</a>
                    </strong>
                </li>
            </ul>
        </div>
    </div>
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons8-fire-30.png" alt="icon fire" />
                Tin Mới Nóng
            </a>
        </div>
        <div class="box_content">
            <ul>
                <?php foreach ($blog_new as $key => $val) { ?>
                <li class="item_hot_news">
                    <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                </li>
                <?php } ?>
            </ul>
            <div class="see_more_news">
                <button class="btn_more">
                    <a href="/">Xem thêm tin mới nhất</a>
                </button>
            </div>
        </div>
    </div>
</div>