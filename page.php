<?php
$dbconn = pg_connect("host=** port=5432 dbname=** user=** password=**");
$backup = pg_query($dbconn, "SELECT name, nameste, prim FROM public.ispdir;");
$name = array();
$nameste = array();
$prim = array(); 
$i = 0;
while ($row2 = pg_fetch_row($backup)){
	$name[$i] = $row2[0];
	if ($row2[1]=='t'){
		$nameste[$i] = 'green';
	}
	else {
		$nameste[$i] = 'rad';
	}
	$prim[$i]=$row2[2];
	$i++;
}
echo'
{{html clean="false"}}
<style>
 .ogran{
 }
 .status{
  width: 20px;
  margin-left: 20px;
  position: absolute;
  right: 5px;
  top: 5px;
 }
 .avatar2{
  height: 150px;
  border-radius: 27px;
  opacity: 0.80;
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  margin-top: 20px;
 }
 .ramka{
  width: 200px;
  height: 300px;
  display: inline-block;
  cursor: pointer;
  position: relative;
  border-radius: 36px;
  border: 1px solid #000;
  background: linear-gradient(180deg, #02326A 0%, rgba(65, 162, 233, 0.90) 100%);
  box-shadow: 0px 4px 43px 7px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  backdrop-filter: blur(2px);
 }
#dir{
  width: 14%;
}
.text{
  margin: 4px;
  margin-top: 10px;
  color: #FFF;
  color: #F0F0F0;
  text-align: center;
  text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}
 tr{
  text-align: center;
 }
 .ramka .tooltiptext {
   visibility: hidden;
   background-color: black;
   opacity: 0.80;
   color: #fff;
   text-align: center;
   border-radius: 6px;
   padding: 5px 0;
   
   /* Position the tooltip */
   position: absolute;
   z-index: 100;
   top: -5px;
   left: 0px;
 }
 .ramka:hover .tooltiptext {
   visibility: visible;
 }
.ramka:hover{
   opacity: 0.80;
 }
.ramka .tooltiptext p{
   width: 200px;
   word-break: keep-all;
 }
</style>
<table id="table" height="100%" align="center">
<tr>
<td colspan="7">
<div id="dir" class="ramka">
<div class="ogran">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[0].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
</div>
<p class="text"><b>Генеральный директор</b></p>
 <p class="text">'.$name[0].'</p>';
if ($prim[0]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[0].'</p>
 </span>';
echo '
</div>
</td>
</tr>
<tr>
<td colspan="2">
<div class="ramka"  id="tehraz">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[1].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>ЗГД по ГОЗ и научно-техническому развитию</b></p>
 <p class="text">'.$name[1].'</p>';
if ($prim[1]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[1].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[2].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>ЗГД по качеству</b></p>
 <p class="text">'.$name[2].'</p>';
if ($prim[2]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[2].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[3].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>ЗГД по развитию бизнеса</b></p>
 <p class="text">'.$name[3].'</p>';
if ($prim[3]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[3].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[4].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>ЗГД по финансам и экономике</b></p>
 <p class="text">'.$name[4].'</p>';
if ($prim[4]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[4].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[5].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>ЗГД по режиму и безопасности</b></p>
 <p class="text">'.$name[5].'</p>';
 if ($prim[5]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[5].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka"  id="glavinz">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[6].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Главный инженер</b></p>
 <p class="text">'.$name[6].'</p>';
 if ($prim[6]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[6].'</p>
 </span>';
echo '
</div>
</td>
</tr>
<tr>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[7].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Научно исследовательский центр</b></p>
 <p class="text">'.$name[7].'</p>';
 if ($prim[7]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[7].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[8].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Производственно-технический центр</b></p>
 <p class="text">'.$name[8].'</p>';
 if ($prim[8]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[8].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[9].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Отдел технического контроля</b></p>
 <p class="text">'.$name[9].'</p>';
 if ($prim[9]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[9].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[10].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Проектный офис</b></p>
 <p class="text">'.$name[10].'</p>';
 if ($prim[10]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[10].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[11].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Планово-экономический отдел</b></p>
 <p class="text">'.$name[11].'</p>';
if ($prim[11]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[11].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[12].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Отдел комплексной безопасности</b></p>
 <p class="text">'.$name[12].'</p>';
if ($prim[12]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[12].'</p>
 </span>';
echo '
</div>
</td>
<td>
<div class="ramka"  id="uprhoz">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[13].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Управление административно-хозяйственного обеспечения</b></p>
 <p class="text">'.$name[13].'</p>';
 if ($prim[13]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[13].'</p>
 </span>';
echo '
</div>
</td>
</tr>
<tr>
<td>
<div class="ramka">
<img class="status" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/'.$nameste[14].'.png">
 <img class="avatar2" src="**bin/download/%D0%9E%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D0%B8/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B9%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0/WebHome/void.jpg">
 <p class="text"><b>Технический отдел</b></p>
 <p class="text">'.$name[14].'</p>';
if ($prim[14]!='')
echo '
 <span class="tooltiptext">
  <p>'.$prim[14].'</p>
 </span>';
echo '
</div>
</td>
</tr>
</table>
<script>
function widthChange(){
var width = window.innerWidth;
var table = document.getElementById("table");
for(var i=0;i<document.getElementsByClassName("ramka").length;i++){
document.getElementsByClassName("ramka")[i].setAttribute("style", "width:"+width/11+"px");
}
for(var i=0;i<document.getElementsByClassName("avatar2").length;i++){
document.getElementsByClassName("avatar2")[i].setAttribute("style", "width:"+width/13+"px");
document.getElementsByClassName("avatar2")[i].setAttribute("style", "height:"+width/13+"px");
}
}
widthChange();
window.onresize = widthChange;
window.addEventListener("resize", widthChange);
</script>
{{/html}}';
?>