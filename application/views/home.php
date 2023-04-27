<div class="homeContent body_width">
  <div class="container_widget ">
    <div class="right_home">
      <div class="blog_top">

        <a class="linl_all_detail" title="<?= $blog[0]['title'] ?>" href="/<?= $blog[0]['alias'] ?>/">
          <div class="blog_top_content blog_top_left">
            <img src="/<?= $blog[0]['image'] ?>" alt="<?= $blog[0]['title'] ?>">
          </div>
          <!-- <div class="fl_date">
            <p class="date_post"><?php $cate = chuyen_muc(['id' => $blog[0]['chuyenmuc']]);
                                  echo $cate[0]['name']; ?></p>
            <p class="date_post"><?= date('d-m-Y', $blog[0]['created_at']) ?></p>
          </div> -->
          <div class="blog_top_content blog_top_right">
            <p class="title_blog_top"><?= $blog[0]['title'] ?></p>
            <div class="sapo_blog"><?= $blog[0]['sapo'] ?></div>
          </div>
        </a>
      </div>
      <div class="list_blog_home">
        <!-- <p class="title_left_home none_pc">TIN MỚI NHẤT</p> -->
        <?php foreach ($blog as $key => $val) {
          if ($key > 0) { ?>
            <div class="this_content_right">
            <p class="title_blog only_mobile"><?= $val['title'] ?></p>
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
      <!-- <div class="load_more">Xem thêm</div> -->
    </div>
    <div class="left_home">



      <div class="list_news item_left">
        <div class="header_news header_item_left">
          <p>Tin Mới Nhất</p>
        </div>
        <div class="content_news content_item_left">
          <ul class="list_news_content">
            <?php foreach ($blog as $key => $val) {
            if ($key < 6) { ?>
            <li class="item_news item">
              <a href="/<?= $val['alias'] ?>/"><?= $val['title'] ?></a>
            </li>
            <?php } 
            } ?>
          </ul>
        </div>
      </div>



      <div class="useful_links item_left">
        <div class="header_links header_item_left">
          <p>Liên Kết Hữu Ích</p>
        </div>
        <div class="content_links content_item_left">
          <ul class="list_links">
            <li class="item_links item">
              <img src="/images/icons8-star-50.png" />
              <a href="#">
                  Cập nhật 
                  <strong>tin tức phụ nữ</strong>
                  mới
                </a>
            </li>
            <li class="item_links item">
            <img src="/images/icons8-star-50.png" />
              <a href="#">
                  Đọc tin
                  <strong>phụ nữ</strong>
                  mới
                </a>
            </li>
            <li class="item_links item">
            <img src="/images/icons8-star-50.png" />
              <a href="#">
                  Cập nhật 
                  <strong>tin tức phụ nữ</strong>
                  mới
                </a>
            </li>
              
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>