<?php
	if(!isset($preview)||!isset($video)) {
        $preview =  DOMAIN_SITE.'/static/libs/jwplayer/preview.png'; //视频缩略图
    }
	$width = isset($width) ? $width : 328;
	$height = isset($height) ? $height : 200;
?>
<!-- START OF THE PLAYER EMBEDDING TO COPY-PASTE -->
<object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="<?php echo $width;?>" height="<?php echo $height;?>">
	<param name="movie" value="<?php echo DOMAIN_SITE;?>/static/libs/jwplayer/player.swf" />
	<param name="allowfullscreen" value="true" />
	<param name="allowscriptaccess" value="always" />
	<param name="flashvars" value="file=<?php echo $video;?>&image=<?php echo $preview;?>" />
	<embed
		type="application/x-shockwave-flash"
		id="player2"
		name="player2"
		src="<?php echo DOMAIN_SITE;?>/static/libs/jwplayer/player.swf"
		width="<?php echo $width;?>"
		height="<?php echo $height;?>"
		allowscriptaccess="always"
		allowfullscreen="true"
		flashvars="file=<?php echo $video;?>&image=<?php echo $preview;?>"
	/>
</object>
<!-- END OF THE PLAYER EMBEDDING -->
