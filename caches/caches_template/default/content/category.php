<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> <?php include template("content","header"); ?>

<?php $id = $_GET[id];?>
<?php $url = $_SERVER['REQUEST_URI'];?>
<?php $url = preg_replace('/(&|\?)id=[^&]+/', '', $url)?>



<link rel="stylesheet" href="/muban/style/list.css" />
<link rel="stylesheet" href="/muban/style/category.css" />

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
					
						
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=00deb04f2db7d003ed0083f210afaab3&action=lists&catid=%24id&order=id+DESC&num=3&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$id,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$id,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
						<ul class="mt20 data-list" >
							 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							 <li > 
							 	<h3><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a> &nbsp;&nbsp;&nbsp;<span class="date"><?php echo date("Y-m-d", $r[inputtime]);?></span></h3>
							 	<table>
							 		<tr>
							 			<td class="data-img"><img src="<?php echo $r['picture'];?>"/></td>
							 			<td class="data-content2"><div class="text-border"><?php echo $r['description'];?></div></td>
							 		</tr>
							 	</table>
							 </li>
							 <?php $n++;}unset($n); ?>
						 </ul>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
		   					
					<div id="pages" class="text-c"><?php echo $pages;?></div>
					
				</td>
			</tr>
			
			
		</table>
		

	</div>
</div>

<?php include template("content","footer"); ?>
</body>

</html>