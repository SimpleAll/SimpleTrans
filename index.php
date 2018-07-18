<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>简单翻译</title>
  <link rel="stylesheet" href="./transPage.css">
  <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
  <script src="./transPage.js"></script>
</head>
<body style="<?php echo("background-image: url('./backImg/".rand(0, 1).".jpg')"); ?>">
  <?php include "./trans.php" ?>
  <div class="wallDiv">
    <div class="fontDiv">
      <div class="titleDiv">简单翻译</div>

      <form method="POST" action="./index.php" id="transForm"></form>

      <div class="textDiv">
        <textarea form="transForm" name="transToText" placeholder="请在此输入需要翻译的文本……" wrap="virtual"><?php if ($way == "to") echo($transText); else echo($transToAns); ?></textarea>
        <textarea form="transForm" name="transBackText" placeholder="翻译的结果在这里……" wrap="virtual"><?php if ($way == "back") echo($transText); else echo($transToAns); ?></textarea><br/>
      </div>
      <div class="buttonDiv">
        <div class="clickDiv" id="transToButton" onclick="transTo()">TransTo</div>
        <div class="clickDiv" id="transBackButton" onclick="transBack()">TransBack</div>
      </div>

      <div class="footerDiv">
        <p>原文有种更好的说法：<?php echo($transBackAns);?></p>
      </div>

    </div>
  </div>
</body>
</html>
