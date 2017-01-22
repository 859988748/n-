<?php
for ($i= 0;$i< 11; $i++){
	if(isset($_POST[$i])){
		if (empty($_POST[$i])){
			setcookie($i, "0", time()+60);
		}else{
			setcookie($i, $_POST[$i], time()+60);
		}
	}else{
        header("location:http://salaymail.applinzi.com");
		exit();
	}
}
$choas = rand(1000,9999);
$str = <<<EOD
<!DOCTYPE html>
<html>
<head>
<title>工资单</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="在线转换，娱乐，工资单，填写工资单，生成器" />
<meta name = "author" value="Philly">
</head>
<body style="background-color:#01567b">
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T6KX7L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6KX7L');</script>
	<h4 style="color:#ffffff">长按或右击图片保存</h4>
	<img src = "fetchImage.png?{$choas}" align="center">
</body>
</html>
EOD;
echo $str;
