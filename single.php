<?php get_header(); ?>
<div id="gongaobox">
    <div id="gongao">
        当前位置：
        <a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a>
        >
        <?php $categories = get_the_category(); 
         //echo(get_category_parents($categories[0]->term_id, TRUE, ' > '));
        echo is_wp_error($cat_parents=get_category_parents($categories[0]->term_id, TRUE, ' &gt; '))?"":$cat_parents;  
        ?>
     正文</div>
</div>

<div id="divcom">
<div class="banner_top">
    <?php include('includes/subtopbanner.php') ?>
</div>
<div class="main">

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/banner.js"></script>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="divleft">
        <div id="single_list">
            <h2>
                <?php the_title(); ?></h2>
            <div class="hr"></div>
            <p class="single-info">
                <?php the_time('Y年m月d日') ?>
                |　作者:
                <?php the_author (); ?>
                |　分类:
                <?php the_category(', ') ?>
                |
                <?php if(function_exists('the_views')) { print '被浏览 '; the_views();  } ?>
                <?php edit_post_link('编辑', '　|　'); ?></p>
            <?php if(get_option('lovnvns_single_ad')!="")
                echo '<div id="lovnvns_ad">'.get_option('lovnvns_single_ad').'</div>
        ';
            ?>
        <div class="single_content">
            <?php the_content(); ?></div>
    </div>
</div>
<?php wp_link_pages(); ?>
<div id="divleft">
<div id="single_list">
<div class="single_listl">
    <?php  if (get_next_post()) {next_post_link('%link'); } else { echo "已经最新的文章！"; }; ?></div>
<div class="single_listr">
    <?php  if (get_previous_post()) {previous_post_link('%link'); } else { echo "后面已经没有文章了"; }; ?></div>
</div>
</div>
<div id="divleft">
<div id="single_list">
<!-- Baidu Button BEGIN -->
<div class="bdsharebuttonbox">
    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
    <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
    <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
    <a href="#" class="bds_taobao" data-cmd="taobao" title="分享到我的淘宝"></a>
    <a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a>
    <a href="#" class="bds_tsohu" data-cmd="tsohu" title="分享到搜狐微博"></a>
    <a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a>
    <a href="#" class="bds_mail" data-cmd="mail" title="分享到邮件分享"></a>
    <a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
    <a href="#" class="bds_more" data-cmd="more"></a>
</div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["mshare","qzone","sqq","weixin","tsina","renren","bdhome","bdysc","taobao","tqq","tqf","mail","tsohu","copy","print"],"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!-- Baidu Button END -->
</div>
</div>
<div id="divleftl">
<div id="textlist_s">
<h2>猜你也会喜欢</h2>
<div class="hr"></div>
<ul>
    <?php include("includes/Get_Related_Post.php"); ?></ul>
</div>
</div>
<div id="divleftr">
<div id="textlist_s">
<h2>类似新闻</h2>
<div class="hr"></div>
<ul>
    <?php Get_Random_Post(); ?></ul>
</div>
</div>
<?php comments_template('', true); ?>
<?php endwhile; ?>
<?php endif; ?></div>
<?php get_sidebar(); ?></div>
<div class="clear"></div>
<?php get_footer(); ?>