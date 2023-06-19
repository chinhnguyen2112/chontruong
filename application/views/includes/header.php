<div class="container">
    <div class="main_header ">
        <div class="header_bot">
            <img src="/images/icons/menu_mb.svg" alt="show menu" class="img_show_menu" id="open_menu"
                onclick="show_menu(this,1)">
            <img src="/images/icons/icons8-cancel-30 .png" alt="close menu" class="img_show_menu close_menu"
                id="close_menu" onclick="show_menu(this,2)">
            <section class="left_header">
                <a href="/" id="logo_scroll">
                    <img src="/images/logo_chontruong.png" alt="logo" class="img_logo_bot_header">
                </a>
                <nav class="nav_menu">
                    <ul class="list_menu" id="list_menu">
                        <?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
                            foreach ($menu_cate_parent as $val) {
                                $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                        <li class="this_menu" id="this_menu" onclick="show_submenu(this,1)">

                            <div class="big_item_menu" onclick="big_item_menu(this,1)">
                                <a class="item_menu" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                                <img id="img_menu" src="/images/icons/icons8-less-than-30 (1).png" id="item_menu" />
                            </div>
                            <?php if ($menu_cate != null) { ?>
                            <ul class="menu_con">
                                <?php foreach ($menu_cate as $val1) { ?>
                                <li>
                                    <a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
                <div class="form_search">
                    <form id="search" method="get" action="/search">
                        <img class="img_search" src="/images/icons/icons8-search-30.png" alt="icon search">
                        <input id="search_input" autocomplete="off" name="search" placeholder="Nhập từ khóa cần tìm" />
                    </form>
                </div>
            </section>
            <section class="right_header">
                <div class="edu_member">
                    <a>
                        <img>
                    </a>
                </div>
                <a class="regis_login">Đăng Nhập</a>
                <a class="regis_login">Đăng Ký</a>
            </section>
        </div>
    </div>
</div>

<div class="main_content">