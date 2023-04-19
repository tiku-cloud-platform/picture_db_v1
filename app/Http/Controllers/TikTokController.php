<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class TikTokController extends Controller
{
    public function content()
    {
        $url = "https://v.douyin.com/DFa2xWX/";
        $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => 'User-Agent: ' . $ua . "\r\n",
            ],
        ];
        $context = stream_context_create($options);
        // 获取原始链接
        $html = file_get_contents($url, false, $context);
        var_dump($html);
        if (preg_match('/playAddr: "(.*?)",/', $html, $match)) {
            // 提取视频ID和标题
            $play_addr = $match[1];
            if (preg_match('/desc: "(.*?)",/', $html, $match)) {
                $title = $match[1];
            } else {
                $title = 'video';
            }

            // 构造下载链接
            $download_url = str_replace('playwm', 'play', $play_addr);
            echo 'Download URL: ' . $download_url . PHP_EOL;

            // 下载视频
            $filename = $title . '.mp4';
            file_put_contents($filename, file_get_contents($download_url, false, $context));
            echo 'Video has been downloaded to ' . $filename . PHP_EOL;
        } else {
            echo 'Failed to parse video URL.' . PHP_EOL;
        }

    }

    public function parse()
    {
        // 通过视频分享内容，提取到视频播放地址
        $shareText = \request()->input('share_link');
        $regex = '@(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))@';
        preg_match($regex, $shareText, $match);
        var_dump("视频信息", $match);
        $url = $match[0];

        // 获取到视频id
        $url = $this->getCurl($url);
        preg_match('/video\/([0-9]+)\//i', $url, $matches);
        var_dump("视频id", $matches);

        // 获取到视频的video地址
        $url = 'https://www.douyin.com/video/' . $matches[1];
        var_dump("视频真实页面", $url);
        $htmlContent = $this->ajaxCurl($url);
        $pattern = '/<source\s+.*?src=[\'"](.*?)[\'"]/i';
        preg_match($pattern, $htmlContent, $matches);
        var_dump("视频播放页", $matches);
    }

    public function ajaxCurl($url)
    {
        // 设置请求参数和请求头
        $data = ['key' => 'value'];
        $headers = [
            'X-Requested-With: XMLHttpRequest',
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); //访问的url
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //完全静默
        curl_setopt($ch, CURLOPT_HEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //忽略https
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //忽略https
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge([self::getRandomUserAgent()])); //UA
        $output = curl_exec($ch); //获取内容
        curl_close($ch); //关闭
        return $output; //返回
    }

    /**
     * 发起请求
     */
    private function getCurl($url, $options = [], $foll = 0)
    {
        //初始化
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); //访问的url
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //完全静默
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //忽略https
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //忽略https
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge([self::getRandomUserAgent()], $options)); //UA
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $foll); //默认为$foll=0,大概意思就是对照模块网页访问的禁止301 302 跳转。
        $output = curl_exec($ch); //获取内容
        curl_close($ch); //关闭
        return $output; //返回
    }

    public static function getRandomUserAgent()
    {
        $agents = [
            'Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
            'Mozilla/5.0 (Linux; U; Android 4.0.3; de-ch; HTC Sensation Build/IML74K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
            'Mozilla/5.0 (Linux; U; Android 2.3.5; zh-cn; HTC_IncredibleS_S710e Build/GRJ90) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
            'Mozilla/5.0 (Linux; U; Android 2.3.5; en-us; HTC Vision Build/GRI40) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
            'Mozilla/5.0 (Linux; U; Android 2.3.4; fr-fr; HTC Desire Build/GRJ22) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
            'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25',
        ];

        return 'user-agent: ' . $agents[array_rand($agents)];
    }
}
