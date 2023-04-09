<!DOCTYPE HTML>
<html>
    <head>
        <style>
             .error
              {
                color: #FF0000;
              }
              .content
              {
                 text-align:center;
              }
              .container
              {
                margin-top:28px;               
                
                background-size:100%;
                padding: 100px;
                padding-top:25px;
                background-clip: padding-box;
                height: 420px;
                width: 400px;
                font-size: 15px;
                font-family: 'Times New Roman';

              }
              .margin
              {
                margin-left:458px;
                background-image:url("https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/sites/24554/images/ttese2JPQtGe5j1CLCTb_file.jpg");
                background-attachment: fixed;
                background-size:100%;
              }
              .head
                {
                    position:absolute;
                    margin-top:10px;
                    left:50%;
                    transform: translate(-50%,-50%);
                    font-size:30px;
                    font-weight: bolder;
                    padding:20px;
                    width:610px;
                    text-align: center;
                    color:black;
                 
                }
                .pos
                {
                     padding:70px;
                }

        </style>

    </head>
<body class="margin">
<br><br><br><br>
<h2 class="head" >ＰＥＲＳＯＮＡＬ ＤＥＴＡＩＬＳ</h2>
<?php
$nameErr = $emailErr = $genderErr = $num= $websiteErr=$addresserr = "";
$name = $email = $gender = $address= $numerr = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["name"]))
     {$nameErr = "Name is required";}
   else
     {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed";
       }
     }
  
   if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format";
       }
     }

     if (empty($_POST["num"]))
     {$numerr = "number is required";}
   else
     {
     $num = test_input($_POST["num"]);
     if (!preg_match('/^[0-9]{10}+$/',$num))
       {
       $numerr = "Invalid mobile number format";
       }
     }
    
    
   if (empty($_POST["website"]))
     {$website = "";}
   else
     {
     $website = test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
       {
       $websiteErr = "Invalid URL";
       }
     }

   if (empty($_POST["address"]))
     {$addresserr = "Address is required";}
   else
     {$address = test_input($_POST["address"]);}

   if (empty($_POST["gender"]))
     {$genderErr = "Gender is required";}
   else
     {$gender = test_input($_POST["gender"]);}

  }

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>


<form class="container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

   <p><span class="error">* required field.</span></p>
   𝙉𝘼𝙈𝙀  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="name" size="30" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   𝙀-𝙈𝘼𝙄𝙇  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  <input type="text" name="email" size="30" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   𝙈𝙊𝘽𝙄𝙇𝙀 𝙉𝙐𝙈𝘽𝙀𝙍 &nbsp &nbsp &nbsp  <input type="text" name="num" size="30" value="<?php echo $num;?>">
   <span class="error">* <?php echo $numerr;?></span>
   <br><br>
   𝙒𝙀𝘽𝙎𝙄𝙏𝙀 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="website" size="30" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   𝘼𝘿𝘿𝙍𝙀𝙎𝙎 <textarea name="address" rows="4" cols="49"><?php echo $address;?></textarea>
   <span class="error">*<?php echo $addresserr;?></span>
   <br><br>
   𝙂𝙀𝙉𝘿𝙀𝙍:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">𝙁𝙀𝙈𝘼𝙇𝙀 &nbsp &nbsp &nbsp &nbsp &nbsp
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">𝙈𝘼𝙇𝙀
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br><br><br><br>
   <div class="content">
   <input type="submit" name="submit" value="𝗦𝗨𝗕𝗠𝗜𝗧">
</div>
</form>
</body>
<div class="pos">
<?php  
if(isset($_POST['submit'])) {  
  if($nameErr == "" && $emailErr == "" && $numerr == "" &&  $addresserr=="" && $genderErr == "" && $websiteErr == "" ) 
     {  
      echo "<h2>&nbsp &nbsp You have sucessfully registered $name !!! </h2>";  
      } 
  else
  {  
      echo "<h2> &nbsp &nbsp &nbsp  You didn't filled up the form correctly. </h2>";  
  }  
  }  
?> 
 </div>
</html>