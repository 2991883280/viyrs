<?php 
//导入头部
include("header.php");

//导入官方api
include("api.php");




?>
<style>
	body{
			background:#F5F5F5;
			
			
		}
</style>
<div style="display:none;">
 <p id="zhid1"></p>
 <p id="zhid2"></p>
 <p id="zhid3"></p>
  <p id="zhid4"></p>
   <p id="zhid5"></p>
    <p id="zhid6"></p>
	<p id="zhid7"></p>
 <p id="zhid8"></p>
 <p id="zhid9"></p>
  <p id="zhid10"></p>
   <p id="zhid11"></p>
    <p id="zhid12"></p>
	  <p id="zhlj1"></p>
 <p id="zhlj2"></p>
 <p id="zhlj3"></p>
  <p id="zhlj4"></p>
   <p id="zhlj5"></p>
    <p id="zhlj6"></p>
		  <p id="zhlj7"></p>
 <p id="zhlj8"></p>
 <p id="zhlj9"></p>
  <p id="zhlj10"></p>
   <p id="zhlj11"></p>
    <p id="zhlj12"></p>
	
</div>

<link rel="stylesheet" href="css/sy.css">
	<link rel="stylesheet" href="css/model.css">

<style>
@media (max-width: 487px) {
	.zp {
	margin-bottom:5px;
    margin-right: 5px;
    height: 340px;
    width: 190px;
    background: #fff;
    border-radius: 10px;
    display: block;
    overflow: hidden;
    float: left;
    transition: 0.4s;
    border: 2px #505050 solid;
	
}

}
@media (max-width: 1330px) {
.pc-js{
	display:none;
}


	.pa {
    margin-top: 345px;;
    margin-left: 15px;
}
		.sj-js{
background-color:	#F5FFFA;-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);
width:100%;
margin-top:20px;


}

.sj-wz{
	
margin-right:3px;
margin-left:5px;

}

}
@media (max-width: 461px) {


	.pa {
    margin-top: 405px;;
    margin-left: 15px;
}
	


}




.pc-js{
	float:right;height:380px;background-color:	#F5FFFA;-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);
width:300px;
}

</style>
<!--轮播图-->
<div class="lbt" style="margin-top:80px;">
 <a href="#" target="_blank" id="lbt-lj" >
  <img src="./img/jr.png" width="100%" height="100%" id="lbt-img" style="max-width:1000px; -webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px; ">

 </a>
 <!--轮播图结束-->
 <!--介绍-->
   <div class="pc-js">
<h1>——工作室介绍——</h1>
<br>
<h3 style="margin-right:3px;margin-left:5px;">我们的主题就是——无限主题！你在这个工作室里，<br><br>想做什么，就做什么，只要做出来的不是劣质产品，<br><br>你爱干啥干啥！疯癫工作室正在招募啦！不管你是萌新，还是大佬，<br><br>疯癫工作室都欢迎你哦~qq群：678996214</h3>
</div>
  <input class="lbb" style="  box-shadow:2px 2px 2px rgba(20%,20%,40%,0.5);max-width:1000px;"type="button" onclick="pic();" value="哇哈！点击我查看下一张啦！" id="text"></button>
 
 <div class="sj-js" >
<center><h1 class="sj-wz"><script>

if(window.matchMedia("(max-width: 1330px)").matches){	
  document.write("<h1 >——工作室介绍——</h1>");

}
 </script></h1>
<br>
<h3  class="sj-wz"><script>
if(window.matchMedia("(max-width: 1330px)").matches){
  document.write("<h3>我们的主题就是——无限主题！你在这个工作室里，<br>");
    document.write("<br>想做什么，就做什么，只要做出来的不是劣质产品，<br>");
	  document.write("<br>你爱干啥干啥！疯癫工作室正在招募啦！不管你是萌新，还是大佬，<br>");
	    document.write("<br>疯癫工作室都欢迎你哦~qq群：678996214</h3>");
}
 </script></h3></center>
