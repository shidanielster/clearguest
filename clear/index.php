<html>
<head>
  <title>WiFi clear-guest password QRCode</title>
  <style type="text/css">
    html,body,div{margin:0;padding:0;}
    img,body,html{border:0;}
    h1,h2,h3,h4,h5,h6{font-size:150%;}
  </style>
</head>
<body>
<div style="background: #1359AE; height: 50px">




</div>
<center><h2>WiFi clear-guest password QRCode</h2></center>
<center>
<?php  
    include("qrcode.php");  
    $qr = new qrcode();  
    //bookmark  
    $title = "antdz";  
    $url = "https://webauth-redirect.oracle.com/login.html?";

    $password = trim(shell_exec('cat pass'));
    
    $param = "username=guest&password=".$password."&buttonClicked=4";
    $url = $url.$param;
    $qr->bookmark($title,$url);  
    //.......URL  
    echo "<img src='".$qr->get_link()."'>";  
    //here is the way to output image   
      
    //header("Content-type:image/png");  
    //echo $qr->get_image();  
    //and here is the way to force image download  
    //$file = $qr->get_image();  
    //$qr->download_image($file)  
?>  
</center>
<br/>
<center><?php echo shell_exec('cat pass') ?></center>
</body>
</html>





