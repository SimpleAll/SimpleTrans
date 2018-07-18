<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>简单翻译</title>
  <link rel="stylesheet" href="./transPage.css">
</head>
<body>
  <?php include "./trans.php" ?>
  <div class="wallDiv">
    <div class="fontDiv">
      <div class="titleDiv">简单翻译</div>
      <form method="POST" action="./index.php" id="transForm"></form>
      <div class="textDiv">
        <textarea form="transForm" name="transToText" placeholder="请在此输入需要翻译的文本……" wrap="virtual"><?php if ($tBAns) echo($tBAns); ?></textarea>
        <textarea form="transForm" name="transBackText" placeholder="翻译的结果在这里……" wrap="virtual"><?php if ($tTAns) echo($tTAns); ?></textarea><br/>
      </div>
      <button type="submit" form="transForm" name="transTo">TransTo</button>
      <button type="submit" form="transForm" name="transBack">TransBack</button></br>
      <div class="footerDiv">
        <p>原文有种更好的说法：<?php if ($bTTAns) echo($bTTAns); elseif ($bTBAns) echo($bTBAns);?></p>
      </div>
    </div>
  </div>
</body>
</html>
