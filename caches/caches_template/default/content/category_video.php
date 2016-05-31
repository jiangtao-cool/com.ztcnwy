<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> <?php include template("content","header"); ?>

<?php $id = $_GET[id];?>
<?php $url = $_SERVER['REQUEST_URI'];?>
<?php $url = preg_replace('/(&|\?)id=[^&]+/', '', $url)?>



<link rel="stylesheet" href="muban/style/list.css" />
<style>
	.img-content {
		
	}
	.img-content>img{
		width: 15%;
	}
	.img-content>div{
		display: inline-block;
		width: 77%;
		margin-left: 4%;
		vertical-align: top;
	}
	
</style>
<!--left menu-->
<div class="base">
	<div class="content">
		<table >
			<tr>
				<!-- menu -->
				<td width="15%" class="menu">
					<ul>
			   			<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?> 
			   				<?php if (!isset($id)) $id=$v[catid]?>
			   				<?php if ($id == $v[catid]) $current_cat = $v?>
			   			
			   				<li <?php if(($id==$v[catid])) { ?> class="active" <?php } ?>  >
			   					<h2><a href="<?php echo $url;?>&id=<?php echo $v['catid'];?>"><?php echo $v['catname'];?></a></h2>
			   				</li>
						<?php $n++;}unset($n); ?>
			   		</ul>
				</td>
				
				
				<td>
					<h1 class="title color-main border-bottom">
						<?php echo $current_cat['description'];?>
					</h1>
					
					<table>
						<tr>
							<?php $n=1;if(is_array(subcat($id))) foreach(subcat($id) AS $v) { ?> 
								<td><h2><a href="<?php echo $url;?>&id=<?php echo $v['catid'];?>"><?php echo $v['catname'];?></a></h2></td>
							<?php $n++;}unset($n); ?>
						</tr>
						
					</table>
		   					
					
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ce97bbadd157c53adf9574417b61365&action=lists&catid=%24id&order=id+DESC&num=4&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$id,'order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
					 <ul class="mt20">
						 <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
						 <li> 
						 	<h3><?php echo $val['title'];?> <em class="right"><?php echo date('Y-m-d',$val[inputtime]);?></em> </h3>
						 	<div class="img-content mt10">
						 		<img src="<?php echo $val['thumb'];?>" />
						 		<div class="text-border">
						 		 <?php echo $val['content'];?>
						 		</div>
						 	</div>
						 </li>
						 <?php $n++;}unset($n); ?>
					 </ul>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</td>
			</tr>
			
			
		</table>
		

	</div>
</div>

<?php include template("content","footer"); ?>
</body>

</html>