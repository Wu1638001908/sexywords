<!DOCTYPE html>
<html>  
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name=”viewport” content=”width=device-width, initial-scale=1″ />
  <title>bananana</title>
<style>
html,body { 
    background: url(background.png) no-repeat center center fixed; 
    -webkit-background-size: cover; 
    -moz-background-size: cover; 
    -o-background-size: cover; 
    background-size: cover;
    width:100%;
    height:100%;
} 
  div.a
  {
    text-align: center; 
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
  }
  p.main
  {
    font-size:200%;
  }
footer {
    display: inline-block;
    width: 100%;
    text-align: center;
    color: #CCA8D8;
    position:fixed;
    bottom:0;
}
</style>
</head>
<body>
<div class='a'>
<p class='main'>
<?php
// 存储数据的文件
$filename = 'data.dat';        
 
// 指定页面编码
header('Content-type: text/html; charset=utf-8');
 
if(!file_exists($filename)) {
    die($filename . ' 数据文件不存在');
}
 
// 读取整个数据文件
$data = file_get_contents($filename);
 
// 按换行符分割成数组
$data = explode(PHP_EOL, $data);
 
// 随机获取一行索引
$result = $data[array_rand($data)];
 
// 去除多余的换行符（保险起见）
$result = str_replace(array("\r","\n","\r\n"), '', $result);
 
echo $result;
?>
    </p>
  </div>
  <footer>
    <script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>
    <span id="busuanzi_container_site_pv">本站总访问量<span id="busuanzi_value_site_pv"></span>次</span>
    <div class="footer">
                Made with
                ❤ by
                <a href="https://blog.wubuster.com" target="_blank">IamWu555</a>
            </div>  
  </footer>
  </body>
</html>