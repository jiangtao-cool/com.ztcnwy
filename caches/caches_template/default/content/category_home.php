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
	.data-list li {
		background: #DCDCDC;
		display: inline-block;
		padding: 0;
		
		width: 200px;
	}
	
	.data-list li>img {
		width: 100%;
		height: 200px;
	}
	
	.data-list li>div {
		padding: 10px;
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
					
						<?php $n=1;if(is_array(subcat($id))) foreach(subcat($id) AS $v) { ?> 
							<h2 class="title mt10"><?php echo $v['catname'];?></h2>
						
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8636a70f9711280bfde315f5e325c9a8&action=lists&catid=%24v%5Bcatid%5D&order=id+DESC&num=4&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','moreinfo'=>'1','limit'=>'4',));}?>
								<ul class="mt20 data-list">
									 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									 <li> 
									 	<img src="<?php echo $r['thumb'];?>"/>
									 	<br>
									 	<div><?php echo $r['description'];?></div>
									 </li>
									 <?php $n++;}unset($n); ?>
								 </ul>
							 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
						
						<?php $n++;}unset($n); ?>
		   					
					
					
				</td>
			</tr>
			
			
		</table>
		

	</div>
</div>

<?php include template("content","footer"); ?>
</body>

</html>