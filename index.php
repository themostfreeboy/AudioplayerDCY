<!DOCTYPE HTML>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="zh-CN" />
    <title>JXL为瑜宝宝制作的音乐播放器</title>
    <link rel="shortcut icon" href='./imgs/favicon.ico'>
    <script type="text/javascript" charset="UTF-8" src='./js/prefixfree.min.js'></script>
    <link rel="stylesheet" type="text/css" href='./css/base.css' media="all" />
    <link rel="stylesheet" type="text/css" href='./css/styles.css' media="all" >
</head>
<body>
<div class="page">
    <header id="header">
        <hgroup class="white blank">
            <h1>瑜宝宝专用音乐播放器</h1>
        </hgroup>
    </header>
    <section class="demo">
        <div id="myAudio" style="margin:0 auto;">
			<audio>
				<source title="为了节省流量.mp3" src="./songs/为了节省流量.mp3" />
					<?php
						$dir="./songs";
						if(is_dir($dir))
						{
							if($dh=opendir($dir))
							{
								while(($file=readdir($dh))!==false)
								{
									if(($file!=='.')&&($file!=='..')&&($file!=='为了节省流量.mp3'))
									{
										echo "<source title=\"$file\" src=\"./songs/$file\" />";
									}
								}
								closedir($dh);
							}
						}
					?>
			</audio>
		</div>
		<script type="text/javascript" src="./js/jquery.min.js"></script>
		<script type="text/javascript" src="./js/AudioPlayer.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#myAudio").initAudio();
			});
		</script>
    </section>
</div>
</body>
</html>