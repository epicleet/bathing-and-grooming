<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>We ❤ Pets</title>
        <meta name="description" content="" />

        <base href="<?php echo $SCHEME.'://'.$HOST.':'.$PORT.$BASE.'/'; ?>" />

        <meta property="og:title" content="We Love Pets" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="We Love Pets" />

        <link rel="apple-touch-icon" type="image/png" href="<?php echo $file->by_pass_cache('img/apple-touch-icon.png') ?>" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $file->by_pass_cache('img/favicon.ico') ?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo $file->by_pass_cache('css/main.combined.css', TRUE) ?>" />

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container-fluid">
            <header class="row text-center menu" >


                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="home"><?php echo file_get_contents(__DIR__ . '/img/brand.svg') ?></a></li>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="<?php echo '/home.php'     == $container ? 'active' : '' ?> col-xs-4 col-xs-offset-4 visible-sm"><a class="brand" href="home"><?php echo file_get_contents(__DIR__ . '/img/brand.svg') ?></a></li>
                            <li class="<?php echo '/services.php' == $container ? 'active' : '' ?> col-xs-6 col-md-2 col-md-offset-1"><a href="services">Serviços</a></li>
                            <li class="<?php echo '/care.php' == $container ? 'active' : '' ?> col-xs-6 col-md-2 "><a href="care">Care</a></li>
                            <li class="<?php echo '/home.php'     == $container ? 'active' : '' ?> col-xs-6 col-md-2 hidden-xs hidden-sm"><a class="brand" href="home"><?php echo file_get_contents(__DIR__ . '/img/brand.svg') ?></a></li>
                            <li class="<?php echo '/adoption.php'  == $container ? 'active' : '' ?> col-xs-6 col-md-2 "><a href="adoption">Adoções</a></li>
                            <li class="<?php echo '/contact.php'  == $container ? 'active' : '' ?> col-xs-6 col-md-2 "><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>


            </header>
        </div>

        <?php
            if ( file_exists(__DIR__ . '/' . $container) )
            {
                include __DIR__ . '/' . $container;
            }
        ?>

        <footer class="text-center">
            © <?php echo date('Y') ?> We ❤ Pets - All Rights Reserved 
        </footer>

        <script src="<?php echo $file->by_pass_cache('js/main.combined.js', TRUE) ?>"></script>
    </body>
</html>
