<!DOCTYPE html>
<html lang="vi">

<head>
<meta name="google-site-verification" content="D9nFyymPfwsWyQj51ug3LorZqmP5WU_3bHErhKZj6ZY" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZN81P7Z9SM"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-ZN81P7Z9SM');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php if (isset($index) && $index == 1) { ?>
    <meta name="robots" content="index,follow">
  <?php } else if (isset($index) && $index == 2) { ?>
    <meta name="robots" content="noindex,follow">
  <?php } else { ?>
    <meta name="robots" content="noindex,nofollow">
  <?php } ?>
  <title><?= isset($meta_title) ? $meta_title : 'Web review trường ĐẠI HỌC - CAO ĐẲNG - TRUNG CẤP' ?></title>
  <meta name="description" content="<?= isset($meta_des) ? $meta_des : '' ?>">
  <meta name="keywords" content="<?= isset($meta_key) ? $meta_key : '' ?>">
  <link rel="canonical" href="<?= (isset($canonical)) ? $canonical : base_url() ?>">
  <meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
  <meta property="og:url" content="<?= (isset($canonical)) ? $canonical : base_url() ?>">
  <meta property="og:title" content="<?= isset($meta_title) ? $meta_title : 'Web review trường ĐẠI HỌC - CAO ĐẲNG - TRUNG CẤP' ?>">
  <meta property="og:site_name" content="Chontruong.edu.vn">
  <meta property="og:description" content="<?= isset($meta_des) ? $meta_des : '' ?>">
  <meta property="og:image:secure_url" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>">
  <meta property="og:image" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>">
  <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.png">
  <link data-n-head="ssr" rel="icon" type="image/png" href="<?= base_url() ?>images/favicon.png">
  <link rel="stylesheet" href="/assets/css/font.css">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/footer.css">
  <?php if (isset($list_css)) {
    foreach ($list_css as $css) { ?>
      <link rel="stylesheet" href="/assets/css/<?= $css ?>">
  <?php  }
  } ?>
  <script src="/assets/js/jquery.min.js"></script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Chọn Trường",
      "alternateName": "Chọn Trường",
      "url": "https://chontruong.edu.vn/",
      "logo": "https://chontruong.edu.vn/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "0328395635",
        "contactType": "",
        "areaServed": "VN",
        "availableLanguage": "Vietnamese"
      },
      "sameAs": [
        "https://chontruong.edu.vn/",
        "https://www.facebook.com/profile.php?id=100091426826871",
        "https://twitter.com/chontruongedu",
        "https://www.youtube.com/@chontruongedu/about",
        "https://www.pinterest.com/chontruongedu/",
        "https://www.tumblr.com/chontruongedu"
      ]
    }
  </script>
</head>

<body>
  <?php
  $this->load->view("includes/header");
  if (isset($content)) {
    $this->load->view($content);
  }
  $this->load->view("includes/footer");
  if (isset($list_js)) {
    foreach ($list_js as $js) { ?>
      <script src="/assets/js/<?= $js ?>"></script>
  <?php  }
  } ?>
  <script src="/assets/js/header.js"></script>
</body>

</html>