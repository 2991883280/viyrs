<?php 
//导入头部
include("header.php");

//导入官方api
include("api.php");




?>
<link rel="stylesheet" href="css/model.css">
<link rel="stylesheet" href="css/sy.css">


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
















	
<style>
.nv{
	width:100%;
	  height:176px;
	  
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





</style>

<div class="nv">

<h1 class="nv-zp">作品中心</h1>


	 <input type="button" onclick="zhszp();" style="float:right;margin-top:16px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="  下页作品   " >

 <input type="button" onclick="zhzp();" style="float:right;margin-top:16px;margin-right:20px;color:blue;  outline:none;/*去掉轮廓线*/
                     
                      height:25px;
                      background-color:#1E90FF;
                      border:none;/*去掉边框*/
                      color:#fff;/*字体颜色*/
                      border-radius:3px;" value="  顶部作品   " >


	
</div>




<!---工作室全部作品展示-->
<div>	



  
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
if(GetQueryString("ID")==null){
	window.close()
	alert("参数缺失")
	
}

console.log("页码ID："+GetQueryString("ID"));





			var p;
		//解析工作室全部作品json信息
var gzsh='<?php curl_exec($gzszp);?>';
gzsh = JSON.parse(gzsh);

		
var i=-1;

				
	//定义全部作品下页码函数
				function zhzp(){ 　	
	
		window.location.href="./dy.php?ID=1";


				}
				
				
	//定义全部作品上页码函数
	function zhszp(){ 　	

if(i>=36)
{
	
	if(GetQueryString("ID")=="1")
{
var o=37;
}
if(GetQueryString("ID")=="37")
{
var o=72;
}
if(GetQueryString("ID")=="72")
{
var o=109;
}
if(GetQueryString("ID")=="109")
{
var o=146;
}
if(GetQueryString("ID")=="146")
{
var o=183;
}
if(GetQueryString("ID")=="183")
{
var o=210;
}



	window.location.href="./dy.php?ID="+o;

}	
					i=i+12;
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

	
	

	