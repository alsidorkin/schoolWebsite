
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Безымянная страница</title>
<meta name="generator" content="WYSIWYG Web Builder 15 - http://www.wysiwygwebbuilder.com">
<script src="jscookmenu.min.js"></script>
<link href="css/Мододша_школа.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/addTeacher.css" rel="stylesheet" >
<link href="css/scoolbooy-guide.css" rel="stylesheet">
<link href="css/class-guide.css" rel="stylesheet">
<link href="css/teacher-guide.css" rel="stylesheet">
<link href="../css/library-out.css" rel="stylesheet">
<link href="../css/library_fund.css" rel="stylesheet">
<link href="../css/library-add-book.css" rel="stylesheet">
<link href="../css/library-in.css" rel="stylesheet">
<link href="css/add-scoolbooy.css" rel="stylesheet">

</head>
<body>
<div id="PageHeader1" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:108px;z-index:4;">
<div id="wb_TextArt1" style="position:absolute;left:167px;top:0px;width:637px;height:60px;z-index:0;">
<img src="images/img0001.png" id="TextArt1" 
alt="&#1055;&#1086;&#1095;&#1072;&#1090;&#1082;&#1086;&#1074;&#1072; 
&#1096;&#1082;&#1086;&#1083;&#1072;" title="&#1055;&#1086;&#1095;&#1072;&#1090;&#1082;&#1086;
&#1074;&#1072; &#1096;&#1082;&#1086;&#1083;&#1072;" style="width:637px;height:60px;"></div>
<div id="wb_LoginName1" style="position:absolute;left:904px;top:20px;width:158px;height:20px;z-index:1;">
<span id="LoginName1">Welcome <?php
if (isset($_COOKIE['user']))
{
   echo $_COOKIE['user'];
}
else
{
   echo 'Not logged in';
}
?>!<a id="Button1" href="login.php" style="position:absolute;left:150px;top:0px;width:157px;height:20px;z-index:1;">авторизация</a>
<a id="Button1" href="register.php" style="position:absolute;left:320px;top:0px;width:157px;height:20px;z-index:1;">регистрация</a>
<a id="" href="login.php?coock=update" style="position:absolute;left:520px;top:0px;font-size:20px;color:red;">выход</a>

</span>
</div>
</div>
<div id="wb_MenuBar1" style="position:absolute;left:342px;top:76px;width:311px;height:40px;z-index:1003;">
<div id="MenuBar1">
<ul style="display:none;">
<li><span></span><a href="./index.php" target="_self">&#1043;&#1086;&#1083;&#1086;&#1074;&#1085;&#1072;</a>
</li>
<li><span></span><span>&#1040;&#1076;&#1084;&#1110;&#1085;&#1110;&#1089;&#1090;&#1088;&#1091;&#1074;&#1072;&#1085;&#1085;&#1103;</span>
<ul>
<li><span></span><a href="./addTeacher.php" target="_self">&#1044;&#1086;&#1076;&#1072;&#1090;&#1080;&nbsp;&#1074;&#1095;&#1080;&#1090;&#1077;&#1083;&#1103;&#1082;&#1083;&#1072;&#1089;</a></li>
<li><span></span><a href="./add-scoolbooy.php" target="_self">&#1055;&#1088;&#1080;&#1081;&#1085;&#1103;&#1090;&#1080;&nbsp;&#1091;&#1095;&#1085;&#1103;</a></li>
<li><span></span><span><a href="./school_graduate.php?action=update" target="_self">&#1050;&#1110;&#1085;&#1077;&#1094;&#1100;&nbsp;&#1085;&#1072;&#1074;&#1095;&#1072;&#1083;&#1100;&#1085;&#1086;&#1075;&#1086;&nbsp;&#1088;&#1086;&#1082;&#1091;</a></span></li>
</ul>
</li>
<li><span></span><span>&#1044;&#1086;&#1074;&#1110;&#1076;&#1085;&#1080;&#1082;&#1080;</span>
<ul>
<li><span></span><a href="./teacher-guide.php" target="_self">&#1042;&#1095;&#1080;&#1090;&#1077;&#1083;&#1110;&#1074;</a>
</li>
<li><span></span><a href="./schoolboy-guide.php" target="_self">&#1059;&#1095;&#1085;&#1103;</a>
</li>
<li><span></span><a href="./class-guide.php" target="_self">&#1050;&#1083;&#1072;&#1089;&#1091;</a>
</li>
</ul>
</li>
<li><span></span><span>&#1041;&#1110;&#1073;&#1083;&#1110;&#1086;&#1090;&#1077;&#1082;&#1072;</span>
<ul>
<li><span></span><a href="library-add-book.php" target="_self">&#1044;&#1086;&#1076;&#1072;&#1090;&#1080;&nbsp;&#1082;&#1085;&#1080;&#1075;&#1091;</a>
</li>
<li><span></span><a href="library-out.php" target="_self">&#1042;&#1080;&#1076;&#1072;&#1090;&#1080;&nbsp;&#1082;&#1085;&#1080;&#1075;&#1091;</a>
</li>
<li><span></span><a href="library-in.php" target="_self">&#1055;&#1086;&#1074;&#1077;&#1088;&#1085;&#1091;&#1090;&#1080;&nbsp;&#1082;&#1085;&#1080;&#1075;&#1091;</a>
</li>
<li><span></span><a href="library_fund.php" target="_self">&#1041;&#105;&#1073;&#1083;&#105;&#1086;&#1090;&#1077;&#1095;&#1085;&#1080;&#1081;&#32;&#1092;&#1086;&#1085;&#1076;</a>
</li>
</ul>
</li>
</ul>
</div>
<script>
var cmMenuBar1 =
{
   mainFolderLeft: '',
   mainFolderRight: '',
   mainItemLeft: '',
   mainItemRight: '',
   folderLeft: '',
   folderRight: '',
   itemLeft: '',
   itemRight: '',
   mainSpacing: 0,
   subSpacing: 0,
   delay: 100,
   offsetHMainAdjust: [0, 0],
   offsetSubAdjust: [0, 0]
};
var cmMenuBar1HSplit = [_cmNoClick, '<td class="MenuBar1MenuSplitLeft"><div></div></td>' +
                                       '<td class="MenuBar1MenuSplitText"><div></div></td>' +
                                       '<td class="MenuBar1MenuSplitRight"><div></div></td>'];
var cmMenuBar1MainVSplit = [_cmNoClick, '<div><table width="15" cellspacing="0"><tr><td class="MenuBar1HorizontalSplit">|</td></tr></table></div>'];
var cmMenuBar1MainHSplit = [_cmNoClick, '<td colspan="3" class="MenuBar1MainSplitText"><div></div></td>'];
cmDrawFromText('MenuBar1', 'hbr', cmMenuBar1, 'MenuBar1');
</script>
</div>
</body>
</html>
