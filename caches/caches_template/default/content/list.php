<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> <?php include template("content","header"); ?>

<?php $id = $_GET[id];?>
<?php $url = $_SERVER['REQUEST_URI'];?>
<?php $url = preg_replace('/(&|\?)id=[^&]+/', '', $url)?>
<?php if (isset($id)) $where="id=$id";?>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e5801d14b32e0c3536491a78f64d18de&action=lists&catid=%24catid&num=1&moreinfo=1&where=%24where&order=listorder\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','where'=>$where,'order'=>'listorder','limit'=>'1',));}?>
	<?php $model = array_shift($data)?> 
	<?php if (!isset($id))$id = $model[id]?>
	<?php $content= $model[content]?>
	<?php $English_title= $model[English_title]?>
	<?php $English_title_arr = explode(' ', $English_title)?>
	<?php $short_content= $model[short_content]?>
	<?php $picture= $model[picture]?>
	<?php $title = $model[title]?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>



<link rel="stylesheet" href="/muban/style/list.css" />
<!--left menu-->
<div class="base">
	<div class="content">
		<table >
			<tr>
				<!-- menu -->
				<td width="15%" class="menu">
					<ul >
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=87ee3d82845fb90305909e4efab1d5b7&action=lists&catid=%24catid&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'20',));}?> 
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li <?php if(($id==$r[id])) { ?> class="active" <?php } ?> >
								<h2><a href="<?php echo $url;?>&id=<?php echo $r['id'];?>"><?php echo $r['title'];?></a></h2>
							</li>
						<?php $n++;}unset($n); ?> 
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</td>
				
				<!-- content -->
				<td width="35%">
					<h1><span class="color-main-strong"><?php echo $English_title_arr['0'];?></span> <span class="color-main"><?php echo $English_title_arr['1'];?></span> </h1><br>
					
					<h1 class="title color-main"><?php echo $title;?></h1>
					
					<h2 class="color-main mt10"><?php echo $short_content;?></h2>
					
					<div class="border mt20 data-content">
						<?php echo $content;?>
					</div>
					
				</td>
				
				<td width="45%">
					<img src="<?php echo $picture;?>"  />
					
				</td>
			</tr>
			
			
		</table>
		

	</div>
</div>

<?php include template("content","footer"); ?>
</body>

</html>