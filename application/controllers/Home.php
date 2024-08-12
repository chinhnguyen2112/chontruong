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
        $time = time();
        $data['canonical'] = base_url();
        $data['blog'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE chuyenmuc != 24  AND type = 0 AND time_post <= $time ORDER BY created_at DESC LIMIT 20");
        $data['blog_new'] = $this->Madmin->get_limit(" chuyenmuc != 24  AND type = 0 AND time_post <= $time", 'blogs', 0, 5);
        $data['meta_title'] = 'Web Review Trường Đại Học - Cao Đẳng - Trung Cấp';
        $data['meta_des'] = 'Nền tảng Web Review Trường ở thời điểm hiện tại và trong tương lai là một trong những nền tảng giúp cho Học sinh và sinh viên lựa chọn được ngành nghề phù hợp...';
        $data['meta_key'] = "Thông tin trường học";
        $data['content'] = 'home';
        $data['list_js'] = [
            'home.js',
        ];
        $data['list_css'] = [
            'home.css'
        ];
        $data['index'] = 1;
        return $this->load->view('index', $data);
    }
    public function amp($alias)
    {
        redirect('/' . $alias . '/', 'location', 301);
    }
    public function feed($alias)
    {
        redirect('/' . $alias . '/', 'location', 301);
    }
    public function chuyenmuc($alias)
    {
        $time = time();
        $alias = trim($alias);
        $alias_new = strtolower($alias);
        if ($alias != $alias_new) {
            redirect('/' . $alias_new . '/', 'location', 301);
        }
        $alias_new = alias_301($alias);
        if ($alias != $alias_new) {
            redirect('/' . $alias_new . '/', 'location', 301);
        }
        $data['canonical'] = base_url() . $alias . '/';
        $author = $this->Madmin->get_by(['alias' => $alias], 'admin');
        $chuyenmuc = $this->Madmin->get_by(['alias' => $alias], 'category');
        if ($chuyenmuc == null) {
            $page = $this->Madmin->query_sql_row("SELECT * FROM blogs WHERE type = 1 AND alias = '$alias' ");
            if ($page == null) {
                $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE blogs.alias = '$alias' ");
            }
        }
        if (isset($chuyenmuc) && $chuyenmuc != null) { //chuyenmuc
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            $count_or['chuyenmuc'] = $chuyenmuc['id'];
            if ($chuyenmuc['parent'] == 0) {
                $count_or['cate_parent'] = $chuyenmuc['id'];
                $data['cate_to'] = $chuyenmuc;
            }
            $chuyenmuc_parent = $this->Madmin->get_by(['id' => $chuyenmuc['parent']], 'category');
            $title_page = $chuyenmuc['name'];
            $data['cate'] = $chuyenmuc;
            $data['meta_title'] = $chuyenmuc['meta_title'];
            if ($chuyenmuc_parent != null) {
                $cate_parent = $this->Madmin->query_sql_row("SELECT id,alias,name,parent  FROM category  WHERE name = '{$chuyenmuc_parent['name']}' ");
                $data['cate_1'] = $cate_parent;
                $title_page = $chuyenmuc_parent['name'] . ' - ' . $chuyenmuc['name'];
            }
            $data['blog'] = $this->Madmin->get_limit_or("time_post <= $time AND type = 0 AND index_blog = 1", $count_or, 'blogs', 0, 18);
            $data['blog_new'] = $this->Madmin->get_limit("type = 0 AND time_post <= $time AND index_blog = 1", 'blogs', 0, 5);
            $data['title_page'] = $title_page;
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
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            if (!admin() && $blog['time_post'] > $time) {
                redirect('/');
            }
            if($blog['index_blog'] == 0){
                redirect('/');
            }
            $data['blog_same'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE chuyenmuc = {$blog['chuyenmuc']} AND type = 0 AND time_post <= $time AND id != {$blog['id']}  ORDER BY updated_at DESC LIMIT 6");
            $data['blog_new'] = $this->Madmin->get_limit("type = 0 AND time_post <= $time AND id != {$blog['id']} ", 'blogs', 0, 5);
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
            if($blog['id'] != 848 ){
                $data['index'] = 1;
            }
        } else if (isset($author) && $author != null) {
            return $this->author($alias);
        } else if (isset($page) && $page != null) {
            return $this->page($page);
        } else {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        }
        return $this->load->view('index', $data);
    }
    public function author($alias)
    {
        $author = $this->Madmin->get_by(['alias' => $alias], 'admin');
        if ($author == null) {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        } else {
            $time = time();
            if ($_SERVER['REQUEST_URI'] != '/' . $author['alias'] . '/') {
                redirect('/' . $author['alias'] . '/', 'location', 301);
            }
            $blog = $this->Madmin->query_sql("SELECT * FROM blogs WHERE time_post <= $time AND author_id = '{$author['id']}' LIMIT 20");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE time_post <= $time  ORDER BY id DESC LIMIT 5");
            $data['blog'] = $blog;
            $data['author'] = $author;
            $data['list_js'] = [
                'jquery.toc.min.js',
                'author.js',
            ];
            $data['list_css'] = [
                'author.css',
            ];
            $data['canonical'] = base_url() . $alias . '/';
            $data['meta_title'] = $author['name'] . ' Tác giả tại Chontruong';
            $data['meta_des'] = $author['name'];
            $data['meta_key'] = $author['name'];
            $data['meta_img'] = $author['image'];
            $data['content'] = 'author';
            $data['index'] = 2;
            return $this->load->view('index', $data);
        }
    }
    function page($page)
    {
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
        $data['canonical'] = base_url() . $page['alias'] . '/';
        return $this->load->view('index', $data);
    }
}
