<?php 
//导入头部
include("header.php");
//导入官方api
include("api.php");
?>
	
	
	<link rel="stylesheet" href="css/model.css">

	




<div style="display:none;">
 <p id="zhid1"></p>
 <p id="zhid2"></p>
 <p id="zhid3"></p>
  <p id="zhid4"></p>

	  <p id="zhlj1"></p>
 <p id="zhlj2"></p>
 <p id="zhlj3"></p>
  <p id="zhlj4"></p>
 
	 <p id="scid1"></p>
 <p id="scid2"></p>
 <p id="scid3"></p>
  <p id="scid4"></p>

	  <p id="sclj1"></p>
 <p id="sclj2"></p>
 <p id="sclj3"></p>
  <p id="sclj4"></p>

	
</div>

</script>
	
	
	
		<style>
		body{
			background:#F5F5F5;
			
			
		}
		img {
  -webkit-user-drag: none;
  
}
.zpk {
	
    padding: 30px;
    height: 372px;
	padding:15px;
}

.zp {
	margin-bottom:5px;
    margin-left: 5px;
    margin-right: 5px;
    height: 320px;
    width: 210px;
    background: #fff;
    border-radius: 10px;
    display: block;
    overflow: hidden;
    float: left;
    transition: 0.4s;
    border: 2px #505050 solid;
	
}

.zp_fm {
    display: inline-block;
    width: 100%;
    height: 200px;
    background-size: cover;
    background-position: center;
    border-radius: 10px 10px 0 0;
    opacity: 0.8;
    transition: 0.4s;
	
}
.zp_bt {
    margin-left: 15px;
    color: #2b2b2b;
    font-size: 14px;
}
.pa {
    margin-top: 45px;
    margin-left: 15px;
}

.img-tx
{
	margin-top:8px;
	border-radius:50%;
	width:50px;
	height:50px;
	float:left;
	margin-left:10px;
	vertical-align:text-top;
	background-position:center;
	margin-right:10px;
	
}
.sy-text{
	margin-left:10px;
	font-size:18px;
	margin-top:15px;
	color:#778899;
}
.sy-ctext{
	margin-left:10px;
	font-size:12px;
	margin-top:3px;
	color:#778899;
	
}

.mian{
		margin-top: 70px;
	margin-left: 10px;
	margin-right: 10px;
	height:200px;
	   background: linear-gradient(60deg, rgba(0,172,193,1) 0%,  rgba(80,58,183,1) 100%);
box-shadow:1px 1px 1px rgba(20%,20%,40%,0.5);
}
.txxx{
	
	margin-left:20px;


	
}
.imgg-tx{
	
	margin-top:45px;float: left;border: 2px solid #e4007e;

text-align: center;

line-height: 200px;

font-weight: bold;

font-size: 24px;

background: burlywood;

border-radius: 50%;
	
}
.zs{
	
	margin-top: 30px;
	margin-left: 10px;
	margin-right: 10px;

	   background: linear-gradient(60deg,rgba(0,172,193,1) 0%,  rgba(80,58,183,1) 100%);
	word-wrap:break-word;word-break:break-all;
	
}

</style>


	
<div class="mian">
<div class="txxx" >
<img src="" width="100px" height="100px" class="imgg-tx" id="txx">
<h1 id="mc" style="float: left;margin-top:75px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">获取中...</h1>
<input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value=" 编程猫用户中心 " id="jr"  onclick="user();">					  


</div>

</div>

<div class="zs">
<h3 id="id" style="margin-left:10px;margin-left:20px;
	width:600px;">获取中...</h3>
<h3 style="margin-left:10px;margin-left:20px;
	  
" id="js" >获取中...</h3>

</div>



<!--个人作品展示-->
<div>	


	 <input type="button" onclick="zhzp();" style="float:right;margin-top:16px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="  下一作品   " >



     <h1 class="pa" style="text-shadow:1px 3px 5px 	#696969;">
           ❤个人作品展示 </h1>
	
        <ul class="zpk">
	
            <li class="zp">
                <a   href="#modal-opened" id="modal-closed" onclick="zhzl(1);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp1"></div>
					
                    <p class="zp_bt" id="zhmc1">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx1"> 
               <img src="" class="img-tx" id="zhxt1">
				
                  <p class="sy-text" id="zhzz1"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy1"> 获取中...</p>
				  				  
               </a>
            </li>
    <li class="zp">
                 <a   href="#modal-opened" id="modal-closed" onclick="zhzl(2);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp2"></div>
					
                    <p class="zp_bt" id="zhmc2">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx2"> 
               <img src="" class="img-tx" id="zhxt2">
				
                  <p class="sy-text" id="zhzz2"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy2"> 获取中...</p>
				  				  
               </a>
			     </li>
           <li class="zp">
		
               <a   href="#modal-opened" id="modal-closed" onclick="zhzl(3);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp3"></div>
					
                    <p class="zp_bt" id="zhmc3">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx3"> 
               <img src="" class="img-tx" id="zhxt3">
				
                  <p class="sy-text" id="zhzz3"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy3"> 获取中...</p>
				  				  
               </a>
			   </li>
            <li class="zp">
		
			
                <a   href="#modal-opened" id="modal-closed" onclick="zhzl(4);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp4"></div>
					
                    <p class="zp_bt" id="zhmc4">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx4"> 
               <img src="" class="img-tx" id="zhxt4">
				
                  <p class="sy-text" id="zhzz4"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy4"> 获取中...</p>
				  				  
               </a>
            </li>


	 </ul>

	</div>
	
