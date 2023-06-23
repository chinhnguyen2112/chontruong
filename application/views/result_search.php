<div class="container">
    <div class="heading_left">
        <p>Kết quả tìm kiếm với từ khóa : <?= $key_search ?></p>
    </div>
    <div class="result_content body_width">
        <div class="left_content">
            <div class="result_top">
                <div class="first_result">
                    <a class="linl_all_detail" title="<?= $result[0]['title'] ?>" href="/<?= $result[0]['alias'] ?>/">
                        <div class="blog_top_content blog_top_left">
                            <img src="/<?= $result[0]['image'] ?>" alt="<?= $result[0]['title'] ?>">
                        </div>
                        <div class="blog_top_content blog_top_right">
                            <p class="title_blog_top"><?= $result[0]['title'] ?></p>
                            <div class="sapo_first"><?= $result[0]['sapo'] ?></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="list_result">
                <?php foreach ($result as $key => $val) { 
                    if ($key > 0) { ?>
                <div class="item_result">
                    <a title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                        <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                    </a>
                    <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                        <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                        <div class="box_content_blog">
                            <p class="title_blog"><?= $val['title'] ?></p>
                            <div class="fl_date">
                                <p class="cate_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                          echo $cate[0]['name']; ?></p>
                                <span class="dot_item"></span>
                                <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                            </div>
                            <span class="des_post"><?= $val['sapo'] ?></span>
                        </div>
                    </a>
                </div>
                <?php }
                } ?>
            </div>
            <div class="pagination">
                <?= $this->pagination->create_links() ?>
            </div>
        </div>
        <div class="right_content">
            <div class="sidebar_box">
                <div class="box_heading">
                    <a href="#">Liên Kết Hữu Ích</a>
                </div>
                <div class="box_content">
                    <ul>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Chuyện
                            <strong>
                                <a href="/chuyen-tinh-yeu/">Tình Yêu</a>
                            </strong>
                            Lãng Mạn
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Chăm Sóc
                            <strong>
                                <a href="/da-dep/">Da Đẹp</a>
                            </strong>
                            Như Sao Hàn
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Giá Trị Của
                            <strong>
                                <a href="/hon-nhan/">Hôn Nhân</a>
                            </strong>
                            Vợ Chồng
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Tiêu Chuẩn
                            <strong>
                                <a href="/dang-dep/">Dáng Đẹp</a>
                            </strong>
                            Phụ Nữ Việt
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Style
                            <strong>
                                <a href="/mac-dep/">Mặc Đẹp</a>
                            </strong>
                            Dành Cho Phái Nữ
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
                        <?php foreach ($list_news as $key => $val) { 
                                    if ($key > 0 && $key < 5) { ?>
                        <li class="item_hot_news">
                            <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                        </li>
                        <?php }
                                } ?>
                    </ul>
                    <div class="see_more_news">
                        <button class="btn_more">
                            <a href="/">Xem Thêm</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>