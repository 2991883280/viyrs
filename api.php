<!--
动态获取编程猫的数据API
开发者：冷鱼花茶
日期：2019.3.16
因为js不支持跨域，所以先用PHP获取官方api，然后用js解析json
-->

<?php
//获取工作室成员资料
$gzscy = curl_init(); 
curl_setopt($gzscy, CURLOPT_URL,"https://api.codemao.cn/web/shops/214/users?limit=61&offset=0"); 
curl_setopt($gzscy, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($gzscy, CURLOPT_SSL_VERIFYHOST, false); 
//结束

//获取工作室作品资料
$gzszp = curl_init(); 
curl_setopt($gzszp, CURLOPT_URL,"https://api.codemao.cn/web/works/subjects/214/works?&offset=".$_GET["ID"]."&limit=120&sort=-audited_at,-id"); 
curl_setopt($gzszp, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($gzszp, CURLOPT_SSL_VERIFYHOST, false); 
//结束

//获取工作室最火前26作品资料
$gzsh = curl_init(); 
curl_setopt($gzsh, CURLOPT_URL,"https://api.codemao.cn/web/works/subjects/214/works?&offset=0&limit=26&sort=-n_likes"); 
curl_setopt($gzsh, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($gzsh, CURLOPT_SSL_VERIFYHOST, false); 
//结束



//获取编程猫个人全部作品资料
$gir = curl_init(); 
$ss = "https://api.codemao.cn/api/user/works/published?user_id=".$_GET["yhID"];
curl_setopt($gir, CURLOPT_URL,$ss); 
curl_setopt($gir, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($gir, CURLOPT_SSL_VERIFYHOST, false); 
//结束


//获取编程猫个人作品资料
$grr = curl_init(); 
$ss = "https://api.codemao.cn/web/works/".$_GET["zpID"];
curl_setopt($grr, CURLOPT_URL,$ss); 
curl_setopt($grr, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($grr, CURLOPT_SSL_VERIFYHOST, false); 
//结束

//获取编程猫个人收藏作品资料
$scr = curl_init(); 
$ss = "https://api.codemao.cn/api/user/works/collection?user_id=".$_GET["yhID"];
curl_setopt($scr, CURLOPT_URL,$ss); 
curl_setopt($scr, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($scr, CURLOPT_SSL_VERIFYHOST, false); 
//结束






?>




