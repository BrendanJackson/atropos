<?php
$assetfolder = "/themes/atropos/assets/";
$logo = "/assets/files/id/" . \config::site_logo;
$logo_alternate = "/assets/files/id/" . \config::site_logo_alternative;
$modules = \sa\application\app::get()->getModules();
$module_list = array_column($modules, 'module');
$search = in_array('search', $module_list);
$catalog = in_array('catalog', $module_list);
$member = in_array('member', $module_list);
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title><?=!empty($page_name) ? $page_name : \config::site_name ?></title>
    
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="<?=$assetfolder?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>css/superslides.css" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION SLIDER -->
    <link href="<?=$assetfolder?>plugins/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="<?=$assetfolder?>css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>css/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>css/layout-responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?=$assetfolder?>css/color_scheme/orange.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->
    <!--<link id="css_dark_skin" href="<?=$assetfolder?>css/layout-dark.css" rel="stylesheet" type="text/css" />--><!-- DARK SKIN -->

    <!-- styleswitcher - demo only -->
    <link href="<?=$assetfolder?>css/color_scheme/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
    <link href="<?=$assetfolder?>css/color_scheme/red.css" rel="alternate stylesheet" type="text/css" title="red" />
    <link href="<?=$assetfolder?>css/color_scheme/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
    <link href="<?=$assetfolder?>css/color_scheme/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
    <link href="<?=$assetfolder?>css/color_scheme/darkgreen.css" rel="alternate stylesheet" type="text/css" title="darkgreen" />
    <link href="<?=$assetfolder?>css/color_scheme/green.css" rel="alternate stylesheet" type="text/css" title="green" />
    <link href="<?=$assetfolder?>css/color_scheme/darkblue.css" rel="alternate stylesheet" type="text/css" title="darkblue" />
    <link href="<?=$assetfolder?>css/color_scheme/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
    <link href="<?=$assetfolder?>css/color_scheme/brown.css" rel="alternate stylesheet" type="text/css" title="brown" />
    <link href="<?=$assetfolder?>css/color_scheme/lightgrey.css" rel="alternate stylesheet" type="text/css" title="lightgrey" />
    <!-- /styleswitcher - demo only -->

    <!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
    <link href="<?=$assetfolder?>plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css" />

    <!-- Morenizr -->
    <script type="text/javascript" src="<?=$assetfolder?>plugins/modernizr.min.js"></script>
</head>
<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="<?=$assetfolder?>images/boxed_background/1.jpg"  -->

