<?php
namespace videosites;

class getvideo{
    private $pathInfo = false;
    private $siteArr = [
        'youku' => 'v.youku.com', 
        ];
    private $youkuUrl = 'https://openapi.youku.com/v2/videos/show.json?client_id=b10ab8588528b1b1&video_id=';
    
    public function processPage($url){
        $urlInfo = parse_url($url);
        $site = array_search($urlInfo['host'], $this->siteArr);
        if(!$site){
            return [
                'error' => 1,
                'info' => '暂不支持此网站',
            ];
        }
        $re = $this->$site($url);
        return $re;
    }
    
    private function youku($url){
        $urlInfo = parse_url($url);
        $pathInfo = pathinfo($urlInfo['path']);
        $vid = trim($pathInfo['filename'], 'id_');
        $newUrl = $this->youkuUrl . $vid;
        $vinfo = json_decode($this->_postDataCurl($newUrl), true);
        if(isset($vinfo['error'])){
            return [
                'error' => 1,
                'info' => '没有视频信息',
            ];
        }
        $reArr = [
            'video_id' => $vinfo['id'],
            'title' => $vinfo['title'],
            'length' => $vinfo['duration'],
            'desc' => $vinfo['description'],
            'player' => $vinfo['player'],
            'tags' => $vinfo['tags'],
            'thumbnail' => $vinfo['thumbnail'],
            'category' => $vinfo['category'],
        ];
        return $reArr;
    }
    
    
    private function _postDataCurl($url, $data = array(), $timeout = 10){
        header("Content-type: text/html; charset=utf-8");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); //服务地址URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //发送的数据
        $rtn = curl_exec($ch); //获得返回值
        curl_close($ch);
        return $rtn;
    }
    
    
}
