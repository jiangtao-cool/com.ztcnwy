<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


<div class="base mt10" id="here">

<div class="inside">

<h3><?php echo $title;?></h3>      
<p>


<?php echo $content;?>

</p>
<p class="page">上一页：<span id="k_nextpage"><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;下一页：<span id="k_lastpage"><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></span></p>
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
 </script>
 </body>
</html>