<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>超市</title>

<link href="css/style11.css" rel="stylesheet" type="text/css" />
</head>
<style>body{background-color:#C8E0E8}</style>
<body>
<div class="body">
  <p></p>
    <div class="search" style="left: 29px; top: 96px;">
    <form class="search_form">
  <input type="text" class="input_text" placeholder="请输入搜索内容">
  <input type="submit" value="搜索" class="input_sub" />
  </form>
</div>

  <div class="daohanglan">
  <ul >
  <li><a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;主页&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="pages/fruit.php">&nbsp;&nbsp;&nbsp;&nbsp;新鲜水果&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="pages/vegetables.php">&nbsp;&nbsp;&nbsp;&nbsp;时令蔬菜&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="pages/tobacco&wine.php">&nbsp;&nbsp;&nbsp;&nbsp;烟酒专区&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="pages/beverages drink.php">&nbsp;&nbsp;&nbsp;&nbsp;饮料专区&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="pages/sport.php">&nbsp;&nbsp;&nbsp;&nbsp;运动专区&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a  href="pages/login1.php">&nbsp;&nbsp;&nbsp;&nbsp;登录&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  
</ul>
  </div>
  <div class="dandl" >
  <div class="discount"><img src="images/poster1.jpg" width="300" height="400" />
    </div>
      <div id="lunbo" >
      <ul id="shidian_img"  >
<li><img src="images/shucai.jpeg" width="590" height="400" />
</li>
<li><img src="images/caomei.jpg" width="590" height="400" />
</li>
<li><img src="images/shuiguo2.jpg" width="590" height="400" /></li>
<li><img src="images/shuiguo1.jpg" width="590" height="400" /></li>
</ul>
      </div>
    </div>
  <script>
  index=0;
function show_img(){
             imgs=document.getElementById("shidian_img").children; 
             for(i =0; i<imgs.length;i++){                                
                      imgs[i].style.display="none";
             
             }                                                           
             imgs[index].style.display ="block"; 
           
             index ++;
             if(index >= imgs.length){
             
                      index=0;
                                 
                      }                             
                         
             }

 timer=setInterval(show_img,1500); 
</script>
<p></p>
<div class="tab">
 
 <table width="900" height="531" cellpadding="4">
 
  <tr>
    <th height="20" colspan="6" align="left" bgcolor="#F3F3F3" scope="row">特惠专区</th>
    </tr>
  <tr>
    <th width="214" height="174" scope="row"><img src="images/sports/basktball.jpg" width="173" height="166" /></th>
    
    <td width="201"><img src="images/sports/table tennis.jpg" width="173" height="166" /></td>
    
    <td width="194"><img src="images/sports/boxing gloves.jpg" width="173" height="166" /></td>
     
  </tr>
  <tr>
    <th height="20" colspan="6" align="left" bgcolor="#F3F3F3" scope="row">新鲜果蔬</th>
    </tr>
  <tr>
    <th height="182" scope="row"><img src="images/fruits/hami melon.jpg" width="173" height="166" /></th>
    
    <td><img src="images/vegetables/broccoli.jpg" width="173" height="166" /></td>
    
    <td><img src="images/fruits/litchi.jpg" width="173" height="166" /></td>
    
  </tr>
    
</table>

</div>

</div>
</body>
</html>