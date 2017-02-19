<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>

/*
@font-face {
    font-family: 'HanWangKaiMediumPoln3';
    src: url(wp310-08.ttf);
}
*/

  
@font-face {
    font-family: 'BoDangXingKaiF';
    src: url(bodang-xingkai.ttf);
}
  #header-div {
  	/* border: 1px red solid; */
    background-image: url("header.jpg");
    height: 359px;
    position: relative;
  }
  #fishDB {
    margin-top: 100px;
    margin-left: auto;
    margin-right: auto;
    color: white;
    text-align: center;
  }
  #body-content {
  	/* border: 1px blue solid; */
  }
  #footer-div {
  	/* border: 1px yellow solid; */
    background-image: url("footer.jpg");
    height: 206px;
    text-align: center;
  }
  .structure-div {
    min-width: 300px;
  	max-width: 650px;
    background-color: rgb(214, 179, 114);
    padding-left: 35px;
    padding-right: 35px;
    padding-top: 15px;
    padding-bottom: 15px;
    box-sizing: border-box;
  }
  </style>
</head>
<body>
  <div class="structure-div" id="header-div">
  	<div id="fishDB">開水外界圖書館</div>
  </div>
  <div class="structure-div" id="body-content">
  	您好，<br><br>
  	　　圖書館已經收到 閣下的會員註冊申請，為了驗證 閣下的電郵必需透過以下連結回到 開水外界圖書館。<br><br>
  	想要激活並開始使用您的帳號，請點選以下的連結或複製、貼上到網頁瀏覽器的網址列中。<br><br>
  	<a href="<?php echo $link; ?>"><?php echo $link; ?></a><br><br>
  	如果您沒有提出會員申請，您不需要理會任何事情。您將不會收到來自我們的郵件，這個請求 五 天後將自動失效。<br><br>
    祝一切順心！<br>
    開水外界圖書館 開發團隊 敬上<br>
  </div>
  <div class="structure-div" id="footer-div">
    © 2015 開水外界圖書館
  </div>
</body>

</html>