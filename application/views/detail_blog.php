<div class="widget_home">
    <div class="container_widget_about body_width">

        <div class="main_content_blog">
            <div class="blog_content">
                <div class="breadcrumb">
                    <a href="/">Trang chủ</a>
                    <span> / </span>
                    <?php if (isset($breadcrumb) && $breadcrumb != '') { ?>
                    <a class="link_breadcrumb" href="#"><?= $breadcrumb ?></a>
                    <span> / </span>
                    <?php } ?>
                    <span class="this_breadcrumb"><?= $blog['title'] ?></span>
                </div>
                <div class="box_data_blog">
                    <div class="left_blog">
                        <h1 class="title_h1"><?= $blog['title'] ?></h1>
                        <div class="box_author">
                            <img src="/images/date.svg" alt="Ngày đăng">
                            <div class="text_author">
                                <p class="date_blog">Đăng ngày: <?= date('d-m-Y', $blog['created_at']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sapo_top"> <?= $blog['sapo'] ?></div>
                <div class="right_detail">
                    <div class="mucluc_blog" id="mucluc_blog">
                        <p class="title_mucluc" id="title_mucluc">Mục lục [<span class="show_ml">show</span>]</p>
                        <ul class="list_mucluc" id="list_mucluc">

                        </ul>
                    </div>
                </div>
                <div class="left_detail">
                    <div class="content_blog" id="content_blog">
                        <?= $blog['content'] ?>
                    </div>
                </div>


                <div class="line_blog"></div>
                <?php if ($blog_same != null) { ?>
                <div class="blog_same">
                    <p class="title_blog_same">Tin liên quan</p>
                    <div class="list_blog_same">
                        <?php
                        foreach ($blog_same as $val) { ?>
                        <div class="this_handbook ">
                            <a class="img_item" href="/<?= $val['alias'] ?>/">
                                <img class="img_blog_same" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                            </a>
                            <div class="data_handbook">
                                <a class="title_handbook" href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                                <p class="date_post">
                                    <a class="name_cate"
                                        href="/<?= $blog['alias_cate'] ?>"><?= $blog['name_cate'] ?></a>
                                    <span>
                                        <?= date('d-m-Y', $val['created_at']) ?>
                                        <span>
                                </p>
                                <div class="this_des_handbook"><?= $val['sapo'] ?></div>
                            </div>
                        </div>
                        <?php
                        } ?>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="sidebar_content">
                <div class="sidebar_box">
                    <div class="box_heading">
                        <a href="#">Liên Kết Hữu Ích</a>
                    </div>
                    <div class="box_content">
                        <ul>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Bí Quyết Trị
                                <strong>
                                    <a href="#">Nám</a>
                                </strong>
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Top 10
                                <strong>
                                    <a href="/bi-quyet/">Bí Quyết</a>
                                </strong>
                                Hạnh Phúc
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Bật Mí 3
                                <strong>
                                    <a href="/ve-mat-meo/">Cách Vẽ</a>
                                </strong>
                                Mắt Mèo
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Cách
                                <strong>
                                    <a href="/nuoi-con-bang-sua-me/">Nuôi Con</a>
                                </strong>
                                Bằng Sữa Mẹ
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Tâm Lý
                                <strong>
                                    <a href="/tam-ly-dan-ong-khi-yeu/">Đàn Ông</a>
                                </strong>
                                Khi Yêu
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Làm Sao Để
                                <strong>
                                    <a href="/-sao-de-khong-luy-tinh/">Không</a>
                                </strong>
                                Lụy Tình
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hot_news">
                    <div class="box_heading">
                        <a href="#">
                            <img src="/images/icons/icons8-fire-30.png" />
                            Tin Mới Nóng
                        </a>
                    </div>
                    <div class="box_content">
                        <ul>
                            <?php foreach ($blog_same as $key => $val) { ?>
                            <li class="item_hot_news">
                                <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="see_more_news">
                            <button class="btn_see_more">
                                <a href="/">Xem thêm tin mới nhất PhuNuPlus</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>