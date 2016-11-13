<html>
<?php include ("./top-index.html"); ?> 


<center>
<a href=comic1.php><img src=uno.gif border=0></a><font color=white>....</font>

<a href=comic631.php><img src=merman.gif border=0></a><BR>
<BR>

<span class="rss-content">

<img src=http://www.inhuman-comic.com/manga632.png border=1 width=650><BR>
<B>> <a href=http://www.inhuman-comic.com/manga632-hires.png>hi res page</a> <</b>

</span>



<BR>
<font color=white>....</font><a href=comic1.php><img src=uno.gif border=0></a><font color=white>....</font>


<a href=comic631.php><img src=merman.gif border=0></a><BR>


<BR>


<center>
<table width=98%><tr>
<td width=12><img src=clever.gif></td><td align=bottom><font size=1 face=verdana>
<B>632</b><BR>
<a href=comic631.php>631</a><BR>
<a href=comic630.php>630</a><BR>
<a href=comic629.php>629</a>


<BR>
<a href=archives.php><img src=woimy.gif border=0></a><BR>




</td><td width=10></td>

<td valign=top width=600><BR>
<font size=2 face=verdana>
<font size=1 face=verdana>     <B>[Bonus Comics]</b><BR>
<a href=mishaps22.php><img src=mishapstiny.gif width=48 height=120 border=1 alt="Unintentional Mishaps"></a>

 <a href=fairytale15.php><img src=fairytale01.gif width=48 height=120 border=1 alt="Fairy Tale"></a>

<a href=booty1.php><img src=booty-t.png border=1 height=120 width=48 alt="No Booty Calls -Finished-"></a>
 
<a href=cemetery1.php><img src=cemetery-t.png border=1 height=120 width=48 alt="Cemetery -Finished-"></a> 
<a href=warb1.php><img src=buddies-t.png border=1 height=120 width=48 alt="War Buddies -Finished-"></a> 

<a href=jetstory1.php><img src=jets-t.png border=1 height=120 width=48 alt="jet's story -Finished-"></a>




</td><td><a href=http://patreon.com/notfun><img src=patreon.png border=0 alt="Support Inhuman on patreon! Get cool swag!"></a><BR></td><td valign=top>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="8DCMCZN9U4DRA"><input type="image" src="http://inhuman-comic.com/greytips.png" border="0" width=151 height=167 name="submit" alt="Donate via paypal to support the comic!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"><font size=1><a href=http://www.patreon.com/notfun>...Or become a patron!</a></font></form></a></b></td></tr>

<!-- Project Wonderful Ad Box Loader -->
<script type="text/javascript">
   (function(){function pw_load(){
      if(arguments.callee.z)return;else arguments.callee.z=true;
      var d=document;var s=d.createElement('script');
      var x=d.getElementsByTagName('script')[0];
      s.type='text/javascript';s.async=true;
      s.src='//www.projectwonderful.com/pwa.js';
      x.parentNode.insertBefore(s,x);}
   if (window.attachEvent){
    window.attachEvent('DOMContentLoaded',pw_load);
    window.attachEvent('onload',pw_load);}
   else{
    window.addEventListener('DOMContentLoaded',pw_load,false);
    window.addEventListener('load',pw_load,false);}})();
</script>
<!-- End Project Wonderful Ad Box Loader -->

</table>
</table>

</center>



</td><td bgcolor=white></td>
</tr><tr>
<td></td>
<td width=24 height=24 background=bl.gif></td>
<td bgcolor=white width=681></td>
<td width=24 height=24 background=br.gif></td></tr>
</table>
</table>


 

<P>
<!---let's include some includes baby--->
<!---opening the head to put in the script for scrollbar--->
<head>
<style type="text/css"> 
 
#journal {
	top			: 10px;
	left		: 10px;
	width		: 400px;
	height		: 250px;
	background	: #fff;
	overflow	: hidden;
	border		: 0px solid #666;
}
 
#entries {
	position	: relative;
	width		: 390px;
	left		: 5px;
}
 
p {
	font		: normal 10px/14px verdana,helevetica,san-serif;
}
 
#scrollbar {
	left		: 515px;
	top			: 10px;
	height		: 250px;
	width		: 15px;
	border		: 1px solid #666;
	overflow	: hidden;
}
 
#scroller {
	position	: relative;
	top			: -1px;
	width		: 15px;
	background	: #AAA;
	border-top	: 1px solid #666;
	border-bottom	: 1px solid #666;
}
 
</style>
<script type="text/javascript" src="dom-drag.js"></script>
<style type="text/css">div.squish img{ max-width:390px; width: expression( width > 389 ? "390px" : "auto" );  }     </style> 
 </head>
<!---there. head closed, it should work--->

<script type="text/javascript"> 
 
