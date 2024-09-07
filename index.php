<?php
define('ROOT', dirname(__FILE__) );//Thu muc chứa file index);
include "include/function.php";
include "check.php";
require 'SimpleTut/Connections/Connections.php';
include "class/db.class.php";
include "class/movie.class.php";
include "class/user.class.php";
include "class/userphim.class.php";	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Trailer Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="icon" type="image/jpg" href="Picture/Picture Web Anime/Title Web.jpg" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>



<!-- START PAGE SOURCE -->
<div id="shell">
	<!--<div style="font-size:25px;width:270px;margin-top:5px;"><a style="color:#00F" href="Register-Login.php">Đăng ký/Đăng nhập</a></div>-->
  <div id="header">
  <h1 style="position:absolute;top:20px;left:0;">
  <div>
  	 <!--<img width="50px" height="50px"  src="Picture/souma.jpg"  />-->
     <a href="index.php"><p style="float:left;width:100px;">Hoài,Bảo's Website</p></a>
  </div>
  </h1>
    <div id="menu">
      <ul>
        <li><a class="active" href="index.php">TRANG CHU</a></li>
        <li><a href="#">THỂ LOẠI</a>
        	<ul class="sub-menu">
            	<li style="width:200px;"><a href="index.php?mod=action">Phim hành động</a></li>
                <li style="width:200px;"><a href="index.php?mod=romance">Phim Tình cảm - Lãng mạng</a></li>
                <li style="width:200px;"><a href="index.php?mod=comedy">Phim hài hước</a></li>
                <li style="width:200px;"><a href="index.php?mod=horror">Phim kinh dị</a></li>
               
            </ul>
        </li>
        <li><a href="#">QUỐC GIA</a>
        	<ul class="sub-menu">
            	<li style="width:200px;"><a href="index.php?mod=my">Mỹ</a></li>
                <li style="width:200px;"><a href="index.php?mod=hanquoc">Hàn Quốc</a></li>
                <li style="width:200px;"><a href="index.php?mod=vietnam">Việt Nam</a></li>
                <li style="width:200px;"><a href="index.php?mod=trungquoc">Trung Quốc</a></li>
                <li style="width:200px;"><a href="index.php?mod=nhatban">Nhật Bản</a></li>
            </ul>
        </li>
        <li><a href="index.php?mod=phimle">PHIM LẺ</a></li>
        <li><a href="index.php?mod=phimbo">PHIM BỘ</a></li>
        <?php
        if(check())
		{
			$iduser=$_SESSION["UserID"];
			echo 'Xin chào'; 
			echo "&nbsp";
			echo  $_SESSION["Username"];
			echo "&nbsp";
			echo "<li><a href='Logout.php'> ĐĂNG XUẤT </a><a href='UpdateAccount.php'> THAY ĐỔI </br></a><a href='index.php?mod=yeuthich&id=$iduser'> YÊU THÍCH </a></li>";
			
		}
		else {
        ?>
        <li><a style="color:#F00" href="Login.php">ĐĂNG NHẬP</a></li>
      	<?php
		}
		?>
      </ul>
    </div>
    <div id="sub-navigation">
      <ul>
        <li><a style="color:#d91d2a" href="index.php?mod=all">TẤT CẢ</a></li>
        <!--<li><a href="LATEST ANIME.html">PHIM MỚI</a></li>-->
        <li><a href="index.php?mod=news">TIN TỨC</a></li>
        <li><a style="color::#d91d2a" href="admin/index.php">QUẢN LÝ PHIM</a></li>
        <!--<li><a href="MOST COMMENTED.html">NHIỀU COMMENT</a></li>-->
      </ul>
      <div  id="search">
        <form action="index.php?mod=search" method="post" accept-charset="utf-8">
          <label for="search-field">TÌM KIẾM</label>
          <input type="text" name="search field" value="Tìm kiếm ở đây!" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button"  />
        </form>
      </div>
    </div>
  </div>
  <div id="main">
    <div id="content">
	<div class="box">
	  <?php include "include/random.php" ?>
      <div class="box-all-right">
      <div class="qwe" ><p><img width="23px" height="23px" src="Picture/star.png" />Phim hot nhất trong tuần</p></div>
      <div class="box-right">
            	<?php include "trangchu/phimhot.php" ?>
  </div></div>
     <?php
			include "mod.php";	
	   ?>
       <div class="cl">&nbsp;</div>
       </div>
    <div id="news">
      <div class="head">
        <h3>TIN TỨC</h3>
        <p class="text-right"><a href="index.php?mod=news">See all</a></p>
      </div>
      <div class="content">
     <!-- -------------------------- Tin tức ----------------------------------->
      <?php
	  	include "Connect Database.php";
		$sqli="SELECT * FROM `news` order by news.idtintuc DESC limit 0,3";
		$result = mysqli_query($connect,$sqli);

		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
	  ?>
        <p class="date"><?php echo $row["date"] ?></p>
        <h4><?php echo $row["title"] ?></h4>
        <p><?php echo $row["summary"] ?></p>
        <a href="index.php?mod=news&ac=detailtintuc&id=<?php echo $row['idtintuc']; ?>">Read more</a> </div>
      <?php 
		}
		?>
    </div>
      <!-- --------------------------End Tin tức ----------------------------------->
    <div id="coming">
      <div class="head">
        <h3>PHIM MỚI UP<strong>!</strong></h3>
        <p class="text-right"><a href="index.php?mod=phimmoi">See all</a></p>
      </div>
      
       <?php
	  	include "Connect Database.php";
		$sqli="SELECT * FROM `phim` order by phim.id DESC limit 0,2";
		$result = mysqli_query($connect,$sqli);

		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
	  ?>
      <div class="content">
        <h4><?php echo $row["namephim"] ?></h4>
        <a href="index.php?mod=phimmoi&ac=detailphimmoi&id=<?php echo $row['id']; ?>"><img src="admin/module/movie/images/<?php echo $row["image"] ?>" alt="" /></a>
        <p><?php echo $row["summary"] ?> </p>
        <a href="index.php?mod=phimmoi&ac=detailphimmoi&id=<?php echo $row['id']; ?>">Read more</a> </div>
      <div class="cl">&nbsp;</div>
      <?php
		}
	  ?>

  </div>
