<div id="footer">
	<div id="bot_main">
		<div id="bot_mainf">
			
			<p><?php if(get_option('lovnvns_statistics')!="") echo get_option('lovnvns_statistics'); ?></p>
			<p>
				Copyright &copy;
				<a href="<?php bloginfo('siteurl'); ?>
					/"> <strong><?php bloginfo('name');?></strong>
				</a>
				. All Rights Reserved
				<?php echo get_option('lovnvns_Designed'); ?>
				<?php echo get_option('lovnvns_stat'); ?>
		    </p>
		</div>
		<!--脚步logo-->
		<!-- <div id="bot_mainr">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo1.gif" /></div> -->
			
	</div>
</div>
<div class="side" id="callme">
	<ul>
		<li>
			<a class="nx-pop-weixin" href="javascript:;">
				<img class="sidebox" src="<?php bloginfo('template_url'); ?>/images/side/side_icon02.png" alt="关注微信">
				<span class="sidespan">
				    <img width="150" height="140" src="<?php if(get_option('lovnvns_sitemap')!="") echo get_option('lovnvns_sitemap'); ?>">
				</span>
			</a>
		</li>
		<li>
			<a href="tencent://message/?uin=<?php if(get_option('lovnvns_rss')!="") echo get_option('lovnvns_rss'); ?>&Site=www.baidu.com&Menu=yes">
				 <img class="sidebox" src="<?php bloginfo('template_url'); ?>/images/side/side_icon04.png" alt="QQ客服">
			</a>
		</li>
		<li>
			<a href="<?php if(get_option('lovnvns_weibo')!="") echo get_option('lovnvns_weibo'); ?>" target="_blank">
			   <img class="sidebox" src="<?php bloginfo('template_url'); ?>/images/side/side_icon03.png" alt="新浪微博">
			</a>
		</li>
		<li>
			<a class="nx-pop-weixin" href="javascript:;">
				<img class="sidebox" src="<?php bloginfo('template_url'); ?>/images/side/side_icon01.png" alt="联系电话">
				<span class="sidespan">
					<b id="phone">联系电话<h2>0871-65225676</h2></b>
				</span>
			</a>
		</li>
		<li style="border:none;"><a href="javascript:goTop();" class="sidetop"><img src="<?php bloginfo('template_url'); ?>/images/side/side_icon05.png"></a></li>
	</ul>
</div>
<!-- <div class="weixin ui modal"> <i class="close icon"></i>
	<div class="" >
		<img class="weixin" width="230" height="230" src="<?php if(get_option('lovnvns_sitemap')!="") echo get_option('lovnvns_sitemap'); ?>">
	</div>
</div> -->


</body>

<script type="text/javascript">
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}

var isIE=!!window.ActiveXObject;
    var isIE6=isIE&&!window.XMLHttpRequest;
    var isIE8=isIE&&!!document.documentMode;
    var isIE7=isIE&&!isIE6&&!isIE8;
    if (isIE){
        if (isIE6){
          document.getElementById('callme').style.display = "none";

        }
    }
</script>
</html>