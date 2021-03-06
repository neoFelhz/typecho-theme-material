<!DOCTYPE HTML>
<html >
    <head>
        <meta charset="utf-8" />

        <!-- Title -->
        <title>
            <?php $this->archiveTitle('', '', ' - '); ?>
            <?php $this->options->title(); ?>
        </title>

        <!-- dns prefetch -->
        <meta http-equiv="x-dns-prefetch-control" content="on">

        <!-- Meta & Info -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="theme-color" content="<?php $this->options->ChromeThemeColor() ?>">
        <meta name="author" content="<?php $this->options->title() ?>">
        <meta name="description" itemprop="description" content="<?php $this->options->description() ?>">
        <meta name="keywords" content="<?php $this->options->keywords() ?>">

        <!-- Favicons -->
        <link rel="icon shortcut" type="image/ico" href="<?php $this->options->favicon() ?>">
        <link rel="icon" sizes="192x192" href="<?php $this->options->favicon() ?>">
        <link rel="apple-touch-icon" href="<?php $this->options->favicon() ?>">

        <!--iOS -->
        <meta name="apple-mobile-web-app-title" content="Title">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="480">

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="<?php $this->options->favicon() ?>" />
        <meta name="msapplication-TileColor" content="#FFFFFF" />

        <!-- The Open Graph protocol -->
        <?php if($this->is('post')||$this->is('page')): ?>
        <meta property="og:url" content="<?php $this->permalink(); ?>" />
        <meta property="og:type" content="blog" />
        <meta property="og:release_date" content="<?php $this->date('Y-m-j'); ?>" />
        <meta property="og:title" content="<?php $this->options->title(); ?>" />
        <meta property="og:image" content="<?php showThumbnail($this); ?>" />
        <meta property="og:description" content="<?php $this->description() ?>" />
        <meta property="og:author" content="<?php $this->author(); ?>" />
        <meta property="article:published_time" content="<?php $this->date('Y-m-j'); ?>" />
        <meta property="article:modified_time" content="<?php $this->date('Y-m-j'); ?>" />
        <?php endif; ?>

        <!-- Block IE -->
        <!--[if lte IE 9]>
            <?php if (!empty($this->options->CDNURL)): ?>
                <link rel="stylesheet" href="<?php $this->options->CDNURL() ?>/MaterialCDN/css/ie-blocker.css">
            <?php else: ?>
                <link rel="stylesheet" href="<?php $this->options->themeUrl('css/ie-blocker.css'); ?>">
            <?php endif; ?>
            <?php if ($this->options->langis == '0'): ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                   <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/ie-blocker.en.js" img-path="../img/ie-blocker/"></script>
                <?php else: ?>
                   <script src="<?php $this->options->themeUrl('js/ie-blocker.en.js'); ?>" img-path="../img/ie-blocker/"></script>
                <?php endif; ?>
            <?php elseif ($this->options->langis == '1'): ?>
                <?php if (!empty($this->options->CDNURL)): ?>
                    <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/ie-blocker.zhCN.js" img-path="../img/ie-blocker/"></script>
                <?php else: ?>
                    <script src="<?php $this->options->themeUrl('js/ie-blocker.zhCN.js'); ?>" img-path="../img/ie-blocker/"></script>
                <?php endif; ?>
            <?php endif; ?>
       <![endif]-->

        <!-- The Twitter Card protocol -->
        <meta name="twitter:title" content="<?php $this->archiveTitle(); ?>">
        <meta name="twitter:description" content="<?php $this->options->description() ?>">
        <meta name="twitter:image" content="<?php $this->options->favicon() ?>">
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content="<?php $this->permalink(); ?>" />

        <?php $this->header(); ?>

        <!-- Material style -->
        <?php if (!empty($this->options->CDNURL)): ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNURL() ?>/MaterialCDN/css/material.min.css" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->CDNURL() ?>/MaterialCDN/css/style.min.css" />
        <?php else: ?>
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/material.min.css'); ?>" />
            <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.min.css'); ?>" />
        <?php endif; ?>

       <?php if ($this->options->RobotoSource == '0'): ?>
            <link href='https://fonts.proxy.ustclug.org/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
            <link href="https://fonts.proxy.ustclug.org/icon?family=Material+Icons" rel="stylesheet">
        <?php elseif ($this->options->RobotoSource == '1'): ?>
            <link href='https://fonts.cat.net/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
            <link href="https://fonts.cat.net/icon?family=Material+Icons" rel="stylesheet">
        <?php elseif ($this->options->RobotoSource == '2'): ?>
        <style>
            <?php if (!empty($this->options->CDNURL)): ?>
                @font-face {
                    font-family: Roboto;
                    src: url('<?php $this->options->CDNURL()?>/MaterialCDN/fonts/Roboto.ttf');
                }
                @font-face {
                    font-family: Roboto;
                    font-weight: 700;
                    src: url('<?php $this->options->CDNURL()?>/MaterialCDN/fonts/Roboto-700.ttf');
                }
                @font-face {
                     font-family: 'Material Icons';
                     font-style: normal;
                     font-weight: 400;
                     src: url('<?php $this->options->CDNURL()?>/MaterialCDN/fonts/MaterialIcons-Regular.ttf');
                }
            <?php else: ?>
                @font-face {
                    font-family: Roboto;
                    src: url('<?php $this->options->themeUrl('fonts/Roboto.ttf'); ?>');
                }
                @font-face {
                    font-family: Roboto;
                    font-weight: 700;
                    src: url('<?php $this->options->themeUrl('fonts/Roboto-700.ttf'); ?>');
                }
                @font-face {
                     font-family: 'Material Icons';
                     font-style: normal;
                     font-weight: 400;
                     src: url('<?php $this->options->themeUrl('fonts/MaterialIcons-Regular.ttf'); ?>');
                }
            <?php endif; ?>
        </style>
       <?php elseif ($this->options->RobotoSource == '3'): ?>
       <?php endif; ?>

        <!-- Config CSS -->

        <!-- Other Styles -->
        <style>
        body, html {
            font-family: <?php $this->options->CustomFonts() ?>;
            overflow-x: hidden;
        }

        a {
            color: <?php $this->options->alinkcolor(); ?>;
        }

        .mdl-card__media,
        #search-label,
        #search-form-label:after,
        #scheme-Paradox .hot_tags-count,
        #scheme-Paradox .sidebar_archives-count,
        #scheme-Paradox .sidebar-colored .sidebar-header,
        #scheme-Paradox .sidebar-colored .sidebar-badge{
            background-color: <?php $this->options->ThemeColor() ?> !important;
        }

        /* Sidebar User Drop Down Menu Text Color */
        #scheme-Paradox .sidebar-colored .sidebar-nav>.dropdown>.dropdown-menu>li>a:hover,
        #scheme-Paradox .sidebar-colored .sidebar-nav>.dropdown>.dropdown-menu>li>a:focus {
            color: <?php $this->options->ThemeColor() ?> !important;
        }

        #post_entry-right-info,
        .sidebar-colored .sidebar-nav li:hover > a,
        .sidebar-colored .sidebar-nav li:hover > a i,
        .sidebar-colored .sidebar-nav li > a:hover,
        .sidebar-colored .sidebar-nav li > a:hover i,
        .sidebar-colored .sidebar-nav li > a:focus i,
        .sidebar-colored .sidebar-nav > .open > a,
        .sidebar-colored .sidebar-nav > .open > a:hover,
        .sidebar-colored .sidebar-nav > .open > a:focus,
        #ds-reset #ds-ctx .ds-ctx-entry .ds-ctx-head a {
            color: <?php $this->options->ThemeColor() ?> !important;
        }

        .toTop {
            background: <?php $this->options->ButtonThemeColor() ?> !important;
        }

        .material-layout .material-post .material-nav,
        .material-layout .material-index .material-nav,
        .material-nav a {
            color: <?php $this->options->ButtonThemeColor() ?>;
        }

        #scheme-Paradox .MD-burger-layer {
            background-color: <?php $this->options->ButtonThemeColor() ?>;
        }

        #scheme-Paradox #post-toc-trigger-btn {
            color: <?php $this->options->ButtonThemeColor() ?>;
        }

        .post-toc a:hover {
            color: <?php $this->options->alinkcolor(); ?>;
            text-decoration: underline;
        }

