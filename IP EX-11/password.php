<!DOCTYPE HTML>  
<html>
<head>
<style>
               .bg
                    {
                         background-image:url("https://www.controls-group.com/uploads/media/default/0001/01/8d93f622a0b4275473f5c623aaa9617302f84638.jpeg");
                         background-size:100%;
                         background-attachment:fixed;
                         padding: 25%;
                    }
               .container 
                    {
                    padding-left: 12px;
                    padding-right:12px;
                    text-align:center;
                    }
</style>
</head>
<body class="bg" >
<div class="container">
     <h2> ＵＳＥＲ'Ｓ ＰＡＳＳＷＯＲＤ ＶＡＬＩＤＡＴＩＯＮ</h2>
     <form action= "password.php" method="post">
           ＵＳＥＲ ＮＡＭＥ <input type="text" name="uname"><br><br>
           ＰＡＳＳＷＯＲＤ <input type="password" name="upw"><br><br>
          <input type="submit">
          <br><br><br>
     </form>
     <?php
          $name=$_REQUEST['uname'];
          $pw=$_REQUEST['upw'];
          $servername="127.0.0.1";
          $username="root";
          $password="";
          $database='lab';
          $conn=new mysqli($servername,$username,$password,$database);
          if(strlen($name)==0 && strlen($pw)==0)
               {
                    echo "Enter username and password";
               }
          else if(strlen($pw)<8)
                echo "Password must be contain more than 8 characters";
          if(strlen($pw)>=8 && strlen($name)>0)
               {
               $sql="insert into user values('$name','$pw')";
               if ($conn->query($sql) === TRUE) 
               {
                    echo  "$name's Records are Successfully Created!!! you have a storng password!!!";
               }
               }
          $conn->close();
     ?>
</div>
</body>
</html>
