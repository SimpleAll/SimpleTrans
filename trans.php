<?php
include './baidu_transapi.php';

$way = $_COOKIE['transWay'];

if ($way == "to") {
  $from = "auto";
  setcookie('transFrom', "auto");
  $to = "zh";
  $transText = $_POST['transToText'];
} else {
  $from = "zh";
  if (isset($_COOKIE['transFrom'])) $to = $_COOKIE['transFrom'];
  else $to = "en";
  $transText = $_POST['transBackText'];
}

/** 过滤输入文本中的换行，百度翻译API不支持翻译换行*/
$transText = str_replace(PHP_EOL, '', $transText);

$transTo = translate($transText, $from, $to);
$from = $transTo["from"];
setcookie('transFrom', $from);
$transToAns = $transTo["trans_result"][0]["dst"];
$transBack = translate($transToAns, $to, $from);
$transBackAns = $transBack["trans_result"][0]["dst"];

if ($transText == "简单翻译") $transBackAns = "由 Samcompu 制作.";
?>