</div>
<!-- END PAGE SOURCE -->
<!------------------------------------------ Quảng Cáo góc phải ---------------------------------->
<!--<script type="text/javascript">
function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Xem Quảng Cáo</a>';
    }
    }
</script>
<style>
.float-ck { position: fixed; bottom: 0px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_right {border: 1px solid #01AEF0;}
#hide_float_right {text-align:right; font-size: 11px;}
#hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<div class="float-ck" style="right: 0px" >
<div id="hide_float_right">
<a href="javascript:hide_float_right()">Tắt Quảng Cáo [X]</a></div>
<div id="float_content_right">
 
<a href="http://dn.choi.vn/" target="_blank"><img src="css/img/dragon-nest-ve-viet-nam-se-hoa-giai-loi-nguyen-khung-khiep-nhat-cua-lang-game-viet.jpg" title="138 Asia Casino" width="300" height="250" /></a>
 
</div>
</div>
<!---------------------------------Quảng Cáo trượt 2 bên------------------------------------------------->
<div id="divAdRight" style="DISPLAY: none; POSITION: absolute; TOP: 0px">     

<a href="http://fpt.arena.edu.vn/"><img src="css/img/fptarena1.png" width="125" /></a>

</div>     

<div id="divAdLeft" style="DISPLAY: none; POSITION: absolute; TOP: 0px">     

<a href="http://fpt.arena.edu.vn/"><img src="css/img/fptarena1.png" width="125" /></a>     

</div>
  

<script>     

    function FloatTopDiv()     

    {     

        startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;     

        startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;     

        var d = document;     

        function ml(id)     

        {     

            var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];     

            el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};     

            el.x = startRX;     

            el.y = startRY;     

            return el;     

        }     

        function m2(id)     

        {     

            var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];    

            e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};     

            e2.x = startLX;     

            e2.y = startLY;     

            return e2;     

        }     

        window.stayTopLeft=function()     

        {     

            if (document.documentElement && document.documentElement.scrollTop)     

                var pY =  document.documentElement.scrollTop;     

            else if (document.body)     

                var pY =  document.body.scrollTop;     

             if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else  {startLY = TopAdjust;startRY = TopAdjust;};     

            ftlObj.y += (pY+startRY-ftlObj.y)/16;     

            ftlObj.sP(ftlObj.x, ftlObj.y);     

            ftlObj2.y += (pY+startLY-ftlObj2.y)/16;     

            ftlObj2.sP(ftlObj2.x, ftlObj2.y);     

            setTimeout("stayTopLeft()", 1);     

        }     

        ftlObj = ml("divAdRight");     

        //stayTopLeft();     

        ftlObj2 = m2("divAdLeft");     

        stayTopLeft();     

    }     

    function ShowAdDiv()     

    {     

        var objAdDivRight = document.getElementById("divAdRight");     

        var objAdDivLeft = document.getElementById("divAdLeft");       

        if (document.body.clientWidth < 1000)     

        {     

            objAdDivRight.style.display = "none";     

            objAdDivLeft.style.display = "none";     

        }     

        else     

        {     

            objAdDivRight.style.display = "block";     

            objAdDivLeft.style.display = "block";     

            FloatTopDiv();     

        }     

    } 

</script>     

<script>     

document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");     

</script>

<!-----------------------------------Tuyết rơi --------------------------------------->
<script type="text/javascript">

/******************************************
* Snow Effect Script- By Altan d.o.o. (http://www.altan.hr/snow/index.html)
* Visit Dynamic Drive DHTML code library (http://www.dynamicdrive.com/) for full source code
* Last updated Nov 9th, 05' by DD. This notice must stay intact for use
******************************************/
  function openwindow(){
window.open("autumn_effect.htm","","width=350,height=500")
}

  //Configure below to change URL path to the snow image
  var snowsrc="Picture/snow3.gif"
  // Configure below to change number of snow to render
  var no = 15;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = 0;
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";

///////////Stop Config//////////////////////////////////

  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

	function iecompattest(){
	return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
	}

  var dx, xp, yp;    // coordinate and position variables
  var am, stx, sty;  // amplitude and step variables
  var i, doc_width = 800, doc_height = 600; 
  
  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = self.innerHeight;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = iecompattest().clientHeight;
  }

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("dynamicdrive.com")!=-1)? "snow.gif" : snowsrc
  for (i = 0; i < no; ++ i) {  
    dx[i] = 0;                        // set coordinate variables
    xp[i] = Math.random()*(doc_width-50);  // set position variables
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;         // set amplitude variables
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();     // set step variables
		if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://dynamicdrive.com\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
    }
  }

  function snowIE_NS6() {  // IE and NS6 main animation function
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
		doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
	if (snowdistance=="windowheight"){
		doc_height = window.innerHeight || iecompattest().clientHeight
	}
	else{
		doc_height = iecompattest().scrollHeight
	}
    for (i = 0; i < no; ++ i) {  // iterate for every dot
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
    }
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }

	function hidesnow(){
		if (window.snowtimer) clearTimeout(snowtimer)
		for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
	}
		

if (ie4up||ns6up){
    snowIE_NS6();
		if (hidesnowtime>0)
		setTimeout("hidesnow()", hidesnowtime*1000)
		}

</script>

</body>
</html>