<!--工作室首页展示结束-->
<script>
//浮动控件不会搞，导致移动版布局错乱，所以增加动态br
if(window.matchMedia("(max-width: 932px)").matches){
	document.getElementById("jr").value="编程猫";
document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  document.write("<br>");
  

}
 </script>
<!--个人作品展示-->
<div>	


	 <input type="button" onclick="sczp();" style="float:right;margin-top:16px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="  下一作品   " >



     <h1 class="pa" style="text-shadow:1px 3px 5px 	#696969;">
           ❤个人收藏展示 </h1>
	
        <ul class="zpk">
	
            <li class="zp">
                <a   href="#modal-opened" id="modal-closed" onclick="sczl(1);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="sctp1"></div>
					
                    <p class="zp_bt" id="scmc1">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="scxx1"> 
               
				
                  <p class="sy-text" id="sczz1"> 获取中...</p>
				  <p class="sy-ctext" id="sccy1"> 获取中...</p>
				  				  
               </a>
            </li>
    <li class="zp">
                 <a   href="#modal-opened" id="modal-closed" onclick="sczl(2);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="sctp2"></div>
					
                    <p class="zp_bt" id="scmc2">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="scxx2"> 
             
				
                  <p class="sy-text" id="sczz2"> 获取中...</p>
				  <p class="sy-ctext" id="sccy2"> 获取中...</p>
				  				  
               </a>
			     </li>
           <li class="zp">
		
               <a   href="#modal-opened" id="modal-closed" onclick="sczl(3);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="sctp3"></div>
					
                    <p class="zp_bt" id="scmc3">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="scxx3"> 
          
				
                  <p class="sy-text" id="sczz3"> 获取中...</p>
				  <p class="sy-ctext" id="sccy3"> 获取中...</p>
				  				  
               </a>
			   </li>
            <li class="zp">
		
			
                <a   href="#modal-opened" id="modal-closed" onclick="sczl(4);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="sctp4"></div>
					
                    <p class="zp_bt" id="scmc4">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="scxx4"> 
               
				
                  <p class="sy-text" id="sczz4"> 获取中...</p>
				  <p class="sy-ctext" id="sccy4"> 获取中...</p>
				  				  
               </a>
            </li>


	 </ul>

	</div>
	
<!--工作室首页展示结束-->















<div class="modal-container" id="modal-opened">
  <div class="modal">
<iframe height="450" width="100%" src="" frameborder="0" id="zhif" scrolling="no"></iframe>
    


  
<h2 style="margin-top:10px;" id="zhmc"></h2>
<h3 style="margin-top:5px;" id="zhzz"></h3>
<h4 style="margin-top:5px;" id="zhcy"></h4>
 <a href="" id="zhlj" target="_blank"><button  style="margin-top:10px;" class="modal__btn" >作品详情 &rarr;</button></a>
    <a href="#modal-closed" class="link-2">关</a>

  </div>
</div>

<script>



			var p;
		//解析个人作品作品json信息
var gzsh='<?php curl_exec($gir);?>';
gzsh = JSON.parse(gzsh);

		
var i=-1;

				
	//定义最热作品页码函数
				function zhzp(){ 　			

					i=i+1;
			for(l = 1; l < 5; l++)
			{
			
				//作品循环遍历
document.getElementById("zhmc"+l).innerHTML =  gzsh.data.works[i+l].name;
document.getElementById("zhzz"+l).innerHTML = gzsh.data.works[i+l].nickname;
document.getElementById("zhcy"+l).innerHTML = "作品ID："+gzsh.data.works[i+l].work_id;
document.getElementById("zhtp"+l).src = gzsh.data.works[i+l].preview;

document.getElementById("zhlj"+l).innerHTML = "./zp.php?zpID="+gzsh.data.works[i+l].work_id;
document.getElementById("zhxx"+l).href = "./user.php?zpID="+gzsh.data.works[i+l].work_id+"&yhID="+gzsh.data.works[i+l].user_id;
document.getElementById("zhid"+l).innerHTML = gzsh.data.works[i+l].work_id;

			}


			} 

for(l = 1; l < 5; l++)
			{
				//作品初始循环遍历
document.getElementById("zhmc"+l).innerHTML =  gzsh.data.works[i+l].name;
document.getElementById("zhzz"+l).innerHTML = gzsh.data.works[i+l].nickname;
document.getElementById("zhcy"+l).innerHTML = "作品ID："+gzsh.data.works[i+l].work_id;
document.getElementById("zhtp"+l).src = gzsh.data.works[i+l].preview;

document.getElementById("zhlj"+l).innerHTML = "./zp.php?zpID="+gzsh.data.works[i+l].work_id;
document.getElementById("zhxx"+l).href = "./user.php?zpID="+gzsh.data.works[i+l].work_id+"&yhID="+gzsh.data.works[i+l].user_id;
document.getElementById("zhid"+l).innerHTML = gzsh.data.works[i+l].work_id;
			}

