<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Sharing validation client and server side</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/2.8.0r4/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
<link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/base/base.css" type="text/css">
<style type="text/css" media="screen">
.error{color:#c00;border:2px solid #900;padding:2px;-moz-border-radius:3px;font-weight:bold;}
input{width:260px;}
textarea{width:265px;height:10em;}
label{width:10em;float:left;font-weight:bold;}
label span{position:absolute; left:405px;}
form div{padding:10px 0;overflow:hidden;position:relative;}
.bar input{width:auto;}
.bar{background:#e7f6e8;text-align:right;padding:10px;margin:2em 0;}
#ft{font-size:100%;color:#ccc;text-align:right;}
#ft a{color:#999;}
</style>
<script type="text/javascript" src="http://yui.yahooapis.com/combo?3.2.0/build/yui/yui-min.js"></script>
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>Sharing ServerSide Validation</h1></div>
   <div id="bd" role="main">
        <?php include('validate.php'); ?> 
   </div>
   <div id="ft" role="contentinfo"><p>@<a href="http://twitter.com/thinkphp">thinkphp</a></p></div>
</div>
<script type="text/javascript" src="validate.js"></script>
</body>
</html>