</style>


        <!-- Theme Background Related-->
        <?php if ($this->options->BGtype =='0') : ?>
            <style>
                body{
                    <?php if (!empty($this->options->bgcolor)): ?>
                        background-color: <?php $this->options->bgcolor() ?>;
                    <?php else: ?>
                        background-color: #F5F5F5;
                    <?php endif; ?>
                }
                .demo-blog .something-else .mdl-card__supporting-text{
                    background-color: #fff;
                }
                .MD-burger-layer{
                    background-color: #666;
                }
                .demo-blog .demo-blog__posts>.demo-nav,
                .demo-nav a,
                .demo-blog--blogpost .demo-back{
                    color: #666;
                }
            </style>
        <?php elseif ($this->options->BGtype == '2'): ?>
            <style>
            body{
                <?php if ($this->options->GradientType == '0'): ?>
                    background-image:
                        -moz-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
                        -moz-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                    background-image:
                        -o-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
                        -o-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                    background-image:
                        -ms-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
                        -ms-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                    background-image:
                        -webkit-radial-gradient(0% 100%, ellipse cover, #96DEDA    10%,rgba(255,255,227,0) 40%),
                        -webkit-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                <?php elseif ($this->options->GradientType == '1'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                <?php elseif ($this->options->GradientType == '2'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                <?php elseif ($this->options->GradientType =='3'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                    ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                    ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                    ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                        ;
                <?php elseif ($this->options->GradientType =='4'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                <?php elseif ($this->options->GradientType =='5'): ?>
                    background-image: #DAD299; /* fallback for old browsers */
                    background-image: -webkit-linear-gradient(to left, #DAD299 , #B0DAB9); /* Chrome 10-25, Safari 5.1-6 */
                    background-image: linear-gradient(to left, #DAD299 , #B0DAB9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                <?php elseif ($this->options->GradientType =='6'): ?>
                    background-image: linear-gradient(-20deg, #d0b782 20%, #a0cecf 80%);
                <?php elseif ($this->options->GradientType =='7'): ?>
                    background: #F1F2B5; /* fallback for old browsers */
                    background: -webkit-linear-gradient(to left, #F1F2B5 , #135058); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to left, #F1F2B5 , #135058); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ *
                <?php elseif ($this->options->GradientType =='8'): ?>
                    background: #02AAB0; /* fallback for old browsers */
                    background: -webkit-linear-gradient(to left, #02AAB0 , #00CDAC); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to left, #02AAB0 , #00CDAC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                <?php elseif ($this->options->GradientType =='9'): ?>
                    background: #C9FFBF; /* fallback for old browsers */
                    background: -webkit-linear-gradient(to left, #C9FFBF , #FFAFBD); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to left, #C9FFBF , #FFAFBD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                <?php endif; ?>
            }
            </style>
        <?php elseif ($this->options->BGtype == '1'): ?>
            <style>
                body{
                    <?php if (!empty($this->options->bgcolor)): ?>
                        background-image: url(<?php $this->options->bgcolor() ?>);
                    <?php else: ?>
                        <?php if (!empty($this->options->CDNURL)): ?>
                            background-image: url(<?php $this->options->CDNURL() ?>/MaterialCDN/img/bg.png);
                        <?php else: ?>
                            background-image: url(<?php $this->options->themeUrl('img/bg.png'); ?>);
                        <?php endif; ?>
                    <?php endif; ?>
                }
            </style>
        <?php endif; ?>



        <!-- Fade Effect -->
        <?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>
            <style>
                .fade {
                  transition: all <?php $this->options->loadingbuffer(); ?>ms linear;
                  -webkit-transform: translate3d(0,0,0);
                  -moz-transform: translate3d(0,0,0);
                  -ms-transform: translate3d(0,0,0);
                  -o-transform: translate3d(0,0,0);
                  transform: translate3d(0,0,0);
                  opacity: 1;
                }

                .fade.out {
                  opacity: 0;
                }
            </style>
        <?php endif; ?>

    </head>

    <body id="scheme-Paradox" class="lazy">
