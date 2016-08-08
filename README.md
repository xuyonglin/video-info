# video-info
get video info from video sites

1. add "xuyonglin/video-info": "dev-master" in your composer.json

Then you kan use it!

use sites\getvideo;

$url = 'http://v.youku.com/v_show/id_XMTYzOTM2MDEyOA==.html?from=y1.3-idx-beta-1519-23042.230771.4-1';
$m = new getvideo();
$re = $m->processPage($url);
var_dump($re);


array (size=8)
  'video_id' => string 'XMTYzOTM2MDEyOA==' (length=17)
  'title' => string '致青春 01' (length=12)
  'length' => string '2736.19' (length=7)
  'desc' => string '“玉面小飞龙”郑微终于如愿考上了青梅竹马林静所在城市的大学。婺源香樟树下，郑微告诉林静这里是她母亲和初恋私定终身的地方，而当郑微返回拿表白定情信物时，香樟树下林父与郑母俩人亲密相处的场景落入了林静眼中。开学后林静未能如约来车站接郑微，师兄张开和许开阳误将她认成校花阮莞。陈孝正被室友恶整，在浴池洗澡时与郑微尴尬相遇，而许开阳为了确认情况闯入��'... (length=552)
  'player' => string 'http://player.youku.com/player.php/sid/XMTYzOTM2MDEyOA==/partnerid/b10ab8588528b1b1/v.swf' (length=89)
  'tags' => string '致青春' (length=9)
  'thumbnail' => string 'http://r3.ykimg.com/054204085788540A6A0A3F0459F14763' (length=52)
  'category' => string '电视剧' (length=9)
