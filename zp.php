<?php 
//导入头部
include("header.php");
//导入官方api
include("api.php");

?>















<style>

html, body {
    height: 100%;


			background:#F5F5F5;
			


 } 
 
.lbt{
	margin-top: 20px;
	margin-left: 10px;
	margin-right: 10px;
	height:600px;
	width:70&;
	
}
@media (max-width: 500px) {
  .lbt {
	  	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	height:100%;
	width:100%;
  }
}
.zz{
	
	width:100%;
	height:300px;
	margin-top:20px
	
}
.mc{
	box-shadow:1px 1px 1px 1px rgba(20%,20%,40%,0.5) inset;
	width:100%;
	
}

</style>

<div class="lbt">

<iframe style="margin-top:45px;"  src="" 	height="100%" width="100%" frameborder="0" id="if"></iframe>

<input type="button"  style="float:right;margin-top:20px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="" id="id">
 
<div class="zz">
<div class="mc">
<h2 id="zpm">获取中...</h2>
<h5 id="zzcy" style="float:right;">获取中...</h4>
</div>


<br/>
<div class="mc">
<h4 id="zpjs">获取中...</h4>
</div>
<br/>
<div class="mc" style="margin-bottom:20px;">
<h4 id="zpwf">获取中...</h4>
</div>

<input type="button"  style="width:100%;margin-top:10px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="进入官方查看作品" onclick="zp();">



</div>
















<script type="text/javascript">




	  	//获取网址参数
				function GetQueryString(name) {
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     
     if(r!=null) {
         return  decodeURI(r[2]);
     } else {
          return null;
    }      
}
 
// 打印到控制台
if(GetQueryString("zpID")==null){
	window.close()
	alert("参数缺失")
	
}
	console.log("作品ID："+GetQueryString("zpID"));
console.log("作者ID："+GetQueryString("amp;zzID"));


var system ={}; 
var p = navigator.platform; 
system.win = p.indexOf("Win") == 0; 
system.mac = p.indexOf("Mac") == 0; 
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0); 
if(system.win||system.mac||system.xll){
//如果是电脑
document.getElementById("if").src = "https://player.codemao.cn/old/w/"+GetQueryString("zpID");

}else{ 
//如果是手机,
document.getElementById("if").src = "https://player.codemao.cn/old/we/"+GetQueryString("zpID");

}




//定义跳转到官方链接函数
function zp(){ 
window.location.href="https://shequ.codemao.cn/work/"+GetQueryString("zpID");
}



	</script>
	
	
	


<script>//解析编程猫个人资料json信息
var grr='<?php curl_exec($grr);?>';
grr = JSON.parse(grr);


document.getElementById("zpm").innerHTML ="作品："+grr.work_name;
if(document.getElementById("zpm").innerHTML=="作品：undefined")
{
	
	window.close();
	alert("作品不存在");
	
}

document.getElementById("zpjs").innerHTML ="介绍："+grr.work_introduction;
document.getElementById("zpwf").innerHTML ="玩法："+grr.operation_description;
document.getElementById("zzcy").innerHTML ="浏览"+grr.view_times+"次，赞"+grr.praise_times+"个";
document.getElementById("id").value =" ID:"+grr.id+" ";





</script>











	<?php 
//导入尾部
include("foot.php");




?>

	
	

	
	


	
	
	
	
	
	