<div class="container">
    <div class="result_content body_width">
        <div class="left_content">
            <div class="heading_left">
                <p>Kết quả tìm kiếm với từ khóa : <?= $key_search ?></p>
            </div>
            <div class="list_result">
                <?php foreach ($result as $key => $val) { ?>
                    <div class="item_result">
                        <div class="left_item_content">
                            <a class="img_item" href="/<?= $val['alias'] ?>/">
                                <img src="/<?= $val['image'] ?>" />
                            </a>
                            <a class="name_cate" href="/<?= $val['cate_alias'] ?>/">
                                <?= $val['cate_name'] ?>
                            </a>
                        </div>
                        <div class="right_item_content">
                            <a class="title_item_result" href="/<?= $val['alias'] ?>/"><?= $val['title'] ?></a>
                            <p class="date_blogs"><?= date('d-m-Y', $val['created_at']) ?></p>
                            <div class="sapo_blog"><?= $val['sapo'] ?>Xác lập luận điểm dựa trên nhóm câu có cùng chung nội dung. ví dụ: Trong tác phẩm Người lái đò Sông Đà đoạn: “Sông Đà tuôn dài, tuôn dài….đốt nương xuân”. Nhóm câu này có nội dung nói về hình dáng sông Đà cảm nhận từ góc nhìn từ trên cao; sông Đà hiện lên như hình ảnh một người đàn bà kiều diễm. Xác định được nội dung đó thì ta có thể xác lập ra luận điểm: “Nhà văn chiêm ngưỡng dòng sông ở nhiều góc độ. Từ trên cao nhìn xuống – sông Đà mang vẻ đẹp trữ tình lãng mạn và gợi cảm biết bao qua phép so sánh, liên tưởng độc đáo tới người đàn bà có áng tóc trữ tình mê đắm….”.</div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="pagination">
                <?= $this->pagination->create_links() ?>
            </div>
        </div>
        <div class="right_content">
            <div class="list_right_item">
                <p class="title_left_content">Tin Mới Nhất</p>
                <?php foreach ($list_news as $key => $val) { ?>
                    <div class="item_left_content">
                        <div class="left_item">
                            <a class="img_item_left" href="/<?= $val['alias'] ?>/">
                                <img src="/<?= $val['image'] ?>" />
                            </a>
                        </div>
                        <div class="right_item">
                            <a class="title_item_right" href="/<?= $val['alias'] ?>/"><?= $val['title'] ?></a>
                            <p class="date_item_left"><?= date('d-m-Y', $val['created_at']) ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>