<!-- Top Bar -->
<header id="topHead">
    <div class="container">

        <!-- PHONE/EMAIL -->
				<span class="quick-contact pull-left">

                    <?php
                    if (defined('\config::site_phone')){
                        if(!empty(\config::site_phone)) { ?>
                             <a href="mailto:<?= \config::site_phone?>">
                                <i class="fa fa-phone"></i> <?=\config::site_phone ?> &bull;
                             </a>
                        <?php }
                    }
                    ?>

                    <?php
                    if (defined('\config::site_email')){
                        if(!empty(\config::site_email)) { ?>
                            <a href="hidden-xs<?= \config::site_email ?>">
                                 <i class="fa fa-envelope"></i> <?=\config::site_email?>
                            </a>
                        <?php }
                    }
                    ?>

				</span>
        <!-- /PHONE/EMAIL -->

        <!-- LANGUAGE -->
        <div class="btn-group pull-right hidden-xs">


        </div>
        <!-- /LANGUAGE -->


        <!-- SIGN IN -->
        <?php
        if(!empty($member)) {
            echo
            "<div class='pull-right nav signin-dd'>
            <a id='quick_sign_in' href='member/login' data-toggle='dropdown'><i class='fa fa-users'></i><span class='hidden-xs'>Sign In</span></a>
            <div class='dropdown-menu' role='menu' aria-labelledby='quick_sign_in'>

                <h4>Sign In</h4>
                <form action='/member/login' method='post' role='form' >

                    <div class='form-group'><!-- email -->
                        <input required type='email' class='form-control' placeholder='Username or email'>
                    </div>

                    <div class='input-group'>

                        <!-- password -->
                        <input required type='password' class='form-control' placeholder='Password'>

                        <!-- submit button -->
								<span class='input-group-btn'>
									<button class='btn btn-primary'>Sign In</button>
								</span>

                    </div>

                    <div class='checkbox'><!-- remember -->
                        <label>
                            <input type='checkbox'> Remember me &bull; <a href='member/login'>Forgot password?</a>
                        </label>
                    </div>

                </form>

                <hr />

                <!--<a href='#' class='btn-facebook fullwidth radius3'><i class='fa fa-facebook'></i> Connect With Facebook</a>-->
                <!--<a href='#' class='btn-twitter fullwidth radius3'><i class='fa fa-twitter'></i> Connect With Twitter</a>-->
                <!--<a href='#' class='btn-google-plus fullwidth radius3'><i class='fa fa-google-plus'></i> Connect With Google</a>-->

                <p class='bottom-create-account'>
                    <a href='member/login'>Manual create account</a>
                </p>
            </div>
        </div>";
        }?>
        <!-- /SIGN IN -->

        <!-- CART MOBILE BUTTON -->
        <?php
        if(!empty($catalog)){
        echo
        "<a class='pull-right' id='btn-mobile-quick-cart' href='/catalog/cart'><i class='fa fa-shopping-cart'></i></a>";
        }?>
        <!-- CART MOBILE BUTTON -->

        <!-- LINKS -->
        <div class='pull-right nav hidden-xs'>

        </div>
        <!-- /LINKS -->

    </div>
</header>
<!-- /Top Bar -->

<!-- TOP NAV -->
<header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
    <div class="container">

        <!-- Mobile Menu Button -->
        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Logo text or image -->
        <a class="logo" href="/">
            <img class="img-responsive col-xs-4"  alt="LOGO" src="<?=$logo?>" >
        </a>

        <!-- Top Nav -->
        <div class="navbar-collapse nav-main-collapse collapse pull-right">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main scroll-menu" id="topMain">   <!-- <i class="fa fa-angle-down"></i> -->

                    <?php
                    $navigation = \sa\application\modRequest::request('site.navigation', $data = array('level' => 2));
                    foreach ($navigation['navigation']['page_editor'] as $menuItem){


                        /* <span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span> */
                        ?>
                        <li class="dropdown active<?= ($menuItem['has_sub_pages'] == 1) ? 'has-children' : '' ?>">
                            <a  class="dropdown-toggle" href="<?=($menuItem['route'] != '/') ? '/'.$menuItem['route']:'/'?>">
                                <span><?= $menuItem['title'] ?></span>
                                <?= ($menuItem['has_sub_pages'] == 1) ? '<span class="sf-sub-indicator"><i class="fa fa-angle-down "></i></span>' : '' ?>
                            </a>

                            <? if($menuItem['has_sub_pages'] == 1){
                                /* echo ul foreach li ul */
                                echo "<ul class='dropdown-menu'>" ;
                                foreach ($menuItem['sub_pages'] as $pages) {
                                    echo "<li><a href='" . $pages['title'] . " '> ". $pages['title'] . " </a></li>" ;

                                }



                                echo "</ul>" ;
                            } ?>

                        </li>
                        <?php

                    } ?>

                    <!-- GLOBAL SEARCH -->
                    <?php
                    if(!empty($search)){
                    echo
                    "<li class='search'>
                        <!-- search form -->
                        <form method='get' action='/search' class='input-group pull-right'>
                            <input type='text' class='form-control' name='q' id='k' value='' placeholder='Search'>
									<span class='input-group-btn'>
										<button class='btn btn-primary notransition'><i class='fa fa-search'></i></button>
									</span>
                        </form>
                        <!-- /search form -->
                    </li>";
                    }?>
                    <!-- /GLOBAL SEARCH -->

                    <!-- QUICK SHOP CART -->
                    <?php
                    if(!empty($catalog)) {
                        $minicart_data = \sa\application\modRequest::request('site.minicart', array('disable_minicart' => $disable_minicart, 'html' => ''), '');
                        echo "<li class='cart ' >"  . $minicart_data['html'] . "</li>";
                    }?>
                    <!-- /QUICK SHOP CART -->
                </ul>
            </nav>
        </div>
        <!-- /Top Nav -->

    </div>
