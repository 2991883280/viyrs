
<?php 
//导入头部
include("header.php");

//导入官方api
include("api.php");




?>


	
<style>
.nv{
	width:100%;
	  height:94px;
	  
			background:url(./img/bj.png);
	margin-top: 62px;
 background-repeat:repeat-x;
padding:41px 0;
box-shadow:1px 1px 1px rgba(20%,20%,40%,0.5);
}
.nv-zp{
	
	font-size:50px;
	color:aqua;
	text-align:center;
	text-shadow:1px 3px 5px #00b9ad;
}




	
	
	
		body{
			background:#F5F5F5;
	
		}

.cy-mian{
	
	margin-right:10px;
	margin-left:10px;
	height:150px;
	background-color:red;
	margin-top:12px;
	
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

.txxx{
	
	margin-left:20px;


	
}
.mian{
		margin-top: 12px;
	margin-left: 10px;
	margin-right: 10px;
	height:200px;
	  

}
</style>

<div class="nv">

<h1 class="nv-zp">成员中心</h1>


	 <input type="button" onclick="zhszp();" style="float:right;margin-top:16px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="  下一位   " >

 <input type="button" onclick="zhzp();" style="float:right;margin-top:16px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="  上一位   " >


	
</div>


<!--工作室成员-->
<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx1">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc1" >获取中...</h1>
<h3 id="cy1">获取中...</h3>
</div>
<a href="" target="_blank" id="lj1"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面   " id="an1" >	</a>			  

</div>

<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx2">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc2" >获取中...</h1>
<h3 id="cy2">获取中...</h3>
</div>
<a href="" target="_blank" id="lj2"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面  " id="an2" >	</a>			  

</div>

<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx3">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc3" >获取中...</h1>
<h3 id="cy3">获取中...</h3>
</div>
<a href="" target="_blank" id="lj3"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面  " id="an3" >	</a>			  

</div>


<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx4">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc4" >获取中...</h1>
<h3 id="cy4">获取中...</h3>
</div>
<a href="" target="_blank" id="lj4"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面  " id="an4" >	</a>			  

</div>


<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx5">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc5" >获取中...</h1>
<h3 id="cy5">获取中...</h3>
</div>
<a href="" target="_blank" id="lj5"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面   " id="an5" >	</a>			  

</div>


<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx6">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc6" >获取中...</h1>
<h3 id="cy6">获取中...</h3>
</div>
<a href="" target="_blank" id="lj6"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面  " id="an6" >	</a>			  

</div>


<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx7">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc7" >获取中...</h1>
<h3 id="cy7">获取中...</h3>
</div>
<a href="" target="_blank" id="lj7"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面  " id="an7" >	</a>			  

</div>


<div class="mian">
<img src="" width="100px" height="100px" class="imgg-tx" id="tx8">
<div style="float: left;margin-top:60px;margin-left:20px; text-shadow:1px 3px 5px 	#696969;">
<h1 id="mc8" >获取中...</h1>
<h3 id="cy8">获取中...</h3>
</div>
<a href="" target="_blank" id="lj8"><input type="button" style="float:right;margin-right:60px;margin-top:75px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:50px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;"  value="   进入用户界面  " id="an8" >	</a>			  

</div>








<!--工作室成员结束-->




















<script>
var gzsh='<?php curl_exec($gzscy);?>';
gzsh = JSON.parse(gzsh);

		var i=-1
	
					
			for(l = 1; l < 9; l++)
			{
				
				//成员循环遍历
document.getElementById("tx"+l).src = gzsh.items[i+l].avatar_url;
document.getElementById("mc"+l).innerHTML =  gzsh.items[i+l].name;
document.getElementById("cy"+l).innerHTML =  "用户ID:"+gzsh.items[i+l].user_id;
document.getElementById("lj"+l).href =  "https://shequ.codemao.cn/user/"+gzsh.items[i+l].user_id;


			}


			
			//定义上位用户函数
			function zhzp(){ 　		
			i=i-1
				for(l = 1; l < 9; l++)
			{
				
				//成员循环遍历
document.getElementById("tx"+l).src = gzsh.items[i+l].avatar_url;
document.getElementById("mc"+l).innerHTML =  gzsh.items[i+l].name;
document.getElementById("cy"+l).innerHTML =  "用户ID:"+gzsh.items[i+l].user_id;
document.getElementById("lj"+l).href =  "https://shequ.codemao.cn/user/"+gzsh.items[i+l].user_id;


			}
			}

				//定义下位用户函数
			function zhszp(){ 　		
			i=i+1
			   for(l = 1; l < 9; l++)
			{
				
				//成员循环遍历
document.getElementById("tx"+l).src = gzsh.items[i+l].avatar_url;
document.getElementById("mc"+l).innerHTML =  gzsh.items[i+l].name;
document.getElementById("cy"+l).innerHTML =  "用户ID:"+gzsh.items[i+l].user_id;
document.getElementById("lj"+l).href =  "https://shequ.codemao.cn/user/"+gzsh.items[i+l].user_id;


			}
			}

			
			
			
			
			
			
			
		

if(window.matchMedia("(max-width: 556px)").matches){
	document.getElementById("an1").style.display="none";
	document.getElementById("an2").style.display="none";
		document.getElementById("an3").style.display="none";
			document.getElementById("an4").	style.display="none";
				document.getElementById("an5").style.display="none";
					document.getElementById("an6").style.display="none";
						document.getElementById("an7").style.display="none";
							document.getElementById("an8").style.display="none";
  

}

			
			
			
			

</script>


	<?php 
//导入尾部
include("foot.php");




?>

	