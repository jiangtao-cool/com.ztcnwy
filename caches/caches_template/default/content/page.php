<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>
<script src="/muban/Scripts/swfobject_modified.js" type="text/javascript"></script>

<div class="base mt10" id="here">
<div class="insideL">
        <div class="subnav">
        <h2>快速导航</h2>
        <ul>
		
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8248b6e14f55ae7ab7445fed168915d&action=category&catid=0&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>

			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
			<?php $n++;}unset($n); ?>

        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
    
        </ul>
        </div>
        <div class="subC">
<?php echo show_ad(1, 11);?>
        </div>
</div>
<div class="insideR">
<h2><?php echo $title;?></h2>

<div id="onepage" style="text-align:left">

<?php echo $content;?>

</div>
</div>
</div>

<?php include template("content","footer"); ?>

<script type="text/javascript" src="/muban/Scripts/Xslider.js"></script>
<script src="/muban/Scripts/BannerChange.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$(".productshow").Xslider({
		unitdisplayed:1,
		numtoMove:1,
		loop:"cycle",
		autoscroll:2000 
	});
	
})
swfobject.registerObject("FLVPlayer");
</script>
 </body>
</html>