  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url() ?><?= base_url() ?>assets_admin/assets/img/apple-icon.png">
    <link rel="icon" href="<?= base_url() ?>assets_admin/assets/img/favicon.png">
    <title>
    ITSharing
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap 4 material admin, bootstrap 4 material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap 4 dashboard, css3 dashboard, bootstrap 4 admin, bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, premium material design admin">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/assets/css/material-dashboard.min790f.css?v=2.0.1">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url() ?>assets_admin/assets/assets-for-demo/demo.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- iframe removal -->
    <script type="text/javascript">
    if (document.readyState === 'complete') {
    if (window.location != window.parent.location) {
    const elements = document.getElementsByClassName("iframe-extern");
    while (elemnts.lenght > 0) elements[0].remove();
    // $(".iframe-extern").remove();
    }
    };
    </script>

    <?php if ($this->session->has_userdata('UserID')): ?>
        
    <?php else: ?>
        <?php redirect(base_url().'Login','refresh') ?>
    <?php endif ?>

    <?php if ($this->session->has_userdata('UserLevel')): ?>
       
    <?php else: ?>
        <?php redirect(base_url().'Home','refresh') ?>
    <?php endif ?>
  </head>