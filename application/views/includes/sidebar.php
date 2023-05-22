<link rel="stylesheet" href="/assets/css/css_sidebar.css">
<div class="sidebar_content">
    <!-- <div class="sidebar_box">
        <div class="box_heading">
            <a href="#">Liên Kết Hữu Ích</a>
        </div>
        <div class="box_content_sidebar">
            <ul>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Game Bắn Súng
                    <strong>
                        <a href="#">CSGO</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Khám Phá
                    <strong>
                        <a href="/pubg/">PUBG</a>
                    </strong>
                    Phiên Bản Mới
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Bóng Đá
                    <strong>
                        <a href="/fifa-online-4/">Fifa Online 4</a>
                    </strong>
                    Đỉnh Cao
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Garena
                    <strong>
                        <a href="/lien-quan-mobile/">Liên Quân Mobile</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Khám Phá
                    <strong>
                        <a href="/lien-minh-huyen-thoai/">LMHT</a>
                    </strong>
                    Việt Nam
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    News
                    <strong>
                        <a href="/valorant/">Valorant</a>
                    </strong>
                    Riot Games
                </li>
            </ul>
        </div>
    </div> -->
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons8-fire-30.png" />
                Tin Mới Nóng
            </a>
        </div>
        <div class="box_content_sidebar">
            <ul>
                <?php foreach ($blog_new as $key => $val) { ?>
                    <li class="item_hot_news">
                        <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                    </li>
                <?php } ?>
            </ul>
            <div class="see_more_news">
                <button class="btn_see_more">
                    <a href="/">Xem thêm tin mới nhất</a>
                </button>
            </div>
        </div>
    </div>
</div>