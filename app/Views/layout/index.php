<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{ !empty($description) ? $description : '' ?>">
    <meta name="author" content="TWEB.COM.VN">
    <meta name="keyword" content="{{ !empty($keyword) ? $keyword : '' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $title ?? '' ?></title>

    <link rel="shortcut icon" href="<?php
    echo base_url('favicon.ico') ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php
    echo base_url('favicon.ico') ?>"
          type="image/x-icon">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="<?php echo base_url("css/materialize.min.css") ?>" rel="stylesheet" media="screen,projection"/>
    <style type="text/css">
        nav ul a,
        nav .brand-logo {
            color: #444;
        }

        .nav-wrapper li a.active {
            background: #0a76b7;
            color: #fff;
        }

        p {
            line-height: 2rem;
        }

        .sidenav-trigger {
            color: #26a69a;
        }

        footer.page-footer {
            margin: 0;
        }


    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65287833-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-65287833-14');
    </script>

</head>

<body>
<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="<?php
            echo base_url('icon-facebook') ?>" class="brand-logo">👋 Welcome Tool</a>
            <ul class="right hide-on-med-and-down">
                <li><a class="<?php
                    if (current_url() == base_url('icon-facebook')) {
                        echo 'active';
                    } ?>" href="<?php
                    echo base_url('icon-facebook') ?>">🔎 Icon Facebook</a></li>
                <li><a class="<?php
                    if (current_url() == base_url('generate-qrcode')) {
                        echo 'active';
                    } ?>" href="<?php
                    echo base_url('generate-qrcode') ?>">📌 Generate QR Code</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="<?php
                    echo base_url('icon-facebook') ?>">Icon facebook</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<div class="container">
    <div class="section">

        <?= $this->renderSection('content') ?>

    </div>
</div>


<footer class="page-footer teal">
    <!--
   <div class="container">
       <div class="row">
           <div class="col l6 s12">
               <h5 class="white-text">Company Bio</h5>
               <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's
                   our full time job. Any amount would help support and continue development on this project and is
                   greatly appreciated.</p>
           </div>
           <div class="col l3 s12">
               <h5 class="white-text">Settings</h5>
               <ul>
                   <li><a class="white-text" href="#!">Link 1</a></li>
                   <li><a class="white-text" href="#!">Link 2</a></li>
                   <li><a class="white-text" href="#!">Link 3</a></li>
                   <li><a class="white-text" href="#!">Link 4</a></li>
               </ul>
           </div>
           <div class="col l3 s12">
               <h5 class="white-text">Connect</h5>
               <ul>
                   <li><a class="white-text" href="#!">Link 1</a></li>
                   <li><a class="white-text" href="#!">Link 2</a></li>
                   <li><a class="white-text" href="#!">Link 3</a></li>
                   <li><a class="white-text" href="#!">Link 4</a></li>
               </ul>
           </div>
       </div>
   </div>-->
    <div class="footer-copyright">
        <div class="container">
            Made by <a style="color: #ffd655" href="https://tweb.com.vn">Tình Nguyễn</a>
            | VPS sử dụng <a style="color: #ffd655" href="http://bit.ly/2kAezij" target="_blank">INET</a>
            | Made with 💞 in Long An
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php
echo base_url("js/materialize.min.js") ?>"></script>
<script src="<?php
echo base_url("js/clipboard.min.js") ?>" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('.collapsible').collapsible();
    });

    /**
     * check all for all list data
     */
    if ($('.clipboard').length > 0) {
        let clipboard = new ClipboardJS('.clipboard');
        clipboard.on('success', function (e) {
            console.info('Action:', e.action);
            console.info('Text:', e.text);
            console.info('Trigger:', e.trigger);

            e.clearSelection();
        });

        clipboard.on('error', function (e) {
            console.error('Action:', e.action);
            console.error('Trigger:', e.trigger);
        });
    }
</script>
</body>
</html>
