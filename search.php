<?php get_header(); ?>
<div id="gongaobox">
	<div id="gongao">
		当前位置：
		<a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a>
		> “
		<?php echo $s; ?>”的搜索结果</div>

</div>
<div id="divcom">
<?php include('includes/subtopbanner.php') ?>
	<div class="main">
	 <div class="serch2">
	         <form action="<?php bloginfo('url'); ?>" method="get">
	          <input class="textbox" type="text" value="<?php echo $_GET['s'] ?>" id="keyword" name="s" />
	          <input class="btn" type="submit" value="搜索"/>
	          </form>
	</div>
	<div id="search">
		<?php $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->
		post_count; _e(''); _e('共找到含有"'); echo $key; _e('"的文章'); _e(''); echo $count . ' '; _e('篇'); wp_reset_query(); ?>
	</div>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<div id="divleft">
		<div id="post_list">
			<span>
				<?php comments_popup_link ('0°','+1°','+%°'); ?></span>
			<h2>
				<a href="<?php the_permalink() ?>
					" rel="bookmark" title="
					<?php the_title_attribute(); ?>
					">
					<?php the_title(); ?></a>
			</h2>
			<div class="hr"></div>
			<p>
				<?php the_time('Y年m月d日') ?>
				| 作者:
				<?php the_author (); ?>
				|
				<?php if(function_exists('the_views')) { print '被围观 '; the_views();  } ?>
				<?php edit_post_link('编辑', ' | '); ?></p>
			<div id="post_listl">
				<?php include('includes/thumbnail.php'); ?></div>
			<div id="post_listr">
				<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 420,"......"); ?></div>
			<div id="post_list_tags">
				关键词：
				<?php the_tags('', ', ', ''); ?></div>
			<div id="post_list_more">
				<a href="<?php the_permalink() ?>
					" title="详细阅读
					<?php the_title(); ?>" rel="bookmark" class="title">详细阅读</a>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php pagination($query_string); ?>
	<?php else: ?>
	<div id="search">抱歉!无法搜索到与之相匹配的信息。</div>
	<?php endif; ?></div>
<?php get_sidebar(); ?></div>
<div class="clear"></div>
<?php get_footer(); ?>