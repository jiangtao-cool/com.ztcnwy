<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>

<?php include template("content","header"); ?>

 <link rel="stylesheet" href="statics/skippr/skippr.css">
 <script src="statics/skippr/skippr.min.js"></script>
 <script type="text/javascript"> 
 	$(function(){
 		 $("#theTarget").skippr({
 		 	transition: 'slide',
            speed: 1000,
            easing: 'easeOutQuart',
            navType: 'block',
            childrenElementType: 'div',
            arrows: false,
            autoPlay: true,
            autoPlayDuration: 5000,
            keyboardOnAlways: true,
            hidePrevious: true
 		 });
 	});
 </script>
 <style>
 	#picture-container{
 		height: 300px;
 		width: 80%;
 		margin: 0 auto;
 	}
 </style>
 
 <div id="picture-container" >
    <div id="theTarget">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9df1a606f0930b028bd747ca67e15595&action=lists&catid=6&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'listorder DESC','limit'=>'10',));}?>
   		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    		<div style="background-image: url(<?php echo $r['picture'];?>)"></div>
		<?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>    
</div>

   	
	

			
			



<div class="base channel-container">


<table>
	<tr>
		<td>
			<div class="channel">
				<h2>
					<span class="title">
						<span class="title-1">PROJECT</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="title-2">服务业态</span>
					</span>
					<span class="border"></span>
				</h2>
				<div class="body">
					<div class="p">
						<h3>
							<span>项目全景</span>
							<span class="more">more&raquo;</span>
						</h3>
						<div class="content img">
							<img src="statics/images/ztct/1-1-1.png" />
						</div>
					</div>
					
					<div class="p">
						<div class="title-img first">
							<h3>
								<span>住宅型物业</span>
							</h3>
							<img src="statics/images/ztct/1-2-1.png">
						</div>
						<div class="title-img">
							<h3>
								<span>行政办公</span>
							</h3>
							<img src="statics/images/ztct/1-2-2.png">
						</div>
						<div class="title-img">
							<h3>
								<span>公众型物业</span>
							</h3>
							<img src="statics/images/ztct/1-2-3.png">
						</div>
					</div>
					
				</div>
			</div>
		</td>
		<td>
			<div class="channel">
				<h2>
					<span class="title">
						<span class="title-1">PROJECT</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="title-2">物业经营管理</span>
					</span>
					<span class="border"></span>
				</h2>
				<div class="body">
					<div class="p">
						<h3>
							<span>立馨不动产</span>
							<span class="more">more&raquo;</span>
						</h3>
						<div class="content img">
							<img src="statics/images/ztct/1-1-1.png" />
						</div>
					</div>
					
					<div class="p">
						<div class="title-img first">
							<h3>
								<span>智慧社区</span>
							</h3>
							<img src="statics/images/ztct/1-2-1.png">
						</div>
						<div class="title-img">
							<h3>
								<span>广告位招租</span>
							</h3>
							<img src="statics/images/ztct/1-2-2.png">
						</div>
						<div class="title-img">
							<h3>
								<span>商业活动</span>
							</h3>
							<img src="statics/images/ztct/1-2-3.png">
						</div>
					</div>
					
				</div>
			</div>
		</td>
		<td>
			<div class="channel">
				<h2>
					<span class="title">
						<span class="title-1">BRANDS</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="title-2">企业概况</span>
					</span>
					<span class="border"></span>
				</h2>
				<div class="body">
					<div class="p">
						<h3>
							<span>品牌介绍</span>
							<span class="more">more&raquo;</span>
						</h3>
						<div class="content img">
							<img src="statics/images/ztct/1-1-1.png" />
						</div>
					</div>
					
					<div class="p">
						<div class="title-img first">
							<h3>
								<span>组织架构</span>
							</h3>
							<img src="statics/images/ztct/1-2-1.png">
						</div>
						<div class="title-img">
							<h3>
								<span>主营业务</span>
							</h3>
							<img src="statics/images/ztct/1-2-2.png">
						</div>
						<div class="title-img">
							<h3>
								<span>品牌优势</span>
							</h3>
							<img src="statics/images/ztct/1-2-3.png">
						</div>
					</div>
					
				</div>
			</div>
		</td>
	</tr>
</table>

<div class="clear"></div>
<hr class="channel-hr"/>

<table>
	<tr>
		<td>
			<div class="channel">
				<h2>
					<span class="title">
						<span class="title-1">NEWS</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="title-2">物业资讯</span>
					</span>
					<span class="border"></span>
				</h2>
				<div class="body">
					<div class="p">
						<h3>
							<span>中天新闻</span>
							<span class="more">more&raquo;</span>
						</h3>
						<div class="content img-list">
							<img src="statics/images/ztct/4-1-1.png" />
							<img src="statics/images/ztct/4-1-2.png" />
							<img src="statics/images/ztct/4-1-3.png" />
						</div>
					</div>
					
					<div class="p">
						<h3>
							<span>公告通函</span>
						</h3>
						<ul class="content text-border" style="height: 86px;">
			                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=47d362aaacde3c4b70338da97af2003a&action=lists&catid=6&num=7&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'7',));}?>
				                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
								<li><span><?php echo date('Y-m-d',$v[updatetime]);?></span><a href="<?php echo $v['url'];?>" target="_blank" ><?php echo str_cut($v['title'],30);?></a></li>
				                <?php $n++;}unset($n); ?>
			                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
					
				</div>
			</div>
		</td>
		<td>
			<div class="channel">
				<h2>
					<span class="title">
						<span class="title-1">TALENT PLAN</span>&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="title-2">人才计划</span>
					</span>
					<span class="border"></span>
				</h2>
				<div class="body">
					<div class="p">
						<h3>
							<span>人才理念</span>
						</h3>
						<div class="content img-list">
							<img src="statics/images/ztct/2-2-1.png" style="width: 100%;"/>
						</div>
					</div>
					
					<div class="p">
						<h3>
							<span>加入我们</span>
						</h3>
						<div class="content">
							<img src="statics/images/ztct/2-2-2.png" height="90px" />
							<img src="statics/images/ztct/2-2-3.png" height="90px" style="float: right;"/>
						</div>
					</div>
					
				</div>
			</div>
		</td>
		<td>
			<div class="channel">
				<h3>
							视频短片
							<span class="more">more&raquo;</span>
						</h3>
				<div class="body">
					<div class="p">
						<div class="video">
							<img src="statics/images/ztct/2-3-1.png" style="margin: 4px;"/>
						</div>
					</div>
					
						<ul class="content text-border" style="height: 69px;">
			                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=47d362aaacde3c4b70338da97af2003a&action=lists&catid=6&num=7&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'7',));}?>
				                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
								<li><span><?php echo date('Y-m-d',$v[updatetime]);?></span><a href="<?php echo $v['url'];?>" target="_blank" ><?php echo str_cut($v['title'],30);?></a></li>
				                <?php $n++;}unset($n); ?>
			                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					
				</div>
			</div>
		</td>
	</tr>
</table>








</div>
<div class="clear"></div>

</div>



<?php include template("content","footer"); ?>



</body>
</html>
