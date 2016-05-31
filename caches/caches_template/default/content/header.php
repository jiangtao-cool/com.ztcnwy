<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="/muban/style/css.css" rel="stylesheet" type="text/css" />
<script src="/muban/Scripts/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		$('#weixin').click(function(){
			$(".weixin-code").fadeIn();
		});
		$('.weixin-code').click(function(){
			$(".weixin-code").fadeOut();
		});
	})
</script>
</head>
<body>
<!--[if IE 6]>
<script type="text/javascript" src="/muban/Scripts/TheFuckingIE6_PNG.js"></script>
<script type="text/javascript">
 DD_belatedPNG.fix('.customer');
</script>
<![endif]-->




	 
	 
	 
<div class="base top">
<p>

<img src="statics/images/ztct/phone.png" />
<a href='#'>0851-86720668</a>
<img src="statics/images/ztct/weixin.png" />
<a id="weixin" href="#">关注我们</a>
<img class="weixin-code" src="statics/images/ztct/weixin-code.png" />
</p>
</div>
<div class="nav">
	<div class="logo">
		<img src="statics/images/ztct/logo.png" />
	</div>
	<div class="shadow">
	</div>
<ul>


    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8248b6e14f55ae7ab7445fed168915d&action=category&catid=0&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
      		
			<li><a href="/">首页</a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li  ><a <?php if(($_GET['catid'] == $r[catid])) { ?> class="color-main" <?php } ?> href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
			<?php $n++;}unset($n); ?>

        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</ul>
</div>
<div class="clear"></div>

