<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <?php include('includes/seo.php'); ?>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/highlight.css" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
    <?php if ( is_singular() ){ ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
    <?php } ?>
</head>
<body>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script type="text/jscript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.SuperSlide.source.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lovnvns.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lazyload.js"></script>
    <SCRIPT type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mobanwang.js"></SCRIPT>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scrolltopcontrol.js"></script>

     <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nicescroll.min.js"></script>
    

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $("img").not(".notlazy").lazyload({
            placeholder : "<?php bloginfo('template_url'); ?>/images/grey.gif",
            effect      : "fadeIn",
            threshold : 150                      
        });
        $("html").niceScroll({cursorcolor:"#DDDDDD"});
        //首页固定浮动框
        $(".side ul li").hover(function(){
            $(this).find(".sidebox").stop().animate({"width":"42px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#000"});    
            $(this).find(".sidespan").show();
        }, function(){
            $(this).find(".sidebox").stop().animate({"width":"42px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"});  
            $(this).find(".sidespan").hide();
        });
       
        /*$(".nx-pop-weixin").click(function() {
            $('.weixin.ui.modal').modal('show');
        });*/
        jQuery(".picScroll-left").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,scroll:1,vis:5});
    });
    


</script>
    <?php
      global $user_ID, $user_identity, $user_email, $user_login;
      get_currentuserinfo();?>
    <?php if ($user_ID) {?>
    <div id="nav">
        <div class="wrap">
            <div id="navright" class="m-r-8">
                <ul>
                    
                        <div id="navrightr" class="m-r-8">
                            <div class="navrightlogin">
                                <ul>
                                    <li>
                                        <a href="<?php bloginfo('url') ?>/wp-admin/" target="_blank">控制面板</a>
                                    </li>
                                    <li>
                                        <div class="topline"></div>
                                    </li>
                                    <li>
                                        <a href="<?php bloginfo('url') ?>/wp-admin/post-new.php" target="_blank">撰写文章</a>
                                    </li>
                                    <li>
                                        <div class="topline"></div>
                                    </li>
                                    <li>
                                        <a href="<?php bloginfo('url') ?>/wp-admin/edit-comments.php" target="_blank">评论管理</a>
                                    </li>
                                    <li>
                                        <div class="topline"></div>
                                    </li>
                                    <li>
                                        <a href="<?php bloginfo('url') ?>/wp-login.php?action=logout&amp;redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>">注销</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                       
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
    <div id="header">
        <ul id="header-container">
            <li>
                <a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('siteurl'); ?>">
                <img class="web-logo" src="<?php bloginfo('template_directory'); ?>/images/logo_03.png" title="<?php bloginfo('name'); ?>" />
                </a>
            </li>
            
        </ul>
    </div>
    

<div id="content">
    <div class="topnav">
        <?php wp_nav_menu( array( 
        'container' =>'',
        'items_wrap' => '<ul id="menu" class="menu">%3$s</ul>',
        'fallback_cb'=> '' ) ); 
        ?>
    </div>
</div>