</div>
</div>




<!--工作室首页震室之宝作品展示-->
<div>	


	 <input type="button" onclick="zhzp();" style="float:right;margin-top:16px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;
box-shadow:2px 2px 
            2px
             rgba(20%,20%,40%,0.5);" value="  下一作品   " >



     <h1 class="pa" style="	text-shadow:1px 3px 5px 	#696969;">
           ❤作品精选26列 </h1>
	
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
 <li class="zp">
                   <a  href="#modal-opened" id="modal-closed" onclick="zhzl(5);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp5"></div>
					
                    <p class="zp_bt" id="zhmc5">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx5"> 
               <img src="" class="img-tx" id="zhxt5">
				
                  <p class="sy-text" id="zhzz5"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy5"> 获取中...</p>
				  				  
               </a>
            </li>
			 <li class="zp">
                <a   href="#modal-opened" id="modal-closed" onclick="zhzl(6);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp6"></div>
					
                    <p class="zp_bt" id="zhmc6">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx6"> 
               <img src="" class="img-tx" id="zhxt6">
				
                  <p class="sy-text" id="zhzz6"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy6"> 获取中...</p>
				  				
               </a>
			   
            </li>
 <li class="zp">
                <a   href="#modal-opened" id="modal-closed" onclick="zhzl(7);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp7"></div>
					
                    <p class="zp_bt" id="zhmc7">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx7"> 
               <img src="" class="img-tx" id="zhxt7">
				
                  <p class="sy-text" id="zhzz7"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy7"> 获取中...</p>
				  				  
               </a>
            </li>
    <li class="zp">
                 <a   href="#modal-opened" id="modal-closed" onclick="zhzl(8);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp8"></div>
					
                    <p class="zp_bt" id="zhmc8">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx8"> 
               <img src="" class="img-tx" id="zhxt8">
				
                  <p class="sy-text" id="zhzz8"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy8"> 获取中...</p>
				  				  
               </a>
			     </li>
           <li class="zp">
		
               <a   href="#modal-opened" id="modal-closed" onclick="zhzl(9);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp9"></div>
					
                    <p class="zp_bt" id="zhmc9">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx9"> 
               <img src="" class="img-tx" id="zhxt9">
				
                  <p class="sy-text" id="zhzz9"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy9"> 获取中...</p>
				  				  
               </a>
			   </li>
            <li class="zp">
		
			
                <a   href="#modal-opened" id="modal-closed" onclick="zhzl(10);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp10"></div>
					
                    <p class="zp_bt" id="zhmc10">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx10"> 
               <img src="" class="img-tx" id="zhxt10">
				
                  <p class="sy-text" id="zhzz10"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy10"> 获取中...</p>
				  				  
               </a>
            </li>
 <li class="zp">
                   <a  href="#modal-opened" id="modal-closed" onclick="zhzl(11);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp11"></div>
					
                    <p class="zp_bt" id="zhmc11">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx11"> 
               <img src="" class="img-tx" id="zhxt11">
				
                  <p class="sy-text" id="zhzz11"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy11"> 获取中...</p>
				  				  
               </a>
            </li>
			 <li class="zp">
                <a   href="#modal-opened" id="modal-closed" onclick="zhzl(12);">
                    <div class="zp_fm" ><img width="100%" height="100%" src="" id="zhtp12"></div>
					
                    <p class="zp_bt" id="zhmc12">获取中...</p>
                </a>
                <hr style="margin-top:5px;"><a href="" target="_blank" id="zhxx12"> 
               <img src="" class="img-tx" id="zhxt12">
				
                  <p class="sy-text" id="zhzz12"> 获取中...</p>
				  <p class="sy-ctext" id="zhcy12"> 获取中...</p>
				  				
               </a>
			   
            </li>
	 </ul>

	</div>
	
<!--工作室首页展示结束-->













