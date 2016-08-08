# video-info
get video info from video sites

1. add "xuyonglin/video-info": "dev-master" in your composer.json

Then you kan use it!

$url = 'http://v.youku.com/v_show/id_XMTYzOTM2MDEyOA==.html?from=y1.3-idx-beta-1519-23042.230771.4-1';
$m = new getvideo();
$re = $m->processPage($url);
var_dump($re);exit;
