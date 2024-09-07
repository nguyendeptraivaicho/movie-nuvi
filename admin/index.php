<?php
define('ROOT', dirname(__FILE__) );//Thu muc chứa file index);
include "include/function.php";
include "classes/db.class.php";
include "classes/movie.class.php";
include "classes/tintuc.class.php";
include "classes/user.class.php";
include "classes/loai.class.php";
include "classes/quocgia.class.php";
include "classes/loaiphim.class.php";
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION["thongtindangnhap"]))
{
		header("location:login.php");
		exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/clockp.js"></script>
<script type="text/javascript" src="js/clockh.js"></script> 
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $_SESSION["thongtindangnhap"]["hoTen"];?>,  <a href="logout.php" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div><!--end of header -->  
    
    <div class="content">
                    
    	<div class="center_content"> 
    			<div class="left_content">
            			<div class="sidebarmenu">
            
               					<a class="menuitem" href="index.php?mod=user">Quản lý user</a>
                				<a class="menuitem" href="index.php?mod=tintuc" >Quản lý tin tức</a>
                                <a class="menuitem" href="index.php?mod=movie">Quản lý phim</a>
                				<!--<a class="menuitem" href="index.php?mod=quangcao">Quản lý quảng cáo</a>-->
               					<!--<a class="menuitem" href="index.php?mod=binhluan">Quản lý bình luận</a>-->
            			</div>
              
    			</div>  <!--end of left_content -->  
    
   				 <div class="right_content">                        
						<?php include"mod.php";?>
      
     		</div><!-- end of right content-->
                        
  		</div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of content-->
	
    <div class="footer">
    
    	<div class="left_footer">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
    	<div class="right_footer"><a href="http://indeziner.com"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div><!--end of footer -->  

</div>
</body>
</html>