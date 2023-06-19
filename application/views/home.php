<div class="homeContent body_width">
    <div class="container_widget">
        <div class="left_content">
            <div class="frist_blog">
                <a href="/<?= $blog[0]['alias'] ?>/">
                    <img src="/<?= $blog[0]['image'] ?>" alt="<?= $blog[0]['title'] ?>">
                </a>
                <div class="content_first">
                    <div class="cate_first">
                        <a href="#">
                            <?php $cate = chuyen_muc(['id' => $blog[0]['chuyenmuc']]);echo $cate[0]['name']; ?>
                        </a>
                    </div>
                    <div class="title_first">
                        <a href="/<?= $blog[0]['alias'] ?>/">
                            <p class="title_blog_top"><?= $blog[0]['title'] ?></p>
                        </a>
                    </div>
                    <div class="date_first">
                        <img src="/images/icons/icons8-clock-12.png" />
                        <p class="date_post"><?= date('d-m-Y', $blog[0]['created_at']) ?></p>
                    </div>
                </div>
            </div>
            <div class="list_blog_top">
                <?php foreach ($blog as $key => $val) {
                    if ($key > 0 && $key < 7) { ?>
                <div class="item_blog_top">
                    <a class="item_blog_home" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                        <img class="img_item_blog" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                        <div class="box_content_blog">
                            <p class="date_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                                echo $cate[0]['name']; ?></p>
                            <p class="title_item_blog"><?= $val['title'] ?></p>
                            <div class="date_item">
                                <img src="/images/icons/icons8-clock-15.png" />
                                <p class="date_item_blog"><?= date('d-m-Y', $val['created_at']) ?></p>
                            </div>
                            <!-- <div class="des_post"><?= $val['sapo'] ?></div> -->
                        </div>
                    </a>
                </div>
                <?php }
                } ?>
            </div>
            <div class="list_blog_hot">
                <div class="title_blog_hot">
                    <p>ĐÁNG CHÚ Ý</p>
                </div>
                <div class="content_blog_hot">
                    <?php foreach ($blog as $key => $val) {
                    if ($key == 7) { ?>
                    <div class="item_blog_hot">
                        <a class="item_blog_home hot" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                            <img class="img_item_blog" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                        </a>
                        <div class="box_content_right">
                          <div class="cate_name_hot">
                              <a href="#">
                                  <?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);echo $cate[0]['name']; ?>
                              </a>
                          </div>
                          <p class="title_item_hot"><?= $val['title'] ?></p>
                          <div class="date_item">
                              <img src="/images/icons/icons8-clock-15.png" />
                              <p class="date_item_blog"><?= date('d-m-Y', $val['created_at']) ?></p>
                          </div>
                          <div class="sapo_hot"><?= $val['sapo'] ?></div>
                          <a class="btn_more" href="#">
                            READ MORE
                          </a>
                        </div>
                    </div>
                    <?php }
                } ?>
                </div>
            </div>
            <div class="list_blog_bot">
                <?php foreach ($blog as $key => $val) {
                    if ($key > 7 && $key < 14) { ?>
                <div class="item_blog_bot">
                    <a class="item_blog_home" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                        <img class="img_item_blog" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                        <div class="box_content_blog">
                            <!-- <p class="date_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                                echo $cate[0]['name']; ?></p> -->
                            <p class="title_item_blog"><?= $val['title'] ?></p>
                            <div class="date_item">
                                <!-- <img src="/images/icons/icons8-clock-15.png" /> -->
                                <p class="date_item_blog"><?= date('d-m-Y', $val['created_at']) ?></p>
                            </div>
                            <!-- <div class="des_post"><?= $val['sapo'] ?></div> -->
                        </div>
                    </a>
                </div>
                <?php }
                } ?>
            </div>
        </div>
        <div class="right_content">
            <div class="title_right_content">
                <p class="title_left_home">TIN MỚI NHẤT</p>
            </div>
            <?php foreach ($blog as $key => $val) {
                    if ($key < 10 ) { ?>
            <div class="this_content_right">
                <a class="content_right_top" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                    <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                </a>
                <div class="cate_name_right">
                    <a href="#">
                        <?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);echo $cate[0]['name']; ?>
                    </a>
                </div>
                <a class="content_right_bot" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                    <div class="title_blog_right">
                        <p><?= $val['title'] ?></p>
                    </div>
                    <div class="date_right">
                        <img src="/images/icons/icons8-clock-15.png" />
                        <p class="date_post date_right_content"><?= date('d-m-Y', $blog[0]['created_at']) ?></p>
                    </div>
                </a>
            </div>
            <?php }
                } ?>
        </div>
    </div>
</div>