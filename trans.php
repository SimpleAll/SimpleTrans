<?php
include './baidu_transapi.php';

if (isset($_COOKIE['transFrom'])) $from = $_COOKIE['transFrom'];
else $from = "auto";
if (isset($_COOKIE['transTo'])) $to = $_COOKIE['transTo'];
else $to = "zh";

if (isset($_POST['transTo'])) {
  $from = "auto";
  $to = "zh";
  setcookie('transFrom', "auto");
  setcookie('transTo', "zh");
  $transToText = $_POST['transToText'];

  /** 过滤输入文本中的换行，百度翻译API不支持翻译换行*/
  $transToText = str_replace(PHP_EOL, '', $transToText);

  $transToAns = translate($transToText, $from, $to);
  $tTAns = $transToAns["trans_result"][0]["dst"];
  $from = $transToAns["from"];
  setcookie('transFrom', $from);
  $betterTransBack = translate($tTAns, $to, $from);
  $bTBAns = $betterTransBack["trans_result"][0]["dst"];
}

if (isset($_POST['transBack'])) {
  $transBackText = $_POST['transBackText'];
  $transBackAns = translate($transBackText, $to, $from);
  $tBAns = $transBackAns["trans_result"][0]["dst"];
  $betterTransTo = translate($tBAns, $from, $to);
  $bTTAns = $betterTransTo["trans_result"][0]["dst"];
}
?>