document.getElementById("mc").innerHTML =  gzsh.data.works[0].nickname;
//定义作品地址函数
			function zhzl(p){ 　
			var k=document.getElementById("zhlj"+p).innerHTML;
			var kk=document.getElementById("zhid"+p).innerHTML;
			var mc=document.getElementById("zhmc"+p).innerHTML;
			var zz=document.getElementById("zhzz"+p).innerHTML;
			var cy=document.getElementById("zhcy"+p).innerHTML;
document.getElementById("zhif").src ="https://player.codemao.cn/old/w/"+kk;
document.getElementById("zhlj").href =k ;
document.getElementById("zhmc").innerHTML ="《"+mc+"》";
document.getElementById("zhzz").innerHTML ="作者："+zz;
document.getElementById("zhcy").innerHTML ="作品ID:"+kk;
			}
			
//定义跳转到官方链接函数
function user(){ 
window.location.href="https://shequ.codemao.cn/user/"+GetQueryString("yhID");
}
		</script>	

<script>



			var p;
		//解析个人收藏作品json信息
var gz='<?php curl_exec($scr);?>';
gzs = JSON.parse(gz);

		
var d=-1;

				
	//定义最热作品页码函数
				function sczp(){ 　			

					d=d+1;
			for(l = 1; l < 5; l++)
			{
			
				//作品循环遍历
document.getElementById("scmc"+l).innerHTML =  gzs.data.works[d+l].name;
document.getElementById("sczz"+l).innerHTML = gzs.data.works[d+l].nickname;
document.getElementById("sccy"+l).innerHTML = "作品ID："+gzs.data.works[d+l].work_id;
document.getElementById("sctp"+l).src = gzs.data.works[d+l].preview;

document.getElementById("sclj"+l).innerHTML = "./zp.php?zpID="+gzs.data.works[d+l].work_id;
document.getElementById("scxx"+l).href = "./user.php?zpID="+gzs.data.works[d+l].work_id+"&yhID="+gzsh.data.works[d+l].user_id;
document.getElementById("scid"+l).innerHTML = gzs.data.works[d+l].work_id;

			}


			} 

for(l = 1; l < 5; l++)
			{
				//作品初始循环遍历
document.getElementById("scmc"+l).innerHTML =  gzs.data.works[d+l].name;
document.getElementById("sczz"+l).innerHTML = gzs.data.works[d+l].nickname;
document.getElementById("sccy"+l).innerHTML = "作品ID："+gzs.data.works[d+l].work_id;
document.getElementById("sctp"+l).src = gzs.data.works[d+l].preview;

document.getElementById("sclj"+l).innerHTML = "./zp.php?zpID="+gzs.data.works[d+l].work_id;
document.getElementById("scxx"+l).href = "./user.php?zpID="+gzs.data.works[d+l].work_id+"&yhID="+gzs.data.works[d+l].user_id;
document.getElementById("scid"+l).innerHTML = gzs.data.works[d+l].work_id;
			}


//定义作品地址函数
			function sczl(p){ 　
			var k=document.getElementById("sclj"+p).innerHTML;
			var kk=document.getElementById("scid"+p).innerHTML;
			var mc=document.getElementById("scmc"+p).innerHTML;
			var zz=document.getElementById("sczz"+p).innerHTML;
			var cy=document.getElementById("sccy"+p).innerHTML;
document.getElementById("zhif").src ="https://player.codemao.cn/old/w/"+kk;
document.getElementById("zhlj").href =k ;
document.getElementById("zhmc").innerHTML ="《"+mc+"》";
document.getElementById("zhzz").innerHTML ="作者："+zz;
document.getElementById("zhcy").innerHTML ="作品ID:"+kk;
			}
			




var grr='<?php curl_exec($grr);?>';
grr = JSON.parse(grr);



document.getElementById("txx").src = grr.user_info.avatar;
document.getElementById("id").innerHTML = "用户ID："+grr.user_info.id;
document.getElementById("js").innerHTML ="我的签名:"+grr.user_info.signature;

for(p = 1; p < 7; p++)
			{
				//作品循环遍历
document.getElementById("zhxt"+p).src = grr.user_info.avatar;



			}

		</script>	


<script>//解析编程猫个人资料json信息







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
// 打印到控制台
if(GetQueryString("yhID")==null){
	window.close()
	alert("参数缺失")
	
}

console.log("作品ID："+GetQueryString("zpID"));
console.log("作者ID："+GetQueryString("yhID"));



if(document.getElementById("id").innerHTML=="获取中...")
{
window.location.href="https://shequ.codemao.cn/user/"+GetQueryString("yhID");
	
}



















</script>



	<?php 
//导入尾部
include("foot.php");




?>

	
	




