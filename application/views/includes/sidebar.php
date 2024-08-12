<link rel="stylesheet" href="/assets/css/css_sidebar.css">
<div class="sidebar_content">
    <div class="sidebar_box">
        <div class="box_heading">
            <a href="#">Liên Kết Hữu Ích</a>
        </div>
        <div class="box_content_sidebar">
            <ul>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    Tư Vấn Chọn
                    <strong>
                        <a href="/truong-dai-hoc/">Trường Đại Học</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    Tư Vấn Chọn
                    <strong>
                        <a href="/truong-cao-dang/">Trường Cao Đẳng</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    Cẩm Nang
                    <strong>
                        <a href="/phat-trien-ban-than/">Phát Triển</a>
                    </strong>
                    Bản Thân
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    Cẩm Nang
                    <strong>
                        <a href="/phat-trien-su-nghiep/">Phát Triển</a>
                    </strong>
                    Sự Nghiệp
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    Ngoại Ngữ
                    <strong>
                        <a href="/hoc-tieng-phap/">Tiếng Pháp</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    Ngoại Ngữ
                    <strong>
                        <a href="/hoc-tieng-nga/">Tiếng Nga</a>
                    </strong>
                </li>
                <li class="item_content_sidebar" style="color:#fff">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    <strong>
                        <a rel="dofollow" target="_blank" href="https://mitomtv.onl/" style="color:#fff;background:#fff">mì tôm tv</a>
                    </strong>
                </li>
                <li class="item_content_sidebar" style="color:#fff">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    <strong>
                        <a rel="dofollow" target="_blank" href="https://good88.best" style="color:#fff;background:#fff">good88</a>
                    </strong>
                </li>
                <li class="item_content_sidebar" style="color:#fff">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    <strong>
                        <a rel="dofollow" target="_blank" href="https://xoilactv.pe/"style="color:#fff;background:#fff" >xôi lạc tv</a>
                    </strong>
                </li>
                <li class="item_content_sidebar" style="color:#fff">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    <strong>
                        <a rel="dofollow" target="_blank" href="https://helo88.bet" style="color:#fff;background:#fff">hello88</a>
                    </strong>
                </li>
                <li class="item_content_sidebar" style="color:#fff">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    <strong>
                        <a rel="dofollow" target="_blank" href="https://sunwinblu.net" style="color:#fff;background:#fff">Sunwin</a>
                    </strong>
                </li>
                <li class="item_content_sidebar" style="color:#fff">
                    <img class="icon_li" src="/images/icons8-star-30.png" alt="liên kết">
                    <strong>
                        <a rel="dofollow" target="_blank" href="https://79king.co.com/" style="color:#fff;background:#fff">79king</a>
                    </strong>
                </li>
            </ul>
        </div>
    </div>
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons8-fire-30.png" alt="icon fire">
                Tin Mới Nóng
            </a>
        </div>
        <div class="box_content">
            <ul>
                <?php foreach ($blog_new as $key => $val) { ?>
                    <li class="item_hot_news">
                        <a href="/<?= $val['alias'] ?>/">
                            <?= $val['title'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="see_more_news">
                <div class="btn_more">
                    <a href="/">Xem thêm tin mới nhất</a>
                </div>
            </div>
        </div>
    </div>
</div>