<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
 <link href="/statics/video-js/video-js.min.css" rel="stylesheet">
  <!-- If you'd like to support IE8 -->
  <script src="/statics/video-js/ie8/videojs-ie8.min.js"></script>
  
<link rel="stylesheet" href="/muban/style/show.css" />
<div class="base" >

<div class="main">

<h1 class="title"><?php echo $title;?></h1>      
<hr>
<h6 class="inputtime">发布时间: <?php echo $inputtime;?></h6>

<div class="content">
<?php echo $content;?>
</div>


</div>
</div>


<?php include template("content","footer"); ?>



<script src="/statics/video-js/video.min.js"></script>
 </body>
</html>