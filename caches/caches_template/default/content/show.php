<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<link rel="stylesheet" href="/muban/style/show.css" />
<div class="base" >

<div class="main">

<h1 class="title"><?php echo $title;?></h1>      
<hr>
<h6 class="inputtime">发布时间: <?php echo date('Y-m-d',$updatetime);?>}</h6>

<div class="content">
<?php echo $content;?>
</div>


</div>
</div>


<?php include template("content","footer"); ?>




 </body>
</html>