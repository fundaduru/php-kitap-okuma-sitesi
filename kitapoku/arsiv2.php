<?php
include("header2.php");




?>

<style type="text/css">
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;

}
body{
  padding: 3rem;

}
.conteiner {
  border: solid 1px;
  margin: auto;
}
.conteiner .foto{
  display:flex;
  padding: 1rem;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
}
.conteiner .foto .resim{
  border: solid 1px;
  min-width: 200px;
  height: 400px;
  overflow: hidden;
  position: relative;
  cursor: pointer;
}
.conteiner .foto .resim .img{
  position: absolute;
  max-width: 100%;
  transition: transform 200ms ease-in-out;
}
.conteiner .foto .resim p{
  position: absolute;
  background: rgba(0, 0, 0, 0.5);
  color: white;
  padding: 1rem;
  width: 100%;
  height: 20%;
  top: 80%;
  display: flex;
  align-items: center;
  padding: 1rem;
  transition: all 200 ms ease-in-out;


}
.conteiner .foto .resim:hover p{
  top: 80%;

}
.conteiner .foto .resim:hover img{
  transform: scale(1.8) rotate(15deg) translateY(-10%);
  
}
</style>

<head></head>
<body> <div class="conteiner">
<div class="foto">

  <div class="resim"><a href="arsiv/baslangic.php"><img src="style/db.jpg"><p>Başlangıç</p> </div>

  <div class="resim" ><a href="arsiv/gulliver.php"> <img src="style/gg.jpg"><p>Gulliver'in Gezileri</p> </div>

  <div class="resim"><a href="arsiv/hpft.php"><img src="style/hpft.jpg"><p>Harry Potter ve Felsefe Raşı</p> </div>

  <div class="resim"><a href="arsiv/binbirgece.php"><img src="style/bgm.jpg"><p>Binbir Gece Masalları</p> </div>

  <div class="resim"><a href="arsiv/hpso.php"><img src="style/hpso.jpg"><p>Harry Potter ve Sırlar Odası</p> </div>

  <div class="resim"><a href="arsiv/kitleler.php"><img src="style/kip.jpg"><p>Kitleler Psikolojisi</p> </div>

  <div class="resim"><a href="arsiv/kkb.php"><img src="style/kkb.jpg"><p>Küçük Kara Balık</p> </div>

  <div class="resim"><a href="arsiv/kürkmantolumadonna.php"><img src="style/kmm.jpg"> <p>Kürk Mantolu Madonna</p> </div>

  <div class="resim"><a href="arsiv/küçükprens.php"><img src="style/kp.jpg"><p>Küçük Prens</p> </div>

  <div class="resim"><a href="arsiv/olumsaatleri.php"><img src="style/ös.jpg"><p>Ölüm Saatleri</p> </div>

  <div class="resim"><a href="arsiv/simyaci.php"><img src="style/simyaci.jpg"><p>Simyacı</p> </div>

  <div class="resim"><a href="arsiv/var.php"><img src="style/vm.jpg"><p>Var Mısın?</p> </div>
 
</div>
</div>


</body>



