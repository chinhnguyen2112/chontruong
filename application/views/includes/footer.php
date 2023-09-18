<?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
$count_line = 0;
if (count($menu_cate_parent) > 2) {
    $count_line =  count($menu_cate_parent) - 2;
} ?>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-widgets body_width">
        <div class="content_footer">
            <div class="ft_left">
                <img class="logo_ft" src="/images/logo.webp" alt="logo footer">
                <div class="widget">
                    <p class="title_widget">WEB REVIEW TRƯỜNG ĐẠI HỌC - CAO ĐẲNG - TRUNG CẤP</p>
                    <div class="contact_infor">
                        <ul class="list_contact_ft">
                            <li style="width:100%">
                                <img src="/images/icons/icon_address_ft.png" alt="icon address">
                                <p>Số 111 đường Mễ Trì - Quận Nam Từ Liêm - Hà Nội.</p>
                            </li>
                            <li>
                                <img src="/images/icons/icon_website_ft.png" alt="icon website">
                                <p>chontruong.vn -</p>
                            </li>
                            <li style="margin-left:3px;width:51%">
                                <img src="/images/icons/icon_mail_ft.png" alt="icon email">
                                <p>chontruong@gmail.com</p>
                            </li>
                            <li>
                                <img src="/images/icons/icon_fb_ft.png" alt="icon facebook">
                                <p>fb.com/chontruong.vn</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ft_right">
                <div class="r_01">
                    <p class="title_r">CHUYÊN MỤC</p>
                    <div class="list_links">
                        <!-- <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 42 AND id != 41');
                        foreach ($menu_cate_parent as $val) {
                            $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                            <div class="item_link_ft" id="this_menu">
                                <span onclick="big_item_menu(this,1)">
                                    <a href="/<?= $val['alias'] ?>/">
                                        <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                        <?= $val['name'] ?>
                                    </a>
                                </span>
                            </div>
                        <?php } ?> -->
                        <div class="item_link_ft">
                            <span>
                                <a href="/truong-dai-hoc/">
                                    <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                    Trường Đại Học
                                </a>
                            </span>
                        </div>
                        <div class="item_link_ft">
                            <span>
                                <a href="/nganh-dao-tao/">
                                    <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                    Ngành Đào Tạo
                                </a>
                            </span>
                        </div>
                        <div class="item_link_ft">
                            <span>
                                <a href="/truong-cao-dang/">
                                    <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                    Trường Cao Đẳng
                                </a>
                            </span>
                        </div>
                        <div class="item_link_ft">
                            <span>
                                <a href="#">
                                    <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                    Khối Thi Đại Học
                                </a>
                            </span>
                        </div>
                        <div class="item_link_ft">
                            <span>
                                <a href="/truong-trung-cap/">
                                    <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                    Trường Trung Cấp
                                </a>
                            </span>
                        </div>
                        <div class="item_link_ft">
                            <span>
                                <a href="#">
                                    <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                    Học Phí Đại Học
                                </a>
                            </span>
                        </div>
                        <div class="item_link_ft">
                            <span>
                                <a href="#">
                                    <img src="/images/icons/icon_arrow_ft.png" alt="icon arrow footer">
                                    Trung Tâm Đào Tạo
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="r_02">
                    <p class="title_r">ĐĂNG KÝ NHẬN TIN</p>
                    <form class="form_email" id="newsletter">
                        <p><strong>Đăng ký nhận bản tin</strong> , bài viết tư vấn câp nhật hằng ngày.</p>
                        <input class="input_text" type="email" name="email" placeholder="Email Address" required>
                        <input class="btn_submit_form" value="SIGN UP" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="content_copy body_width">
            <div class="site-info"> © 2022 Chọn Trường</div>
            <div class="list_link_bottom">
                <ul>
                    <li>
                        <a href="/gioi-thieu/">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="/lien-he/">Liên hệ</a>
                    </li>
                    <li>
                        <a href="#">Chính sách</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>