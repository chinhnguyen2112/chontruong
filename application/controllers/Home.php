<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Madmin']);
        $this->load->database();
        $this->load->helper(['url', 'func_helper']);
        $this->load->library(['pagination311', 'session']);
    }
    public function home()
    {
        $data['canonical'] = base_url();
        $time = time();
        $data['blog'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time ORDER BY created_at DESC LIMIT 20");
        $data['blog_new'] = $this->Madmin->get_limit("index_blog = 1 AND type = 0 AND time_post <= $time", 'blogs', 0, 5);
        $data['meta_title'] = 'Góc nhìn đa chiều của Phụ Nữ trưởng thành - Phụ Nữ Số';
        $data['meta_des'] = 'Phụ Nữ Số là trang web chia sẻ kiến thức và kinh nghiệm hữu ích dành cho phụ nữ hiện đại. Đây như một cuốn cẩm nang giúp chị em có thêm nhiều bí kíp về tình yêu, sức khỏe, làm đẹp, chuyện vào bếp hay đi du lịch,… Phụ Nữ Số hứa hẹn sẽ mang đến những thông tin chính xác, hữu ích nhất cho cuộc sống của chị em!';
        $data['content'] = 'home';
        $data['list_js'] = [
            'home.js',
        ];
        $data['list_css'] = [
            'home.css'
        ];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    public function chuyenmuc($alias)
    {
        $time = time();
        $alias = trim($alias);
        if ($alias == 'nguoi-tieu-dung-thong-minh') {
            $alias = 'tieu-dung-thong-minh';
        }
        $data['canonical'] = base_url() . $alias . '/';
        $author = $this->Madmin->get_by(['alias' => $alias], 'admin');
        if ($author == null) {
            $chuyenmuc = $this->Madmin->get_by(['alias' => $alias], 'category');
            if ($chuyenmuc == null) {
                $page = $this->Madmin->query_sql_row("SELECT * FROM blogs WHERE type = 1 AND alias = '$alias' ");
                if ($page == null) {
                    $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE type = 0 AND index_blog = 1 AND time_post<= $time AND blogs.alias = '$alias' ");
                    if ($blog == null) {
                        $tags = $this->Madmin->get_by(['alias' => $alias], 'tags');
                    }
                }
            }
        }
        if (isset($chuyenmuc) && $chuyenmuc != null) { //chuyenmuc
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            if ($chuyenmuc['parent'] == 0) { //chuyen muc to
                $count_or['cate_parent'] = $chuyenmuc['id'];
                $data['cate_to'] = $chuyenmuc;
                $cate_con = $this->Madmin->query_sql("SELECT * FROM category WHERE parent = $chuyenmuc[id]");
                $data['cate_con'] = $cate_con;
            } else {
                $cate_to = $this->Madmin->query_sql_row("SELECT * FROM category WHERE id = $chuyenmuc[parent] ");
                $data['cate_to'] = $cate_to;
                $data['cate_con'] = $this->Madmin->query_sql("SELECT * FROM category WHERE parent = $cate_to[id]");
            }
            $where_cate = $this->search_cate($chuyenmuc['id'], $chuyenmuc['level']);
            // echo $where_cate;
            $count = $this->Madmin->num_rows_or("index_blog = 1 AND type = 0 AND time_post <= $time", $where_cate, 'blogs');
            pagination('/' . $chuyenmuc['alias'], $count, 18);
            $cate = $this->Madmin->get_by(['id' => $chuyenmuc['parent']], 'category');
            $data['cate'] = $cate;
            if ($cate != null && $cate['parent'] > 0) {
                $cate_parent = $this->Madmin->get_by(['id' => $cate['parent']], 'category');
                $data['cate_parent'] = $cate_parent;
            }
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY id DESC LIMIT 5");
            $data['blog'] = $this->Madmin->get_limit_or("index_blog = 1 AND type = 0 AND time_post <= $time", $where_cate, 'blogs', 0, 18);
            $data['chuyenmuc'] = $chuyenmuc['id'];
            $data['meta_title'] = $chuyenmuc['meta_title'];
            $data['meta_des'] = $chuyenmuc['meta_des'];
            $data['meta_key'] = $chuyenmuc['name'];
            $data['content'] = 'chuyenmuc_blog';
            $data['list_js'] = [
                'chuyenmuc_blog.js',
            ];
            $data['list_css'] = [
                'chuyenmuc_blog.css',
            ];
            $data['index'] = 1;
        } else if (isset($blog) && $blog != null) { // blog
            $this->detail_blog($blog['id']);
        } else if (isset($tags) && $tags != null) {
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            $id_parent = $tags['id'];
            $list_tag = $this->Madmin->query_sql("SELECT *  FROM tags  WHERE parent = $id_parent ");
            $where = '  FIND_IN_SET(' . $id_parent . ',tag) ';
            foreach ($list_tag as $key => $val) {
                $where .= ' OR FIND_IN_SET(' . $val['id'] . ',tag) ';
            }
            $page = $this->uri->segment(3);
            if ($page < 1 || $page == '') {
                $page = 1;
            }
            $limit = 18;
            $start = $limit * ($page - 1);
            $count = $this->Madmin->query_sql("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE index_blog = 1 AND type = 0 AND time_post <= $time AND ( $where ) ");
            pagination('/' . $tags['alias'], count($count), $limit);
            $data['blog'] = $this->Madmin->query_sql("SELECT * FROM blogs  WHERE index_blog = 1 AND type = 0 AND time_post <= $time AND ( $where ) ORDER BY id DESC LIMIT $start,$limit");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY id DESC LIMIT 5");
            $data['title_page'] = $tags['name'];
            $data['meta_title'] = $tags['meta_title'];
            $data['meta_des'] = $tags['meta_des'];
            $data['meta_key'] = $tags['meta_key'];
            $data['content_tag'] = $tags['content'];
            $data['tag_id'] = $tags['id'];
            $data['canonical'] = base_url() . $alias . '/';
            $data['content'] = 'tag';
            $data['list_js'] = [
                'tag.js',
            ];
            $data['list_css'] = [
                'css_tag.css',
            ];
            $data['index'] = 1;
        } else if (isset($author) && $author != null) {
            return $this->author($alias);
        } else if (isset($page) && $page != null) {
            return $this->page($page);
        } else {
            set_status_header(301);
            return $this->load->view('errors/html/error_404');
        }
        $this->load->view('index', $data);
    }
    public function search_cate($id, $level)
    {
        $where = " chuyenmuc = $id OR cate_parent = $id ";
        if ($level != 3) {
            $cate = $this->Madmin->query_sql("SELECT id,parent,level FROM category WHERE parent = $id ");
            if ($cate != null) {
                foreach ($cate as $key => $val) {
                    $id_cate = $val['id'];
                    $where .= " OR chuyenmuc = $id_cate ";
                    if ($val['level'] != 3) {
                        $cate_2 = $this->Madmin->query_sql("SELECT id,parent,level from category WHERE parent = {$val['id']} ");
                        if ($cate_2 != null) {
                            foreach ($cate_2 as  $val2) {
                                $id_cate = $val2['id'];
                                $where .= " OR chuyenmuc = $id_cate ";
                            }
                        }
                    }
                }
            }
        }
        return $where;
    }
    public function detail_blog($id)
    {
        $time = time();
        $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE blogs.id = $id ");
        if ($_SERVER['REQUEST_URI'] != '/' . $blog['alias'] . '-b' . $blog['id'] . '/') {
            redirect('/' . $blog['alias'] . '-b' . $blog['id'] . '/', 'location', 301);
        }
        if ((!admin() && $blog['time_post'] > $time) || (!admin() && $blog['index_blog'] != 1)) {
            redirect('/');
        }
        $data['canonical'] = base_url() . $blog['alias'] . '-b' . $blog['id'] . '/';
        $data['blog_same'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE chuyenmuc = {$blog['chuyenmuc']} AND index_blog = 1 AND type = 0 AND time_post <= $time AND id != {$blog['id']}  ORDER BY updated_at DESC LIMIT 6");
        $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE  id != {$blog['id']} AND index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY id DESC LIMIT 5");
        $cate = $this->Madmin->query_sql_row("SELECT name,alias,parent FROM category  WHERE id = {$blog['chuyenmuc']} ");
        $data['cate'] = $cate;
        if ($cate != null && $cate['parent'] > 0) {
            $cate_parent = $this->Madmin->query_sql_row("SELECT name,alias,parent FROM category  WHERE id = {$cate['parent']} ");
            $data['cate_parent'] = $cate_parent;
            if ($cate != null && $cate_parent['parent'] > 0) {
                $cate_parent_2 = $this->Madmin->query_sql_row("SELECT name,alias,parent  FROM category  WHERE id = {$cate_parent['parent']} ");
                $data['cate_parent_2'] = $cate_parent_2;
            }
        }
        if ($blog['author_id'] > 0) {
            $author = $this->Madmin->get_by(['id' => $blog['author_id']], 'admin');
            if ($author != null) {
                $data['author'] = $author;
            }
        }
        $data['blog'] = $blog;
        $data['content'] = 'detail_blog';
        $data['list_js'] = [
            'jquery.toc.min.js',
            'detail_blog.js',
        ];
        $data['list_css'] = [
            'detail_blog.css',
        ];
        $data['meta_title'] = $blog['meta_title'];
        $data['meta_des'] = $blog['meta_des'];
        $data['meta_key'] = $blog['meta_key'];
        $data['meta_img'] = $blog['image'];
        if ($blog['time_post'] <= $time && $blog['index_blog'] == 1) {
            $data['index'] = 1;
        }
        $this->load->view('index', $data);
    }
    public function author($alias)
    {
        $author = $this->Madmin->get_by(['alias' => $alias], 'admin');
        if ($author == null) {
            set_status_header(301);
            return $this->load->view('errors/html/error_404');
        } else {
            $time = time();
            if ($_SERVER['REQUEST_URI'] != '/' . $author['alias'] . '/') {
                redirect('/' . $author['alias'] . '/', 'location', 301);
            }
            $blog = $this->Madmin->query_sql("SELECT * FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time AND author_id = '{$author['id']}' LIMIT 20");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY id DESC LIMIT 5");
            $data['blog'] = $blog;
            $data['author'] = $author;
            $data['list_js'] = [
                'jquery.toc.min.js',
                'author.js',
            ];
            $data['list_css'] = [
                'author.css',
            ];
            $data['meta_title'] = $author['name'] . ' Tác giả tại phunuso';
            $data['meta_des'] = $author['name'];
            $data['meta_key'] = $author['name'];
            $data['meta_img'] = $author['image'];
            $data['index'] = 1;
            $data['content'] = 'author';
            $this->load->view('index', $data);
        }
    }
    public function import_file()
    {
        $data['content'] = 'get_blog';
        $this->load->view('index', $data);
    }
    public function test()
    {
        $url_post = $this->input->post('url_blog');
        error_reporting(0);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL =>  $url_post,
            CURLOPT_USERAGENT => 'XuanThuLab test cURL Request',
            CURLOPT_SSL_VERIFYPEER => false,
        ));
        $alias = str_replace('https://phunuso.vn/', '', $url_post);
        $resp = curl_exec($curl);
        $data['data_content'] = $resp;
        $data['alias_url'] = str_replace('/', '', $alias);
        $data['content'] = 'get_content';
        $this->load->view('index', $data);
    }
    public function add_blog()
    {
        $data['title'] = $this->input->post('h1');
        $data['alias'] = $alias =  $this->input->post('alias');
        $data['meta_title'] = $this->input->post('title');
        $data['meta_des']     = $this->input->post('des');
        $data['updated_at'] = strtotime($this->input->post('date'));
        $data['created_at'] = strtotime($this->input->post('date'));
        $content = $this->input->post('content');
        $img = $this->input->post('img');
        $list_img = explode(',', $this->input->post('list_img'));
        $where_blog = [
            'alias' =>  $alias
        ];
        $blog = $this->Madmin->get_by($where_blog, 'blogs');
        if ($blog == null) {

            foreach ($list_img as $val) {
                if ($val != '') {
                    $this_val = explode('/', $val);
                    $name_img =  array_pop($this_val);
                    $new_name = 'assets/img_blog/images/' . $name_img;
                    copy($val, $new_name);
                    $content = str_replace($val, '/' . $new_name, $content);
                }
            }
            $data['content'] = $content;
            $data['cate_parent'] = 0; // cha
            $data['chuyenmuc'] = 19; // con
            if (copy($img, 'upload/blog/' . $alias . '.jpg')) {
                $data['image']     =  'upload/blog/' . $alias . '.jpg';
            }

            $insert_blog = $this->Madmin->insert($data, 'blogs');
            $response = [
                'status' => 1,
            ];
        } else {
            $response = [
                'status' => 0,
            ];
        }
        echo json_encode($response);
    }
    public function sapo()
    {
        $limit = 50;
        $start = $limit * (14 - 1);
        $blog = $this->Madmin->query_sql("SELECT id,content FROM blogs ORDER BY id ASC LIMIT $start,$limit");
        foreach ($blog as $val) {
            $content = explode('</p>',  $val['content']);
            $sapo = $content[0] . '</p>';
            $data['sapo'] = $sapo;
            $data['content'] = str_replace($sapo, '', $val['content']);
            $update = $this->Madmin->update(['id' => $val['id']], $data, 'blogs');
        }
    }
    public function replace_blog()
    {

        $blog = $this->Madmin->query_sql("SELECT id,alias FROM blogs ");
        foreach ($blog as $val) {
            $alias = '/' . $val['alias'] . '/';
            $alias_new = '/' . $val['alias'] . '-b' . $val['id'] . '/';
            $blog_2 = $this->Madmin->query_sql("SELECT id,content FROM blogs WHERE `content` LIKE '%$alias%' ");
            foreach ($blog_2 as $val_2) {
                echo 1;
                $content = str_replace($alias, $alias_new, $val_2['content']);
                $insert = $this->Madmin->update(['id' => $val_2['id']], ['content' => $content], 'blogs');
            }
        }
    }
    function page($page) {
        if ($_SERVER['REQUEST_URI'] != '/' . $page['alias'] . '/') {
            redirect('/' . $page['alias'] . '/', 'location', 301);
        }
        $data['page'] = $page;
        $data['content'] = 'page';
        $data['list_css'] = [
            'page.css'
        ];
        $data['meta_title'] = $page['meta_title'];
        $data['meta_des'] = $page['meta_des'];
        $data['meta_key'] = $page['meta_key'];
        $data['meta_img'] = $page['image'];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
}