<script type="text/javascript">
var now=(new Date()).getHours();
if(now>0&&now<=6){
 document.getElementById('text').value="凌晨时间小心猝死！点我下一张";
}else if(now>6&&now<=11){
 document.getElementById('text').value="早上好啊！点我下一张";
}else if(now>11&&now<=14){
 document.getElementById('text').value="吃饭啦！碎觉觉！点我下一张";
}else if(now>14&&now<=18){
 document.getElementById('text').value="下午好！和茶吗？点我下一张";
}else{
 document.getElementById('text').value="晚上好梦！点我下一张";
}
</script>






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



var j=1;
				
				//定义轮播图下页函数
				function pic(){ 　
				if (j==3){
					
					j=1;
				}else{
					
					j=j+1;
				}
				
			if (j==1)
			{
				 document.getElementById('lbt-img').src="./img/jr.png";
				  document.getElementById('lbt-lj').href="#";
				 
			}　
			if (j==2)
			{
				 document.getElementById('lbt-img').src="https://static.codemao.cn/whale/SJ0LON6zL";
				  document.getElementById('lbt-lj').href="http://player.bilibili.com/player.html?aid=87723994&cid=149879449&page=1";
				 
			}
			if (j==3)
			{
				 document.getElementById('lbt-img').src="https://static.codemao.cn/whale/H1iUwKfjS";
				  document.getElementById('lbt-lj').href="http://player.bilibili.com/player.html?aid=74932136&cid=128177407&page=1";
				 
			}
			
			
			
			} 
			var p;
		//解析工作室最火作品json信息
var gzsh='<?php curl_exec($gzsh);?>';
gzsh = JSON.parse(gzsh);

		
var i=-1;

				
	//定义最热作品页码函数
				function zhzp(){ 　			
if(i==13)
{
	//最热作品只显示18个，超过之后重新回到第一个作品
	i=-2;
}	
					i=i+1;
			for(l = 1; l < 13; l++)
			{
				//作品循环遍历
document.getElementById("zhmc"+l).innerHTML = gzsh.items[i+l].name;
document.getElementById("zhzz"+l).innerHTML = gzsh.items[i+l].user.nickname;
document.getElementById("zhcy"+l).innerHTML = "浏览"+gzsh.items[i+l].view_times+"次，共"+gzsh.items[i+l].praise_times+"赞";
document.getElementById("zhtp"+l).src = gzsh.items[i+l].preview;
document.getElementById("zhxt"+l).src = gzsh.items[i+l].user.avatar_url;
document.getElementById("zhlj"+l).innerHTML = "./zp.php?zpID="+gzsh.items[i+l].id
document.getElementById("zhxx"+l).href = "./user.php?zpID="+gzsh.items[i+l].id+"&yhID="+gzsh.items[i+l].user.id;
document.getElementById("zhid"+l).innerHTML = gzsh.items[i+l].id;

			}


			} 

for(l = 1; l < 13; l++)
			{
				//作品初始循环遍历
document.getElementById("zhmc"+l).innerHTML = gzsh.items[i+l].name;
document.getElementById("zhzz"+l).innerHTML = gzsh.items[i+l].user.nickname;
document.getElementById("zhcy"+l).innerHTML = "浏览"+gzsh.items[i+l].view_times+"次，共"+gzsh.items[i+l].praise_times+"赞";
document.getElementById("zhtp"+l).src = gzsh.items[i+l].preview;
document.getElementById("zhxt"+l).src = gzsh.items[i+l].user.avatar_url;
document.getElementById("zhlj"+l).innerHTML = "./zp.php?zpID="+gzsh.items[i+l].id
document.getElementById("zhxx"+l).href = "./user.php?zpID="+gzsh.items[i+l].id+"&yhID="+gzsh.items[i+l].user.id;
document.getElementById("zhid"+l).innerHTML = gzsh.items[i+l].id;
			}


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
document.getElementById("zhcy").innerHTML =cy+"，作品ID:"+kk;
			}
			



		</script>	
<?php 


//导入尾部
include("foot.php");
?>


