<?php
if($_SERVER['REQUEST_METHOD'] == "HEAD"){
    header("location:http://www.baidu.com");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>在线娱乐工资单生成器</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="在线转换，娱乐，工资单，填写工资单，生成器" />
<meta name = "author" value="Philly">
<link href='//fonts.useso.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.useso.com/css?family=Play:700' rel='stylesheet' type='text/css'>
</head>
<body>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T6KX7L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6KX7L');</script>
	<div class="header">
		<h1>发工资啦,想写多少随你填!!</h1>
	</div>
	<div class="content">
		<div class="content2">
			<form action="generate.php" method="post" onsubmit="return validate_form(this)" id="sform">
				<table align="center">
     			<tr>
           <td valign="middle" align="right"><font class="content3">姓名</font></td><td ><input type="text" name="0" ></td>
    			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">出勤天数</font></td><td ><input type="tel" name="1" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">基本工资</font></td><td ><input type="tel" name="2" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">岗位工资</font></td><td ><input type="tel" name="3" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">绩效工资</font></td><td ><input type="tel" name="4" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">补贴</font></td><td ><input type="tel" name="5" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">事假</font></td><td ><input type="tel" name="6" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">扣五险</font></td><td ><input type="tel" name="7" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">扣住房</font></td><td ><input type="tel" name="8" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">扣个税</font></td><td ><input type="tel" name="9" ></td>
     			</tr>
     			<tr>
           <td valign="middle" align="right"><font class="content3">实发金额</font></td><td ><input type="tel" name="10" ></td>
     			</tr>
				</table>
				<input type="submit" value="生成">
			</form>
		</div>
	</div>
	<div class="footer">
		<p>声明:仅供个人娱乐，任何他人因其使用或者填写金额过高有人找借钱而产生的任何不良后果，与本人无关。</p>
		<p>Designed by Philly</p>
		<p>Technical support by Striver</p>
        <br><br><br>
	</div>
<script language="javascript" type="text/javascript">
function validate_form(thisform)
{
 if(!document.getElementById("tanx-a-mm_114491355_13074120_51596137") && !document.getElementById("tanx-a-mm_114491355_13074120_51582707")) 
{ 
    return false;
}
var list=document.getElementById("sform").getElementsByTagName("input");
var value0 = list[0].value;
var value1 = "";
    for (var v=1;v<list.length-1 && list[v];v++){
        value1 += list[v].value + ",";
    }
    dataLayer.push({"name":value0,"num":value1.substring(0,value1.length-1)});
for(var i=0;i<list.length && list[i];i++)
 {
       if(list[i].type=="text")   
       {
           if (list[i].value == null || list[i].value == ""){
               
           }
       }
     if(list[i].type=="tel")   
       {
           if (list[i].value == null || list[i].value == "" || isNaN(list[i].value)){
               
           }
       }
 }
return true;
}
</script>
<script type="text/javascript">
        document.write('<a style="display:none!important" id="tanx-a-mm_114491355_13074120_51596137"></a>');
        tanx_s = document.createElement("script");
        tanx_s.type = "text/javascript";
        tanx_s.charset = "gbk";
        tanx_s.id = "tanx-s-mm_114491355_13074120_51596137";
        tanx_s.async = true;
        tanx_s.src = "http://p.tanx.com/ex?i=mm_114491355_13074120_51596137";
        tanx_h = document.getElementsByTagName("head")[0];
        if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
</script>
<script type="text/javascript">
        document.write('<a style="display:none!important" id="tanx-a-mm_114491355_13074120_51582707"></a>');
        tanx_s = document.createElement("script");
        tanx_s.type = "text/javascript";
        tanx_s.charset = "gbk";
        tanx_s.id = "tanx-s-mm_114491355_13074120_51582707";
        tanx_s.async = true;
        tanx_s.src = "http://ope.tanx.com/xt?i=mm_114491355_13074120_51582707";
        tanx_h = document.getElementsByTagName("head")[0];
        if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
</script>
</body>
</html>