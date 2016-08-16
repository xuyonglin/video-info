Get video info from video sites, support youku yet
===============================================

Requirements
------------

At least php version 5.3 
extensions: 
openssl

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

add

```json
"xuyonglin/video-info": "dev-master"
```

to the require section of your composer.json.

How to use 
-------------
use videosites\getvideo;

$url = 'http://v.youku.com/v_show/id_XMTYzOTM2MDEyOA==.html?from=y1.3-idx-beta-1519-23042.230771.4-1';
$m = new getvideo();
$re = $m->processPage($url);

Results
-------------

```
{
    "video_id": "XMTYzOTM2MDEyOA==",
    "title": "致青春 01",
    "length": "2736.19",
    "desc": "“玉面小飞龙”郑微终于如愿考上了青梅竹马林静所在城市的大学。婺源香樟树下，郑微告诉林静这里是她母亲和初恋私定终身的地方，而当郑微返回拿表白定情信物时，香樟树下林父与郑母俩人亲密相处的场景落入了林静眼中。开学后林静未能如约来车站接郑微，师兄张开和许开阳误将她认成校花阮莞。陈孝正被室友恶整，在浴池洗澡时与郑微尴尬相遇，而许开阳为了确认情况闯入澡堂却意外夺走了郑微的初吻。",
    "player": "http://player.youku.com/player.php/sid/XMTYzOTM2MDEyOA==/partnerid/b10ab8588528b1b1/v.swf",
    "tags": "致青春",
    "thumbnail": "http://r1.ykimg.com/054204085788540A6A0A3F0459F14763",
    "category": "电视剧"
}
```



Configuration
-------------
nothing now