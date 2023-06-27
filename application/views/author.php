<div class="content">
    <div class="content_about body_width">
        <div class="banner_blog">
            <div class="breadcrumb">
                <span>
                    <img src="/images/icons8-home-20.png" alt="icon home small">
                </span>
                <span>
                    <img src="/images/icons8-arrow-right-10.png" alt="icon arrow right">
                </span>
                <span class="link_breadcrumb">Tác giả - <?= $author['name'] ?></span>
            </div>
        </div>
        <div class="train_content">
            <div class="top_blog">
                <div class="top_left">
                    <div class="list_blog_top">
                        <div class="left_blog">
                            <div class="blog_top">
                                <?php foreach ($blog as $key => $val) {
                                    if ($key == 0) { ?>
                                        <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_top"><?= $val['title'] ?></p>
                                            <div class="fl_date">
                                                <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                            </div>
                                            <div class="sapo_blog_top"><?= $val['sapo'] ?></div>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="right_blog">
                            <?php foreach ($blog as $key => $val) {
                                if ($key < 4 && $key > 0) { ?>
                                    <div class="this_train_right">
                                        <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <p class="title_blog"><?= $val['title'] ?></p>
                                            <div class="des_blog"><?= $val['sapo'] ?></div>
                                        </a>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="list_blog">
                        <?php foreach ($blog as $key => $val) {
                            if ($key > 4) { ?>
                                <div class="this_train">
                                    <a href="/<?= $val['alias'] ?>/">
                                        <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                        <div class="box_right_data">
                                            <p class="title_blog"><?= $val['title'] ?></p>
                                            <p class="date_post"><span><?= date('d-m-Y', $val['created_at']) ?></span></p>
                                            <div class="des_blog"><?= $val['sapo'] ?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                        }
                        if ($author['content'] == null) { ?>
                            <div class="load_more">
                                <div class="div_bgr_load">
                                    <span>Hiển thị thêm tin</span>
                                    <i class="icon_arrow_down"></i>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div id="table_bot" class="table_bot">
                                <table>
                                    <tr class="btn_heading">
                                        <th class="heading_table">
                                            <h1><?= $meta_title ?></h1>
                                        </th>
                                        <th class="heading_show">
                                            <div class="load_more2">
                                                <div class="div_bgr_load2">
                                                    <span id="span_show" class="span_show_more">Hiển thị thêm tin</span>
                                                    <span id="span_end" class="span_show_more">Hết !</span>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="blog_content">
                                                <div class="left_detail">
                                                    <div class="content_blog" id="content_blog">
                                                        <?= $author['content'] ?>
                                                    </div>
                                                    <div class="hide_show_content">
                                                        <p class="hide_show_text">Xem thêm</p>
                                                        <!-- <i class="icon_arrow_down"></i> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php include('includes/sidebar.php') ?>
            </div>
        </div>
    </div>
</div>
<input id="author" value="<?= isset($author['id']) ? $author['id'] : '' ?>" hidden />