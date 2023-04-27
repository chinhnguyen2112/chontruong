<div class="main_header ">
    <div id="nav">
        <div class="logo body_width" id="logo">
            <a href="/">
                <img src="/images/logo.png" alt="logo" class="img_logo_bot_header">
            </a>
        </div> 
        <div class="header_bot body_width">
            <a href="/" id="logo_scroll">
                <img src="/images/logo.png" alt="logo" class="img_logo_bot_header">
            </a>
            <div class="header_menu">
                <ul class="list_menu" id="list_menu">
                    <!-- <div class="this_menu">
                        <span><a href="/">Trang chủ</a></span>
                    </div> -->
                    <img class="icon_cancel"  src="/images/icons/icons8-cancel-32.png" onclick="$('.list_menu').hide(100)"/>
                    <div class="search_none_pc">
                        <form class="form_search" id="search" method="get" action="/search" >
                            <img class="img_search" id="img_search" src="/images/icons/icons8-search-30.png" />
                            <input class="search_input" id="search_input" type="text" autocomplete="off" name="search"  placeholder="Nhập từ khóa cần tìm..." />
                        </form>
                    </div>
                    <div class="list_item_menu">
                        <?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
                        foreach ($menu_cate_parent as $val) {
                            $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                            <li class="this_menu" id="this_menu">
                                <div class="big_item_menu" onclick="big_item_menu(this,1)">
                                    <a class="item_menu"   href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                                    <img id="img_menu" src="/images/icons/icons8-sort-down-24.png" id="item_menu" />
                                </div>
                                <?php if ($menu_cate != null) { ?>
                                    <ul class="menu_con">
                                        <?php foreach ($menu_cate as $val1) { ?>
                                            <li>
                                                <i class="icon_arrow_left"></i>
                                                <a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>      
                        <?php } ?>
                    </div>
                </ul>
            </div>   
            <div class="search" id="search_div">
                <img class="img_search" id="img_search" src="/images/icons/icons8-search-30.png" />
                <form class="form_search" id="search" method="get" action="/search" >
                    <input class="search_input" id="search_input" type="text" autocomplete="off" name="search"  placeholder="Nhập từ khóa cần tìm..." />
                </form>
            </div>
            <img src="/images/menu_mb.svg" alt="show menu" class="img_show_menu" id="show_menu" onclick="$('.list_menu').show(100)">
        </div>
    </div>
</div>
<div class="main_content">