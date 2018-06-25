<?php
$name=$_POST["name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
// $message=nl2br($_POST["message"]);

if (empty($_POST["message"])) {
    echo "<script>alert('建議欄位不可為空'); location.href = 'contact.html';</script>";
} else {
    $message=nl2br($_POST["message"]);
}

echo session_id();
header("Refresh:5; url='index.html'");

$file=fopen("message.txt","a");
fwrite($file,"姓名："."$name".PHP_EOL."性別："."$gender".PHP_EOL."信箱："."$email".PHP_EOL."建議："."$message".PHP_EOL."==========".PHP_EOL);
fclose($file);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet type="text/css" href="css/cssReset.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.customselect.js"></script>
    <title>毛起來找</title>

</head>



<body background="image/bg.png">
    <div class="header">
        <div class="top" id="top">
        <ul>
            <li><input type ="image" src="image/logo.png" onclick="javascript:location.href='index.html'" id="logo" ></input></li>
                <div class="menu">        
                <li><input type ="image" src="image/寵物總覽.png" onclick="javascript:location.href='viewall.html'" id="menulogo" ></input></li>
                <li><input type ="image" src="image/我的收藏.png" onclick="javascript:location.href='collection.html'" id="menulogo" ></input></li>
                <li><input type ="image" src="image/QA.png" onclick="javascript:location.href='QA.html'" id="menulogo" ></input></li>
                <li><input type ="image" src="image/聯絡我們.png" onclick="javascript:location.href='contact.html'" id="menulogo" ></input></li>
                </div>
        </ul></div></div>
    
    <div class="text">
        <p>
            您的資料如下：<br/>
            您的姓名：<?php echo $_POST["name"];?>
            <br/>
            您的性別：<?php echo $_POST["gender"];?>
            <br/>
            您的信箱：<?php echo $_POST["email"];;?>
            <br/>
            寶貴建議：<?php echo nl2br($_POST["message"]);?>
            <br/>
            <br/>
            <br/>
            謝謝您的建議，5秒後將回到首頁。
        
    
        </p>
    </div>
    <div class="logototop">
        <a href="#top"><img src="image/top.png" alt=""></a>
    </div>
</body>
</html>

