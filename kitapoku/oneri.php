<?php
include("header.php");
$link=mysqli_connect("localhost","root","","ko");
$link->set_charset("utf8");

if (mysqli_connect_error())
{
  echo mysql_connect_error();
}


if(isset($_POST["submit"]))
{
  if ($_POST["mail"]=="")
   {
    echo "Mail Giriniz";
  }
  
  else if ($_POST["oneri"]=="") {
    echo "Öneri Giriniz";
  }
  else{
    $mail = mysqli_real_escape_string($link, $_POST["mail"]);
    $oneri = mysqli_real_escape_string($link, $_POST["oneri"]);
      $query = "INSERT INTO oneriler (mail, oneri) 
    VALUES ('".$mail."' , '".$oneri."')";
   if( mysqli_query($link, $query)){
    header("Location: oneri.php");
   }
  }
}

?>


<head>
	<em  style="font-size: 30px;color:black; ">KİTAP ÖNERİ</em><br><br>
</head><br><br>
<div>
  Kitap önerileriniz için formu doldurunuz.
</div><br><br>
<div>

		<form method="post">

      <label for="mail">Mail Adresi</label><br><br>
        <input type="text" name="mail"   placeholder="mail adresi giriniz"><br><br>

        <label for="oneri">Kitap Öneri</label><br><br>
        <input type="text" name="oneri"  placeholder="kitap öneri giriniz"><br><br>

        <input type="submit" name="submit" value="Gönder">
        

    </form>

     
     
	</div>