</header>

<span id="header_shadow"></span>
<!-- /TOP NAV -->



<!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
<div id="switcher">
    <div class="content-switcher" >
        <h4>STYLE OPTIONS</h4>

        <p>10 Predefined Color Schemes</p>
        <ul>
            <li><a href="#" onclick="setActiveStyleSheet('orange'); return false;" title="orange" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/1.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('red'); return false;" title="red" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/2.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('pink'); return false;" title="pink" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/3.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('yellow'); return false;" title="yellow" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/4.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('darkgreen'); return false;" title="darkgreen" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/5.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('green'); return false;" title="green" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/6.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('darkblue'); return false;" title="darkblue" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/7.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('blue'); return false;" title="blue" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/8.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('brown'); return false;" title="brown" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/9.png" alt="" width="30" height="30" /></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('lightgrey'); return false;" title="lightgrey" class="color"><img src="<?=$assetfolder?>images/demo/color_schemes/10.png" alt="" width="30" height="30" /></a></li>
        </ul>

        <p>CHOOSE YOUR COLOR SKIN</p>
        <label><input class="dark_switch" type="radio" name="color_skin" id="is_light" value="light" checked="checked" /> Light</label>
        <label><input class="dark_switch" type="radio" name="color_skin" id="is_dark" value="dark" /> Dark</label>

        <hr />

        <p>CHOOSE YOUR LAYOUT STYLE</p>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>


        <p>Patterns for Boxed Version</p>
        <div>
            <button onclick="pattern_switch('none');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/none.jpg" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern2');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern2.png" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern3');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern3.png" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern4');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern4.png" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern5');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern5.png" width="27" height="27" alt="" /></button>
        </div>

        <div>
            <button onclick="pattern_switch('pattern6');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern6.png" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern7');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern7.png" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern8');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern8.png" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern9');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern9.png" width="27" height="27" alt="" /></button>
            <button onclick="pattern_switch('pattern10');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/patterns/pattern10.png" width="27" height="27" alt="" /></button>
        </div>

        <p>Images for Boxed Version</p>
        <button onclick="background_switch('none');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/boxed_background/none.jpg" width="27" height="27" alt="" /></button>
        <button onclick="background_switch('<?=$assetfolder?>images/boxed_background/1.jpg');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/boxed_background/1_thumb.jpg" width="27" height="27" alt="" /></button>
        <button onclick="background_switch('<?=$assetfolder?>images/boxed_background/2.jpg');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/boxed_background/2_thumb.jpg" width="27" height="27" alt="" /></button>
        <button onclick="background_switch('<?=$assetfolder?>images/boxed_background/3.jpg');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/boxed_background/3_thumb.jpg" width="27" height="27" alt="" /></button>
        <button onclick="background_switch('<?=$assetfolder?>images/boxed_background/4.jpg');" class="pointer switcher_thumb"><img src="<?=$assetfolder?>images/boxed_background/4_thumb.jpg" width="27" height="27" alt="" /></button>

        <hr />

        <div class="text-center">
            <button onclick="resetSwitcher();" class="btn btn-primary btn-xs">Reset Styles</button>
        </div>

        <div id="hideSwitcher">&times;</div>
    </div>
</div>

<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-angle-double-right"></i></div>
<!-- /STYLESWITCHER -->



<!-- WRAPPER -->
<div id="wrapper">
			