//We wrap all the code in an object so that it doesn't interfere with any other code
var scroller = {
  init:   function() {
 
    //collect the variables
    scroller.docH = document.getElementById("entries").offsetHeight;
    scroller.contH = document.getElementById("journal").offsetHeight;
    scroller.scrollAreaH = document.getElementById("scrollbar").offsetHeight;
      
    //calculate height of scroller and resize the scroller div
    //(however, we make sure that it isn't to small for long pages)
    scroller.scrollH = (scroller.contH * scroller.scrollAreaH) / scroller.docH;
    //if(scroller.scrollH < 15) scroller.scrollH = 15;
    document.getElementById("scroller").style.height = Math.round(scroller.scrollH) + "px";
    
    //what is the effective scroll distance once the scoller's height has been taken into account
    scroller.scrollDist = Math.round(scroller.scrollAreaH-scroller.scrollH);
    
    //make the scroller div draggable
    Drag.init(document.getElementById("scroller"),null,0,0,-1,scroller.scrollDist);
    
    //add ondrag function
    document.getElementById("scroller").onDrag = function (x,y) {
      var scrollY = parseInt(document.getElementById("scroller").style.top);
      var docY = 0 - (scrollY * (scroller.docH - scroller.contH) / scroller.scrollDist);
      document.getElementById("entries").style.top = docY + "px";
    }
  }
}
 
onload = scroller.init;
</script> 




<!--- finally, the journal table and code --->

<table width=800 cellspacing="0" cellpadding="0" border=0 leftmargin=0 rightmargin=0 MARGINWIDTH=0 MARGINHEIGHT=0 topmargin="0"><tr><td width=50></td><td width=24 height=24 background=tl.gif></td><td bgcolor=white width=702></td><td width=24 height=24 background=tr.gif></td></tr>
<tr>
<td width=50></td><td bgcolor=white></td><td valign=top bgcolor=white>



<table><tr><td valign=top>

 <font size=2 face=verdana>
<B><font color=white>............</font><img src=blogpix.gif width=96 height=34>
<table><tr>
<td><img src=sideworm.gif width=44 height=124></td>

<td valign=top width=400>
<div id="journal">
<div id="entries">
<?php
$XMLFILE = "http://not-fun.dreamwidth.org/data/rss";
$TEMPLATE = "ljtemplate.html";
$MAXITEMS = "1";
include("./rss2html.php");
?>



</div>
</div>
</td><td valign=top width=10>
<div id="scrollbar">
<div id="scroller"></div></div>
</td></tr></table>
<!-- Project Wonderful Ad Box Code -->
<div id="pw_adbox_58941_2_0"></div>
<!-- End Project Wonderful Ad Box Code -->
</td><td width=40></td><td valign=top>


<center><BR>
<a href=http://twitter.com/inhuman_draw><img src=http://inhuman-comic.com/twitter.png border=0></a><font color=white> <a href=http://not-fun.tumblr.com><img src=http://inhuman-comic.com/tumblr.png border=0></a> <a href=http://facebook.com/inhumancomic><img src=face.png border=0></a> </center></font><Br>








</td></tr></table>

   


</td><td bgcolor=white></td>
</tr><tr>
<td width=50></td><td width=24 height=24 background=bl.gif></td><td bgcolor=white></td><td width=24 height=24 background=br.gif></td>
</tr></table>

<!---- we're done this silly game ----!> 


<P>
<center>

<table><tr><td valign=top>
<Center><font size=1 face=verdana> All writing, characters, webdesign and artwork are (c) <a href=contact.php><font color=003366>H. Carlian</font></a> 1997-2016 
<br>Fan works are (c) their respective authors, creators and artists.<BR>
All rights reserved, all <a href=shame.php><font color=black>thieves</a> enjoy a dose of karma.</td><td valign=top>
<a href="http://t.extreme-dm.com/?login=kyotoshi"
target="_top"><img src="http://t1.extreme-dm.com/i.gif"
name="EXim" border="0" height="38" width="41"
alt="eXTReMe Tracker"></img></a>
<script type="text/javascript" language="javascript1.2"><!--
EXs=screen;EXw=EXs.width;navigator.appName!="Netscape"?
EXb=EXs.colorDepth:EXb=EXs.pixelDepth;//-->
</script><script type="text/javascript"><!--
var EXlogin='kyotoshi' // Login
var EXvsrv='s9' // VServer
navigator.javaEnabled()==1?EXjv="y":EXjv="n";
EXd=document;EXw?"":EXw="na";EXb?"":EXb="na";
EXd.write("<img src=http://e0.extreme-dm.com",
"/"+EXvsrv+".g?login="+EXlogin+"&amp;",
"jv="+EXjv+"&amp;j=y&amp;srw="+EXw+"&amp;srb="+EXb+"&amp;",
"l="+escape(EXd.referrer)+" height=1 width=1>");//-->
</script><noscript><img height="1" width="1" alt=""
src="http://e0.extreme-dm.com/s9.g?login=kyotoshi&amp;j=n&amp;jv=n"/>
</noscript>
</td><td>
<a href="http://english-46794134376.spampoison.com"><img src="piz.GIF" border="0" width="80" height="15"></a><BR>







</td></tr></table>   

