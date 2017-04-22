<html>
<head>
<title> Kevinbird Meta Search </title>
<link type = "text/css" rel = "stylesheet" href = "bookmark.css">
</head>
<body id = "body">
<?php

$sear = $_REQUEST['search'];
// ------------------------------------For Google-----------------------------------//
// For Google
// header("Content-Type:text/html; charset=big5");//解決亂碼問題 big5->繁體中文 gb2312->簡體中文
// $google_url = "https://www.google.com.tw/";
// $search_title = "search?";
// $search_text = "q=朝逸";// q = 要搜尋的東西
// $search_tag = "&oq=app&aqs=chrome.0.69i59j69i57j0j69i65l3.1342j0j7&sourceid=chrome&es_sm=122&ie=UTF-8";
// $google_search = $search_title.$search_text.$search_tag;
// $google_url = $google_url.$google_search;
// $getcontent_google= file_get_contents($google_url); 

// echo $getcontent_google;

echo "<div id = \"wrapper\">";
echo "<h3>Your Key word is "."<font id = \"f\">".$sear."</font>".":<br> </h3>";
echo "</div>";
// ------------------------------------For Bing-----------------------------------//
//For Bing
header("Content-Type:text/html; charset=utf-8");//解決亂碼問題 big5->繁體中文 gb2312->簡體中文
$bing_url = "http://www.bing.com/";
$search_title = "search?";
$search_text = "q=";// q = 要搜尋的東西
$search_tag = "&go=提交&qs=n&form=QBLH&pq=kevin&sc=8-5&sp=-1&sk=&cvid=60ab34d2d4574f0cb6033704ca73b753";
$bing_search = $search_title.$search_text.$sear.$search_tag;
$bing_url = $bing_url.$bing_search;
$getcontent_bing= file_get_contents($bing_url); 

echo "<div id = \"input\">";
echo "For Bing search:<br>";

preg_match("|<h3>(.*)</h3>|isU",$getcontent_bing, $match);
echo $match[1]."<br>";
preg_match("|<p>(.*)</p>|isU",$getcontent_bing, $match);
echo $match[1]."<br>";

echo "</div>";

echo "<br><hr>";
// ------------------------------------For Yahoo-----------------------------------//
//For Yahoo
header("Content-Type:text/html; charset=utf-8");//解決亂碼問題 big5->繁體中文 gb2312->簡體中文
$yahoo_url = "https://tw.search.yahoo.com/";
$search_title = "search?";
$search_text = "p=";// q = 要搜尋的東西
$search_tag = "&fr=yfp&ei=utf-8&v=0";
$yahoo_search = $search_title.$search_text.$sear.$search_tag;
$yahoo_url = $yahoo_url.$yahoo_search;
$getcontent_yahoo= file_get_contents($yahoo_url); 

echo "<div id = \"input\">";
echo "For Yahoo search:<br>";
preg_match("|<h3>(.*)</h3>|isU",$getcontent_yahoo, $match_y);
echo $match_y[1]."<br>";
//preg_match_all("|<[^>]>(.*)</[^>]+>|U",$getcontent_yahoo, $match_y);
preg_match("|<(div)\s(class=\"abstr\")>(.*)<(/div)>|U",$getcontent_yahoo, $match_y);
echo $match_y[0]."<br>";
//print_r($match_y);

echo "</div>";
?>
</body>
</html>