<div class="main_header ">
    <a class="logo_nonpc" href="/">
        <img src="/images/logo.webp" alt="logo" class="img_logo_bot_header">
    </a>
    <div class="dialog_search" id="dialog">
        <div class="btn_cancel" onclick="show_search(this,2)">
            <img src="/images/icons8-cancel-50.png" alt="icon cancel">
        </div>
        <form class="form_sub" id="search" method="get" action="/search">
            <img class="img_seach_sub" id="img_search_sub" src="/images/icons8-search-64.png" alt="icon search" />
            <input class="input_sub" id="search_input_sub" type="text" autocomplete="off" name="search"
                placeholder="Tìm kiếm" />
        </form>
    </div>
    <div class="header_bot body_width" id="header_bot">
        <section class="header_left">
            <a class="logo_pc" href="/">
                <img src="/images/logo_2.webp" alt="logo" class="img_logo_bot_header">
            </a>
            <nav class="nav_menu">

                <ul class="list_menu" id="list_menu">
                    <li class="this_menu">
                        <a class="home_header active" href="/">Trang Chủ</a>
                    </li>
                    <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 14');
                foreach ($menu_cate_parent as $val) {
                    $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                    <li class="this_menu">
                        <div class="item_menu" onclick="show_submenu(this,1)">
                            <a class="text_item_menu" data-id="<?= $val['id'] ?>" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                            <img class="icon_forward" src="/images/icons8-forward-30 (2).png" alt="icon forward">
                        </div>
                        <?php if ($menu_cate != null) { ?>
                        <div class="menu_con">
                            <ul>
                                <li class="li_back">
                                    <img class="icon_back" src="/images/icons8-forward-30 (2).png" alt="icon forward"
                                        onclick="show_submenu(this,2)">
                                    <p class="cate_subname"><?= $val['name'] ?></p>
                                </li>
                                <?php foreach ($menu_cate as $val1) { ?>
                                <li><a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </li>
                    <?php } ?>
                    <li class="this_menu menu_search">
                        <img class="icon_search" src="/images/icons8-search-30.png" alt="icon search"
                            onclick="show_search(this,1)">
                    </li>
                    <div class="list_contact">
                        <a href="#">
                            <img src="/images/facebook.png" alt="icon facebook">
                        </a>
                        <a href="#">
                            <img class="tiktok" src="/images/tiktok (1).png" alt="icon facebook">
                        </a>
                        <a href="#">
                            <img src="/images/mail.png" alt="icon facebook">
                        </a>
                        <a href="#">
                            <img src="/images/icons8-phone-30 (1).png" alt="icon facebook">
                        </a>
                        <a href="#">
                            <img src="/images/icons8-youtube-30 (1).png" alt="icon facebook">
                        </a>
                    </div>
                </ul>

            </nav>
        </section>

    </div>
    <img src="/images/menu_mb.svg" alt="show menu" class="img_show_menu" onclick="show_menu(this,1)">
    <img src="/images/icons8-cancel-50.png" alt="icon cancel" class="img_cancel_menu" onclick="show_menu(this,2)">

</div>
<div class="main_content">